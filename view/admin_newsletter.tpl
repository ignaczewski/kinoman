<!DOCTYPE HTML>
<html lang="pl">
<head>
    {include file="view/menu/head.tpl" title="Newsletter"}
    <link rel="stylesheet" href="view/css/admin_panel.css">
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
        <div class="table_newsletter">
            <table class="table-responsive">
                <thead>
                    <tr>
                        <th colspan="2">Ilość zapisanych email do newslettera:  {count($emailsNewsletter)}</th>
                    </tr>
                    <tr> 
                        <th>ID</th> <th>Email</th> 
                    </tr>
                </thead>
                {foreach $emailsNewsletter as $emailNewsletter}
                    <tr> <td>{$emailNewsletter['id']}</td> <td>{$emailNewsletter['email']}</td> </tr>
                {/foreach}
            </table>
        </div>
    </div>   
</main>
    
    {include file="view/footer.tpl"}
    <script src="view/js/jquery-3.2.1.min.js"></script>	
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="view/js/scripts.js"></script>
  </body>
</html>