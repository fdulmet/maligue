@extends('layouts.main')

@section('content')
<div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-condensed table-main table-sm table-hover table-small">
                    <thead>
                    <tr>
                        <th class="lieu">Nom</th>
                        <th class="actions">Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($teams as $team)
                      <tr>
                          <td>{{ $team->name }}</td>
                          <td>
                            <a href="{{route('team.edit', ['teamSlug' => $team->slug])}}" class='btn btn-green'>Editer</a>
                            <a href="{{route('team.delete', ['teamSlug' => $team->slug])}}" class='btn btn-orange btn-block'>Supprimer</a>
                          </td>
                      </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
