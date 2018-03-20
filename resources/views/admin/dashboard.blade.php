@extends('admin.layouts.master')

@section('page')
    Dashboard
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-warning text-center">
                                <i class="ti-eye"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Total Visitors</p>
                                11022
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr/>
                        <div class="stats">
                            <i class="ti-panel"></i> Details
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-success text-center">
                                <i class="ti-archive"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Products</p>
                                {{ $product->count() }}
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr/>
                        <div class="stats">
                            <a href="{{ url('/products') }}"><i class="ti-panel"></i> Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-danger text-center">
                                <i class="ti-shopping-cart-full"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Orders</p>
                                {{ $order->count() }}
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr/>
                        <div class="stats">
                            <a href="{{ url('/orders') }}"><i class="ti-panel"></i> Orders</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-info text-center">
                                <i class="ti-user"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Users</p>
                                {{ $user->count() }}
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr/>
                        <div class="stats">
                            <a href="{{ url('/users') }}"><i class="ti-panel"></i> Users</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection