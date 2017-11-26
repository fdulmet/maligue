@extends('layouts.main')

@section('content')
<br/>
<div class="container">
    <div class="row">
        <div class="col">
            <h5>{{ $title or '' }}</h5>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-8 offset-md-2">
          <form class="form-horizontal" role="form" enctype="multipart/form-data"
          action="{{route('invitation.register', ['token' => $token])}}" method='POST' >
            {{csrf_field()}}
            {{ $slot }}
          </form>
        </div>
    </div>
</div>
@endsection
