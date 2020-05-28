@extends('master')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 style="color: red;text-align: center">Customer List</h4>
            </div>
            <p align="center" style="color: #34ce57">{{session('create-success')}}</p>
            <p align="center" style="color: #34ce57">{{session('update-success')}}</p>
            <div class="card-body">
                <a href="{{route('customers.create')}}" class="btn btn-success btn-sm">Add new</a>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">MKH</th>
                        <th scope="col">Avatar</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($customers as $key => $customer)
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>{{$customer->customer_number}}</td>
                            <td><img src="{{asset('storage/'.$customer->image)}}" style="width: 50px;height: 50px"></td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->email}}</td>
                            <td>
                                <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#exampleModal{{$customer->id}}">view</button>
                                <a class="btn btn-outline-primary btn-sm" href="{{route('customers.edit',['id'=>$customer->id])}}">edit</a>
                                <a class="btn btn-outline-danger btn-sm" href="{{route('customers.delete',['id'=>$customer->id])}}" onclick="confirm('ban co muon xoa?')">delete</a>
                                @include('customers.view')
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


