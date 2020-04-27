{{Form::open(['Backend/SocialMedia/Create', 'method' => 'POST'])}}
<table>
    <tr>
        <th>Sosyal Medya Adı</th>
        <td>{{Form::text('name')}}</td>
    </tr>
    <tr>
        <th>İkonu</th>
        <td>{{Form::text('icon')}}</td>
    </tr>
    <tr>
        <th>Değeri</th>
        <td>{{Form::text('value')}}</td>
    </tr>
    <tr>
        <th colspan="2">{{Form::submit('Gönder')}}</th>
    </tr>
</table>
{{Form::close()}}