<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @extends('layout')

    @section('content')
        <h1>All Posts</h1>
        @foreach($posts as $post)
            <a href="{{ route('posts.show', $post->id) }}">
                {{ $post->title }}
            </a>
            <br>
        @endforeach
    @endsection

</body>
</html>

