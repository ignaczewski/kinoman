<?php
/* Smarty version 3.1.30, created on 2018-08-15 22:04:04
  from "D:\Programy\xampp\htdocs\kinoman\view\film.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b748734a5d924_04645229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cae254498c1357cbc423aea083e04e1a0c87edde' => 
    array (
      0 => 'D:\\Programy\\xampp\\htdocs\\kinoman\\view\\film.tpl',
      1 => 1534363438,
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
function content_5b748734a5d924_04645229 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['filmData']->value['title'];
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:view/menu/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable1), 0, false);
?>

    <link rel="stylesheet" href="/view/css/film-style.css">
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
                <div class="film-img col-md-3 col-sm-3  hidden-xs">
                    <img src="/view/files/<?php echo $_smarty_tpl->tpl_vars['filmImage']->value;?>
.jpg" class="img-fluid. max-width: 100%" alt="Responsive image">
                </div>
                <div class="film-front col-md-9 col-sm-9 col-xs-12  ">
                    <div class="film-title col-md-12 col-sm-12 col-xs-12">
                        <h1><?php echo $_smarty_tpl->tpl_vars['filmData']->value['title'];?>
</h1>
                        <h2><?php echo $_smarty_tpl->tpl_vars['filmData']->value['title_org'];?>
</h2>
                    </div>
                    <div class="film-repertoire col-md-12 col-sm-12 col-xs-12">
                        <div class="film-rep-box col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12 ">
                            <div class="film-day-rep col-md-2 col-sm-2 col-xs-4">
                                <h2><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_name[0];?>
</h2>
                                <h3><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_num[0];?>
</h3>
                                <p><?php echo $_smarty_tpl->tpl_vars['repDate']->value->month[0];?>
</p>
                                <div class="film-day-h">
                                    <a href="#" data-toggle="modal" data-target="#myModal">9:15</a> <a href="#" data-toggle="modal" data-target="#myModal">11:30</a> <a href="#" data-toggle="modal" data-target="#myModal">13:00</a>
                                    <a href="#" data-toggle="modal" data-target="#myModal">15:15</a> <a href="#" data-toggle="modal" data-target="#myModal">16:45</a> <a href="#" data-toggle="modal" data-target="#myModal">18:00</a>
                                    <a href="#" data-toggle="modal" data-target="#myModal">19:15</a> <a href="#" data-toggle="modal" data-target="#myModal">20:00</a> <a href="#"data-toggle="modal" data-target="#myModal">21:30</a>
                                </div>	
                            </div>
                            <div class="film-day-rep col-md-2 col-sm-2 col-xs-4">
                                <h2><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_name[1];?>
</h2>
                                <h3><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_num[1];?>
</h3>
                                <p><?php echo $_smarty_tpl->tpl_vars['repDate']->value->month[1];?>
</p>
                                <div class="film-day-h">
                                    <a href="#" data-toggle="modal" data-target="#myModal">9:15</a> <a href="#" data-toggle="modal" data-target="#myModal">11:30</a> <a href="#" data-toggle="modal" data-target="#myModal">13:00</a>
                                    <a href="#" data-toggle="modal" data-target="#myModal">15:15</a> <a href="#" data-toggle="modal" data-target="#myModal">16:45</a> <a href="#" data-toggle="modal" data-target="#myModal">18:00</a>
                                    <a href="#" data-toggle="modal" data-target="#myModal">19:15</a> <a href="#" data-toggle="modal" data-target="#myModal">20:00</a> <a href="#"data-toggle="modal" data-target="#myModal">21:30</a>
                                </div>	
                            </div>
                            <div class="film-day-rep col-md-2 col-sm-2 col-xs-4">
                                <h2><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_name[2];?>
</h2>
                                <h3><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_num[2];?>
</h3>
                                <p><?php echo $_smarty_tpl->tpl_vars['repDate']->value->month[2];?>
</p>
                                <div class="film-day-h">
                                    <a href="#" data-toggle="modal" data-target="#myModal">9:15</a> <a href="#" data-toggle="modal" data-target="#myModal">11:30</a> <a href="#" data-toggle="modal" data-target="#myModal">13:00</a>
                                    <a href="#" data-toggle="modal" data-target="#myModal">15:15</a> <a href="#" data-toggle="modal" data-target="#myModal">16:45</a> <a href="#" data-toggle="modal" data-target="#myModal">18:00</a>
                                    <a href="#" data-toggle="modal" data-target="#myModal">19:15</a> <a href="#" data-toggle="modal" data-target="#myModal">20:00</a> <a href="#"data-toggle="modal" data-target="#myModal">21:30</a>
                                </div>	
                            </div>
                            <div class="film-day-rep col-md-2 col-sm-2 col-xs-4">
                                <h2><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_name[3];?>
</h2>
                                <h3><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_num[3];?>
</h3>
                                <p><?php echo $_smarty_tpl->tpl_vars['repDate']->value->month[3];?>
</p>
                                <div class="film-day-h">
                                    <a href="#" data-toggle="modal" data-target="#myModal">9:15</a> <a href="#" data-toggle="modal" data-target="#myModal">11:30</a> <a href="#" data-toggle="modal" data-target="#myModal">13:00</a>
                                    <a href="#" data-toggle="modal" data-target="#myModal">15:15</a> <a href="#" data-toggle="modal" data-target="#myModal">16:45</a> <a href="#" data-toggle="modal" data-target="#myModal">18:00</a>
                                    <a href="#" data-toggle="modal" data-target="#myModal">19:15</a> <a href="#" data-toggle="modal" data-target="#myModal">20:00</a> <a href="#"data-toggle="modal" data-target="#myModal">21:30</a>
                                </div>	
                            </div>
                            <div class="film-day-rep col-md-2 col-sm-2 col-xs-4">
                                <h2><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_name[4];?>
</h2>
                                <h3><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_num[4];?>
</h3>
                                <p><?php echo $_smarty_tpl->tpl_vars['repDate']->value->month[4];?>
</p>
                                <div class="film-day-h">
                                    <a href="#" data-toggle="modal" data-target="#myModal">9:15</a> <a href="#" data-toggle="modal" data-target="#myModal">11:30</a> <a href="#" data-toggle="modal" data-target="#myModal">13:00</a>
                                    <a href="#" data-toggle="modal" data-target="#myModal">15:15</a> <a href="#" data-toggle="modal" data-target="#myModal">16:45</a> <a href="#" data-toggle="modal" data-target="#myModal">18:00</a>
                                    <a href="#" data-toggle="modal" data-target="#myModal">19:15</a> <a href="#" data-toggle="modal" data-target="#myModal">20:00</a> <a href="#"data-toggle="modal" data-target="#myModal">21:30</a>
                                </div>	
                            </div>
                            <div class="film-day-rep col-md-2 col-sm-2 col-xs-4">
                                <h2><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_name[5];?>
</h2>
                                <h3><?php echo $_smarty_tpl->tpl_vars['repDate']->value->day_num[5];?>
</h3>
                                <p><?php echo $_smarty_tpl->tpl_vars['repDate']->value->month[5];?>
</p>
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
            <div class="film-info col-md-3 col-sm-3 col-xs-3">
                    <span>premiera:</span> <p><?php echo $_smarty_tpl->tpl_vars['filmData']->value['premiere'];?>
</p>
                    <span>reżyseria:</span> <p>Ryan Coogler</p>
                    <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                    <span>gatunek:</span> <p><?php echo $_smarty_tpl->tpl_vars['filmData']->value['genre'];?>
</p>
                    <span>produkcja:</span> <p><?php echo $_smarty_tpl->tpl_vars['filmData']->value['production'];?>
</p>
                    <span>Czas trwania:</span> <p><?php echo $_smarty_tpl->tpl_vars['filmData']->value['length'];?>
</p>
                    <span>Zalecany wiek:</span> <p><?php echo $_smarty_tpl->tpl_vars['filmData']->value['rec_age'];?>
</p>
            </div>
            <div class="film-description col-md-9 col-sm-9 col-xs-9">
                <div class="film-desc col-md-12 col-sm-12">
                    <h3>Opis:</h3>
                    <p><?php echo $_smarty_tpl->tpl_vars['filmData']->value['description'];?>
</p>
                </div>

                <div class="film-cast col-md-6 col-sm-12 col-xs-12">
                    <h3>Obsada:</h3>
                    <div class="film-lcast col-md-6 col-sm-6 col-xs-6">
                        <p>Chadwick Boseman</p> 
                        <p>Michael B. Jordan</p> 
                        <p>Lupita Nyong'o</p>
                        <p>Danai Gurira</p> 
                        <p>Martin Freeman</p> 
                        <p>Angela Bassett </p> 
                        <p>Forest Whitaker</p>
                        <p>Andy Serkis </p> 
                    </div>
                    <div class="film-rcast col-md-6 col-sm-6 col-xs-6">
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

                <div class="film-rec col-md-6 col-sm-12 col-xs-12">
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
 src="/view/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>	
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/view/js/scripts.js"><?php echo '</script'; ?>
>
	
</body>
</html><?php }
}
