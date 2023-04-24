@extends('layout')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laragigs</title>
</head>

<body>
@section('content')
    <h1>
        {{ $heading }}
    </h1>
    <h1>
        @foreach ($listings as $listing)
            <h2><a href="/{{$listing['id']}}" >{{ $listing['title']}}</a></h2>
            <p>{{ $listing['description'] }}</p>
        @endforeach
    </h1>
@endsection
</body>

</html>