<table class="row">
    <tr>
        <div id="motClassement">
            Classement
        </div>
    </tr>
    <tr id="motsEntetes">
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
            <td>{{ $statClassement['diff'] }}</td>
        </tr>
    @endforeach
</table>
