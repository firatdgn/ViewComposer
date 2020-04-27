{{Form::open(['Backend/Shopping/Product/' . $get['id'] . '/Edit', 'method' => 'POST'])}}
<table>
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} Ürün Adı</th>
        <td>{{Form::text('name[' . $code . ']', getThisLanguageValue($code, $get['name']))}}</td></td>
    </tr>
    @endforeach
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} Kısa açıklaması</th>
        <td>{{Form::text('short_description[' . $code . ']', getThisLanguageValue($code, $get['short_description']))}}</td></td>
    </tr>
    @endforeach
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} Açıklaması</th>
        <td>{{Form::text('description[' . $code . ']', getThisLanguageValue($code, $get['description']))}}</td></td>
    </tr>
    @endforeach
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} SEO açıklaması</th>
        <td>{{Form::text('seo_description[' . $code . ']', getThisLanguageValue($code, $get['seo_description']))}}</td></td>
    </tr>
    @endforeach
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} SEO Keywords</th>
        <td>{{Form::text('seo_keywords[' . $code . ']', getThisLanguageValue($code, $get['seo_keywords']))}}</td></td>
    </tr>
    @endforeach
    <tr>
        <th>Fiyat</th>
        <td>{{Form::text('price', $get['price'])}}</td>
    </tr>
    <tr>
        <th colspan="2">{{Form::submit('Gönder')}}</th>
    </tr>
</table>
{{Form::close()}}