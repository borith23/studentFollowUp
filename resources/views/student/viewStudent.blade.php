<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add New Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

        <div class="container mt-3">
          <div class="row justify-content-center">
                  <div class="col-md-6">
                      <div class="card mt-5 ">
                          <div class="card-header">
                            <h4 class="text-success">View Detail</h4>
                          </div>
                          <div class="card-body">
                              {{-- <img class="mx-auto d-block" src="{{asset('img/'.$student->picture)}}"><br>
                              <h4>{{$student->firstName." ".$student->lastName}} - {{$student->class}}</span></h4>
                              <h5>Description:</h5>
                              <p>{{$student->description}}</p>
                              @if($student->user_id != "")
                              <p>Tutor By: {{$student->user['firstName']." ".$student->user['lastName']}}</p>
                              @else
                              <p>Tutor By: No</p>
                              @endif
      
                              <form action="{{route('addComment', $student->id)}}" method="post">
                              @csrf
                                  <div class="form-group">
                                      <label for="comment">{{ __('Comment') }}</label>
                                      <textarea class="form-control" placeholder="Comment" name="comment" required></textarea>
                                  </div>
                                  <button type="submit" class="btn btn-primary">Post</button>
                              </form><br>
                              @foreach($comments as $comment)
                                  <h5>{{$comment->user['firstName']}}</h5>
                                  <p>{{$comment->comment}}</p>
                                  <a href="{{route('comments.edit', $comment->id)}}">Edit</a>
                                  <hr>
                              @endforeach --}}
                              <div class="hovereffect">
                             
                                <img class="mx-auto d-block" src="{{asset('uploads/students'.$student->picture)}}"><br>
                              </div>
                              <table class="table table-border" style="color:teal;">
             
                                <tr>
                                  <th class="header-table">Full Name</th>
                                  <td class="content">{{$student->firstName}}." ".{{$student->lastName}} </td>
                                  
                                </tr>
                                
                                 <tr>
                                   <th class="header-table">Class</th>
                                  <td class="content">{{$student->class}}</td>
                                </tr>
                                
                                 
                                <tr>
                                   <th class="header-table">Desciption</th>
                                  <td class="content">{{$student->description}}</td>
                                </tr>
                                <tr>
                                   <th class="header-table">Tutor ID</th>
                                  <td class="content">{{$student->user_id}}</td>
                                </tr>
                                
                              </table>
                              <div class="container">
                                <form action="" method="POST"> 
                                  {{-- {{route('addComments',$student->id)}} --}}
                                  @csrf
                                    <textarea name="comment" class="form-control"></textarea><br>
                                    <button class="btn btn-success" type="submit">Post</button>
                                </form> <br><br>
                                {{-- <table class="table table-stripped">
                                  <thead>
                                    <tr>
                                      <th>Comments</th>
                                      <th>Comments From User Name</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      
                                  </tbody>  
                                </table> --}}
                              </div>
                              <a href="{{route('home')}}" class="btn btn-danger float-right">Go Back</a>
                          </div>
                      </div>
                  </div>
              </div>
      </div>
</body>
</html>