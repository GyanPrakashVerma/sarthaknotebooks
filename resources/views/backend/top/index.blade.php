@extends('backend.layouts')
@section('new')
    <div class="page-content">

       
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
                        @if ($products->stock_status == 'In_stock')
                            <span class="badge bg-gradient-blooker">{{ $products->stock_status }}</span>
                        @else
                            @if ($products->stock_status == 'Out_stock')
                                <span class="badge bg-gradient-bloody">{{ $products->stock_status }}</span>

                            @endif

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
                                    <p style="color: blueviolet;font-size:16px;font-family: 'Edu VIC WA NT Beginner', cursive;">{{$products->p_name}}</p>
                            <div class="clearfix">
                                @if ($products->pqty < 1)
                                    @if ($products->stock_status == 'Outstock')
                                    <p class="mb-0 float-start"><strong>{{ $products->pqty }}</strong> Stock</p>
                                    @endif
                                @else
                                    @if ($products->stock_status == 'Instock')
                                    <p class="mb-0 float-start"><strong>{{ $products->pqty }}</strong> Stock</p>
                                    @endif
                                @endif
                                {{-- <p class="mb-0 float-start"><strong>{{ $products->pqty }}</strong> Stock</p> --}}
                 
            <p class="mb-0 float-end fw-bold"><span
                    class="me-2 text-decoration-line-through text-secondary">Rs.{{ $products->m_price }}</span><span>Rs.{{ $products->p_price }}</span>
            </p>
        </div>
        <div class="d-flex align-items-center mt-3 fs-6">
            <div class="cursor-pointer">
                <form action="{{route('top_product_remove',$products->id)}}" method="post">
                    @csrf
                <button type="submit" class="btn btn-outline-primary"  style="font-size:12px">Remove product</label>
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
