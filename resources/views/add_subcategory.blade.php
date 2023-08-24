@extends('admin.layout.main')

@section('main-container')

<div class="container">
  <form id="category-form" method="POST" action="{{ route('create_subcategory') }}" style="margin-left:120px; margin-top:20px;">
    @csrf
    <div class="alert alert-primary" role="alert">
      SubCategory Form
    </div>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="name" class="form-control" id="name" required placeholder="Enter your name">
    </div>
    <div class="form-group">
      <label for="message">Price:</label>
      <input type="number" step="0.01" required class="form-control" id="price" name="price" placeholder="Enter price">
    </div>
    {{-- <div class="form-group">
      <label for="message">nagarpalika tax and pawan media:</label>
      <input type="number" step="0.01" required class="form-control" id="tax" name="tax" placeholder="Enter Total Tax">
    </div> --}}
    <div class="form-group">
      <label for="message">Pawanmedia  :</label>
      <input type="number" step="0.01" required class="form-control" id="pawanmedia" name="pawanmedia" placeholder="Enter Total Pawan media revenue">
    </div>
    <div class="form-group">
      <label for="message">Nagarpalika Tax:</label>
      <input type="number" step="0.01" required class="form-control" id="taxngarpalika" name="taxngarpalika" placeholder="Enter nagarpalika Tax">
    </div>
    <div class="form-group">
      <label for="message">Park :</label>
      <input type="number" step="0.01" required class="form-control" id="park" name="park" placeholder="Enter Park Revenue">
    </div>
    <div class="form-group">
      <div class="form-group">
        <label for="exampleSelect">Select Category:</label>
        @php
          $cat = DB::table('categories')->get();
        @endphp
        <select class="form-control" name="cat_id" id="exampleSelect">
          @foreach($cat as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
        url: '{{ route('create_subcategory') }}', // Replace with your controller route
        method: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
          // Handle the successful response
          console.log(response);
          window.location.href = '{{ route('show_subcategory') }}';
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
