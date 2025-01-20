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
    <ul>
        @foreach ($tasks as $task)
            <li><a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a></li>
        @endforeach
    </ul>
    <hr>
    <h1>新規タスク登録</h1>
    <form action = "{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">タイトル</label>
        <br>
        <input type="text" name="title" id="title">
        <br>
        <label for="body">内容</label>
        <br>
        <textarea name="body" id="body"></textarea>
        <br>
        <button type="submit">登録</button>
    </form>

</body>
</html>
