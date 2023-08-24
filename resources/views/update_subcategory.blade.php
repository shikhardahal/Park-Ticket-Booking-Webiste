@extends('admin.layout.main')

@section('main-container')
<div class="container">
    <form id="subcategory-form" style="margin-left:256px; margin-top:80px;" method="POST" action="{{ route('edit_subcategory', ['id' => $id]) }}">
        @csrf <!-- Add the CSRF token -->

        <div class="alert alert-primary" role="alert">
            SubCategory Form
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" value="{{ old('name', $subcategory->name) }}">
            <!-- Use old('name', $subcategory->name) to show the old value if available, otherwise use the current value -->
        </div>
        <div class="form-group">
            <label for="message">Price:</label>
            <input type="number" step="0.01" required class="form-control" id="price" name="price" placeholder="Enter price" value="{{ old('price', $subcategory->price) }}">
            <!-- Use old('price', $subcategory->price) to show the old value if available, otherwise use the current value -->
        </div>
        {{-- <div class="form-group">
            <label for="message">Nagarpalika Tax and Pawan Media:</label>
            <input type="number" step="0.01" required class="form-control" id="tax" name="tax" placeholder="Enter Total Tax" value="{{ old('tax', $subcategory->tax) }}">
            <!-- Use old('tax', $subcategory->tax) to show the old value if available, otherwise use the current value -->
        </div> --}}
        <div class="form-group">
            <label for="message">Pawanmedia:</label>
            <input type="number" step="0.01" required class="form-control" id="pawanmedia" name="pawanmedia" placeholder="Enter Total Pawan media revenue" value="{{ old('pawanmedia', $subcategory->pawanmedia) }}">
            <!-- Use old('taxpawanmedia', $subcategory->taxpawanmedia) to show the old value if available, otherwise use the current value -->
        </div>
        <div class="form-group">
            <label for="message">Nagarpalika Tax:</label>
            <input type="number" step="0.01" required class="form-control" id="taxngarpalika" name="taxngarpalika" placeholder="Enter nagarpalika Tax" value="{{ old('taxngarpalika', $subcategory->taxngarpalika) }}">
            <!-- Use old('taxngarpalika', $subcategory->taxngarpalika) to show the old value if available, otherwise use the current value -->
        </div>
        <div class="form-group">
            <label for="message">Park:</label>
            <input type="number" step="0.01" required class="form-control" id="park" name="park" placeholder="Enter Total Park Revenue" value="{{ old('park', $subcategory->park) }}">
            <!-- Use old('taxpark', $subcategory->taxpark) to show the old value if available, otherwise use the current value -->
        </div>
        <div class="form-group">
            <label for="exampleSelect">Select Category:</label>
            @php
                $cat = DB::table('categories')->get();
            @endphp
            <select class="form-control" name="cat_id" id="exampleSelect">
                @foreach($cat as $category)
                    <option value="{{ $category->id }}" {{ old('cat_id', $subcategory->cat_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            <!-- Use old('cat_id', $subcategory->cat_id) to show the old value if available, otherwise use the current value -->
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
        // Prevent the default form submission
        $('#subcategory-form').submit(function(e) {
            e.preventDefault();

            // Get the form data
            var formData = new FormData(this);

            // Add the CSRF token to the form data
            formData.append('_token', '{{ csrf_token() }}');

            // Send the AJAX request
            $.ajax({
                url: $('#subcategory-form').attr('action'), // Use the form action
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    // Handle the successful response
                    console.log(response);
                    window.location.reload();
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
