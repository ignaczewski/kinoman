<?php
/* Smarty version 3.1.30, created on 2018-05-15 11:50:04
  from "D:\Programy\xampp\htdocs\webar-f\view\rejestracja.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afaad4cd3c1b2_98172914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '156cdea7f1c3a286196127d37708f4064e85767f' => 
    array (
      0 => 'D:\\Programy\\xampp\\htdocs\\webar-f\\view\\rejestracja.tpl',
      1 => 1526377610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/menu/menu_admin.tpl' => 1,
    'file:view/menu/menu_log.tpl' => 1,
    'file:view/menu/menu.tpl' => 1,
    'file:view/footer.tpl' => 1,
  ),
),false)) {
function content_5afaad4cd3c1b2_98172914 (Smarty_Internal_Template $_smarty_tpl) {
?>


<!DOCTYPE HTML>
<html lang="pl">
<head>

<meta charset="utf-8"/>
<title>Multikino</title>
<meta name="description" content="Obejrzyj najnowsze filmy w najniższych cenach!"/>
<meta name="keywords" content="film, filmy, kino, hit, kinoman, kinomaniak, ekran"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


 <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>

<link rel="stylesheet" href="view/css/menu-footer-style.css">
<link rel="stylesheet" href="view/css/registration.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">


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

    <div class="container">
        <div class="reg-form col-sm-6 col-sm-offset-3">
            <div class="reg-box">
                <form method="post">
                    <p>Nickname:</p>
                    <input type="text" value="" name="nick"/>
                    
                    
                    
                        
                    <p>Email:</p>
                    <input type="email" value="" name="email"/>
                    
                    
                        
                    <p>Hasło:</p>
                    <input type="password" value="" name ="pass1"/>
                    
                               
                        
                    <p>Powtórz hasło:</p>
                    <input type="password" value="" name ="pass2"/>
                        
                    <label class="check">
                        <input type="checkbox" name="rules" /> Akceptuję regulamin
                    </label>
                   
                        
                    <div class="g-recaptcha" data-sitekey="6Ld9DFMUAAAAADPSdZzPCcmzWIOqwpbnK9X3kA_7"></div>
                                    
                        
                    <input type="submit" name="registration" value="Zarejestruj się"/>
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
 src="view/js/sticky-menu.js"><?php echo '</script'; ?>
>
</body>
</html>
	<?php }
}
