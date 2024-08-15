@extends('main_layouts.master')

@section('title','Liên hệ')

@section('content')
<div class="global-message info d-none"></div>

<div class="colorlib-contact">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-12 animate-box">
						<h2>Thông Tin Liên Hệ</h2>
						<div class="row">
							<div class="col-md-12">
								<div class="contact-info-wrap-flex">
									<div class="con-info">
										<p><span><i class="icon-location-2"></i></span>Khoa Công nghệ thông tin, Trường Đại học PHENIKAA</p>
									</div>
									<div class="con-info">
										<p><span><i class="icon-phone3"></i></span> <a href="tel://0123456789">+0123 456 (789)</a></p>
									</div>
									<div class="con-info">
										<p><span><i class="icon-paperplane"></i></span> <a href="mailto:20010783@st.phenikaa-uni.edu.vn">20010783@st.phenikaa-uni.edu.vn</a></p>
									</div>
									<div class="con-info">
										<p><span><i class="icon-globe"></i></span> <a href="#">20010783@st.phenikaa-uni.edu.vn</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h2>Liên hệ với chúng tôi</h2>
					</div>


					<div class="col-md-6">
						<form action="#">
							<div class="row form-group">
								<div class="col-md-6">
									<!-- <label for="fname">First Name</label> -->
									<input type="text" id="fname" class="form-control" placeholder="Họ của bạn">
								</div>
								<div class="col-md-6">
									<!-- <label for="lname">Last Name</label> -->
									<input type="text" id="lname" class="form-control" placeholder="Tên của bạn">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="email">Email</label> -->
									<input type="text" id="email" class="form-control" placeholder="Địa chỉ Email">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="subject">Subject</label> -->
									<input type="text" id="subject" class="form-control" placeholder="Tiêu đề">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="message">Message</label> -->
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Nội dung bạn muốn nói với chúng tôi"></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" value="Gửi đi" class="btn btn-primary">
							</div>
						</form>		
					</div>
					<div class="col-md-6">
						<div id="map" class="colorlib-map"></div>
					</div>
				</div>
		</div>
@endsection

@section('custom_js')

@endsection