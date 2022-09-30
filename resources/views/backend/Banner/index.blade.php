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
                        <li class="breadcrumb-item active" aria-current="page">Banner Table</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-10">
                        <h3>Banners</h3>
                    </div>
                    <div class="col-lg-3 col-xl-2">
                        <a href="{{ route('banner.create') }}" class="btn btn-primary p-2"><i
                                class="bx bxs-plus-square"></i>New Banner</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead class="table-light">
                            <tr class="text-center">
                                <th>#</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($banner as $ban)
                                <tr class="text-center">
                                    <td>{{ $i++ }}</td>
                                    <td><img src="{{asset('Banner/'.$ban->image)}}" style="height: 200px;width:50%;" alt=""></td>
                                    <td>
                                        @if ($ban->status == 0)
                                            <span class="right badge bg-gradient-blooker">Active</span>
                                        @else
                                            <span class="right badge bg-gradient-bloody">In Active</span>
                                        @endif
                                    </td>
                                    <td>
                                        
                                            <a href="{{ route('banner.edit', $ban->id) }}" 
                                                class="btn btn-success mt-3"><i class="fa-solid fa-pen-to-square"></i></a>
                                            
                                        

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
