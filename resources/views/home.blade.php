@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">FollowUP</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Out Of FollowUp</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
        <h4 class="text-center text-success">Views All Students In FollowUP</h4> <br>
        <table class="table table-bordered">
            <a href="{{route('students.create')}}" class="btn btn-info">Add Student</a> <br><br>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Class</th>
                    <th>Description</th>
                    <th>Picture</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $item)
                    <tr>
                        <td>{{ $item->id}}</td>
                        <td>{{ $item->firstName}}</td>
                        <td>{{ $item->lastName}}</td>
                        <td>{{ $item->class}}</td>
                        <td>{{ $item->description}}</td>
                        <td><img class="mx-auto d-block" src="{{asset('uploads/students'.$item->picture)}}" style="width: 50px;, height:50px;"></td>                        
                        <td>
                            <a href="{{route('students.edit',$item->id)}}" class="fas fa-edit"></a>
                            <a href="{{route('students.show',$item->id)}}" class="fas fa-eye text-success"></a>
                            {{-- <form action="#" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure to delete?')">Delete</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h4 class="text-center text-success">Views All Students Out Of FollowUP</h4> <br>
    </div>
  </div>
</div>
</body>
</html>
@endsection
