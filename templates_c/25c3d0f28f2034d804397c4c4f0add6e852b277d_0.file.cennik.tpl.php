<?php
/* Smarty version 3.1.30, created on 2018-08-15 21:59:52
  from "D:\Programy\xampp\htdocs\kinoman\view\cennik.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b748638a58e16_34908538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25c3d0f28f2034d804397c4c4f0add6e852b277d' => 
    array (
      0 => 'D:\\Programy\\xampp\\htdocs\\kinoman\\view\\cennik.tpl',
      1 => 1534363189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/menu/head.tpl' => 1,
    'file:view/menu/menu_admin.tpl' => 1,
    'file:view/menu/menu_log.tpl' => 1,
    'file:view/menu/menu.tpl' => 1,
    'file:view/footer.tpl' => 1,
  ),
),false)) {
function content_5b748638a58e16_34908538 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:view/menu/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Cennik"), 0, false);
?>

    <link rel="stylesheet" href="view/css/price-list-style.css">
</head>
<body>
<?php if ($_smarty_tpl->tpl_vars['zalogowany']->value == 'admin') {?>
    <?php $_smarty_tpl->_subTemplateRender("file:view/menu/menu_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } elseif ($_smarty_tpl->tpl_vars['zalogowany']->value == 'user') {?>
    <?php $_smarty_tpl->_subTemplateRender("file:view/menu/menu_log.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          
<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:view/menu/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>
    <div class="row">
        <div class="container-fluid">
            <div class="col-sm-12 hidden-xs" id="banner-container">
                <div class="banner">							
                    <div class="mainbanner" >
                        <img src="view/img/cennik.png" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <div class="row">
            <div class="price-list col-md-8 col-md-offset-2">
                <h3>Cennik</h3>
                <div class="table-responsive">      
                    <table>
                        <thead>
                            <tr id="day">
                                <th></th> <th>Poniedziałek - Czwartek</th> <th>Poniedziałek - Czwartek</th> <th>Piątek - Niedziela</th> <th>Piątek - Niedziela</th>
                            </tr>
                            <tr >						
                                <th></th> <th>(10-15)</th> <th>(15-23)</th> <th>(8-12)</th> <th>(12-22)</th>
                            </tr>
                        </thead>	
                        <tr>
                            <td>Normalny</td> <td>20zł</td> <td>22zł</td> <td>22zł</td> <td>24zł</td>
                        </tr>

                        <tr>
                            <td>Ulgowy*</td> <td>18zł</td> <td>20zł</td> <td>20zł</td> <td>22zł</td>
                        </tr>	

                        <tr>
                            <th colspan ="5">Seanse 3D</th>
                        </tr>		

                        <tr>
                            <td>Normalny</td> <td>22zł</td> <td>24zł</td> <td>24zł</td> <td>26zł</td>
                        </tr>

                        <tr>
                            <td>Ulgowy*</td> <td>20zł</td> <td>22zł</td> <td>22zł</td> <td>24zł</td>
                        </tr>			
                    </table>
                </div>
                <p>* bilet ulgowy przysługuje osobom do 26 roku życia po okazaniu legitymacji szkolnej/studenckiej.</p>
            </div>		
        </div>

        <div class="row">
            <div class="bargain-list col-md-8 col-md-offset-2">
                <h2>Promocje</h2>
                <h3>W dni powszednie skorzystaj z naszych ofert specjalnych! <a href="#">Sprawdź szegóły oferty</a>.</h3>
                <div class="table-responsive">      
                    <table>
                        <thead>
                            <tr>
                                <th>Poniedziałek</th> <th>Wtorek</th> <th>Środa</th> <th>Czwartek</th>
                            </tr>
                        </thead>	
                        <tr>
                            <td><a href="#">Bilety studenckie po 15zł</a></td> <td><a href="#">Bueno wtorki</a></td> <td><a href="#">Środy z Orange</a></td> <td><a href="#">Filmy 3D po 20zł</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <?php $_smarty_tpl->_subTemplateRender("file:view/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 src="view/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>	
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="view/js/scripts.js"><?php echo '</script'; ?>
>

</body>
</html>

<?php }
}
