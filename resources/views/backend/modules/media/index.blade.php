<table>
    <thed>
        <tr>
            <th>Başlık</th>
            <th>Açıklama</th>
            <th>Link</th>
            <th>İşlem</th>
        </tr>
    </thed>
    <tbody>
        @foreach($all as $e)
            <tr>
                <td>{{$e['name']}}</td>
                <td>{{$e['description']}}</td>
                <td>{{$e['link']}}</td>
                <td>
                    <a href="{{url('Backend/Media/' . $e['id'] . '/Edit')}}">Düzenle</a>
                    <a href="{{url('Backend/Media/' . $e['id'] . '/Delete')}}">Sil</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>