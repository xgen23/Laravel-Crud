@extends('layouts.app')

@section('content')
    @include('layouts.sideBar')
    <div class="content">
                <div class="card">
                        <div class="card-header"><h2>Add Employee</h2></div>

                    <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="contaier-fluid">
                                <div class="row">
                                    <div class="col-md-12 my-3">
                                        <form action="/employee/store" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                    <label for="fname">First Name</label>
                                                    <input type="text" class="form-control" id="fname" required
                                                    name="fname" placeholder="Enter First Name" value={{ old('fname') }}>
                                                    <small class="form-text text-muted">* This is required</small>
                                                    <p style=color:red;>{{ $errors->first('fname') }}</p>
                                                </div>
                                                <div class="form-group">
                                                        <label for="lname">Last Name</label>
                                                        <input type="text" class="form-control" id="lname" required
                                                        name="lname" placeholder="Enter Last Name" value={{ old('lname') }}>
                                                        <small class="form-text text-muted">* This is required</small>
                                                        <p style=color:red;>{{ $errors->first('lname') }}</p>
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
                                                        <label for="e-mail">Email</label>
                                                        <input type="email" class="form-control"  name="email" required
                                                        id="email" placeholder="Enter Email" value={{ old('email') }}>
                                                        <small class="form-text text-muted">* This is required</small>
                                                        <p style=color:red;>{{ $errors->first('email') }}</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input type="number" class="form-control" required
                                                        name="phone" id="phone" placeholder="Enter Phonenumber" value={{ old('name') ?? 63}}>
                                                        <p style=color:red;>{{ $errors->first('phone') }}</p>
                                                </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                  </div>
    </div>

@endsection
