<!DOCTYPE HTML>
<html lang="pl">
<head>
    {include file="view/menu/head.tpl" title="O kinomanie"}
    <link rel="stylesheet" href="view/css/about-us-style.css">
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
        <div class="container">
            <section class="row"> 
                <div class="about-us col-md-12 ">
                <h3>O kinomanie</h3>
                <h4>Najważniejsze informacje w jednym miejscu</h4>
                    <div class="img-kino col-md-12">
                        <img src="view/img/sala_kinowa.jpg" class="img-fluid. max-width: 100%" alt="Responsive image"/>
                    </div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#Gdansk" role="tab" data-toggle="tab">Gdańsk</a></li>
                        <li><a href="#Gdynia" role="tab" data-toggle="tab">Gdynia</a></li>
                        <li><a href="#Grudziadz" role="tab" data-toggle="tab">Grudziądz</a></li>
                        <li><a href="#Ostroda" role="tab" data-toggle="tab">Ostróda</a></li>
                        <li><a href="#NewYork" role="tab" data-toggle="tab">Nowy Jork</a></li>
                    </ul>
                    <div class="tab-content row">
                    <div class="tab-pane active" id="Gdansk">
                        <div class="about-us-description col-lg-8 col-md-7">
                            <h4>Kinoman w Gdańsku</h4>
                            <p>Ut eget tellus justo. Donec blandit sagittis diam, eget euismod dolor laoreet ac. Phasellus consequat risus id felis fringilla bibendum. Donec ornare, mauris at venenatis ullamcorper, libero urna lobortis quam, vel posuere tellus est ac enim. Suspendisse potenti. Vivamus sollicitudin accumsan velit. Aliquam eu metus fermentum, dignissim nisl quis, egestas massa. Mauris vel nunc nisl. Integer nibh nisl, dictum nec blandit eget, ornare eget eros. Ut dapibus interdum magna et suscipit. Nunc luctus diam dui, sit amet mollis sapien vehicula id. Sed tincidunt sit amet ligula nec feugiat. Praesent aliquet accumsan massa quis euismod.</p>
                            <p>Aliquam consequat vel arcu ut lacinia. Curabitur nec dolor nec nunc maximus euismod. In sed elit id mauris luctus accumsan in et turpis. Sed maximus metus diam, sit amet elementum lectus iaculis eget. Nullam in dignissim nisl. Aliquam facilisis sapien nulla, ac pharetra metus ultrices id. In varius sapien eget urna fringilla lacinia. Donec facilisis pulvinar risus, interdum pharetra felis imperdiet et. Proin efficitur lacus consequat lectus scelerisque, at pulvinar est auctor. Aliquam pretium risus eu massa mattis consequat. Fusce nec dolor in dolor mollis sodales nec ut augue. Vestibulum in tellus nec arcu blandit dignissim. Aenean facilisis et magna nec pharetra. Aliquam blandit metus ut sollicitudin egestas.</p>
                        </div>
                        <div class="about-us-map col-lg-4 col-md-5 col-sm-12 hidden-xs">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1551.1847050232793!2d18.626002904506855!3d54.37198238135891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd749c2215e9b7%3A0x1ad56b08dcf2edfb!2sMultikino!5e0!3m2!1spl!2spl!4v1519124096670" width="350" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                         </div>		
                    </div>

                    <div class="tab-pane" id="Gdynia">
                        <div class="about-us-description col-lg-8 col-md-7">
                            <h4>Kinoman w Gdanii</h4>
                            <p>Ut eget tellus justo. Donec blandit sagittis diam, eget euismod dolor laoreet ac. Phasellus consequat risus id felis fringilla bibendum. Donec ornare, mauris at venenatis ullamcorper, libero urna lobortis quam, vel posuere tellus est ac enim. Suspendisse potenti. Vivamus sollicitudin accumsan velit. Aliquam eu metus fermentum, dignissim nisl quis, egestas massa. Mauris vel nunc nisl. Integer nibh nisl, dictum nec blandit eget, ornare eget eros. Ut dapibus interdum magna et suscipit. Nunc luctus diam dui, sit amet mollis sapien vehicula id. Sed tincidunt sit amet ligula nec feugiat. Praesent aliquet accumsan massa quis euismod.</p>
                            <p>Es euismod. In sed elit id mauris luctus accumsan in et turpis. Sed maximus metus diam, sit amet elementum lectus iaculis eget. Nullam in dignissim nisl. Aliquam facilisis sapien nulla, ac pharetra metus ultrices id. In varius sapien eget urna fringilla lacinia. Donec facilisis pulvinar risus, interdum pharetra felis imperdiet et. Proin efficitur lacus consequat lectus scelerisque, at pulvinar est auctor. Aliquam pretium risus eu massa mattis consequat. Fusce nec dolor in dolor mollis sodales nec ut augue. Vestibulum in tellus nec arcu blandit dignissim. Aenean facilisis et magna nec pharetra. Aliquam blandit metus ut sollicitudin egestas.</p>
                        </div>
                        <div class="about-us-map col-lg-4 col-md-5 col-sm-12 hidden-xs">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1637.4869947971115!2d18.546311490890226!3d54.52015885089932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fda73b9617c855%3A0x25b29a73a5ecc109!2sMultikino!5e0!3m2!1spl!2spl!4v1519134703486" width="350" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>		
                    </div>

                    <div class="tab-pane" id="Grudziadz">
                        <div class="about-us-description col-lg-8 col-md-7">
                            <h4>Kinoman w Grudziądzu</h4>
                            <p>Ut eget tellus justo. Donec blandit sagittis diam, eget euismod dolor laoreet ac. Phasellus consequat risus id felis fringilla bibendum. Donec ornare, mauris at venenatis ullamcorper, libero urna lobo eros. Ut dapibus interdum magna et suscipit. Nunc luctus diam dui, sit amet mollis sapien vehicula id. Sed tincidunt sit amet ligula nec feugiat. Praesent aliquet accumsan massa quis euismod.</p>
                            <p>Aliquam consequat vel arcu ut lacinia. Curabitur nec dolor nec nunc maximus euismod. In sed elit id mauris luctus accumsan in et turpis. Sed maximus metus diam, sit amet elementum lectus iaculis eget. Nullam in dignissim nisl. Aliquam facilisis sapien nulla, ac pharetra metus ultrices id. In varius sapien eget urna fringilla lacinia. Donec facilisis pulvinar risus, interdum pharetra felis imperdiet et. Proin efficitur lacus consequat lectus scelerisque, at pulvinar est auctor. Aliquam pretium risus eu massa mattis consequat. Fusce nec dolor in dolor mollis sodales nec ut augue. Vestibulum in tellus nec arcu blandit dignissim. Aenean facilisis et magna nec pharetra. Aliquam blandit metus ut sollicitudin egestas.</p>
                        </div>
                        <div class="about-us-map col-lg-4 col-md-5 col-sm-12 hidden-xs">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1551.1847050232793!2d18.626002904506855!3d54.37198238135891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd749c2215e9b7%3A0x1ad56b08dcf2edfb!2sMultikino!5e0!3m2!1spl!2spl!4v1519124096670" width="350" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>	
                    </div>

                    <div class="tab-pane" id="Ostroda">
                        <div class="about-us-description col-lg-8 col-md-7">
                            <h4>Kinoman w Ostródzie</h4>
                            <p>Ut eget tellus justo. Donec blandit sagittis diam, eget euismod dolor laoreet ac. Phasellus consequat risus id felis fringilla bibendum. Donec ornare, mauris at venenatis ullamcorper, libero urna lobortis quam, vel posuere tellus est ac enim. Suspendisse potenti. Vivamus sollicitudin accumsan velit. Aliquam eu metus fermentum, dignissim nisl quis, egestas massa. Mauris vel nunc nisl. Integer nibh nisl, dictum nec blandit eget, ornare eget eros. Ut dapibus interdum magna et suscipit. Nunc luctus diam dui, sit amet mollis sapien vehicula id. Sed tincidunt sit amet ligula nec feugiat. Praesent aliquet accumsan massa quis euismod.</p>
                        </div>
                        <div class="about-us-map col-lg-4 col-md-5 col-sm-12 hidden-xs">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1551.1847050232793!2d18.626002904506855!3d54.37198238135891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd749c2215e9b7%3A0x1ad56b08dcf2edfb!2sMultikino!5e0!3m2!1spl!2spl!4v1519124096670" width="350" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>		
                    </div>

                    <div class="tab-pane" id="NewYork">
                        <div class="about-us-description col-lg-8 col-md-7">
                            <h4>Kinoman w Nowym Jorku</h4>
                            <p>Ut eget tellus justo. Donec blandit sagittis diam, eget euismod dolor laoreet ac. Phasellus consequat risus id felis fringilla bibendum. Donec ornare, mauris at venenatis ullamcorper, libero urna lobortis quam, vel posuere tellus est ac enim. Suspendisse potenti. Vivamus sollicitudin accumsan velit. Aliquam eu metus fermentum, dignissim nisl quis, egestas massa. Mauris vel nunc nisl. Integer nibh nisl, dictum nec blandit eget, ornare eget eros. Ut dapibus interdum magna et suscipit. Nunc luctus diam dui, sit amet mollis sapien vehicula id. Sed tincidunt sit amet ligula nec feugiat. Praesent aliquet accumsan massa quis euismod.</p>
                            <p>Aliquam consequat vel arcu ut lacinia. Curabitur nec dolor nec nunc maximus euismod. In sed elit id mauris luctus accumsan in et turpis. Sed maximus metus diam, sit amet elementum lectus iaculis eget. Nullam in dignissim nisl. Aliquam facilisis sapien nulla, ac pharetra metus ultrices id. In varius sapien eget urna fringilla lacinia. Donec facilisis </p>
                         </div>
                        <div class="about-us-map col-lg-4 col-md-5 col-sm-12 hidden-xs">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1551.1847050232793!2d18.626002904506855!3d54.37198238135891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd749c2215e9b7%3A0x1ad56b08dcf2edfb!2sMultikino!5e0!3m2!1spl!2spl!4v1519124096670" width="350" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
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