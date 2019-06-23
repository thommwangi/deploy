@extends('thomas.layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-5">{{$data['title']}}</h1>
    {{ Form::open(['action'=>'FeesController@store','method'=>'POST','class'=>'col-lg-6 col-offset-4 centered']) }}
        
            <div class="col">
                <div class="form-group">
                    {{Form::label('student_id', 'Student Number')}}<br>
                    {{-- {{var_dump($data['studentnumbers'])}}; --}}
                    {{Form::select('student_id', $data['student_ids'], null,['placeholder' => 'Choose a student','class' => 'form-control'])}}
                    
                </div> 
            </div>
            <div class="col">
                <div class="form-group">
                    {{Form::label('dateofpayment', 'Date Of Payment')}}
                    {{Form::date('dateofpayment', new \DateTime(), ['class' => 'form-control']) }}
                </div>
            </div>
        
        
            <div class="col">
                <div class="form-group">
                    {{Form::label('amount', 'Amount')}}
                    {{Form::text('amount','',['class'=>'form-control','placeholder'=>'Amount'])}}
                </div>
            </div>
       
        
            <div class="col">
                <div class="form-group">
                    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                </div>
            </div>
        
    {{ Form::close() }}
</div>
   
@endsection