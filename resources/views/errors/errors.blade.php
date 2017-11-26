@if ($errors->any())
    <ul class="alert alert-danger"><!--c'est une bootstrap class pour afficher les alertes-->
        @foreach($errors->all() as $error)<!--pour chaque erreur-->
                <li>{{ $error }}</li><!--ça affiche l'erreur-->
        @endforeach
    </ul>
@endif