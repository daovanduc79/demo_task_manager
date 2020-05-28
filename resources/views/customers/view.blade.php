<div class="modal fade" id="exampleModal{{$customer->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tr>
                        <td colspan="2" align="center">
                            <img src="{{asset('storage/'.$customer->image)}}" style="width: 100px; height: 150px">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">MKH :</th>
                        <td>{{$customer->customer_number}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Name :</th>
                        <td>{{$customer->name}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Birthday :</th>
                        <td>{{$customer->birthday}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Email :</th>
                        <td>{{$customer->email}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Phone :</th>
                        <td>{{$customer->phone}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Address :</th>
                        <td>{{$customer->address}}</td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
