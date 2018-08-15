<!DOCTYPE HTML>
<html lang="pl">
<head>
    {include file="view/menu/head.tpl" title="Zapowiedzi"}
    <link rel="stylesheet" href="view/css/prevue-style.css">
</head>
<body>
    {if $zalogowany == 'admin'}
        {include file="view/menu/menu_admin.tpl"}
    {elseif $zalogowany == 'user'}
        {include file="view/menu/menu_log.tpl"}          
    {else }
        {include file="view/menu/menu.tpl"}
    {/if}
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
                    {foreach $films as $film}
                        <article class="row">
                            <div class="one-prevue col-sm-12">	
                                <div class="prevue-title col-md-12">
                                    <h2><a href="/film/{$film['ID']}">{$film['title']}</a></h2>
                                    <h3>{$film['title_org']}</h3>
                                </div>
                                <div class="prevue-content col-xs-12">
                                    <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                        <img src="/view/files/{$filmsImage[{$film['ID']}]}.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                                    </div>
                                    <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                        <span>premiera:</span> <p>{$film['premiere']}</p>
                                        <span>reżyseria:</span> <p>Ryan Coogler</p>
                                        <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                        <span>gatunek:</span> <p>{$film['genre']}</p>
                                        <span>produkcja:</span> <p>{$film['production']}</p>
                                    </div>
                                    <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                        <p>{$film['description']}</p>
                                        <p name="more"><a href="/film/{$film['ID']}">Zobacz więcej</a></p>
                                    </div>
                                </div>
                            </div>	
                        </article>
                    {/foreach} 
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
                    {foreach $films as $film}
                        <article class="row">
                            <div class="one-prevue col-sm-12">	
                                <div class="prevue-title col-md-12">
                                    <h2><a href="/film/{$film['ID']}">{$film['title']}</a></h2>
                                    <h3>{$film['title_org']}</h3>
                                </div>
                                <div class="prevue-content col-xs-12">
                                    <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                        <img src="/view/files/{$filmsImage[{$film['ID']}]}.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                                    </div>
                                    <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                        <span>premiera:</span> <p>{$film['premiere']}</p>
                                        <span>reżyseria:</span> <p>Ryan Coogler</p>
                                        <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                        <span>gatunek:</span> <p>{$film['genre']}</p>
                                        <span>produkcja:</span> <p>{$film['production']}</p>
                                    </div>
                                    <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                        <p>{$film['description']}</p>
                                        <p name="more"><a href="/film/{$film['ID']}">Zobacz więcej</a></p>
                                    </div>
                                </div>
                            </div>	
                        </article>
                    {/foreach} 
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
                    {foreach $films as $film}
                        <article class="row">
                            <div class="one-prevue col-sm-12">	
                                <div class="prevue-title col-md-12">
                                    <h2><a href="/film/{$film['ID']}">{$film['title']}</a></h2>
                                    <h3>{$film['title_org']}</h3>
                                </div>
                                <div class="prevue-content col-xs-12">
                                    <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                        <img src="/view/files/{$filmsImage[{$film['ID']}]}.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                                    </div>
                                    <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                        <span>premiera:</span> <p>{$film['premiere']}</p>
                                        <span>reżyseria:</span> <p>Ryan Coogler</p>
                                        <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                        <span>gatunek:</span> <p>{$film['genre']}</p>
                                        <span>produkcja:</span> <p>{$film['production']}</p>
                                    </div>
                                    <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                        <p>{$film['description']}</p>
                                        <p name="more"><a href="/film/{$film['ID']}">Zobacz więcej</a></p>
                                    </div>
                                </div>
                            </div>	
                        </article>
                    {/foreach} 
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
                    {foreach $films as $film}
                        <article class="row">
                            <div class="one-prevue col-sm-12">	
                                <div class="prevue-title col-md-12">
                                    <h2><a href="/film/{$film['ID']}">{$film['title']}</a></h2>
                                    <h3>{$film['title_org']}</h3>
                                </div>
                                <div class="prevue-content col-xs-12">
                                    <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                        <img src="/view/files/{$filmsImage[{$film['ID']}]}.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                                    </div>
                                    <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                        <span>premiera:</span> <p>{$film['premiere']}</p>
                                        <span>reżyseria:</span> <p>Ryan Coogler</p>
                                        <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                        <span>gatunek:</span> <p>{$film['genre']}</p>
                                        <span>produkcja:</span> <p>{$film['production']}</p>
                                    </div>
                                    <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                        <p>{$film['description']}</p>
                                        <p name="more"><a href="/film/{$film['ID']}">Zobacz więcej</a></p>
                                    </div>
                                </div>
                            </div>	
                        </article>
                    {/foreach} 
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
                    {foreach $films as $film}
                        <article class="row">
                            <div class="one-prevue col-sm-12">	
                                <div class="prevue-title col-md-12">
                                    <h2><a href="/film/{$film['ID']}">{$film['title']}</a></h2>
                                    <h3>{$film['title_org']}</h3>
                                </div>
                                <div class="prevue-content col-xs-12">
                                    <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                        <img src="/view/files/{$filmsImage[{$film['ID']}]}.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                                    </div>
                                    <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                        <span>premiera:</span> <p>{$film['premiere']}</p>
                                        <span>reżyseria:</span> <p>Ryan Coogler</p>
                                        <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                        <span>gatunek:</span> <p>{$film['genre']}</p>
                                        <span>produkcja:</span> <p>{$film['production']}</p>
                                    </div>
                                    <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                        <p>{$film['description']}</p>
                                        <p name="more"><a href="/film/{$film['ID']}">Zobacz więcej</a></p>
                                    </div>
                                </div>
                            </div>	
                        </article>
                    {/foreach} 
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
                    {foreach $films as $film}
                        <article class="row">
                            <div class="one-prevue col-sm-12">	
                                <div class="prevue-title col-md-12">
                                    <h2><a href="/film/{$film['ID']}">{$film['title']}</a></h2>
                                    <h3>{$film['title_org']}</h3>
                                </div>
                                <div class="prevue-content col-xs-12">
                                    <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                        <img src="/view/files/{$filmsImage[{$film['ID']}]}.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                                    </div>
                                    <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                        <span>premiera:</span> <p>{$film['premiere']}</p>
                                        <span>reżyseria:</span> <p>Ryan Coogler</p>
                                        <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                        <span>gatunek:</span> <p>{$film['genre']}</p>
                                        <span>produkcja:</span> <p>{$film['production']}</p>
                                    </div>
                                    <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                        <p>{$film['description']}</p>
                                        <p name="more"><a href="/film/{$film['ID']}">Zobacz więcej</a></p>
                                    </div>
                                </div>
                            </div>	
                        </article>
                   {/foreach} 
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
                    {foreach $films as $film}
                        <article class="row">
                            <div class="one-prevue col-sm-12">	
                                <div class="prevue-title col-md-12">
                                    <h2><a href="/film/{$film['ID']}">{$film['title']}</a></h2>
                                    <h3>{$film['title_org']}</h3>
                                </div>
                                <div class="prevue-content col-xs-12">
                                    <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                        <img src="/view/files/{$filmsImage[{$film['ID']}]}.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                                    </div>
                                    <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                        <span>premiera:</span> <p>{$film['premiere']}</p>
                                        <span>reżyseria:</span> <p>Ryan Coogler</p>
                                        <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                        <span>gatunek:</span> <p>{$film['genre']}</p>
                                        <span>produkcja:</span> <p>{$film['production']}</p>
                                    </div>
                                    <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                        <p>{$film['description']}</p>
                                        <p name="more"><a href="/film/{$film['ID']}">Zobacz więcej</a></p>
                                    </div>
                                </div>
                            </div>	
                        </article>
                    {/foreach} 
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
                    {foreach $films as $film}
                        <article class="row">
                            <div class="one-prevue col-sm-12">	
                                <div class="prevue-title col-md-12">
                                    <h2><a href="/film/{$film['ID']}">{$film['title']}</a></h2>
                                    <h3>{$film['title_org']}</h3>
                                </div>
                                <div class="prevue-content col-xs-12">
                                    <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                        <img src="/view/files/{$filmsImage[{$film['ID']}]}.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                                    </div>
                                    <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                        <span>premiera:</span> <p>{$film['premiere']}</p>
                                        <span>reżyseria:</span> <p>Ryan Coogler</p>
                                        <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                        <span>gatunek:</span> <p>{$film['genre']}</p>
                                        <span>produkcja:</span> <p>{$film['production']}</p>
                                    </div>
                                    <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                        <p>{$film['description']}</p>
                                        <p name="more"><a href="/film/{$film['ID']}">Zobacz więcej</a></p>
                                    </div>
                                </div>
                            </div>	
                        </article>
                    {/foreach} 
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
                    {foreach $films as $film}
                        <article class="row">
                            <div class="one-prevue col-sm-12">	
                                <div class="prevue-title col-md-12">
                                    <h2><a href="/film/{$film['ID']}">{$film['title']}</a></h2>
                                    <h3>{$film['title_org']}</h3>
                                </div>
                                <div class="prevue-content col-xs-12">
                                    <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                        <img src="/view/files/{$filmsImage[{$film['ID']}]}.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                                    </div>
                                    <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                        <span>premiera:</span> <p>{$film['premiere']}</p>
                                        <span>reżyseria:</span> <p>Ryan Coogler</p>
                                        <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                        <span>gatunek:</span> <p>{$film['genre']}</p>
                                        <span>produkcja:</span> <p>{$film['production']}</p>
                                    </div>
                                    <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                        <p>{$film['description']}</p>
                                        <p name="more"><a href="/film/{$film['ID']}">Zobacz więcej</a></p>
                                    </div>
                                </div>
                            </div>	
                        </article>
                    {/foreach} 
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
                    {foreach $films as $film}
                        <article class="row">
                            <div class="one-prevue col-sm-12">	
                                <div class="prevue-title col-md-12">
                                    <h2><a href="/film/{$film['ID']}">{$film['title']}</a></h2>
                                    <h3>{$film['title_org']}</h3>
                                </div>
                                <div class="prevue-content col-xs-12">
                                    <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                        <img src="/view/files/{$filmsImage[{$film['ID']}]}.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                                    </div>
                                    <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                        <span>premiera:</span> <p>{$film['premiere']}</p>
                                        <span>reżyseria:</span> <p>Ryan Coogler</p>
                                        <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                        <span>gatunek:</span> <p>{$film['genre']}</p>
                                        <span>produkcja:</span> <p>{$film['production']}</p>
                                    </div>
                                    <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                        <p>{$film['description']}</p>
                                        <p name="more"><a href="/film/{$film['ID']}">Zobacz więcej</a></p>
                                    </div>
                                </div>
                            </div>	
                        </article>
                    {/foreach} 
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
                    {foreach $films as $film}
                        <article class="row">
                            <div class="one-prevue col-sm-12">	
                                <div class="prevue-title col-md-12">
                                    <h2><a href="/film/{$film['ID']}">{$film['title']}</a></h2>
                                    <h3>{$film['title_org']}</h3>
                                </div>
                                <div class="prevue-content col-xs-12">
                                    <div class="prevue-img col-md-3 col-sm-3 col-xs-4">
                                        <img src="/view/files/{$filmsImage[{$film['ID']}]}.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                                    </div>
                                    <div class="prevue-info col-md-2 col-sm-3 col-xs-8">
                                        <span>premiera:</span> <p>{$film['premiere']}</p>
                                        <span>reżyseria:</span> <p>Ryan Coogler</p>
                                        <span>scenariusz:</span> <p>Joe Robert Cole, Ryan Coogler</p>
                                        <span>gatunek:</span> <p>{$film['genre']}</p>
                                        <span>produkcja:</span> <p>{$film['production']}</p>
                                    </div>
                                    <div class="prevue-description col-md-7 col-sm-6 col-xs-12">
                                        <p>{$film['description']}</p>
                                        <p name="more"><a href="/film/{$film['ID']}">Zobacz więcej</a></p>
                                    </div>
                                </div>
                            </div>	
                        </article>
                    {/foreach} 
                </div>
            </div>
        </section>
    </main>

    {include file='view/footer.tpl'}
    <script src="view/js/jquery-3.2.1.min.js"></script>	
    <script src="view/js/jquery.scrollTo.min.js"></script>
    <script src="view/js/scrollup.js"></script>
    <script src="view/js/scripts.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>