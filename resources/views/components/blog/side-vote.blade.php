 <!-- Widget Start -->
 <div class="widget">
    <div class="widget--title" data-ajax="tab">
        <h2 class="h4">Bình chọn</h2>

        <div class="nav">
            <a href="#" class="prev btn-link" data-ajax-action="load_prev_poll_widget">
                <i class="fa fa-long-arrow-left"></i>
            </a>

            <span class="divider">/</span>

            <a href="#" class="next btn-link" data-ajax-action="load_next_poll_widget">
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
                <form action="#">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="option-1">
                            <span style="background: url('{{ asset('kcnew/frontend/img/Flag_barzill.png') }}') no-repeat left center; padding-left: 30px;">
                                Brasil
                            </span>
                        </label>

                        <p>55%<span style="width: 55%;"></span></p>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="option-2">
                            <span style="background: url('{{ asset('kcnew/frontend/img/Flag_Agrennal.png') }}') no-repeat left center; padding-left: 30px;">
                                Argentina
                            </span>
                        </label>

                        <p>28%<span style="width: 28%;"></span></p>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="option-2">
                            <span style="background: url('{{ asset('kcnew/frontend/img/Flag_tay_ban_nha.png') }}') no-repeat left center; padding-left: 30px;">
                                Tây Ban Nha
                            </span>
                        </label>

                        <p>15%<span style="width: 15%;"></span></p>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="option-2">
                            <span style="background: url('{{ asset('kcnew/frontend/img/Flag_bo-dao-nha.png') }}') no-repeat left center; padding-left: 30px;">
                                Bồ Đào Nha
                            </span>
                        </label>

                        <p>10%<span style="width: 10%;"></span></p>
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
