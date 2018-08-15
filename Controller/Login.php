<?php
declare(strict_types=1);

namespace Controller;

use libs\Core\Controller as Controller;

class Login extends Controller 
{ 
    public $nick; 
    public $pass;
    public $email;
    public $pass_hash;
    public $allOk = 0;

/* ---------------------------------------------------LOGOWANIE-------------------------------------------------------------- */
  
    public function tryLogin()
    {
    $response = array();
    $how_users = $this -> checkUserLogin();
    $pass = $_POST['pass'];
    
    if($how_users){
        if(password_verify($pass, $how_users['pass'])){
            $_SESSION['zalogowany'] = true;
            if($how_users['is_admin'] == 1){
                $_SESSION['admin'] = true;   
                $response['status'] = 'ok';
                $response['feed'] = 'Witaj Adminie!';
                echo json_encode($response); 
                die(); 
            }else{ 
                $response['status'] = 'ok';
                $response['feed'] = 'Udało Ci się zalogować!';
                echo json_encode($response);
                die();
            } 
        }else{
            $response['status'] = 'error';
            $response['feed'] = 'Niepoprawny login lub hasło!';
            echo json_encode($response);
            die();
        }
    }else{
       $response['status'] = 'error';
       $response['feed'] = 'Niepoprawny login lub hasło!';
       echo json_encode($response);
       die();
    }     
}

    public function checkUserLogin()
    {
        $nick = $_POST['nick'];
        
        try{
            $query = $this -> connection ->prepare('SELECT * FROM user WHERE nick = :nick');
            $query -> bindValue(':nick', $nick, \PDO::PARAM_STR);
            $query -> execute();
            
            return $query->fetch(\PDO::FETCH_ASSOC);
            
        }catch (Exception $ex){
            echo $e -> getMessage();
        }   
    }
    
    public function logoutUser()
    {   
        $_SESSION['zalogowany'] = false;
        $_SESSION['admin'] = false;   
        header('Location: /');
    }    
    
 /* -------------------------------------REJESTRACJA--------------------------------------------- */
    
    public static function checkIfUserLogin()
    {
        if(isset($_SESSION['zalogowany']) && (($_SESSION['zalogowany'])==true)) {
            header('Location: /kinoman/repertuar');
            exit();
        }else{
            return 1;  
        }
    }
    
    public function tryRegistration()
    {
        self::checkIfUserLogin();
//        $response = array(
//            'nick' => array(
//                'status' => 'ok', //'error
//                'feed' => 'error content'
//            )
//        );
        $response['nick'] = $this->checkNickLen($_POST['nick']);
        if($response['nick']['status'] == 'ok'){
            $response['nick'] = $this->checkExistUser($_POST['nick']);
        }
        
        $response['email'] = $this -> checkEmail($_POST['email']);
        if($response['email']['status'] == 'ok'){
            $response['email'] = $this->checkExistEmail($_POST['email'],'user');
        }
        
        $response['pass'] = $this -> checkPass($_POST['pass1'],$_POST['pass2']);
        $response['rules'] = $this -> checkRules($_POST['rules']);
        $response['captcha'] = $this -> checkCAPTCHA($_POST['captcha']);

        $podzespoly = array('nick','email','pass','rules','captcha');
        $allOK = true;
        foreach($podzespoly as $podzespol){
            if($response[$podzespol]['status'] == 'error'){
                $allOK = false;
            }
        }
      
        if($allOK){
            $this -> addUser($_POST['nick'],$_POST['email'],$_POST['pass1']);
            $_SESSION['komunikatSuccess'] = 'Udało się!!!';
            $_SESSION['zalogowany'] = true;
            $response['allOK'] = 1;
        }
        echo json_encode($response);
        die();
    }
//---------------------------------------------------Dodanie usuera-------------------------------------------
    public function addUser($nick,$email,$pass)
    {
        $password = password_hash($pass, PASSWORD_DEFAULT);

        try{
            $query = $this -> connection -> prepare("INSERT INTO user (ID, nick, pass, email ) VALUES (NULL, :nick, '$password', :email)");
            $query -> bindValue(':nick', $nick, \PDO::PARAM_STR);
            $query -> bindValue(':email', $email, \PDO::PARAM_STR);
            $query -> execute();
        }catch (Exception $ex){
            print_r($ex->getMessage());
            die();
        }        
    }
         //---------------------------------------------------Sprawdzenie dostępności email--------------------------------------------
    public function checkExistEmail($email,$dbName)
    {
        try{
            $query = $this -> connection -> prepare('SELECT ID FROM '.$dbName.' WHERE email = :email');
            $query -> bindValue(':email', $email, \PDO::PARAM_STR);
            $query -> execute();  

            $how_emails = $query -> rowCount();
            if($how_emails>0)
            {
                $response['feed'] = 'Podany email już został zarejestrowany!';
                $response['status'] = 'error';
            }else{
                $response['feed'] = '';
                $response['status'] = 'ok';
            }    
            return $response;
        }catch (Exception $ex){
            print_r($ex->getMessage());
            die();
        }        
    }
//---------------------------------------------------Sprawdzenie dostępności nicku--------------------------------------------
    public function checkExistUser($nick)
    {   
        try{
            $query = $this -> connection -> prepare('SELECT ID FROM user WHERE nick = :nick');
            $query -> bindValue(':nick', $nick, \PDO::PARAM_STR);
            $query -> execute();

            $how_nicks = $query->rowCount();
            if($how_nicks>0){
                $response['feed'] = 'Podany nick już istnieje!';
                $response['status'] = 'error';
            }else{
                $response['feed'] = '';
                $response['status'] = 'ok';
            }
            return $response;
        } catch (Exception $ex) {
            print_r($ex->getMessage());
            die();
        }    
    }
//---------------------------------------------------Walidacja nickname--------------------------------------------   
    public function checkNickLen($nick)
    {
        if(!isset($nick)){
            header('Location: /kinoman/rejestracja');
        }
        if(!preg_match('/^[a-zA-Z0-9]{3,20}+$/', $nick)){ 
            $response['feed'] = 'Nick powinien składać się z 3-20 znaków oraz nie może zawierać polskich znaków!';
            $response['status'] = 'error';
        }else{ 
            $response['feed'] = '';
            $response['status'] = 'ok';
        }
        return $response;
    }
    
//-------------------------------------------------------Walidacja email---------------------------------------------    
    public function checkEmail($email)
    {
        $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);

        if((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($email!=$emailB)){
            $response['feed'] = 'Podany email jest niepoprawny!';
            $response['status'] = 'error'; 
        }else{ 
            $response['feed'] = '';
            $response['status'] = 'ok'; 
        }     
        return $response;
    }
//---------------------------------------------------------Walidacja password------------------------------------------    
    public function checkPass($password1,$password2)
    {
        $pass1 = $password1;
        $pass2 = $password2;

        if ((strlen($pass1)<8) || (strlen($pass1)>20)){ 
            $response['feed'] = 'Hasło powinno składać się z 8-20 znaków!';
            $response['status'] = 'error';          
        }elseif($pass1 != $pass2){
            $response['feed'] = 'Podane hasła nie są identyczne!';
            $response['status'] = 'error';              
        }else{
            $response['feed'] = '';
            $response['status'] = 'ok'; 
        }     
        return $response;
    }
//-------------------------------------------------------Walidacja checkbox----------------------------------------   
    public function checkRules($rules)
    {
        if(($rules) == 'false'){
            $response['feed'] = 'Zaakceptuj regulamin!';
            $response['status'] = 'error';
        }else{
            $response['feed'] = '';
            $response['status'] = 'ok'; 
        }
        return $response;
    }
         //---------------------------------------------------------------Walidacja reCAPTCHA------------------------------------
    public function checkCAPTCHA($getCaptcha)
    {
        $captcha = $getCaptcha;
        $secret = "6Ldd7GkUAAAAAMqavbb5MWWSbcmw7l5XSMmLgQZH";
        
        $verify=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$captcha}");
        
        $captcha_success=json_decode($verify);
        if($captcha_success->success==false){
            $response['feed'] = 'Potwierdź, że nie jesteś botem!';
            $response['status'] = 'error'; 
        }else if ($captcha_success->success==true){
            $response['status'] = 'ok';
        }
        return $response;
    }
 /* ---------------------------------------------------NEWSLETTER-------------------------------------------------------------- */
    
    public function tryAddEmail()
    {
        $email = $_POST['email'];

        if(isset($_POST['email'])){
            $response['newsletter'] = $this -> checkEmail($email);
            if($response['newsletter']['status'] == "ok"){
                $response['newsletter'] = $this -> checkExistEmail($email,'newsletter');
            }
            if($response['newsletter']['status'] == "ok"){
                $this -> addEmail($email);
                $response['newsletter']['status'] = "ok";
                $response['newsletter']['feed'] = "Dziękujemy za zapisanie się do newslettera!";
           }
            echo json_encode($response);
            die();
            
        }else{
            header('Location: /kinoman/repertuar');
        }
    }
    
    public function addEmail($email)
    {
        try{
            $query = $this -> connection -> prepare("INSERT INTO newsletter (email) VALUES (:email)");
            $query -> bindValue(':email', $email, \PDO::PARAM_STR);
            $query -> execute();
        }catch (Exception $ex){
            print_r($ex->getMessage());
            die();
        }        
    } 
    
  /* ---------------------------------------------------Contact Email-------------------------------------------------------------- */
   
    public function trySendEmail()
    {
        $response['contact'] = $this -> validateContactBox();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message_txt = $_POST['message'];
        
        if($response['contact']['status'] == "ok"){
            require 'libs/PHPMailer/PHPMailerAutoload.php';
            require_once('libs/PHPMailer/class.phpmailer.php');    // dodanie klasy phpmailer
            require_once('libs/PHPMailer/class.smtp.php');    // dodanie klasy smtp

            $mail = new \PHPMailer();    //utworzenie nowej klasy phpmailer
            $mail->CharSet = "UTF-8";
            $mail->From = "automat@ignaczewski.com.pl";    //Pełny adres e-mail
            $mail->FromName = "Kinoman";    //imię i nazwisko lub nazwa użyta do wysyłania wiadomości
            $mail->AddReplyTo($email, $name); //adres e-mail nadawcy oraz jego nazwa
            $mail->Host = "s64.linuxpl.com"; //adres serwera pocztowego SMTP
            $mail->Mailer = "smtp";    //do wysłania zostanie użyty serwer SMTP
            $mail->SMTPAuth = true;    //włączenie autoryzacji do serwera SMTP
            $mail->Username = "automat@ignaczewski.com.pl";    //nazwa użytkownika do skrzynki e-mail
            $mail->Password = "test123";    //hasło użytkownika do skrzynki e-mail
            $mail->Port = 587; //port serwera SMTP 
            $mail->Subject = "Wiadomość od klienta";    //Temat wiadomości, można stosować zmienne i znaczniki HTML
            $mail->Body = $message_txt;    //Treść wiadomości, można stosować zmienne i znaczniki HTML 
            $mail->SMTPAutoTLS = false;   //wyłączenie TLS
            $mail->SMTPSecure = '';    // 
            $mail->AddAddress ('automat@ignaczewski.com.pl',$name);    //adres skrzynki e-mail oraz nazwa
                                                                //adresata, do którego trafi wiadomość 
            $response['contact']['feed'] = "Dziękujemy za wysłanie wiadomości!";
            $response['contact']['status'] = "ok";
            
            if(!$mail->Send()) {
                echo 'Some error... / Jakiś błąd...';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
                exit;
            }
        }
        echo json_encode($response);
        die();
    }
    
    public function validateContactBox(){
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $message_txt = filter_input(INPUT_POST, 'message');

        if((empty($name)) || (empty($message_txt))){
            $response['feed'] = "Wszystkie pola muszą zostać wypełnione!";
            $response['status'] = "error";
            return $response;
        }elseif(empty($email)){
            $response['feed'] = "Podany adres email jest niepoprawny!";
            $response['status'] = "error";
            return $response;
        }else{
            $response['feed'] = "";
            $response['status'] = "ok";
            return $response;
        }
    } 
}
