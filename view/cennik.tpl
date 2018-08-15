<!DOCTYPE HTML>
<html lang="pl">
<head>
    {include file="view/menu/head.tpl" title="Cennik"}
    <link rel="stylesheet" href="view/css/price-list-style.css">
</head>
<body>
{if $zalogowany == 'admin'}
    {include file="view/menu/menu_admin.tpl"}
{elseif $zalogowany == 'user'}
    {include file="view/menu/menu_log.tpl"}          
{else }
    {include file="view/menu/menu.tpl"}
{/if}
    <div class="row">
        <div class="container-fluid">
            <div class="col-sm-12 hidden-xs" id="banner-container">
                <div class="banner">							
                    <div class="mainbanner" >
                        <img src="view/img/cennik.png" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <div class="row">
            <div class="price-list col-md-8 col-md-offset-2">
                <h3>Cennik</h3>
                <div class="table-responsive">      
                    <table>
                        <thead>
                            <tr id="day">
                                <th></th> <th>Poniedziałek - Czwartek</th> <th>Poniedziałek - Czwartek</th> <th>Piątek - Niedziela</th> <th>Piątek - Niedziela</th>
                            </tr>
                            <tr >						
                                <th></th> <th>(10-15)</th> <th>(15-23)</th> <th>(8-12)</th> <th>(12-22)</th>
                            </tr>
                        </thead>	
                        <tr>
                            <td>Normalny</td> <td>20zł</td> <td>22zł</td> <td>22zł</td> <td>24zł</td>
                        </tr>

                        <tr>
                            <td>Ulgowy*</td> <td>18zł</td> <td>20zł</td> <td>20zł</td> <td>22zł</td>
                        </tr>	

                        <tr>
                            <th colspan ="5">Seanse 3D</th>
                        </tr>		

                        <tr>
                            <td>Normalny</td> <td>22zł</td> <td>24zł</td> <td>24zł</td> <td>26zł</td>
                        </tr>

                        <tr>
                            <td>Ulgowy*</td> <td>20zł</td> <td>22zł</td> <td>22zł</td> <td>24zł</td>
                        </tr>			
                    </table>
                </div>
                <p>* bilet ulgowy przysługuje osobom do 26 roku życia po okazaniu legitymacji szkolnej/studenckiej.</p>
            </div>		
        </div>

        <div class="row">
            <div class="bargain-list col-md-8 col-md-offset-2">
                <h2>Promocje</h2>
                <h3>W dni powszednie skorzystaj z naszych ofert specjalnych! <a href="#">Sprawdź szegóły oferty</a>.</h3>
                <div class="table-responsive">      
                    <table>
                        <thead>
                            <tr>
                                <th>Poniedziałek</th> <th>Wtorek</th> <th>Środa</th> <th>Czwartek</th>
                            </tr>
                        </thead>	
                        <tr>
                            <td><a href="#">Bilety studenckie po 15zł</a></td> <td><a href="#">Bueno wtorki</a></td> <td><a href="#">Środy z Orange</a></td> <td><a href="#">Filmy 3D po 20zł</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </main>

    {include file="view/footer.tpl"}
    <script src="view/js/jquery-3.2.1.min.js"></script>	
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="view/js/scripts.js"></script>

</body>
</html>

