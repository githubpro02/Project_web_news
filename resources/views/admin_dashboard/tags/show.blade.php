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
                        <li class="breadcrumb-item active" aria-current="page">Thông tin bài viết của từ khóa: {{ $tag->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        
        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <div class="position-relative">
                        <form method="GET" action="{{ route('admin.tags.show', $tag) }}" class="position-relative">
                            <input type="text" name="search" class="form-control ps-5 radius-30" placeholder="Tìm kiếm bài viết" value="{{ request()->query('search') }}">
                            <button type="submit" class="position-absolute top-50 product-show translate-middle-y" style="border: none; background: none;">
                                <i class="bx bx-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="ms-auto"><a href="{{ route('admin.posts.create') }}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Thêm bài viết mới</a></div>
                </div>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Mã bài viết</th>
                                <th>Tên bài viết</th>
                                <th>Mô tả</th>
                                <th>Danh mục</th>
                                <th>Ngày tạo</th>
                                <th>Trạng thái</th>
                                <th>Lượt xem</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14">#P-{{ $post->id }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $post->title }}</td>
                               
                                
                                <td>{{ $post->excerpt }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>{{ $post->created_at->format('d/m/Y') }}</td>
                                <td>
                                    <div class="badge rounded-pill @if($post->approved === 1)  {{'text-success bg-light-success' }} @else {{'text-danger bg-light-danger' }} @endif p-2 text-uppercase px-3">
                                        <i class='bx bxs-circle me-1'></i>{{ $post->approved  === 1 ? 'Đã phê duyệt' : 'Chưa phê duyệt'  }}
                                    </div>
                                </td>
                                <td>{{ $post->views }}</td>
                               
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="{{ route('admin.posts.edit', $post)}}" class=""><i class='bx bxs-edit'></i></a>
                                        <a href="#" onclick="event.preventDefault(); confirmDelete({{ $post->id }});" class="ms-3"><i class='bx bxs-trash'></i></a>

                                        <form method="post" action="{{ route('admin.posts.destroy', $post) }}" id="delete_form_{{ $post->id }}" style="display: none;">
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
                
                <div class="mt-4">{{ $posts->appends(request()->input())->links() }}</div>
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
	</script>

@endsection

