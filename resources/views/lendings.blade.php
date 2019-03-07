@extends('layouts.master')

@section('title', 'Lend a Movie')

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
                <h4 class="header-title">Lend a Movie</h4>
                    <form role="form" method="POST" action="{{ route('lend_action') }}">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="title" class="col-form-label">Movie</label>
                            <select class="form-control" name="movie_id" required>
                                <option>-- SELECT MOVIE --</option>
                                @foreach($movies as $movie)
                                    <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-form-label">Member</label>
                            <select class="form-control" name="member_id" required>
                                <option>-- SELECT MEMBER --</option>
                                @foreach($members as $member)
                                    <option value="{{ $member->id }}">{{ $member->ic_number }} - {{ $member->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="released_date" class="col-form-label">Expected Return Date</label>
                            <input id="released_date" class="form-control" type="date" value="" name="exp_return_date" required>
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