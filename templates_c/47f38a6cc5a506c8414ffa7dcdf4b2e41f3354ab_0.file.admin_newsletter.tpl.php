<?php
/* Smarty version 3.1.30, created on 2018-08-15 21:58:50
  from "D:\Programy\xampp\htdocs\kinoman\view\admin_newsletter.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b7485fa034613_62398222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47f38a6cc5a506c8414ffa7dcdf4b2e41f3354ab' => 
    array (
      0 => 'D:\\Programy\\xampp\\htdocs\\kinoman\\view\\admin_newsletter.tpl',
      1 => 1534363114,
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
function content_5b7485fa034613_62398222 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:view/menu/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Newsletter"), 0, false);
?>

    <link rel="stylesheet" href="view/css/admin_panel.css">
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
<main>  
    <div class="container">
        <div class="table_newsletter">
            <table class="table-responsive">
                <thead>
                    <tr>
                        <th colspan="2">Ilość zapisanych email do newslettera:  <?php echo count($_smarty_tpl->tpl_vars['emailsNewsletter']->value);?>
</th>
                    </tr>
                    <tr> 
                        <th>ID</th> <th>Email</th> 
                    </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['emailsNewsletter']->value, 'emailNewsletter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['emailNewsletter']->value) {
?>
                    <tr> <td><?php echo $_smarty_tpl->tpl_vars['emailNewsletter']->value['id'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['emailNewsletter']->value['email'];?>
</td> </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </table>
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
</html><?php }
}
