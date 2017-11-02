@extends('layouts.app')

@section('content')
@include('commons.navbar')
<!-- 処理部分 -->
    @if (Auth::check())
        <h1>タスク一覧</h1>
        @if(count($tasks) > 0)
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>実行状況</th>
                    <th>タスク</th>
                </tr>
                @foreach ($tasks as $task)
                <?php if(Auth::user()->id === $task->user_id): ?>
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->content }}</td>
                </tr>
                 <?php endif ?>
                @endforeach
            </table>
        @endif
        {!! link_to_route('tasks.create', "新規タスクの登録", null, ['class' => 'btn btn-primary']) !!}
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>↓ユーザー登録↓</h1>
                {!! link_to_route('signup.get', 'ユーザー登録', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection