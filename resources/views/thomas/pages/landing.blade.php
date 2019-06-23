 @extends('thomas.layouts.app')

@section('content')
    <main role="main" class="container">
        <div class="text-center mb-4">
            {{-- <!--<h1 class="display-4.5">{{$data['title']}}</h1> --> --}}
        </div>
        <div class="float-left students-table">
            <h2>Menu</h2>
            <ul class="list-group mb-4">
                {{-- <a href="/students/create" class="list-group-item list-group-item-action">Register New Student</a>
                <a href="/fees/create" class="list-group-item list-group-item-action">Record Fee Payment</a> --}}
            </ul> 
        </div> 
        <div class="float-left students-table">
            <table id="example" class="table table-stripped align-content-center">
                <thead class="thead-dark">
                     <tr>
                        <th scope="col">Student Number</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">D.O.B</th>
                        <th scope="col">Address</th>
                        <th scope="col">Total Paid</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($data['student']) > 0)
                        @foreach ($data['student'] as $student)
                            <tr>
                                <td>{{$student['student_id']}}</td>
                                <td>{{$student['fullname']}}</td>
                                <td>{{$student['dateofbirth']}}</td>
                                <td>{{$student['address']}}</td>
                                <td>{{$student['total_paid']}}</td>  
                            </tr>
                            
                        @endforeach
                    @else
                        
                    @endif
                    
                </tbody>
            </table>
        </div>
    </main>
@endsection