@extends('layouts.master')

@section('title', 'Add new Movie')

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
                <h4 class="header-title">Add new Movie</h4>
                    <form role="form" method="POST" action="{{ route('movie_store') }}">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="title" class="col-form-label">Title</label>
                            <input id="title" class="form-control" type="text" value="" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="genre" class="col-form-label">Genre</label>
                            <input id="genre" class="form-control" type="text" value="" name="genre" required>
                        </div>
                        <div class="form-group">
                            <label for="released_date" class="col-form-label">Released Date</label>
                            <input id="released_date" class="form-control" type="date" value="" name="released_date" required>
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