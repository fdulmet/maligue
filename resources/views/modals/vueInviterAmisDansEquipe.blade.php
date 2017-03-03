<form class="form-horizontal" role="form" method="GET" action="{{ route('inviterAmisDansEquipe') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <div class="col-md-12">
            <input id="emailInvite1" type="text" class="form-control" name="emailInvite1"
                   placeholder="hatembenarfa@gmail.com" required autofocus>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <button type="submit" class="btn">
                Envoyer invitation
            </button>
        </div>
    </div>
</form>