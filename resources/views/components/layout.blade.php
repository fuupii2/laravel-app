<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyProject</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
    <div class="contents">
        {{ $slot }}
    </div>

</body>
</html>
