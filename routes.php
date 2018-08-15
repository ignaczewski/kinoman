<?php

// LEGEND
// URL => Controller@Function

$_ROUTES = array(
    
    //LOGIN 
    '' => 'Main@view',
    'cennik' => 'Main@cennikView',
    'repertuar' => 'Main@repertuarView',    
    'zapowiedzi' => 'Main@zapowiedziView', 
    'o_kinomanie' => 'Main@o_multikinieView',
    'rejestracja' => 'Main@rejestracjaView',
    'admin_newsletter' => 'Main@adminNewsletterView',
    'admin_film' => 'Main@addFilmView',
    'build'  => 'Main@buildView',

    'login' => 'Login@tryLogin',
    'logout' => 'Login@logoutUser',
    'registration' => 'Login@tryRegistration',
    'newsletter' => 'Login@tryAddEmail',
    'contact' => 'Login@trySendEmail',
    
    'add_film'  => 'Admin@addFilm',
    'film/{:id}' => 'Admin@viewFilm'
   
);
