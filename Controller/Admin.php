<?php
declare(strict_types=1);

namespace Controller;

use libs\Core\Controller as Controller;
use libs\Core\Request as Request;
use Model\Date as Date;

class Admin extends Controller 
{
    
 
/* ---------------------------------------------------DODAWANIE FILMU-------------------------------------------------------------- */

    protected function addFilm()
    {
        try{
            $sql = 'INSERT INTO filmy (ID, title, title_org, production, genre, premiere, length, rec_age, description) VALUES (NULL,:title,:title_org,:production,:genre,:premiere,:length,:rec_age,:description)';
            $query = $this -> connection -> prepare($sql);
            $query -> bindValue(':title', $_POST['title'], \PDO::PARAM_STR);
            $query -> bindValue(':title_org', $_POST['title_org'], \PDO::PARAM_STR);
            $query -> bindValue(':production', $_POST['production'], \PDO::PARAM_STR);
            $query -> bindValue(':genre', $_POST['genre'], \PDO::PARAM_STR);
            $query -> bindValue(':premiere', $_POST['premiere'], \PDO::PARAM_STR);
            $query -> bindValue(':length', $_POST['length'], \PDO::PARAM_INT);
            $query -> bindValue(':rec_age', $_POST['rec_age'], \PDO::PARAM_STR);
            $query -> bindValue(':description', $_POST['description'], \PDO::PARAM_STR);
            $query -> execute();
            $this->uploadImage($_POST['title']);
           
            $film = $this ->getOneRowData(NULL, $_POST['title']);
            header('Location: /film/'.$film['ID']);
            exit;
        }catch (Exception $ex){
            print_r($ex->getMessage());
            die();
        } 
    }
    
    public function uploadImage($title)
    {
        try{
            $file = $_FILES['image'];
            
            $fileName = $_FILES['image']['name'];
            $fileTmpName = $_FILES['image']['tmp_name'];
            $fileSize = $_FILES['image']['size'];
            $fileError = $_FILES['image']['error'];
            $fileType = $_FILES['image']['type'];

            $fileExt = explode('.', $fileName);
            $fileAcutalExt = strtolower(end($fileExt));

            $allowed = array('jpg', 'jpeg', 'png');

            if(in_array($fileAcutalExt, $allowed)){
                if($fileError === 0){
                   if($fileSize < 30000000){
                       $title = str_replace(':', '', $title);
                       $fileNameNew = $title.".".$fileAcutalExt;
                       $fileDestination = 'view/files/'.$fileNameNew;
                       move_uploaded_file($fileTmpName, $fileDestination);
                   }else{
                       throw new \RuntimeException('Exceeded filesize limit.');  
                   }
                }else{
                    throw new \RuntimeException('Unknown errors.');   
                }
            }else{
                throw new \RuntimeException('Invalid parameters.');    
            }
        }catch (\RuntimeException $e) {

            echo $e->getMessage();
        }
    }
    
    public function viewFilm()
    {
        $repertuarDate = new Date();
        $zalogowany = $this -> checkIfUserAdmin();
        
        $filmID = Request::get('id');
        $filmData = $this->getOneRowData($filmID);
        $filmImage = str_replace(':', '', $filmData['title']);
        
        $this -> view -> assign('repDate', $repertuarDate);
        $this -> view -> assign('zalogowany', $zalogowany);
        $this -> view -> assign('filmData', $filmData);
        $this -> view -> assign('filmImage', $filmImage);
        $this -> view -> display('view/film.tpl');
    }
    
    protected function getOneRowData($id=NULL, $title=NULL)
    {
        $sql = "SELECT * FROM filmy WHERE ID = :id OR title = :title";
        $query = $this -> connection -> prepare($sql);
        $query -> bindValue(':id', $id);
        $query -> bindValue(':title', $title);
        $query->execute();
        return $query -> fetch(); 
    }
    
    
    protected function checkIfUserAdmin()
    {      
        if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany'] == true))
        {
            if ((isset($_SESSION['admin'])) && ($_SESSION['admin'] == true)){
                return 'admin'; 
            } else{   
                return 'user';    
            }   
        }else{
            return null;  
        }      
    }
}
