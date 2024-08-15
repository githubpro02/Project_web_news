@extends('main_layouts.master')

@section('title')

@section('content')

<!-- Main Breadcrumb Start -->
<div class="main--breadcrumb">
	<div class="container">
			<ul class="breadcrumb">
				<li><a href="{{ route('home') }}" class="btn-link"><i class="fa fm fa-home"></i>Trang Chủ</a></li>
				<li class="active"><span>Thế giới</span></li>
			</ul>
	</div>
</div>
	<!-- Main Breadcrumb End -->

<div class="main-content--section pbottom--30">
	<div class="container">
		<div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <div class="row">

                                <!-- Books and Magazine Start -->
                                <div class="col-md-12 ptop--30 pbottom--30">
                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-2" data-ajax-content="outer">
                                        <ul class="nav" data-ajax-content="inner">
											@for($i =0 ; $i < 9 ; $i++)
                                            <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="post--img">
                                                                <a href=""
                                                                    class="thumb"><img
                                                                        src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
                                                                        alt=""></a>
                                                                <a href=""
                                                                    class="cat">Thế giới</a>

                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="post--info">
                                                                <ul class="nav meta">
																	<li><span>Nguyen Duc Manh</a></li>
																	<li><span>2 ngày trước</span></li>
                                                                    <li><a href="#"><i class="fa fm fa-eye"></i>1</span></li>
                                                                    <li><a href=""><i class="fa fm fa-comments"></i>0</a></li>
                                                                </ul>


                                                                <div class="title">
                                                                    <h2 class="h3" style="color:black"><a
                                                                            href=""
                                                                            class="btn-link">EVN kiến nghị gỡ khó cho điện mặt trời mái nhà tự dùng</a></h3>
                                                                </div>
                                                            </div>

                                                            <div class="post--content">
                                                                <p>EVN kiến nghị các bộ, ngành sớm có quy định, cơ chế ràng buộc trách nhiệm, thủ tục đấu nối cũng như quy định về an toàn xây dựng với điện mặt trời mái nhà tự dùng.</p>
                                                            </div>

                                                            <div class="post--action">
                                                                <a class="btn btn-link" href="">Đọc thêm</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Post Item End -->
                                            </li>

                                            <li>
                                                <!-- Divider Start -->
                                                <hr class="divider">
                                                <!-- Divider End -->
                                            </li>

											@endfor
                                        </ul>

                                    </div>
                                    <!-- Post Items End -->
									
									<!--Phân trang-->
									<div class="row">
										<div class="col-md-12">
											<nav aria-label="Page navigation">
												<ul class="pagination justify-content-start">
													<li class="page-item">
														<a class="page-link" href="#"><</a>
													</li>
													<li class="page-item"><a class="page-link" href="#">1</a></li>
													<li class="page-item"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item">
														<a class="page-link" href="#">></a>
													</li>
												</ul>
											</nav>
										</div><!-- end col -->
									</div><!-- end row -->
                                </div>
                                <!-- Books and Magazine End -->
                            </div>
                        </div>
                    </div>
                    <!-- Main Content End -->

					<!-- SIDEBAR: start -->
                    <!-- Main Sidebar Start -->
                    <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                        <div class="sticky-content-inner">
                        
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Tin tức nổi bật</h2>
                                    <i class="icon fa fa-newspaper-o"></i>
                                </div>
                            
                                <!-- List Widgets Start -->
                                <div class="list--widget list--widget-1">
                                    <div class="list--widget-nav" data-ajax="tab">
                                        <ul class="nav nav-justified">
                                            <li>
                                                <a  class="outstandPosts" href="#" data-ajax-action="load_widget_hot_news">Tin nóng</a>
                                            </li>
                                            <li class="active">
                                                <a class="outstandPosts" href="" data-ajax-action="load_widget_trendy_news">Xu hướng</a>
                                            </li>
                                            <li>
                                                <a class="outstandPosts" href="" data-ajax-action="load_widget_most_watched">Xem nhiều nhất</a>
                                            </li>
                                        </ul>
                                    </div>
                            
                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-3" data-ajax-content="outer">
                                        <ul class="nav listPost" data-ajax-content="inner">
                                                <li>
                                                    <!-- Post Item Start -->
                                                    <div class="post--item post--layout-3">
                                                        <div class="post--img">
                                                            <a href="" class="thumb"><img
                                                                    src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
                                                                    alt=""></a>
                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a href="javascript:;">2 ngày trước</a></li>
                                                                    <li><a  href="javascript:;"><i class="fa fm fa-comments"></i>1</a></li>
                                                                    <li><span><i class="fa fm fa-eye"></i>5</span></li>
                                                                </ul>
                            
                                                                <div class="title">
                                                                    <h3 class="h4"><a href=""
                                                                            class="btn-link">EVN kiến nghị gỡ khó cho điện mặt trời mái nhà tự dùng</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Post Item End -->
                                                </li>
                                                <li>
                                                    <!-- Post Item Start -->
                                                    <div class="post--item post--layout-3">
                                                        <div class="post--img">
                                                            <a href="" class="thumb"><img
                                                                    src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
                                                                    alt=""></a>
                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a href="javascript:;">2 ngày trước</a></li>
                                                                    <li><a  href="javascript:;"><i class="fa fm fa-comments"></i>0</a></li>
                                                                    <li><span><i class="fa fm fa-eye"></i>1</span></li>
                                                                </ul>
                            
                                                                <div class="title">
                                                                    <h3 class="h4"><a href=""
                                                                            class="btn-link">Lào Cai: Quyết định xử phạt vi phạm hành chính là tài liệu mật?</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Post Item End -->
                                                </li>
                                                <li>
                                                    <!-- Post Item Start -->
                                                    <div class="post--item post--layout-3">
                                                        <div class="post--img">
                                                            <a href="" class="thumb"><img
                                                                    src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
                                                                    alt=""></a>
                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a href="javascript:;">2 ngày trước</a></li>
                                                                    <li><a  href="javascript:;"><i class="fa fm fa-comments"></i>0</a></li>
                                                                    <li><span><i class="fa fm fa-eye"></i>1</span></li>
                                                                </ul>
                            
                                                                <div class="title">
                                                                    <h3 class="h4"><a href=""
                                                                            class="btn-link">Phim Em và Trịnh 'cháy vé'</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Post Item End -->
                                                </li>
                                                <li>
                                                    <!-- Post Item Start -->
                                                    <div class="post--item post--layout-3">
                                                        <div class="post--img">
                                                            <a href="" class="thumb"><img
                                                                    src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
                                                                    alt=""></a>
                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a href="javascript:;">2 ngày trước</a></li>
                                                                    <li><a  href="javascript:;"><i class="fa fm fa-comments"></i>0</a></li>
                                                                    <li><span><i class="fa fm fa-eye"></i>1</span></li>
                                                                </ul>
                            
                                                                <div class="title">
                                                                    <h3 class="h4"><a href=""
                                                                            class="btn-link">Litva hạn chế chuyển hàng tới vùng lãnh thổ Nga</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Post Item End -->
                                                </li>
                                                <li>
                                                    <!-- Post Item Start -->
                                                    <div class="post--item post--layout-3">
                                                        <div class="post--img">
                                                            <a href="" class="thumb"><img
                                                                    src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
                                                                    alt=""></a>
                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a href="javascript:;">2 ngày trước</a></li>
                                                                    <li><a  href="javascript:;"><i class="fa fm fa-comments"></i>0</a></li>
                                                                    <li><span><i class="fa fm fa-eye"></i>0</span></li>
                                                                </ul>
                            
                                                                <div class="title">
                                                                    <h3 class="h4"><a href=""
                                                                            class="btn-link">Tuần lễ "điểm nhấn" tại Festival Huế 2022 - Festival bốn mùa có gì đặc sắc?</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Post Item End -->
                                                </li>
                                            </ul>
                            
                                        <!-- Preloader Start -->
                                        <!-- <div class="preloader bg--color-0--b" data-preloader="1">
                                            <div class="preloader--inner"></div>
                                        </div> -->
                                        <!-- Preloader End -->
                                    </div>
                                    <!-- Post Items End -->
                                </div>
                                <!-- List Widgets End -->
                            </div>
                            <!-- Widget End -->


                        <!-- Widget Start -->

						<div class="widget">
							<div class="widget--title" data-ajax="tab">
								<h2 class="h4">Bình chọn</h2>

								<div class="nav">
									<a href="javascript:;" class="prev btn-link" data-ajax-action="load_prev_poll_widget">
										<i class="fa fa-long-arrow-left"></i>
									</a>

									<span class="divider">/</span>

									<a href="javascript:;" class="next btn-link" data-ajax-action="load_next_poll_widget">
										<i class="fa fa-long-arrow-right"></i>
									</a>
								</div>
							</div>

							<!-- Poll Widget Start -->
							<div class="poll--widget" data-ajax-content="outer">
								<ul class="nav" data-ajax-content="inner">
									<li class="title">
										<h3 class="h4">
											Theo bạn thì giải đội bóng nào sẽ vô địch WoldCup 2022 ?</h3>
									</li>

									<li class="options">
										<form action="javascript:;">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="option-1">
													<img src="{{ asset('kcnew/frontend/img/Flag_barzill.png') }}" alt="Brasil" srcset="">
													<span>Brasil</span>
												</label>

												<p>55%<span style="width: 55%;"></span></p>
											</div>

											<div class="checkbox">
												<label>
													<input type="checkbox" name="option-2">
													<img src="{{ asset('kcnew/frontend/img/Flag_Agrennal.png') }}" alt="Brasil" srcset="">
													<span>Argentina</span>
												</label>

												<p>28%<span style="width: 28%;"></span></p>
											</div>

											<div class="checkbox">
												<label>
													<input type="checkbox" name="option-2">
													<img src="{{ asset('kcnew/frontend/img/Flag_tay_ban_nha.png') }}" alt="Brasil" srcset="">
													<span>Tây Ban Nha</span>
												</label>

												<p>12%<span style="width: 12%;"></span></p>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="option-2">
													<img src="{{ asset('kcnew/frontend/img/Flag_bo-dao-nha.png') }}" alt="Brasil" srcset="">
													<span>Bồ Đào Nha</span>
												</label>

												<p>05%<span style="width: 05%;"></span></p>
											</div>

											<button type="submit" class="btn btn-primary">Vote Ngay</button>
										</form>
									</li>
								</ul>

								<!-- Preloader Start -->
								<div class="preloader bg--color-0--b" data-preloader="1">
									<div class="preloader--inner"></div>
								</div>
								<!-- Preloader End -->
							</div>
							<!-- Poll Widget End -->
						</div>
						<!-- Widget End -->

                        <!-- Widget Start -->
						<div class="widget">
							<div class="widget--title">
								<h2 class="h4">Quảng cáo</h2>
								<i class="icon fa fa-bullhorn"></i>
							</div>

							<!-- Ad Widget Start -->
							<div class="ad--widget--banner">
								<a href="https://mwc.com.vn/products/giay-sandal-nu-mwc-nusd--2887?c=N%C3%82U">
									<img src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}" alt="">
								</a>
							</div>
							<!-- Ad Widget End -->
						</div>
						<!-- Widget End -->

                    </div>
                    </div> <!-- Main Sidebar End -->
                </div>
            </div>
        </div>
        <!-- Main Content Section End -->
@endsection

