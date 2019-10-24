@extends('layouts.app')

@section('content')
    @include('layouts.sideBar')
    <div class="content">
                <div class="card">
                        <div class="card-header"><h2>Employees</h2></div>

                    <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="contaier-fluid">
                                <div class="row">
                                    <div class="col-md-12 my-3">
                                            <table class="table">
                                                    <thead>
                                                      <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">First</th>
                                                        <th scope="col">Last</th>
                                                        <th scope="col">Company</th>
                                                        <th scope="col">Action</th>

                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($employee ??'' as $employees)
                                                      <tr>
                                                          <th scope="row">{{ $employees->id }}</th>
                                                          <td><a href="/employee/{{$employees->id}}">{{ $employees->fname }}</a></td>
                                                          <td>{{ $employees->lname }}</td>
                                                          <td>{{ $employees->company->name }}</td>
                                                          <td>
                                                                <form method="POST" action="/employees/{{$employees->id}}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <a class="btn btn-primary" href="/employee/{{$employees->id}}/edit" role="button">
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

@endsection
