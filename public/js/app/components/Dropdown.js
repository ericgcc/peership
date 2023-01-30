class Dropdown{
  /**
   * Creates an instance of Dropdown, i.e. initialize a select2 component.
   * @param {*} selector - jQuery selector.
   * @param {Object} options - The select2 option object.
   */
  constructor(selector, options){
    this.selector = selector;
    this.options = options;

    this.selector.wrap('<div class="position-relative"></div>');
    this.common_options = {
      dropdownAutoWidth: true,
      width: "100%",
      dropdownParent: selector.parent(),
    }
  }

  /**
   * Transforms data into the required select2 format.
   * @param data - json input data
   * @returns {*} - select2 formatted data
   */
  format(data){
    let items = data.items.map(item => ({  // Rename data properties to match select2 format
      id: item.id,
      text: item.name,
    }));
    items.unshift({id: "", text: ""});  // Append an empty option at the beginning
    return items;
  }

  add(){
    let finalOptions = {...this.common_options, ...this.options};
    this.selector.select2(finalOptions);
  }
}

export {Dropdown};
