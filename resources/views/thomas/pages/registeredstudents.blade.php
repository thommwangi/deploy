@extends('thomas.layouts.app')

@section('content')

 <div class="row">
     <div class="col-md-12">
         <br>
         <h3 align="center">Registered Students</h3> 
         <br>
         <table class="table table-bordered">
             <tr>
                <th>Student Number</th>  
                <th>Full Names</th>  
                 <th>Date Of Birth</th>
                 <th>Address</th>
                 <th>Registered On</th>
             
             </tr>
             @foreach($regstudents as $row)
                <tr>
                <td>{{$row['student_id']}}</td>
                <td>{{$row['fullname']}}</td>
                <td>{{$row['dateofbirth']}}</td>
                <td>{{$row['address']}}</td>
                
                <td>{{$row['created_at']}}</td>
                
                </tr>
             @endforeach
         </table>
     </div>
 </div>
@endsection