@extends('main_layouts.master')

@section('title', $category->name . ' - KCNEWS')

@section('content')

<!-- Main Breadcrumb Start -->
<div class="main--breadcrumb">
	<div class="container">
			<ul class="breadcrumb">
				<li><a href="{{ route('home') }}" class="btn-link"><i class="fa fm fa-home"></i>Trang Chủ</a></li>
				<li class="active"><span>{{ $category->name }}</span></li>
			</ul>
	</div>
</div>
	<!-- Main Breadcrumb End -->

<div class="main-content--section pbottom--30">
    <div class="container">
        <div class="row">
                <div class="main--content col-md-8" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <div class="post--item post--single post--title-largest pd--30-0">
                            @if(! count($posts))
                                <p class="lead">Không có danh mục nào cả !</p>
                            @else
    
                            @forelse($posts as $post)
    
                            <div class="block-21 d-flex animate-box post">
                                <a href="{{ route('posts.show', $post) }}" class="blog-img" 
                                style="background-image: url({{ $post->image && !in_array(strtolower($post->image->extension), ['mp4', 'avi', 'mov', 'webm']) ? asset('storage/' . $post->image->path) : asset('storage/placeholders/placeholder-image.png') }});">
                                    {{-- Nếu file là video, thêm thẻ video ẩn --}}
                                    @if(isset($post->image) && in_array(strtolower($post->image->extension), ['mp4', 'avi', 'mov', 'webm']))
                                        <video controls style="width: 100%; height: 100%; object-fit: cover;">
                                            <source src="{{ asset('storage/' . $post->image->path) }}" type="video/{{ $post->image->extension }}">
                                        </video>
                                    @endif
                                </a>
                                <div class="text">
                                    <div class="meta">
                                        <span style="margin-right: 10px;"><span class="icon-calendar"></span> {{ $post->created_at->locale('vi')->diffForHumans() }}</span>
                                        <span class="comments-count"><a href="{{ route('posts.show', $post) }}#post-comments" style="color: inherit;"><span class="icon-chat"></span> {{$post->comments_count}}</a></span>
                                    </div>
                                    <h3 class="heading"><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h3>
                                    <p class="excerpt">{{ $post->excerpt }}</p>
                                    <span><a class="btn btn-link" href="{{ route('posts.show', $post) }}">Đọc thêm</a></span>
                                </div>
                            </div>
                            @endforeach
                            @endif
                            <!-- phân trang -->
                            {{$posts->links() }} 
                        </div>
                    </div>
                </div>
                    <!-- SIDEBAR: start -->
                    <!-- Main Sidebar Start -->
                    <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                        <div class="sticky-content-inner">
                        
                        <!-- Widget Start -->
                        <x-blog.side-outstanding_posts :outstanding_posts="$outstanding_posts"/>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <x-blog.side-vote />
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <x-blog.side-ad_banner />
                        <!-- Widget End -->

                    </div>
                    </div> <!-- Main Sidebar End -->
                </div>
            </div>
        </div>
        <!-- Main Content Section End -->
@endsection

