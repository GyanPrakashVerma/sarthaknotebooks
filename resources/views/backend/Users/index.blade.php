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
                        <li class="breadcrumb-item active" aria-current="page">Customers Table</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-10">
                        <h3>All Customers</h3>
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
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($customer as $customers)
                                <tr class="text-center">
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $customers->name }}</td>
                                    <td>{{ $customers->email }}</td>
                                    <td>{{ $customers->phone }}</td>
                                    <td>{{ $customers->address1 }}</td>
                                    <td>
                                        <form action="{{ route('user.destroy', $customers->id) }}" method="POST">
                                            @csrf
                                            @method('Delete')
                                            <a href="{{ route('user.show', $customers->id) }}"
                                                class="btn btn-outline-danger"><i class="fa-solid fa-eye"></i></a>
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
