<?php
/* Smarty version 3.1.30, created on 2018-08-15 22:11:53
  from "D:\Programy\xampp\htdocs\kinoman\view\o_multikinie.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b74890982b9c8_17926634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcf15c06105ee4d3cb2583c19a6fb52f29642703' => 
    array (
      0 => 'D:\\Programy\\xampp\\htdocs\\kinoman\\view\\o_multikinie.tpl',
      1 => 1534363906,
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
function content_5b74890982b9c8_17926634 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:view/menu/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"O kinomanie"), 0, false);
?>

    <link rel="stylesheet" href="view/css/about-us-style.css">
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
            <section class="row"> 
                <div class="about-us col-md-12 ">
                <h3>O kinomanie</h3>
                <h4>Najważniejsze informacje w jednym miejscu</h4>
                    <div class="img-kino col-md-12">
                        <img src="view/img/sala_kinowa.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                    </div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#Gdansk" role="tab" data-toggle="tab">Gdańsk</a></li>
                        <li><a href="#Gdynia" role="tab" data-toggle="tab">Gdynia</a></li>
                        <li><a href="#Grudziadz" role="tab" data-toggle="tab">Grudziądz</a></li>
                        <li><a href="#Ostroda" role="tab" data-toggle="tab">Ostróda</a></li>
                        <li><a href="#NewYork" role="tab" data-toggle="tab">Nowy Jork</a></li>
                    </ul>
                    <div class="tab-content row">
                    <div class="tab-pane active" id="Gdansk">
                        <div class="about-us-description col-lg-8 col-md-7">
                            <h4>Kinoman w Gdańsku</h4>
                            <p>Ut eget tellus justo. Donec blandit sagittis diam, eget euismod dolor laoreet ac. Phasellus consequat risus id felis fringilla bibendum. Donec ornare, mauris at venenatis ullamcorper, libero urna lobortis quam, vel posuere tellus est ac enim. Suspendisse potenti. Vivamus sollicitudin accumsan velit. Aliquam eu metus fermentum, dignissim nisl quis, egestas massa. Mauris vel nunc nisl. Integer nibh nisl, dictum nec blandit eget, ornare eget eros. Ut dapibus interdum magna et suscipit. Nunc luctus diam dui, sit amet mollis sapien vehicula id. Sed tincidunt sit amet ligula nec feugiat. Praesent aliquet accumsan massa quis euismod.</p>
                            <p>Aliquam consequat vel arcu ut lacinia. Curabitur nec dolor nec nunc maximus euismod. In sed elit id mauris luctus accumsan in et turpis. Sed maximus metus diam, sit amet elementum lectus iaculis eget. Nullam in dignissim nisl. Aliquam facilisis sapien nulla, ac pharetra metus ultrices id. In varius sapien eget urna fringilla lacinia. Donec facilisis pulvinar risus, interdum pharetra felis imperdiet et. Proin efficitur lacus consequat lectus scelerisque, at pulvinar est auctor. Aliquam pretium risus eu massa mattis consequat. Fusce nec dolor in dolor mollis sodales nec ut augue. Vestibulum in tellus nec arcu blandit dignissim. Aenean facilisis et magna nec pharetra. Aliquam blandit metus ut sollicitudin egestas.</p>
                        </div>
                        <div class="about-us-map col-lg-4 col-md-5 col-sm-12 hidden-xs">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1551.1847050232793!2d18.626002904506855!3d54.37198238135891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd749c2215e9b7%3A0x1ad56b08dcf2edfb!2sMultikino!5e0!3m2!1spl!2spl!4v1519124096670" width="350" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                         </div>		
                    </div>

                    <div class="tab-pane" id="Gdynia">
                        <div class="about-us-description col-lg-8 col-md-7">
                            <h4>Kinoman w Gdanii</h4>
                            <p>Ut eget tellus justo. Donec blandit sagittis diam, eget euismod dolor laoreet ac. Phasellus consequat risus id felis fringilla bibendum. Donec ornare, mauris at venenatis ullamcorper, libero urna lobortis quam, vel posuere tellus est ac enim. Suspendisse potenti. Vivamus sollicitudin accumsan velit. Aliquam eu metus fermentum, dignissim nisl quis, egestas massa. Mauris vel nunc nisl. Integer nibh nisl, dictum nec blandit eget, ornare eget eros. Ut dapibus interdum magna et suscipit. Nunc luctus diam dui, sit amet mollis sapien vehicula id. Sed tincidunt sit amet ligula nec feugiat. Praesent aliquet accumsan massa quis euismod.</p>
                            <p>Es euismod. In sed elit id mauris luctus accumsan in et turpis. Sed maximus metus diam, sit amet elementum lectus iaculis eget. Nullam in dignissim nisl. Aliquam facilisis sapien nulla, ac pharetra metus ultrices id. In varius sapien eget urna fringilla lacinia. Donec facilisis pulvinar risus, interdum pharetra felis imperdiet et. Proin efficitur lacus consequat lectus scelerisque, at pulvinar est auctor. Aliquam pretium risus eu massa mattis consequat. Fusce nec dolor in dolor mollis sodales nec ut augue. Vestibulum in tellus nec arcu blandit dignissim. Aenean facilisis et magna nec pharetra. Aliquam blandit metus ut sollicitudin egestas.</p>
                        </div>
                        <div class="about-us-map col-lg-4 col-md-5 col-sm-12 hidden-xs">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1637.4869947971115!2d18.546311490890226!3d54.52015885089932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fda73b9617c855%3A0x25b29a73a5ecc109!2sMultikino!5e0!3m2!1spl!2spl!4v1519134703486" width="350" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>		
                    </div>

                    <div class="tab-pane" id="Grudziadz">
                        <div class="about-us-description col-lg-8 col-md-7">
                            <h4>Kinoman w Grudziądzu</h4>
                            <p>Ut eget tellus justo. Donec blandit sagittis diam, eget euismod dolor laoreet ac. Phasellus consequat risus id felis fringilla bibendum. Donec ornare, mauris at venenatis ullamcorper, libero urna lobo eros. Ut dapibus interdum magna et suscipit. Nunc luctus diam dui, sit amet mollis sapien vehicula id. Sed tincidunt sit amet ligula nec feugiat. Praesent aliquet accumsan massa quis euismod.</p>
                            <p>Aliquam consequat vel arcu ut lacinia. Curabitur nec dolor nec nunc maximus euismod. In sed elit id mauris luctus accumsan in et turpis. Sed maximus metus diam, sit amet elementum lectus iaculis eget. Nullam in dignissim nisl. Aliquam facilisis sapien nulla, ac pharetra metus ultrices id. In varius sapien eget urna fringilla lacinia. Donec facilisis pulvinar risus, interdum pharetra felis imperdiet et. Proin efficitur lacus consequat lectus scelerisque, at pulvinar est auctor. Aliquam pretium risus eu massa mattis consequat. Fusce nec dolor in dolor mollis sodales nec ut augue. Vestibulum in tellus nec arcu blandit dignissim. Aenean facilisis et magna nec pharetra. Aliquam blandit metus ut sollicitudin egestas.</p>
                        </div>
                        <div class="about-us-map col-lg-4 col-md-5 col-sm-12 hidden-xs">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1551.1847050232793!2d18.626002904506855!3d54.37198238135891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd749c2215e9b7%3A0x1ad56b08dcf2edfb!2sMultikino!5e0!3m2!1spl!2spl!4v1519124096670" width="350" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>	
                    </div>

                    <div class="tab-pane" id="Ostroda">
                        <div class="about-us-description col-lg-8 col-md-7">
                            <h4>Kinoman w Ostródzie</h4>
                            <p>Ut eget tellus justo. Donec blandit sagittis diam, eget euismod dolor laoreet ac. Phasellus consequat risus id felis fringilla bibendum. Donec ornare, mauris at venenatis ullamcorper, libero urna lobortis quam, vel posuere tellus est ac enim. Suspendisse potenti. Vivamus sollicitudin accumsan velit. Aliquam eu metus fermentum, dignissim nisl quis, egestas massa. Mauris vel nunc nisl. Integer nibh nisl, dictum nec blandit eget, ornare eget eros. Ut dapibus interdum magna et suscipit. Nunc luctus diam dui, sit amet mollis sapien vehicula id. Sed tincidunt sit amet ligula nec feugiat. Praesent aliquet accumsan massa quis euismod.</p>
                        </div>
                        <div class="about-us-map col-lg-4 col-md-5 col-sm-12 hidden-xs">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1551.1847050232793!2d18.626002904506855!3d54.37198238135891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd749c2215e9b7%3A0x1ad56b08dcf2edfb!2sMultikino!5e0!3m2!1spl!2spl!4v1519124096670" width="350" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>		
                    </div>

                    <div class="tab-pane" id="NewYork">
                        <div class="about-us-description col-lg-8 col-md-7">
                            <h4>Kinoman w Nowym Jorku</h4>
                            <p>Ut eget tellus justo. Donec blandit sagittis diam, eget euismod dolor laoreet ac. Phasellus consequat risus id felis fringilla bibendum. Donec ornare, mauris at venenatis ullamcorper, libero urna lobortis quam, vel posuere tellus est ac enim. Suspendisse potenti. Vivamus sollicitudin accumsan velit. Aliquam eu metus fermentum, dignissim nisl quis, egestas massa. Mauris vel nunc nisl. Integer nibh nisl, dictum nec blandit eget, ornare eget eros. Ut dapibus interdum magna et suscipit. Nunc luctus diam dui, sit amet mollis sapien vehicula id. Sed tincidunt sit amet ligula nec feugiat. Praesent aliquet accumsan massa quis euismod.</p>
                            <p>Aliquam consequat vel arcu ut lacinia. Curabitur nec dolor nec nunc maximus euismod. In sed elit id mauris luctus accumsan in et turpis. Sed maximus metus diam, sit amet elementum lectus iaculis eget. Nullam in dignissim nisl. Aliquam facilisis sapien nulla, ac pharetra metus ultrices id. In varius sapien eget urna fringilla lacinia. Donec facilisis </p>
                         </div>
                        <div class="about-us-map col-lg-4 col-md-5 col-sm-12 hidden-xs">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1551.1847050232793!2d18.626002904506855!3d54.37198238135891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd749c2215e9b7%3A0x1ad56b08dcf2edfb!2sMultikino!5e0!3m2!1spl!2spl!4v1519124096670" width="350" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>		
                    </div> 
                </div>
            </section>
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
	
</body><?php }
}
