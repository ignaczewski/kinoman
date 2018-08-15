<?php
/* Smarty version 3.1.30, created on 2018-05-15 12:10:48
  from "D:\Programy\xampp\htdocs\webar-f\view\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afab22884c1e4_12380725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44d6adda3672c1c8cbd3d1a439104f2f8672957d' => 
    array (
      0 => 'D:\\Programy\\xampp\\htdocs\\webar-f\\view\\main.tpl',
      1 => 1526379047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afab22884c1e4_12380725 (Smarty_Internal_Template $_smarty_tpl) {
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
        
        <link rel="stylesheet" href="view/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link>
        
    </head>
    
    <body >
        <header>
            
            <div class="logo">
                <a href="home"><img src="view/img/logo.png" alt="multikino" /></a>
            </div>
            
            
            <nav>
                <div class="inform">
                    
                    <ol class="info">
                        <li><a href="o_multikinie">O multikinie</a></li>
                        <li><a href="cennik">Cennik</a></li>
                        <li><a href="repertuar">Repertuar</a></li>
                        <li><a href="zapowiedzi">Zapowiedzi</a></li>
                    </ol>
                </div>
                
                <div class="location">
                    <form action="..." >
                        <label for="kino">Wybierz kino:</label>
                        <select name="kino" id="kino">
                            <option>Gdańsk</option>
                            <option>Gdynia</option>
                            <option>Grudziądz</option>
                            <option>Ostróda</option>
                            <option>Zadupie</option>
                        </select>
                    </form>	
                </div>	
                
                <div class="account">
                    
                    
                    <ul class="log">
                        <li><a href="#">Zaloguj się</a></li>
                        <li><a href="#">Zarejestruj się</a></li>
                    </ul>
                </div>
            </nav>
            
            <div class="banner">
                
                <i class="fa fa-angle-double-left" id="banner-left" aria-hidden="true" ></i>
                <i class="fa fa-angle-double-right" id="banner-right" aria-hidden="true"></i>
                
                <div class="banner-change">
                    <div id="pager"></div>
                    
                </div>
                
                <div id="slider">
                    
                    <div class="mainbanner" >
                        <a href="#"><img src="view/img/vikings.png"/></a>
                    </div>                            
                    
                    <div class="mainbanner" >
                        <a href="#"><img src="view/img/jl.jpg"/></a>
                    </div>
                    
                    <div class="mainbanner" >
                        <a href="#"><img src="view/img/starw.jpg"/></a>
                    </div>
                    
                </div>
            </div>
            
        </header>
        <div class="clear"></div>
        
        <div class="container">
            
            <main>
                
                <article>
                    
                    <div class="news">
                        <h1>Polecamy!</h1>
                        <h2>Najchętniej oglądane filmy!</h2>
                        
                        <div class="recommended">
                            <div class="slide_rec">
                                <i class="fa fa-angle-left" id="angle-left" aria-hidden="true"></i>
                            </div>
                            <div class="one_rec">
                                
                                <div class="rec_img">
                                    
                                    <a href="#"><img src="view/img/thor.jpg" width="200px" height="250px" /></a>
                                </div>
                                
                                <div class="rec_title">
                                    <p>Thor: Ragnarok</p>
                                </div>
                                
                            </div>
                            
                            <div class="one_rec">
                                
                                <div class="rec_img">
                                    <a href="#"><img src="view/img/liga2.jpg" width="200px" height="250px" /></a>				
                                </div>
                                
                                <div class="rec_title">
                                    <p>Liga sprawiedliwych</p>
                                </div>
                                
                            </div>
                            
                            <div class="one_rec">
                                <div class="rec_img">
                                    <a href="#"><img src="view/img/jedi.jpg" width="200px" height="250px" /></a>
                                </div>
                                
                                <div class="rec_title">
                                    <p>Star Wars: Ostatni jedi</p>
                                </div>
                                
                            </div>
                            
                            <div class="one_rec">
                                <div class="rec_img">
                                    <a href="#"><img src="view/img/alibi.jpg" alt="alibi" width="200px" height="250px" /></a>
                                </div>
                                
                                <div class="rec_title">
                                    <p>Alibi</p>
                                </div>							
                            </div>
                            
                            <div class="one_rec">
                                <div class="rec_img">
                                    <a href="#"><img src="view/img/it.jpg" width="200px" height="250px" /></a>
                                </div>
                                
                                <div class="rec_title">
                                    <p>To</p>
                                </div>				
                            </div>
                            <div class="slide_rec slide-right">
                                <i class="fa fa-angle-right" id="angle-right" aria-hidden="true"></i>
                            </div>						
                        </div>
                        
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in tincidunt mi. Morbi vitae metus risus. Vivamus enim nunc, aliquam ut libero non, mollis porta velit. Integer turpis dolor, mollis vel nulla quis, venenatis commodo leo. Pellentesque convallis rhoncus libero a dictum. Aliquam erat volutpat. Nullam commodo facilisis nisl non facilisis. Nam rutrum id nisi a laoreet. Pellentesque at erat.</p>
                        </div>
                        
                    </div>
                    
                </article>
                
                <article>
                    
                    <div class="news reviews">
                        
                        <h1>RECENZJE</h1>
                        <h2>Recenzje najwybitniejszych krytyków filmowych z całego świata.</h2>
                        <div class="review">
                            
                            <div class="one-review">
                                
                                <div class="rev-img">							
                                    <a href="#"><img src="view/img/jedi.jpg"  src="Star Wars: Last Jedi";></a>
                                </div>
                                
                                <div class="rev-main">
                                    
                                    <div class="rev-h">
                                        <div class="rev-title">
                                            <a href="#"><h3>Star Wars: Ostatni Jedi </h3></a>
                                        </div>
                                        <div class="rev-author">
                                            
                                            <p>Autor: Michael Corleone</p>
                                        </div>
                                    </div>
                                    
                                    <div class="rev-description">
                                        <a href="#"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum velit sit amet risus posuere gravida. Aenean consequat tortor eget mauris iaculis gravida. Praesent ultrices nulla sit amet neque dictum venenatis. Proin erat purus, posuere aliquet lobortis vel, mollis at metus. Integer malesuada non mi malesuada aliquam. Integer mi augue, faucibus ac tellus ac, tempus fermentum dui. Curabitur non efficitur risus. Sed sapien velit, laoreet vitae egestas id, dignissim sit amet ante. Curabitur tincidunt purus ac suscipit vulputate. Integer venenatis ligula non neque ullamcorper rutrum. Ut sagittis ultricies diam eget accumsan. Cras quis nisi efficitur, elementum mi nec, faucibus arcu. Ut mattis sodales quam, ut malesuada dolor consectetur ac.</p></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="one-review">
                                
                                <div class="rev-img">							
                                    <a href="#"><img src="view/img/jedi.jpg"  src="Star Wars: Last Jedi"></a>
                                </div>
                                
                                <div class="rev-main">
                                    
                                    <div class="rev-h">
                                        <div class="rev-title">
                                            <a href="#"><h3>Star Wars: Ostatni Jedi </h3></a>
                                        </div>
                                        <div class="rev-author">
                                            
                                            <p>Autor: Michael Corleone</p>
                                        </div>
                                    </div>
                                    
                                    <div class="rev-description">
                                        <a href="#"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum velit sit amet risus posuere gravida. Aenean consequat tortor eget mauris iaculis gravida. Praesent ultrices nulla sit amet neque dictum venenatis. Proin erat purus, posuere aliquet lobortis vel, mollis at metus. Integer malesuada non mi malesuada aliquam. Integer mi augue, faucibus ac tellus ac, tempus fermentum dui. Curabitur non efficitur risus. Sed sapien velit, laoreet vitae egestas id, dignissim sit amet ante. Curabitur tincidunt purus ac suscipit vulputate. Integer venenatis ligula non neque ullamcorper rutrum. Ut sagittis ultricies diam eget accumsan. Cras quis nisi efficitur, elementum mi nec, faucibus arcu. Ut mattis sodales quam, ut malesuada dolor consectetur ac.us fermentum dui. Curabitur non efficitur risus. Sed sapien velit, laoreet vitae egestas id, dignissim sit amet ante. Curabitur tincidunt purus ac suscipit vulputate. Integer venenatis ligula non neque ullamcorper rutrum. Ut sagittis ultricies diam eget accumsan. Cras quis nisi efficitur, elementum mi nec, faucibus arcu. Ut mattis sodales quam, ut malesuada dolor consectetur ac.</p></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="one-review">
                                
                                <div class="rev-img">							
                                    <a href="#"><img src="view/img/jedi.jpg" src="Star Wars: Last Jedi"></a>
                                </div>
                                
                                <div class="rev-main">
                                    
                                    <div class="rev-h">
                                        <div class="rev-title">
                                            <a href="#"><h3>Star Wars: Ostatni Jedi </h3></a>
                                        </div>
                                        <div class="rev-author">
                                            
                                            <p>Autor: Michael Corleone</p>
                                        </div>
                                    </div>
                                    
                                    <div class="rev-description">
                                        <a href="#"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum velit sit amet risus posuere gravida. Aenean consequat tortor eget mauris iaculis gravida. Praesent ultrices nulla sit amet neque dictum venenatis. Proin erat purus, posuere aliquet lobortis vel, mollis at metus. Integer malesuada non mi malesuada aliquam. Integer mi augue, faucibus ac tellus ac, tempus fermentum dui. Curabitur non efficitur risus. Sed sapien velit, laoreet vitae egestas id, dignissim sit amet ante. Curabitur tincidunt purus ac suscipit vulputate. Integer venenatis ligula non neque ullamcorper rutrum. Ut sagittis ultricies diam eget accumsan. Cras quis nisi efficitur, elementum mi nec, faucibus arcu. Ut mattis sodales quam, ut malesuada dolor consectetur ac.</p></a>
                                    </div>
                                </div>
                            </div>
                        </div>                
                    </div>
                </article>
            </main>
        </div>
        <div class="add">  
        </div>
        
        <footer>
            
            <div class="footer-m">
                
                <div class="contact">
                    <h2>Masz pytanie? Napisz do nas!</h2>
                    <form action="">
                        <!--<label for="contact-name">Podaj swoje imię:</br></label>-->
                        <input type="text" name="contact-name"  placeholder="Imię" onfocus="this.placeholder=''" onblur="this.placeholder='Imię'"/>
                        
                        
                        <!--<label for="contact-mail">Podaj swój adres e-mail:</br></label>-->
                        <input type="email" name="contact-mail"  placeholder="Adres e-mail" onfocus="this.placeholder=''" onblur="this.placeholder='Adres e-mail'"/>
                        
                        <textarea name="contact-txt" placeholder="Treść wiadomości..." onfocus="this.placeholder=''" onblur="this.placeholder='Treść wiadomości...'"></textarea>
                        
                        <input type="submit" name="wyslij" value="Wyślij"/>
                    </form>
                    
                </div>
                
                <div class="newsletter">
                    <h2>Bądź na bieżąco ze wszystkimi promocjami, wydarzeniami i nowościami! </h2>
                    <h3>Zapisz się do do newslettera i nie przegap żadnej premiery, maratonu czy wydarzenia sportowego transmitowanego na naszych ekranach!</h3>
                    <p>To proste! Wystarczy, że wpiszesz swój adres e-mail i już nic Cię nie ominie!</p>
                    
                    <input type="email" name="newsletter-mail" placeholder="Zapisz się do newslettera!" onfocus="this.placeholder=''" onblur="this.placeholder='Zapisz się do newslettera!'">
                </div>
            </div>
            
            <div class="social">
                
                <a href="#"><i class="fa fa-facebook-square" id="fb-icon" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" id="ig-icon" aria-hidden="true"></i></a>
                <i class="fa fa-copyright" id="copy-icon" aria-hidden="true"> Copyright 2018. Wszelkie prawa zastrzeżone. </i> 
                
                
            </div>
            
            
        </footer>
        
        <?php echo '<script'; ?>
 src="view/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>	
        <?php echo '<script'; ?>
 src="view/js/jquery.cycle.all.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="view/js/slider.js"><?php echo '</script'; ?>
>

    </body>
<?php }
}
