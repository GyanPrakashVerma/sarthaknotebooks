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
                        <li class="breadcrumb-item active" aria-current="page">Feedback Table</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5 class="card-header-text">Feedback Add</h5>
            </div>
            <div class="card-block p-5">
                <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="title" class="form-control-label">Name</label>
                            <input type="text" name="fname" class="form-control" id="title"
                                placeholder="Enter name">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="image" class="form-control-label">Image</label>
                            <input type="file" name="image" class="form-control" id="image"
                                placeholder="Add image">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="title" class="form-control-label">Email</label>
                            <input type="email" name="email" class="form-control" id="title"
                                placeholder="Enter email">
                        </div>
                        {{-- <div class="col-md-6 form-group">
                            <label for="title" class="form-control-label">Subject</label>
                            <input type="text" name="subject" class="form-control" id="title"
                                placeholder="Enter subject">
                        </div> --}}
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-control-label">Message</label>
                        <textarea name="msg" class="form-control" id="" rows="3"></textarea>

                        <!-- <input type="text" name="msg" class="form-control" id="title" placeholder="feedback"> -->
                    </div>
                    <button type="submit" class="my-3 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
