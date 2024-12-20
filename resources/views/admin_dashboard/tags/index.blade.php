@extends("admin_dashboard.layouts.app")
		
@section("wrapper")
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Từ khóa</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Tất cả từ khóa</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        
        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <div class="position-relative">
                        <form method="GET" action="{{ route('admin.tags.index') }}" class="position-relative">
                            <input type="text" name="search" class="form-control ps-5 radius-30" placeholder="Tìm kiếm từ khóa" value="{{ request()->query('search') }}">
                            <button type="submit" class="position-absolute top-50 product-show translate-middle-y" style="border: none; background: none;">
                                <i class="bx bx-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Mã từ khóa</th>
                                <th>Tên từ khóa</th>
                                <th>Xem chi tiết</th>
                                <th>Ngày đăng</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $tag)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">

                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14">#P-{{ $tag->id }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $tag->name }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.tags.show', $tag) }}">Chi tiết bài viết</a>
                                </td>
                                <td>{{ $tag->created_at->format('d/m/Y') }}</td>
                   
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="#" onclick="event.preventDefault(); confirmDelete({{ $tag->id }});" class="ms-3"><i class='bx bxs-trash'></i></a>

                                        <form method="post" action="{{ route('admin.tags.destroy', $tag) }}" id="delete_form_{{ $tag->id }}" style="display: none;">
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

                <div class="mt-4">{{ $tags->appends(request()->input())->links() }}</div>

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
