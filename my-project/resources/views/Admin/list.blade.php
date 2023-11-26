<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    <h1>LLISTA {{$typeList}}</h1>
    <div>
        <table>
            {{-- TABLA CREADA PARA CENTROS --}}
            @if ($typeList=='CENTRES')
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>CP</th>
                    <th>City</th>
                </tr>
                @foreach ($schools as $school)
                    <tr>
                        <td>{{$school[0]}}</td>
                        <td>{{$school[1]}}</td>
                        <td>{{$school[2]}}</td>
                        <td>{{$school[3]}}</td>
                        <td>{{$school[4]}}</td>
                    </tr>
                @endforeach
            @endif
            {{-- TABLA CREADA PARA PROFESORES --}}
            @if ($typeList=='PROFESSORAT')
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>SURNAME</th>
                    <th>ROL</th>
                    <th>EMAIL</th>
                </tr>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{$teacher['id']}}</td>
                        <td>{{$teacher['name']}}</td>
                        <td>{{$teacher['surname']}}</td>
                        <td>{{$teacher['role']}}</td>
                        <td>{{$teacher['email']}}</td>
                    </tr>
                @endforeach
            @endif
            @if ($typeList=='ALUMNAT')
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>SURNAME</th>
                    <th>ROL</th>
                    <th>EMAIL</th>
                </tr>
                @foreach ($students as $student)
                    <tr>
                        <td>{{$student['id']}}</td>
                        <td>{{$student['name']}}</td>
                        <td>{{$student['surname']}}</td>
                        <td>{{$student['role']}}</td>
                        <td>{{$student['email']}}</td>
                    </tr>
                @endforeach
            @endif
        </table>
    </div>
    <a href="{{route('admin')}}">ADMIN VISTA</a>
</div>
