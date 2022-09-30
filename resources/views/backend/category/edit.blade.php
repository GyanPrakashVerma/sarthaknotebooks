@extends('backend.layouts')
@section('new')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Tables</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="#"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Category Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card border-top border-0 border-4 border-primary">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div>
                    </div>
                    <h5 class="mb-0 text-primary">Category Edit</h5>
                </div>
                <hr>
                <form class="row g-3" method="POST" action="{{route('category.update',$category->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <label for="" class="form-label">Category Name</label>
                        <input type="text" name="cate" class="form-control"  value="{{$category->cate_name}}">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="image" class="form-control-label">Image</label>
                        <input type="file" name="image" class="form-control" id="">
                        <img src="{{ asset('cate_img/'. $category->image) }}" height="150px" width="150px" alt="">
                        {{-- <img src="{{ asset('gallery_img/'. $gallery->image) }}" height="150px" width="150px" alt=""> --}}
           
                     </div>
                    <div class="col-md-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control summernote" name="desc" id="description" cols="30" rows="5">{{$category->description}}</textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="">Status</label>
                        <select name="status" class="form-control">
                            <option value="1" @if ($category->status==1) selected   @endif>Active</option>
                            <option value="0" @if ($category->status==0) selected   @endif>In Active</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary px-5">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection