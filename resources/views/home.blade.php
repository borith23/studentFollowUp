@extends('layouts.app')

@section('content')
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
            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#addStudent">Add Student</a> <br><br>
          
            <!-- The Modal -->
            <div class="modal" id="addStudent">
              <div class="modal-dialog">
                <div class="modal-content">
                
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Form Add Student</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  
                  <!-- Modal body -->
                  <div class="modal-body">
                    <form  action="{{route('students.store')}}" method="POST">
                      <div class="form-row">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Last name">
                        </div>
                      </div> <br>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <select id="inputState" class="form-control">
                            <option selected>Class</option>
                            <option>WEP-A</option>
                            <option>WEP-B</option>
                            <option>SNA</option>
                            <option>CLASS-A</option>
                            <option>CLASS-B</option>
                            <option>CLASS-C</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <select id="inputState" class="form-control">
                            <option selected>ActiveFollowUp</option>
                            <option>0</option>                            
                            <option>1</option>                            
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <textarea name="description" id="" cols="63" rows="5" placeholder="Description..."></textarea>
                        </div>
                      </div>  
                      <input type="file" class="form-group">
                    </form>
                  </div>
                  
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" data-dismiss="modal">Submit Form</button>
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- The End Modal Add Student-->

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Class</th>
                    <th>Description</th>
                    <th>Active Follow UP</th>
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
                        <td>{{ $item->activeFollowup}}</td>
                        <td>{{ $item->picture}}</td>
                        <td>
                          <a href="#" class="fas fa-edit" data-toggle="modal" data-target="#editStudent" style='font-size:15px'></a>
                              <!-- The Modal Edit Student-->
                              <div class="modal" id="editStudent">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                  
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title">Form Edit Student</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                    <form>
                                      @csrf
                                        <div class="form-row">
                                          <div class="col">
                                            <input type="text" class="form-control" placeholder="First name">
                                          </div>
                                          <div class="col">
                                            <input type="text" class="form-control" placeholder="Last name">
                                          </div>
                                        </div> <br>
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <select id="inputState" class="form-control">
                                              <option selected>Class</option>
                                              <option>WEP-A</option>
                                              <option>WEP-B</option>
                                              <option>SNA</option>
                                              <option>CLASS-A</option>
                                              <option>CLASS-B</option>
                                              <option>CLASS-C</option>
                                            </select>
                                          </div>
                                          <div class="form-group col-md-6">
                                            <select id="inputState" class="form-control">
                                              <option selected>ActiveFollowUp</option>
                                              <option>0</option>                            
                                              <option>1</option>                            
                                            </select>
                                          </div>
                                        </div>  
                                        <input type="file" class="form-group">
                                      </form>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-success" data-dismiss="modal">Edit Student</button>
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
                              <!-- The End Modal Edit Student-->

                          {{-- <a href="#" class="fa fa-eye" style='font-size:15px'></a> --}}
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
@endsection