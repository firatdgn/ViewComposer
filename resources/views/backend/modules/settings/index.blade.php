<table>
    <thed>
        <tr>
            <th>Tip</th>
            <th>Anahtar</th>
            <th>Başlık</th>
            <th>Açıklama</th>
            <th>Değeri</th>
            <th>İşlem</th>
        </tr>
    </thed>
    <tbody>
        @foreach($all as $e)
            <tr>
                <td>@if($e['type'] == 1) Local @else Global @endif </td>
                <td>{{$e['key']}}</td>
                <td>{{$e['title']}}</td>
                <td>{{$e['description']}}</td>
                <td>{{$e['value']}}</td>
                <td>
                    <a href="{{url('Backend/Settings/' . $e['id'] . '/Edit')}}">Düzenle</a>
                    <a href="{{url('Backend/Settings/' . $e['id'] . '/Delete')}}">Sil</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{url('Backend')}}">Ana Sayfa</a>