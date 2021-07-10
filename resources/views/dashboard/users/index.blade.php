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
                        <li class="breadcrumb-item active">User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">User List</h3>
                <a href="{{ route('user-add') }}" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus-square mr-2"></i>Add</a>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="8%">#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th width="16%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="#" class="btn btn-success btn-xs">View</a>
                                <a href="{{ route('user-edit') }}" class="btn btn-warning btn-xs">Edit</a>
                                <a href="#" class="btn btn-danger btn-xs">Delete</a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
  </div>
@endsection
