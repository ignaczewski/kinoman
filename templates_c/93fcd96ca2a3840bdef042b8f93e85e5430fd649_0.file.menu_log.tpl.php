<?php
/* Smarty version 3.1.30, created on 2018-05-14 19:44:59
  from "D:\Programy\xampp\htdocs\webar-f\view\menu\menu_log.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af9cb1b443660_52605187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93fcd96ca2a3840bdef042b8f93e85e5430fd649' => 
    array (
      0 => 'D:\\Programy\\xampp\\htdocs\\webar-f\\view\\menu\\menu_log.tpl',
      1 => 1526318744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af9cb1b443660_52605187 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
    <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="col-lg-4 col-xs-12">
                <div class="logo">
                    <a  href="index.php"><img src="img/logo.png" alt="multikino" /></a>
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
                    <ul class="nav navbar-nav col-md-5 col-sm-8 col-xs-12" style="display:inline">
                        <li role="presentation"><a href="o_multikinie.php">O multikinie</a></li>
                        <li role="presentation"><a href="cennik.php">Cennik</a></li>
                        <li role="presentation"><a href="repertuar.php">Repertuar</a></li>
                        <li role="presentation"><a href="prevue.php">Zapowiedzi</a></li>
                    </ul>
                        
                    <div class="form-group col-md-4 hidden-sm hidden-xs" id="city">
                        <label for="sel1" id="sel-city">Wybierz miasto:</label>
                        <select class="form-control" id="sel1">
                            <option>Gdańsk</option>
                            <option>Gdynia</option>
                            <option>Grudziądz</option>
                            <option>Ostróda</option>
                            <option>Zadupie</option>
                        </select>
                    </div>						
                        
                    <ul class="nav navbar-nav navbar-right user-log col-lg-3 col-md-3 col-sm-4 col-xs-12" >
                        <li role="presentation" class="pull-right zrejestruj"><a href="script/logout.php">Wyloguj się</a></li>
                        <li role="presentation" class="pull-right zaloguj"><a href="#">Zobacz konto</a>							
                        </li>
                    </ul>	
                        
                </div>							
            </div>	
                
        </div>			
    </div>	
</header><?php }
}
