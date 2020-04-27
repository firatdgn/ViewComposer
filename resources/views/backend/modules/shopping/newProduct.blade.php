{{Form::open(['Backend/Shopping/Product/Create', 'method' => 'POST'])}}
<table>
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} Ürün Adı</th>
        <td>{{Form::text('name[' . $code . ']')}}</td>
    </tr>
    @endforeach
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} Kısa açıklaması</th>
        <td>{{Form::text('short_description[' . $code . ']')}}</td>
    </tr>
    @endforeach
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} Açıklaması</th>
        <td>{{Form::text('description[' . $code . ']')}}</td>
    </tr>
    @endforeach
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} SEO açıklaması</th>
        <td>{{Form::text('seo_description[' . $code . ']')}}</td>
    </tr>
    @endforeach
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} SEO Keywords</th>
        <td>{{Form::text('seo_keywords[' . $code . ']')}}</td>
    </tr>
    @endforeach
    <tr>
        <th>Fiyat</th>
        <td>{{Form::text('price')}}</td>
    </tr>
    <tr>
        <th colspan="2">{{Form::submit('Gönder')}}</th>
    </tr>
</table>
{{Form::close()}}