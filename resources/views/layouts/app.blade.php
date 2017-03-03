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
    </head>
<body>
<!--Home Page-->
    @yield('banner')
    @yield('invitationEnvoyee')
    @yield('content')
    @yield ('footer') <!--comme tous les yields, il peut être utilisé OU PAS-->
</body>
</html>
