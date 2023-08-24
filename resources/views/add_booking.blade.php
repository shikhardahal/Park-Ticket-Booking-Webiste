@extends('admin.layout.main')

@section('main-container')
<div class="container">
  <form id="category-form" method="POST" action="{{ route('add_booking') }}" style="margin-left: 120px; margin-top: 20px;">
    @csrf
    <div class="alert alert-primary" role="alert">
    Booking Form
    </div>
    <div class="row">

    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
    </div>
    <div class="form-group">
      <label for="message">Phone:</label>
      <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter phone">
    </div>
    <div class="form-group">
      <label for="message">Visitors:</label>
      <input type="number" class="form-control" id="visitor" name="visitor" placeholder="Enter quantity">
    </div>
    <div class="form-group">
      <label for="categorySelect">Select Category:</label>
      <select class="form-control" name="cat_id" id="categorySelect">
        <option value="">Select Category</option>
        <?php
        $categories = DB::table('categories')->get();
        ?>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="subcategorySelect">Select Subcategory:</label>
      <select class="form-control" name="sub_id" id="subcategorySelect">
        <option value="">Select Subcategory</option>
      </select>
    </div>
    <div class="form-group">
      <label for="paymentMethod">Payment Method:</label>
      <select class="form-control" name="payment_method" id="paymentMethod">
        <option value="cash">Cash</option>
        <option value="online">Online</option>
      </select>
    </div>
</div>

    <div class="form-group">
      <label for="message">Price:</label>
      <input type="text" data-decimal-places="2" required class="form-control" id="price" name="price"
        placeholder="Enter price" readonly>
    </div>
    {{-- <div class="form-group">
      <label for="message">Tax:</label>
      <input type="text" data-decimal-places="2" required class="form-control" id="tax" name="tax"
        placeholder="Enter tax">
    </div> --}}
    <div class="form-group">
      <label for="message">Pawanmedia Revenue:</label>
      <input type="text" data-decimal-places="2" class="form-control" id="pawanmedia" name="pawanmedia"
        placeholder="Enter pawan media Revenue" readonly>
    </div>
    <div class="form-group">
      <label for="message">Nagarpalika Tax:</label>
      <input type="text" data-decimal-places="2" class="form-control" id="taxngarpalika"
        name="taxngarpalika" placeholder="Enter nagarpalika tax" readonly>
    </div>
    <div class="form-group">
      <label for="message">Total Park Revenue:</label>
      <input type="text" data-decimal-places="2" class="form-control" id="park" name="park"
        placeholder="Enter Total park revenue" readonly>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
  $(document).ready(function () {
    // Function to format the input with the specified decimal places
    function formatInputWithDecimalPlaces(inputElement) {
      var decimalPlaces = parseInt(inputElement.dataset.decimalPlaces);
      var regexPattern = "[0-9]*[.,]?[0-9]{0," + decimalPlaces + "}";
      inputElement.setAttribute("inputmode", "decimal");
      inputElement.setAttribute("pattern", regexPattern);
    }

    // Find all input fields with the 'data-decimal-places' attribute and format them
    var inputFields = document.querySelectorAll('input[data-decimal-places]');
    for (var i = 0; i < inputFields.length; i++) {
      formatInputWithDecimalPlaces(inputFields[i]);
    }

    $('#categorySelect').change(function () {
      var categoryId = $(this).val();
      if (categoryId) {
        // Perform AJAX request to get subcategories
        $.ajax({
          url: '{{ route('getSubcategories') }}',
          type: 'POST',
          data: {
            _token: '{{ csrf_token() }}',
            category_id: categoryId
          },
          dataType: 'json',
          success: function (data) {
            $('#subcategorySelect').empty();
            $('#subcategorySelect').append('<option value="">Select Subcategory</option>');
            if (data.length > 0) {
              $.each(data, function (key, value) {
                $('#subcategorySelect').append('<option value="' + value.name + '/' + value.id + '">' + value.name +
                  '</option>');
              });
            }
          }
        });
      } else {
        $('#subcategorySelect').empty();
        $('#subcategorySelect').append('<option value="">Select Subcategory</option>');
      }
    });

    $('#subcategorySelect').change(function () {
      var subcategoryId = $(this).val();
      var visitor = $('#visitor').val();

      if (subcategoryId) {
        // Perform AJAX request to get additional information based on subcategory ID
        $.ajax({
          url: '{{ route('getAdditionalInfo') }}', // Replace with your route for getting additional information
          type: 'POST',
          data: {
            _token: '{{ csrf_token() }}',
            subcategory_id: subcategoryId
          },
          dataType: 'json',
          success: function (data) {
            console.log(data);
            var price = data[0].price * visitor;
            var pawanmedia = data[0].pawanmedia * visitor;
            var taxngarpalika = data[0].taxngarpalika * visitor;
            var park = data[0].park * visitor;

            // Update the input fields with the formatted values
            $('#price').val(price.toFixed(2));
            $('#pawanmedia').val(pawanmedia.toFixed(2));
            $('#taxngarpalika').val(taxngarpalika.toFixed(2));
            $('#park').val(park.toFixed(2));
          }
        });
      }
    });

    // Prevent the default form submission
    // $('#category-form').submit(function (e) {
    //   e.preventDefault();

    //   // Get the form data
    //   var formData = new FormData(this);

    //   // Add the CSRF token to the form data
    //   formData.append('_token', '{{ csrf_token() }}');

    //   // Send the AJAX request
    //   $.ajax({
    //     url: '{{ route('add_booking') }}', // Replace with your controller route
    //     method: 'POST',
    //     data: formData,
    //     contentType: false,
    //     processData: false,
    //     success: function (response) {
    //       // Handle the successful response
    //       console.log(response);
    //       window.location.href = '{{ route('show_booking') }}';
    //     },
    //     error: function (xhr) {
    //       // Handle the error response
    //       console.log(xhr.responseText);
    //     }
    //   });
    // });
  });
</script>
@endsection
