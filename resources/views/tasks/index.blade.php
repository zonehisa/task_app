<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>タスク一覧</h1>
    <hr>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->title }}</li>
        @endforeach
    </ul>
</body>
</html>
