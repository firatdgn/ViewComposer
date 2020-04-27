{{Form::open(['Backend/Shopping/AttributeGroup/' . $get['id'] . '/Edit', 'method' => 'POST'])}}
<table>
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} Kategori ismi</th>
        <td>{{Form::text('code[' . $code . ']', getThisLanguageValue($code, $get['code']))}}</td>
    </tr>
    @endforeach
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} Kısa Açıklama</th>
        <td>{{Form::text('name[' . $code . ']', getThisLanguageValue($code, $get['name']))}}</td>
    </tr>
    @endforeach
    <tr>
        <th colspan="2">{{Form::submit('Gönder')}}</th>
    </tr>
</table>
{{Form::close()}}