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
                    <li class="breadcrumb-item active" aria-current="page">Category Table</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card" style="overflow:scroll">
        <div class="card-header">
            <h5 class="card-header-text">All Contacts</h5>
            {{-- <button class="btn btn-outline-warning" style="float:right"><a href="{{ route('ourteam.create') }}" class="text-dark">Add Member</a></button> --}}
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
                                <th>Contact</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($list as $lists)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $lists->name }}</td>
                                    <td>{{ $lists->email }}</td>
                                    <td>{{ $lists->contact }}</td>
                                    <td>{{ $lists->message }}</td>
                                            <td>@if($lists->status==1)
          <span class="right badge badge-warning bg-success"> Active</span>
            @else <span class="right badge badge-info ">In Active</span>  @endif</td>
          <td>
          <form action="{{route('enquiry.destroy',$lists->id)}}" method="POST">
                @csrf
                @method('Delete')
                <button type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></button>
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
