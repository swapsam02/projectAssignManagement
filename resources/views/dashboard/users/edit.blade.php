@extends('layouts.index')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Edit user</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Edit User</h3><i class="fas fa-arrow-alt-left"></i>
                            <a href="{{ route('user-list') }}" class="btn btn-primary btn-sm float-right"><i class="fa fa-arrow-left mr-2"></i>Back</a>
                        </div>
                        <form>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputName">Name</label>
                                        <input type="email" class="form-control" id="exampleInputName" name="name" placeholder="Enter name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder="Enter email">
                                    </div>    
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputCnfPassword">Confirm Password</label>
                                        <input type="password" class="form-control" id="exampleInputCnfPassword" name="password_confirmation" placeholder="Enter confirm Password">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputCnfPassword">Select Role</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">select role</option>
                                            <option>Admin</option>
                                            <option>HR</option>
                                            <option>Management</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-check col-md-6">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Is Active</label>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>
@endsection
