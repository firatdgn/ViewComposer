{{Form::open(['Backend/Shopping/Category/' . $get['id'] . '/Edit', 'method' => 'POST'])}}
<table>
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} Kategori ismi</th>
        <td>{{Form::text('name[' . $code . ']', getThisLanguageValue($code, $get['name']))}}</td>
    </tr>
    @endforeach
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} Kısa Açıklama</th>
        <td>{{Form::text('short_description[' . $code . ']', getThisLanguageValue($code, $get['short_description']))}}</td>
    </tr>
    @endforeach
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} Açıklama</th>
        <td>{{Form::text('description[' . $code . ']', getThisLanguageValue($code, $get['description']))}}</td>
    </tr>
    @endforeach
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} SEO Açıklaması</th>
        <td>{{Form::text('seo_description[' . $code . ']', getThisLanguageValue($code, $get['seo_description']))}}</td>
    </tr>
    @endforeach
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} Seo Anahtar Kelimeler</th>
        <td>{{Form::text('seo_keywords[' . $code . ']', getThisLanguageValue($code, $get['seo_keywords']))}}</td>
    </tr>
    @endforeach
    <tr>
        <th colspan="2">{{Form::submit('Gönder')}}</th>
    </tr>
</table>
{{Form::close()}}