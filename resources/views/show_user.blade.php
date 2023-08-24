@extends('admin.layout.main')

@section('main-container')

<style>
    table#category-table {
    margin-left: 140px;
}
div#category-table_info {
    display: none;
}
</style>
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table id="category-table" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    @if ($user->status == 0)
                    <span class="badge badge-warning">Pending Approval</span>
                    @elseif ($user->status == 1)
                    <span class="badge badge-success">Approved</span>
                    @else
                    <span class="badge badge-danger">Blocked</span>
                    @endif
                </td>
                <td>
                    @if ($user->status == 0)
                    <form action="{{ route('user_status') }}" method="POST" style="display: inline;">
                      @csrf
                      <input type="hidden" value="{{ $user->id }}" name="id">
                      <input type="hidden" value="1" name="status"> <!-- Set the status to 1 for approving the user -->
                      <button type="submit" class="btn btn-success">Approve</button>
                    </form>
                  @else
                    <form action="{{ route('user_status') }}" method="POST" style="display: inline;">
                      @csrf
                      <input type="hidden" value="{{ $user->id }}" name="id">
                      <input type="hidden" value="0" name="status"> <!-- Set the status to 0 for blocking the user -->
                      <button type="submit" class="btn btn-danger">Block</button>
                    </form>
                  @endif


                    <form action="{{ route('delete_user', ['id' => $user->id]) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@push('js')
<script>
    $(document).ready(function() {
        // Initialize DataTables
        $('#category-table').DataTable({
            dom: 'Bfrtip',
            buttons: ['pdf']
        });
    });
</script>
@endsection
@endpush

