{{Form::open(['Backend/Shopping/AttributeGroup/' . $get['id'] . '/ValueAdd', 'method' => 'POST'])}}
<table>
    {{Form::hidden('group_id', $get['id'])}}
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} Kodu</th>
        <td>{{Form::text('name[' . $code . ']')}}</td>
    </tr>
    @endforeach
    <tr>
        <th colspan="2">{{Form::submit('Gönder')}}</th>
    </tr>
</table>
{{Form::close()}}