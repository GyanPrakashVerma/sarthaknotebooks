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
                        <li class="breadcrumb-item active" aria-current="page">Setting Table</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-10">
                        <h4>Setting</h4>
                    </div>
                    <div class="col-lg-3 col-xl-2">
        <a class="btn btn-primary p-2" style="float:right"href="{{ route('setting.create') }}" class="text-dark"><i
            class="bx bxs-plus-square"></i> Add Setting</a>

                        {{-- <a href="{{ route('category.create') }}" >New Category</a> --}}
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-hover">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>logo</th>
                            <th>company_name</th>
                            <th>contact_no</th>
                            <th>contact_optional</th>
                            <th>address</th>
                            <th>email</th>
                            {{-- <th>facebook_link</th>
                            <th>twitter_link</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach ($setting as $data)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td><img src="{{ asset('setting_img/' . $data->logo) }}" height="60px" width="60px" alt=""></td>
                            <td>{{ $data->company_name }}</td>
                            <td>{{$data->contact_no}}</td>
                            <td>{{$data->contact_optional}}</td>
                            <td>{{ $data->address }}</td>
                            <td>{{ $data->email }}</td>
                            {{-- <td>{{$data->facebook_link}}</td>
                            <td>{{$data->twitter_link}}</td> --}}
                            <td>
                                <form action="{{ route('setting.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('Delete')
                                    <a href="{{ route('setting.edit', $data->id) }}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
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