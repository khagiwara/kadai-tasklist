@extends('layouts.app')

@section('content')

    <h1>仕事一覧</h1>

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
<<<<<<< HEAD
                <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ config('local.' . $task->status ) }} > {{ $task->content }}</li>
=======
                <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->content }}</li>
>>>>>>> 7bca08f931661751cca7982fefb8e62716915fdf
            @endforeach
        </ul>
    @endif

  {!! link_to_route('tasks.create', '新規仕事の作成') !!}
@endsection
