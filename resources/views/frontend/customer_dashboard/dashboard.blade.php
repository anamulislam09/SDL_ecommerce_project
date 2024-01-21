@extends('layouts.app')
@section('frontend_content')
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        welcome <strong>{{ Auth::user()->name }}</strong>
                    </div>
                    <div class="card-body">
                        <div class="profile-image py-3" style="border-bottom: 1px solid #ddd">
                            <img src="" alt=" {{ Auth::user()->name }}">
                        </div>
                        <div class="profile-menu">
                            <ul>
                                <li class="py-2" style="border-bottom: 1px solid #ddd"><a href="">Dashboard</a>
                                </li>
                                <li class="py-2" style="border-bottom: 1px solid #ddd"><a href="">Wishlist</a></li>
                                <li class="py-2" style="border-bottom: 1px solid #ddd"><a href="">MyOrder</a></li>
                                <li class="py-2" style="border-bottom: 1px solid #ddd"><a href="">Setting</a></li>
                                <li class="pt-2"><a href="{{ route('customer.logout') }}">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card-header">
                    Profile Dashboard
                </div>
                <div class="card-body">
                    <div class="order-section">Total order</div>
                    <div class="order-section">complate order</div>
                    <div class="order-section">Pending order</div>
                    <div class="order-section">Cancel order</div>

                    <div class="order pt-5">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Order_id</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Payment type</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $item)
                                    <tr>
                                        <th scope="row">{{ $item->order_id }}</th>
                                        <td>{{date('d F, Y')}}</td>
                                        <td>{{ $item->total }}</td>
                                        <td>{{ $item->payment_type }}</td>
                                        <td>
                                            @if ($item->status == 0)
                                            <span class="badge badge-secondary" style="background: #003bfb">pending</span>
                                            @elseif ($item->status == 1)
                                                <span class="badge badge-info" style="background: #00fb7d">Received</span>
                                            @elseif ($item->status == 2)
                                                <span class="badge badge-warning" style="background: #47fb00">Shipped</span>
                                            @elseif ($item->status == 3)
                                                <span class="badge badge-success" style="background: #c5fb00">Done</span>
                                            @elseif ($item->status == 4)
                                                <span class="badge badge-secondary" style="background: #fb5200">Return</span>
                                            @else
                                                <span class="badge badge-danger" style="background: #fb9200">Cancel</span>
                                            @endif
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
