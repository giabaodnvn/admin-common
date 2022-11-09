@extends('admin.layouts.main')
@push('styles')
    <!-- DataTables  & Plugins -->
	<link rel="stylesheet" href="static/css/lib/dataTables/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="static/css/lib/dataTables/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="static/css/lib/dataTables/buttons.bootstrap4.min.css">
	<link rel="stylesheet" href="static/css/lib/dataTables/dataTables.checkboxes.css">
	<!-- Sweetalert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.10/dist/sweetalert2.min.css">
@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Role</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">{{ __('List Role') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-outline card-info">
                     <h3 class="card-title">List Role</h3>
                    <div class="card-tools">
                      <button type="button" class="btn bg-gradient-primary btn-sm create-btn">
                        <i class="fas fa-plus fa-fw"></i> Create
                      </button>
                      <button type="button" class="btn bg-gradient-primary btn-sm reload-btn">
                        <i class="fas fa-sync-alt"></i> Reload
                      </button>
                    </div>
                </div>
                    <div class="card-body">
                    <table class="table table-bordered table-striped text-center" id="tag-table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>NAME</th>
                                <th>DESCRIPTION</th>
                                <th>CREATED AT</th>
                                <th>CREATED BY</th>	    				
                                <th>ACTION</th>
                            </tr>
                        </thead>
                    </table>
                   </div>
              </div>
        </div>
    </section>
@endsection
@push('scripts')
<script type="text/javascript">
	$(function() {
		var dataTable;
		dataTable = $('#tag-table').DataTable({
            language: {
                processing: 'Loading...'
            },
	        processing: true,
	        serverSide: true,
	        ajax: '{{ route("admin.roles.index") }}',
	        columns: [
	        	{data: 'id', name: 'id' },
	            {data: 'name', name: 'name'},
	            {data: 'description', name: 'description', orderable: false, searchable: false},
	            {data: 'created_at', name: 'created_at', searchable: false},
	            {data: 'created_by', name: 'created_by', searchable: false},           
	            {data: 'action', name: 'action', orderable: false, searchable: false},
	        ],
	        columnDefs: [{
	        	targets:   0,
	            orderable: false,
	            checkboxes: {
	            	selectRow: true
	            }
	        },
                { width: "5%", targets: 0 },
	            { width: "25%", targets: 1 },
	            { width: "25%", targets: 2 },
	            { width: "15%", targets: 3 },
	            { width: "15%", targets: 4 },
	            { width: "15%", targets: 5 },
	        ],
	        select: {
	            style: 'multi',
	        },
	        order: [],
	        pageLength: 10,
	        pagingType: 'full_numbers',
			responsive: true,
			autoWidth: false,
			lengthChange: false,
			fnDrawCallback: function(oSettings) {
	        	if (oSettings._iDisplayLength >= oSettings.fnRecordsDisplay()) {
	        		$(oSettings.nTableWrapper).find('.dataTables_paginate').hide();
	        	} else {
	        		$(oSettings.nTableWrapper).find('.dataTables_paginate').show();
	        	}
	        },
		});
		const Toast = Swal.mixin({
		  	toast: true,
		  	position: 'bottom-end',
		  	showConfirmButton: false,
		  	timer: 3000,
		  	timerProgressBar: true,
		  	didOpen: (toast) => {
		    	toast.addEventListener('mouseenter', Swal.stopTimer)
		    	toast.addEventListener('mouseleave', Swal.resumeTimer)
		  	}
		});
		//Show button delete
		$(document).on('click', '.deleteDialog', function() {
			let role_id = $(this).data('id');
			Swal.fire({
			  title: 'Confirm delete',
			  text: "Do you really want to delete this record?",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
			  	if (result.isConfirmed) {
                    $.ajaxSetup({
                        headers: {
                    	    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                	    }
                    });
                    $.ajax({
                    	url: '/admin/roles/' + role_id,
                    	type: 'DELETE',
                    	success: function(data) {
							Toast.fire({
							  icon: 'success',
							  title: data.message
							});
						    dataTable.ajax.reload();
                    	},
                    	error: function() {
 						    Swal.fire(
						      'Error!',
						      'Opps, has occurred error.',
						      'warning'
						    );                   		
                    	}
                    });
			  	}
			})
		});

		//Redirect to create page
		$('.create-btn').click(function() {
			window.location.href = '{{route('admin.roles.create')}}';
		});

		//Reload page
		$('.reload-btn').click(function() {
			dataTable.ajax.reload();
		});
	})
</script>
@endpush
@prepend('scripts')
    <!-- DataTables  & Plugins -->
    <script src="static/js/lib/dataTables/jquery.dataTables.min.js"></script>
    <script src="static/js/lib/dataTables/dataTables.bootstrap4.min.js"></script>
    <script src="static/js/lib/dataTables/dataTables.responsive.min.js"></script>
    <script src="static/js/lib/dataTables/responsive.bootstrap4.min.js"></script>
    <script src="static/js/lib/dataTables/dataTables.select.min.js"></script>
    <script src="static/js/lib/dataTables/dataTables.buttons.min.js"></script>
    <script src="static/js/lib/dataTables/buttons.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.10/dist/sweetalert2.all.min.js"></script>
@endprepend
