<html>
<meta http-equiv="Content-Type" content="text/html; charset=Windows-1252">
<body>
<b>@foreach($offer_image as $images)
    <li><h5>{{ $images->path }}</h5>
    <img src="{{ asset('/offer/'.$images->offer_id.'/'.$images->path) }}" alt="{{ $images->path }}" width="550" height="450"/><br></li>
@endforeach</b>
</body>
</html>


