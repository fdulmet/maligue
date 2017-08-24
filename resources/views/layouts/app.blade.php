<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        @if (isset($nomAuthLigue))
            {{ $nomAuthLigue }}
        @else
            {{ 'maligue' }}
        @endif
    </title><!--importer de bdd-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="js/app.js"></script>
    <script src="js/maligue.js"></script>
    <script>window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    </head>
<body>
<!--Home Page-->
    @yield('banner')
    @yield('invitationEnvoyee')
    @include('flash::message')
    @yield('content')
    @yield ('footer') <!--comme tous les yields, il peut être utilisé OU PAS-->
</body>
</html>
