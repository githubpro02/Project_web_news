@extends('main_layouts.master')

@section('title','TDQ - Không tìm thấy trang')
@section('content')
<div class="wrapper">
	<!-- Main Content Section Start -->
	<div class="main-content--section pbottom--30">
		<div class="container">
            <div class="row">
                <div class="cold-md-8 offset-md-2 text-center">
                    <h1 style="font-size: 162px; color: green; font-weight: bold;">404</h1>
                    <h2 class="h2">Trang không tồn tại</h2>
                    <p>Chúng tôi xin lỗi, trang bạn yêu cầu có thể được tìm thấy. Vui lòng quay lại trang chủ.</p>
                    <a href="{{ route('home') }}" class="btn btn-primary">Quay lại trang chủ</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
