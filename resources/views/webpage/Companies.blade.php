@extends('layouts.app')

@section('content')
    @include('layouts.sideBar')
    <div class="content">
                <div class="card">
                        <div class="card-header"><h2>Companies<h2></div>

                    <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="contaier-fluid">
                                <div class="row">
                                    <div class="col-md-12 my-3">
                                        <div class="table-responsive">
                                            <table class=" table table-hover table-bordered">
                                                    <p style=color:red;>{{ $meesage ?? '' }}</p>
                                                    <thead>
                                                      <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Logo</th>
                                                        <th scope="col">Company Name</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Action</th>

                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($companies ?? '' as $company)
                                                      <tr>
                                                          <th scope="row">{{ $company->id }}</th>
                                                          <td><img src="{{ asset('storage/'.$company->logo) }}" alt="logo" class="img-thumbnail logo"></td>
                                                          <td><a href="/companies/{{$company->id}}">{{ $company->name }}</a></td>
                                                          <td>{{ $company->email }}</td>
                                                          <td>
                                                                <form method="POST" action="/companies/{{$company->id}}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <a class="btn btn-primary" href="/companies/{{$company->id}}/edit" role="button">
                                                                        <i class="fa fa-edit fa-7x"></i>
                                                                    </a>
                                                                    <button class="btn btn-danger" role="submit">
                                                                            <i class="fa fa-user-times fa-7x"></i>
                                                                    </button>
                                                                    </form>
                                                          </td>
                                                      </tr>
                                                      @endforeach
                                                    </tbody>
                                                  </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
    </div>

@endsection
