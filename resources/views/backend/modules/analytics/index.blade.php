<table>
    <thed>
        <tr>
            <th>Adı</th>
            <th>Değeri</th>
            <th>İşlem</th>
        </tr>
    </thed>
    <tbody>
        @foreach($all as $e)
            <tr>
                <td>{{$e['key']}}</td>
                <td>{{$e['value']}}</td>
                <td>
                    <a href="{{url('Backend/Analytics/' . $e['id'] . '/Edit')}}">Düzenle</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>