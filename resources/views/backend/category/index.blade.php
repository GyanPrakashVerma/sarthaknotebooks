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
                        <li class="breadcrumb-item active" aria-current="page">Category Table</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center" >
                    <div class="col-lg-8 col-xl-8">
                        <h3>Category</h3>
                    </div>
                    <div class="col-lg-4 col-xl-4">
                        <a href="{{ route('category.create') }}" class="btn btn-primary p-2"><i
                                class="bx bxs-plus-square"></i>New Category</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead class="table-light">
                            <tr class="text-center">
                                <th>#</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($cate as $category)
                                <tr class="text-center">
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $category->cate_name }}</td>
                                    {{-- <td>{!! $category->description !!}</td> --}}
                                    <td><img src="{{asset ('cate_img/' . $category->image) }}" height="150px"
                                        width="150px" alt=""></td>
                                    <td>
                                        @if ($category->status == 1)
                                            <span class="right badge bg-gradient-blooker">Active</span>
                                        @else
                                            <span class="right badge bg-gradient-bloody">In Active</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                            @csrf
                                            @method('Delete')
                                            <a href="{{ route('category.edit', $category->id) }}"
                                                class="btn btn-outline-danger"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <button type="submit" class="btn btn-light"><i
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
