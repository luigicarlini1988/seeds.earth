$(document).ready(function(){



let dropdown = $('#currency-dropdown');

dropdown.empty();

dropdown.append('<option selected="true" disabled>Choose Currency</option>');
dropdown.prop('selectedIndex', 0);

const url = '/js/widgets/currency.json';

// Populate dropdown with list of provinces
$.getJSON(url, function (data) {
  $.each(data, function (key, entry) {
    dropdown.append($('<option></option>').attr('value', entry.code).text(entry.name + " - " + entry.symbol));
  })
});


/*
$("#currency-dropdown").change(function(){
   $("#currency-dropdown option:selected").text($("#currency-dropdown").val());
});
*/


});
