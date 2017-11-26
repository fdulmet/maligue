@component('components.invitation.base')
@slot('title')
  Vous avez été invité à créer une équipe dans la ligue {{$league->name}}
@endslot
@slot('token')
{{$token}}
@endslot
@include('components.invitation.team_form')
<br/>
<div class="form-group">
    <button type="submit" class="btn btn-primary">
        Accepter l'invitation
    </button>
</div>
@endcomponent
