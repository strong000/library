@extends('layouts.master')

@section('title', 'Add new Member')

@section('extra-css')
    <link rel="stylesheet" type="text/css" href="/assets/css/datatable/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/datatable/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/datatable/responsive.jqueryui.min.css">
@endsection

@section('content')
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Add New Member</h4>
                    <form role="form" method="POST" action="{{ route('member_store') }}">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="name" class="col-form-label">Name</label>
                            <input id="name" class="form-control" type="text" value="" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="age" class="col-form-label">Age</label>
                            <input id="age" class="form-control" type="text" value="" name="age" required>
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-form-label">Address</label>
                            <input id="address" class="form-control" type="text" value="" name="address" required>
                        </div>
                        <div class="form-group">
                            <label for="telephone" class="col-form-label">Telephone</label>
                            <input id="telephone" class="form-control" type="text" value="" name="telephone" required>
                        </div>
                        <div class="form-group">
                            <label for="ic_number" class="col-form-label">Ic Number</label>
                            <input id="ic_number" class="form-control" type="text" value="" name="ic_number" required>
                        </div>
                        <div class="form-group">
                            <label for="date_of_joined" class="col-form-label">Date Of Joined</label>
                            <input id="date_of_joined" class="form-control" type="date" value="" name="date_of_joined" required>
                        </div>
                         <div class="form-group">
                            <label for="is_active" class="col-form-label">Is Active</label>
                            <input id="is_active" class="form-control" type="text" value="" name="is_active" required>
                        </div>
                        <div class="pull-right">
                            <a href="{{ route('movie_index') }}" class="btn btn-warning mt-4 pr-4 pl-4 text-white">Cancel</a>
                            <button class="btn btn-primary mt-4 pr-4 pl-4" type="submit">Submit</button>
                        </div>
                    </form>
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

    </script>
@endsection