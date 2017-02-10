<!DOCTYPE html>
<html lang="en">
<head>
    <title>La ligue des pingouins</title><!--importer de bdd-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="js/app.js"></script>
    <script>window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}" />

    <!--Dialog Boxes-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!--Profil Joueur-->
        <script>
            $( function() {
                $( "#dialogProfilJoueur" ).dialog({
                    autoOpen: false,
                });
                $( "#openerProfilJoueur" ).on( "click", function() {
                    $( "#dialogProfilJoueur" ).dialog( "open" );
                });
            } );
        </script>
        <!--Inviter Amis Dans Equipe-->
        <script>
            $( function() {
                $( "#dialogInviterAmisDansEquipe" ).dialog({
                    autoOpen: false,
                });
                $( "#openerInviterAmisDansEquipe" ).on( "click", function() {
                    $( "#dialogInviterAmisDansEquipe" ).dialog( "open" );
                });
            } );
        </script>

</head>
<body>
<!--Facebook Login-->
<!--<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '1089588914497148',
            xfbml      : true,
            version    : 'v2.8'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8&appId=1089588914497148";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="true" data-auto-logout-link="true"></div>
-->
<!--Home Page-->
    @yield('banner')
    @yield('content')
    @yield ('footer') <!--comme tous les yields, il peut être utilisé OU PAS-->
</body>
</html>
