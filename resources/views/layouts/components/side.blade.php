<nav id="sidebar">
    <div class="sidebar_blog_1">
        <div class="sidebar-header">
            <div class="logo_section">
                <a href="index.html"><img class="logo_icon img-responsive"
                        src="{{ asset('assets/images/logo/logo_icon.png') }}" alt="#" /></a>
            </div>
        </div>
        <div class="sidebar_user_info">
            <div class="icon_setting"></div>
            <div class="user_profle_side">
                <div class="user_img"><img class="img-responsive"
                        src="{{ asset('assets/images/layout_img/user_img.jpg') }}" alt="#" /></div>
                <div class="user_info">
                    <h6>Bambang</h6>
                    <p><span class="online_animation"></span> Online</p>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar_blog_2">
        <ul class="list-unstyled components">
            @if (Auth::user()->role->slug === 'admin-rw')
                <h4>Halaman Admin Rw</h4>
                <li><a href="{{ route('berita.index') }}"><i class="fa fa-newspaper-o green_color2"></i>
                        <span>Berita</span></a></li>
                <li><a href="{{ route('rt.index') }}"><i class="fa fa-user blue_color2"></i>
                        <span>Tabel Rt</span></a>
                </li>
                @elseif(Auth::user()->role->slug === 'admin-rt')
                <h4>Halaman Admin RT</h4>
                {{-- <li><a href="{{ route('berita.index') }}"><i class="fa fa-newspaper-o green_color2"></i>
                    <span>Berita</span></a></li> --}}
                    <li><a href="{{ route('penduduk.index') }}"><i class="fa fa-user blue_color2"></i>
                        <span>Penduduk</span></a>
                    </li>
                    @endif

        </ul>
    </div>
</nav>
