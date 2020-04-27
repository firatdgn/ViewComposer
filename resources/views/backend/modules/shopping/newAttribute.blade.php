{{Form::open(['Backend/Shopping/AttributeGroup/Create', 'method' => 'POST'])}}
<table>
    <tr>
        <th> Kodu</th>
        <td>{{Form::text('code')}}</td>
    </tr>
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