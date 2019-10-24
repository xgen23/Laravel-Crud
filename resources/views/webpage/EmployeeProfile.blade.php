@extends('layouts.app')

@section('content')
    @include('layouts.sideBar')
    <div class="content">
                <div class="card">
                        <div class="card-header"><h2>Employee</h2></div>

                    <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="contaier-fluid">
                                <div class="row">
                                    <div class="col-md-12 my-3">
                                      <div class="row">
                                            <div class="col-sm-3"><!--left col-->
                                        <div class="text-center">
                                          <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                                        </div></hr><br>



                                          </div><!--/col-3-->
                                          <div class="col-sm-9">
                                            <div class="tab-content">
                                              <div class="tab-pane active" id="home">
                                                  <hr>
                                                        <div class="form-group">
                                                            <div class="col-xs-6">
                                                                <label for="first_name"><h4>First name</h4></label>
                                                            <input type="text" class="form-control" name="fname"value="{{$employees->fname}}" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-xs-6">
                                                              <label for="last_name"><h4>Last name</h4></label>
                                                                <input type="text" class="form-control" name="last_name" value="{{$employees->lname}}" disabled>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-xs-6">
                                                                <label for="phone"><h4>Phone</h4></label>
                                                                <input type="text" class="form-control" name="phone" value="{{$employees->phone}}" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-xs-6">
                                                                <label for="email"><h4>Email</h4></label>
                                                                <input type="email" class="form-control" name="email" value="{{$employees->email}}" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-xs-6">
                                                                <label for="company"><h4>Company</h4></label>
                                                                <input type="text" class="form-control" name="company" value="{{$employees->company->name}}" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                             <div class="col-xs-12">
                                                                  <br>
                                                                  <a class="btn btn-primary" href="/employee/{{$employees->id}}/edit" role="button">
                                                                    <i class="fa fa-edit fa-7x"></i>
                                                                </a>
                                                              </div>
                                                        </div>
                                                    </form>

                                                <hr>
                                          </div><!--/col-9-->
                                      </div><!--/row-->
                                    </div>
                                </div>
                            </div>
                    </div>
    </div>

@endsection
