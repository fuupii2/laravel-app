<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyProject</title>
</head>
<body>
    <h1>hello laravel</h1>
    <h2><a href="{{ route('posts.create') }}">Create Post!</a></h2>

    <ul>
        @forelse ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post) }}">
                    {{ $post->title }}
                </a>
                <a href="{{ route('posts.edit', $post) }}">
                    [edit]
                </a>
            </li>
        @empty
            <li>empty set</li>
        @endforelse
    </ul>
</body>
</html>
