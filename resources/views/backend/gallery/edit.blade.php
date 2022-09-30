@extends('backend.layouts')
@section('new')
<div class="card">
    <div class="card-header">
       <h5 class="card-header-text">Update</h5>
    </div>
    <div class="card-block">
       <form action="{{route('gallery.update',$gallery->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
           <div class="col-md-6 form-group">
             <label for="image" class="form-control-label">Image</label>
             <input type="file" name="image" class="form-control" id="">
             <img src="{{ asset('gallery_img/'. $gallery->image) }}" height="150px" width="150px" alt="">
             {{-- <img src="{{ asset('gallery_img/'. $gallery->image) }}" height="150px" width="150px" alt=""> --}}

          </div>
        </div>

        
          <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>
 </div>
 @endsection