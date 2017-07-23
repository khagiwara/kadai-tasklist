@extends('layouts.app')

@section('content')

    <h1>メッセージ新規作成ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}
<<<<<<< HEAD
        {!! Form::label('status', '新着状況') !!}
        {!! Form::select('status', config('local')) !!}

        {!! Form::label('content', '仕事内容:') !!}
=======

        {!! Form::label('content', 'メッセージ:') !!}
>>>>>>> 7bca08f931661751cca7982fefb8e62716915fdf
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}







@endsection
