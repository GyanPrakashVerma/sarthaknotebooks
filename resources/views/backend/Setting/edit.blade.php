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
                        <li class="breadcrumb-item active" aria-current="page">Settings </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card border-top border-0 border-4 border-primary">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div>
                    </div>
                    <h5 class="mb-0 text-primary">Change Website Settings</h5>
                </div>
                <hr>
        <form action="{{route('setting.update',$setting->id)}}" class="row g-3" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="title" class="form-label">Company Name</label>
                        <input type="text" name="company_name" class="form-control" id="name" value="{{$setting->company_name}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="title" class="form-label">Company Website</label>
                        <input type="url" name="company_url" class="form-control" id="name" value="{{$setting->url}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="image" class="form-label">Logo</label>
                        <input type="file" name="image" class="form-control" id="image" value="{{$setting->logo}}">
                        <img src="{{ asset('setting_img/' . $setting->logo) }}" style="width: 150px;height:150px;" alt="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{$setting->email}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-label">Contact no.</label>
                        <input type="tel" name="contact_no" class="form-control" id="contact" value="{{$setting->contact_no}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-label">Optional Contact</label>
                        <input type="tel" name="contact_optional" class="form-control" id="op_contact" value="{{$setting->contact_optional}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-label">Address</label>
                        <textarea name="address" class="form-control" id=""  cols="30" rows="3">{{$setting->address}}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-label">Facebook Link</label>
                        <input type="url" name="facebook_link" class="form-control" id="" value="{{$setting->facebook_link}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-label">Twitter Link</label>
                        <input type="url" name="twitter_link" class="form-control" id="" value="{{$setting->twitter_link}}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-label">Instagram Link</label>
                        <input type="url" name="insta_link" class="form-control" id="" value="{{$setting->insta_link}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-label">Linkedin Link</label>
                        <input type="url" name="linkedin_link" class="form-control" id="" value="{{$setting->linkedin_link}}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-label">Google Link</label>
                        <input type="url" name="google_link" class="form-control" id="" value="{{$setting->google_link}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-label">Pinterest Link</label>
                        <input type="url" name="pinterest_link" class="form-control" id="" value="{{$setting->pinterest_link}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-label">About</label>
                        <textarea name="f_about" class="form-control" id="" rows="5" cols="10">{{$setting->f_about}}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-label">Google Map</label>
                        <input type="url" name="g_map" class="form-control" id="" value="{{$setting->g_map}}">
                    </div>
                </div>
            </div>
            <button type="submit" class="col-md-2 btn btn-primary" style="float:right">Submit</button>
        </form>
    </div>
</div>
</div>
@endsection