@if($message = Session::get('success'))
    <p> {{ $message }} </p>
@endif

<a href="/new">create</a>
<p> Your Quota Remaining {{ 10-count($urls) }}/10 </p>

@if(!$urls->isEmpty())
    <table>
        <tr>
            <td>long url</td>
            <td>short url</td>
            <td>create</td>
        </tr>
        @foreach($urls as $url)
            <tr>
                <td>{{ $url->long_url }}</td>
                <td><a href="/gt/{{$url->short_url}}" target="_blank">{{ $url->short_url }}</a></td>
                <td>{{ $url->created_at }}</td>
            </tr>
        @endforeach
    </table>
@endif
