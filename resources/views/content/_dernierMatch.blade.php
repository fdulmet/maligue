@foreach($statsCalendrier as $statCalendrier)
    @if($statCalendrier['equipe_1']==$nomAuthEquipe or $statCalendrier['equipe_2']==$nomAuthEquipe)
        @if($carbonStrtotime>$statCalendrier['dateStrtotime'])
            {{ Form::open(['action' => 'MatchController@save']) }}
            {{ Form::hidden('game_id', $statCalendrier['game_id'])  }}
            <table class="dernierMatch">
                <tr>
                    <td>{{ $statCalendrier['date'] }}</td>
                    <td>{{ $statCalendrier['heure'] }}</td>
                    <td>{{ $statCalendrier['equipe_1'] }}</td>
                    <td class="tdChampsButs">
                        @if (isset($statCalendrier['buts_1']))
                        {{ $statCalendrier['buts_1'] }}
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
                        {{ $statCalendrier['buts_2'] }}
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
