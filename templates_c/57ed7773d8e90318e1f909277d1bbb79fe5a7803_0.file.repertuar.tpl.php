<?php
/* Smarty version 3.1.30, created on 2018-08-15 23:00:51
  from "D:\Programy\xampp\htdocs\kinoman\view\repertuar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b749483dba626_82350093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57ed7773d8e90318e1f909277d1bbb79fe5a7803' => 
    array (
      0 => 'D:\\Programy\\xampp\\htdocs\\kinoman\\view\\repertuar.tpl',
      1 => 1534364080,
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
function content_5b749483dba626_82350093 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:view/menu/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Repertuar"), 0, false);
?>

    <link rel="stylesheet" href="view/css/repertoire.css">
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
    <div class="container-fluid">
        <div class="row navigation col-xs-12">         
            <ul class="week">
                <li class="day"><a href="#">	<h1><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_name[0];?>
</h1> <h2><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_num[0];?>
</h2> <p><?php echo $_smarty_tpl->tpl_vars['repDate']->value->month[0];?>
</p></a></li>
                <li class="day"><a href="#">	<h1><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_name[1];?>
</h1> <h2><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_num[1];?>
</h2> <p><?php echo $_smarty_tpl->tpl_vars['repDate']->value->month[1];?>
</p></a></li>
                <li class="day"><a href="#">	<h1><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_name[2];?>
</h1> <h2><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_num[2];?>
</h2> <p><?php echo $_smarty_tpl->tpl_vars['repDate']->value->month[2];?>
</p></a></li>
                <li class="day"><a href="#">	<h1><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_name[3];?>
</h1> <h2><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_num[3];?>
</h2> <p><?php echo $_smarty_tpl->tpl_vars['repDate']->value->month[3];?>
</p></a></li>
                <li class="day"><a href="#">	<h1><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_name[4];?>
</h1> <h2><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_num[4];?>
</h2> <p><?php echo $_smarty_tpl->tpl_vars['repDate']->value->month[4];?>
</p></a></li>
                <li class="day"><a href="#">	<h1><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_name[5];?>
</h1> <h2><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_num[5];?>
</h2> <p><?php echo $_smarty_tpl->tpl_vars['repDate']->value->month[5];?>
</p></a></li>
                <li class="day"><a href="#">	<h1><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_name[6];?>
</h1> <h2><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_num[6];?>
</h2> <p><?php echo $_smarty_tpl->tpl_vars['repDate']->value->month[6];?>
</p></a></li>
                <li class="day"><a href="#">	<h1><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_name[7];?>
</h1> <h2><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_num[7];?>
</h2> <p><?php echo $_smarty_tpl->tpl_vars['repDate']->value->month[7];?>
</p></a></li>
                <li class="day day-dis"><a href="#">	<h1><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_name[8];?>
</h1> <h2><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_num[8];?>
</h2> <p><?php echo $_smarty_tpl->tpl_vars['repDate']->value->month[8];?>
</p></a></li>
                <li class="day day-dis"><a href="#">	<h1><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_name[9];?>
</h1> <h2><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_num[9];?>
</h2> <p><?php echo $_smarty_tpl->tpl_vars['repDate']->value->month[9];?>
</p></a></li>
                <li class="day day-dis"><a href="#">	<h1><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_name[10];?>
</h1> <h2><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_num[10];?>
</h2> <p><?php echo $_smarty_tpl->tpl_vars['repDate']->value->month[10];?>
</p></a></li>
            </ul>
        </div>
    </div>   
    <div class="container">
        <div class="repertoire col-xs-12">
            <div class="repertoire-desc row hidden-xs col-sm-12">
                <div class="time-show col-xs-9 col-xs-offset-3 col-sm-6 col-sm-offset-6">
                    <div class="morning col-xs-4">
                        <h1>Rano</h1>
                    </div>
                    <div class="afternoon col-xs-4">
                        <h1>Po południe</h1>
                    </div>
                    <div class="evening col-xs-4">
                        <h1>Wieczór</h1>
                    </div>		
                </div>
            </div>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['films']->value, 'film');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['film']->value) {
?>
                <div class="row one-show col-xs-12">
                    <div class="film-title col-xs-5 col-sm-3">
                        <a href="film/<?php echo $_smarty_tpl->tpl_vars['film']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['film']->value['title'];?>
</a>
                    </div>
                    <div class="film-desc hidden-xs col-sm-3">
                        <p>Czas trwania: <?php echo $_smarty_tpl->tpl_vars['film']->value['length'];?>
min</p>
                        <p>Zalecany wiek: <?php echo $_smarty_tpl->tpl_vars['film']->value['rec_age'];?>
</p>
                        <p>Gatunek: <?php echo $_smarty_tpl->tpl_vars['film']->value['genre'];?>
</p>
                    </div>
                    <div class="film-time-show col-xs-7 col-sm-6">
                        <div class="morning-film col-xs-4">
                            <a href="#" data-toggle="modal" data-target="#myModal">9:15</a> <a href="#" data-toggle="modal" data-target="#myModal">11:30</a> <a href="#" data-toggle="modal" data-target="#myModal">13:00</a>
                        </div>
                        <div class="afternoon-film col-xs-4">
                            <a href="#" data-toggle="modal" data-target="#myModal">15:15</a> <a href="#" data-toggle="modal" data-target="#myModal">16:45</a> <a href="#" data-toggle="modal" data-target="#myModal">18:00</a>
                        </div>
                        <div class="evening-film col-xs-4">
                            <a href="#" data-toggle="modal" data-target="#myModal">19:15</a> <a href="#" data-toggle="modal" data-target="#myModal">20:00</a> <a href="#" data-toggle="modal" data-target="#myModal">21:30</a>
                        </div>
                    </div>
                </div>            
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
            <h4 class="modal-title" id="myModalLabel">Zarezerwuj/kup bilet</h4>
          </div>
          <div class="modal-body">
            <p>Zarezerwuj miejsca albo kup bilety i zapłać przez Internet.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default">Zarezerwuj</button>
            <button type="button" class="btn btn-default">Kup</button>
          </div>
        </div>
      </div>
    </div>

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
</html><?php }
}
