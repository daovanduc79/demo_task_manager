@extends('master')
@section('content')
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <h3>Add new</h3>
            <form method="post" action="{{route('customers.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label>MKH</label>
                        <input type="text" name="customer_number" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Birthday</label>
                        <input type="date" name="birthday" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <label for="inputFileName">Avatar</label>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="file"
                               class="form-control-file"
                               id="inputFile"
                               name="inputFile">
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
                <button type="submit" class="btn btn-success">Create</button>
                <a href="{{route('customers.list')}}" class="btn btn-light">Cancel</a>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
@endsection
