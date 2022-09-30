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
                    <h5 class="mb-0 text-primary">Product Register</h5>
                </div>
                <hr>
                <form class="row g-3" method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <label for="inputFirstName" class="form-label">Category</label>
                        <select name="cate" class="form-control">
                            <option disabled selected>Select</option>
                            @foreach($cate as $category)
                            <option value="{{$category->id}}">{{$category->cate_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputFirstName" class="form-label">Product Name</label>
                        <input type="text" name="pname" class="form-control" id="inputFirstName">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Product Price</label>
                        <input type="number" name="pprice" id="selling_price" class="form-control" >
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Product Max Price</label>
                        <input type="number" name="mprice" id="market_price" class="form-control" >
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label"> Price Discount </label>
                        <input type="number" name="pdis" id="total" class="form-control" >
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label"> Products Quantity</label>
                        <input type="text" name="pqty" class="form-control" >
                    </div>
                    <div class="col-md-6 ">
                        <label for="description" class="form-label">Product Main Image</label>
                        <input type="file" name="pmimage" class="form-control" >
                    </div>
                    <div class="col-md-12 ">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control summernote" name="desc" id="description" cols="30" rows="5"></textarea>
                    </div>
                   
                    <div class="col-md-6 ">
                        {{-- <label for="description" class="form-label">Product id</label> --}}
                        <input type="hidden" name="p_id" class="form-control">
                    </div>
                    {{-- <div class="col-md-6 ">
                        <label for="description" class="form-label">Product Secondary Image</label>
                        <input type="file" name="pimage[]" class="form-control" multiple>
                        @error('images')
                        <div class="invalid-feedback">{{ $message }} </div>
                    @enderror
                    </div> --}}
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary px-5">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection

    <script>
var first =document.getElementById('selling_price');
var second = document.getElementById('market_price');
var result  = (first/second)*(100/100);
console.log(result);
// document.getElementById('total').value=result;
    </script>