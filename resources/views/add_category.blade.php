@extends('admin.layout.main')

@section('main-container')
<div class="container">
  <form id="category-form" method="POST" action="{{ route('create_category') }}" style="margin-left:256px; margin-top:80px;">
    @csrf
    <div class="alert alert-primary" role="alert">
      Category Form
    </div>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" name="image" id="image">
    </div>
    <div class="form-group">
      <label for="message">Description:</label>
      <textarea class="form-control" id="desc" name="desc" rows="3" placeholder="Enter your description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
{{-- <script>
  $(document).ready(function() {
    // Prevent the default form submission
    $('#category-form').submit(function(e) {
      e.preventDefault();

      // Get the form data
      var formData = new FormData(this);

      // Add the CSRF token to the form data
      formData.append('_token', '{{ csrf_token() }}');

      // Send the AJAX request
      $.ajax({
        url: '{{ route('create_category') }}', // Replace with your controller route
        method: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
          // Handle the successful response
          window.location.reload();

          console.log(response);
        },
        error: function(xhr) {
          // Handle the error response
          console.log(xhr.responseText);
        }
      });
    });
  });
</script> --}}
@endsection
