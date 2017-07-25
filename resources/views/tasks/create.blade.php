@extends('layouts.app')

@section('content')

    <h1>メッセージ新規作成ページ</h1>

   <div class="row">1
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
        <div class="form-group btom">
            {!! Form::label('status', '進捗状況:',['class' => 'col-sm-2']) !!}

            <div class="col-sm-10 col-md-8 col-md-offset-right-2 col-lg-6 col-lg-offset-right-4">
                {!! Form::select('status',config('local'), null,['class' => 'form-control']) !!}  
            </div>
        </div>    

        <div class="form-group">
  
 
            {!! Form::label('content', '仕事内容:',['class' => 'col-sm-2']) !!}

            <div class="col-sm-10 col-md-8 col-md-offset-right-2 col-lg-6 col-lg-offset-right-4">
                 {!! Form::text('content', null, ['class' => 'form-control']) !!}  
            </div>
        </div>    
            
        <div class="form-group">
            <div class="col-xs-offset-2 col-sm-10">            
             {!! Form::submit('作成', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    </div>

</div>








    
@endsection
