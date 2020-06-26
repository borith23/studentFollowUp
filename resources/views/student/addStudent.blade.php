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
                    <div class="card-header text-center text-info"><h4>Add New Student In FollowUp</h4></div>
                    <div class="card-body">
                        <form action="{{route('students.store')}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="fname">firstName:</label>
                                <input type="text" class="form-control" placeholder="FirstName" name="fname">
                              </div>
                              <div class="form-group">
                                <label for="lname">lastName:</label>
                                <input type="text" class="form-control" placeholder="LastName" name="lname">
                              </div>
                              <div class="form-group">
                                <label for="class">class:</label>
                                <select name="class" id="class" class="form-control">
                                  <option selected disabled>Class</option>
                                  <option value="WEP-A">WEP-A</option>
                                  <option value="WEP-B">WEP-B</option>
                                  <option value="SNA">SNA</option>
                                  <option value="Class-A">Class-A</option>
                                  <option value="Class-B">Class-B</option>
                                  <option value="Class-C">Class-C</option>
                              </select>
                              </div>
                              <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea name="description" id=""  class="form-control" cols="10" rows="5"></textarea>
                              </div>
                              <div class="form-group">
                                {{-- <label for="picture">Picture:</label>
                                <input type="file" class="form-control" placeholder="Picture" name="pic"> --}}
                                <label for="">Picture</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control costom-file-input" name="pic" >
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="tutor">Tutor: </label>
                                <select name="user_id" id="user_id" class="form-control">
                                    <option selected disabled>Turtor</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Normal</option>
                                </select>
                              </div>
                            <br><br>
                             <button type="submit" class="btn btn-success">Add Now</button>
                             <a href="{{route('home')}}" class="btn btn-danger float-right">Go Back</a>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</body>
</html>