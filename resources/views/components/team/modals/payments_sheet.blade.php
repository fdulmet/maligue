@component('components.modals.base')
@slot('id')
paymentsSheet
@endslot
@slot('title')
    Etat des paiements
@endslot
<div class="container">
    @if($team->sheet_url)
    <iframe src="{{$team->sheet_url}}" style='width:100%;min-height: 20em;'>
    </iframe>
    @endif
</div>
@endcomponent
