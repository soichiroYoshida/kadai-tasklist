@extends('layouts.app')

@section('content')
@include('commons.navbar')
<!-- 処理部分 -->
    <h1>新規タスク登録ページ</h1>
<div class="row">
    <div class="col-xs-12 col-sm-offset2 col-sm-8 col-md-offset2 col-md-8 col-lg-offset3 col-lg-6">
        {!! Form::model($task, ['route' => 'tasks.store']) !!}
        <div class="form-group">
            {!! Form::label('status', '実行状況：') !!}
            {!! Form::text('status', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content', 'タスク：') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('登録') !!}
        {!! Form::close() !!}
    </div>
</div>
    

@endsection