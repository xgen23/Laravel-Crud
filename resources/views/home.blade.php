@extends('layouts.app')

@section('content')
    @include('layouts.sideBar')
    <div class="content">
                <div class="card">
                        <div class="card-header"><h2>Dashboard</h2></div>

                    <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="contaier-fluid">
                                <div class="row">
										<div class="col-sm-6 col-md-3">
											<div class="card text-dark bg-light mb-3">
												<div class="card-header">
													<a class="dashIcon" href="/companies">
														<div class="row">
															<div class="col-sm-6">
																<i class="fa fa-building fa-5x"></i>
															</div>
														<div class="col-sm-6 text-center">
                                                        <h1>{{$companies->count()}}</h1>
														</div>
												</div>
														<div class="card-body">
															<h5>Companies</h5>
														</div>
													</a>
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
												<div class="card text-dark bg-light mb-3">
													<div class="card-header">
													<a class="dashIcon" href="/employees">
														<div class="row">
															<div class="col-sm-6">
																<i class="fa fa-address-card-o fa-5x"></i>
															</div>
															<div class="col-sm-6 text-center">
																<h1>{{$employees->count()}}</h1>
															</div>
														</div>
														<div class="card-body">
															<h5>Employee</h5>
														</div>
													</a>
													</div>
												</div>
										</div>
										<div class="col-sm-6 col-md-3">
												<div class="card text-dark bg-light mb-3">
													<div class="card-header">
														<a class="dashIcon" href="/employee/create">
															<div class="row">
																<div class="col-sm-6">
																	<i class="fa fa-user-plus fa-5x"></i>
																</div>
													</div>
															<div class="card-body">
																<h5>Add Employee</h5>
															</div>
														</a>
													</div>
												</div>
										</div>
										<div class="col-sm-6 col-md-3">
												<div class="card text-dark bg-light mb-3">
													<div class="card-header">
														<a class="dashIcon" href="/companies/create">
															<div class="row">
																<div class="col-sm-6">
																	<i class="fa fa-building fa-5x"></i>
																</div>
													</div>
															<div class="card-body">
																<h5>Add Company</h5>
															</div>
														</a>
												    </div>
											</div>
										</div>
                                    </div>
                            </div>
                    </div>
            </div>
    </div>

@endsection
