@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        User Management
                        <div class="col-lg-2 pull-right">
                            <button onclick="location.href='{{url('data/user/create')}}'" type="button" class="btn btn-info btn-sm">Create New User</button>
                        </div>
                    </div>

                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama</td>
                                <td>Email</td>
                                <td>Created At</td>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td>
                                        <button onclick="location.href='{{url('data/user/' . $user->id)}}'" type="button" class="btn btn-success">Edit</button>
                                        <button onclick="location.href='{{url('data/user/' . $user->id . '/delete')}}'" type="button" class="btn btn-danger">Delete</button>
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
