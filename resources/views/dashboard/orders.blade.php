@extends('layouts.app')

@section('homepage-style')
<link href="{{ asset('css/homepage/homepage.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="background">
    <div class="container">
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
            @endif
        <h1 class="main-h1">Orders
            <br>
        </h1>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">User</th>
                <th scope="col">Total Price</th>
                <th scope="col">Status</th>
                <th scope="col">Change Status</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($Orders as $Order)
                <tr>
                    <th scope="col">{{$Order->User->name}}</th>
                    <th scope="col">{{$Order->total }}</th>
                    <th scope="col">
                        @if ($Order->status == (App\Models\Order::ApproveStatus))
                        Approved
                        @endif
                        @if ($Order->status == (App\Models\Order::PendingStatus))
                        Pending
                        @endif
                        @if ($Order->status == (App\Models\Order::CanceledStatus))
                        Canceled
                        @endif
                    </th>

                        @if ($Order->status == (App\Models\Order::ApproveStatus))
                        <th scope="col">
                            <form method="POST"  action="{{ route('Status', [$Order->id ,(App\Models\Order::PendingStatus)] ) }}">
                                @csrf
                                <button value="submit" class="btn btn-warning">Pendding</button>
                            </form>

                            <form method="POST"  action="{{ route('Status', [$Order->id ,(App\Models\Order::CanceledStatus)] ) }}">
                                @csrf
                                <button value="submit" class="btn btn-danger">Cancel</button>
                            </form>
                    </th>
                        @endif


                        @if ($Order->status == (App\Models\Order::PendingStatus))
                        <th scope="col">
                            <form method="POST"  action="{{ route('Status', [$Order->id ,(App\Models\Order::ApproveStatus)] ) }}">
                                @csrf
                                <button value="submit" class="btn btn-primary">Approve</button>
                            </form>

                            <form method="POST"  action="{{ route('Status', [$Order->id ,(App\Models\Order::CanceledStatus)] ) }}">
                                @csrf
                                <button value="submit" class="btn btn-danger">Cancel</button>
                            </form>
                       </th>
                        @endif

                        @if ($Order->status == (App\Models\Order::CanceledStatus))
                        <th scope="col">
                            <form method="POST"  action="{{ route('Status', [$Order->id ,(App\Models\Order::ApproveStatus)] ) }}">
                                @csrf
                                <button value="submit" class="btn btn-primary">Approve</button>
                            </form>

                            <form method="POST"  action="{{ route('Status', [$Order->id ,(App\Models\Order::PendingStatus)] ) }}">
                                @csrf
                                <button value="submit" class="btn btn-warning">Pendding</button>
                            </form>
                       </th>
                        @endif




                @endforeach
              </tbody>

          </table>
    </div>
    {{-- End --}}
    <div class="container">
        <h1 class="main-h1">Order details
            <br>
        </h1>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">Order id </th>
                <th scope="col">Product</th>
                <th scope="col">User </th>
                <th scope="col">Price</th>
                <th scope="col">Quntity</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($OrdersProducts as $OrdersProduct)
                <tr>
                    <th scope="col">{{$OrdersProduct->order_id}}</th>
                    <th scope="col">{{$OrdersProduct->Product->product_name}}</th>
                    <th scope="col">{{$OrdersProduct->User->name}}</th>
                    <th scope="col">{{$OrdersProduct->price}}</th>
                    <th scope="col">{{$OrdersProduct->quntity}}</th>
                    <th scope="col">{{$OrdersProduct->total}}</th>
                  </tr>
                @endforeach
              </tbody>

          </table>
    </div>
</div>
@endsection
