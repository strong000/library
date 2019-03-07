@extends('layouts.master')

@section('title', 'Lending List')

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
                <h4 class="header-title">Lending List</h4>
                <div class="data-tables">
                    <table id="dataTable" class="text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th>No.</th>
                                <th>Movie</th>
                                <th>Member</th>
                                <th>Expected Return Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach($lendings as $lending)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $lending->movie->title }}</td>
                                    <td>{{ $lending->member->name }}</td>
                                    <td>{{ $lending->expected_return_date }}</td>
                                    <td>
                                        @if(\Carbon\Carbon::now() > $lending->expected_return_date)
                                            <button type="button" class="btn btn-success mb-3" onclick="showModal({{ $lending->id }})">Return</button>
                                        @else
                                            <a href="{{ route('returnment_without_charge', $lending->id) }}" class="btn btn-success">Return</a>
                                        @endif
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


    <!-- basic modal start -->
        <div class="modal fade" id="modalCharge">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Lateness Charge</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <p>Due to lateness of returnment you will be charged with:</p>
                        <form role="form" method="POST" action="{{ route('returnment_charge') }}">
                            {!! csrf_field() !!}
                            <input type="hidden" id="return_id" name="return_id" value="">
                            <div class="form-group">
                                <label for="title" class="col-form-label">Lateness Charge</label>
                                <input type="number" class="form-control" name="lateness_charge" required>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- basic modal end -->
@endsection

@section('extra-js')
    <script src="/assets/js/datatable/jquery.dataTables.js"></script>
    <script src="/assets/js/datatable/jquery.dataTables.min.js"></script>
    <script src="/assets/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/js/datatable/dataTables.responsive.min.js"></script>
    <script src="/assets/js/datatable/responsive.bootstrap.min.js"></script>

    <script type="text/javascript">
        @if(session('lending') == 'create')
            Swal.fire({
              type: 'success',
              title: 'Success!',
              text: 'Movie has been lended successully!'
            });
        @endif

        @if(session('lending') == 'returnment')
            Swal.fire({
              type: 'success',
              title: 'Success!',
              text: 'Movie has been return successully!'
            });
        @endif

        function showModal(lending_id)
        {
            $("#return_id").val(lending_id);

            $("#modalCharge").modal('show');
        }
    </script>
@endsection