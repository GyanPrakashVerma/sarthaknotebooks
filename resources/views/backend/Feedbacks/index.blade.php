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
                <li class="breadcrumb-item active" aria-current="page">Feedback Table</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->
    <div class="card" style="overflow:scroll">
        <div class="card-header">
            <h5 class="card-header-text">All Feedbacks</h5>
            <button class="btn btn-outline-warning" style="float:right"><a href="{{ route('testimonial.create') }}"
                    class="text-dark">Add Member</a></button>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                {{-- <th>Subject</th> --}}
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($feedback as $feeds)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $feeds->Name }}</td>
                                    <td>{{ $feeds->email }}</td>
                                    {{-- <td>{{ $feeds->subject }}</td> --}}
                                    <td><img src="{{ asset('feedback_img/' . $feeds->image) }}" height="150px"
                                            width="150px" alt=""></td>
                                    <td>
                                        @if ($feeds->status == 1)
                                            <span class="right badge bg-warning "> Active</span>
                                        @else
                                            <span class="right badge bg-info ">In Active</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('testimonial.destroy', $feeds->id) }}" method="POST">
                                            @csrf
                                            @method('Delete')
                                            <a href="{{ route('testimonial.edit', $feeds->id) }}"
                                                class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
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
</div>
    @endsection
