import {Dropdown} from "./Dropdown.js";

class CountryDropdown extends Dropdown {
  constructor(selector, placeholder = "Select Country") {
    super(selector, {});
    this.placeholder = placeholder;
  }
  template(country) {
    if (!country.id) {
      return country.text;
    }
    return $(
      `<span class="fi fi-${country.id.toLowerCase()}"></span>` +
      `<span class="flag-text" style="margin-left: 10px;">${country.text}</span>`
    );
  }

  add(){
    let dropdown = this;
    $.ajax({  // First get countries json from server
      url: "/api/countries",
      method: "post",
      dataType: "json",
    }).then(function (data) {
      // Transforming data into the required select2 format
      return dropdown.format(data);
    }).done(function (data) {
      dropdown.options = {
        placeholder: dropdown.placeholder,
        templateResult: (country) => {
          return dropdown.template(country)
        },
        data: data,
        allowClear: true,
      }
      let finalOptions = {...dropdown.common_options, ...dropdown.options};
      dropdown.selector.select2(finalOptions);
    });
  }
}

export {CountryDropdown};
