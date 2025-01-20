<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>タスク編集</h1>
    <div>【タイトル】</div>
    <div>{{ $task->title }}</div>
    <div>【内容】</div>
    <div>{{ $task->body }}</div>

    <div class="bottun-container">
        <button onclick='location.href="{{ route("tasks.index") }}"'>一覧へ戻る</button>
    </div>
</body>
</html>
