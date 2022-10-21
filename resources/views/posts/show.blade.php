<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Myproject</title>
</head>
<body>
    <a href="/" class="backlink"> &laquo; back</a>
    <ul>
        <h1>{{ $post->title }}</h1>
        <p>{!! nl2br(e($post->body)) !!}</p>
    </ul>
</body>
</html>
