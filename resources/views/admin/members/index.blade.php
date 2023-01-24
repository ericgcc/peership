@php
  $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Members')

@section('vendor-style')
  <!-- vendor css files -->
@endsection

@section('page-style')
  <!-- Page css files -->
@endsection

@section('content')
  <h4>Members</h4>
    <div class="bg-light clearfix">
        <a class="btn btn-primary float-end" href="{{route('members.create')}}">
            <i class="fa-light fa-plus"></i>
            Add member
        </a>
    </div>

  <div class="misc-inner p-2 p-sm-3">
    <div class="w-100 text-center">
      <h2 class="mb-1">No members yet</h2>
      <p class="mb-2">This section will contain the list of members.</p>
      <img class="img-fluid" src="{{asset('assets/img/peership/illustration/no_results.svg')}}" alt="No results found"
           style="height: 15em;"/>
    </div>
  </div>
@endsection

@section('vendor-script')
  <!-- vendor files -->
@endsection

@section('page-script')
  <!-- Page js files -->
@endsection
