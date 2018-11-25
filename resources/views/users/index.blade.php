@extends('layouts.app')

@section('content')
<div class="container">
    <table id="dataUsers" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>Created</th>
                <th>Updated</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

@push('scripts')
<script>
$(function() {
    $('#dataUsers').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('data.users') }}',
        columns: [
            {data: 'DT_RowIndex'},
            {data: 'name'},
            {data: 'username'},
            {data: 'email'},
            {data: 'created_at'},
            {data: 'updated_at'},
            {data: 'action'}
        ]
    });
});
</script>
@endpush