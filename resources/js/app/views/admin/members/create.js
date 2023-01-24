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
        // TODO: Create a "country-selector" component
        $.ajax({  // First get countries json from server
            url: "/api/countries",
            method: "post",
            dataType: "json",
        }).then(function (data) {  // Transforming data into the required select2 format
            let items = data.items.map(item => ({  // Rename data properties to match Select2 format
                id: item.id,
                text: item.name,
            }));
            items.unshift({id: "", text: ""});  // Append an empty option at the beginning
            return items;
        }).done(function (data) {
            select2Factory(countrySelector, {  // Create select2 control
                placeholder: "Select a country",
                templateResult: function (country) {
                    if (!country.id) {
                        return country.text;
                    }
                    return $(
                        `<span class="fi fi-${country.id.toLowerCase()}"></span>` +
                        '<span class="flag-text" style="margin-left: 10px;">' + country.text + "</span>"
                    );
                },
                data: data,
                allowClear: true,
            })
        });
        // endregion

        // region .: Language selector :.
        select2Factory(languageSelector, {
            placeholder: "Select a language",
            minimumResultsForSearch: Infinity,
        });
        // endregion

        // region .: Gender and pronoun selectors :.
        select2Factory(genderSelector, {
            placeholder: "Select a gender",
            minimumResultsForSearch: Infinity,
            allowClear: true,
        });

        select2Factory(pronounsSelector, {
            placeholder: "Select a gender",
            minimumResultsForSearch: Infinity,
            allowClear: true,
        });
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
        $.ajax({  // First get countries json from server
            url: "/api/countries",
            method: 'post',
            dataType: "json",
        }).then(function (data) {  // Transforming data into the required select2 format
            // Rename data properties to match Select2 format
            // https://stackoverflow.com/a/38022077/7594844
            let items = data.items.map(item => ({
                id: item.id,
                text: item.name,
            }));
            // Append an empty option at the beginning
            // https://stackoverflow.com/a/8073687/7594844
            items.unshift({id: "", text: ""});
            return items;
        }).done(function (data) {
            select2Factory(address_country, {  // Create select2 control
                placeholder: "Select a country",
                templateResult: function (country) {
                    if (!country.id) {
                        return country.text;
                    }
                    return $(
                        `<span class="fi fi-${country.id.toLowerCase()}"></span>` +
                        '<span class="flag-text" style="margin-left: 10px;">' + country.text + "</span>"
                    );
                },
                data: data,
                allowClear: true
            })
        });
        // Child
        select2Factory(region, {placeholder: "Region/State/Province", tags: true, multiple: false, allowClear: true});
        region.depdrop({
            url: '/api/states',
            depends: ['address-country'],
        });
        // endregion

        $("[data-role='tooltip']").webuiPopover();

        // Set focus to search text field when we click on select 2 drop down
        // https://stackoverflow.com/a/71677782/7594844
        $(document).on('select2:open', '.select2', function (e) {
            setTimeout(() => {
                const $elem = $(this).attr("id");
                document.querySelector(`[aria-controls="select2-${$elem}-results"]`).focus();
            });
        });
    });
})(window, document, jQuery);

/**
 * This function initialize a select2 component.
 * @param {*} selector - jQuery selector.
 * @param {Object} options - The select2 option object.
 */
function select2Factory(selector, options) {
    // The following code is used to disable x-scrollbar when click in select2 input and
    // take 100% width in responsive also.
    selector.wrap('<div class="position-relative"></div>');
    let common = {
        dropdownAutoWidth: true,
        width: "100%",
        dropdownParent: selector.parent(),
    }

    // Combine common options with control-specific options and create the select2 object.
    let finalOptions = {...common, ...options};
    selector.select2(finalOptions);
}
