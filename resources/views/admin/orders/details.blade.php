@extends('admin.layouts.master')

@section('page')
    Order Details
@endsection


@section('content')

    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Order Details</h4>
                    <p class="category">Order details</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Quantity</th>
                            <th>Address</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->date }}</td>
                                <td>{{ $order->orderItems[0]->quantity }}</td>
                                <td>{{ $order->address }}</td>
                                <td>X{{ $order->orderItems[0]->price }}</td>
                                <td>
                                    @if ($order->status)
                                        <span class="label label-success">Confirmed</span>
                                    @else
                                        <span class="label label-warning">Pending</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($order->status)
                                    {{ link_to_route('order.pending','Pending', $order->id, ['class'=>'btn btn-warning btn-sm']) }}
                                @else
                                    {{ link_to_route('order.confirm','Confirm', $order->id, ['class'=>'btn btn-success btn-sm']) }}
                                @endif  </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="header">
                    <h4 class="title">User Details</h4>
                    <p class="category">User Details</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <td>{{ $order->user->id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $order->user->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $order->user->email }}</td>
                        </tr>
                        <tr>
                            <th>Registered At</th>
                            <td>{{ $order->user->created_at->diffForHumans() }}</td>
                        </tr>

                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="header">
                    <h4 class="title">Product Details</h4>
                    <p class="category">Product Details</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <td>{{ $order->products[0]->id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $order->products[0]->name }}</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>{{ $order->products[0]->price }}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td>
                                <a href="{{ url('uploads/', $order->products[0]->image) }}" target="_blank"><img src="{{ url('uploads/', $order->products[0]->image) }}" alt="{{ $order->products[0]->image }}" class="img-thumbnail" style="width: 100px"></a>
                            </td>
                        </tr>

                        </thead>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <a href="{{ url('/orders') }}" class="btn btn-success">Back to Orders</a>
    
@endsection