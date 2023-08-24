@extends('admin.layout.main')

@section('main-container')
<div class="container">
    <form id="category-form" style="margin-left:256px; margin-top:80px;" method="POST" action="{{ route('edit_category', ['id' => $id]) }}">
        @csrf <!-- Add the CSRF token -->

        <div class="alert alert-primary" role="alert">
            Category Form
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" value="{{ old('name', $category->name) }}">
            <!-- Use old('name', $category->name) to show the old value if available, otherwise use the current value -->
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control" name="image" id="image">
        </div>
        <div class="form-group">
            <label for="message">Description:</label>
            <textarea class="form-control" id="desc" name="desc" rows="3" placeholder="Enter your description">{{ old('desc', $category->description) }}</textarea>
            <!-- Use old('desc', $category->description) to show the old value if available, otherwise use the current value -->
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
                url: $('#category-form').attr('action'), // Use the form action
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    // Handle the successful response
                    console.log(response);
                    window.location.href = '{{ route('show_category') }}';
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
