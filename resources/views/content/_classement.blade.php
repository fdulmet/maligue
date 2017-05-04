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
    @for($rang = 1; $rang <= 7; $rang++)
    <tr id="trChaqueEquipe">
        <td>{{ $rang }}</td>
        <td id="tdChaqueEquipe">FC Quinconces</td>
        <td id="tdChaqueEquipe">15</td>
        <td id="tdChaqueEquipe">5</td>
        <td id="tdChaqueEquipe">3</td>
        <td id="tdChaqueEquipe">0</td>
        <td id="tdChaqueEquipe">0</td>
        <td id="tdChaqueEquipe">30</td>
        <td id="tdChaqueEquipe">20</td>
        <td id="tdChaqueEquipe">10</td>
    </tr>
    @endfor
    <!--
    @ foreach($statsClassement as $idx => $statClassement)
        <tr>
            <td>{ { $idx +  1 }}</td>
            <td id="tdChaqueEquipe">{ { $statClassement['nomEquipe'] }}</td>
            <td id="tdChaqueEquipe">{ { $statClassement['points'] }}</td>
            <td id="tdChaqueEquipe">{ { $statClassement['joues'] }}</td>
            <td id="tdChaqueEquipe">{ { $statClassement['gagnes'] }}</td>
            <td id="tdChaqueEquipe">{ { $statClassement['nuls'] }}</td>
            <td id="tdChaqueEquipe">{ { $statClassement['perdus'] }}</td>
            <td id="tdChaqueEquipe">{ { $statClassement['butsPour'] }}</td>
            <td id="tdChaqueEquipe">{ { $statClassement['butsContre'] }}</td>
            <td id="tdChaqueEquipe">{ { $statClassement['diff'] }}</td>
        </tr>
    @ endforeach
    -->
</table>