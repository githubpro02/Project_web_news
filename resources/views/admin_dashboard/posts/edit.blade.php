@extends("admin_dashboard.layouts.app")
@section("style")
	
	<link href="{{ asset('admin_dashboard_assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin_dashboard_assets/plugins/select2/css/select2-bootstrap4.css') }}" rel="stylesheet" />

	<link href="{{ asset('admin_dashboard_assets/plugins/input-tags/css/tagsinput.css') }}" rel="stylesheet" />
	<style>
		.imageuploadify{
			margin: 0;
			max-width: 100%;
		}
	</style>

<script src="https://cdn.tiny.cloud/1/fkndzshz8nietuhr2an4l2p929e67nnpk9fdz0e0mqbo8nub/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
		
@section("wrapper")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Bài viết</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Bài viết</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
			  
				<div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Sửa bài viết: {{ $post->title}}</h5>
					  <hr/>
					<form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data" >
						@csrf
                        @method('PATCH')
                       <div class="form-body mt-4">
							<div class="row">
								<div class="col-lg-12">
									<div class="border border-3 p-4 rounded">
										<div class="mb-3">
											<label for="inputProductTitle" class="form-label">Tiêu đề bài viết</label>
											<input type="text" value='{{ old("title", $post->title) }}' name="title" required  class="inputPostTitle form-control" id="inputProductTitle" placeholder="Nhập tiêu đề bài viết">
										
											@error('title')
												<p class="text-danger">{{ $message }}</p>
											@enderror
										</div>

										<div class="mb-3">
											<label for="inputProductTitle" class="form-label">Slug - liên kết</label>
											<input type="text" value='{{ old("slug", $post->slug) }}' name="slug" required  class="slugPost form-control" id="inputProductTitle" placeholder="Nhập slug">
										
											@error('slug')
												<p class="text-danger">{{ $message }}</p>
											@enderror
										</div>

										<div class="mb-3">
											<label for="inputProductDescription" class="form-label">Mô tả</label>
											<textarea required name="excerpt" class="form-control" id="inputProductDescription" rows="3">{{ old("excerpt", $post->excerpt) }}</textarea>

													
											@error('excerpt')
												<p class="text-danger">{{ $message }}</p>
											@enderror
										
										</div>

										<div class="mb-3">
											<label for="inputProductTitle" class="form-label">Danh mục bài viết</label>
												<div class="card">
													<div class="card-body">
														<div class="p-3 rounded">
															<div class="mb-3">
																<select name="category_id" required class="single-select">
																	@foreach( $categories as $key => $category )
																	<option {{ $post->category_id === $key ? 'selected' : '' }} value="{{ $key }}">{{ $category }}</option>
																	@endforeach
																</select>

																@error('category_id')
																	<p class="text-danger">{{ $message }}</p>
																@enderror

															</div>
														</div>
													</div>
												</div>
										</div>

										<div class="mb-3">
                                            <label class="form-label">Từ khóa</label>
                                            <input type="text" class="form-control" value="{{ $tags }}" name="tags" data-role="tagsinput">
                                        </div>

										<!-- <input id="image-uploadify" name="thumbnail" type="file" id="file" accept="image/*" multiple> -->								
										<div class="mb-3">
                                            <div class="row">
												<div class="col-md-5">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <label for="inputProductDescription" class="form-label">Hình ảnh hoặc video bài viết</label>
															<input id="thumbnail" name="thumbnail" type="file" id="file" value="">
                                                        
                                                            @error('thumbnail')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-7 text-center">
													@if(isset($post->image) && in_array(strtolower($post->image->extension), ['mp4', 'avi', 'mov', 'webm']))
														<!-- Nếu là video, hiển thị video -->
														<video controls style="width: 100%; border-radius: 16px; object-fit: cover;">
															<source src="{{ asset('storage/' . $post->image->path) }}" type="video/{{ $post->image->extension }}">
														</video>
													@else
														<!-- Nếu không phải video, hiển thị hình ảnh -->
														<img style="width: 100%; border-radius: 16px;" src="{{ asset('/storage/' . ($post->image ? $post->image->path : 'placeholders/placeholder-image.jpg')) }}" class="img-responsive" alt="All thumbnail">
													@endif
												</div>
                                            </div>
										
										</div>
										
										<div class="mb-3">
											<label for="inputProductDescription" class="form-label">Nội dung bài viết</label>
											<textarea name="body" id="post_content" class="form-control" id="inputProductDescription" rows="3">{{ old("body", preg_replace('/src="\.\.\/(\.\.\/)+/', 'src="' . asset('/'), $post->body)) }}</textarea>
										
											@error('body')
												<p class="text-danger">{{ $message }}</p>
											@enderror
										</div>

										@php
											$CheckPermissions = auth()->user()->role->permissions->pluck('name');
										@endphp
										
										@if($CheckPermissions->contains('admin.posts.approve'))
											<div class="mb-3">
												<div class="form-check form-switch">
													<input name="approved" {{  $post->approved ? 'checked' : '' }} class="form-check-input" type="checkbox" id="flexSwitchChecked">
													<label class="form-check-label {{  $post->approved ? 'text-success' : 'text-warning' }}" for="flexSwitchChecked">
														{{ $post->approved ? 'Đã phê duyệt' : 'Chưa phê duyệt' }}
													</label>
												</div>
											</div>
										@endif

										<button class="btn btn-primary" type="submit">Sửa bài viết</button>

										<a class="btn btn-danger" onclick="event.preventDefault(); confirmDelete({{ $post->id }});" 
										href="#">Xóa bài viết</a>

									</div>
								</div>
							</div>
						</div>

					</form>

					<form method="post" action="{{ route('admin.posts.destroy', $post) }}" id="delete_form_{{ $post->id }}" style="display: none;">
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
	<!-- <script src="{{ asset('admin_dashboard_assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script> -->
	<script src="{{ asset('admin_dashboard_assets/plugins/select2/js/select2.min.js') }}"></script>
	<script src="{{ asset('admin_dashboard_assets/plugins/input-tags/js/tagsinput.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		$(document).ready(function () {
			// $('#image-uploadify').imageuploadify();
		
			$('.single-select').select2({
				theme: 'bootstrap4',
				width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
				placeholder: $(this).data('placeholder'),
				allowClear: Boolean($(this).data('allow-clear')),
			});
			
			$('.multiple-select').select2({
				theme: 'bootstrap4',
				width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
				placeholder: $(this).data('placeholder'),
				allowClear: Boolean($(this).data('allow-clear')),
			});
			
			tinymce.init({
				selector: '#post_content',
				plugins: 'advlist autolink lists link image media charmap preview anchor pagebreak',
				toolbar_mode: 'floating',
				height: '500',
				toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media code | rtl ltr',
				image_title: true,
				automatic_uploads: true,

				// Image upload handler
				images_upload_handler: (blobInfo, progress) => new Promise((resolve, reject) => {
					let formData = new FormData();
					let _token = $("input[name='_token']").val();
					let xhr = new XMLHttpRequest();
					xhr.open('POST', "{{ route('admin.upload_tinymce_image') }}");

					xhr.onload = () => {
						if (xhr.status !== 200) {
							reject("HTTP Error: " + xhr.status);
							return;
						}
						let json = JSON.parse(xhr.responseText);
						if (!json || typeof json.location !== 'string') {
							reject("Invalid JSON: " + xhr.responseText);
							return;
						}
						resolve(json.location);
					};

					formData.append('_token', _token);
					formData.append('file', blobInfo.blob(), blobInfo.filename());
					xhr.send(formData);
				}),

				// Video upload handler (same as images)
				file_picker_callback: (callback, value, meta) => {
					if (meta.filetype === 'media') {
						let input = document.createElement('input');
						input.setAttribute('type', 'file');
						input.setAttribute('accept', 'video/*');

						input.onchange = function () {
							let file = this.files[0];
							let formData = new FormData();
							formData.append('_token', $("input[name='_token']").val());
							formData.append('file', file);

							$.ajax({
								url: "{{ route('admin.upload_tinymce_image') }}", // same endpoint for video
								type: 'POST',
								data: formData,
								processData: false,
								contentType: false,
								success: function (response) {
									callback(response.location, { title: file.name });
								},
								error: function (response) {
									alert('Upload failed!');
								}
							});
						};
						input.click();
					}
				}
			});

			

			setTimeout(() => {
				$(".general-message").fadeOut();
			}, 5000);
		});
		</script>
		
		<script>
		$(document).on('change', '.inputPostTitle', (e) => {
			e.preventDefault();
			
			let $this = e.target;
			let csrf_token = $($this).parents("form").find("input[name='_token']").val();
			let titlePost =  $($this).parents("form").find("input[name='title']").val();
			
			let formData = new FormData();
			formData.append('_token', csrf_token);
			formData.append('title', titlePost);
			
			$.ajax({
				url: "{{ route('admin.posts.to_slug') }}",
				data: formData,
				type: 'POST',
				dataType: 'JSON',
				processData: false,
				contentType: false,
				success: function (data) {
					if (data.success) {
						$('.slugPost').val(data.message);
					} else {
						alert("Bị lỗi khi nhập title!");
					}
				}
			});
		});
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


