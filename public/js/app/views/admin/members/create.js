import * as components from '../../../components/index.js';

(function (window, document, $) {
    'use strict';
    jQuery(function ($) {  // on document ready
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                // required for sending post requests params as form data
                // https://stackoverflow.com/a/11443066
                'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
            }
        });

        // region == FORM COMPONENTS ==
        let countrySelector = $("#country"), languageSelector = $("#language"),
          genderSelector = $("#gender"), pronounsSelector = $("#pronouns"), addressCountry = $("#address-country"),
          region = $("#region"), birtDate = $("#birth-date");

        // region -- Date of birth selector --
        birtDate.flatpickr({
            altInput: true,
            altFormat: 'F j, Y',
            dateFormat: 'Y/m/d'
        });
        // endregion

        // region -- Country selector --
        new components.CountryDropdown(countrySelector).add();
        // endregion

        // region -- Language selector --
        new components.Dropdown(languageSelector, {
          placeholder: "Select a language",
          minimumResultsForSearch: Infinity,
        }).add();
        // endregion

        // region -- Gender and pronoun selectors --
        new components.Dropdown(genderSelector, {
          placeholder: "Select a gender",
          minimumResultsForSearch: Infinity,
          allowClear: true,
        }).add();

        new components.Dropdown(pronounsSelector, {
          placeholder: "Select a gender",
          minimumResultsForSearch: Infinity,
          allowClear: true,
        }).add();
        // endregion

        // region -- Phone inputs --
        // This is now handled by the validator
        // window.intlTelInput($("#primary-phone")[0],{
        //   autoPlaceholder: "aggressive",
        //   placeholderNumberType: "MOBILE",
        //   separateDialCode: true,
        //   preferredCountries: ["ca"],
        //   initialCountry: "ca",
        // });

        // $("#secondary-phone").intlTelInput({
        window.intlTelInput($("#secondary-phone")[0],{
              autoPlaceholder: "aggressive",
              placeholderNumberType: "MOBILE",
              separateDialCode: true,
              preferredCountries: ["ca"],
              initialCountry: "ca",
          });
        // endregion

        // region -- Country-Region dependent dropdowns --
        // Parent dropdown
        new components.CountryDropdown(addressCountry).add();
        // Child
        new components.Dropdown(region, {
          placeholder: "Region/State/Province",
          tags: true,
          multiple: false,
          allowClear: true
        }).add();
        region.depdrop({
            url: '/api/states',
            depends: ['address-country'],
        });
        // endregion

        $("[data-role='tooltip']").webuiPopover();

        // Delegated event handling. Set focus to search text field when we click on select 2 drop down
        // https://stackoverflow.com/a/71677782/7594844
        $(document).on('select2:open', '.select2', function (e) {
            setTimeout(() => {
                const $elem = $(this).attr("id");
                document.querySelector(`[aria-controls="select2-${$elem}-results"]`).focus();
            });
        });
      // endregion == FORM COMPONENTS ==

      // region == FORM VALIDATION ==
      const fv = FormValidation.formValidation(document.getElementById("member-registration"),{
        fields: {
          "first-name":{
            validators: {
              notEmpty: {
                message: 'The first name is required.'
              },
            }
          },
          "last-name":{
            validators: {
              notEmpty: {
                message: 'The last name is required.'
              },
            }
          },
          email: {
            validators: {
              notEmpty: {
                message: 'The email is required.'
              },
              emailAddress: {
                message: 'The value is not a valid email address.',
              },
            },
          },
          "primary-phone": {
            validators: {
              notEmpty: {
                message: 'The primary phone number is required',
              },
            },
          },
          "birth-date":{
            validators: {
              notEmpty: {
                message: 'The date of birth is required.',
              },
              date:{
                format: 'YYYY/MM/DD',
                max: () => {
                  let today = new Date();
                  return moment(today.setFullYear(today.getFullYear() - 15)).format('YYYY/MM/DD');
                },
                message: 'Must be at least 15 years old.'
              }
            }
          },
          country:{
            validators: {
              notEmpty: {
                message: 'The country is required.',
              },
            }
          },
          language:{
            validators: {
              notEmpty: {
                message: 'The language is required.',
              },
            }
          },
          "line-1":{
            validators:{
              notEmpty: {
                message: 'The number and street are required.',
              },
            }
          },
          "address-country":{
            validators: {
              notEmpty: {
                message: 'The country is required.',
              },
            }
          },
          region:{
            validators: {
              notEmpty: {
                message: 'The region is required.',
              },
            }
          },
          zip:{
            validators: {
              zipCode: {
                country: function () {
                  return addressCountry.val();
                },
                message: 'The value is not a valid postal code.'
              }
            }
          },
        },
        plugins: {
          trigger: new FormValidation.plugins.Trigger({
            event: {
              "first-name": 'blur',
              "last-name": 'blur',
              "email": 'blur',
              "primary-phone": 'blur',
              "line-1": 'blur',
              "zip": 'blur',
            },
          }),
          bootstrap: new FormValidation.plugins.Bootstrap5({
            eleValidClass: '',
          }),
          submitButton: new FormValidation.plugins.SubmitButton(),
          // Submit the form when all fields are valid
          defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
          autoFocus: new FormValidation.plugins.AutoFocus(),
          internationalTelephoneInput: new FormValidation.plugins.InternationalTelephoneInput({
            // Creation and validation of the primary phone input
            autoPlaceholder: "aggressive",
            placeholderNumberType: "MOBILE",
            separateDialCode: true,
            preferredCountries: ["ca"],
            initialCountry: "ca",
            field: 'primary-phone',
            message: 'The phone number is not valid',
            utilsScript: '/assets/vendor/libs/peership/intl-tel-input/utils.js'
          }),
        }
      });

      // Flatpickr highlighting invalid field or removing highlighting if valid
      fv.on('core.field.invalid', function(field) {
        if($(`#${field}`)[0]._flatpickr){
          $(`#${field}`)[0]._flatpickr.altInput.classList.add('is-invalid');
        }
      });
      fv.on('core.field.valid', function(field) {
        if($(`#${field}`)[0]._flatpickr){
          $(`#${field}`)[0]._flatpickr.altInput.classList.remove('is-invalid');
        }
      });

      // Third-party libs validation trigger
      // Select2
      countrySelector.on('select2:close', function () {
        fv.validateField('country');
      });
      languageSelector.on('select2:close', function () {
        fv.validateField('language');
      });
      addressCountry.on('select2:close', function () {
        fv.validateField('address-country');
      });
      region.on('select2:close', function () {
        fv.validateField('region');
      });
      // Flatpickr
      birtDate[0]._flatpickr.set("onClose", function(){
        fv.validateField('birth-date');
      })

      // Revalidation third-party libs inputs on change trigger
      // Select2
      countrySelector.on('change.select2', function () {
        // Revalidate the country field when an option is chosen
        fv.revalidateField('country');
      });
      languageSelector.on('change.select2', function () {
        fv.revalidateField('language');
      });
      addressCountry.on('change.select2', function () {
        // Revalidate the country field when an option is chosen
        fv.revalidateField('address-country');
      });
      region.on('change.select2', function () {
        // Revalidate the country field when an option is chosen
        fv.revalidateField('region');
      });
      // Flatpickr
      birtDate[0]._flatpickr.set("onChange", function(){
        fv.revalidateField('birth-date');
      })
      // endregion == FORM VALIDATION ==
    });
})(window, document, jQuery);
