@extends('layouts.app')

@section('content')


@if (Auth::check())
    <h1>{{ Auth::user()->name }}の仕事一覧</h1>
    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>進捗状況</th>
                    <th>仕事内容</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ config('local.' . $task->status ) }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @endif

      {!! link_to_route('tasks.create', '新規仕事の作成',null,['class' => 'btn btn-primary']) !!}
@else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the TaskList</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div> 
  
  
  
@endif
@endsection
