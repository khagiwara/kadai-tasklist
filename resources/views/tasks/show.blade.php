@extends( 'layouts.app' )

@section( 'content' )

    <h1>id= {{ $task->id }} のお仕事詳細ページ</h1>
    <p>新著状況：{{ config( 'local.' . $task->status) }}</p>    
    <p>仕事内容：{{ $task->content }}</p>

    <p>{{ $task->content }}</p>
    
    {!! link_to_route('tasks.edit', 'この仕事を編集', ['id' => $task->id]) !!}
    
     {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection