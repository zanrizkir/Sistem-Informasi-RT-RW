<div class="topbar">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="full">
            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
            <div class="logo_section">
                <a href="index.html"><img class="img-responsive" src="{{ asset('assets/images/logo/logo.png') }}"
                        alt="#" /></a>
            </div>
            <div class="right_topbar">
                <div class="icon_info">
                    <ul>
                        {{-- <p>Kebon Lega II</p> --}}
                    </ul>
                    @if (Auth::user()->role->slug === 'admin-rw')
                    <ul class="user_profile_dd">
                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle"
                                    src="{{ asset('assets/images/layout_img/user_img.jpg') }}" alt="#" /><span
                                    class="name_user">{{Auth::user()->name}}</span></a>
                            <div class="dropdown-menu">
                                {{-- <a class="dropdown-item" href="profile.html">My Profile</a>
                                <a class="dropdown-item" href="settings.html">Settings</a>
                                <a class="dropdown-item" href="help.html">Help</a> --}}
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <span>Log Out</span>
                                    <i class="fa fa-sign-out"></i></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                    @elseif(Auth::user()->role->slug === 'admin-rt')
                    <ul class="user_profile_dd">
                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle"
                                    src="asset('assets/images/layout_img/user_img.jpg') }}" alt="#" /><span
                                    {{-- src="{{ asset('/image/rt/' . $rt->image) }}" alt="#" /><span --}}
                                    class="name_user">{{Auth::user()->name}}</span></a>
                            <div class="dropdown-menu">
                                {{-- <a class="dropdown-item" href="profile.html">My Profile</a>
                                <a class="dropdown-item" href="settings.html">Settings</a>
                                <a class="dropdown-item" href="help.html">Help</a> --}}
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <span>Log Out</span>
                                    <i class="fa fa-sign-out"></i></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</div>
