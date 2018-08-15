<!DOCTYPE HTML>
<html lang="pl">
<head>
    {include file="view/menu/head.tpl" title="Dodawanie filmu"}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" href="view/css/admin_panel.css">
</head>
<body>
    {include file="view/menu/menu_admin.tpl"}
       
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
    
    {include file="view/footer.tpl"}
    
    <script src="view/js/jquery-3.2.1.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.0/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>  
    
    <script src="view/js/scripts.js"></script>
    <script>
    $('#premiere').datetimepicker({
        format: "YYYY-MM-DD",
        showTodayButton: true,
        showClose: true,
        widgetPositioning: {
        horizontal: 'auto',
        vertical: 'bottom'
        }
    });
    </script>
</body>
</html>

