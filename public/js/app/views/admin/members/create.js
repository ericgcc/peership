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

        let countrySelector = $("#country"), languageSelector = $("#language"),
            genderSelector = $("#gender"), pronounsSelector = $("#pronouns"), address_country = $("#address-country"),
            region = $("#region");

        // region .: Date of birth selector :.
        $("#birth-date").flatpickr({
            altInput: true,
            altFormat: 'F j, Y',
          dateFormat: 'Y-m-d'
        });
        // endregion

        // region .: Country selector :.
        new components.CountryDropdown(countrySelector).add();
        // endregion

        // region .: Language selector :.
        new components.Dropdown(languageSelector, {
          placeholder: "Select a language",
          minimumResultsForSearch: Infinity,
        }).add();
        // endregion

        // region .: Gender and pronoun selectors :.
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

        // region .: Phone inputs :.
        $("#primary-phone").intlTelInput({
            autoPlaceholder: "aggressive",
            placeholderNumberType: "MOBILE",
            separateDialCode: true,
            preferredCountries: ["ca"],
            initialCountry: "ca",
        });

        $("#secondary-phone").intlTelInput({
            autoPlaceholder: "aggressive",
            placeholderNumberType: "MOBILE",
            separateDialCode: true,
            preferredCountries: ["ca"],
            initialCountry: "ca",
        });
        //endregion

        // region .: Country-Region dependent dropdowns :.
        // Parent dropdown
        new components.CountryDropdown(address_country).add();
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
    });
})(window, document, jQuery);
