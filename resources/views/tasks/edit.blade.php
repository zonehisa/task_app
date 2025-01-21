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
    <h1>タスク編集</h1>
    <form action = "{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="group">
            <label for="title">タイトル</label>
            <br>
            <input type="text" name="title" id="title" value="{{ $task->title }}">
        </div>
        <div class="group">
            <label for="body">内容</label>
            <br>
            <textarea name="body" id="body">{{ $task->body }}</textarea>
        </div>
    </form>

    <div class="button-container">
        <button type="submit">更新</button>
        <button onclick='location.href="{{ route("tasks.show", $task) }}"'>詳細に戻る</button>
    </div>
</body>
</html>
