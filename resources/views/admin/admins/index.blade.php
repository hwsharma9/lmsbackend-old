@extends('layouts.admin')

@push('styles')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}" />
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}" />
<link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}" />
@endpush
@section('page_title')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">{{ __('Admin Users List') }}</li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">View</a></li>
                </ol>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <div class="float-sm-right">
                    <a href="{{route('manage.admins.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title m-0">
                        {{ __('ADMIN USERS LIST') }}
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table table-bordered table-hover" id="dataTable">
                        <thead>
                            <tr>
                                <th>S. No.</th>
                                <th>First Name</th>
                                <th>Designation</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>User Privilege</th>
                                <th>Last Modified Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script> --}}
<script type="text/javascript">
    $(function () {
      var table = $('#dataTable').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('manage.admins.index') }}",
          columns: [
                {data: 'id', name: 'id'},
                {data: function(row) {
                    return row.first_name + ' ' + row.last_name;
                }, name: 'name', searchable: false},
                {data: 'designation', name: 'designation'},
                {data: 'email', name: 'email'},
                {data: 'mobile', name: 'mobile'},
                {data: function(row) {
                    let role_names = row['roles'].map(role => role.name).join(', ');
                    return role_names;
                }, name: 'role', searchable: false},
                {data: 'updated_at', name: 'updated_at'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            'createdRow': function( row, data, dataIndex ) {
                if (data['deleted_at'] != null) {
                    $(row).addClass( 'bg-danger' ).attr('title', 'Model has been deleted!');
                }
            }
        });
    });
    // dom: 'Bfrtip',
    // buttons: [
    //     'copyHtml5',
    //     'excelHtml5',
    //     'csvHtml5',
    //     'pdfHtml5'
    // ]
</script>
@endpush