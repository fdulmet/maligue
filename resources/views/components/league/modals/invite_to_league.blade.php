@component('components.modals.base')
@slot('id')
inviterAmisCreer
@endslot
@slot('title')
    Inviter des amis à rejoindre créer une équipe
@endslot
<div class="form-horizontal" >

    <div class="form-group">
        <div class="col-md-12">
          <input id="invite_league_input" type="text" class="form-control" name="emails" data-role="tagsinput"
                 placeholder="hatembenarfa@gmail.com, antoinegriezmann@gmail.com, etc" required>
         <i>Chaque mail doit être séparé par une virgule. Seuls les mails valides (et mis en forme comme tel) seront utilisés</i>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
          <form class="form-horizontal" role="form" method="POST" action="{{route('league.invite', ['leagueSlug' => $league->slug])}}" id='invite_league_form'>
            {{ csrf_field() }}
            <button type="submit" class="btn btn-orange btn-block" id="bouton_submit">
                Envoyer invitation
            </button>
          </form>
        </div>
    </div>
</div>
@endcomponent
@push('scripts')
<script>
function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}
var invite_team_emails = {};

$('#invite_league_input').on('beforeItemAdd', function(event) {
  if (!validateEmail(event.item)) {
    event.cancel = true;
  }
});
$('#invite_league_input').on('itemAdded', function(event) {
  var key = Math.random().toString(36).substring(7);
  invite_team_emails[event.item] = key;
  var element = "<input type='hidden' name='emails[]' value='" +  event.item + "' id='email-" + key + "'>";
  $("#invite_league_form").prepend(element);
});
$('#invite_league_input').on('itemRemoved', function(event) {
  var key = invite_team_emails[event.item];
  $( "#email-" + key ).remove();
});
</script>
@endpush
