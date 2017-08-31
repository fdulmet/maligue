<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-green" data-toggle="modal" data-target="#{{ $id }}">
    {{ $titre }}
</button>

<!-- Modal -->
<div id="{{ $id }}" class="modal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                <h4 class="modal-title"> {{ $titre }} </h4>
            </div>
            <div class="modal-body">
                @include($body)
            </div>
            <!--<div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>-->
        </div>
    </div>
</div>

