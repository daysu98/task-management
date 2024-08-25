@extends('layouts.supper')

@section('content')
    <div class="container">
        <h1>Daftar Anak Magang</h1>
        <div class="table-responsive">
            <table class="table table-bordered" id="interns-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($interns as $intern)
                        <tr>
                            <td>{{ $intern->id }}</td>
                            <td>{{ $intern->name }}</td>
                            <td>{{ $intern->email }}</td>
                            <td>{{ $intern->department ? $intern->department->name : 'N/A' }}</td>
                            <td>
                                <a href="{{ route('supervisor.show-intern', ['internId' => $intern->id]) }}"
                                    class="btn btn-sm btn-info">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#interns-table').DataTable();
        });
    </script>
@endsection
