@extends( 'layouts.app' )

@section( 'content' )

    <h1>id= {{ $task->id }} のお仕事詳細ページ</h1>
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>進捗状況</th>
            <td>{{ config( 'local.' . $task->status) }}</td>
        </tr>
        <tr>
            <th>仕事内容</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
         {!! link_to_route('tasks.edit', 'この仕事を編集', ['id' => $task->id],['class' => 'btn btn-default']) !!}
         {!! Form::submit('削除',['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}


@endsection