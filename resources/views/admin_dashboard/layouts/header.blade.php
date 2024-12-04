<?php
    use App\Models\Post;
    use App\Models\Comment;
    use App\Models\Tag;
    $newComment = Comment::latest()->take(10)->get();
    foreach ($newComment as $comment) {
        $posts_comments[] = Post::where('id', $comment->post_id)->get();
    }

?>

<!--start header -->
        <header>
            <div class="topbar d-flex">
                <nav class="navbar navbar-expand">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>
                    
                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item dropdown dropdown-large">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">10</span>
                                    <i class='bx bx-comment'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:;">
                                        <div class="msg-header">
                                            <p class="msg-header-title">Tin nhắn bình luận</p>
                                            <p class="msg-header-clear ms-auto">Đánh dấu tất cả đã đọc</p>
                                        </div>
                                    </a>

                                    <div class="header-message-list">
                                        @for ($i = 0; $i < 10 ; $i++ )
                                        <a class="dropdown-item" href="{{ route('posts.show', $posts_comments[$i][0] ) }}">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img class="img_admn--user img-avatar " width="50" height="50" style="border-radius: 50% ; margin: auto; background-size: cover ;  background-image: url({{ $posts_comments[$i][0]->comments()->orderBy('id','DESC')->take(1)->get()[0]->user->image ?  asset('storage/' . $posts_comments[$i][0]->comments()->orderBy('id','DESC')->take(1)->get()[0]->user->image->path) : asset('storage/placeholders/user_placeholder.jpg') }})" alt="">
                                                </div>
                                                <div style="margin-left: 10px;" class="flex-grow-1">
                                                    <h6 class="msg-name">{{ $posts_comments[$i][0]->comments()->orderBy('id','DESC')->take(1)->get()[0]->user->name }}<span class="msg-time"> đã bình luận bài viết</span></h6>
                                                    <h6 class="msg-name">{{ Str::limit($posts_comments[$i][0]->title,32) }}</h6>
                                                </div>
                                            </div>
                                        </a>
                                        @endfor
                                     
                                    </div>
                                    <a href="javascript:;">
                                        <div class="text-center msg-footer">Xem tất cả</div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="img_admn--user img-avatar " width="50" height="50" style="border-radius: 50% ; margin: auto; background-size: cover ;  background-image: url({{ auth()->user()->image ?  asset('storage/' . auth()->user()->image->path) : asset('storage/placeholders/user_placeholder.jpg') }})" alt="">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0">{{ auth()->user()->name }}</p>
                                <p class="designattion mb-0">{{ auth()->user()->role->name }}</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            {{-- <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Hồ sơ</span></a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Cài đặt</span></a>
                            </li> --}}
                            </li>
                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li>
                            
                            <li><a onclick="event.preventDefault(); document.getElementById('nav-logout-form').submit();"
							     class="dropdown-item" ><i class='bx bx-log-out-circle'></i><span>Đăng xuất</span></a>
                                <form id="nav-logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->