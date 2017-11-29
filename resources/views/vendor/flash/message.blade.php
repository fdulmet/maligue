<div class="container-fluid">
    <div class="row no-gutters">
        @foreach (session('flash_notification', collect())->toArray() as $message)
            @if ($message['overlay'])
                @include('flash::modal', [
                    'modalClass' => 'flash-modal',
                    'title'      => $message['title'],
                    'body'       => $message['message']
                ])
            @else
                <div class="alert alert-{{ $message['level'] }} alert-dismissible fade show {{ $message['important'] ? 'alert-important' : '' }}" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    {!! $message['message'] !!}
                </div>
            @endif
        @endforeach
    </div>
</div>
{{ session()->forget('flash_notification') }}