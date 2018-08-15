<?php
/* Smarty version 3.1.30, created on 2018-08-15 22:56:21
  from "D:\Programy\xampp\htdocs\kinoman\view\rejestracja.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b749375d1e352_35855899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '474dac5edea3bb0aca6fe61cfc1d3aa726c53ed4' => 
    array (
      0 => 'D:\\Programy\\xampp\\htdocs\\kinoman\\view\\rejestracja.tpl',
      1 => 1534362901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/menu/head.tpl' => 1,
    'file:view/menu/menu_log.tpl' => 1,
    'file:view/menu/menu.tpl' => 1,
    'file:view/footer.tpl' => 1,
  ),
),false)) {
function content_5b749375d1e352_35855899 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:view/menu/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Rejestracja"), 0, false);
?>

    <link rel="stylesheet" href="view/css/registration.css">
</head>
<body>

    <?php if ($_smarty_tpl->tpl_vars['zalogowany']->value == 'admin') {?>
        <?php echo header('Location: /repertuar');?>

    <?php } elseif ($_smarty_tpl->tpl_vars['zalogowany']->value == 'user') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:view/menu/menu_log.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("file:view/menu/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }?>

    <div class="container">
        <div class="reg-form col-sm-6 col-sm-offset-3">
            <span class="statement" id="success"></span> 
            <div class="reg-box">
                <form method="post" action="/kinoman/registration">
                    <p>Nickname:</p>
                    <input type="text" id="nickReg"  name="nick"/>
                    <span class="error_small" id="nick_errorReg"></span> 
                   
                    <p>Email:</p>
                    <input type="email" id="emailReg" name="email"/>
                    <span class="error_small" id="email_errorReg"></span> 
                        
                    <p>Hasło:</p>
                    <input type="password" id="pass1Reg" name ="pass1"/>
                    <span class="error_small" id="pass_errorReg"></span>
                    
                    <p>Powtórz hasło:</p>
                    <input type="password" id="pass2Reg" name ="pass2"/>
                        
                    <label class="check">
                        <input type="checkbox" name="rules" id="rulesReg"/> 
                        Akceptuję regulamin
                    </label>
                    <span class="error_small" id="rules_errorReg"></span>
                        
                    <div class="g-recaptcha" data-sitekey="6Ldd7GkUAAAAAAJIhzkuyfzZYBSeUnMomtyCDAfO"></div>
                    <span class="error_small" id="captcha_errorReg"></span>
                        
                    <input type="button" id="buttonReg" name="registration" value="Zarejestruj się"/>
                </form>
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
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="view/js/scripts.js"><?php echo '</script'; ?>
>
</body>
</html>
	<?php }
}
