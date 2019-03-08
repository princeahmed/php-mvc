<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Write PHP like a Pro</title>
</head>
<body>

@if(!empty($name))
    <h1>Hello {{$name}}</h1>
@endif

@if(!empty($posts))
    @forelse($posts as $post)
        <h1>{{$post->title}}</h1>
        <p>{{$post->content}}</p>
        <hr>
    @empty
        <h1>No Post.</h1>
    @endforelse
@endif

</body>
</html>