@extends('layouts.contentLayoutMaster')

@section('title', 'New member')

@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/intl-tel-input/intlTelInput.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/webui-popover/jquery.webui-popover.min.css')) }}">
@endsection

@section('page-style')
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
    <style>
        .iti__flag {
            background-image: url("{{asset('vendors/css/forms/intl-tel-input/img/flags.png')}}");
        }

        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
            .iti__flag {
                background-image: url("{{asset('vendors/css/forms/intl-tel-input/img/flags@2x.png.png')}}");
            }
        }

        div.iti {
            width: 100%;
        }
    </style>
@endsection

@section('content')
    <!-- Basic multiple Column Form section start -->
    <section id="intake-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form class="form">
                        <div class="card-header">
                            <h4 class="card-title">Basic Info</h4>
                        </div>
                        <div class="card-body">
                            <div class="col-12">
                                <h6 class="fw-semibold">Identification</h6>
                                <hr class="mt-0">
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name">First Name<strong><span
                                                    class="text-danger">*</span></strong></label>
                                        <input
                                            type="text"
                                            id="first-name"
                                            class="form-control"
                                            placeholder="First Name"
                                            name="first-name"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="last-name">Last Name<strong><span
                                                    class="text-danger">*</span></strong></label>
                                        <input
                                            type="text"
                                            id="last-name"
                                            class="form-control"
                                            placeholder="Last Name"
                                            name="last-name"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="preferred-name">
                                            Preferred name
                                        </label>
                                        <i class="fa-solid fa-circle-question text-primary"
                                           data-role="tooltip"
                                           data-content="The name a person wants or has elected to be called."
                                           data-trigger="hover"></i>
                                        <input
                                            type="text"
                                            id="preferred-name"
                                            class="form-control"
                                            placeholder="Preferred Name"
                                            name="preferred-name"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="email-id-column">Email<strong><span
                                                    class="text-danger">*</span></strong></label>
                                        <input
                                            type="email"
                                            id="email-id-column"
                                            class="form-control"
                                            name="email-id-column"
                                            placeholder="Email"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <label class="form-label" for="primary-phone">Primary Phone<strong><span
                                                class="text-danger">*</span></strong></label>
                                    <div class="input-group mb-1">
                                        <input
                                            type="tel"
                                            id="primary-phone"
                                            class="form-control"
                                            name="primary-phone"
                                            style="width: 100%"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <label class="form-label" for="secondary-phone">Secondary Phone</label>
                                    <div class="input-group mb-1">
                                        <input
                                            type="tel"
                                            id="secondary-phone"
                                            class="form-control"
                                            name="secondary-phone"
                                            style="width: 100%"
                                        />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h6 class="fw-semibold">Supplementary Info</h6>
                                    <hr class="mt-0">
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="country">Country of origin<strong><span
                                                    class="text-danger">*</span></strong></label>
                                        <select class="select2 form-select" id="country"></select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="language">Language for
                                            communications<strong><span class="text-danger">*</span></strong></label>
                                        <select class="select2 form-select select2-language" id="language">
                                            <option></option>
                                            <option value="en">English</option>
                                            <option value="fr">French</option>
                                            <option value="es">Spanish</option>
                                            <option value="ar">Arabic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="gender">Gender Identity</label>
                                        <i class="fa-solid fa-circle-question text-primary"
                                           data-role="tooltip"
                                           data-content="Refers to the current gender, which may be different from the gender assigned at birth."
                                           data-trigger="hover"></i>
                                        <select class="select2 form-select" id="gender">
                                            <option></option>
                                            <option value="1">Cis man</option>
                                            <option value="2">Cis woman</option>
                                            <option value="3">Trans man</option>
                                            <option value="4">Trans woman</option>
                                            <option value="5">Non-binary</option>
                                            <option value="6">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="pronouns">Pronouns</label>
                                        <select class="select2 form-select" id="pronouns">
                                            <option></option>
                                            <option value="1">He/Him/His</option>
                                            <option value="2">She/Her/Hers</option>
                                            <option value="3">They/Them/Theirs</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="birth-date">Date of birth<strong><span
                                                    class="text-danger">*</span></strong></label>
                                        <input type="text" id="birth-date" class="form-control flatpickr-basic"
                                               placeholder="January 1, 2000"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <h4 class="card-title">Contact Info</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <label class="form-label" for="line-1">Address Line 1<strong><span
                                                class="text-danger">*</span></strong></label>
                                    <div class="mb-1">
                                        <input
                                            type="text"
                                            id="line-1"
                                            class="form-control"
                                            placeholder="Number and street"
                                            name="line-1"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="line-2">Address Line 2</label>
                                        <input
                                            type="text"
                                            id="line-2"
                                            class="form-control"
                                            placeholder="Apartment, suite, etc. (optional)"
                                            name="line-2"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="city">City</label>
                                        <input
                                            type="text"
                                            id="city"
                                            class="form-control"
                                            placeholder="City"
                                            name="city"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="zip">Zip Code</label>
                                        <input
                                            type="text"
                                            id="zip"
                                            class="form-control"
                                            placeholder="Zip Code"
                                            name="zip"
                                        />
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="col-12">
                                <button type="reset" class="btn btn-primary me-1">Submit</button>
                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Floating Label Form section end -->
@endsection

@section('vendor-script')
    <!-- vendor files -->
    <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/intl-tel-input/intlTelInput-jquery.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/intl-tel-input/utils.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/webui-popover/jquery.webui-popover.min.js')) }}"></script>
@endsection
@section('page-script')
    <!-- Page js files -->
    <script src="{{ asset('js/views/admin/members/create.js') }}"></script>
@endsection
