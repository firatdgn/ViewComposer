{{Form::open(['Backend/Settings/Create', 'method' => 'POST'])}}
<table>
    <tr>
        <th>Tip</th>
        <td>{{Form::select('type', [ 1 => 'Local', 2 => 'Global' ], null)}}</td>
    </tr>
    <tr>
        <th>Anahtar</th>
        <td>{{Form::text('key', null)}}</td>
    </tr>
    <tr>
        <th>Başlık</th>
        <td>{{Form::text('title', null)}}</td>
    </tr>
    <tr>
        <th>Açıklama</th>
        <td>{{Form::text('description', null)}}</td>
    </tr>
    <tr>
        <th>Değeri</th>
        <td>{{Form::text('value', null)}}</td>
    </tr>
    <tr>
        <th colspan="2">{{Form::submit('Gönder')}}</th>
    </tr>
</table>
{{Form::close()}}

<a href="{{url('Backend')}}">Ana Sayfa</a> | <a href="{{url('Backend/Settings')}}">Geri</a>