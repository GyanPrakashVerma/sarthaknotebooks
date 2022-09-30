@extends('backend.layouts')
@section('new')
    <div class="page-content">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-xl-3">
                                <a href="{{ route('product.create') }}" class="btn btn-primary mb-3 mb-lg-0"><i
                                        class='bx bxs-plus-square'></i>New Product</a>
                            </div>
                            {{-- <div class="col-lg-9 col-xl-10">
                                <form class="float-lg-end">
                                    <div class="row row-cols-lg-2 row-cols-xl-auto g-2">
                                        <div class="col">
                                            <div class="position-relative">
                                                <input type="text" class="form-control ps-5"
                                                    placeholder="Search Product..."> <span
                                                    class="position-absolute top-50 product-show translate-middle-y"><i
                                                        class="bx bx-search"></i></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="btn-group" role="group"
                                                aria-label="Button group with nested dropdown">
                                                <button type="button" class="btn btn-white">Sort By</button>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button"
                                                        class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class='bx bx-chevron-down'></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="btn-group" role="group"
                                                aria-label="Button group with nested dropdown">
                                                <button type="button" class="btn btn-white">Collection Type</button>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button"
                                                        class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class='bx bxs-category'></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-white">Price Range</button>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button"
                                                        class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class='bx bx-slider'></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-start"
                                                        aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .span {
                width: 30%;
                margin: auto;
                padding: 5px;
                top: -30px;
                background: rgb(85, 151, 114);
            }
        </style>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 product-grid">
            @foreach ($product as $products)
                <div class="col-md-4">
                    <div class="card" style="min-height: 200px;gap:5px">
                        <img src="{{ asset('main_products/' . $products->p_mainimg) }}"
                            style="align:center;height:225px;width:100%;" class="card-img-top" alt="...">
                        @if ($products->pqty < 1)
                           
                                <span class="badge bg-gradient-blooker">Out of stock</span>
                           
                        @else
                           
                                <span class="badge bg-gradient-bloody"> In stock</span>
                           
                        @endif
                        <div class="">
                            <div class="position-absolute top-0 end-0 m-3 product-discount"><span
                                    class="">{{ $products->discount }}</span></div>
                        </div>
                        <div class="card-body">
                            @php
                                $pro = App\Models\Category::where('id', $products->cate_id)->first();
                            @endphp
                            <h6 class="card-title cursor-pointer"><a href="#"
                                    class="text-dark">{{ $pro->cate_name ?? null }}</a></h6>
                            <p style="color: blueviolet;font-size:16px;font-family: 'Edu VIC WA NT Beginner', cursive;">
                                {{ $products->p_name }}</p>
                            <div class="clearfix">
                                @if ($products->pqty < 1)
                                    <p class="mb-0 float-start"><strong>{{ $products->pqty }}</strong> Out Stock</p>
                                @else
                                    <p class="mb-0 float-start"><strong>{{ $products->pqty }}</strong> In Stock</p>
                                @endif
                                {{-- <p class="mb-0 float-start"><strong>{{ $products->pqty }}</strong> Stock</p> --}}

                                <p class="mb-0 float-end fw-bold"><span
                                        class="me-2 text-decoration-line-through text-secondary">Rs.{{ $products->m_price }}</span><span>Rs.{{ $products->p_price }}</span>
                                </p>
                            </div>
                            <div class="d-flex align-items-center mt-3 fs-6">
                                <div class="cursor-pointer">
                                    <form action="{{ route('top_product_updt', $products->id) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-primary" style="font-size:12px">Add as
                                            Top product</label>
                                    </form>

                                </div>
                                <p class="mb-0 ms-auto">
                                <form action="{{ route('product.destroy', $products->id) }}" method="POST">
                                    @csrf
                                    @method('Delete')
                                    <a href="{{ route('product.edit', $products->id) }}" class="btn  p-0"><i
                                            class="fa-solid fa-pen-to-square " style="font-size:16px"></i></a>
                                    <button type="submit" class="btn  p-0"><i class="fa-solid fa-trash-can"
                                            style="font-size:16px"></i></button>
                                </form>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!--end row-->


    </div>
@endsection
