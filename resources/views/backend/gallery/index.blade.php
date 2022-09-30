@extends('backend.layouts')
@section('new')

@if (Session::has('success'))
    <script>
        swal("Thank you", "{{ Session::get('success') }}", "success", {
            button: "OK"
        });
    </script>
@endif

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Tables</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Gallery Table</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-lg-9 col-xl-10">
                    <h3>Gallery</h3>
                </div>
                <div class="col-lg-3 col-xl-2">
                    <a href="{{ route('gallery.create') }}" class="btn btn-primary p-2"><i
                            class="bx bxs-plus-square"></i>Add Photo</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead class="table-light">
                        <tr style="text-align: center">
                                <th>#</th>
                                <th>Image</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($gallery as $data)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td><img src="{{ asset('gallery_img/' . $data->image) }}" height="150px"
                                            width="150px" alt=""></td>
                                   
                                    <td>
                                        <form action="{{ route('gallery.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('Delete')
                                            <a href="{{ route('gallery.edit', $data->id) }}"
                                                class="btn btn-outline-danger"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <button type="submit" class="btn btn-dark"><i
                                                    class="fa-solid fa-trash-can"></i></button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
