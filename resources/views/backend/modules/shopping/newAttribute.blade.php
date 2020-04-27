{{Form::open(['Backend/Shopping/AttributeGroup/Create', 'method' => 'POST'])}}
<table>
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} Kodu</th>
        <td>{{Form::text('code[' . $code . ']')}}</td>
    </tr>
    @endforeach
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} Adı</th>
        <td>{{Form::text('name[' . $code . ']')}}</td>
    </tr>
    @endforeach
    <tr>
        <th colspan="2">{{Form::submit('Gönder')}}</th>
    </tr>
</table>
{{Form::close()}}