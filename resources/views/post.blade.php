@extends('main_layouts.master')

@section('title', ' - TDQ ')

@section('custom_css')
	<style>
		.post--body.post--content{
			color: black;
			font-family: "Source Sans Pro", sans-serif;
			font-size: 18px;
		}

		.text.capitalize{
			text-transform: capitalize !important;
		}

		.author-info,
		.post-time{
			margin: 0;
			font-size: 14px !important;
			text-align: right;
		}

	</style>
@endsection

@section('content')

<div class="global-message info d-none"></div>

<!-- Main Breadcrumb Start -->
<div class="main--breadcrumb">
	<div class="container">
			<ul class="breadcrumb">
				<li><a href="{{ route('home') }}" class="btn-link"><i class="fa fm fa-home"></i>Trang Chủ</a></li>
				<li><a href="{{ route('categories.show', $post->category ) }}" class="btn-link">{{ $post->category->name }}</a></li>
				<li class="active"><span>{{ $post->title }}</span></li>
			</ul>
	</div>
</div>
	<!-- Main Breadcrumb End -->

<!-- Main Content Section Start -->
<div class="main-content--section pbottom--30">
        <div class="container">
            <div class="row">
                <!-- Main Content Start -->
                <div class="main--content col-md-8" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <!-- Post Item Start -->
                        <div class="post--item post--single post--title-largest pd--30-0">
                            <div class="post--cats">
                                <ul class="nav">
                                    <li><span><i class="fa fa-folder-open-o"></i></span></li>
									@for($i = 0; $i <  5 ; $i++)
                                    <li><a class="text capitalize" href="">nga-ukraina</a></li>
									@endfor
                                </ul>
                            </div>

                            <div class="post--info">
                                <ul class="nav meta">
									<li class="text capitalize"><a href="#">5/8/2024<a></li>
                                    <li><a href="#">Nguyen Duc Manh</a></li>
                                    <li><span><i class="fa fm fa-eye"></i>10</span></li>
                                    <li><a href="#"><i class="fa fm fa-comments-o"></i>2</a></li>
                                </ul>

                                <div class="title">
                                    <h2 class="post_title h4">Nga chỉ trích EU trao tư cách ứng viên cho Ukraine</h2>
                                </div>
                            </div>
                            <div class="post--body post--content">
								"Với quyết định trao cho Ukraine và Moldova tư cách là các nước ứng cử viên, Liên minh châu Âu (EU) 
								khẳng định rằng họ tiếp tục lợi dụng các nước SNG trên phương diện địa chính trị để kiềm chế Nga. Họ không tính 
								tới hậu quả tiêu cực của động thái như vậy", phát ngôn viên Bộ Ngoại giao Nga Maria Zakharova cho biết hôm 24/6. SNG 
								là Cộng đồng các Quốc gia Độc lập gồm các nước từng thuộc Liên Xô.Phát ngôn viên Bộ Ngoại giao Nga cáo buộc bằng các 
								mở rộng sang Ukraine và Moldova, EU đã "hy sinh những lý tưởng dân chủ của mình" cho "sự bành trướng không giới hạn và 
								nô dịch về kinh tế, chính trị với các nước láng giềng".
								<div class="post--img">
									<a href="#" class="thumb"><img src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
										alt=""></a>
								</div>
								Người phát ngôn Bộ Ngoại giao Nga Maria Zakharova tại St.Petersburg hôm 15/6. Ảnh: AFP.
								Người phát ngôn Điện Kremlin Dmitry Peskov trước đó cũng bình luận về việc EU trao tư cách ứng viên cho Ukraine, gọi đây là 
								"vấn đề nội bộ của châu Âu". "Điều quan trọng là tất cả những quá trình này không gây thêm vấn đề cho chúng tôi và cho quan hệ 
								của chúng tôi với các quốc gia này", ông Peskov nói.Bộ trưởng Ngoại giao Nga Sergey Lavrov cũng nhận định việc Ukraine và Moldova 
								muốn gia nhập EU không gây ra rủi ro nào cho Moskva vì khối này không phải liên minh quân sự. Tuy nhiên, ông Lavrov cáo buộc "EU và 
								NATO đang muốn gây chiến" với Nga.EU hôm 23/6 quyết định cấp tư cách ứng viên cho Ukraine và nước láng giềng Moldova trong hội nghị 
								thượng đỉnh tại Brussels, Bỉ. Tổng thống Ukraine Zelensky ca ngợi đây là "thời khắc lịch sử có một không hai trong quan hệ Ukraine - EU, 
								khởi đầu cho trang sử mới của châu Âu".Sau khi được phê duyệt tư cách ứng viên, Ukraine sẽ phải nỗ lực để đáp ứng Tiêu chí Copenhagen 
								được EU đề ra đối với các nước xin gia nhập, về nền kinh tế thị trường tự do cũng như các giá trị về dân chủ, nhân quyền.Tổng thống Ukraine 
								đã nhiều lần thúc giục EU cho phép Ukraine gia nhập ngay lập tức theo cái ông mô tả là "thủ tục đặc biệt mới", song không nêu chi tiết. Lãnh 
								đạo Pháp, Đức, Tây Ban Nha và Hà Lan hồi tháng 3 đã bác bỏ lời kêu gọi về nhanh chóng kết nạp.
                            </div>
                        </div>
                        <!-- Post Item End -->

                        <!-- Advertisement Start -->
                        <div class="ad--space pd--20-0-40">
							<p class="author-info">Người viết: Nguyen Duc Manh</p>
							<p class="post-time">Thời gian: 4 ngày trước</p>
                        </div>
                        <!-- Advertisement End -->

                        <!-- Post Tags Start -->
                        <div class="post--tags">
                            <ul class="nav">
                                <li><span><i class="fa fa-tags"></i> Từ khóa </span></li>
								@for($i = 0; $i <  5 ; $i++)
                                    <li><a class="text capitalize" href="">nga-ukraina</a></li>
								@endfor
                            </ul>
                        </div>
                        <!-- Post Tags End -->

                        <!-- Post Social Start -->
                        <div class="post--social pbottom--30">
                            <span class="title"><i class="fa fa-share-alt"></i> Chia sẻ </span>
                             
                            <!-- Social Widget Start -->
                            <div class="social--widget style--4">
                                <ul class="nav">
                                    <li><a href="javascript:"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="javascript:"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="javascript:"><i class="fa fa-rss"></i></a></li>
                                    <li><a href="javascript:"><i class="fa fa-youtube-play"></i></a></li>
                                </ul>
                            </div>
                            <!-- Social Widget End -->
                        </div>
                        <!-- Post Social End -->

                    
                        <!-- Comment List Start -->
                        <div class="comment--list pd--30-0">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title">
                                <h2 class="h4"><span class="post_count_comment h4" >2 </span> bình luận</h2>
                                <i class="icon fa fa-comments-o"></i>
                            </div>
                            <!-- Post Items Title End -->

                            <ul class="comment--items nav">
                                <li>
                                    <!-- Comment Item Start -->
                                   <div class="comment--item clearfix">
										<div class="comment--img float--left">
                                            <img style="border-radius: 50%; margin: auto; background-size: cover ;  width: 68px; height: 68px;   background-image: url({{ asset('blog_template/images/person2.jpg') }})"  alt="">
										</div>
										<div class="comment--info">
											<div class="comment--header clearfix">
												<p class="name">Nguyen Duc Manh</p>
												<p class="date">3 ngày trước</p>
												<a href="javascript:;" class="reply"><i class="fa fa-flag"></i></a>
											</div>
											<div class="comment--content">
												<p>Hay lắm</p>
												<p class="star">
													<span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
												</p>
											</div>
										</div>
                                    </div>
                                    <!-- Comment Item End -->
                                </li>

								<li>
                                    <!-- Comment Item Start -->
                                   <div class="comment--item clearfix">
										<div class="comment--img float--left">
                                            <img style="border-radius: 50%; margin: auto; background-size: cover ;  width: 68px; height: 68px;   background-image: url({{ asset('blog_template/images/person2.jpg') }})"  alt="">
										</div>
										<div class="comment--info">
											<div class="comment--header clearfix">
												<p class="name">Nguyen Duc Manh</p>
												<p class="date">3 ngày trước</p>
												<a href="javascript:;" class="reply"><i class="fa fa-flag"></i></a>
											</div>
											<div class="comment--content">
												<p>Hay lắm</p>
												<p class="star">
													<span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
												</p>
											</div>
										</div>
                                    </div>
                                    <!-- Comment Item End -->
                                </li>
                            </ul>
							
                        </div>
                        <!-- Comment List End -->

                        <!-- Comment Form Start -->
                        <div class="comment--form pd--30-0">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title">
								<h2 class="h4">Viết bình luận</h2>
                                <i class="icon fa fa-pencil-square-o"></i>
                            </div>
                            <!-- Post Items Title End -->
							
                            <div class="comment-respond">

								<form action="" data-form="validate">
									<p>Đừng lo ! Địa chỉ email của bạn sẽ không được công bố (*).</p>
									<div class="row">
										<div class="col">
											<label>
												<span>Comment *</span>
												<textarea name="comment" id="comment" class="form-control" required></textarea>
											</label>
										</div>
										<div class="col-md-12">
											<button type="submit" class="btn btn-primary">Đăng</button>
										</div>
									</div>
								</form>

								{{-- @guest
								<p class="h4">
									<a href="{{ route('login') }}">Đăng nhập</a> hoặc 
									<a href="{{ route('register') }}">Đăng ký</a> để bình luận bài viết
								</p>
								@endguest --}}
                            </div>

                        </div>
                        <!-- Comment Form End -->

						    <!-- Post Related Start -->
						<div class="post--related ptop--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">Có thể bạn cũng thích</h2>
                            </div>
                            <!-- Post Items Title End -->
                           
							<!-- Post Items Start -->
                            <div class="post--items post--items-2" data-ajax-content="outer">
                                <ul class="nav row" data-ajax-content="inner">
										@for($i=0;$i<4;$i++)
                                        <li class="col-sm-12 pbottom--30">
											<!-- Post Item Start -->
											<div class="post--item post--layout-3">
												<div class="post--img">
													<a href=""
														class="thumb">
                                                        <img src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
															alt="">
                                                    </a>

													<div class="post--info">
													
														<div class="title">
															<h3  class="h4">
																<a href="" class="btn-link">Mưa lũ càn quét miền nam Trung Quốc</a>
															</h3>
                                                            <p style="font-size:16px" >
																<span >Nhiều vùng ở miền nam Trung Quốc hứng chịu bão lớn, gây ngập lụt nghiêm trọng ở nhiều thành phố và lở đất ở vùng nông thôn</span>
                                                            </p>
														</div>

                                                        <ul style="padding-top:10px" class="nav meta ">
															<li><a href="javascript:;">Nguyen Duc Manh</a>
															</li>
															<li><a href="javascript:;">2 ngày trước</a></li>
                                                            <li><a  href="javascript:;"><i class="fa fm fa-comments"></i>2</a></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
                                        @endfor

                                </ul>

                                <!-- Preloader Start -->
                                <div class="preloader bg--color-0--b" data-preloader="1">
                                    <div class="preloader--inner"></div>
                                </div>
                                <!-- Preloader End -->
                            </div>
                            <!-- Post Items End -->
                        </div>
                        <!-- Post Related End -->

                    </div>
                </div>
                <!-- Main Content End -->

                     
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


