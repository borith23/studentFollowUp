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
                                <form action="{{route('addComments',$student->id)}}" method="POST"> 
                                  
                                  @csrf
                                    <textarea name="comment" class="form-control"></textarea><br>
                                    <button class="btn btn-success" type="submit">Post</button>
                                </form> <br><br>
                                <table class="table table-stripped">
                                  <thead>
                                    <tr>
                                      <th>Comments</th>
                                      <th>User</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($student->comments as $item)
                                    <tr>
                                    <td>{{$item->comment}}</td>
                                    <td>{{$item->user->firstName}}</td>
                                      <td>
                                        <button type="button" class="btn bg-success text-white" style='font-size:15px' data-toggle="modal" data-target="#editComment{{$item->id}}">edit</button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="editComment{{$item->id}}" role="dialog">
                                          <div class="modal-dialog">
                                          
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                              <div class="modal-header bg bg-primary">
                                                  <h4 class="modal-title" style="">Edit Comment</h4>
                                              </div>
                                              <div class="modal-body">
                                                <form action="{{route('updateComments',$item->id)}}" method="POST">
                                                  @csrf
                                                  @method('PUT')
                                                    <textarea name="comment" class="form-control">{{$item->comment}}</textarea><br>
                                                    <button class="btn btn-success" type="submit">Edit</button>
                                                    <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
                                                </form>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        
                                        <button type="submit" href="{{route('deleteComments',$item->id)}}" class="btn btn-danger">Delete</button>
                                      </td>
                                    </tr>
                                @endforeach
                                  </tbody>  
                                </table>
                              </div>
                              <a href="{{route('home')}}" class="btn btn-success float-right">Go Back</a>
                              
                          </div>
                      </div>
                  </div>
              </div>
      </div>
</body>
</html>