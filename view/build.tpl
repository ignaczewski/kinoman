<!DOCTYPE HTML>
<html lang="pl">
<head>
    {include file="view/menu/head.tpl" title="Strona w budowie"}
    <link rel="stylesheet" href="view/css/build-style.css">
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
    <section>
        <div class="container">	
            <div class="content col-md-10 col-md-offset-1 col-sm-12">
                <article class="row">
                    <div class="one-build col-sm-12">	
                        <div class="build-title col-md-12">
                            <h2>Strona w budowie</h2>
                        </div>
                        <div class="build-content col-xs-12">
                            <div class="build-img col-md-5 col-sm-5 col-xs-4">
                                <img src="/view/img/budowa.png" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                            </div>
                            <div class="build-description col-md-7 col-sm-7 col-xs-8">
                                <h3>Przepraszamy za utrudnienia!</h3>
                                <p>Zapraszamy niebawem</p>
                            </div>
                        </div>
                    </div>	
                </article>
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