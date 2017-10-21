@extends('layouts.app')

@section('content')
@include('commons.navbar')
<!-- 処理部分 -->
<div class="row">
    <div class="col-xs-12 col-sm-offset2 col-sm-8 col-md-offset2 col-md-8 col-lg-offset3 col-lg-6">
         <h1>id : {{ $task->id }}のタスク編集ページ</h1>
        {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        <div class="form-group">
            {!! Form::label('status', '実行状況：') !!}
            {!! Form::text('status', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content', 'タスク：') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>   
        {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection