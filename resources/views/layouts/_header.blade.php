<!-- <div class="navbar-fixed"> -->
<div class="">
    <ul id="dropdown-search" class="dropdown-content">
        <li><a href="#">Article</a></li>
        <li><a href="#">Archive</a></li>
        <li><a href="#">Journal</a></li>
    </ul>
    <img src="https://via.placeholder.com/1200x200" style="margin-bottom: -6px; width: 100%; height: 200px;">
    <nav>
        <div class="nav-wrapper container">
            <!-- <a href="#">Proust</a> -->
            <a href="#" class="left sidenav-trigger" data-target="sidenav"><i class="fas fa-bars"></i></a>
            <ul class="left hide-on-med-and-down">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('about.about') }}">About</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                <li><a href="{{ route('search') }}">Search</a></li>
                <!-- <li><a href="{{ route('search') }}" class="dropdown-trigger" data-target="dropdown-search">Search</a></li> -->
                <li><a href="browse">Browse</a></li>
                <li><a href="{{ route('announcement') }}">Announcement</a></li>
            </ul>
            <form id="navbar-search" class="right" action="#" method="post">
                <div class="input-field">
                    <input id="nav-search" type="search" name="" value="" required>
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
                </div>
            </form>
        </div>
    </nav>
</div>

<ul id="sidenav" class="sidenav">
    <li><a href="{{ route('index') }}">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="{{ route('login') }}">Login</a></li>
    <li><a href="{{ route('register') }}">Register</a></li>
    <li><a href="{{ route('search') }}">Search</a></li>
    <li><a href="browse">Browse</a></li>
    <li><a href="{{ route('announcement') }}">Announcement</a></li>
</ul>
