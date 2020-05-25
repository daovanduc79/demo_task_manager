@extends('master')
@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 style="color: red">List Manager</h4>
            </div>
            <div>
                <p class="text-success">{{ session('success') }}</p>
            </div>
            <div class="card-body">
                <a href="" class="btn btn-success btn-sm">Add new</a>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $key => $user)
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->password}}</td>
                            <td>
                                <a class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#exampleModal{{$user->id}}">view</a>
                                <div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">View</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                ID : {{$user->id}} <br>
                                                Name : {{$user->name}} <br>
                                                Username : {{$user->username}} <br>
                                                Password : {{$user->password}} <br>
                                                Phone : {{$user->phone}} <br>
                                                Address : {{$user->address}} <br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-outline-primary btn-sm" href="{{route('users.showFormChangePassword',['id'=>$user->id])}}">edit</a>
                                <a class="btn btn-outline-danger btn-sm" href="">delete</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
