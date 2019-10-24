@extends('layouts.app')

@section('content')
    @include('layouts.sideBar')
    <div class="content">
                <div class="card">
                        <div class="card-header"><h2>Add Company</h2></div>

                    <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="contaier-fluid">
                                <div class="row">
                                    <div class="col-md-12 my-3">
                                        <form action="/companies/store" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                    <label for="name">Compay Name</label>
                                                    <input type="text" class="form-control" id="company_name" required
                                                    name="name" placeholder="Enter First Name" value={{ old('company_name') }}>
                                                    <small class="form-text text-muted">* This is required</small>
                                                    <p style=color:red;>{{ $errors->first('name') }}</p>
                                                </div>

                                                    <div class="form-group">
                                                        <label for="e-mail">Email</label>
                                                        <input type="email" class="form-control"  name="email" required
                                                        id="email" placeholder="Enter Email" value={{ old('email') }}>
                                                        <p style=color:red;>{{ $errors->first('email') }}</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="logo">Logo</label>
                                                        <input type="file" class="form-control-file"
                                                        name="logo" placeholder="Enter Logo" value={{ old('logo') }}>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="lname">Website</label>
                                                        <input type="text" class="form-control"
                                                        name="website" placeholder="Enter Website" value={{ old('website') }}>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                  </div>
    </div>

@endsection
