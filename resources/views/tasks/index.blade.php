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
    <h1>タスク一覧</h1>
    <ul>
        @foreach ($tasks as $task)
            <li>
                <a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a>
                <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="削除する" onclick="if(!confirm('削除してもいいですか？')){return false};">
                </form>
            </li>
        @endforeach
    </ul>
    <hr>
    <h1>新規タスク登録</h1>

    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action = "{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="group">
            <label for="title">タイトル</label>
            <br>
            <input type="text" name="title" id="title">
        </div>
        <div class="group">
            <label for="body">本文</label>
            <br>
            <textarea name="body" id="body"></textarea>
        </div>
        <button type="submit">Create Task</button>
    </form>

</body>

</html>
