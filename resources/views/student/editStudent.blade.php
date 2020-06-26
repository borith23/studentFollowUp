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
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center text-info"><h4>Edit Student</h4></div>
                    <div class="card-body">
                        <form action="{{route('students.update',$student->id)}}" method="POST" enctype="multipart/form-data">
                          {{csrf_field()}}
                          {{method_field('PUT')}}
                            <div class="form-group">
                                <label for="fname">firstName:</label>
                                <input type="text" class="form-control" placeholder="FirstName" name="fname" value="{{$student->firstName}}">
                              </div>
                              <div class="form-group">
                                <label for="lname">lastName:</label>
                                <input type="text" class="form-control" placeholder="LastName" name="lname" value="{{$student->lastName}}">
                              </div>
                              <div class="form-group">
                                <label for="class">class:</label>
                                <select name="class" class="form-control">
                                  <option value="WEP-A" {{($student->class == "WEP-A") ? 'selected' : ''}}>WEP-A</option>
                                  <option value="WEP-B" {{($student->class == "WEP-B") ? 'selected' : ''}}>WEP-B</option>
                                  <option value="SNA" {{($student->class == "SNA") ? 'selected' : ''}}>SNA</option>
                                  <option value="Class-A" {{($student->class == "Class-A") ? 'selected' : ''}}>Class-A</option>
                                  <option value="Class-B" {{($student->class == "Class-B") ? 'selected' : ''}}>Class-B</option>
                                  <option value="Class-C" {{($student->class == "Class-C") ? 'selected' : ''}}>Class-C</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea name="description" id=""  class="form-control" cols="10" rows="5">{{$student->description}}</textarea>
                              </div>
                              <div class="form-group">
                                <label for="picture">Picture:</label>
                                <input type="file" class="form-control" placeholder="Picture" name="pic">
                              </div>
                              <div class="form-group">
                                <label for="tutor">Tutor: </label>
                                <select name="user_id" id="user_id" class="form-control" >
                                    <option value="1">Admin</option>
                                    <option value="2">Normal</option>
                                </select>
                              </div>
                            <br><br>
                             <button type="submit" class="btn btn-success">Edit</button>
                             <a href="{{route('home')}}" class="btn btn-danger float-right">Go Back</a>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</body>
</html>