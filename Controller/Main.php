<?php
namespace Controller;

use libs\Core\Controller as Controller;
use libs\Controller\Admin as Admin;
use Model\Date as Date;


class Main extends Controller 
{       
    public function view()
    {
        $zalogowany = $this -> checkIfUserAdmin();
        $this -> view -> assign('zalogowany', $zalogowany);
        $this -> view -> display('view/main.tpl');
    }
    
    public function cennikView()
    {   
        $zalogowany = $this -> checkIfUserAdmin();
        $this -> view -> assign('zalogowany', $zalogowany);
        $this -> view -> display('view/cennik.tpl');
    }
      
    public function repertuarView()
    {   
        $zalogowany = $this -> checkIfUserAdmin();
        $repertuarDate = new Date();
        
        $films = $this-> getAllData('filmy');
        
        $this -> view -> assign('repDate', $repertuarDate);
        $this -> view -> assign('films', $films);
        $this -> view -> assign('zalogowany', $zalogowany);
        $this -> view -> display('view/repertuar.tpl');
    }    
    
    public function zapowiedziView()
    {   
        $zalogowany = $this -> checkIfUserAdmin();
        
        $films = $this-> getAllData('filmy');
        foreach ($films as $film){
            $filmsImage[$film['ID']] = str_replace(':', '', $film['title']);
        }
               
        $this -> view -> assign('films', $films);
        $this -> view -> assign('filmsImage', $filmsImage);
        $this -> view -> assign('zalogowany', $zalogowany);
        $this -> view -> display('view/zapowiedzi.tpl');
    }      
     
    public function o_multikinieView()
    {   
        $zalogowany = $this -> checkIfUserAdmin();
        $this -> view -> assign('zalogowany', $zalogowany);
        $this -> view -> display('view/o_multikinie.tpl');
    }      
 
    public function filmView()
    {   
        $zalogowany = $this -> checkIfUserAdmin();
        $repertuarDate = new Date();
        
        $this -> view -> assign('repDate', $repertuarDate);
        $this -> view -> assign('zalogowany', $zalogowany);
        $this -> view -> display('view/film.tpl');
    }   

    public function rejestracjaView()
    {   
        $zalogowany = $this -> checkIfUserAdmin();
        $this -> view -> assign('zalogowany', $zalogowany);
        
        $smartyView = 'view/rejestracja.tpl';
        $this -> checkIfUserLogin($smartyView);
    }   
    
    public function adminNewsletterView()
    {   
        $zalogowany = $this -> checkIfUserAdmin();
        $emailsNewsletter = $this -> getAllData('newsletter');
        if($zalogowany == "admin"){       
            $this -> view -> assign('emailsNewsletter', $emailsNewsletter);
            $this -> view -> assign('zalogowany', $zalogowany );
            $this -> view -> display('view/admin_newsletter.tpl');
        }else{
            $this -> repertuarView();
        }
    }  
    
    public function buildView()
    {   
        $zalogowany = $this -> checkIfUserAdmin();
        $this -> view -> assign('zalogowany', $zalogowany );
        $this -> view -> display('view/build.tpl');
    }    
    
    public function getAllData($table)
    {   
        $query = $this -> connection -> prepare("SELECT * FROM $table");
        $query -> execute();

        return $query -> fetchAll();
    }  

    public function addFilmView()
    {   
        $zalogowany = $this -> checkIfUserAdmin();
        if($zalogowany == "admin"){       
            $this -> view -> assign('zalogowany', $zalogowany);
            $this -> view -> display('view/add_film.tpl');
        }else{
            $this -> repertuarView();
        }
    }        
    
    
   public function checkIfUserAdmin()
    {      
        if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany'] == true))
        {
            if((isset($_SESSION['admin'])) && ($_SESSION['admin'] == true)){
                return 'admin'; 
            } else{   
                return 'user';    
            }   
        }else{
            return null;  
        }      
    }
    
    public function checkIfUserLogin($inducedAdress)
    {
        if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany'] == true)){
            return $this -> repertuarView();
        }else{
            return $this -> view -> display($inducedAdress);
        }   
    }
}
