@extends('layouts.app')

@section('content')
    @include('layouts.sideBar')
    <div class="content">
                <div class="card">
                        <div class="card-header"><h2>Company Profile<h2></div>

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
                                            <div class="col-sm-3">
                                        <div class="text-center">
                                          <img src="{{ asset('storage/'.$company->logo) }}" class="avatar img-circle img-thumbnail" alt="avatar">
                                        </div></hr><br>
                                        <form action="/companies/{{ $company->id }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                        <div class="form-group">
                                                <label for="logo">Edit Logo</label>
                                                <input type="file" class="form-control-file"
                                            name="logo" placeholder="Enter Logo" value='{{$company->logo}}'>
                                                <p style=color:red;>{{ $errors->first('logo') }}</p>
                                            </div>
                                         </div>
                                          <div class="col-sm-9">
                                            <div class="tab-content">
                                              <div class="tab-pane active" id="home">
                                                  <hr>
                                                        <div class="form-group">
                                                            <div class="col-xs-6">
                                                                <label for="first_name"><h4>Name</h4></label>
                                                            <input type="text" class="form-control" name="name"value="{{$company->name}}">
                                                            <p style=color:red;>{{ $errors->first('name') }}</p>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-xs-6">
                                                                <label for="email"><h4>Email</h4></label>
                                                                <input type="email" class="form-control" name="email" value="{{$company->email}}">
                                                                <p style=color:red;>{{ $errors->first('email') }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                                <div class="col-xs-6">
                                                                    <label for="email"><h4>Website</h4></label>
                                                                    <input type="text" class="form-control" name="website" value="{{$company->website}}">
                                                                    <p style=color:red;>{{ $errors->first('website') }}</p>
                                                                </div>
                                                            </div>
                                                        <div class="form-group">
                                                             <div class="col-xs-12">
                                                                  <br>
                                                                  <button type="submit" class="btn btn-primary">
                                                                      <i class="fa fa-save fa-7x"></i>Save</button>
                                                              </div>
                                                        </div>
                                                    </form>

                                                <hr>
                                          </div>
                                      </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                    </div>
    </div>

@endsection
