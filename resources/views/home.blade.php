@extends('main_layouts.master')

@section('title','Trang Tin Tức Việt Nam')

@section('content')

<div class="wrapper">

	<!-- Main Content Section Start -->
	<div class="main-content--section pbottom--30">
		<div class="container">
			<!-- Main Content Start -->
			<div class="main--content">
				<!-- Post Items Start -->
				<div class="post--items post--items-1 pd--30-0">
					<div class="row gutter--15">
						<div class="col-md-6">
							<div class="row gutter--15">

							@for ( $i = 0; $i <= 1; $i++)
								<div class="col-xs-6 col-xss-12">
									<!-- Post Item Start -->
									<div class="post--item post--layout-1 post--title-large">
										<div class="post--img">
											<a href="javascript:;" class="thumb">
												<img src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
													alt=""></a>
											<a href="" class="cat">Kinh Doanh</a>

											<a href="javascript:;" class="icon"><i class="fa fa-flash"></i></a>
											<div class="post--info">
												<ul class="nav meta">
													<li><a href="javascript:;">Nguyen Duc Manh</a></li>
													<li><a href="javascript:;">1 ngày trước</a></li>
												</ul>
												<div class="title">
													<h2 class="h4"><a href="" class="btn-link">Đường băng sân bay Côn Đảo có thể được mở rộng</a>
													</h2>
												</div>
											</div>
										</div>
									</div>
									<!-- Post Item End -->
								</div>
								@endfor
						

								<div class="col-sm-12 hidden-sm hidden-xs">
									<!-- Post Item Start -->
									<div class="post--item post--layout-1 post--title-larger">
										<div class="post--img">
											<a href=""class="thumb">
												<img src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
													style="height:200px" alt=""></a>

											<a href="" class="cat">Kinh Tế</a>
											<a href="javascript:;" class="icon"><i class="fa fa-fire"></i></a>

											<div class="post--info">
												<ul class="nav meta">
													<li><a href="javascript:;">Nguyen Duc Manh</a></li>
													<li><a href="javascript:;">2 ngày trước</a></li>
												</ul>

												<div class="title">
													<h2 class="h4"><a
															href=""
															class="btn-link">Giá vàng hôm nay 25/6: Tiếp đà suy giảm</a></h2>
												</div>
											</div>
										</div>
									</div>
									<!-- Post Item End -->
								</div>

							</div>
						</div>

						<div class="col-md-6">
							<!-- Post Item Start -->
							<div class="post--item post--layout-1 post--title-larger">
								<div class="post--img">
									<a href=""
										class="thumb"><img src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}" style="height:200px"  alt=""></a>
										<a href="" class="cat">Sức Khỏe</a>
															
									<a href="javascript:;" class="icon"><i class="fa fa-flash"></i></a>

									<div class="post--info">
										<ul class="nav meta">
											<li><a href="javascript:;">Nguyen Duc Manh</a></li>
											<li><a href="javascript:;">1 ngày trước</a></li>
										</ul>

										<div class="title">
											<h2 class="h4"><a
													href=""
													class="btn-link">Virus bị xóa sổ 40 năm 'trỗi dậy' ở Anh</a>
											</h2>
										</div>
									</div>
								</div>
							</div>
							<!-- Post Item End -->
						</div>

					</div>
				</div>
				<!-- Post Items End -->
			</div>
			<!-- Main Content End -->

			<div class="row">
				<!-- Main Content Start -->
				<div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
					<div class="sticky-content-inner">
						<div class="row">
							<!-- World News Start -->
							<div class="col-md-6 ptop--30 pbottom--30">
								<!-- Post Items Title Start -->
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">Thế Giới</h2>
								</div>
								<!-- Post Items Title End -->

								<!-- Post Items Start -->
								<div class="post--items post--items-2" data-ajax-content="outer">
									<ul class="nav row gutter--15" data-ajax-content="inner">
								
									
										<li class="col-xs-12">
											<!-- Post Item Start -->
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href=""
														class="thumb"><img src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}" 
															alt=""></a>
															
													<a href="javascript:;" class="icon"><i class="fa fa-flash"></i></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">Nguyen Duc Manh</a></li>
															<li><a href="javascript:;">1 ngay truoc</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a
																	href=""
																	class="btn-link">Nga chỉ trích EU trao tư cách ứng viên cho Ukraine</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>


										<li class="col-xs-12">
											<!-- Divider Start -->
											<hr class="divider">
											<!-- Divider End -->
										</li>

											<li class="col-xs-6">
												<!-- Post Item Start -->
												<div class="post--item post--layout-2">
													<div class="post--img">
														<a href=""
															class="thumb"><img
																src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
																alt=""></a>

														<div class="post--info">
															<ul class="nav meta">
																<li><a href="javascript:;">Nguyen Duc Manh</a></li>
																<li><a href="javascript:;">3 ngày trước</a></li>
															</ul>

															<div class="title">
																<h3 class="h4"><a
																		href=""
																		class="btn-link">Mưa lũ càn quét miền nam Trung Quốc</a>
																</h3>
															</div>
														</div>
													</div>
												</div>
												<!-- Post Item End -->

												<li class="col-xs-6">
													<!-- Post Item Start -->
													<div class="post--item post--layout-2">
														<div class="post--img">
															<a href=""
																class="thumb"><img
																	src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
																	alt=""></a>
	
															<div class="post--info">
																<ul class="nav meta">
																	<li><a href="javascript:;">Nguyen Duc Manh</a></li>
																	<li><a href="javascript:;">3 ngày trước</a></li>
																</ul>
	
																<div class="title">
																	<h3 class="h4"><a
																			href=""
																			class="btn-link">Mưa lũ càn quét miền nam Trung Quốc</a>
																	</h3>
																</div>
															</div>
														</div>
													</div>
													<!-- Post Item End -->
												
													<li class="col-xs-12">
														<!-- Divider Start -->
														<hr class="divider">
														<!-- Divider End -->
													</li>

												<li class="col-xs-6">
													<!-- Post Item Start -->
													<div class="post--item post--layout-2">
														<div class="post--img">
															<a href=""
																class="thumb"><img
																	src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
																	alt=""></a>

															<div class="post--info">
																<ul class="nav meta">
																	<li><a href="javascript:;">Nguyen Duc Manh</a></li>
																	<li><a href="javascript:;">3 ngày trước</a></li>
																</ul>

																<div class="title">
																	<h3 class="h4"><a
																			href=""
																			class="btn-link">Mưa lũ càn quét miền nam Trung Quốc</a>
																	</h3>
																</div>
															</div>
														</div>
													</div>
													<!-- Post Item End -->


												
												<li class="col-xs-6">
													<!-- Post Item Start -->
													<div class="post--item post--layout-2">
														<div class="post--img">
															<a href=""
																class="thumb"><img
																	src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
																	alt=""></a>

															<div class="post--info">
																<ul class="nav meta">
																	<li><a href="javascript:;">Nguyen Duc Manh</a></li>
																	<li><a href="javascript:;">3 ngày trước</a></li>
																</ul>

																<div class="title">
																	<h3 class="h4"><a
																			href=""
																			class="btn-link">Mưa lũ càn quét miền nam Trung Quốc</a>
																	</h3>
																</div>
															</div>
														</div>
													</div>
													<!-- Post Item End -->
											</li>											
									</ul>
								</div>
								<!-- Post Items End -->
							</div>
							<!-- World News End -->

							<!-- Technology Start -->
							<div class="col-md-6 ptop--30 pbottom--30">
								<!-- Post Items Title Start -->
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">Xã Hội</h2>
								</div>
								<!-- Post Items Title End -->

								<!-- Post Items Start -->
								<div class="post--items post--items-3" data-ajax-content="outer">
									<ul class="nav" data-ajax-content="inner">
								
										<li>
											<!-- Post Item Start -->
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href=""
														class="thumb"><img
														src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
														alt=""></a>
												
													<a href="javascript:;" class="icon"><i class="fa fa-flash"></i></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">Nguyen Duc Manh</a></li>
															<li><a href="javascript:;">1 ngày trước</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a
																	href=""
																	class="btn-link">Đường băng sân bay Côn Đảo có thể được mở rộng</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>

										<li class="col-xs-12">

											<!-- Post Item Start -->
											<div class="post--item post--layout-3">
												<div class="post--img">
													<a href=""
														class="thumb"><img
															src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
															alt=""></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">Nguyen Duc Manh</a></li>
															<li><a href="javascript:;">1 ngày trước</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a
																	href=""
																	class="btn-link">Việt Nam - Campuchia: Mối quan hệ mãi mãi xanh tươi, đời đời bền vững</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->

											<!-- Post Item Start -->
											<div class="post--item post--layout-3">
												<div class="post--img">
													<a href=""
														class="thumb"><img
															src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
															alt=""></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">Nguyen Duc Manh</a></li>
															<li><a href="javascript:;">1 ngày trước</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a
																	href=""
																	class="btn-link">Việt Nam - Campuchia: Mối quan hệ mãi mãi xanh tươi, đời đời bền vững</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->

											<!-- Post Item Start -->
											<div class="post--item post--layout-3">
												<div class="post--img">
													<a href=""
														class="thumb"><img
															src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
															alt=""></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">Nguyen Duc Manh</a></li>
															<li><a href="javascript:;">1 ngày trước</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a
																	href=""
																	class="btn-link">Việt Nam - Campuchia: Mối quan hệ mãi mãi xanh tươi, đời đời bền vững</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->

											<!-- Post Item Start -->
											<div class="post--item post--layout-3">
												<div class="post--img">
													<a href=""
														class="thumb"><img
															src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
															alt=""></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">Nguyen Duc Manh</a></li>
															<li><a href="javascript:;">1 ngày trước</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a
																	href=""
																	class="btn-link">Việt Nam - Campuchia: Mối quan hệ mãi mãi xanh tươi, đời đời bền vững</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>

									</ul>
								</div>
								<!-- Post Items End -->
							</div>
							<!-- Technology End -->

							<!-- Finance Start -->
							<div class="col-md-12 ptop--30 pbottom--30">
								<!-- Post Items Title Start -->
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">Kinh Tế</h2>

								</div>
								<!-- Post Items Title End -->

								<!-- Post Items Start -->
								<div class="post--items post--items-2" data-ajax-content="outer">
									<ul class="nav row" data-ajax-content="inner">
										<li class="col-md-6">
											<!-- Post Item Start -->
											<div class="post--item post--layout-2">
												<div class="post--img">
													<a href=""
														class="thumb"><img
															src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
															alt=""></a>
													<a href="" class="cat">Kinh Tế</a>
													<a href="javascript:;" class="icon"><i class="fa fa-star-o"></i></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">Nguyen Duc Manh</a></li>
															<li><a href="javascript:;">4 ngày trước</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a
																	href=""
																	class="btn-link">Giá vàng hôm nay 25/6: Tiếp đà suy giảm</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->

											<hr class="mar_bottom15 ">

											<ul class="list_news_show_home">
													<li class="boder_link_show_home">
														<h3 class="h3"><a href="">CEO MB: 'Chuyển đổi số cần kết hợp giữa cạnh tranh và hợp tác'</a></h3>
													</li>
													<li class="boder_link_show_home">
														<h3 class="h3"><a href="">EVN kiến nghị gỡ khó cho điện mặt trời mái nhà tự dùng</a></h3>
													</li>
													<li>
														<h3 class="h3"><a href="">Bitcoin mất mốc 20.000 USD</a></h3>
													</li>

											</ul>

										</li>

										<li class="col-md-6">
											<ul class="nav row">
												<li class="col-xs-12 hidden-md hidden-lg">
													<!-- Divider Start -->
													<hr class="divider">
													<!-- Divider End -->
												</li>
												@for ($i = 1; $i <= 4; $i++)

													@if($i == 3 )
															<li class="col-xs-12">
																<!-- Divider Start -->
																<hr class="divider">
																<!-- Divider End -->
															</li>
													@endif 
													
													<li class="col-xs-6">
														<!-- Post Item Start -->
														<div class="post--item post--layout-2">
															<div class="post--img">
																<a href=""
																	class="thumb"><img 
																		src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
																		alt=""></a>

																<div class="post--info">
																	<ul class="nav meta">																		
																		<li><a href="javascript:;">Nguyen Duc Manh</a></li>
																		<li><a href="javascript:;">1 ngày trước</a></li>
																	</ul>

																	<div class="title">
																		<h3 class="h4"><a
																				href=""
																				class="btn-link">Giá vàng ở thế giằng co</a></h3>
																	</div>
																</div>
															</div>
														</div>
														<!-- Post Item End -->
													</li>

												@endfor
											</ul>
										</li>
									</ul>


								</div>
								<!-- Post Items End -->
							</div>
							<!-- Finance End -->

							<!-- Politics Start -->
							<div class="col-md-6 ptop--30 pbottom--30">
								<!-- Post Items Title Start -->
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">Sức Khỏe</h2>


								</div>
								<!-- Post Items Title End -->

								<!-- Post Items Start -->
								<div class="post--items post--items-2" data-ajax-content="outer">
									<ul class="nav row gutter--15" data-ajax-content="inner">
										<li class="col-xs-12">
											<!-- Post Item Start -->
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href=""
														class="thumb"><img
															src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
															alt=""></a>
													<a href=""
														class="cat">Sức Khỏe</a>
													<a href="" class="icon"><i class="fa fa-fire"></i></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">Nguyen Duc Manh</a></li>
															<li><a href="javascript:;">1 ngày trước</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a href=""
																	class="btn-link">Virus bị xóa sổ 40 năm 'trỗi dậy' ở Anh</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>

										@for ($i = 1; $i <= 4; $i++)
										@if($i==1 || $i == 3 )
											<li class="col-xs-12">
												<!-- Divider Start -->
												<hr class="divider">
												<!-- Divider End -->
											</li>
											@endif
											<li class="col-xs-6">
												<!-- Post Item Start -->
												<div class="post--item post--layout-2">
													<div class="post--img">
														<a href=""
															class="thumb"><img
																src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
																alt=""></a>

														<div class="post--info">
															<ul class="nav meta">
																<li><a href="javascript:;">Nguyen Duc Manh</a></li>
																<li><a href="javascript:;">1 ngày trước</a></li>
															</ul>

															<div class="title">
																<h3 class="h4"><a
																		href=""
																		class="btn-link">Phát hiện ung thư máu từ triệu chứng đau họng, khó nuốt</a>
																</h3>
															</div>
														</div>
													</div>
												</div>
												<!-- Post Item End -->
											</li>
										@endfor
									</ul>


								</div>
								<!-- Post Items End -->
							</div>
							<!-- Politics End -->

							<!-- Sports Start -->
							<div class="col-md-6 ptop--30 pbottom--30">
								<!-- Post Items Title Start -->
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">Giáo Dục</h2>
								</div>
								<!-- Post Items Title End -->

								<!-- Post Items Start -->
								<div class="post--items post--items-3" data-ajax-content="outer">
									<ul class="nav" data-ajax-content="inner">
										<li>
											<!-- Post Item Start -->
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href=""
														class="thumb"><img src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
															alt=""></a>
													<a href=""
														class="cat">Giáo Dục</a>
													<a href="" class="icon"><i class="fa fa-eye"></i></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">Nguyen Duc Manh</a></li>
															<li><a href="javascript:;">3 ngày trước</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a
																	href=""
																	class="btn-link">Gần 4.000 học sinh giành suất vào trường chuyên Trần Đại Nghĩa</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>

										@for ($i = 1; $i <= 5; $i++)
										<li>
											<!-- Post Item Start -->
											<div class="post--item post--layout-3">
												<div class="post--img">
													<a href=""
														class="thumb"><img
															src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
															alt=""></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">Nguyen Duc Manh</a></li>
															<li><a href="javascript:;">2 ngày trước</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a
																	href=""
																	class="btn-link">IT Hutech OpenDay</a></h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
										@endfor

									</ul>

								</div>
								<!-- Post Items End -->
							</div>
							<!-- Sports End -->
						</div>
					</div>
				</div>
				<!-- Main Content End -->

				<!-- Main Sidebar Start -->
				<div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
					<div class="sticky-content-inner">
						<!-- Widget Start -->
						<div class="widget">
							<div class="widget--title">
								<h2 class="h4">Tin tức nổi bật</h2>
								<i class="icon fa fa-newspaper-o"></i>
							</div>

							<!-- List Widgets Start -->
							<div class="list--widget list--widget-1">
								<!-- Post Items Start -->
								<div class="post--items post--items-3" data-ajax-content="outer">
									<ul class="nav" data-ajax-content="inner">
										
										@for($i=1; $i <= 5; $i++)
										<li>
											<!-- Post Item Start -->
											<div class="post--item post--layout-3">
												<div class="post--img">
													<a href=""
														class="thumb"><img width = "120"
															src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
															alt=""></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">1 ngày trước</a></li>
															<li><a  href="javascript:;"><i class="fa fm fa-comments"></i></a></li>
                                       						<li><span><i class="fa fm fa-eye"></i></span></li>
														</ul>

														<div class="title">
															<h3  class="h4">
																<a href="" class="btn-link">Những niềm tin sai lầm về hôn nhân</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
										@endfor
									
									</ul>


								</div>
								<!-- Post Items End -->
							</div>
							<!-- List Widgets End -->
						</div>
						<!-- Widget End -->

						<!-- Bắt đầu Từ khóa -->
						<div class="widget">
							<div class="widget--title  " data-ajax="tab">
								<h2 class="h4">Từ khóa</h2>
							</div>
							<div class="list--widget list--widget-1" data-ajax-content="outer">
								<!-- Post Items Start -->
								<div class="post--items post--items-3">
									<ul style="padding:20px" class="nav sidebar" data-ajax-content="inner">
										<div class="side">
											<div class="block-26">
												<ul>
													<li><a href="">virus</a></li>
													<li><a href="">maybay</a></li>
													<li><a href="">Gia-vang</a></li>
													<li><a href="">Co-phieu</a></li>
													<li><a href="">Thi-truong</a></li>
													<li><a href="">Ronaldo</a></li>
													<li><a href="">Trung-quoc</a></li>
													<li><a href="">Moi-nhat</a></li>													
												</ul>
											</div>
										</div>
									</ul>
								</div>
							</div>
						</div>
						<!-- Kết thúc từ khóa -->

						<!-- Widget Start -->
						<div class="widget">
							<!-- Ad Widget Start -->
							<div class="ad--widget--banner">
								<div class="row">
									<div class="col-sm-12">
										<a
											href="https://mwc.com.vn/products/giay-sandal-nu-mwc-nusd--2887?c=N%C3%82U">
											<img src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao1.png') }}" alt="">
										</a>
									</div>
								</div>
							</div>
							<!-- Ad Widget End -->
						</div>
						<!-- Widget End -->

						<!-- Widget Start -->
						<div class="widget">
							<div class="widget--title">
								<h2 class="h4">Kết nối với chúng tôi</h2>
								<i class="icon fa fa-share-alt"></i>
							</div>

							<!-- Social Widget Start -->
							<div class="social--widget style--2">
								<ul class="nav row gutter--20">
									<li class="col-md-12 facebook">
										<a href="https://www.facebook.com/profile.php?id=100024515460327">
											<span class="icon">
												<i class="fa fa-facebook"></i>
												<span>Share</span>
											</span>

											<span class="text">
												<span>Facebook</span>
												<span>3.12 k</span>
											</span>
										</a>
									</li>

									<li class="col-md-12 twitter">
										<a href="https://www.facebook.com/profile.php?id=100024515460327">
											<span class="icon">
												<i class="fa fa-twitter"></i>
												<span>Tweet</span>
											</span>

											<span class="text">
												<span>Twitter</span>
												<span>869</span>
											</span>
										</a>
									</li>

									<li class="col-md-12 google-plus">
										<a href="https://www.facebook.com/profile.php?id=100024515460327">
											<span class="icon">
												<i class="fa fa-google-plus"></i>
												<span>Share</span>
											</span>

											<span class="text">
												<span>Google+</span>
												<span>639</span>
											</span>
										</a>
									</li>


								</ul>
							</div>
							<!-- Social Widget End -->
						</div>
						<!-- Widget End -->

						<!-- Widget Start -->
						<div class="widget">
							<div class="widget--title">
								<h2 class="h4">Nhận tin tức mới</h2>
								<i class="icon fa fa-envelope-open-o"></i>
							</div>

							<!-- Subscribe Widget Start -->
							<div class="subscribe--widget">
								<div class="content">
									<p>Đăng ký bản tin của chúng tôi để nhận tin tức mới nhất, tin tức phổ biến và
										cập nhật độc quyền.
									</p>
								</div>

								<form
									action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d"
									method="post" name="mc-embedded-subscribe-form" target="_blank"
									data-form="mailchimpAjax">
									<div class="input-group">
										<input type="email" name="EMAIL" placeholder="E-mail address"
											class="form-control" autocomplete="off" required>

										<div class="input-group-btn">
											<button type="submit" class="btn btn-lg btn-default active"><i
													class="fa fa-paper-plane-o"></i></button>
										</div>
									</div>

									<div class="status"></div>
								</form>
							</div>
							<!-- Subscribe Widget End -->
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
				</div>
				<!-- Main Sidebar End -->
			</div>

			<!-- Main Content Start -->
			<div class="main--content pd--30-0">
				<!-- Post Items Title Start -->
				<div class="post--items-title" data-ajax="tab">
					<h2 class="h4">Thể Thao</h2>
				</div>
				<!-- Post Items Title End -->

				<!-- Post Items Start -->
				<div class="post--items post--items-4" data-ajax-content="outer">
					<ul class="nav row" data-ajax-content="inner">
						<li class="col-md-8">
							<!-- Post Item Start -->
							<div class="post--item post--layout-1 post--type-video post--title-large">
								<div class="post--img">
									<a href="" class="thumb"><img
											src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}" alt=""></a>
									<a href="" class="cat">Thể Thao</a>
									<a href="" class="icon"><i class="fa fa-eye"></i></a>

									<div class="post--info">
										<ul class="nav meta">
											<li><a href="javascript:;">Nguyen Duc Manh</a></li>
											<li><a href="javascript:;">2 ngày trước</a></li>
										</ul>

										<div class="title">
											<h2 class="h4"><a
													href=""
													class="btn-link">Ronaldo được tìm kiếm nhiều nhất thế giới thể thao</a></h2>
										</div>
									</div>
								</div>
							</div>
							<!-- Post Item End -->

							<!-- Divider Start -->
							<hr class="divider hidden-md hidden-lg">
							<!-- Divider End -->
						</li>
						<li class="col-md-4">
							<ul class="nav">

							@for ($i = 1; $i <= 4; $i++)
								<li>
									<!-- Post Item Start -->
									<div class="post--item post--type-audio post--layout-3">
										<div class="post--img">
											<a href=""
												class="thumb"><img
													src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
													alt=""></a>

											<div class="post--info">
												<ul class="nav meta">
													<li><a href="javascript:;">Nguyen Duc Manh</a></li>
													<li><a href="javascript:;">2 ngày trước</a></li>
												</ul>

												<div class="title">
													<h3 class="h4"><a
															href=""
															class="btn-link">CEO Arnold: 'Man Utd đốt quá nhiều tiền'</a></h3>
												</div>
											</div>
										</div>
									</div>
									<!-- Post Item End -->
								</li>
							@endfor
							
							</ul>
						</li>
					</ul>


				</div>
				<!-- Post Items End -->
			</div>
			<!-- Main Content End -->

			<!-- Advertisement Start -->
			<div class="ad--space pd--30-0">
				<a href="https://burine.vn/">
					<img src="{{ asset('kcnew/frontend/img/ads-img/970x90_banner_burine.png') }}" alt="" class="center-block">
				</a>
			</div>
			<!-- Advertisement End -->

			<div class="row">
				<!-- Main Content Start -->
				<div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
					<div class="sticky-content-inner">
						<div class="row">
							<!-- Health and fitness Start -->
							<div class="col-md-6 ptop--30 pbottom--30">
								<!-- Post Items Title Start -->
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">Giải Trí</h2>


								</div>
								<!-- Post Items Title End -->

								<!-- Post Items Start -->
								<div class="post--items post--items-3" data-ajax-content="outer">
									<ul class="nav" data-ajax-content="inner">
										<li>
											<!-- Post Item Start -->
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href=""
														class="thumb"><img
															src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}" alt=""></a>
													<a href=""
														class="cat">Giải Trí</a>
													<a href="" class="icon"><i class="fa fa-star-o"></i></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">Nguyen Duc Manh</a></li>
															<li><a href="javascript:;">2 ngày trước</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a
																	href=""
																	class="btn-link">10 ứng viên cho vương miện Miss Universe Vietnam 2024</a></h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>

										@for ($i = 1; $i <= 4; $i++)
										<li>
											<!-- Post Item Start -->
											<div class="post--item post--layout-3">
												<div class="post--img">
													<a href=""
														class="thumb"><img
															src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
															alt=""></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">Nguyen Duc Manh</a></li>
															<li><a href="javascript:;">1 ngày trước</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a
																	href=""
																	class="btn-link">Phim về Marilyn Monroe hé lộ bi kịch hậu trường</a></h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
										@endfor
										
									</ul>


								</div>
								<!-- Post Items End -->
							</div>
							<!-- Health and fitness End -->

							<!-- Lifestyle Start -->
							<div class="col-md-6 ptop--30 pbottom--30">
								<!-- Post Items Title Start -->
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">Pháp Luật</h2>


								</div>
								<!-- Post Items Title End -->

								<!-- Post Items Start -->
								<div class="post--items post--items-2" data-ajax-content="outer">
									<ul class="nav row gutter--15" data-ajax-content="inner">

										<li class="col-xs-12">
											<!-- Post Item Start -->
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href=""
														class="thumb"><img
															src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
															alt=""></a>
													<a href=""
														class="cat">Pháp Luật</a>
													<a href="" class="icon"><i class="fa fa-heart-o"></i></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">Nguyen Duc Manh</a></li>
															<li><a href="javascript:;">2 ngày trước</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a
																	href=""
																	class="btn-link">Thợ khóa vướng tù oan vì quá tài năng</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										
										</li>
										@for ($i = 1; $i <= 4; $i++)
											@if ($i === 1 || $i === 3)
											<li class="col-xs-12">
												<!-- Divider Start -->
												<hr class="divider">
												<!-- Divider End -->
											</li>
											@endif
										<li class="col-xs-6">
											<!-- Post Item Start -->
											<div class="post--item post--layout-2">
												<div class="post--img">
													<a href=""
														class="thumb"><img
															src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
															alt=""></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">Nguyen Duc Manh</a></li>
															<li><a href="javascript:;">1 ngày trước</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a
																	href=""
																	class="btn-link">'Cát tặc' ở Sài Gòn bị vây bắt</a></h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
										@endfor
									</ul>

								</div>
								<!-- Post Items End -->
							</div>
							<!-- Lifestyle End -->

							<div class="col-md-12 ptop--30 pbottom--30">
								<!-- Post Items Title Start -->
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">Công Nghệ</h2>


								</div>
								<!-- Post Items Title End -->

								<!-- Post Items Start -->
								<div class="post--items post--items-2" data-ajax-content="outer">
									<ul class="nav row" data-ajax-content="inner">
										<li class="col-md-6">
											<!-- Post Item Start -->
											<div class="post--item post--layout-2">
												<div class="post--img">
													<a href=""
														class="thumb"><img
															src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}" alt="">
													</a>
													<a href="" class="cat">Công Nghệ</a>
													<a href="" class="icon"><i class="fa fa-star-o"></i></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">Nguyen Duc Manh</a></li>
															<li><a href="javascript:;">5 ngày trước</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a
																	href=""
																	class="btn-link">Big Tech Trung Quốc chỉ còn là cái bóng của chính mình</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->

											<hr class="mar_bottom15 ">

											<ul class="list_news_show_home">
												@for ($i = 3; $i <= 5; $i++)
													@if($i!=5)
													<li class="boder_link_show_home">
														<h3 class="h3"><a
																href="">Trợ lý ảo, trí tuệ nhân tạo lần đầu tiên được sử dụng tại Tòa án nhân dân tối cao</a></h3>
													</li>
													@endif

													@if($i==5)
													<li>
														<h3 class="h3"><a
																href="">Người dùng ngân hàng lại điêu đứng vì phần mềm độc hại này</a></h3>
													</li>
													@endif
												@endfor
											</ul>
										</li>
										<li class="col-md-6">
											<ul class="nav row">
												<li class="col-xs-12 hidden-md hidden-lg">
													<!-- Divider Start -->
													<hr class="divider">
													<!-- Divider End -->
												</li>
												@for ($i = 1; $i <= 4; $i++)
													@if($i==3)
														<li class="col-xs-12">
															<!-- Divider Start -->
															<hr class="divider">
															<!-- Divider End -->
														</li>
													@endif
													<li class="col-xs-6">
														<!-- Post Item Start -->
														<div class="post--item post--layout-2">
															<div class="post--img">
																<a href=""
																	class="thumb"><img
																		src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
																		alt=""></a>

																<div class="post--info">
																	<ul class="nav meta">
																		<li><a href="javascript:;">Nguyen Duc Manh</a></li>
																		<li><a href="javascript:;">1 ngày trước</a></li>
																	</ul>

																	<div class="title">
																		<h3 class="h4"><a
																				href=""
																				class="btn-link">Trợ lý ảo, trí tuệ nhân tạo lần đầu tiên được sử dụng tại Tòa án nhân dân tối cao</a></h3>
																	</div>
																</div>
															</div>
														</div>
														<!-- Post Item End -->
													</li>

												@endfor
											
											</ul>
										</li>
									</ul>


								</div>
								<!-- Post Items End -->
							</div>

							<!-- Photo Gallery Start -->
							<div class="col-md-12 ptop--30 pbottom--30">
								<!-- Post Items Title Start -->
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">Khoa Học</h2>

								</div>
								<!-- Post Items Title End -->

								<!-- Post Items Start -->
								<div class="post--items post--items-1" data-ajax-content="outer">
									<ul class="nav row gutter--15" data-ajax-content="inner">
										<li class="col-md-12">
											<!-- Post Item Start -->
											<div class="post--item post--layout-1 post--title-large">
												<div class="post--img">
													<a href=""
														class="thumb"><img
															src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
															alt=""></a>
													<a href=""
														class="cat">Khoa Học</a>
													<a href="" class="icon"><i class="fa fa-eye"></i></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">Nguyen Duc Manh</a></li>
															<li><a href="javascript:;">1 ngày trước</a></li>
														</ul>

														<div class="title text-xxs-ellipsis">
															<h2 class="h4"><a
																	href=""
																	class="btn-link">Pin sinh học tạo ra điện nhờ 3 loại vi khuẩn</a></h2>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
										@for ($i = 1; $i <= 3; $i++)
										<li class="col-md-4 col-xs-6 col-xxs-12">
											<!-- Post Item Start -->
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href=""
														class="thumb"><img
															src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
															alt=""></a>

													<div class="post--info">
														<ul class="nav meta">
															<li><a href="javascript:;">Nguyen Duc Manh</a></li>
															<li><a href="javascript:;">2 ngày trước</a></li>
														</ul>

														<div class="title">
															<h2 class="h4"><a
																	href=""
																	class="btn-link">Tìm thấy 2 siêu Trái Đất nằm rất gần Hệ Mặt Trời</a></h2>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
										@endfor
									

									</ul>

								</div>
								<!-- Post Items End -->
							</div>
							<!-- Photo Gallery End -->
						</div>
					</div>
				</div>
				<!-- Main Content End -->

				<!-- Main Sidebar Start -->
				<div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
					<div class="sticky-content-inner">
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
							<!-- Ad Widget Start -->
							<div class="ad--widget">
								<div class="row">
									<div class="col-sm-6">
										<a href="javascript:;">
											<img src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
												alt="">
										</a>
									</div>

									<div class="col-sm-6">
										<a href="javascript:;">
											<img src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
												alt="">
										</a>
									</div>
								</div>
							</div>
							<!-- Ad Widget End -->
						</div>
						<!-- Widget End -->

						<!-- Widget Start -->
						<div class="widget">
							<div class="widget--title" data-ajax="tab">
								<h2 class="h4">Ý KIẾN NGƯỜI ĐỌC</h2>
							</div>

							<!-- List Widgets Start -->
							<div class="list--widget list--widget-2" data-ajax-content="outer">
								<!-- Post Items Start -->
								<div class="post--items post--items-3">
									<ul class="nav" data-ajax-content="inner">
										@for ($i=1; $i <=5; $i++) 
										<li>
											<!-- Post Item Start -->
											<div class="post--item post--layout-3">
												<div class="post--img">
													<span class="thumb"><img style="margin: auto; background-size: cover ;  width: 60px; height: 60px;   background-image: url({{ asset('blog_template/images/person1.jpg') }})"  alt=""></span>

													<div class="post--info">
														<div class="title">
															<h3 class="h4"><a href="">Công nghệ hiện đại thật tốt, đáng được sử dụng</a> </h3>
														</div>

														<ul class="nav meta">
															<li><span>Nguyen Duc Manh
																</span></li>
															<li><span>03/08/2024</span></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
										@endfor
									
									</ul>


								</div>
								<!-- Post Items End -->
							</div>
							<!-- List Widgets End -->
						</div>
						<!-- Widget End -->

					</div>
				</div> <!-- Main Sidebar End -->
			</div>

		</div>
	</div>
	<!-- Main Content Section End -->

</div>

<div class="colorlib-blog" style="display: none !important">
	<div class="container">
		<div class="row">
			<div class="col-md-8 post_col">

			{{-- @if(! count($posts))
				<p class="lead">Không có bài tin tức nào.</p>
			@else

			@forelse($posts as $post) --}}

			<div class="block-21 d-flex animate-box post">
				{{-- <a href="{{ route('posts.show', $post) }}" class="blog-img" style="background-image: url({{ asset($post->image ? 'storage/' . $post->image->path : 'storage/placeholders/placeholder-image.png')}});"></a> --}}
				<div class="text">
					{{-- <h3 class="heading"><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h3>
					<p class="excerpt">{{ $post->excerpt }}</p></p> --}}
					<div class="meta">
						{{-- <div><a class="date" href="javascript:;"><span class="icon-calendar"></span>{{ $post->created_at->locale('vi')->diffForHumans()  }}</a></div>
						<div><a href="javascript:;"><span class="icon-user2"></span>{{ $post->author->name }} </a></div>
						<div class="comments-count"><a href="{{ route('posts.show', $post) }}javascript:;post-comments"><span class="icon-chat"></span> {{$post->comments_count}}</a></div> --}}
					</div>
				</div>
				</div>
				{{-- @endforeach
				@endif --}}
				<!-- phân trang -->
				{{-- {{$posts->links() }}  --}}
			</div>

			<!-- SIDEBAR: start -->
			<div class="col-md-4 animate-box">
				<div class="sidebar">

					{{-- <x-blog.side-categories :categories="$categories"/>
					<x-blog.side-recent_posts :recent_posts="$recent_posts"/>
					<x-blog.side-tags :tags="$tags"/> --}}
			
				</div>
			</div>
		</div>
	</div>
</div>
	
@endsection

	