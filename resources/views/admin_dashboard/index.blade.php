@extends("admin_dashboard.layouts.app")
@section("style")
    <link href="{{ asset('admin_dashboard_assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
@endsection

@section("wrapper")
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-3 border-info">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Tổng bài viết</p>
                                    <h4 class="my-1 text-info">{{ $countPost }}</h4>
                                    <!-- <p class="mb-0 font-13">+2.5% from last week</p> -->
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class='bx bx-message-square-edit'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-3 border-danger">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Tổng danh mục</p>
                                    <h4 class="my-1 text-danger">{{ $countCategories }}</h4>
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class='bx bx bx-menu'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-3 border-success">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Tổng người quản trị</p>
                                    <h4 class="my-1 text-success">{{ $countAdmin }}</h4>
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class='bx bx-user' ></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-3 border-warning">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Tổng người dùng</p>
                                    <h4 class="my-1 text-warning">{{ $countUser }}</h4>
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class='bx bxs-group'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->

            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h6 class="mb-0">Biểu đồ tương tác</h6>
                                </div>
                                <div class="dropdown ms-auto">
                                    <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                                        <i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                                    </a>
                                    <ul class="dropdown-menu" id="chart-dropdown">
                                        <li><a class="dropdown-item" href="#" data-chart="day">Biểu đồ theo ngày</a></li>
                                        <li><a class="dropdown-item" href="#" data-chart="month">Biểu đồ theo tháng</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-items-center ms-auto font-13 gap-2 my-3">
                                <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: #14abef"></i>Số đã người đọc</span>
                                <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: #ffc107"></i>Số người đã bình luận</span>
                            </div>
                            <div class="chart-container-1">
                                <!-- Chỉ 1 canvas cho biểu đồ -->
                                <canvas id="mainChart" height="400"></canvas>
                            </div>

                        </div>
                    </div>
                    
                </div>
            
                <div class="col-12 col-lg-4 d-flex">
                    <div class="card w-100 radius-10">
                        <div class="card-body">
                            <div class="card radius-10 border shadow-none">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-secondary">Lượt Xem</p>
                                            <h4 class="my-1">{{ $countView }}</h4>
                                            <!-- <p class="mb-0 font-13">+6.2% from last week</p> -->
                                        </div>
                                        <div class="widgets-icons-2 bg-gradient-cosmic text-white ms-auto"><i class='bx bx-show'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card radius-10 border shadow-none">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-secondary">Bình luận</p>
                                            <h4 class="my-1">{{ $countComments }}</h4>
                                        </div>
                                        <div class="widgets-icons-2 bg-gradient-ibiza text-white ms-auto"><i class='bx bxs-comment-detail'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card radius-10 mb-0 border shadow-none">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-secondary">Lượt thích</p>
                                            <h5 class="my-1"></h5> Chờ cập nhật ... 
                                        </div>
                                        <div class="widgets-icons-2 bg-gradient-moonlit text-white ms-auto"><i class='bx bxs-like'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                        </div>

                    </div>

                </div>
            </div><!--end row-->

            <div class="container mt-4">
                <!-- Tab Navigation -->
                <ul class="nav nav-tabs" id="dashboardTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="top-posts-tab" data-bs-toggle="tab" href="#top-posts" role="tab" aria-controls="top-posts" aria-selected="true"><i class="fas fa-chart-line"></i> Tin Đọc Nhiều</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="engaged-posts-tab" data-bs-toggle="tab" href="#engaged-posts" role="tab" aria-controls="engaged-posts" aria-selected="false"><i class="fas fa-heart"></i> Tin Quan Tâm</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pending-posts-tab" data-bs-toggle="tab" href="#pending-posts" role="tab" aria-controls="pending-posts" aria-selected="false"><i class="fas fa-clock"></i> Tin Chưa Duyệt</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="users-tab" data-bs-toggle="tab" href="#users" role="tab" aria-controls="users" aria-selected="false"><i class="fas fa-users"></i> Người Dùng</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="categories-tab" data-bs-toggle="tab" href="#categories" role="tab" aria-controls="categories" aria-selected="false"><i class="fas fa-th"></i> Danh Mục</a>
                    </li>
                </ul>
            
                <!-- Tab Content -->
                <div class="tab-content" id="dashboardTabsContent">
                    <!-- Tin Đọc Nhiều -->
                    <div class="tab-pane fade show active" id="top-posts" role="tabpanel" aria-labelledby="top-posts-tab">
                        <div class="card my-3">
                            <div class="card-header">Tin Đọc Nhiều</div>
                            <div class="card-body table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Tên Tin</th>
                                            <th class="text-center">Lượt Xem</th>
                                            <th class="text-center">Thể Loại</th>
                                            <th class="text-center">Ngày Đăng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mostReadPost as $post)
                                        <tr>
                                            <td>{{ $post->title }}</td>
                                            <td class="text-center">{{ $post->views }}</td>
                                            <td class="text-center">{{ $post->category->name }}</td>
                                            <td class="text-center">{{ $post->created_at->format('Y-m-d') }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            
                    <!-- Tin Quan Tâm -->
                    <div class="tab-pane fade" id="engaged-posts" role="tabpanel" aria-labelledby="engaged-posts-tab">
                        <div class="card my-3">
                            <div class="card-header">Tin Được Người Quan Tâm</div>
                            <div class="card-body table-responsive">
                                <table class="table table-hover-effect">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Tên Tin</th>
                                            <th class="text-center">Lượt Bình Luận</th>
                                            <th class="text-center">Lượt Xem</th>
                                            <th class="text-center">Ngày Đăng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mostEngagedPost as $post)
                                        <tr>
                                            <td>{{ $post->title }}</td>
                                            <td class="text-center">{{ $post->comments_count }}</td>
                                            <td class="text-center">{{ $post->views }}</td>
                                            <td class="text-center">{{ $post->created_at->format('Y-m-d') }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            
                    <!-- Tin Chưa Duyệt -->
                    <div class="tab-pane fade" id="pending-posts" role="tabpanel" aria-labelledby="pending-posts-tab">
                        <div class="card my-3">
                            <div class="card-header">Tin Chưa Duyệt</div>
                            <div class="card-body table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Tên Tin</th>
                                            <th class="text-center">Người Đăng</th>
                                            <th class="text-center">Ngày Đăng</th>
                                            <th class="text-center">Trạng Thái</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pendingPost as $post)
                                        <tr>
                                            <td >{{ $post->title }}</td>
                                            <td class="text-center">{{ $post->author->name }}</td>
                                            <td class="text-center">{{ $post->created_at->format('Y-m-d') }}</td>
                                            <td class="text-center"><span class="badge bg-warning">Chưa Duyệt</span></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            
                    <!-- Người Dùng -->
                    <div class="tab-pane fade" id="users" role="tabpanel" aria-labelledby="users-tab">
                        <div class="card my-3">
                            <div class="card-header">Danh Sách Người Dùng</div>
                            <div class="card-body table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Ảnh đại diện</th>
                                            <th>Tên Người Dùng</th>
                                            <th>Email</th>
                                            <th class="text-center">Vai trò</th>
                                            <th class="text-center">Số bài viết</th>
                                            <th class="text-center">Số bình luận</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($userInteractions as $user)
                                        <style>
                                            .table td {
                                                vertical-align: middle; /* Căn giữa theo chiều dọc */
                                            }
                                        </style>
                                        <tr>
                                            <td>
                                                <img class="img_admn--user img-avatar" width="60" height="60" style="border-radius: 50% ; margin: auto; background-size: cover ;  background-image: url({{ $user->image ?  asset('storage/' . $user->image->path) : asset('storage/placeholders/user_placeholder.jpg') }})" alt="">
                                            </td>                                            
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td class="text-center">{{ $user->role->name }}</td>
                                            <td class="text-center">{{ $user->posts_count }}</td>
                                            <td class="text-center">{{ $user->comments_count }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            
                    <!-- Danh Mục -->
                    <div class="tab-pane fade" id="categories" role="tabpanel" aria-labelledby="categories-tab">
                        <div class="card my-3">
                            <div class="card-header">Danh Sách Danh Mục</div>
                            <div class="card-body table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Tên Danh Mục</th>
                                            <th class="text-center">Số Bài Viết</th>
                                            <th class="text-center">Lượt Xem</th>
                                            <th class="text-center">Số Bình Luận</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $category)
                                        <tr>
                                            <td>{{ $category->name }}</td>
                                            <td class="text-center">{{ $category->posts_count }}</td>
                                            <td class="text-center">{{ $category->posts_sum_views }}</td>
                                            <td class="text-center">{{ $category->comments_count }}</td>
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
@endsection

@section("script")
    <script src="{{ asset('admin_dashboard_assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('admin_dashboard_assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('admin_dashboard_assets/plugins/chartjs/js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin_dashboard_assets/plugins/chartjs/js/Chart.extension.js') }}"></script>
    <script src="{{ asset('admin_dashboard_assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('admin_dashboard_assets/js/index.js') }}"></script>

   
    <script>
        $(document).ready(function () {
            var ctx = document.getElementById("mainChart").getContext("2d");

            // Gradient màu
            var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
            gradientStroke1.addColorStop(0, "#6078ea");
            gradientStroke1.addColorStop(1, "#17c5ea");

            var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
            gradientStroke2.addColorStop(0, "#ff8359");
            gradientStroke2.addColorStop(1, "#ffdf40");

            // Dữ liệu biểu đồ
            var labelsDay = {!! json_encode(array_keys($viewsPerDay)) !!};
            var viewsDataDay = {!! json_encode(array_values($viewsPerDay)) !!};
            var commentsDataDay = {!! json_encode(array_values($commentsPerDay)) !!};

            var labelsMonth = {!! json_encode(array_keys($viewsPerMonth)) !!};
            var viewsDataMonth = {!! json_encode(array_values($viewsPerMonth)) !!};
            var commentsDataMonth = {!! json_encode(array_values($commentsPerMonth)) !!};

            // Hàm khởi tạo biểu đồ
            function createChart(labels, viewsData, commentsData) {
                return new Chart(ctx, {
                    type: "line",
                    data: {
                        labels: labels,
                        datasets: [
                            {
                                label: "Lượt xem",
                                data: viewsData,
                                borderColor: gradientStroke1,
                                backgroundColor: gradientStroke1,
                                hoverBackgroundColor: gradientStroke1,
                                fill: false,
                                pointRadius: 4,
                                borderWidth: 2,
                            },
                            {
                                label: "Bình luận",
                                data: commentsData,
                                borderColor: gradientStroke2,
                                backgroundColor: gradientStroke2,
                                hoverBackgroundColor: gradientStroke2,
                                fill: false,
                                pointRadius: 4,
                                borderWidth: 2,
                            },
                        ],
                    },
                    options: {
                        maintainAspectRatio: false,
                        legend: {
                            position: "bottom",
                            display: true,
                            labels: {
                                boxWidth: 8,
                            },
                        },
                        tooltips: {
                            displayColors: false,
                        },
                        scales: {
                            xAxes: [
                                {
                                    ticks: {
                                        beginAtZero: true,
                                    },
                                },
                            ],
                            yAxes: [
                                {
                                    ticks: {
                                        beginAtZero: true,
                                    },
                                },
                            ],
                        },
                    },
                });
            }

            // Biểu đồ mặc định (theo ngày)
            var currentChart = createChart(labelsDay, viewsDataDay, commentsDataDay);

            // Xử lý sự kiện chuyển đổi biểu đồ
            $("#chart-dropdown").on("click", "a", function (e) {
                e.preventDefault();
                var chartType = $(this).data("chart");

                // Hủy biểu đồ hiện tại
                currentChart.destroy();

                // Tạo biểu đồ mới dựa trên loại được chọn
                if (chartType === "day") {
                    currentChart = createChart(labelsDay, viewsDataDay, commentsDataDay);
                } else if (chartType === "month") {
                    currentChart = createChart(labelsMonth, viewsDataMonth, commentsDataMonth);
                }
            });
        });
    </script>
    
@endsection