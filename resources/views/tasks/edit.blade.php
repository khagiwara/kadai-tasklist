@extends('layouts.app')

@section('content')


<div id="container">
   <div class="row">
   <div class=" col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
    <h1>メッセージ新規作成ページ</h1>
  {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        <div class="form-group">
            {!! Form::label('status', '進捗状況:') !!}
            {!! Form::select('status',config('local'), null,['class' => 'form-control']) !!}  
        </div>    

        <div class="form-group">
            {!! Form::label('content', '仕事内容:') !!}
                 {!! Form::text('content', null, ['class' => 'form-control']) !!}  
        </div>           
            
        <div class="form-group">
           
             {!! Form::submit('作成', ['class' => 'btn btn-primary']) !!}

        </div>
    {!! Form::close() !!}
    </div>
    </div>
</div>

@endsection