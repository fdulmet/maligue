<table class="row">
    <tr>
        <b>Classement</b>
    </tr>
    <tr id="ligneTitres">
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
    @foreach($statsClassement as $statClassement)
        <tr>
            <td></td>
            <td id="tdChaqueEquipe">{{ $statClassement['nomEquipe'] }}</td>
            <td id="tdChaqueEquipe">{{ $statClassement['points'] }}</td>
            <td id="tdChaqueEquipe">{{ $statClassement['joues'] }}</td>
            <td id="tdChaqueEquipe">{{ $statClassement['gagnes'] }}</td>
            <td id="tdChaqueEquipe">{{ $statClassement['nuls'] }}</td>
            <td id="tdChaqueEquipe">{{ $statClassement['perdus'] }}</td>
            <td id="tdChaqueEquipe">{{ $statClassement['butsPour'] }}</td>
            <td id="tdChaqueEquipe">{{ $statClassement['butsContre'] }}</td>
            <td id="tdChaqueEquipe">{{ $statClassement['diff'] }}</td>
        </tr>
    @endforeach
</table>