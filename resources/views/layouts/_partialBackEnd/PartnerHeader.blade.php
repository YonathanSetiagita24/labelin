<div id="header" class="app-header">
    <div class="navbar-header">
        <button type="button" class="navbar-desktop-toggler" data-toggle="app-sidebar-minify">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        @php
            $setting_web =DB::table('setting_web')->first();
        @endphp
        <a href="" class="navbar-brand">
            <img src="{{ Storage::url('public/img/setting_web/') . $setting_web->logo_dark }}" alt="" style="width: 150px">
        </a>
    </div>


    <div class="navbar-nav">
        <div class="navbar-item dropdown">
            <a href="{{ route('home') }}" target="_blank" class="navbar-link dropdown-toggle icon">
                <img src="{{ asset('template/backend/assets/img/web.png') }}" alt="Halaman Website" height="25px">
                Visit Website
            </a>
        </div>

        <div class="navbar-item navbar-user dropdown">
            <a href="#" class="navbar-link dropdown-toggle d-flex" data-bs-toggle="dropdown">
                <span class="d-none d-md-inline">Hi, {{ Session::get('name-partner') }}</span>
                @if (Session::get('photo-partner') == null)
                <img src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim(Session::get('email-partner')))) }}&s=30"
                alt="Photo" />
                @else
                <img src="{{ asset('storage/uploads/photos/' . session()->get('photo-partner')) }}"
                    alt="Photo" />
                @endif
            </a>
        </div>
    </div>

</div>
