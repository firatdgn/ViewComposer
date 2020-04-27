<table>
    <thed>
        <tr>
            <th>Seçenek Adı</th>
            <th>Seçenek</th>
            <th>İşlem</th>
        </tr>
    </thed>
    <tbody>
        @foreach($all as $e)
            <tr>
                <td>{{$e['name']}}</td>
                <td>{{getOnlyActiveLanguageValue($e['name'])}}</td>
                <td>
                    <a href="{{url('Backend/Shopping/AttributeGroup/Value/' . $e['id'] . '/Edit')}}">Düzenle</a>
                    <a href="{{url('Backend/Shopping/AttributeGroup/Value/' . $e['id'] . '/Delete')}}">Sil</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>