<table>
    <thed>
        <tr>
            <th>Adı</th>
            <th>İkon</th>
            <th>Değeri</th>
            <th>İşlem</th>
        </tr>
    </thed>
    <tbody>
        @foreach($all as $e)
            <tr>
                <td>{{$e['title']}}</td>
                <td>{{$e['slug']}}</td>
                <td>{{$e['value']}}</td>
                <td>
                    <a href="{{url('Backend/SocialMedia/' . $e['id'] . '/Edit')}}">Düzenle</a>
                    <a href="{{url('Backend/SocialMedia/' . $e['id'] . '/Delete')}}">Sil</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>