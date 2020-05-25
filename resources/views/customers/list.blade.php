@extends('master')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 style="color: red">List Manager</h4>
            </div>
            <div class="card-body">
                <a href="create" class="btn btn-success btn-sm">Add new</a>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($customers as $key => $customer)
                        <tr>
                            <th scope="row">{{$key++}}</th>
                            <td>{{$customer->id}}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->birthday}}</td>
                            <td>{{$customer->email}}</td>
                            <td>
                                <a class="btn btn-outline-info btn-sm" href="">view</a>
                                <a class="btn btn-outline-primary btn-sm" href="">edit</a>
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


