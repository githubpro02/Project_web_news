@extends('main_layouts.master')

@section('title',' KCNEWS - Liên hệ')

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
										<p><span><i class="fa fa-facebook"></i></span> <a href="https://www.facebook.com/profile.php?id=100024515460327">https://www.facebook.com</a></p>
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

					<!-- <x-blog.message :status="'success'" /> -->

					<div class="col-md-6">
						<!-- <form onsubmit="return false;" autocomplete="off" method="POST" action="{{ route('contact.store')}}"> -->
						<form onsubmit="return false;" autocomplete="off" method="POST" >
							@csrf
							<div class="row form-group">
								<div class="col-md-6">
									<x-blog.form.input value='{{ old("first_name")}}' placeholder="Họ của bạn" name="first_name"/>
									<small class="error text-danger first_name"></small>
								</div>
								<div class="col-md-6">
									<x-blog.form.input value='{{ old("last_name")}}'  placeholder="Tên của bạn"  name="last_name"/>
									<small class="error text-danger last_name"></small>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<x-blog.form.input value='{{ old("email")}}'  type="email" placeholder="Địa chỉ Email" name="email"/>
									<small class="error text-danger email"></small>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<x-blog.form.input value='{{ old("subject")}}' placeholder="Tiêu đề"  name="subject"/>
									<small class="error text-danger subject"></small>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<x-blog.form.textarea value='{{ old("message")}}'  placeholder="Nội dung bạn muốn nói về chúng tôi"  name="message"/>
									<small class="error text-danger message"></small>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" value="Gửi đi" class="btn btn-primary send-message-btn">
							</div>
						</form>		

						<x-blog.message :status="'success'" />

					</div>
					<div class="col-md-6">
						<!-- Thêm bản đồ minh họa -->
						<div class="map-container">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7630333.005776548!2d96.78384264999998!3d20.962611199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313452efff394ce3%3A0x391a39d4325be464!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBQaGVuaWthYQ!5e0!3m2!1svi!2sus!4v1732941076460!5m2!1svi!2sus" 
								width="600" 
								height="450" 
								style="border:0;" 
								allowfullscreen="" 
								loading="lazy" 
								referrerpolicy="no-referrer-when-downgrade">
							</iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection

@section('custom_js')

<script>
	$(document).on('click', '.send-message-btn', (e) => {
		e.preventDefault();

		let $this = e.target;

		let csrf_token = $($this).parents("form").find("input[name='_token']").val();
		let first_name =  $($this).parents("form").find("input[name='first_name']").val();
		let last_name =  $($this).parents("form").find("input[name='last_name']").val();
		let email =  $($this).parents("form").find("input[name='email']").val();
		let subject =  $($this).parents("form").find("input[name='subject']").val();
		let message =  $($this).parents("form").find("textarea[name='message']").val();

		
		let formData = new FormData();
		formData.append('_token', csrf_token);
		formData.append('first_name', first_name);
		formData.append('last_name', last_name);
		formData.append('email', email);
		formData.append('subject', subject);
		formData.append('message', message);

		console.log(csrf_token);

		$.ajax({
			url: "{{ route('contact.store') }}",
			data: formData,
			type: 'POST',
			dataType: 'JSON',
			processData: false,
			contentType: false,
			success: function (data) {
				if(data.success){
					$('.global-message').addClass('alert alert-info');
					$('.global-message').fadeIn();
					$('.global-message').text(data.message);

					clearData( $($this).parents("form"), [
						'first_name', 'last_name', 'email', 'subject', 'message'
					]);

					setTimeout(() => {
						$(".global-message").fadeOut();
					}, 7000)
				}else{
					for ( const error in data.errors ){
						$("small."+error).text(data.errors[error]);
					}
				}
			}
		})
	})
</script>

@endsection