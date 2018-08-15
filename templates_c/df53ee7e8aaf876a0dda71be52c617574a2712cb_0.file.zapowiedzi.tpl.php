<?php
/* Smarty version 3.1.30, created on 2018-05-15 09:48:28
  from "D:\Programy\xampp\htdocs\webar-f\view\zapowiedzi.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afa90ccad7124_45752804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df53ee7e8aaf876a0dda71be52c617574a2712cb' => 
    array (
      0 => 'D:\\Programy\\xampp\\htdocs\\webar-f\\view\\zapowiedzi.tpl',
      1 => 1526370507,
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
function content_5afa90ccad7124_45752804 (Smarty_Internal_Template $_smarty_tpl) {
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


<link rel="stylesheet" href="view/css/menu-footer-style.css">
<link rel="stylesheet" href="view/css/prevue-style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">


<link>

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

    <div>
        <a class="scrollUp" href="#"><i class="fas fa-arrow-circle-up"></i></a>
    </div>
        
    <div class="container-fluid">
        <div class="navigation col-sm-12">
            <ul id="nav-list">
                <li><a href="#">Styczeń</a></li>
                <li><a href="#">Luty</a></li>			
                <li><a id="scrollMarch" href="#">Marzec</a></li>
                <li><a id="scrollApril" href="#">Kwiecień</a></li>
                <li><a id="scrollMay" href="#">Maj</a></li>
                <li><a id="scrollJune" href="#">Czerwiec</a></li>
                <li><a id="scrollJuly" href="#">Lipiec</a></li>
                <li><a id="scrollAugust" href="#">Sierpień</a></li>
                <li><a id="scrollSeptember" href="#">Wrzesień</a></li>
                <li><a id="scrollOctober" href="#">Październik</a></li>
                <li><a id="scrollNovember" href="#">Listopad</a></li>
                <li><a id="scrollDecember" href="#">Grudzień</a></li>
            </ul>
        </div>
    </div>	
    <section>
        <div class="container">	
            <div class="content col-md-10 col-md-offset-1 col-sm-12">
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2><a href="film.php">Czarna Pantera</a></h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="film.php">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>				
            </div>
        </div>
    </section>
    <!-- -----------------------------------------------------------------------------------------------------------------------------MARZEC---------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <div class="container-fluid">
        <div id="march" class="navigation month col-sm-12">
            <h2 >MARZEC</h2>
        </div>
    </div>
        
    <section>
        <div class="container">	
            <div class="content col-md-10 col-md-offset-1 col-sm-12">
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>				
            </div>
        </div>
    </section>
        
    <!-- -----------------------------------------------KWIECIEŃ----------------------------------------------------------- -->
        
    <div class="container-fluid">
        <div id="april" class="navigation month col-sm-12">
            <h2> KWIECIEŃ</h2>
        </div>
    </div>
        
    <section>
        <div class="container">	
            <div class="content col-md-10 col-md-offset-1 col-sm-12">
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>				
            </div>
        </div>
    </section>
        
        
    <!-- -------------------------------------------------MAJ--------------------------------------------------------------- -->
    <div class="container-fluid">
        <div id="may" class="navigation month col-sm-12">
            <h2 >MAJ</h2>
        </div>
    </div>
        
    <section>
        <div class="container">	
            <div class="content col-md-10 col-md-offset-1 col-sm-12">
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>				
            </div>
        </div>
    </section>
        
    <!-- -------------------------------------------------------CZERWIEC---------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <div class="container-fluid">
        <div id="june" class="navigation month col-sm-12">
            <h2>CZERWIEC</h2>
        </div>
    </div>
        
    <section>
        <div class="container">	
            <div class="content col-md-10 col-md-offset-1 col-sm-12">
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>				
            </div>
        </div>
    </section>
        
    <!-- ----------------------------------------------------------------LIPIEC ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <div class="container-fluid">
        <div id="july" class="navigation month col-sm-12">
            <h2>LIPIEC</h2>
        </div>
    </div>
        
    <section>
        <div class="container">	
            <div class="content col-md-10 col-md-offset-1 col-sm-12">
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>				
            </div>
        </div>
    </section>
        
    <!-- ----------------------------------------------------------------------SIERPIEŃ ---------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <div class="container-fluid">
        <div id="august" class="navigation month col-sm-12">
            <h2>SIERPIEŃ</h2>
        </div>
    </div>
        
    <section>
        <div class="container">	
            <div class="content col-md-10 col-md-offset-1 col-sm-12">
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>				
            </div>
        </div>
    </section>
        
    <!-- ------------------------------------------------------------------------WRZESIEŃ ---------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <div class="container-fluid">
        <div id="september" class="navigation month col-sm-12">
            <h2>WRZESIEŃ</h2>
        </div>
    </div>
        
    <section>
        <div class="container">	
            <div class="content col-md-10 col-md-offset-1 col-sm-12">
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>				
            </div>
        </div>
    </section>
        
    <!-- --------------------------------------------------------------------------PAŹDZIERNIK ---------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <div class="container-fluid">
        <div id="october" class="navigation month col-sm-12">
            <h2>PAŹDZIERNIK</h2>
        </div>
    </div>
        
    <section>
        <div class="container">	
            <div class="content col-md-10 col-md-offset-1 col-sm-12">
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>				
            </div>
        </div>
    </section>
        
    <!-- --------------------------------------------------------------------------LISTOPAD ---------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <div class="container-fluid">
        <div id="november" class="navigation month col-sm-12">
            <h2>LISTOPAD</h2>
        </div>
    </div>
        
    <section>
        <div class="container">	
            <div class="content col-md-10 col-md-offset-1 col-sm-12">
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>				
            </div>
        </div>
    </section>
        
    <!-- ------------------------------------------GRUDZIEŃ---------------------------------------------------------------------------------------- -->
    <div class="container-fluid">
        <div id="december" class="navigation month col-sm-12">
            <h2>GRUDZIEŃ</h2>
        </div>
    </div>
        
    <section>
        <div class="container">	
            <div class="content col-md-10 col-md-offset-1 col-sm-12">
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
                            </div>
                        </div>
                    </div>	
                </article>
                    
                <article class="row">
                    <div class="one-prevue col-sm-12">	
                        <div class="prevue-title col-md-12">
                            <h2>Czarna Pantera</h2>
                            <h3>(Black Panther)</h3>
                        </div>
                        <div class="prevue-content col-xs-12">
                            <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                <span>premiera:</span> <p>14 lutego 2018</p>
                                <span>reżyseria:</span> <p>Ryan Coogler</p>
                                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                                <span>produkcja:</span> <p>USA</p>
                            </div>
                            <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
                                <p name="more"><a href="#">Zobacz więcej</a></p>
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
 src="view/js/sticky-menu.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body><?php }
}
