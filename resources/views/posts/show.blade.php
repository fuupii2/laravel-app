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
        <h1>{{ $post->title }}</h1>
        <form method="post" action="{{ route('posts.delete', $post) }}" id="destroy">
            @method('DELETE')
            @csrf
            <button>[x]</button>
        </form>

        <p>{!! nl2br(e($post->body)) !!}</p>

    <script>
        'use strict'
        {
        const destroy = document.getElementById('destroy');
        destroy.addEventListener('submit', e => {
            e.preventDefault();

            if(!confirm('Sure to delete?')) {
                return;
            }

            e.target.submit();
        });
    }
    </script>
</body>
</html>
