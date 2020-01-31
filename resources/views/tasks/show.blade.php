@extends('layouts.app')

@section('content')

 <h1>id = {{ $tasks->id }} のタスク詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $tasks->id }}</td>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>{{ $tasks->content }}</td>
        </tr>
    </table>

 {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $tasks->id], ['class' => 'btn btn-light']) !!}


@endsection