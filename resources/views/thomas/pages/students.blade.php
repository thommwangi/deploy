@extends('thomas.layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-5">{{$data['title']}}</h1>
        {{ Form::open(['action'=>'StudentsController@store','method'=>'POST','class'=>'col-lg-6 col-offset-4 centered']) }}
           
                <div class="col">
                    <div class="form-group">
                        {{Form::label('student_id', 'Student Number')}}
                        {{Form::number('student_id','',['class'=>'form-control','placeholder'=>'Student Number'])}}
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        {{Form::label('fullname', 'Fullname')}}
                        {{Form::text('fullname','',['class'=>'form-control','placeholder'=>'Full name'])}}
                    </div>
                </div> 
            
                <div class="col">
                    <div class="form-group">
                        {{Form::label('dateofbirth', 'Date Of Birth')}}
                        {{Form::date('dateofbirth', new \DateTime(), ['class' => 'form-control']) }}
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        {{Form::label('address', 'Address')}}
                        {{Form::text('address','',['class'=>'form-control','placeholder'=>'Address'])}}
                    </div>
                </div>
           
                <div class="col">
                    <div class="form-group">
                        {{Form::submit('Register',['class'=>'btn btn-primary'])}}
                    </div>
                </div>
           
            
        {{ Form::close() }}
        
    </div>
@endsection