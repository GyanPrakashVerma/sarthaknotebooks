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
                        <li class="breadcrumb-item active" aria-current="page">Subscribed Client Table</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-10">
                        <h5>Our Subscribers</h5>
                    </div>
                    {{-- <div class="col-lg-3 col-xl-2">
                        <a href="{{ route('category.create') }}" class="btn btn-primary p-2"><i
                                class="bx bxs-plus-square"></i>New Category</a>
                    </div> --}}
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead class="table-light">
                            <tr class="text-center">
                                <th>#</th>
                                <th>Email</th>
                                <th>Subscribe At</th>
                                <th>Un subscribe At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($user as $users)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $users->email }}</td>
                                    <td>{{ $users->created_at }}</td>
                                    <td>{{ $users->Unsubscribe_At	 }}</td>
                                    <td>
                                        <form action="{{ route('subscribe.destroy', $users->id) }}" method="POST">
                                            @csrf
                                            @method('Delete')
                                           
                                            <button type="submit" class="btn btn-outline-danger"><i
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
