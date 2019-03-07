@extends('layouts.master')

@section('title', 'Member List')

@section('extra-css')
    <link rel="stylesheet" type="text/css" href="/assets/css/datatable/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/datatable/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/datatable/responsive.jqueryui.min.css">
@endsection

@section('content')
    <!-- data table start -->
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Member List</h4>
                <a href="{{ route('member_create') }}" class="btn btn-flat btn-success btn-xs mb-3 pull-right"><i class="ti-plus"></i> Add new Member</a>
                <div class="data-tables">
                    <table id="dataTable" class="text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>Telephone</th>
                                <th>Ic Number</th>
                                <th>Released Date</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach($member as $members)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $members->name }}</td>
                                    <td>{{ $members->age }}</td>
                                    <td>{{ $members->address }}</td>
                                    <td>{{ $members->telephone }}</td>
                                    <td>{{ $members->ic_number }}</td>
                                    <td>{{ $members->date_of_joined }}</td>
                                    <td>
                                        <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">
                                            Action
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('member_edit', $members->id) }}">Edit</a>
                                            <a class="dropdown-item" href="{{ route('member_delete', $members->id) }}">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @php($i++)
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra-js')
    <script src="/assets/js/datatable/jquery.dataTables.js"></script>
    <script src="/assets/js/datatable/jquery.dataTables.min.js"></script>
    <script src="/assets/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/js/datatable/dataTables.responsive.min.js"></script>
    <script src="/assets/js/datatable/responsive.bootstrap.min.js"></script>

    <script type="text/javascript">
        @if(session('movie') == 'create')
            Swal.fire({
              type: 'success',
              title: 'Success!',
              text: 'New movie has been added!'
            });
        @endif
    </script>
@endsection