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
                        <li class="breadcrumb-item active" aria-current="page">Banners</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card border-top border-0 border-4 border-primary">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div>
                    </div>
                    <h5 class="mb-0 text-primary">Banner Register</h5>
                </div>
                <hr>
                <form class="row g-3" method="POST" action="{{route('banner.update',$banner->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <label for="img" class="form-label">Product Image</label>
                        <input type="file" name="image" class="form-control" id="img">
                        <img src="{{asset('Banner/'.$banner->image)}}" style="height: 200px;width:50%;" alt="">
                    </div>
                    <div class="col-md-12 ">
                        <label for="description" class="form-label">Status</label>
                        <select name="status" class="form-control">
                            <option value="0" @if ($banner->status==0) selected   @endif>Active</option>
                            <option value="1" @if ($banner->status==1) selected   @endif>In Active</option>
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