<?php
/* Smarty version 3.1.30, created on 2018-08-15 21:56:31
  from "D:\Programy\xampp\htdocs\kinoman\view\add_film.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b74856fc4acb6_05511978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0cb389deccc3b1646603e5dce8a80de988fdec6' => 
    array (
      0 => 'D:\\Programy\\xampp\\htdocs\\kinoman\\view\\add_film.tpl',
      1 => 1534362980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/menu/head.tpl' => 1,
    'file:view/menu/menu_admin.tpl' => 1,
    'file:view/footer.tpl' => 1,
  ),
),false)) {
function content_5b74856fc4acb6_05511978 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:view/menu/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Dodawanie filmu"), 0, false);
?>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" href="view/css/admin_panel.css">
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:view/menu/menu_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

       
    <main>  
        <div class="container">
            <div class="row>">
                <div class="addFilmBox mainBox col-sm-8 col-sm-offset-2">
                    <form method="post" enctype=multipart/form-data id="addFilmForm" action="/add_film">
                        <div class="form-group">
                            <label for="title">Tytuł:</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Tytuł"/>
                        </div>

                        <div class="form-group">
                            <label for="title_org">Oryginalny tytuł:</label>
                            <input type="text" class="form-control" id="title_org" name="title_org" placeholder="Oryginalny tytuł"/>
                        </div>

                        <div class="form-group">
                            <label for="production">Kraj produkcji:</label>
                            <input type="text" class="form-control" id="production" name="production" placeholder="Kraj produkcji"/>
                        </div>

                        <div class="form-group">
                            <label for="genre">Gatunek:</label>
                            <input type="text" class="form-control" id="genre" name="genre" placeholder="Gatunek"/>
                        </div>

                        <div class="form-group">
                            <label for="premiere">Data premiery:</label>
                            <input type="text" class="form-control" id="premiere" name="premiere"/>
                        </div>

                        <div class="form-group">
                            <label for="length">Czas trwania (min):</label>
                            <input type="text" class="form-control" id="length" name="length" placeholder="Czas trwania"/>
                        </div>

                        <div class="form-group">
                            <label for="rec_age">Ograniczenie wiekowe:</label>
                            <select required class="form-control" id="rec_age" name="rec_age">
                                <option value="none">Brak</option>
                                <option value="12">12</option>
                                <option value="16">16</option>
                                <option value="18">18</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">Opis:</label>
                            <textarea rows="5" class="form-control" id="description" name="description" placeholder="Opis"> </textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Dodaj obraz</label>   
                            <input type="file" class="form-control" id="image" name="image">
                        </div>

                        <button type="submit" class="btn btn-success center-block">Dodaj</button>
                    </form>
                </div>
             </div>
        </div>
    </main>
    
    <?php $_smarty_tpl->_subTemplateRender("file:view/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <?php echo '<script'; ?>
 src="view/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.0/moment.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"><?php echo '</script'; ?>
>  
    
    <?php echo '<script'; ?>
 src="view/js/scripts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    $('#premiere').datetimepicker({
        format: "YYYY-MM-DD",
        showTodayButton: true,
        showClose: true,
        widgetPositioning: {
        horizontal: 'auto',
        vertical: 'bottom'
        }
    });
    <?php echo '</script'; ?>
>
</body>
</html>

<?php }
}
