@extends("admin_dashboard.layouts.app")

@section("wrapper")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Danh mục bài viết</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Sửa danh mục</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
			  
				<div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Sửa danh mục : {{ $category->name }}</h5>
					  <hr/>
					<form action="{{ route('admin.categories.update', $category) }}" method="POST">
						@csrf
						@method('PATCH')
                       <div class="form-body mt-4">
							<div class="row">
								<div class="col-lg-12">
									<div class="border border-3 p-4 rounded">
										<div class="mb-3">
											<label for="inputProductTitle" class="form-label">Tên danh mục</label>
											<input type="text" value=' {{ old("name", $category->name) }}' name="name" required  class="form-control" id="inputProductTitle" placeholder="Nhập tiêu đề bài viết">
										
											@error('name')
												<p class="text-danger">{{ $message }}</p>
											@enderror
										</div>

										<div class="mb-3">
											<label for="inputProductTitle" class="form-label">Slug - danh mục</label>
											<input type="text" value=' {{ old("slug", $category->slug) }}' name="slug" required  class="form-control" id="inputProductTitle" placeholder="Nhập slug">
										
											@error('slug')
												<p class="text-danger">{{ $message }}</p>
											@enderror
										</div>

										<button class="btn btn-primary" type="submit">Sửa danh mục</button>

										<a class="btn btn-danger" onclick="event.preventDefault(); confirmDelete({{ $category->id }});" 
										href="#">Xóa danh mục</a>

									</div>
								</div>
							</div>
						</div>

					</form>

					<form method="post" action="{{ route('admin.categories.destroy', $category) }}" id="delete_form_{{ $category->id }}" style="display: none;">
						@csrf
						@method('DELETE')
					</form>

				  </div>
			  </div>


			</div>
		</div>
		<!--end page wrapper -->
@endsection
	
@section("script")
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
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
		$(document).ready(function () {

			setTimeout(()=>{
					$(".general-message").fadeOut();
			},5000);

		});


	</script>

@endsection