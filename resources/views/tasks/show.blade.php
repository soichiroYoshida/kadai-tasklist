@extends('layouts.app')

@section('content')
@include('commons.navbar')
<!-- 処理部分 -->
    <h1>id = {{ $task->id }}のタスク詳細</h1>
    <table class="table tablebordered">
        <tr>
            <th>ID</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>実行状況</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>タスク内容</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    {!! link_to_route("tasks.edit", "このタスクを編集", ["id" => $task->id], ['class' => 'btn btn-default']) !!}
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
    {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection