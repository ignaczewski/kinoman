<?php
/* Smarty version 3.1.30, created on 2018-08-15 22:19:52
  from "D:\Programy\xampp\htdocs\kinoman\view\zapowiedzi.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b748ae87531d8_82559125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4f4aa298e53cf49d4688130f23861dc75ade1cf' => 
    array (
      0 => 'D:\\Programy\\xampp\\htdocs\\kinoman\\view\\zapowiedzi.tpl',
      1 => 1534364385,
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
function content_5b748ae87531d8_82559125 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:view/menu/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Zapowiedzi"), 0, false);
?>

    <link rel="stylesheet" href="view/css/prevue-style.css">
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
                <span class="error" id="errorLog" style="display: none;"></span> 
                <ul id="nav-list">
                    <li><a class="oldMounth" href="#">Styczeń</a></li>
                    <li><a class="oldMounth" href="#">Luty</a></li>			
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['films']->value, 'film');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['film']->value) {
?>
                        <article class="row">
                            <div class="one-prevue col-sm-12">	
                                <div class="prevue-title col-md-12">
                                    <h2><a href="/film/<?php echo $_smarty_tpl->tpl_vars['film']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['film']->value['title'];?>
</a></h2>
                                    <h3><?php echo $_smarty_tpl->tpl_vars['film']->value['title_org'];?>
</h3>
                                </div>
                                <div class="prevue-content col-xs-12">
                                    <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                        <img src="/view/files/<?php ob_start();
echo $_smarty_tpl->tpl_vars['film']->value['ID'];
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['filmsImage']->value[$_prefixVariable1];?>
.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                                    </div>
                                    <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                        <span>premiera:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['premiere'];?>
</p>
                                        <span>reżyseria:</span> <p>Ryan Coogler</p>
                                        <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                        <span>gatunek:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['genre'];?>
</p>
                                        <span>produkcja:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['production'];?>
</p>
                                    </div>
                                    <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                        <p><?php echo $_smarty_tpl->tpl_vars['film']->value['description'];?>
</p>
                                        <p name="more"><a href="/film/<?php echo $_smarty_tpl->tpl_vars['film']->value['ID'];?>
">Zobacz więcej</a></p>
                                    </div>
                                </div>
                            </div>	
                        </article>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
                </div>
            </div>
        </section>
<!-- -------------------------------------------------------------------------------------------MARZEC---------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <div class="container-fluid">
            <div id="march" class="navigation month col-sm-12">
                <h2 >MARZEC</h2>
            </div>
        </div>
        <section>
            <div class="container">	
                <div class="content col-md-10 col-md-offset-1 col-sm-12">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['films']->value, 'film');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['film']->value) {
?>
                        <article class="row">
                            <div class="one-prevue col-sm-12">	
                                <div class="prevue-title col-md-12">
                                    <h2><a href="/film/<?php echo $_smarty_tpl->tpl_vars['film']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['film']->value['title'];?>
</a></h2>
                                    <h3><?php echo $_smarty_tpl->tpl_vars['film']->value['title_org'];?>
</h3>
                                </div>
                                <div class="prevue-content col-xs-12">
                                    <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                        <img src="/view/files/<?php ob_start();
echo $_smarty_tpl->tpl_vars['film']->value['ID'];
$_prefixVariable2=ob_get_clean();
echo $_smarty_tpl->tpl_vars['filmsImage']->value[$_prefixVariable2];?>
.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                                    </div>
                                    <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                        <span>premiera:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['premiere'];?>
</p>
                                        <span>reżyseria:</span> <p>Ryan Coogler</p>
                                        <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                        <span>gatunek:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['genre'];?>
</p>
                                        <span>produkcja:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['production'];?>
</p>
                                    </div>
                                    <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                        <p><?php echo $_smarty_tpl->tpl_vars['film']->value['description'];?>
</p>
                                        <p name="more"><a href="/film/<?php echo $_smarty_tpl->tpl_vars['film']->value['ID'];?>
">Zobacz więcej</a></p>
                                    </div>
                                </div>
                            </div>	
                        </article>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['films']->value, 'film');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['film']->value) {
?>
                        <article class="row">
                            <div class="one-prevue col-sm-12">	
                                <div class="prevue-title col-md-12">
                                    <h2><a href="/film/<?php echo $_smarty_tpl->tpl_vars['film']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['film']->value['title'];?>
</a></h2>
                                    <h3><?php echo $_smarty_tpl->tpl_vars['film']->value['title_org'];?>
</h3>
                                </div>
                                <div class="prevue-content col-xs-12">
                                    <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                        <img src="/view/files/<?php ob_start();
echo $_smarty_tpl->tpl_vars['film']->value['ID'];
$_prefixVariable3=ob_get_clean();
echo $_smarty_tpl->tpl_vars['filmsImage']->value[$_prefixVariable3];?>
.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                                    </div>
                                    <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                        <span>premiera:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['premiere'];?>
</p>
                                        <span>reżyseria:</span> <p>Ryan Coogler</p>
                                        <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                        <span>gatunek:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['genre'];?>
</p>
                                        <span>produkcja:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['production'];?>
</p>
                                    </div>
                                    <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                        <p><?php echo $_smarty_tpl->tpl_vars['film']->value['description'];?>
</p>
                                        <p name="more"><a href="/film/<?php echo $_smarty_tpl->tpl_vars['film']->value['ID'];?>
">Zobacz więcej</a></p>
                                    </div>
                                </div>
                            </div>	
                        </article>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['films']->value, 'film');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['film']->value) {
?>
                        <article class="row">
                            <div class="one-prevue col-sm-12">	
                                <div class="prevue-title col-md-12">
                                    <h2><a href="/film/<?php echo $_smarty_tpl->tpl_vars['film']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['film']->value['title'];?>
</a></h2>
                                    <h3><?php echo $_smarty_tpl->tpl_vars['film']->value['title_org'];?>
</h3>
                                </div>
                                <div class="prevue-content col-xs-12">
                                    <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                        <img src="/view/files/<?php ob_start();
echo $_smarty_tpl->tpl_vars['film']->value['ID'];
$_prefixVariable4=ob_get_clean();
echo $_smarty_tpl->tpl_vars['filmsImage']->value[$_prefixVariable4];?>
.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                                    </div>
                                    <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                        <span>premiera:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['premiere'];?>
</p>
                                        <span>reżyseria:</span> <p>Ryan Coogler</p>
                                        <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                        <span>gatunek:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['genre'];?>
</p>
                                        <span>produkcja:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['production'];?>
</p>
                                    </div>
                                    <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                        <p><?php echo $_smarty_tpl->tpl_vars['film']->value['description'];?>
</p>
                                        <p name="more"><a href="/film/<?php echo $_smarty_tpl->tpl_vars['film']->value['ID'];?>
">Zobacz więcej</a></p>
                                    </div>
                                </div>
                            </div>	
                        </article>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['films']->value, 'film');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['film']->value) {
?>
                        <article class="row">
                            <div class="one-prevue col-sm-12">	
                                <div class="prevue-title col-md-12">
                                    <h2><a href="/film/<?php echo $_smarty_tpl->tpl_vars['film']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['film']->value['title'];?>
</a></h2>
                                    <h3><?php echo $_smarty_tpl->tpl_vars['film']->value['title_org'];?>
</h3>
                                </div>
                                <div class="prevue-content col-xs-12">
                                    <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                        <img src="/view/files/<?php ob_start();
echo $_smarty_tpl->tpl_vars['film']->value['ID'];
$_prefixVariable5=ob_get_clean();
echo $_smarty_tpl->tpl_vars['filmsImage']->value[$_prefixVariable5];?>
.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                                    </div>
                                    <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                        <span>premiera:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['premiere'];?>
</p>
                                        <span>reżyseria:</span> <p>Ryan Coogler</p>
                                        <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                        <span>gatunek:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['genre'];?>
</p>
                                        <span>produkcja:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['production'];?>
</p>
                                    </div>
                                    <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                        <p><?php echo $_smarty_tpl->tpl_vars['film']->value['description'];?>
</p>
                                        <p name="more"><a href="/film/<?php echo $_smarty_tpl->tpl_vars['film']->value['ID'];?>
">Zobacz więcej</a></p>
                                    </div>
                                </div>
                            </div>	
                        </article>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['films']->value, 'film');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['film']->value) {
?>
                        <article class="row">
                            <div class="one-prevue col-sm-12">	
                                <div class="prevue-title col-md-12">
                                    <h2><a href="/film/<?php echo $_smarty_tpl->tpl_vars['film']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['film']->value['title'];?>
</a></h2>
                                    <h3><?php echo $_smarty_tpl->tpl_vars['film']->value['title_org'];?>
</h3>
                                </div>
                                <div class="prevue-content col-xs-12">
                                    <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                        <img src="/view/files/<?php ob_start();
echo $_smarty_tpl->tpl_vars['film']->value['ID'];
$_prefixVariable6=ob_get_clean();
echo $_smarty_tpl->tpl_vars['filmsImage']->value[$_prefixVariable6];?>
.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                                    </div>
                                    <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                        <span>premiera:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['premiere'];?>
</p>
                                        <span>reżyseria:</span> <p>Ryan Coogler</p>
                                        <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                        <span>gatunek:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['genre'];?>
</p>
                                        <span>produkcja:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['production'];?>
</p>
                                    </div>
                                    <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                        <p><?php echo $_smarty_tpl->tpl_vars['film']->value['description'];?>
</p>
                                        <p name="more"><a href="/film/<?php echo $_smarty_tpl->tpl_vars['film']->value['ID'];?>
">Zobacz więcej</a></p>
                                    </div>
                                </div>
                            </div>	
                        </article>
                   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['films']->value, 'film');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['film']->value) {
?>
                        <article class="row">
                            <div class="one-prevue col-sm-12">	
                                <div class="prevue-title col-md-12">
                                    <h2><a href="/film/<?php echo $_smarty_tpl->tpl_vars['film']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['film']->value['title'];?>
</a></h2>
                                    <h3><?php echo $_smarty_tpl->tpl_vars['film']->value['title_org'];?>
</h3>
                                </div>
                                <div class="prevue-content col-xs-12">
                                    <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                        <img src="/view/files/<?php ob_start();
echo $_smarty_tpl->tpl_vars['film']->value['ID'];
$_prefixVariable7=ob_get_clean();
echo $_smarty_tpl->tpl_vars['filmsImage']->value[$_prefixVariable7];?>
.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                                    </div>
                                    <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                        <span>premiera:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['premiere'];?>
</p>
                                        <span>reżyseria:</span> <p>Ryan Coogler</p>
                                        <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                        <span>gatunek:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['genre'];?>
</p>
                                        <span>produkcja:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['production'];?>
</p>
                                    </div>
                                    <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                        <p><?php echo $_smarty_tpl->tpl_vars['film']->value['description'];?>
</p>
                                        <p name="more"><a href="/film/<?php echo $_smarty_tpl->tpl_vars['film']->value['ID'];?>
">Zobacz więcej</a></p>
                                    </div>
                                </div>
                            </div>	
                        </article>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['films']->value, 'film');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['film']->value) {
?>
                        <article class="row">
                            <div class="one-prevue col-sm-12">	
                                <div class="prevue-title col-md-12">
                                    <h2><a href="/film/<?php echo $_smarty_tpl->tpl_vars['film']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['film']->value['title'];?>
</a></h2>
                                    <h3><?php echo $_smarty_tpl->tpl_vars['film']->value['title_org'];?>
</h3>
                                </div>
                                <div class="prevue-content col-xs-12">
                                    <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                        <img src="/view/files/<?php ob_start();
echo $_smarty_tpl->tpl_vars['film']->value['ID'];
$_prefixVariable8=ob_get_clean();
echo $_smarty_tpl->tpl_vars['filmsImage']->value[$_prefixVariable8];?>
.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                                    </div>
                                    <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                        <span>premiera:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['premiere'];?>
</p>
                                        <span>reżyseria:</span> <p>Ryan Coogler</p>
                                        <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                        <span>gatunek:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['genre'];?>
</p>
                                        <span>produkcja:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['production'];?>
</p>
                                    </div>
                                    <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                        <p><?php echo $_smarty_tpl->tpl_vars['film']->value['description'];?>
</p>
                                        <p name="more"><a href="/film/<?php echo $_smarty_tpl->tpl_vars['film']->value['ID'];?>
">Zobacz więcej</a></p>
                                    </div>
                                </div>
                            </div>	
                        </article>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['films']->value, 'film');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['film']->value) {
?>
                        <article class="row">
                            <div class="one-prevue col-sm-12">	
                                <div class="prevue-title col-md-12">
                                    <h2><a href="/film/<?php echo $_smarty_tpl->tpl_vars['film']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['film']->value['title'];?>
</a></h2>
                                    <h3><?php echo $_smarty_tpl->tpl_vars['film']->value['title_org'];?>
</h3>
                                </div>
                                <div class="prevue-content col-xs-12">
                                    <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                        <img src="/view/files/<?php ob_start();
echo $_smarty_tpl->tpl_vars['film']->value['ID'];
$_prefixVariable9=ob_get_clean();
echo $_smarty_tpl->tpl_vars['filmsImage']->value[$_prefixVariable9];?>
.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                                    </div>
                                    <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                        <span>premiera:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['premiere'];?>
</p>
                                        <span>reżyseria:</span> <p>Ryan Coogler</p>
                                        <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                        <span>gatunek:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['genre'];?>
</p>
                                        <span>produkcja:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['production'];?>
</p>
                                    </div>
                                    <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                        <p><?php echo $_smarty_tpl->tpl_vars['film']->value['description'];?>
</p>
                                        <p name="more"><a href="/film/<?php echo $_smarty_tpl->tpl_vars['film']->value['ID'];?>
">Zobacz więcej</a></p>
                                    </div>
                                </div>
                            </div>	
                        </article>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['films']->value, 'film');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['film']->value) {
?>
                        <article class="row">
                            <div class="one-prevue col-sm-12">	
                                <div class="prevue-title col-md-12">
                                    <h2><a href="/film/<?php echo $_smarty_tpl->tpl_vars['film']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['film']->value['title'];?>
</a></h2>
                                    <h3><?php echo $_smarty_tpl->tpl_vars['film']->value['title_org'];?>
</h3>
                                </div>
                                <div class="prevue-content col-xs-12">
                                    <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                        <img src="/view/files/<?php ob_start();
echo $_smarty_tpl->tpl_vars['film']->value['ID'];
$_prefixVariable10=ob_get_clean();
echo $_smarty_tpl->tpl_vars['filmsImage']->value[$_prefixVariable10];?>
.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                                    </div>
                                    <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                        <span>premiera:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['premiere'];?>
</p>
                                        <span>reżyseria:</span> <p>Ryan Coogler</p>
                                        <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                        <span>gatunek:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['genre'];?>
</p>
                                        <span>produkcja:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['production'];?>
</p>
                                    </div>
                                    <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                        <p><?php echo $_smarty_tpl->tpl_vars['film']->value['description'];?>
</p>
                                        <p name="more"><a href="/film/<?php echo $_smarty_tpl->tpl_vars['film']->value['ID'];?>
">Zobacz więcej</a></p>
                                    </div>
                                </div>
                            </div>	
                        </article>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['films']->value, 'film');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['film']->value) {
?>
                        <article class="row">
                            <div class="one-prevue col-sm-12">	
                                <div class="prevue-title col-md-12">
                                    <h2><a href="/film/<?php echo $_smarty_tpl->tpl_vars['film']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['film']->value['title'];?>
</a></h2>
                                    <h3><?php echo $_smarty_tpl->tpl_vars['film']->value['title_org'];?>
</h3>
                                </div>
                                <div class="prevue-content col-xs-12">
                                    <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                        <img src="/view/files/<?php ob_start();
echo $_smarty_tpl->tpl_vars['film']->value['ID'];
$_prefixVariable11=ob_get_clean();
echo $_smarty_tpl->tpl_vars['filmsImage']->value[$_prefixVariable11];?>
.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                                    </div>
                                    <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                        <span>premiera:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['premiere'];?>
</p>
                                        <span>reżyseria:</span> <p>Ryan Coogler</p>
                                        <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                        <span>gatunek:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['genre'];?>
</p>
                                        <span>produkcja:</span> <p><?php echo $_smarty_tpl->tpl_vars['film']->value['production'];?>
</p>
                                    </div>
                                    <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                        <p><?php echo $_smarty_tpl->tpl_vars['film']->value['description'];?>
</p>
                                        <p name="more"><a href="/film/<?php echo $_smarty_tpl->tpl_vars['film']->value['ID'];?>
">Zobacz więcej</a></p>
                                    </div>
                                </div>
                            </div>	
                        </article>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
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
