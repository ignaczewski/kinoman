<?php
/* Smarty version 3.1.30, created on 2018-06-19 14:35:54
  from "D:\Programy\xampp\htdocs\kinoman\view\main_1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b28f8aa965526_02402717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bfe433b12f3ff89d2ebc2b4f52193b6496b20c0' => 
    array (
      0 => 'D:\\Programy\\xampp\\htdocs\\kinoman\\view\\main_1.tpl',
      1 => 1529411749,
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
function content_5b28f8aa965526_02402717 (Smarty_Internal_Template $_smarty_tpl) {
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
    
    <link rel="stylesheet" href="view/css/menu-footer-style.css">
    <link rel="stylesheet" href="view/css/style_1.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link>

</head>

<body >
            
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
            
<div class="banner hidden-xs">           
    
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2500">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="view/img/vikings.png" alt="Vikings">
      <div class="carousel-caption">
        <h3>Vikings</h3>
        <p>Season 5!</p>
      </div>
    </div>

    <div class="item">
      <img src="view/img/jl.jpg" alt="Justice League">
      <div class="carousel-caption">
        <h3>Justice League</h3>
        <p>Kto wygra?</p>
      </div>
    </div>

    <div class="item">
      <img src="view/img/starw.jpg" alt="Star Wars">
      <div class="carousel-caption">
        <h3>Star Wars</h3>
        <p>Kolejna odsłona uniwersum Star Wars!</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
    
</div>
<main>

    <div class="container">
        <section class="row">
            <div class="news col-md-10 col-md-offset-1">
                <h1>Polecamy!</h1>
                <h2>Najchętniej oglądane filmy!</h2>

                <div class="recommended col-xs-12">
                    <div class="one_rec col-xs-4 col-sm-3 col-md-3 col-lg-2 ">

                        <div class="rec_img col-xs-12">
                            <a href="#"><img src="view/img/thor.jpg" class="img-fluid. max-height: 100%" alt="Responsive image" /></a>
                        </div>

                        <div class="rec_title col-xs-12">
                            <p>Thor: Ragnarok</p>
                        </div>

                    </div>

                    <div class="one_rec col-xs-4 col-sm-3 col-md-3 col-lg-2 col-half-offset">

                        <div class="rec_img col-xs-12">
                            <a href="#"><img src="view/img/liga2.jpg" class="img-fluid. max-width: 100%" alt="Responsive image" /></a>				
                        </div>

                        <div class="rec_title col-xs-12">
                            <p>Liga sprawiedliwych</p>
                        </div>

                    </div>

                    <div class="one_rec col-xs-4 col-sm-3 col-md-3 col-lg-2 col-half-offset">
                        <div class="rec_img col-xs-12">
                            <a href="#"><img src="view/img/jedi.jpg" class="img-fluid. max-width: 100%" alt="Responsive image" /></a>
                        </div>

                        <div class="rec_title col-xs-12">
                            <p>Star Wars: Ostatni jedi</p>
                        </div>

                    </div>

                    <div class="one_rec hidden-xs col-sm-3 col-md-3 col-lg-2 col-half-offset">
                        <div class="rec_img col-xs-12">
                            <a href="#"><img src="view/img/alibi.jpg" alt="alibi" class="img-fluid. max-width: 100%" alt="Responsive image" /></a>
                        </div>

                        <div class="rec_title col-xs-12">
                            <p>Alibi</p>
                        </div>							
                    </div>

                    <div class="one_rec hidden-xs hidden-sm hidden-md col-lg-2 col-half-offset ">
                        <div class="rec_img col-sm-12">
                            <a href="#"><img src="view/img/it.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"  /></a>
                        </div>

                        <div class="rec_title col-sm-12">
                            <p>To</p>
                        </div>				
                    </div>
                </div>
                <div class="description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in tincidunt mi. Morbi vitae metus risus. Vivamus enim nunc, aliquam ut libero non, mollis porta velit. Integer turpis dolor, mollis vel nulla quis, venenatis commodo leo. Pellentesque convallis rhoncus libero a dictum. Aliquam erat volutpat. Nullam commodo facilisis nisl non facilisis. Nam rutrum id nisi a laoreet. Pellentesque at erat.</p>
                </div>

            </div>

    </section>
    <section class="row">
            <div class="news reviews col-md-10 col-md-offset-1">
                <h1>RECENZJE</h1>
                <h2>Recenzje najwybitniejszych krytyków filmowych z całego świata.</h2>
                <div class="review col-xs-12">
                    <div class="one-review col-xs-12 col-md-12">
                        <div class="rev-img col-xs-3 col-md-2">							
                            <a href="#"><img src="view/img/jedi.jpg"  src="Star Wars: Last Jedi";></a>
                        </div>
                        <div class="rev-main col-xs-9 col-md-10">
                            <div class="rev-h col-xs-12 col-md-12">
                                <div class="rev-title col-xs-8 col-md-8">
                                    <a href="#"><h3>Star Wars: Ostatni Jedi </h3></a>
                                </div>
                                <div class="rev-author col-xs-4 col-md-4">
                                    <p>Autor: Michael Corleone</p>
                                </div>
                            </div>
                            <div class="rev-description col-xs-12 col-md-12">
                                <a href="#"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum velit sit amet risus posuere gravida. Aenean consequat tortor eget mauris iaculis gravida. Praesent ultrices nulla sit amet neque dictum venenatis. Proin erat purus, posuere aliquet lobortis vel, mollis at metus. Integer malesuada non mi malesuada aliquam. Integer mi augue, faucibus ac tellus ac, tempus fermentum dui. Curabitur non efficitur risus. Sed sapien velit, laoreet vitae egestas id, dignissim sit amet ante. Curabitur tincidunt purus ac suscipit vulputate. Integer venenatis ligula non neque ullamcorper rutrum. Ut sagittis ultricies diam eget accumsan. Cras quis nisi efficitur, elementum mi nec, faucibus arcu. Ut mattis sodales quam, ut malesuada dolor consectetur ac.</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="one-review col-xs-12 col-md-12">
                        <div class="rev-img col-xs-3 col-md-2">							
                            <a href="#"><img src="view/img/jedi.jpg"  src="Star Wars: Last Jedi";></a>
                        </div>
                        <div class="rev-main col-xs-9 col-md-10">
                            <div class="rev-h col-xs-12 col-md-12">
                                <div class="rev-title col-xs-8 col-md-8">
                                    <a href="#"><h3>Star Wars: Ostatni Jedi </h3></a>
                                </div>
                                <div class="rev-author col-xs-4 col-md-4">
                                    <p>Autor: Michael Corleone</p>
                                </div>
                            </div>
                            <div class="rev-description col-xs-12 col-md-12">
                                <a href="#"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum velit sit amet risus posuere gravida. Aenean consequat tortor eget mauris iaculis gravida. Praesent ultrices nulla sit amet neque dictum venenatis. Proin erat purus, posuere aliquet lobortis vel, mollis at metus. Integer malesuada non mi malesuada aliquam. Integer mi augue, faucibus ac tellus ac, tempus fermentum dui. Curabitur non efficitur risus. Sed sapien velit, laoreet vitae egestas id, dignissim sit amet ante. Curabitur tincidunt purus ac suscipit vulputate. Integer venenatis ligula non neque ullamcorper rutrum. Ut sagittis ultricies diam eget accumsan. Cras quis nisi efficitur, elementum mi nec, faucibus arcu. Ut mattis sodales quam, ut malesuada dolor consectetur ac.</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="one-review col-xs-12 col-md-12">
                        <div class="rev-img col-xs-3 col-md-2">							
                            <a href="#"><img src="view/img/jedi.jpg"  src="Star Wars: Last Jedi";></a>
                        </div>
                        <div class="rev-main col-xs-9 col-md-10">
                            <div class="rev-h col-xs-12 col-md-12">
                                <div class="rev-title col-xs-8 col-md-8">
                                    <a href="#"><h3>Star Wars: Ostatni Jedi </h3></a>
                                </div>
                                <div class="rev-author col-xs-4 col-md-4">
                                    <p>Autor: Michael Corleone</p>
                                </div>
                            </div>
                            <div class="rev-description col-xs-12 col-md-12">
                                <a href="#"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum velit sit amet risus posuere gravida. Aenean consequat tortor eget mauris iaculis gravida. Praesent ultrices nulla sit amet neque dictum venenatis. Proin erat purus, posuere aliquet lobortis vel, mollis at metus. Integer malesuada non mi malesuada aliquam. Integer mi augue, faucibus ac tellus ac, tempus fermentum dui. Curabitur non efficitur risus. Sed sapien velit, laoreet vitae egestas id, dignissim sit amet ante. Curabitur tincidunt purus ac suscipit vulputate. Integer venenatis ligula non neque ullamcorper rutrum. Ut sagittis ultricies diam eget accumsan. Cras quis nisi efficitur, elementum mi nec, faucibus arcu. Ut mattis sodales quam, ut malesuada dolor consectetur ac.</p></a>
                            </div>
                        </div>
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
 src="view/js/sticky-menu.js"><?php echo '</script'; ?>
>

</body>
<?php }
}
