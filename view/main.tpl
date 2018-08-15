<!DOCTYPE HTML>
<html lang="pl">
<head>
    {include file="view/menu/head.tpl" title="Kinoman"}
    <link rel="stylesheet" href="view/css/home.css">
</head>
<body >        
    {if $zalogowany == 'admin'}
        {include file="view/menu/menu_admin.tpl"}
    {elseif $zalogowany == 'user'}
        {include file="view/menu/menu_log.tpl"}          
    {else}
        {include file="view/menu/menu.tpl"}
    {/if}          
    <div class="banner hidden-xs">           
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2500">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <a href="/film/13"><img src="view/img/deadpool.jpg" alt="Deadpool"></a>
                    <div class="carousel-caption">
                        <h3>Deadpool 2</h3>
                        <p>Zabojcza dawka humoru!</p>
                    </div>
                </div>

                <div class="item">
                    <a href="/film/17"><img src="view/img/jl.jpg" alt="Justice League"></a>
                    <div class="carousel-caption">
                        <h3>Justice League</h3>
                        <p>Kto wygra?</p>
                    </div>
                </div>

                <div class="item">
                    <a href="/film/9"><img src="view/img/starw.jpg" alt="Star Wars"></a>
                    <div class="carousel-caption">
                        <h3>Star Wars</h3>
                        <p>Kolejna odsłona uniwersum Star Wars!</p>
                    </div>
                </div>
            </div>

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
                                <a href="/film/8"><img src="/view/files/Thor Ragnarok.jpg" class="img-fluid. max-height: 100%" alt="Responsive image" /></a>
                            </div>
                            <div class="rec_title col-xs-12">
                                <p>Thor: Ragnarok</p>
                            </div>
                        </div>
                        <div class="one_rec col-xs-4 col-sm-3 col-md-3 col-lg-2 col-half-offset">
                            <div class="rec_img col-xs-12">
                                <a href="/film/1"><img src="/view/files/Czarna Pantera.jpg" class="img-fluid. max-width: 100%" alt="Responsive image" /></a>				
                            </div>
                            <div class="rec_title col-xs-12">
                                <p>Czarna Pantera</p>
                            </div>
                        </div>
                        <div class="one_rec col-xs-4 col-sm-3 col-md-3 col-lg-2 col-half-offset">
                            <div class="rec_img col-xs-12">
                                <a href="/film/12"><img src="/view/files/Ciche miejsce.jpg" class="img-fluid. max-width: 100%" alt="Responsive image" /></a>
                            </div>
                            <div class="rec_title col-xs-12">
                                <p>Ciche miejsce</p>
                            </div>
                        </div>
                        <div class="one_rec hidden-xs col-sm-3 col-md-3 col-lg-2 col-half-offset">
                            <div class="rec_img col-xs-12">
                                <a href="/film/16"><img src="/view/files/Iniemamocni 2.jpg" class="img-fluid. max-width: 100%" alt="Responsive image" /></a>
                            </div>
                            <div class="rec_title col-xs-12">
                                <p>Iniemamocni 2</p>
                            </div>							
                        </div>
                        <div class="one_rec hidden-xs hidden-sm hidden-md col-lg-2 col-half-offset ">
                            <div class="rec_img col-sm-12">
                                <a href="/film/13"><img src="/view/files/Deadpool 2.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"  /></a>
                            </div>
                            <div class="rec_title col-sm-12">
                                <p>Deadpool 2</p>
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
                                <a href="/film/9"><img src="/view/files/Gwiezdne wojny Ostatni Jedi.jpg"  src="Star Wars: Last Jedi"></a>
                            </div>
                            <div class="rev-main col-xs-9 col-md-10">
                                <div class="rev-h col-xs-12 col-md-12">
                                    <div class="rev-title col-xs-8 col-md-8">
                                        <a href="/film/9"><h3>Star Wars: Ostatni Jedi </h3></a>
                                    </div>
                                    <div class="rev-author col-xs-4 col-md-4">
                                        <p>Autor: Michael Corleone</p>
                                    </div>
                                </div>
                                <div class="rev-description col-xs-12 col-md-12">
                                    <a href="/film/9"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum velit sit amet risus posuere gravida. Aenean consequat tortor eget mauris iaculis gravida. Praesent ultrices nulla sit amet neque dictum venenatis. Proin erat purus, posuere aliquet lobortis vel, mollis at metus. Integer malesuada non mi malesuada aliquam. Integer mi augue, faucibus ac tellus ac, tempus fermentum dui. Curabitur non efficitur risus. Sed sapien velit, laoreet vitae egestas id, dignissim sit amet ante. Curabitur tincidunt purus ac suscipit vulputate. Integer venenatis ligula non neque ullamcorper rutrum. Ut sagittis ultricies diam eget accumsan. Cras quis nisi efficitur, elementum mi nec, faucibus arcu. Ut mattis sodales quam, ut malesuada dolor consectetur ac.</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="one-review col-xs-12 col-md-12">
                            <div class="rev-img col-xs-3 col-md-2">							
                                <a href="/film/14"><img src="/view/files/Ocean's 8.jpg"  src="Ocean's 8"></a>
                            </div>
                            <div class="rev-main col-xs-9 col-md-10">
                                <div class="rev-h col-xs-12 col-md-12">
                                    <div class="rev-title col-xs-8 col-md-8">
                                        <a href="/film/14"><h3>Ocean's 8</h3></a>
                                    </div>
                                    <div class="rev-author col-xs-4 col-md-4">
                                        <p>Autor: Michael Corleone</p>
                                    </div>
                                </div>
                                <div class="rev-description col-xs-12 col-md-12">
                                    <a href="/film/14"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum velit sit amet risus posuere gravida. Aenean consequat tortor eget mauris iaculis gravida. Praesent ultrices nulla sit amet neque dictum venenatis. Proin erat purus, posuere aliquet lobortis vel, mollis at metus. Integer malesuada non mi malesuada aliquam. Integer mi augue, faucibus ac tellus ac, tempus fermentum dui. Curabitur non efficitur risus. Sed sapien velit, laoreet vitae egestas id, dignissim sit amet ante. Curabitur tincidunt purus ac suscipit vulputate. Integer venenatis ligula non neque ullamcorper rutrum. Ut sagittis ultricies diam eget accumsan. Cras quis nisi efficitur, elementum mi nec, faucibus arcu. Ut mattis sodales quam, ut malesuada dolor consectetur ac.</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="one-review col-xs-12 col-md-12">
                            <div class="rev-img col-xs-3 col-md-2">							
                                <a href="/film/15"><img src="/view/files/Han Solo Gwiezdne wojny historie.jpg"  src="Han Solo: Gwiezdne wojny historie"></a>
                            </div>
                            <div class="rev-main col-xs-9 col-md-10">
                                <div class="rev-h col-xs-12 col-md-12">
                                    <div class="rev-title col-xs-8 col-md-8">
                                        <a href="/film/15"><h3>Han Solo: Gwiezdne wojny historie</h3></a>
                                    </div>
                                    <div class="rev-author col-xs-4 col-md-4">
                                        <p>Autor: Michael Corleone</p>
                                    </div>
                                </div>
                                <div class="rev-description col-xs-12 col-md-12">
                                    <a href="/film/15"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum velit sit amet risus posuere gravida. Aenean consequat tortor eget mauris iaculis gravida. Praesent ultrices nulla sit amet neque dictum venenatis. Proin erat purus, posuere aliquet lobortis vel, mollis at metus. Integer malesuada non mi malesuada aliquam. Integer mi augue, faucibus ac tellus ac, tempus fermentum dui. Curabitur non efficitur risus. Sed sapien velit, laoreet vitae egestas id, dignissim sit amet ante. Curabitur tincidunt purus ac suscipit vulputate. Integer venenatis ligula non neque ullamcorper rutrum. Ut sagittis ultricies diam eget accumsan. Cras quis nisi efficitur, elementum mi nec, faucibus arcu. Ut mattis sodales quam, ut malesuada dolor consectetur ac.</p></a>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
            </section>
        </div>
    </main>


 
    {include file='view/footer.tpl'}
    <script src="view/js/jquery-3.2.1.min.js"></script>	
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="view/js/scripts.js"></script>

</body>
