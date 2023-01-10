@extends('layouts.contentLayoutMaster')

@section('title', 'Members')

@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection

@section('page-style')
    <!-- Page css files -->
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-wizard.css')) }}">
@endsection

@section('content')

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
            <img class="img-fluid" src="{{asset('images/peership/illustration/no_results.svg')}}" alt="No results found"
                 style="height: 15em;"/>
        </div>
    </div>
@endsection

@section('vendor-script')
    <!-- vendor files -->
    <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
@endsection
@section('page-script')
    <!-- Page js files -->
    <script src="{{ asset(mix('js/scripts/forms/form-wizard.js')) }}"></script>
@endsection
