<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <h1>タスク詳細</h1>
    <div class="group">
        【タイトル】<br>
        {{ $task->title }}
    </div>
    <div class="group">
        【内容】<br>
        <p>{!! nl2br(e($task->body)) !!}</p>
    </div>

    <div class="button-container">
        <button onclick='location.href="{{ route("tasks.index") }}"'>一覧へ戻る</button>
        <button onclick='location.href="{{ route("tasks.edit", $task) }}"'>編集する</button>
        <form action="{{ route('tasks.destroy', $task) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除してもいいですか？')){return false};">
        </form>
    </div>
</body>
</html>
