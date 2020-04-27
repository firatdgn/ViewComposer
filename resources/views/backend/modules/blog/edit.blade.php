{{Form::open(['Backend/SocialMedia/' . $get['id'] . '/Edit', 'method' => 'POST'])}}
<table>
    <tr>
        <th>Sosyal Medya Adı</th>
        <td>{{Form::text('name', $get['name'])}}</td>
    </tr>
    <tr>
        <th>İkonu</th>
        <td>{{Form::text('icon', $get['icon'])}}</td>
    </tr>
    <tr>
        <th>Değeri</th>
        <td>{{Form::text('value', $get['value'])}}</td>
    </tr>
    <tr>
        <th colspan="2">{{Form::submit('Gönder')}}</th>
    </tr>
</table>
{{Form::close()}}

<a href="{{url('Backend')}}">Ana Sayfa</a> | <a href="{{url('Backend/Blog')}}">Geri</a>