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
                                    <p class="mb-0 text-secondary">Tổng khách hàng</p>
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
                                    <h6 class="mb-0">Biểu đồ lượt xem</h6>
                                </div>
                                <div class="dropdown ms-auto">
                                    <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:;">Action</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-items-center ms-auto font-13 gap-2 my-3">
                                <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: #14abef"></i>Số đã người đọc</span>
                                <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: #ffc107"></i>Số người đã bình luận</span>
                            </div>
                            <div class="chart-container-1">
                                <canvas id="chart1"></canvas>
                            </div>
                            <div class="chart-container-1">
                                <canvas id="chart2"></canvas>
                            </div>
                        </div>
                        {{-- <div class="row row-cols-1 row-cols-md-3 row-cols-xl-3 g-0 row-group text-center border-top">
                            <div class="col">
                                <div class="p-3">
                                    <h5 class="mb-0">24.15M</h5>
                                    <small class="mb-0">Overall Visitor <span> <i class="bx bx-up-arrow-alt align-middle"></i> 2.43%</span></small>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3">
                                    <h5 class="mb-0">12:38</h5>
                                    <small class="mb-0">Visitor Duration <span> <i class="bx bx-up-arrow-alt align-middle"></i> 12.65%</span></small>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3">
                                    <h5 class="mb-0">639.82</h5>
                                    <small class="mb-0">Pages/Visit <span> <i class="bx bx-up-arrow-alt align-middle"></i> 5.62%</span></small>
                                </div>
                            </div>
                        </div> --}}
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
                                        @foreach ($mostReadArticles as $post)
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
                                        @foreach ($mostEngagedArticles as $post)
                                        <tr>
                                            <td>{{ $post->title }}</td>
                                            <td class="text-center">{{ $post->comments_count }}</td> <!-- Assuming 'comments_count' is passed -->
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
                                        @foreach ($pendingArticles as $post)
                                        <tr>
                                            <td >{{ $post->title }}</td>
                                            <td class="text-center">{{ $post->author->name }}</td>
                                            <td class="text-center">{{ $post->created_at->format('Y-m-d') }}</td>
                                            <td class="text-center"><span class="badge bg-warning">Chưa Duyệt</span></td> <!-- Assuming 'status' is either 'Pending' or 'Approved' -->
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
                                            <th>Tên Người Dùng</th>
                                            <th>Email</th>
                                            <th class="text-center">Vai trò</th>
                                            <th class="text-center">Số bài viết</th>
                                            <th class="text-center">Số bình luận</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($userInteractions as $user)
                                        <tr>
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
            var ctx = document.getElementById("chart1").getContext('2d');
        
            var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
            gradientStroke1.addColorStop(0, '#6078ea');  
            gradientStroke1.addColorStop(1, '#17c5ea'); 
        
            var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
            gradientStroke2.addColorStop(0, '#ff8359');
            gradientStroke2.addColorStop(1, '#ffdf40');
        
            // Dữ liệu cho biểu đồ theo ngày
            var labelsDay = {!! json_encode(array_keys($viewsPerDay)) !!};  // Các ngày
            var viewsDataDay = {!! json_encode(array_values($viewsPerDay)) !!};  // Lượt xem theo ngày
            var commentsDataDay = {!! json_encode(array_values($commentsPerDay)) !!};  // Bình luận theo ngày
    
            // Dữ liệu cho biểu đồ theo tháng
            var labelsMonth = {!! json_encode(array_keys($viewsPerMonth)) !!};  // Các tháng
            var viewsDataMonth = {!! json_encode(array_values($viewsPerMonth)) !!};  // Lượt xem theo tháng
            var commentsDataMonth = {!! json_encode(array_values($commentsPerMonth)) !!};  // Bình luận theo tháng
        
            var myChart = new Chart(ctx, {
                type: 'line',  // Biểu đồ đường (line chart)
                data: {
                    labels: labelsDay,  // Nhãn ngày
                    datasets: [{
                        label: 'Lượt xem theo ngày',
                        data: viewsDataDay,
                        borderColor: gradientStroke1,
                        backgroundColor: gradientStroke1,
                        hoverBackgroundColor: gradientStroke1,
                        fill: false,
                        pointRadius: 4,
                        borderWidth: 2
                    }, {
                        label: 'Bình luận theo ngày',
                        data: commentsDataDay,
                        borderColor: gradientStroke2,
                        backgroundColor: gradientStroke2,
                        hoverBackgroundColor: gradientStroke2,
                        fill: false,
                        pointRadius: 4,
                        borderWidth: 2
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        position: 'bottom',
                        display: true,
                        labels: {
                            boxWidth: 8
                        }
                    },
                    tooltips: {
                        displayColors: false,
                    },
                    scales: {
                        xAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
    
            // Biểu đồ theo tháng
            var ctx2 = document.getElementById("chart2").getContext('2d');
        
            var myChartMonth = new Chart(ctx2, {
                type: 'line',  // Biểu đồ đường (line chart)
                data: {
                    labels: labelsMonth,  // Nhãn tháng
                    datasets: [{
                        label: 'Lượt xem theo tháng',
                        data: viewsDataMonth,
                        borderColor: gradientStroke1,
                        backgroundColor: gradientStroke1,
                        hoverBackgroundColor: gradientStroke1,
                        fill: false,
                        pointRadius: 4,
                        borderWidth: 2
                    }, {
                        label: 'Bình luận theo tháng',
                        data: commentsDataMonth,
                        borderColor: gradientStroke2,
                        backgroundColor: gradientStroke2,
                        hoverBackgroundColor: gradientStroke2,
                        fill: false,
                        pointRadius: 4,
                        borderWidth: 2
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        position: 'bottom',
                        display: true,
                        labels: {
                            boxWidth: 8
                        }
                    },
                    tooltips: {
                        displayColors: false,
                    },
                    scales: {
                        xAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        });
    </script>
    
@endsection