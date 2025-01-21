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
    <form action = "{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="title">タイトル</label>
        <br>
        <input type="text" name="title" id="title" value="{{ $task->title }}">
        <br>
        <label for="body">内容</label>
        <br>
        <textarea name="body" id="body">{{ $task->body }}</textarea>
        <br>
        <button type="submit">更新</button>
    </form>

    <div class="bottun-container">
        <button onclick='location.href="{{ route("tasks.index") }}"'>一覧へ戻る</button>
    </div>
</body>
</html>
