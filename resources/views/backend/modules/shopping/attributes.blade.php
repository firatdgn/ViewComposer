<table>
    <thed>
        <tr>
            <th>Kodu</th>
            <th>İsmi</th>
            <th>İşlem</th>
        </tr>
    </thed>
    <tbody>
        @foreach($all as $e)
            <tr>
                <td>{{$e['code']}}</td>
                <td>{{getOnlyActiveLanguageValue($e['name'])}}</td>
                <td>{{$e['value']}}</td>
                <td>
                    <a href="{{url('Backend/Shopping/AttributeGroup/' . $e['id'] . '/Edit')}}">Düzenle</a>
                    <a href="{{url('Backend/Shopping/AttributeGroup/' . $e['id'] . '/Delete')}}">Sil</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>