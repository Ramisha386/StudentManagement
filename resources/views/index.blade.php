@extends('master')
@section('content')
        <table class="table table-reponsive table-hover">
          <tr>
            <th>Sl</th>
            <th>Name</th>
            <th>Registration</th>
            <th>Department Name</th>
            <th>Info</th>
            <th>Action</th>
          </tr>
          <?php foreach ($students as $student): ?>
            <tr>
           <td>{{ $student->id }}</td>
           <td>{{ $student->name }}</td>
           <td>{{ $student->registration_id}}</td>
           <td>{{ $student->department_name }}</td>
           <td>{{ $student->info }}</td>
           <td>
             <a href="{{ route('edit', $student->id) }}" class="btn btn-success">Edit</a>
             <form class="form-inline" action="{{ route('delete', $student->id) }}" method="post">
            {{ csrf_field() }}
            <input type="submit" class="btn btn-danger" value="Delete">
           </td>
        </form>

         </tr>
          <?php endforeach; ?>
          <!-- @foreach($students as $student)
  	         {{$student}}
  	      @endforeach -->

        </table>
@endsection
