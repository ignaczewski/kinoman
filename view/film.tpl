<!DOCTYPE HTML>
<html lang="pl">
<head>
    {include file="view/menu/head.tpl" title={$filmData['title']}}
    <link rel="stylesheet" href="/view/css/film-style.css">
</head>
<body> 
    {if $zalogowany == 'admin'}
        {include file="view/menu/menu_admin.tpl"}
    {elseif $zalogowany == 'user'}
        {include file="view/menu/menu_log.tpl"}          
    {else}
        {include file="view/menu/menu.tpl"}
    {/if}
    <main>
        <div class="container">
            <div class="row film-header col-md-12">
                <div class="film-img col-md-3 col-sm-3  hidden-xs">
                    <img src="/view/files/{$filmImage}.jpg" class="img-fluid. max-width: 100%" alt="Responsive image">
                </div>
                <div class="film-front col-md-9 col-sm-9 col-xs-12  ">
                    <div class="film-title col-md-12 col-sm-12 col-xs-12">
                        <h1>{$filmData['title']}</h1>
                        <h2>{$filmData['title_org']}</h2>
                    </div>
                    <div class="film-repertoire col-md-12 col-sm-12 col-xs-12">
                        <div class="film-rep-box col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12 ">
                            <div class="film-day-rep col-md-2 col-sm-2 col-xs-4">
                                <h2>{$repDate->day_name[0]}</h2>
                                <h3>{$repDate->day_num[0]}</h3>
                                <p>{$repDate->month[0]}</p>
                                <div class="film-day-h">
                                    <a href="#" data-toggle="modal" data-target="#myModal">9:15</a> <a href="#" data-toggle="modal" data-target="#myModal">11:30</a> <a href="#" data-toggle="modal" data-target="#myModal">13:00</a>
                                    <a href="#" data-toggle="modal" data-target="#myModal">15:15</a> <a href="#" data-toggle="modal" data-target="#myModal">16:45</a> <a href="#" data-toggle="modal" data-target="#myModal">18:00</a>
                                    <a href="#" data-toggle="modal" data-target="#myModal">19:15</a> <a href="#" data-toggle="modal" data-target="#myModal">20:00</a> <a href="#"data-toggle="modal" data-target="#myModal">21:30</a>
                                </div>	
                            </div>
                            <div class="film-day-rep col-md-2 col-sm-2 col-xs-4">
                                <h2>{$repDate->day_name[1]}</h2>
                                <h3>{$repDate->day_num[1]}</h3>
                                <p>{$repDate->month[1]}</p>
                                <div class="film-day-h">
                                    <a href="#" data-toggle="modal" data-target="#myModal">9:15</a> <a href="#" data-toggle="modal" data-target="#myModal">11:30</a> <a href="#" data-toggle="modal" data-target="#myModal">13:00</a>
                                    <a href="#" data-toggle="modal" data-target="#myModal">15:15</a> <a href="#" data-toggle="modal" data-target="#myModal">16:45</a> <a href="#" data-toggle="modal" data-target="#myModal">18:00</a>
                                    <a href="#" data-toggle="modal" data-target="#myModal">19:15</a> <a href="#" data-toggle="modal" data-target="#myModal">20:00</a> <a href="#"data-toggle="modal" data-target="#myModal">21:30</a>
                                </div>	
                            </div>
                            <div class="film-day-rep col-md-2 col-sm-2 col-xs-4">
                                <h2>{$repDate->day_name[2]}</h2>
                                <h3>{$repDate->day_num[2]}</h3>
                                <p>{$repDate->month[2]}</p>
                                <div class="film-day-h">
                                    <a href="#" data-toggle="modal" data-target="#myModal">9:15</a> <a href="#" data-toggle="modal" data-target="#myModal">11:30</a> <a href="#" data-toggle="modal" data-target="#myModal">13:00</a>
                                    <a href="#" data-toggle="modal" data-target="#myModal">15:15</a> <a href="#" data-toggle="modal" data-target="#myModal">16:45</a> <a href="#" data-toggle="modal" data-target="#myModal">18:00</a>
                                    <a href="#" data-toggle="modal" data-target="#myModal">19:15</a> <a href="#" data-toggle="modal" data-target="#myModal">20:00</a> <a href="#"data-toggle="modal" data-target="#myModal">21:30</a>
                                </div>	
                            </div>
                            <div class="film-day-rep col-md-2 col-sm-2 col-xs-4">
                                <h2>{$repDate->day_name[3]}</h2>
                                <h3>{$repDate->day_num[3]}</h3>
                                <p>{$repDate->month[3]}</p>
                                <div class="film-day-h">
                                    <a href="#" data-toggle="modal" data-target="#myModal">9:15</a> <a href="#" data-toggle="modal" data-target="#myModal">11:30</a> <a href="#" data-toggle="modal" data-target="#myModal">13:00</a>
                                    <a href="#" data-toggle="modal" data-target="#myModal">15:15</a> <a href="#" data-toggle="modal" data-target="#myModal">16:45</a> <a href="#" data-toggle="modal" data-target="#myModal">18:00</a>
                                    <a href="#" data-toggle="modal" data-target="#myModal">19:15</a> <a href="#" data-toggle="modal" data-target="#myModal">20:00</a> <a href="#"data-toggle="modal" data-target="#myModal">21:30</a>
                                </div>	
                            </div>
                            <div class="film-day-rep col-md-2 col-sm-2 col-xs-4">
                                <h2>{$repDate->day_name[4]}</h2>
                                <h3>{$repDate->day_num[4]}</h3>
                                <p>{$repDate->month[4]}</p>
                                <div class="film-day-h">
                                    <a href="#" data-toggle="modal" data-target="#myModal">9:15</a> <a href="#" data-toggle="modal" data-target="#myModal">11:30</a> <a href="#" data-toggle="modal" data-target="#myModal">13:00</a>
                                    <a href="#" data-toggle="modal" data-target="#myModal">15:15</a> <a href="#" data-toggle="modal" data-target="#myModal">16:45</a> <a href="#" data-toggle="modal" data-target="#myModal">18:00</a>
                                    <a href="#" data-toggle="modal" data-target="#myModal">19:15</a> <a href="#" data-toggle="modal" data-target="#myModal">20:00</a> <a href="#"data-toggle="modal" data-target="#myModal">21:30</a>
                                </div>	
                            </div>
                            <div class="film-day-rep col-md-2 col-sm-2 col-xs-4">
                                <h2>{$repDate->day_name[5]}</h2>
                                <h3>{$repDate->day_num[5]}</h3>
                                <p>{$repDate->month[5]}</p>
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
                    <span>premiera:</span> <p>{$filmData['premiere']}</p>
                    <span>reżyseria:</span> <p>Ryan Coogler</p>
                    <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                    <span>gatunek:</span> <p>{$filmData['genre']}</p>
                    <span>produkcja:</span> <p>{$filmData['production']}</p>
                    <span>Czas trwania:</span> <p>{$filmData['length']}</p>
                    <span>Zalecany wiek:</span> <p>{$filmData['rec_age']}</p>
            </div>
            <div class="film-description col-md-9 col-sm-9 col-xs-9">
                <div class="film-desc col-md-12 col-sm-12">
                    <h3>Opis:</h3>
                    <p>{$filmData['description']}</p>
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

    {include file='view/footer.tpl'}
    <script src="/view/js/jquery-3.2.1.min.js"></script>	
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="/view/js/scripts.js"></script>
	
</body>
</html>