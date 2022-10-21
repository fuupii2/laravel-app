<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyProject</title>
</head>
<body>
    <a href="/" class="backlink"> &laquo; back</a>
    <h2>Let's create something</h2>

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title')
            <div class="error">{{ $message }}</div>
        @enderror
        <textarea name="body"> {{ old('body') }}</textarea>
        @error('body')
            <div class="error">{{ $message }}</div>
        @enderror
        <button>[Add]</button>
    </form>
</body>
</html>
