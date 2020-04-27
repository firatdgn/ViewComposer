{{Form::open(['Backend/Shopping/AttributeGroup/Value/' . $get['id'] . '/Edit', 'method' => 'POST'])}}
<table>
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} Kodu</th>
        <td>{{Form::text('name[' . $code . ']', getThisLanguageValue($code, $get['name']))}}</td>
    </tr>
    @endforeach
    <tr>
        <th colspan="2">{{Form::submit('Gönder')}}</th>
    </tr>
</table>
{{Form::close()}}