@extends('admin.layout.main')

@section('main-container')
<style>
    table#category-table {
        margin-left: 100px;
    }
    div#category-table_info {
        display: none;
    }
</style>
<div class="container">
    <table id="category-table" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                {{-- <th>Pawan media and nagarpalika tax</th> --}}
                <th>Pawanmedia </th>
                <th>Nagarpalika Tax</th>
                <th>Total Park </th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($show_subcategory as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->price }}</td>
                {{-- <td>{{ $category->tax }}</td> --}}
                <td>{{ $category->pawanmedia }}</td>
                <td>{{ $category->taxngarpalika }}</td>
                <td>{{ $category->park }}</td>


                @php
                   $id =  $category->cat_id;
                   $query = DB::table('categories')->where('id' , $id)->get();
                @endphp
                <td>
                @if(count($query) > 0)
                {{ $query[0]->name }}
                @else
        N/A
    @endif
                <td>
                    <a href="{{ route('update_subcategory', ['id' => $category->id]) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('delete_subcategory', ['id' => $category->id]) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this subcategory?')"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@push('js')
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
@endpush
