<?php   
declare(strict_types=1);

namespace Controller;

use libs\Core\Controller as Controller;
use Controller\Login as Login;

class Contact extends Controller
{   
/* ---------------------------------------------------NEWSLETTER-------------------------------------------------------------- */
    
    protected function tryAddEmail()
    {
        $email = $_POST['email'];

        if(isset($_POST['email'])){
            $response['newsletter'] = Login::checkEmail($email);
            if($response['newsletter']['status'] == "ok"){
                $response['newsletter'] = Login::checkExistEmail($email,'newsletter');
            }

            if($response['newsletter']['status'] == "ok"){
                $this -> addEmail($email);
                $response['newsletter']['status'] = "ok";
                $response['newsletter']['feed'] = "Dziękujemy za zapisanie się do newslettera!";
            }
            echo json_encode($response);
            die();
        }else{
            header('Location: ');
        }
    }
    
    protected function addEmail($email)
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
   
    protected function trySendEmail()
    {
        $response['contact'] = $this -> validateContactBox();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message_txt = $_POST['message'];
        
        if($response['contact']['status'] == "ok"){
            require 'libs/PHPMailer/PHPMailerAutoload.php';
            require_once('libs/PHPMailer/class.phpmailer.php');    // dodanie klasy phpmailer
            require_once('libs/PHPMailer/class.smtp.php');    // dodanie klasy smtp

            $mail = new PHPMailer();    //utworzenie nowej klasy phpmailer
            $mail->CharSet = "UTF-8";
            $mail->From = "automat@cali-world.com";    //Pełny adres e-mail
            $mail->FromName = "Caliworld";    //imię i nazwisko lub nazwa użyta do wysyłania wiadomości
            $mail->AddReplyTo($email, $name); //adres e-mail nadawcy oraz jego nazwa
            $mail->Host = "s38.linuxpl.com"; //adres serwera pocztowego SMTP
            $mail->Mailer = "smtp";    //do wysłania zostanie użyty serwer SMTP
            $mail->SMTPAuth = true;    //włączenie autoryzacji do serwera SMTP
            $mail->Username = "automat@cali-world.com";    //nazwa użytkownika do skrzynki e-mail
            $mail->Password = "ag8CwjaP";    //hasło użytkownika do skrzynki e-mail
            $mail->Port = 587; //port serwera SMTP 
            $mail->Subject = "Nowe hasło";    //Temat wiadomości, można stosować zmienne i znaczniki HTML
            $mail->Body = $message_txt;    //Treść wiadomości, można stosować zmienne i znaczniki HTML 
            $mail->SMTPAutoTLS = false;   //wyłączenie TLS
            $mail->SMTPSecure = '';    // 
            $mail->AddAddress ('automat@cali-world.com',$name);    //adres skrzynki e-mail oraz nazwa
                                                                //adresata, do którego trafi wiadomość 
            $response['contact']['feed'] = "Dziękujemy za wysłanie wiadomości!";
            $response['contact']['status'] = "ok";   
        }
        echo json_encode($response);
        die();
    }
    
    protected function validateContactBox(){
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $message_txt = filter_input(INPUT_POST, 'message');

        if ((empty($name)) || (empty($message_txt))){
            $response['feed'] = "Wszystkie pola muszą zostać wypełnione!";
            $response['status'] = "error";
            return $response;
        }elseif (empty($email)){
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


