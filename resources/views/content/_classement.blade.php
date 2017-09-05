<table class="table table-sm classement">
    <thead>
        <tr>
            <th colspan="10">
                <h2>Classement</h2>
            </th>
        </tr>
        <tr>
            <td>Rang</td>
            <td>Equipe</td>
            <td class="text-center">Points</td>
            <td class="text-center">&nbsp;J&nbsp;</td>
            <td class="text-center">&nbsp;G&nbsp;</td>
            <td class="text-center">&nbsp;N&nbsp;</td>
            <td class="text-center">&nbsp;P&nbsp;</td>
            <td class="text-center">bp</td>
            <td class="text-center">bc</td>
            <td class="text-center">diff.</td>
        </tr>
    </thead>

    <tbody>
    @foreach($statsClassement as $idx => $statClassement)
        <tr id="trChaqueEquipe">
            <td>{{ $idx +  1 }}</td>
            <td class="text-left">{{ str_limit($statClassement['nomEquipe'], 20, '...') }}</td>
            <td>{{ $statClassement['points'] }}</td>
            <td>{{ $statClassement['joues'] }}</td>
            <td>{{ $statClassement['gagnes'] }}</td>
            <td>{{ $statClassement['nuls'] }}</td>
            <td>{{ $statClassement['perdus'] }}</td>
            <td>{{ $statClassement['butsPour'] }}</td>
            <td>{{ $statClassement['butsContre'] }}</td>
            <td>
                @if($statClassement['diff'] > 0)
                    +{{ $statClassement['diff'] }}
                @else
                    {{ $statClassement['diff'] }}
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
