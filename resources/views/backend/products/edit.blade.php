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
                        <li class="breadcrumb-item active" aria-current="page">Product </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card border-top border-0 border-4 border-primary">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div>
                    </div>
                    <h5 class="mb-0 text-primary">Product Update</h5>
                </div>
                <hr>
                <form class="row g-3" method="POST" action="{{ route('product.update', $product->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <label for="inputFirstName" class="form-label">Category</label>
                        <select name="cate" class="form-control">
                            {{-- <option disabled selected>Select</option> --}}
                            @foreach ($cate as $category)
                                <option value="{{ $category->id }}" @if ($category->id == $product->cate_id) selected @endif>
                                    {{ $category->cate_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputFirstName" class="form-label">Product Name</label>
                        <input type="text" name="pname" class="form-control" id="inputFirstName"
                            value="{{ $product->p_name }}">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Product Price</label>
                        <input type="text" name="pprice" class="form-control" value="{{ $product->p_price }}">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Product Max Price</label>
                        <input type="text" name="mprice" class="form-control" value="{{ $product->m_price }}">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label"> Price Discount </label>
                        <input type="text" name="pdis" class="form-control" value="{{ $product->discount }}">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label"> Products Quantity</label>
                        <input type="text" name="pqty" class="form-control" value="{{ $product->pqty }}">
                    </div>
                    <div class="col-md-6 ">
                        <label for="description" class="form-label">Product Main Image</label>
                        <input type="file" name="pmimage" class="form-control">
                        <img src="{{ asset('main_products/' . $product->p_mainimg) }}" class="img-fluid mt-2"
                            style="height:150px;width:150px;" alt="">
                    </div>
                  
                        {{-- <label for="description" class="form-label">Product id</label> --}}
                        <input type="hidden" name="p_id" class="form-control" value="{{$product->product_id}}">
                  
                    <div class="col-md-6 ">
                        <label for="description" class="form-label">Product Short images</label>
                        <input type="file" name="pimage[]" class="form-control" multiple>
                        {{-- @foreach ($product as $pp)
                            $ppp =Multiimage::where('id',$pp->id)->first();
                            <img src="{{ asset('products/' . $ppp->imageName) }}" class="img-fluid mt-2"
                                style="height:150px;width:150px;" alt="">
                        @endforeach --}}
                    </div>
                    <div class="col-md-12 ">
                        <label for="description" class="form-label">Description</label>
                        <textarea class=" summernote" name="desc" id="description" cols="30" rows="5">{{ $product->description }}</textarea>
                    </div>
                    {{-- <div class=" col-md-6 form-group">
                        <label for="exampleInputEmail1">Status</label>
                        <select name="stock_status" class="form-control">
                            <option value="In_stock" @if ($product->stock_status== 'In_stock') selected   @endif>In Stock</option>
                            <option value="Out_stock" @if ($product->stock_status=='Out_stock') selected   @endif>Out Stock</option>
                        </select>
                      </div> --}}

                      {{-- <div class=" col-md-6 form-group">
                        <label for="exampleInputEmail1">Top Products</label>
                        <select name="stock_status" class="form-control">
                            <option value="" @if ($product->stock_status== 'In_stock') selected   @endif></option>
                            <option value="" @if ($product->stock_status=='Out_stock') selected   @endif></option>
                        </select>
                      </div>  --}}

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary px-5">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
