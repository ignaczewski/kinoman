<?php
/* Smarty version 3.1.30, created on 2018-08-15 15:15:21
  from "D:\Programy\xampp\htdocs\kinoman\view\menu\menu_admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b74276954a2f5_26786223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bbcd24ac0534631d26838ed47c44bbdcbfa3de3' => 
    array (
      0 => 'D:\\Programy\\xampp\\htdocs\\kinoman\\view\\menu\\menu_admin.tpl',
      1 => 1534338557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b74276954a2f5_26786223 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
    <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="col-lg-4 col-xs-12">
                <div class="logo">
                    <a  href="/"><img src="/view/img/logo.png" alt="multikino" /></a>
                </div>
            </div>
            <div class="menu row col-lg-8 col-xs-12">
                <div class="navbar-header ">	
                    <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Rozwiń nawigację</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                    
                <div class="navbar-collapse collapse " id="bs-example-navbar-collapse-1">    
                    <ul class="nav navbar-nav col-md-5 col-sm-6 col-xs-12" style="display:inline">
                        <li role="presentation"><a href="/o_kinomanie">O kinomanie</a></li>
                        <li role="presentation"><a href="/cennik">Cennik</a></li>
                        <li role="presentation"><a href="/repertuar">Repertuar</a></li>
                        <li role="presentation"><a href="/zapowiedzi">Zapowiedzi</a></li>
                    </ul>
                    
                    <div class="btn-group col-md-2 col-md-offset-2 col-sm-1">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Panel admina
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/admin_newsletter">Newsletter</a>
                            <a class="dropdown-item" href="/admin_film">Dodaj film</a>
                            <a class="dropdown-item" href="/build">Dodaj osobę</a>
                            <a class="dropdown-item" href="/build">Dodaj recenzję</a>
                            <a class="dropdown-item" href="/build">Dodaj ...</a>
                        </div>
                    </div>                        						
                        
                    <ul class="nav navbar-nav navbar-right user-log col-lg-3 col-md-3 col-sm-4 col-xs-12" >
                        <li role="presentation" class="pull-right"><a href="/logout">Wyloguj się</a></li>
                    </ul>	  
                </div>							
            </div>	    
        </div>			
    </div>  
</header><?php }
}
