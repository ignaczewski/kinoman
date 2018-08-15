<?php
/* Smarty version 3.1.30, created on 2018-05-15 10:06:16
  from "D:\Programy\xampp\htdocs\webar-f\view\film.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afa94f8555a69_17899647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ce6ac4a9a59f5bea5fc532009dd0e1e0845b9d5' => 
    array (
      0 => 'D:\\Programy\\xampp\\htdocs\\webar-f\\view\\film.tpl',
      1 => 1526370971,
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
function content_5afa94f8555a69_17899647 (Smarty_Internal_Template $_smarty_tpl) {
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
<link rel="stylesheet" href="view/css/film-style.css">
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

<main>
    <div class="container">
        <div class="row film-header col-md-12">
            <div class="film-img col-md-3">
                <img src="view/img/black-panther.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
            </div>
            <div class="film-front col-md-9">
                <div class="film-title col-md-12">
                    <h1>Czarna Pantera</h2>
                        <h2>Black Panther</h3>
                </div>
                <div class="film-repertoire col-md-12">
                    <div class="film-rep-box col-md-10 col-md-offset-1">
                        <div class="film-day-rep col-md-2">
                            <h2>Pn</h2>
                            <h3>19</h3>
                            <p>MAR</p>
                            <div class="film-day-h">
                                <a href="#" data-toggle="modal" data-target="#myModal">9:15</a> <a href="#" data-toggle="modal" data-target="#myModal">11:30</a> <a href="#" data-toggle="modal" data-target="#myModal">13:00</a>
                                <a href="#" data-toggle="modal" data-target="#myModal">15:15</a> <a href="#" data-toggle="modal" data-target="#myModal">16:45</a> <a href="#" data-toggle="modal" data-target="#myModal">18:00</a>
                                <a href="#" data-toggle="modal" data-target="#myModal">19:15</a> <a href="#" data-toggle="modal" data-target="#myModal">20:00</a> <a href="#"data-toggle="modal" data-target="#myModal">21:30</a>
                            </div>	
                        </div>
                        <div class="film-day-rep col-md-2">
                            <h2>Wt</h2>
                            <h3>20</h3>
                            <p>MAR</p>
                            <div class="film-day-h">
                                <a href="#" data-toggle="modal" data-target="#myModal">9:15</a> <a href="#" data-toggle="modal" data-target="#myModal">11:30</a> <a href="#" data-toggle="modal" data-target="#myModal">13:00</a>
                                <a href="#" data-toggle="modal" data-target="#myModal">15:15</a> <a href="#" data-toggle="modal" data-target="#myModal">16:45</a> <a href="#" data-toggle="modal" data-target="#myModal">18:00</a>
                                <a href="#" data-toggle="modal" data-target="#myModal">19:15</a> <a href="#" data-toggle="modal" data-target="#myModal">20:00</a> <a href="#"data-toggle="modal" data-target="#myModal">21:30</a>
                            </div>	
                        </div>
                        <div class="film-day-rep col-md-2">
                            <h2>Śr</h2>
                            <h3>21</h3>
                            <p>MAR</p>
                            <div class="film-day-h">
                                <a href="#" data-toggle="modal" data-target="#myModal">9:15</a> <a href="#" data-toggle="modal" data-target="#myModal">11:30</a> <a href="#" data-toggle="modal" data-target="#myModal">13:00</a>
                                <a href="#" data-toggle="modal" data-target="#myModal">15:15</a> <a href="#" data-toggle="modal" data-target="#myModal">16:45</a> <a href="#" data-toggle="modal" data-target="#myModal">18:00</a>
                                <a href="#" data-toggle="modal" data-target="#myModal">19:15</a> <a href="#" data-toggle="modal" data-target="#myModal">20:00</a> <a href="#"data-toggle="modal" data-target="#myModal">21:30</a>
                            </div>	
                        </div>
                        <div class="film-day-rep col-md-2">
                            <h2>Cz</h2>
                            <h3>22</h3>
                            <p>MAR</p>
                            <div class="film-day-h">
                                <a href="#" data-toggle="modal" data-target="#myModal">9:15</a> <a href="#" data-toggle="modal" data-target="#myModal">11:30</a> <a href="#" data-toggle="modal" data-target="#myModal">13:00</a>
                                <a href="#" data-toggle="modal" data-target="#myModal">15:15</a> <a href="#" data-toggle="modal" data-target="#myModal">16:45</a> <a href="#" data-toggle="modal" data-target="#myModal">18:00</a>
                                <a href="#" data-toggle="modal" data-target="#myModal">19:15</a> <a href="#" data-toggle="modal" data-target="#myModal">20:00</a> <a href="#"data-toggle="modal" data-target="#myModal">21:30</a>
                            </div>	
                        </div>
                        <div class="film-day-rep col-md-2">
                            <h2>Pt</h2>
                            <h3>23</h3>
                            <p>MAR</p>
                            <div class="film-day-h">
                                <a href="#" data-toggle="modal" data-target="#myModal">9:15</a> <a href="#" data-toggle="modal" data-target="#myModal">11:30</a> <a href="#" data-toggle="modal" data-target="#myModal">13:00</a>
                                <a href="#" data-toggle="modal" data-target="#myModal">15:15</a> <a href="#" data-toggle="modal" data-target="#myModal">16:45</a> <a href="#" data-toggle="modal" data-target="#myModal">18:00</a>
                                <a href="#" data-toggle="modal" data-target="#myModal">19:15</a> <a href="#" data-toggle="modal" data-target="#myModal">20:00</a> <a href="#"data-toggle="modal" data-target="#myModal">21:30</a>
                            </div>	
                        </div>
                        <div class="film-day-rep col-md-2">
                            <h2>Sb</h2>
                            <h3>24</h3>
                            <p>MAR</p>
                            <div class="film-day-h">
                                <a href="#" data-toggle="modal" data-target="#myModal">9:15</a> <a href="#" data-toggle="modal" data-target="#myModal">11:30</a> <a href="#" data-toggle="modal" data-target="#myModal">13:00</a>
                                <a href="#" data-toggle="modal" data-target="#myModal">15:15</a> <a href="#" data-toggle="modal" data-target="#myModal">16:45</a> <a href="#" data-toggle="modal" data-target="#myModal">18:00</a>
                                <a href="#" data-toggle="modal" data-target="#myModal">19:15</a> <a href="#" data-toggle="modal" data-target="#myModal">20:00</a> <a href="#"data-toggle="modal" data-target="#myModal">21:30</a>
                            </div>	
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="film-info col-md-3">
                <span>premiera:</span> <p>14 lutego 2018</p>
                <span>reżyseria:</span> <p>Ryan Coogler</p>
                <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                <span>gatunek:</span> <p>Akcja, Sci-Fi</p>
                <span>produkcja:</span> <p>USA</p>
                <span>Czas trwania:</span> <p>120min</p>
                <span>Zalecany wiek:</span> <p>16+</p>
        </div>
        <div class="film-description col-md-9">
            <div class="film-desc col-md-12">
                <h3>Opis:</h3>
                <p>T'Challa po śmierci ojca wraca do rodzinnego kraju, by objąć tron. Wkrótce Wakanda zostaje napadnięta przez dawnego wroga. Młody władca zbiera sojuszników, aby pokonać przeciwnika i ochronić swój lud. Jako Czarna Pantera staje w obronie nie tylko swojej ojczyzny, ale i całego świata. </p>
            </div>
                
            <div class="film-cast col-md-6">
                <h3>Obsada:</h3>
                <div class="film-lcast col-md-6">
                    <p>Chadwick Boseman</p> 
                    <p>Michael B. Jordan</p> 
                    <p>Lupita Nyong'o</p>
                    <p>Danai Gurira</p> 
                    <p>Martin Freeman</p> 
                    <p>Angela Bassett </p> 
                    <p>Forest Whitaker</p>
                    <p>Andy Serkis </p> 
                </div>
                <div class="film-rcast col-md-6">
                    <p>T'Challa / Czarna Pantera</p>
                    <p>Erik Killmonger</p>
                    <p>Nakia</p>
                    <p>Okoye</p>
                    <p>Everett K. Ross</p>
                    <p>Ramonda</p>
                    <p>Zuri</p>
                    <p>Ulysses Klaue / Klaw</p>
                </div>
            </div>

            <div class="film-rec col-md-6">
                <h3>Recenzje filmu:</h3>
                <div class="film-rec-one col-md-12">
                    <a><h3>Michael Corleone</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in tincidunt mi. Morbi vitae metus risus. Vivamus enim nunc...</p></a>
                </div>
                <div class="film-rec-one col-md-12">
                    <a><h3>George R.R. Martin</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in tincidunt mi. Morbi vitae metus risus. Vivamus enim nunc...</p></a>
                </div>
            </div>
        </div>
    </div>
</main>

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
 src="view/js/sticky-menu.js"><?php echo '</script'; ?>
>
	
  </body>
</html><?php }
}
