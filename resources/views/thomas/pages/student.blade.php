@extends('thomas.layouts.app')

@section('content')
    <div class="">
    <h1 class="mb-5 ml-5 ml-5 container">Student Records : {{$studentDetail['fullname']}}</h1>
        <div class="float-left students-table">
            <table id="example" class="table table-stripped align-content-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Student Number</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Amounts</th>
                        <th scope="col">Date Of Payment</th>
                        {{-- <th scope="col">Total Paid</th> --}}
                    </tr>
                </thead> 
                <tbody>
                    @if(count($student) > 0)
                        @foreach ($student as $students)
                            <tr>
                                <td>{{$students['student_id']}}</td>
                                <td>{{$students['fullname']}}</td>
                                <td>{{$students['amount']}}</td>
                                <td>{{$students['dateofpayment']}}</td>
                            </tr>
                            
                        @endforeach
                    @else
                        
                    @endif
                   
                </tbody>
            </table>
        </div>  
    </div>
@endsection