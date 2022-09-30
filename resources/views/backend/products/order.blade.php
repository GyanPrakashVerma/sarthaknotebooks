@extends('backend.layouts')
@section('new')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Tables</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Customers Table</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body">
                {{-- <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <div class="position-relative">
                        <form action="{{route('order.search')}}" method="POST">
                            @csrf
                        <input type="text" class="form-control  ps-5 radius-30" name="search" placeholder="Search Order"> <span
                            class="position-absolute top-50 product-show translate-middle-y"><i
                                class="bx bx-search"></i></span>
                            </form>
                    </div>
                    <div class="ms-auto"><a href="javascript:;" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i
                                class="bx bxs-plus-square"></i>Add New Order</a></div>
                </div> --}}
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr class="text-center">
                                <th>Order Id</th>
                                <th>Customer Name</th>
                                <th>Delivery Address</th>
                                {{-- <th>Product Category</th>
                                <th>Product Name</th> --}}
                                <th>Payment Status</th>
                                <th>Total</th>
                                <th>Date</th>
                                {{-- <th>Order Status</th> --}}
                                {{-- <th>Change Order Status</th> --}}
                                {{-- <th>View Details</th> --}}
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($newitem as $items)
                            <tr class="text-center">
                                <td>#OS-000{{$items->id}}</td>
                                <td>{{$items->name}}</td>
                                {{-- @php
                                    $cate = \App\Models\Category::where('id',$items->cate_id)->first();
                                @endphp
                                <td>{{$cate->cate_name??null}}</td>--}}
                                <td>{{$items->address1}}</td> 
                                <td> 
                                    @if ($items->payment_status == "pending")
                                    <div class="badge rounded-pill text-warning bg-light-warning p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>Pending</div>
                                      @else
                                      @if ($items->payment_status == "paid")
                                <div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>Success</div>
                                      @endif

                                    @endif
                                </td>
                                <td>Rs.{{$items->total_price}}</td>
                                {{-- @php
                                    $date = \App\Models\OrderItem ::where('id',$items->order_id)->first();
                                @endphp --}}
                                <td>{{$items->created_at->format('d/M/Y (H:m:s)')}}</td>
                                {{-- <td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td> --}}
                                <td>
                                    <a href="{{route('order_status',$items->id)}}" class="btn text-info bg-light-info "><i class="fa-solid fa-angle-right "></i></a>
                                    {{-- <form action="{{route('order.del',$items->id)}}" method="POST">
                                        @csrf
                                        @method('Delete')
                                        
                                        <button type="submit" class="btn"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                    </form> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                        {{-- <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14">#OS-000354</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Gaspur Antunes</td>
                                <td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class='bx bxs-circle me-1'></i>FulFilled</div></td>
                                <td>$485.20</td>
                                <td>June 10, 2020</td>
                                <td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
                                        <a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14">#OS-000986</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Gaspur Antunes</td>
                                <td><div class="badge rounded-pill text-info bg-light-info p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>Confirmed</div></td>
                                <td>$650.30</td>
                                <td>June 12, 2020</td>
                                <td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
                                        <a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14">#OS-000536</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Gaspur Antunes</td>
                                <td><div class="badge rounded-pill text-warning bg-light-warning p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>Partially shipped</div></td>
                                <td>$159.45</td>
                                <td>June 14, 2020</td>
                                <td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
                                        <a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14">#OS-000678</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Gaspur Antunes</td>
                                <td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>FulFilled</div></td>
                                <td>$968.40</td>
                                <td>June 16, 2020</td>
                                <td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
                                        <a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14">#OS-000457</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Gaspur Antunes</td>
                                <td><div class="badge rounded-pill text-info bg-light-info p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>Confirmed</div></td>
                                <td>$689.50</td>
                                <td>June 18, 2020</td>
                                <td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
                                        <a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14">#OS-000685</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Gaspur Antunes</td>
                                <td><div class="badge rounded-pill text-info bg-light-info p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>Confirmed</div></td>
                                <td>$478.60</td>
                                <td>June 20, 2020</td>
                                <td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
                                        <a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14">#OS-000356</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Gaspur Antunes</td>
                                <td><div class="badge rounded-pill text-warning bg-light-warning p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>Partially shipped</div></td>
                                <td>$523.30</td>
                                <td>June 21, 2020</td>
                                <td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
                                        <a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14">#OS-000875</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Gaspur Antunes</td>
                                <td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>FulFilled</div></td>
                                <td>$960.20</td>
                                <td>June 24, 2020</td>
                                <td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
                                        <a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14">#OS-000658</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Gaspur Antunes</td>
                                <td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>FulFilled</div></td>
                                <td>$428.10</td>
                                <td>June 25, 2020</td>
                                <td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
                                        <a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14">#OS-000689</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Gaspur Antunes</td>
                                <td><div class="badge rounded-pill text-warning bg-light-warning p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>Partially shipped</div></td>
                                <td>$876.60</td>
                                <td>June 26, 2020</td>
                                <td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
                                        <a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody> --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
