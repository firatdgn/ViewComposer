{{Form::open(['Backend/Shopping/Category/Create', 'method' => 'POST'])}}
<table>
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} Kategori ismi</th>
        <td>{{Form::text('name[' . $code . ']')}}</td>
    </tr>
    @endforeach
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} Kısa Açıklama</th>
        <td>{{Form::text('short_description[' . $code . ']')}}</td>
    </tr>
    @endforeach
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} Açıklama</th>
        <td>{{Form::text('description[' . $code . ']')}}</td>
    </tr>
    @endforeach
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} SEO Açıklaması</th>
        <td>{{Form::text('seo_description[' . $code . ']')}}</td>
    </tr>
    @endforeach
    @foreach(getAllLanguages() as $code => $name)
    <tr>
        <th>{{$name}} Seo Anahtar Kelimeler</th>
        <td>{{Form::text('seo_keywords[' . $code . ']')}}</td>
    </tr>
    @endforeach
    <tr>
        <th colspan="2">{{Form::submit('Gönder')}}</th>
    </tr>
</table>
{{Form::close()}}