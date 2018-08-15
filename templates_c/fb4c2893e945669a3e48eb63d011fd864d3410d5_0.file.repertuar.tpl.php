<?php
/* Smarty version 3.1.30, created on 2018-05-15 13:16:10
  from "D:\Programy\xampp\htdocs\webar-f\view\repertuar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afac17a3a3179_79544822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb4c2893e945669a3e48eb63d011fd864d3410d5' => 
    array (
      0 => 'D:\\Programy\\xampp\\htdocs\\webar-f\\view\\repertuar.tpl',
      1 => 1526382964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/menu/menu_admin.tpl' => 1,
    'file:view/menu/menu_log.tpl' => 1,
    'file:view/menu/menu.tpl' => 1,
    'file:view/script/date.php' => 1,
    'file:view/footer.tpl' => 1,
  ),
),false)) {
function content_5afac17a3a3179_79544822 (Smarty_Internal_Template $_smarty_tpl) {
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
<link rel="stylesheet" href="view/css/repertoire.css">
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

<div class="container-fluid">
    <div class="row navigation col-xs-12">

        <?php $_smarty_tpl->_subTemplateRender("file:view/script/date.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        

        
 
        
        <ul class="week">
            <li class="day"><a href="#">	<h1><?php echo $_smarty_tpl->tpl_vars['day_name']->value[0];?>
</h1> <h2><?php echo $_smarty_tpl->tpl_vars['day_num']->value[0];?>
</h2> <p><?php echo $_smarty_tpl->tpl_vars['month']->value[0];?>
</p></a></li>
            <li class="day"><a href="#">	<h1><?php echo '<?=';?> $day_name[1] <?php echo '?>';?></h1> <h2><?php echo '<?=';?> $day_num[1] <?php echo '?>';?></h2> <p><?php echo '<?=';?> $month[1] <?php echo '?>';?></p></a></li>
            <li class="day"><a href="#">	<h1><?php echo '<?=';?> $day_name[2] <?php echo '?>';?></h1> <h2><?php echo '<?=';?> $day_num[2] <?php echo '?>';?></h2> <p><?php echo '<?=';?> $month[2] <?php echo '?>';?></p></a></li>
            <li class="day"><a href="#">	<h1><?php echo '<?=';?> $day_name[3] <?php echo '?>';?></h1> <h2><?php echo '<?=';?> $day_num[3] <?php echo '?>';?></h2> <p><?php echo '<?=';?> $month[3] <?php echo '?>';?></p></a></li>
            <li class="day"><a href="#">	<h1><?php echo '<?=';?> $day_name[4] <?php echo '?>';?></h1> <h2><?php echo '<?=';?> $day_num[4] <?php echo '?>';?></h2> <p><?php echo '<?=';?> $month[4] <?php echo '?>';?></p></a></li>
            <li class="day"><a href="#">	<h1><?php echo '<?=';?> $day_name[5] <?php echo '?>';?></h1> <h2><?php echo '<?=';?> $day_num[5] <?php echo '?>';?></h2> <p><?php echo '<?=';?> $month[5] <?php echo '?>';?></p></a></li>
            <li class="day"><a href="#">	<h1><?php echo '<?=';?> $day_name[6] <?php echo '?>';?></h1> <h2><?php echo '<?=';?> $day_num[6] <?php echo '?>';?></h2> <p><?php echo '<?=';?> $month[6] <?php echo '?>';?></p></a></li>
            <li class="day"><a href="#">	<h1><?php echo '<?=';?> $day_name[7] <?php echo '?>';?></h1> <h2><?php echo '<?=';?> $day_num[7] <?php echo '?>';?></h2> <p><?php echo '<?=';?> $month[7] <?php echo '?>';?></p></a></li>
            <li class="day day-dis"><a href="#">	<h1><?php echo '<?=';?> $day_name[8] <?php echo '?>';?></h1> <h2><?php echo '<?=';?> $day_num[8] <?php echo '?>';?></h2> <p><?php echo '<?=';?> $month[8] <?php echo '?>';?></p></a></li>
            <li class="day day-dis"><a href="#">	<h1><?php echo '<?=';?> $day_name[9] <?php echo '?>';?></h1> <h2><?php echo '<?=';?> $day_num[9] <?php echo '?>';?></h2> <p><?php echo '<?=';?> $month[9] <?php echo '?>';?></p></a></li>
            <li class="day day-dis"><a href="#">	<h1><?php echo '<?=';?> $day_name[10] <?php echo '?>';?></h1> <h2><?php echo '<?=';?> $day_num[10] <?php echo '?>';?></h2> <p><?php echo '<?=';?> $month[10] <?php echo '?>';?></p></a></li>
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

        <div class="row one-show col-xs-12">
            <div class="film-title col-xs-5 col-sm-3">
                <a href="film">Czarna Pantera (napisy)</a>
            </div>
            <div class="film-desc hidden-xs col-sm-3">
                <p>Czas trwania: 120min</p>
                <p>Zalecany wiek: 16+</p>
                <p>Gatunek: akcja, science-fiction</p>
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

        <div class="row one-show col-xs-12">
            <div class="film-title col-xs-5 col-sm-3">
                <a href="film">Czarna Pantera (lektor)</a>
            </div>
            <div class="film-desc hidden-xs col-sm-3">
                <p>Czas trwania: 120min</p>
                <p>Zalecany wiek: 16+</p>
                <p>Gatunek: akcja, science-fiction</p>
            </div>
            <div class="film-time-show col-xs-7 col-sm-6">
                <div class="morning-film col-xs-4">
                    <a href="#" data-toggle="modal" data-target="#myModal">9:15</a> <a href="#" data-toggle="modal" data-target="#myModal">10:00</a> <a href="#" data-toggle="modal" data-target="#myModal">11:05</a> <a href="#" data-toggle="modal" data-target="#myModal">11:30</a> <a href="#" data-toggle="modal" data-target="#myModal">13:00</a>
                </div>
                <div class="afternoon-film col-xs-4">
                    <a href="#" data-toggle="modal" data-target="#myModal">15:15</a> <a href="#" data-toggle="modal" data-target="#myModal">16:45</a> <a href="#" data-toggle="modal" data-target="#myModal">18:00</a>
                </div>
                <div class="evening-film col-xs-4">
                    <a href="#" data-toggle="modal" data-target="#myModal">19:15</a> <a href="#" data-toggle="modal" data-target="#myModal">20:00</a> <a href="#" data-toggle="modal" data-target="#myModal">21:30</a>
                </div>
            </div>
        </div>

        <div class="row one-show col-xs-12">
            <div class="film-title col-xs-5 col-sm-3">
                <a href="#">Fantastyczne zwierzęta: Zbrodnie Grindelwalda (napisy)</a>
            </div>
            <div class="film-desc hidden-xs col-sm-3">
                <p>Czas trwania: 120min</p>
                <p>Zalecany wiek: 16+</p>
                <p>Gatunek: akcja, science-fiction</p>
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

        <div class="row one-show col-xs-12">
            <div class="film-title col-xs-5 col-sm-3">
                <a href="film">Czarna Pantera (napisy)</a>
            </div>
            <div class="film-desc hidden-xs col-sm-3">
                <p>Czas trwania: 120min</p>
                <p>Zalecany wiek: 16+</p>
                <p>Gatunek: akcja, science-fiction</p>
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

        <div class="row one-show col-xs-12">
            <div class="film-title col-xs-5 col-sm-3">
                <a href="film">Czarna Pantera (napisy)</a>
            </div>
            <div class="film-desc hidden-xs col-sm-3">
                <p>Czas trwania: 120min</p>
                <p>Zalecany wiek: 16+</p>
                <p>Gatunek: akcja, science-fiction</p>
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

        <div class="row one-show col-xs-12">
            <div class="film-title col-xs-5 col-sm-3">
                <a href="film">Czarna Pantera (napisy)</a>
            </div>
            <div class="film-desc hidden-xs col-sm-3">
                <p>Czas trwania: 120min</p>
                <p>Zalecany wiek: 16+</p>
                <p>Gatunek: akcja, science-fiction</p>
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

        <div class="row one-show col-xs-12">
            <div class="film-title col-xs-5 col-sm-3">
                <a href="film">Czarna Pantera (napisy)</a>
            </div>
            <div class="film-desc hidden-xs col-sm-3">
                <p>Czas trwania: 120min</p>
                <p>Zalecany wiek: 16+</p>
                <p>Gatunek: akcja, science-fiction</p>
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

        <div class="row one-show col-xs-12">
            <div class="film-title col-xs-5 col-sm-3">
                <a href="film">Czarna Pantera (napisy)</a>
            </div>
            <div class="film-desc hidden-xs col-sm-3">
                <p>Czas trwania: 120min</p>
                <p>Zalecany wiek: 16+</p>
                <p>Gatunek: akcja, science-fiction</p>
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
 src="view/js/sticky-menu.js"><?php echo '</script'; ?>
>
	
  </body>
</html><?php }
}
