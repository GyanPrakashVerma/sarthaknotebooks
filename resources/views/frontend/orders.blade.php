@extends('frontend.include.main')
@section('content')
    {{-- <link rel="stylesheet" href="header/css/bootstrap.css" /> --}}

    <!-- Custom css -->
    <link href="{{ asset('assets/css/ui.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <style>
        #profile {
            color: #0d6efd;
        }

        .hh-grayBox {
            background-color: #fff;
        }

        .alert-success {
            color: #fff;
            background-color: rgba(172, 49, 145, 0.74);
            width: 18% !important;
        }

        .badge {
            background-color: #dd55b6 !important;
            color: white;
        }

        .table_head th {
            border: none;
        }

        .order-tracking {
            text-align: center;
            width: 25%;
            color: #27aa80;
            position: relative;
            display: block;
        }

        .order-tracking .is-complete {
            display: block;
            position: relative;
            border-radius: 50%;
            height: 30px;
            width: 30px;
            border: 0px solid #AFAFAF;
            background-color: #f7be16;
            margin: 0 auto;
            transition: background 0.25s linear;
            -webkit-transition: background 0.25s linear;
            z-index: 2;
        }

        .order-tracking .is-complete:after {
            display: block;
            position: absolute;
            content: '';
            height: 14px;
            width: 7px;
            top: -2px;
            bottom: 0;
            left: 5px;
            margin: auto 0;
            border: 0px solid #AFAFAF;
            border-width: 0px 2px 2px 0;
            transform: rotate(45deg);
            opacity: 0;
        }

        .order-tracking.completed .is-complete {
            border-color: #27aa80;
            border-width: 0px;
            color: #27aa80;
            font-weight: 600;
            background-color: #27aa80;
        }

        .order-tracking.completed .is-complete:after {
            border-color: #fff;
            border-width: 0px 3px 3px 0;
            width: 7px;
            color: #27aa80;
            left: 11px;
            font-weight: 600;
            opacity: 1;
        }

        .order-tracking p {
            color: #A4A4A4;
            font-size: 16px;
            margin-top: 8px;
            margin-bottom: 0;
            line-height: 20px;
        }

        .order-tracking p span {
            font-size: 14px;
        }

        .order-tracking.completed p {
            color: #000;
        }

        .order-tracking::before {
            content: '';
            display: block;
            height: 3px;
            width: calc(100% - 40px);
            background-color: #f7be16;
            top: 13px;
            position: absolute;
            left: calc(-50% + 20px);
            z-index: 0;
        }

        .order-tracking:first-child:before {
            display: none;
        }

        .order-tracking.completed:before {
            background-color: #27aa80;
        }
.table-responsive{
    display: table;
}


        @media(max-width:768px) {
            .order-tracking p {
                color: #A4A4A4;
                font-size: 12px;
                margin-top: 8px;
                margin-bottom: 0;
                line-height: 18px;
            }

            .table-responsive {
                display: block;
                width: 100%;
                overflow-x: scroll;
            }

            .order-tracking p span {
                font-size: 11px;
            }
        }
    </style>
    @php
    $qty = 0;
    $total = 0;
    $total_items = 0;
    $total_amount = 0;
    @endphp
    <!-- ============== SECTION PAGETOP ============== -->
    {{-- <section class="bg-primary padding-y-sm">
        <div class="container">

            <ol class="breadcrumb ondark mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">Account main</li>
            </ol>

        </div> <!-- container //  -->
    </section> --}}
    <!-- ============== SECTION PAGETOP END// ============== -->
    @if (Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show w-50 mr-5 mt-2 mb-2 mx-3" style="justify-content:end;"
            role="alert">
            {{ Session::get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <!-- ============== SECTION CONTENT ============== -->
    <section class="padding-y bg-light">
        <div class="container">

            <div class="row">
                <main class="col-lg-10  col-xl-10 col-md-10 m-auto">
                    <article class="card">
                        <div class="content-body">
                            <h5 class="card-title h1"> Your Orders </h5>
                            <hr class="my-4">
                            <!--  ======== item order ======== -->
                            @foreach ($item as $orders)
                                <article class="card border-primary mb-4">
                                    <div class="card-body">
                                        <header class="d-lg-flex">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-0">Order ID: {{ $orders->id }}
                                                    @if ($orders->order_status == 1)
                                                        <span class="badge bg-danger">Pending</span>
                                                    @else
                                                        @if ($orders->order_status == 2)
                                                            <span class="badge bg-success">Shipped</span>
                                                        @else
                                                            @if ($orders->order_status == 3)
                                                                <span class="badge bg-success">Out for Delivery</span>
                                                            @else
                                                                @if ($orders->order_status == 4)
                                                                    <span class="badge bg-success">Delivered</span>
                                                                @endif
                                                            @endif
                                                        @endif
                                                    @endif

                                                    <div class="text-muted my-2">Date: {{ $orders->created_at }}
                                                    </div>
                                                </h6>
                                                <span class="text-muted"><b class="my-2 mr-2 text-muted"><i
                                                            style="font-size: 20px"
                                                            class="fa fa-map-marker-alt"></i></b>Shipping Address:
                                                    {{ Auth::user()->address1 }}</span>

                                            </div>
                                            <div>
                                                @if ($orders->order_status == 1)
                                                    {{-- <a href="{{route('generate',$orders->id)}}" class="btn btn-sm btn-outline-primary">Download
                                                Invoice</a> --}}
                                                    <a href="{{ route('order_cancel', $orders->id) }}"
                                                        class="btn btn-sm btn-outline-danger">Cancel order</a>
                                                @else
                                                    @if ($orders->order_status == 0)
                                                    @endif
                                                @endif


                                            </div>
                                        </header>
                                        <hr>
                                        <table class="table-responsive table striped">

                                            <tr class="table_head text-center" style="overflow: scroll;">
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                            </tr>

                                            </th>
                                            <tbody>
                                                @php
                                                    $qty = 0;
                                                    $total_amount = 0;
                                                    $i = 1;
                                                @endphp
                                                @foreach ($orders->items as $items)
                                                    <tr class="text-center" style="overflow: scroll;">
                                                        <td><img src="{{ asset('main_products/' . $items->p_mainimg) }}"
                                                                style="height:72px;width:72px" class="img-sm rounded border"
                                                                alt="">
                                                        </td>

                                                        <td>{{ $items->p_name }}</td>
                                                        <td>{{ $items->p_price }}</td>
                                                        <td>{{ $items->quantity }}</td>
                                                        @php
                                                            $qty += $items->quantity;
                                                            $total_item = $i++;
                                                            $total = $items->p_price * $items->quantity;
                                                            $total_amount += $total;
                                                        @endphp
                                                        <td>{{ $total }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr class="text-center">
                                                    <th colspan="3">Method:-{{ $orders->payment_mode }}</th>
                                                    <th>Total Products:-{{ $total_item }}</th>
                                                    <th>Total Amount:-{{ $total_amount }}</th>
                                                </tr>
                                            </tfoot>
                                        </table>

                                        <h5 class="card-title text-center"> Order Track </h5>
                                        <div class="row" style="justify-content: center;">
                                            <div class="col-12 col-md-10 hh-grayBox pt-4">
                                                <div class="row justify-content-between">
                                                    <div class="order-tracking @php if(($orders->order_status) >0){echo "completed";}else{echo ""
                                                        ;} @endphp">
                                                        <span class="is-complete"></span>

                                                        <p> Order
                                                            Confirmed<br><span>{{ $orders->created_at->format('d/M/Y') }}</span>
                                                        </p>
                                                    </div>
                                                    <div class="order-tracking  @php if($orders->order_status >1){echo "completed";}else{echo ""
                                                        ;} @endphp">
                                                        <span class="is-complete"></span>
                                                        <p>Shipped<br><span>{{ $orders->shipped_date }}</span></p>
                                                    </div>
                                                    <div class="order-tracking  @php if($orders->order_status >2){echo "completed";}else{echo ""
                                                        ;} @endphp">
                                                        <span class="is-complete"></span>
                                                        <p>Out For
                                                            Delivery<br><span>{{ $orders->outfordelivery_date }}</span></p>
                                                    </div>
                                                    <div class="order-tracking @php if($orders->order_status >3){echo "completed";}else{echo ""
                                                        ;} @endphp">
                                                        <span class="is-complete"></span>
                                                        <p>Delivered<br><span>{{ $orders->delivered_date }}</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 text-end"><a href="{{ route('order_del', $orders->id) }}"
                                                    class="text-muted"><i style="font-size:20px"
                                                        class=" bi bi-trash"></i></a></div>
                                        </div>
                                    </div> <!-- card-body .// -->
                                </article>
                            @endforeach



                        </div> <!-- card-body .// -->
                    </article> <!-- card .// -->
                </main>
            </div> <!-- row.// -->

            <br><br>


        </div> <!-- container .//  -->


    </section>
    <!-- ============== SECTION CONTENT END// ============== -->
@endsection
