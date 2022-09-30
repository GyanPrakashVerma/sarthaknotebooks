@extends('frontend.include.main')
@section('content')
<style>
.gallery{
    color:#e84f69!important;
}
</style>
<section>
    <div class="container">
        <div class="h_title">
            <h1>Gallery </h1>
            {{-- <p class="sub_title"><span>Lorem ipsum dolor sit amet</span></p> --}}
        </div>
        <div class="row">
            @foreach ($gallery as $data)
            <div class="col-sm-6 col-md-4 mb-3" id="" data-aos="fade-up" data-aos="fade-up">
                <img src="{{ asset('gallery_img/' . $data->image) }}" alt=""
                    class="fluid gallery_img " style="width:100%">
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection