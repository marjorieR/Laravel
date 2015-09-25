
<!-- 2. $MAIN_NAVIGATION ===========================================================================

	Main navigation
-->
<div id="main-navbar" class="navbar navbar-inverse" role="navigation">
<!-- Main menu toggle -->
<button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>

<div class="navbar-inner">
<!-- Main navbar header -->
<div class="navbar-header">

    <a href="index.html" class="navbar-brand">

        Cinéma
    </a>

    <!-- Main navbar toggle -->
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

</div> <!-- / .navbar-header -->

<div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
<div>
<ul class="nav navbar-nav">

    <li class="dropdown">
      <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-home"></i></i> Home</a>

    </li>

    <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-film"></i> Films</a>
        <ul class="dropdown-menu">
            <li><a href="{{ route('movies.index') }}">Voir les Films</a></li>
            <li><a href="{{ route('movies.create') }}">Créer un Films</a></li>

        </ul>

    </li>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i>  Categories</a>
        <ul class="dropdown-menu">
            <li><a href="{{route('categories.index')}}">Voir les categories</a></li>
            <li><a href="{{ route('categories.create') }}">Créer une categories</a></li>

        </ul>

    </li>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i>  Acteurs</a>
        <ul class="dropdown-menu">
            <li><a href="{{ route('actors.index') }}">Voir les acteurs</a></li>
            <li><a href="{{ route('actors.create') }}">Créer un acteurs</a></li>


        </ul>

    </li>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-video-camera"></i> Réalisateurs</a>
        <ul class="dropdown-menu">
            <li><a href="{{ route('directors.index') }}">Voir les réalisateurs</a></li>
            <li><a href="{{ route('directors.create') }}">Créer un réalisateurs</a></li>

        </ul>

    </li>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  Useurs</a>
        <ul class="dropdown-menu">
            <li><a href="{{ route('users.index') }}">Voir les utilisateurs</a></li>
            <li><a href="{{ route('users.create') }}">Créer un utilisateurs</a></li>

        </ul>

    </li>
</ul> <!-- / .navbar-nav -->

<div class="right clearfix">
<ul class="nav navbar-nav pull-right right-navbar-nav">

<!-- 3. $NAVBAR_ICON_BUTTONS =======================================================================

							Navbar Icon Buttons

							NOTE: .nav-icon-btn triggers a dropdown menu on desktop screens only. On small screens .nav-icon-btn acts like a hyperlink.

							Classes:
							* 'nav-icon-btn-info'
							* 'nav-icon-btn-success'
							* 'nav-icon-btn-warning'
							* 'nav-icon-btn-danger'
-->
<li class="nav-icon-btn nav-icon-btn-danger dropdown">
    <a href="#notifications" class="dropdown-toggle" data-toggle="dropdown">
        <span class="label">{{  \App\Model\Notifications::count() }}</span>
        <i class="nav-icon fa fa-bullhorn"></i>
        <span class="small-screen-text">Notifications</span>
    </a>

    <!-- NOTIFICATIONS -->

    <!-- Javascript -->
    <script>
        init.push(function () {
            $('#main-navbar-notifications').slimScroll({ height: 250 });
        });
    </script>
    <!-- / Javascript -->

    <div class="dropdown-menu widget-notifications no-padding" style="width: 300px">
        <div class="notifications-list" id="main-navbar-notifications">


            @forelse(\App\Model\Notifications::orderBy('created_at','desc')->take(15)->get() as $notification)

                <div class="notification">

                    <div class="notification-title text-{{ $notification->criticity or "info" }}">{{ $notification->message }}</div>

                    @if($notification->category)

                        <div class="notification-link">
                            <a href="{{ $notification->category['id'] }}" >
                                {{ $notification->category['title'] }}
                            </a>
                        </div>

                    @endif

                    <div class="notification-ago"></div>
                        {{ \Carbon\Carbon::createFromTimestamp(strtotime($notification->created_at))->diffForHumans() }}
                    <div class="notification-icon fa fa-hdd-o bg-{{ $notification->criticity or "info" }}"></div>

                </div> <!-- / .notification -->

            @empty

            @endforelse

        </div> <!-- / .notifications-list -->
        <a href="#" class="notifications-link">MORE NOTIFICATIONS</a>
    </div> <!-- / .dropdown-menu -->
</li>


<li class="nav-icon-btn nav-icon-btn-success dropdown">
    <a href="#messages" class="dropdown-toggle" data-toggle="dropdown">
        {{--<span class="label">10</span>--}}
        <i class="nav-icon fa fa-shopping-cart"></i>
        <span class="small-screen-text">Income messages</span>
    </a>

    <!-- MESSAGES -->

    <!-- Javascript -->
    <script>
        init.push(function () {
            $('#main-navbar-messages').slimScroll({ height: 250 });
        });
    </script>
    <!-- / Javascript -->

    <div class="dropdown-menu widget-messages-alt no-padding" style="width: 300px;">
        <div class="messages-list" id="main-navbar-messages">

            <div class="message">
                <img src="assets/demo/avatars/2.jpg" alt="" class="message-avatar">
                <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                <div class="message-description">
                    from <a href="#">Robert Jang</a>
                    &nbsp;&nbsp;·&nbsp;&nbsp;
                    2h ago
                </div>
            </div> <!-- / .message -->

            <div class="message">
                <img src="assets/demo/avatars/3.jpg" alt="" class="message-avatar">
                <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                <div class="message-description">
                    from <a href="#">Michelle Bortz</a>
                    &nbsp;&nbsp;·&nbsp;&nbsp;
                    2h ago
                </div>
            </div> <!-- / .message -->

            <div class="message">
                <img src="assets/demo/avatars/4.jpg" alt="" class="message-avatar">
                <a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
                <div class="message-description">
                    from <a href="#">Timothy Owens</a>
                    &nbsp;&nbsp;·&nbsp;&nbsp;
                    2h ago
                </div>
            </div> <!-- / .message -->

            <div class="message">
                <img src="assets/demo/avatars/5.jpg" alt="" class="message-avatar">
                <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                <div class="message-description">
                    from <a href="#">Denise Steiner</a>
                    &nbsp;&nbsp;·&nbsp;&nbsp;
                    2h ago
                </div>
            </div> <!-- / .message -->

            <div class="message">
                <img src="assets/demo/avatars/2.jpg" alt="" class="message-avatar">
                <a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
                <div class="message-description">
                    from <a href="#">Robert Jang</a>
                    &nbsp;&nbsp;·&nbsp;&nbsp;
                    2h ago
                </div>
            </div> <!-- / .message -->

            <div class="message">
                <img src="assets/demo/avatars/2.jpg" alt="" class="message-avatar">
                <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                <div class="message-description">
                    from <a href="#">Robert Jang</a>
                    &nbsp;&nbsp;·&nbsp;&nbsp;
                    2h ago
                </div>
            </div> <!-- / .message -->

            <div class="message">
                <img src="assets/demo/avatars/3.jpg" alt="" class="message-avatar">
                <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                <div class="message-description">
                    from <a href="#">Michelle Bortz</a>
                    &nbsp;&nbsp;·&nbsp;&nbsp;
                    2h ago
                </div>
            </div> <!-- / .message -->

            <div class="message">
                <img src="assets/demo/avatars/4.jpg" alt="" class="message-avatar">
                <a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
                <div class="message-description">
                    from <a href="#">Timothy Owens</a>
                    &nbsp;&nbsp;·&nbsp;&nbsp;
                    2h ago
                </div>
            </div> <!-- / .message -->

            <div class="message">
                <img src="assets/demo/avatars/5.jpg" alt="" class="message-avatar">
                <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                <div class="message-description">
                    from <a href="#">Denise Steiner</a>
                    &nbsp;&nbsp;·&nbsp;&nbsp;
                    2h ago
                </div>
            </div> <!-- / .message -->

            <div class="message">
                <img src="assets/demo/avatars/2.jpg" alt="" class="message-avatar">
                <a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
                <div class="message-description">
                    from <a href="#">Robert Jang</a>
                    &nbsp;&nbsp;·&nbsp;&nbsp;
                    2h ago
                </div>
            </div> <!-- / .message -->

        </div> <!-- / .messages-list -->
        <a href="#" class="messages-link">MORE MESSAGES</a>
    </div> <!-- / .dropdown-menu -->
</li>
<!-- /3. $END_NAVBAR_ICON_BUTTONS -->

<li>
    <form class="navbar-form pull-left">
        <input type="text" class="form-control" placeholder="Search">
    </form>
</li>

<li class="dropdown">
    <a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
        <img src="{{ Auth::user()->images }}" alt="">
        <span>{{ Auth::user()->firstname }}</span>
    </a>
    <ul class="dropdown-menu">
        <li><a href="#"><span class="label label-warning pull-right">New</span>Profile</a></li>
        <li><a href="{{ route('account')}}"><span class="badge badge-primary pull-right">New</span>Account</a></li>
        <li><a href="#"><i class="dropdown-icon fa fa-cog"></i>&nbsp;&nbsp;Settings</a></li>
        <li class="divider"></li>
        <li><a href="{{ url('auth/logout')}}"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
    </ul>
</li>
</ul> <!-- / .navbar-nav -->
</div> <!-- / .right -->
</div>
</div> <!-- / #main-navbar-collapse -->
</div> <!-- / .navbar-inner -->
</div> <!-- / #main-navbar -->
<!-- /2. $END_MAIN_NAVIGATION -->