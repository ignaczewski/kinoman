<?php
/* Smarty version 3.1.30, created on 2018-08-15 16:13:55
  from "D:\Programy\xampp\htdocs\kinoman\view\build.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b743523de81f2_90018692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fa1c1b9d8b25d0a5986fc76e985a52547aba0c5' => 
    array (
      0 => 'D:\\Programy\\xampp\\htdocs\\kinoman\\view\\build.tpl',
      1 => 1534342414,
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
function content_5b743523de81f2_90018692 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:view/menu/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Strona w budowie"), 0, false);
?>

    <link rel="stylesheet" href="view/css/build-style.css">
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
    <section>
        <div class="container">	
            <div class="content col-md-10 col-md-offset-1 col-sm-12">
                <article class="row">
                    <div class="one-build col-sm-12">	
                        <div class="build-title col-md-12">
                            <h2>Strona w budowie</h2>
                        </div>
                        <div class="build-content col-xs-12">
                            <div class="build-img col-md-5 col-sm-5 col-xs-4">
                                <img src="/view/img/budowa.png" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="build-description col-md-7 col-sm-7 col-xs-8">
                                <h3>Przepraszamy za utrudnienia!</h3>
                                <p>Zapraszamy niebawem</p>
                            </div>
                        </div>
                    </div>	
                </article>
            </div>
        </div>
    </section>
</main>
<?php $_smarty_tpl->_subTemplateRender("file:view/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="view/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>	
<?php echo '<script'; ?>
 src="view/js/jquery.scrollTo.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="view/js/scrollup.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="view/js/scripts.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body><?php }
}
