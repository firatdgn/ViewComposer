{{Form::open(['Backend/Settings/Create', 'method' => 'POST', 'files' => true])}}
<table>
    <tr>
        <th>İsim</th>
        <td>{{Form::text('name', null)}}</td>
    </tr>
    <tr>
        <th>Açıklama</th>
        <td>{{Form::text('description', null)}}</td>
    </tr>
    <tr>
        <th>Dosya</th>
        <td>{{Form::file('link', null)}}</td>
    </tr>
    <tr>
        <th colspan="2">{{Form::submit('Gönder')}}</th>
    </tr>
</table>
{{Form::close()}}