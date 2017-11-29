@component('components.invitation.base')
@slot('title')
  Vous avez été invité à rejoindre l'équipe {{$team->name}}
@endslot
@slot('token')
{{$token}}
@endslot
<br/>
<div class="form-group">
    <button type="submit" class="btn btn-primary">
        Accepter l'invitation
    </button>
</div>
@endcomponent
