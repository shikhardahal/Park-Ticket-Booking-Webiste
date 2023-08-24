@extends('admin.layout.main')

@section('main-container')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-*********" crossorigin="anonymous" />

<style>
    table#category-table {
    margin-left: 200px;
}

div#category-table_info {
    display: none;
}
</style>
<div class="container">
  <table id="category-table" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($cat as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->description }}</td>
            <td>
                <a href="{{ route('update_category', ['id' => $category->id]) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                <a href="{{ route('delete_category', ['id' => $category->id]) }}" class="btn btn-danger" onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this category?')) document.getElementById('delete-category-form-{{ $category->id }}').submit();"><i class="fas fa-trash-alt"></i></a>
                <form id="delete-category-form-{{ $category->id }}" action="{{ route('delete_category', ['id' => $category->id]) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.bootstrap4.min.css">

<!-- DataTables JavaScript -->
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.pdf.min.js"></script>

<script>
  $(document).ready(function() {
    // Initialize DataTables
    $('#category-table').DataTable({
      dom: 'Bfrtip',
      buttons: [
        'pdf'
      ]
    });
  });
</script>
@endsection
