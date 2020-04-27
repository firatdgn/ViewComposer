<table>
    <thed>
        <tr>
            <th>Adı</th>
            <th>İkon</th>
            <th>İşlem</th>
        </tr>
    </thed>
    <tbody>
        @foreach($all as $e)
            <tr>
                <td>{{getOnlyActiveLanguageValue($e['name'])}}</td>
                <td>{{getOnlyActiveLanguageValue($e['short_description'])}}</td>
                <td>{{$e['value']}}</td>
                <td>
                    <a href="{{url('Backend/Shopping/Category/' . $e['id'] . '/Edit')}}">Düzenle</a>
                    <a href="{{url('Backend/Shopping/Category/' . $e['id'] . '/Delete')}}">Sil</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>