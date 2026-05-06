"use strict";

$('#country_id').on('change', function () {
  var up = $('#upload_id').empty();
  var up1 = $('#city_id').empty();
  var cat_id = $(this).val();

  if (cat_id) {
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      type: "GET",
      url: baseUrl + '/choose_state',
      data: {
        catId: cat_id
      },
      success: function (data) {
        up.append('<option value="">Please Choose</option>');
        up1.append('<option value="">Please Choose</option>');
        $.each(data, function (id, title) {
          up.append($('<option>', {
            value: id,
            text: title
          }));
        });
        
        // Trigger Select2 to refresh the state and city dropdowns
        $('#upload_id').trigger('change.select2');
        $('#city_id').trigger('change.select2');
      },
      error: function (XMLHttpRequest, textStatus, errorThrown) {
        console.log(XMLHttpRequest);
      }
    });
  } else {
    // When no country is selected, clear state and city dropdowns
    up.append('<option value="">Please Choose</option>');
    up1.append('<option value="">Please Choose</option>');
    $('#upload_id').trigger('change.select2');
    $('#city_id').trigger('change.select2');
  }
});

$('#upload_id').on('change', function () {
  var up = $('#city_id').empty();
  var cat_id = $(this).val();
  
  if (cat_id) {
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      type: "GET",
      url: baseUrl + '/choose_city',
      data: {
        catId: cat_id
      },
      success: function (data) {
        up.append('<option value="">Please Choose</option>');
        $.each(data, function (id, title) {
          up.append($('<option>', {
            value: id,
            text: title
          }));
        });
      },
      error: function (XMLHttpRequest, textStatus, errorThrown) {
        console.log(XMLHttpRequest);
      }
    });
  } else {
    // When no state is selected, clear city dropdown
    up.append('<option value="">Please Choose</option>');
  }
});