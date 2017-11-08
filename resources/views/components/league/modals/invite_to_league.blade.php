@component('components.modals.base')
@slot('id')
inviterAmisCreer
@endslot
@slot('title')
  Inviter des amis à créer une équipe dans {{ $league->name }}
@endslot
  <form class="form-horizontal" role="form" method="POST" action="route('inviterAmiACreerEquipe')">
      {{ csrf_field() }}

      <div class="form-group">
          <div class="col-md-12">
              <input id="emailInvite1" type="text" class="form-control" name="emails"
                     placeholder="florianthauvin@gmail.com, djibrilcisse@gmail.com, etc" required>
          </div>
      </div>
      <div class="form-group">
          <div class="col-md-12">
              <button type="submit" class="btn btn-orange btn-block" id="bouton_submit">
                  Envoyer invitation
              </button>
          </div>
      </div>
  </form>
@endcomponent
