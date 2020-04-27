{{Form::open(['Backend/Analytics/' . $get['id'] . '/Edit', 'method' => 'POST'])}}
<table>
    <tr>
        <th>Değeri</th>
        <td>{{Form::text('value', $get['value'])}}</td>
    </tr>
    <tr>
        <th colspan="2">{{Form::submit(getTrans('guncelle'))}}</th>
    </tr>
</table>
{{Form::close()}}