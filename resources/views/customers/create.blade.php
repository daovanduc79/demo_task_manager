@extends('master')
@section('content')
    <div class="col-2"></div>
    <div class="col-8">
        <h3>Add new</h3>
        <hr>
        <form method="post" action="{{}}">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Birthday</label>
                <input type="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
    <div class="col-2"></div>
@endsection
