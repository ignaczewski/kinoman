<?php   
declare(strict_types=1);

namespace Model;

class Date{
    public $day = array();
    public $day_name = array();
    public $day_num = array();
    public $month = array();

    function __construct() 
    {
       $this -> sevenDays();
       $this -> showDayName();
       $this -> showDayNum();
       $this -> showMonthName();
    }
    
    public function sevenDays()
    {
        for($i=0; $i<11; $i++){
            $this -> day[$i] = new \DateTime('now', new \DateTimeZone('UTC')); 
            $this -> day[$i]->add(new \DateInterval('P'.$i.'D'));  
        }
    }
    
    public function showDayName()
    {
        for($i=0; $i<11; $i++){
            $this -> day_name[$i] = $this-> day[$i]->format('D');  
            
            if($this -> day_name[$i] == "Mon"){
                $this -> day_name[$i] = "Pn";
            }
            elseif($this -> day_name[$i] == "Tue"){
                $this -> day_name[$i] = "Wt";
            }
            elseif ($this -> day_name[$i] == "Wed"){
                $this -> day_name[$i] = "Śr";
            }
            elseif ($this -> day_name[$i] == "Thu"){
                $this -> day_name[$i] = "Cz";
            }
            elseif ($this -> day_name[$i] == "Fri"){
                $this -> day_name[$i] = "Pt";
            }
            elseif ($this -> day_name[$i] == "Sat"){
                $this -> day_name[$i] = "Sb";
            }
            elseif ($this -> day_name[$i] == "Sun"){
                $this -> day_name[$i] = "Nd";    
            }
        }    
    }
    
    public function showDayNum()
    {
        for($i=0; $i<11; $i++)
        {
             $this -> day_num[$i] = $this -> day[$i]->format('d');    
        }
    }   
    
    public function showMonthName()
    {
        for($i=0; $i<11; $i++)
        {
            $this -> month[$i] = $this -> day[$i]->format('M'); 

            if ($this -> month[$i] == "Jan"){
                $this -> month[$i] = "STY";
            }
            elseif ($this -> month[$i] == "Feb"){
                $this -> month[$i] = "LUT";
            }
            elseif ($this -> month[$i] == "Mar"){
                $this -> month[$i] = "MAR";
            }
            elseif ($this -> month[$i] == "Apr"){
                $this -> month[$i] = "KWI";
            }
            elseif ($this -> month[$i] == "May"){
                $this -> month[$i] = "MAJ";
            }
            elseif ($this -> month[$i] == "Jun"){
                $this -> month[$i] = "CZE";
            }
            elseif ($this -> month[$i] == "Jul"){
                $this -> month[$i] = "LIP";
            }
            elseif ($this -> month[$i] == "Aug"){
                $this -> month[$i] = "SIE";
            }
            elseif ($this -> month[$i] == "Sep"){
                $this -> month[$i] = "WRZ";
            }
            elseif ($this -> month[$i] == "Oct"){
                $this -> month[$i] = "PAŹ";
            }
            elseif ($this -> month[$i] == "Nov"){
                $this -> month[$i] = "LIS";
            }
            elseif ($this -> month[$i] == "Dec"){
                $this -> month[$i] = "GRU";
            }
        }   
    }   
}


