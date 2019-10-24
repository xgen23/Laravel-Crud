@extends('layouts.app')

@section('content')
    @include('layouts.sideBar')
    <div class="content">
                <div class="card">
                        <div class="card-header"><h2>Company<h2></div>

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
                                          <img src="{{ asset('storage/'.$companies->logo) }}" class="avatar img-circle img-thumbnail" alt="avatar">
                                        </div></hr><br>
                                         </div>
                                          <div class="col-sm-9">
                                            <div class="tab-content">
                                              <div class="tab-pane active" id="home">
                                                  <hr>
                                                        <div class="form-group">
                                                            <div class="col-xs-6">
                                                                <label for="first_name"><h4>Name</h4></label>
                                                            <input type="text" class="form-control" name="fname"value="{{$companies->name}}" disabled>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-xs-6">
                                                                <label for="email"><h4>Email</h4></label>
                                                                <input type="email" class="form-control" name="email" value="{{$companies->email}}" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                                <div class="col-xs-6">
                                                                    <label for="email"><h4>Email</h4></label>
                                                                    <input type="text" class="form-control" name="website" value="{{$companies->website}}" disabled>
                                                                </div>
                                                            </div>
                                                        <div class="form-group">
                                                             <div class="col-xs-12">
                                                                  <br>
                                                                  <a class="btn btn-primary" href="/companies/{{$companies->id}}/edit" role="button">
                                                                    <i class="fa fa-edit fa-7x"></i>
                                                                </a>
                                                              </div>
                                                        </div>
                                                    </form>

                                                <hr>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                    </div>
    </div>

@endsection
