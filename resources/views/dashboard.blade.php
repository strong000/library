@extends('layouts.master')

@section('title', 'Dashboard')
@section('username', 'Rienaldi')

@section('content')
	<div class="col-lg-8">
	    <div class="row">
	        <div class="col-md-6 mt-5 mb-3">
	            <div class="card">
	                <div class="seo-fact sbg1">
	                    <div class="p-4 d-flex justify-content-between align-items-center">
	                        <div class="seofct-icon"><i class="ti-video-clapper"></i>Total Movies</div>
	                        <h2>0</h2>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="col-md-6 mt-md-5 mb-3">
	            <div class="card">
	                <div class="seo-fact sbg2">
	                    <div class="p-4 d-flex justify-content-between align-items-center">
	                        <div class="seofct-icon"><i class="ti-user"></i>Total Members</div>
	                        <h2>0</h2>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="col-md-6 mt-md-5 mb-3">
	            <div class="card">
	                <div class="seo-fact sbg3">
	                    <div class="p-4 d-flex justify-content-between align-items-center">
	                        <div class="seofct-icon"><i class="ti-location-arrow"></i>Total Active Lendings</div>
	                        <h2>0</h2>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection