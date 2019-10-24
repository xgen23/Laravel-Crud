@extends('layouts.app')

@section('content')
    @include('layouts.sideBar')
    <div class="content">
                <div class="card">
                        <div class="card-header"><h2>Employee Edit</h2></div>

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
                                                  <form action="/employees/{{$employees->id}}" method="POST">
                                                    @csrf
                                                    @method('patch')
                                                    <div class="form-group">
                                                            <div class="col-xs-6">
                                                                <label for="first_name"><h4>First name</h4></label>
                                                            <input type="text" class="form-control" name="fname"value="{{$employees->fname}}">
                                                            <p style=color:red;>{{ $errors->first('fname') }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-xs-6">
                                                              <label for="lname"><h4>Last name</h4></label>
                                                                <input type="text" class="form-control" name="lname" value="{{$employees->lname}}">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-xs-6">
                                                                <label for="phone"><h4>Phone</h4></label>
                                                                <input type="text" class="form-control" name="phone" value="{{$employees->phone}}">
                                                                <p style=color:red;>{{ $errors->first('phone') }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-xs-6">
                                                                <label for="email"><h4>Email</h4></label>
                                                                <input type="email" class="form-control" name="email" value="{{$employees->email}}">
                                                                <p style=color:red;>{{ $errors->first('email') }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="company">Company</label>
                                                            <select class="form-control"  name="company_id" id="company" value={{ old('company') }}>
                                                            @foreach ($company as $companies)
                                                            <option value="{{$companies->id}}">{{$companies->name}}</option>
                                                            @endforeach
                                                            </select>
                                                          </div>
                                                        <div class="form-group">
                                                             <div class="col-xs-12">
                                                                  <br>
                                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save fa-7x"></i> Save</button>
                                                              </div>
                                                        </div>
                                                </form>
                                                <hr>
                                                <div>
                                          </div><!--/col-9-->
                                      </div><!--/row-->
                                    </div>
                                </div>
                            </div>
                    </div>
    </div>

@endsection
