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
                            <th>Order Date</th>
                            <th>Status</th>
                        </tr>
                        </thead>
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
                            <td>1</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>2</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>java@gmail.com</td>
                        </tr>
                        <tr>
                            <th>Registered At</th>
                            <td>12 March 2017</td>
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
                            <td>1</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>Mac book pro</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>17000</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td>
                                <a href="assets/img/favicon.png" target="_blank"><img src="assets/img/favicon.png" alt="product-image" class="img-thumbnail" style="width: 100px"></a>
                            </td>
                        </tr>

                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection