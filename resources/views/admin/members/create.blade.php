@extends('layouts/layoutMaster')

@section('title', 'New member')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{asset(mix('assets/vendor/libs/flatpickr/flatpickr.css'))}}">
  <link rel="stylesheet" href="{{asset(mix('assets/vendor/libs/select2/select2.css'))}}">
  <link rel="stylesheet" href="{{asset(mix('assets/vendor/libs/peership/intl-tel-input/intlTelInput.min.css'))}}">
  <link rel="stylesheet"
        href="{{asset(mix('assets/vendor/libs/peership/webui-popover/jquery.webui-popover.min.css'))}}">
  <link rel="stylesheet" href="{{asset(mix('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css'))}}"/>
@endsection

@section('page-style')
  <style>
    .iti__flag {
      background-image: url("{{asset(mix('assets/vendor/libs/peership/intl-tel-input/img/flags.png'))}}");
    }

    @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
      .iti__flag {
        background-image: url("{{asset(mix('assets/vendor/libs/peership/intl-tel-input/img/flags@2x.png'))}}");
      }
    }

    div.iti {
      width: 100%;
    }

    /*So that the flag container is not hidden with the validation of the field*/
    .iti__flag-container {
      z-index: 4;
    }
  </style>
@endsection


@section('content')

  {{--  <h4 class="fw-bold py-3 mb-4">--}}
  {{--    <span class="text-muted fw-light">Members/</span>New Member--}}
  {{--  </h4>--}}
  <div class="row">
    <div class="col-12">
      <div class="card">
        <form id="member-registration" class="form" method="POST" action="{{route('members.store')}}">
          @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <h4 class="mb-4">Basic info</h4>
                <div class="row g-3">
                  <!-- 1. Identification -->
                  <h5 class="mb-0">1. Identification</h5>
                  <div class="col-md-4">
                    <label class="form-label" for="first-name">First name
                      <strong><span class="text-danger">*</span></strong>
                    </label>
                    <input
                      type="text"
                      id="first-name"
                      name="first-name"
                      class="form-control{{ $errors->has('first-name')? ' is-invalid' : '' }}"
                      placeholder="First Name"
                      value="{{old('first-name')}}"
                    />
                    @error('first-name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="col-md-4">
                    <label class="form-label" for="last-name">Last name<strong><span
                          class="text-danger">*</span></strong></label>
                    <input
                      type="text"
                      id="last-name"
                      name="last-name"
                      class="form-control{{ $errors->has('last-name')? ' is-invalid' : '' }}"
                      placeholder="Last Name"
                      value="{{old('last-name')}}"
                    />
                    @error('last-name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-md-4">
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
                      name="preferred-name"
                      class="form-control"
                      placeholder="Preferred Name"
                      value="{{old('preferred-name')}}"
                    />
                  </div>
                  <div class="col-md-4">
                    <label class="form-label" for="email">Email<strong><span
                          class="text-danger">*</span></strong></label>
                    <input
                      type="email"
                      id="email"
                      name="email"
                      class="form-control{{$errors->has('email')? ' is-invalid' : ''}}"
                      placeholder="Email"
                      value="{{old('email')}}"
                    />
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-md-4">
                    <label class="form-label" for="primary-phone">Primary Phone<strong><span
                          class="text-danger">*</span></strong></label>
                    <div class="input-group mb-1">
                      <input
                        type="tel"
                        id="primary-phone"
                        name="primary-phone"
                        class="form-control{{$errors->has('primary-phone')? ' is-invalid' : ''}}"
                        style="width: 100%"
                        value="{{old('primary-phone')}}"
                      />
                      @error('primary-phone')
                      <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label class="form-label" for="secondary-phone">Secondary Phone</label>
                    <div class="input-group mb-1">
                      <input
                        type="tel"
                        id="secondary-phone"
                        name="secondary-phone"
                        class="form-control"
                        style="width: 100%"
                        value="{{old('secondary-phone')}}"
                      />
                    </div>
                  </div>
                  <!-- 2. Supplementary Info -->
                  <h5 class="mb-0 mt-4">2. Supplementary Info</h5>
                  <div class="col-md-6 col-12">
                    <label class="form-label" for="country">Country of origin<strong><span
                          class="text-danger">*</span></strong></label>
                    <select
                      class="form-select select2{{$errors->has('country')? ' is-invalid' : ''}}"
                      id="country"
                      name="country"
                    ></select>
                    @error('country')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-md-6 col-12">
                    <label class="form-label" for="language">Language for
                      communications<strong><span class="text-danger">*</span></strong></label>
                    <select
                      class="select2 form-select select2{{$errors->has('language')? ' is-invalid' : ''}}"
                      id="language"
                      name="language">
                      <option></option>
                      <option value="en">English</option>
                      <option value="fr">French</option>
                      <option value="es">Spanish</option>
                      <option value="ar">Arabic</option>
                    </select>
                    @error('language')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="gender">Gender Identity</label>
                      <i class="fa-solid fa-circle-question text-primary"
                         data-role="tooltip"
                         data-content="Refers to the current gender, which may be different from the gender assigned at birth."
                         data-trigger="hover"></i>
                      <select class="select2 form-select" id="gender" name="gender">
                        <option></option>
                        <option value="1" {{old('pronouns') == "1" ? "selected":"" }}>Cis man
                        </option>
                        <option value="2" {{old('pronouns') == "2" ? "selected":"" }}>Cis woman
                        </option>
                        <option value="3" {{old('pronouns') == "3" ? "selected":"" }}>Trans man
                        </option>
                        <option value="4" {{old('pronouns') == "4" ? "selected":"" }}>Trans woman
                        </option>
                        <option value="5" {{old('pronouns') == "5" ? "selected":"" }}>Non-binary
                        </option>
                        <option value="6" {{old('pronouns') == "6" ? "selected":"" }}>Other</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="pronouns">Pronouns</label>
                      <select class="select2 form-select" id="pronouns" name="pronouns">
                        <option></option>
                        <option value="1" {{old('pronouns') == "1" ? "selected":"" }}>He/Him/His
                        </option>
                        <option value="2" {{old('pronouns') == "2" ? "selected":"" }}>She/Her/Hers
                        </option>
                        <option value="3" {{old('pronouns') == "3" ? "selected":"" }}>
                          They/Them/Theirs
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <label class="form-label" for="birth-date">Date of birth<strong><span
                          class="text-danger">*</span></strong></label>
                    <input
                      type="text"
                      id="birth-date"
                      name="birth-date"
                      class="form-control flatpickr-basic{{$errors->has('birth-date')? ' is-invalid' : ''}}"
                      placeholder="January 1, 2000"
                      value="{{old('birth-date')}}"
                    />
                    @error('birth-date')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <hr>
                <h4 class="mb-4">Address</h4>
                <div class="row g-3">
                  <div class="col-md-6">
                    <label class="form-label" for="line-1">Address Line 1<strong><span
                          class="text-danger">*</span></strong></label>
                    <input
                      type="text"
                      id="line-1"
                      name="line-1"
                      class="form-control{{ $errors->has('line-1')? ' is-invalid' : '' }}"
                      placeholder="Number and street"
                      value="{{old('line-1')}}"
                    />
                    @error('line-1')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="line-2">Address Line 2</label>
                    <input
                      type="text"
                      id="line-2"
                      name="line-2"
                      class="form-control"
                      placeholder="Apartment, suite, etc. (optional)"
                      value="{{old('line-2')}}"
                    />
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="address-country">Country<strong><span
                          class="text-danger">*</span></strong></label>
                    <select
                      class="form-select select2{{ $errors->has('address-country')? ' is-invalid' : '' }}"
                      id="address-country"
                      name="address-country"
                    ></select>
                    @error('address-country')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="region">Region<strong><span
                          class="text-danger">*</span></strong></label>
                    <select
                      class="form-select select2{{ $errors->has('region')? ' is-invalid' : '' }}"
                      id="region"
                      name="region">
                      <option id=""></option>
                    </select>
                    @error('region')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="city">City</label>
                    <input
                      type="text"
                      id="city"
                      name="city"
                      class="form-control"
                      placeholder="City"
                      value="{{old('city')}}"
                    />
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="zip">Zip Code</label>
                    <input
                      type="text"
                      id="zip"
                      name="zip"
                      class="form-control"
                      placeholder="Zip Code"
                      value="{{old('zip')}}"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="col-lg-8 mx-auto">
              <button type="submit" class="btn btn-primary me-1">Submit</button>
              <button type="reset" class="btn btn-outline-secondary">Reset</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    @endsection

    @section('vendor-script')
      <!-- vendor files -->
      <script src="{{asset(mix('assets/vendor/libs/flatpickr/flatpickr.js'))}}"></script>
      <script src="{{asset(mix('assets/vendor/libs/select2/select2.js'))}}"></script>
      <script src="{{asset(mix('assets/vendor/libs/moment/moment.js'))}}"></script>
      <script src="{{asset(mix('assets/vendor/libs/peership/intl-tel-input/intlTelInput.min.js'))}}"></script>
      <script src="{{asset(mix('assets/vendor/libs/peership/intl-tel-input/utils.js'))}}"></script>
      <script src="{{asset(mix('assets/vendor/libs/peership/webui-popover/jquery.webui-popover.min.js'))}}"></script>
      <script src="{{asset(mix('assets/vendor/libs/peership/dependent-dropdown/dependent-dropdown.min.js'))}}"></script>
      <script src="{{asset(mix('assets/vendor/libs/formvalidation/dist/js/FormValidation.full.min.js'))}}"></script>
      <script
        src="{{asset(mix('assets/vendor/libs/formvalidation/dist/js/plugins/InternationalTelephoneInput.js'))}}"></script>
      <script src="{{asset(mix('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js'))}}"></script>
      <script src="{{asset(mix('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js'))}}"></script>
    @endsection

    @section('page-script')
      <!-- Page js files -->
      <script type="module" src="{{asset('js/app/views/admin/members/create.js')}}"></script>
@endsection
