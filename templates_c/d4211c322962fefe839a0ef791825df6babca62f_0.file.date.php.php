<?php
/* Smarty version 3.1.30, created on 2018-05-15 14:35:57
  from "D:\Programy\xampp\htdocs\webar-f\view\script\date.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afad42d7e5d81_77096692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4211c322962fefe839a0ef791825df6babca62f' => 
    array (
      0 => 'D:\\Programy\\xampp\\htdocs\\webar-f\\view\\script\\date.php',
      1 => 1526386085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afad42d7e5d81_77096692 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php   

';?>class Date{
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
        for($i=0; $i<11; $i++)
        {
            $this -> day[$i] = new DateTime('now', new DateTimeZone('UTC')); 
            $this -> day[$i]->add(new DateInterval('P'.$i.'D'));
            
        }
    }
    
    private function showDayName()
    {
        for($i=0; $i<11; $i++)
        {
            $this -> day_name[$i] = $this-> day[$i]->format('D');  
            
            if ($this -> day_name[$i] == "Mon") $this -> day_name[$i] = "Pn";
            elseif($this -> day_name[$i] == "Tue") $this -> day_name[$i] = "Wt";
            elseif ($this -> day_name[$i] == "Wed") $this -> day_name[$i] = "Śr";
            elseif ($this -> day_name[$i] == "Thu") $this -> day_name[$i] = "Cz";
            elseif ($this -> day_name[$i] == "Fri") $this -> day_name[$i] = "Pt";
            elseif ($this -> day_name[$i] == "Sat") $this -> day_name[$i] = "Sb";
            elseif ($this -> day_name[$i] == "Sun") $this -> day_name[$i] = "Nd"; 
            
        }    
    }
    
    private function showDayNum()
    {
        for($i=0; $i<11; $i++)
        {
             $this -> day_num[$i] = $this -> day[$i]->format('d'); 
             
        }
    }   
    
    private function showMonthName()
    {
        for($i=0; $i<11; $i++)
        {
            $this -> month[$i] = $this -> day[$i]->format('M'); 

            if ($this -> month[$i] == "Jan") $this -> month[$i] = "STY";
            elseif ($this -> month[$i] == "Feb") $this -> month[$i] = "LUT";
            elseif ($this -> month[$i] == "Mar") $this -> $month[$i] = "MAR";
            elseif ($this -> month[$i] == "Apr") $this -> month[$i] = "KWI";
            elseif ($this -> month[$i] == "May") $this -> month[$i] = "MAJ";
            elseif ($this -> month[$i] == "Jun") $this -> month[$i] = "CZE";
            elseif ($this -> month[$i] == "Jul") $this -> month[$i] = "LIP";
            elseif ($this -> month[$i] == "Aug") $this -> month[$i] = "SIE";
            elseif ($this -> month[$i] == "Sep") $this -> month[$i] = "WRZ";
            elseif ($this -> month[$i] == "Oct") $this -> month[$i] = "PAŹ";
            elseif ($this -> month[$i] == "Nov") $this -> month[$i] = "LIS";
            elseif ($this -> month[$i] == "Dec") $this -> month[$i] = "GRU";
            
        }   
    }   
}


<?php }
}
