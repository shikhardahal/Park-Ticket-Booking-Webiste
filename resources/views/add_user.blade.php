@extends('admin.layout.main')

@section('main-container')
<div class="container">
  <form id="category-form" style="margin-left:256px; margin-top:80px;">
    <div class="alert alert-primary" role="alert">
      User Form
    </div>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
    </div>
    <div class="form-group">
      <label for="image">email:</label>
      <input type="email" class="form-control" name="email" id="email">
    </div>
    <div class="form-group">
      <label for="message">password:</label>
      <input type="password" class="form-control" name="pass" id="pass">
    </div>
    <div class="form-group">
        <label for="message">Role:</label>
        <select class="custom-select form-control" name="role" id="role">
            <option selected>Select Role</option>
            <option value="user">user</option>
            <option value="staff">staff</option>
            <option value="admin">admin</option>
          </select>
                </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
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
        url: '{{ route('create_user') }}', // Replace with your controller route
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
</script>
@endsection
