@extends("admin_dashboard.layouts.app")
		
@section("style")
	<link href="{{ asset('admin_dashboard_assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection

@section("wrapper")
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Liên hệ</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Tất cả liên hệ</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        
        <div class="card">
            <div class="card-body">
            <div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
                                        <th>Mã liên hệ</th>
										<th>Họ và tên</th>
										<th>Email</th>
										<th>Tiêu đề</th>
										<th>Nội dung</th>
										<th>Chức năng</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach($contacts as $contact)
									<tr>
                                        <td>
                                            <div class="d-flex align-items-center">

                                                <div class="ms-2">
                                                    <h6 class="mb-0 font-14">#P-{{ $contact->id }}</h6>
                                                </div>
                                            </div>
                                        </td>
										<td>{{ $contact->first_name }} {{ $contact->last_name }}</td>
										<td>{{ $contact->email }}</td>
										<td>{{ $contact->subject }}</td>
										<td>{{ $contact->message }}</td>
                                        <td>
                                        <div class="d-flex order-actions">
                                            <a href="#" onclick="event.preventDefault(); confirmDelete({{ $contact->id }});" class="ms-3"><i class='bx bxs-trash'></i></a>

                                            <form method="post" action="{{ route('admin.contacts.destroy',  $contact) }}" id="delete_form_{{  $contact->id }}" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        
                                        </div>
                                        </td>
									</tr>
                                   
                                    @endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
            </div>
        </div>


    </div>
</div>
<!--end page wrapper -->
@endsection


@section("script")
    <script src="{{ asset('admin_dashboard_assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('admin_dashboard_assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'excel', 'pdf']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );

            setTimeout(()=>{
				$(".general-message").fadeOut();
            },5000);

		} );
		function confirmDelete(id) {
            Swal.fire({
                title: 'Bạn có chắc chắn?',
                text: "Hành động này không thể hoàn tác!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Xóa',
                cancelButtonText: 'Hủy'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.querySelector('#delete_form_' + id).submit();
                }
            });
        }
	</script>

@endsection
