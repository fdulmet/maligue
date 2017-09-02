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
            <td>Points</td>
            <td>&nbsp;J&nbsp;</td>
            <td>&nbsp;G&nbsp;</td>
            <td>&nbsp;N&nbsp;</td>
            <td>&nbsp;P&nbsp;</td>
            <td>bp</td>
            <td>bc</td>
            <td>diff.</td>
        </tr>
    </thead>

    <tbody>
    @foreach($statsClassement as $idx => $statClassement)
        <tr id="trChaqueEquipe">
            <td>{{ $idx +  1 }}</td>
            <td>{{ $statClassement['nomEquipe'] }}</td>
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
