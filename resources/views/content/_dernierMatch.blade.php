@foreach($statsCalendrier as $statCalendrier)
    @if($statCalendrier['equipe_1']==$nomAuthEquipe or $statCalendrier['equipe_2']==$nomAuthEquipe)
        @if($carbonStrtotime>$statCalendrier['dateStrtotime'])
            {{ Form::open(['action' => 'MatchController@save']) }}
            {{ Form::hidden('game_id', $statCalendrier['game_id'])  }}

            <table class="dernierMatch">
                <tr>
                    <td>
                        @if(isset($statCalendrier['date_report']))
                            <span style="text-decoration: line-through;">{{ $statCalendrier['date'] }} {{ $statCalendrier['heure'] }}</span>
                            <br>
                            <span class="badge badge-warning">{{ \Carbon\Carbon::parse($statCalendrier['date_report'])->format('d/m/Y') }} {{ \Carbon\Carbon::parse($statCalendrier['heure_report'])->format('H\hi') }}</span>
                        @else
                            {{ $statCalendrier['date'] }} {{ $statCalendrier['heure'] }}
                        @endif

                    <!--
                @if(isset($statCalendrier['lieu_report']) || isset($statCalendrier['date_report']))
                        <span class="badge badge-danger">Reporté</span>
                        <br>
@endif
                            -->

                        @if(isset($statCalendrier['lieu_report']))
                            <br>
                            <span class="badge badge-warning">{{ $statCalendrier['lieu_report'] }}</span>
                        @endif
                    </td>
                    <td>{{ $statCalendrier['equipe_1'] }}</td>
                    <td class="tdChampsButs">
                        @if (isset($statCalendrier['buts_1']))
                            @if( (($statCalendrier['buts_1'] > $statCalendrier['buts_2']) && $statCalendrier['equipe_1'] === $currentEquipe->nom)
                            || (($statCalendrier['buts_1'] < $statCalendrier['buts_2']) && $statCalendrier['equipe_2'] === $currentEquipe->nom))
                                <span class="badge badge-lg badge-success">{{ $statCalendrier['buts_1'] }}</span>
                            @elseif( (($statCalendrier['buts_1'] < $statCalendrier['buts_2']) && $statCalendrier['equipe_1'] === $currentEquipe->nom)
                            || (($statCalendrier['buts_1'] > $statCalendrier['buts_2']) && $statCalendrier['equipe_2'] === $currentEquipe->nom))
                                <span class="badge badge-lg badge-danger">{{ $statCalendrier['buts_1'] }}</span>
                            @else
                                <span class="badge badge-lg badge-default">{{ $statCalendrier['buts_1'] }}</span>
                            @endif
                        @else
                            @if(Auth::user()->isAdmin() || Auth::user()->isAdminLigue() || Auth::user()->isCapitaine())
                            <!--Pour entrer nouveau score. Que capitaine. (Différence avec doubles accolades ?)-->
                            <input type="text" name="buts_1">
                            @else
                            {{ ' ' }}
                            @endif
                        @endif
                    </td>
                    <td>-</td>
                    <td class="tdChampsButs">
                        @if (isset($statCalendrier['buts_2']))
                            @if( (($statCalendrier['buts_1'] > $statCalendrier['buts_2']) && $statCalendrier['equipe_1'] === $currentEquipe->nom)
                            || (($statCalendrier['buts_1'] < $statCalendrier['buts_2']) && $statCalendrier['equipe_2'] === $currentEquipe->nom))
                                <span class="badge badge-lg badge-success">{{ $statCalendrier['buts_2'] }}</span>
                            @elseif( (($statCalendrier['buts_1'] < $statCalendrier['buts_2']) && $statCalendrier['equipe_1'] === $currentEquipe->nom)
                            || (($statCalendrier['buts_1'] > $statCalendrier['buts_2']) && $statCalendrier['equipe_2'] === $currentEquipe->nom))
                                <span class="badge badge-lg badge-danger">{{ $statCalendrier['buts_2'] }}</span>
                            @else
                                <span class="badge badge-lg badge-default">{{ $statCalendrier['buts_2'] }}</span>
                            @endif
                        @else
                            @if(Auth::user()->isAdmin() || Auth::user()->isAdminLigue() || Auth::user()->isCapitaine())
                            <!--Pour entrer nouveau score. Que capitaine.-->
                                <input type="text" name="buts_2">
                            @else
                                {{ ' ' }}
                            @endif
                        @endif
                    </td>
                    <td>{{ $statCalendrier['equipe_2'] }}</td>
                    @if (isset($statCalendrier['buts_2']))
                        {{ '' }}
                    @else
                        @if(Auth::user()->isAdmin() || Auth::user()->isAdminLigue() || Auth::user()->isCapitaine())
                        <td>{{ Form::submit('OK', ['class' => 'btn btn-orange']) }}</td>
                        @else
                            {{ '' }}
                        @endif
                    @endif
                </tr>
            </table>
            {{ Form::close() }}
        @else
            {{ '' }}
        @endif
    @endif
@endforeach
