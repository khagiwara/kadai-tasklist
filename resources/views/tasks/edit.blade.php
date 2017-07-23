@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} の仕事編集ページ</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

<<<<<<< HEAD
        {!! Form::label('status', '進捗状況:') !!}
        {!! Form::select('status',config('local')) !!}

=======
>>>>>>> 7bca08f931661751cca7982fefb8e62716915fdf
        {!! Form::label('content', '仕事:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection