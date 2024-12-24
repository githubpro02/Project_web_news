<!--start header -->
<header>
    <div class="topbar d-flex">
        <nav class="navbar navbar-expand">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>
                    
            <div class="top-menu ms-auto"></div>
            <div class="user-box dropdown">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="img_admn--user img-avatar " width="50" height="50" style="border-radius: 50% ; margin: auto; background-size: cover ;  background-image: url({{ auth()->user()->image ?  asset('storage/' . auth()->user()->image->path) : asset('storage/placeholders/user_placeholder.jpg') }})" alt="">
                    <div class="user-info ps-3">
                        <p class="user-name mb-0">{{ auth()->user()->name }}</p>
                        <p class="designattion mb-0">{{ auth()->user()->role->name }}</p>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <div><a onclick="event.preventDefault(); document.getElementById('nav-logout-form').submit();"
						class="dropdown-item" ><i class='bx bx-log-out-circle'></i><span>Đăng xuất</span></a>
                        <form id="nav-logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--end header -->