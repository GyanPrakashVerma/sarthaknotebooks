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
                        <li class="breadcrumb-item active" aria-current="page">Gallery </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card border-top border-0 border-4 border-primary">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <h5 class="mb-0 text-primary">Gallery Images</h5>
                </div>
                <hr>
                <form class="row g-3" method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="image" class="form-control-label">Image</label>
                            <input type="file" name="image" class="form-control" id="image"
                                placeholder="Add image">
                        </div>
                    </div>
                    <button type="submit" class="col-md-2 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
