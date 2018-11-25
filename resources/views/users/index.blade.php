@extends('layouts.app')

@section('content')
<div class="container">
    <table id="data-users" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Yudi Andela</td>
                <td>yudi_theBlack</td>
                <td>yudhi.andhela@gmail.com</td>
                <td>Sekian Hari</td>
                <td>Sekian Hari</td>
                <td>Ubah | Hapus</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

@push('script')
<script>
$(document).ready( function () {
    $('#data-users').DataTable();
});
</script>
@endpush