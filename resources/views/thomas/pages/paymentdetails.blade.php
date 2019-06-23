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