{{Form::open(['Backend/Statics/Create', 'method' => 'POST'])}}
<table>
    <tr>
        <th>Anahtar</th>
        <td>{{Form::text('key')}}</td>
    </tr>
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} Kategori ismi</th>
        <td>{{Form::text('value[' . $code . ']')}}</td>
    </tr>
    @endforeach
    <tr>
        <th>Değeri</th>
        <td>{{Form::select('is_html', [ '1' => 'Değil', '2' => 'HTML' ])}}</td>
    </tr>
    <tr>
        <th colspan="2">{{Form::submit('Gönder')}}</th>
    </tr>
</table>
{{Form::close()}}