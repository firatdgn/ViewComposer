{{Form::open(['Backend/Settings/' .  $get['id'] . '/Edit', 'method' => 'POST'])}}
<table>
    <tr>
        <th>Tip</th>
        <td>{{Form::select('type', [ 1 => 'Local', 2 => 'Global' ], $get['type'])}}</td>
    </tr>
    <tr>
        <th>Anahtar</th>
        <td>{{Form::text('key', $get['key'])}}</td>
    </tr>
    <tr>
        <th>Başlık</th>
        <td>{{Form::text('title', $get['title'])}}</td>
    </tr>
    <tr>
        <th>Açıklama</th>
        <td>{{Form::text('description', $get['description'])}}</td>
    </tr>
    <tr>
        <th>Değeri</th>
        <td>{{Form::text('value', $get['value'])}}</td>
    </tr>
    <tr>
        <th colspan="2">{{Form::submit('Gönder')}}</th>
    </tr>
</table>
{{Form::close()}}