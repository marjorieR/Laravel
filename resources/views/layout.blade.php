
<!DOCTYPE html>
<!--

TABLE OF CONTENTS.

Use search to find needed section.

===================================================================

|  1. $BODY                        |  Body                        |
|  2. $MAIN_NAVIGATION             |  Main navigation             |
|  3. $NAVBAR_ICON_BUTTONS         |  Navbar Icon Buttons         |
|  4. $MAIN_MENU                   |  Main menu                   |
|  5. $UPLOADS_CHART               |  Uploads chart               |
|  6. $EASY_PIE_CHARTS             |  Easy Pie charts             |
|  7. $EARNED_TODAY_STAT_PANEL     |  Earned today stat panel     |
|  8. $RETWEETS_GRAPH_STAT_PANEL   |  Retweets graph stat panel   |
|  9. $UNIQUE_VISITORS_STAT_PANEL  |  Unique visitors stat panel  |
|  10. $SUPPORT_TICKETS            |  Support tickets             |
|  11. $RECENT_ACTIVITY            |  Recent activity             |
|  12. $NEW_USERS_TABLE            |  New users table             |
|  13. $RECENT_TASKS               |  Recent tasks                |

===================================================================

-->


<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <!-- Open Sans font from Google CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    @section('css')
    <!-- Pixel Admin's stylesheets -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/pixel-admin.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/widgets.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/rtl.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/themes.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css">

    @show



    <script src="{{ asset('js/ie.min.js') }}"></script>


</head>


<!-- 1. $BODY ======================================================================================
	
	Body

	Classes:
	* 'theme-{THEME NAME}'
	* 'right-to-left'      - Sets text direction to right-to-left
	* 'main-menu-right'    - Places the main menu on the right side
	* 'no-main-menu'       - Hides the main menu
	* 'main-navbar-fixed'  - Fixes the main navigation
	* 'main-menu-fixed'    - Fixes the main menu
	* 'main-menu-animated' - Animate main menu
-->
<body class="theme-default main-menu-animated">

<script>var init = [];</script>
<!-- Demo script --> <script src="{{ asset('demo/demo.js') }}"></script> <!-- / Demo script -->

<div id="main-wrapper">
    {{--Inclure une sous vue dans une vue --}}

    @include('Partials/_topmenu')


<!-- 4. $MAIN_MENU =================================================================================

		Main menu
		
		Notes:
		* to make the menu item active, add a class 'active' to the <li>
		  example: <li class="active">...</li>
		* multilevel submenu example:
			<li class="mm-dropdown">
			  <a href="#"><span class="mm-text">Submenu item text 1</span></a>
			  <ul>
				<li>...</li>
				<li class="mm-dropdown">
				  <a href="#"><span class="mm-text">Submenu item text 2</span></a>
				  <ul>
					<li>...</li>
					...
				  </ul>
				</li>
				...
			  </ul>
			</li>
-->
<div id="main-menu" role="navigation">
<div id="main-menu-inner">
<div class="menu-content top" id="menu-content-demo">
    <!-- Menu custom content demo
         CSS:        styles/pixel-admin-less/demo.less or styles/pixel-admin-scss/_demo.scss
         Javascript: html/assets/demo/demo.js
     -->
    <div>
        <div class="text-bg"><span class="text-slim">Welcome,</span> <span class="text-semibold">{{ Auth::user()->firstname }}</span></div>
        <div class="text">Mise a jour {{ date_format(Auth::user()->updated_at,"d/m/Y") }}</div>

        <img src="{{ Auth::user()->images }}" alt="" class="">
        <div class="btn-group">
            <a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-envelope"></i></a>
            <a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-user"></i></a>
            <a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-cog"></i></a>
            <a href="#" class="btn btn-xs btn-danger btn-outline dark"><i class="fa fa-power-off"></i></a>
        </div>
        <a href="#" class="close">&times;</a>
    </div>
</div>
<ul class="navigation">
    <li>
        <a href="index.html"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text"></span></a>
    </li>
    <li class="mm-dropdown">
        <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">Layouts</span><span class="label label-warning">Updated</span></a>
        <ul>
            <li>
                <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Grid</span></a>
            </li>
            <li>
                <a tabindex="-1" href="layouts-main-menu.html"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">Main menu</span><span class="label label-warning">Updated</span></a>
            </li>
        </ul>
    </li>
    <li>
        <a href="stat-panels.html"><i class="menu-icon fa fa-tasks"></i><span class="mm-text">Stat panels</span></a>
    </li>
    <li>
        <a href="widgets.html"><i class="menu-icon fa fa-flask"></i><span class="mm-text">Widgets</span></a>
    </li>
    <li class="mm-dropdown">
        <a href="#"><i class="menu-icon fa fa-desktop"></i><span class="mm-text">UI elements</span></a>
        <ul>
            <li>
                <a tabindex="-1" href="ui-buttons.html"><span class="mm-text">Buttons</span></a>
            </li>
            <li>
                <a tabindex="-1" href="ui-typography.html"><span class="mm-text">Typography</span></a>
            </li>
            <li>
                <a tabindex="-1" href="ui-tabs.html"><span class="mm-text">Tabs &amp; Accordions</span></a>
            </li>
            <li>
                <a tabindex="-1" href="ui-modals.html"><span class="mm-text">Modals</span></a>
            </li>
            <li>
                <a tabindex="-1" href="ui-alerts.html"><span class="mm-text">Alerts &amp; Tooltips</span></a>
            </li>
            <li>
                <a tabindex="-1" href="ui-components.html"><span class="mm-text">Components</span></a>
            </li>
            <li>
                <a tabindex="-1" href="ui-panels.html"><span class="mm-text">Panels</span></a>
            </li>
            <li>
                <a tabindex="-1" href="ui-jqueryui.html"><span class="mm-text">jQuery UI</span></a>
            </li>
            <li>
                <a tabindex="-1" href="ui-icons.html"><span class="mm-text">Icons</span></a>
            </li>
            <li>
                <a tabindex="-1" href="ui-utility-classes.html"><span class="mm-text">Utility classes</span></a>
            </li>
        </ul>
    </li>
    <li class="mm-dropdown">
        <a href="#"><i class="menu-icon fa fa-check-square"></i><span class="mm-text">Form components</span></a>
        <ul>
            <li>
                <a tabindex="-1" href="forms-layouts.html"><span class="mm-text">Layouts</span></a>
            </li>
            <li>
                <a tabindex="-1" href="forms-general.html"><span class="mm-text">General</span></a>
            </li>
            <li>
                <a tabindex="-1" href="forms-advanced.html"><span class="mm-text">Advanced</span></a>
            </li>
            <li>
                <a tabindex="-1" href="forms-pickers.html"><span class="mm-text">Pickers</span></a>
            </li>
            <li>
                <a tabindex="-1" href="forms-validation.html"><span class="mm-text">Validation</span></a>
            </li>
            <li>
                <a tabindex="-1" href="forms-editors.html"><span class="mm-text">Editors</span></a>
            </li>
        </ul>
    </li>
    <li>
        <a href="tables.html"><i class="menu-icon fa fa-table"></i><span class="mm-text">Tables</span></a>
    </li>
    <li>
        <a href="charts.html"><i class="menu-icon fa fa-bar-chart-o"></i><span class="mm-text">Charts</span></a>
    </li>
    <li class="mm-dropdown">
        <a href="#"><i class="menu-icon fa fa-files-o"></i><span class="mm-text">Pages</span><span class="label label-success">16</span></a>
        <ul>
            <li>
                <a tabindex="-1" href="pages-search.html"><span class="mm-text">Search results</span></a>
            </li>
            <li>
                <a tabindex="-1" href="pages-pricing.html"><span class="mm-text">Plans &amp; pricing</span></a>
            </li>
            <li>
                <a tabindex="-1" href="pages-faq.html"><span class="mm-text">FAQ</span></a>
            </li>
            <li>
                <a tabindex="-1" href="pages-profile.html"><span class="mm-text">Profile</span></a>
            </li>
            <li>
                <a tabindex="-1" href="pages-timeline.html"><span class="mm-text">Timeline</span></a>
            </li>
            <li>
                <a tabindex="-1" href="pages-signin.html"><span class="mm-text">Sign In</span></a>
            </li>
            <li>
                <a tabindex="-1" href="pages-signup.html"><span class="mm-text">Sign Up</span></a>
            </li>
            <li>
                <a tabindex="-1" href="pages-signin-alt.html"><span class="mm-text">Sign In Alt</span></a>
            </li>
            <li>
                <a tabindex="-1" href="pages-signup-alt.html"><span class="mm-text">Sign Up Alt</span></a>
            </li>
            <li>
                <a tabindex="-1" href="pages-invoice.html"><span class="mm-text">Invoice</span></a>
            </li>
            <li>
                <a tabindex="-1" href="pages-404.html"><span class="mm-text">Error 404</span></a>
            </li>
            <li>
                <a tabindex="-1" href="pages-500.html"><span class="mm-text">Error 500</span></a>
            </li>
            <li class="mm-dropdown">
                <a href="#"><i class="menu-icon fa fa-envelope"></i><span class="mm-text">Messages</span></a>
                <ul>
                    <li>
                        <a tabindex="-1" href="pages-inbox.html"><span class="mm-text">Inbox</span></a>
                    </li>
                    <li>
                        <a tabindex="-1" href="pages-show-email.html"><span class="mm-text">Show message</span></a>
                    </li>
                    <li>
                        <a tabindex="-1" href="pages-new-email.html"><span class="mm-text">New message</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a tabindex="-1" href="pages-blank.html"><span class="mm-text">Blank page</span></a>
            </li>
        </ul>
    </li>
    <li>
        <a href="complete-ui.html"><i class="menu-icon fa fa-briefcase"></i><span class="mm-text">Complete UI</span></a>
    </li>
    <li>
        <a href="color-builder.html"><i class="menu-icon fa fa-tint"></i><span class="mm-text">Color Builder</span></a>
    </li>
    <li class="mm-dropdown">
        <a href="#"><i class="menu-icon fa fa-sitemap"></i><span class="mm-text">Menu levels</span><span class="badge badge-primary">6</span></a>
        <ul>
            <li>
                <a tabindex="-1" href="#"><span class="mm-text">Menu level 1.1</span><span class="badge badge-danger">12</span><span class="label label-info">21</span></a>
            </li>
            <li>
                <a tabindex="-1" href="#"><span class="mm-text">Menu level 1.2</span></a>
            </li>
            <li class="mm-dropdown">
                <a tabindex="-1" href="#"><span class="mm-text">Menu level 1.3</span><span class="label label-warning">5</span></a>
                <ul>
                    <li>
                        <a tabindex="-1" href="#"><span class="mm-text">Menu level 2.1</span></a>
                    </li>
                    <li class="mm-dropdown">
                        <a tabindex="-1" href="#"><span class="mm-text">Menu level 2.2</span></a>
                        <ul>
                            <li class="mm-dropdown">
                                <a tabindex="-1" href="#"><span class="mm-text">Menu level 3.1</span></a>
                                <ul>
                                    <li>
                                        <a tabindex="-1" href="#"><span class="mm-text">Menu level 4.1</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a tabindex="-1" href="#"><span class="mm-text">Menu level 3.2</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a tabindex="-1" href="#"><span class="mm-text">Menu level 2.2</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
</ul> <!-- / .navigation -->
<div class="menu-content">
    <a href="pages-invoice.html" class="btn btn-primary btn-block btn-outline dark">Create Invoice</a>
</div>
</div> <!-- / #main-menu-inner -->
</div> <!-- / #main-menu -->
<!-- /4. $MAIN_MENU -->

<div id="content-wrapper">





    <div id="content-wrapper">

        <ul class="breadcrumb breadcrumb-page">
            <div class="breadcrumb-label text-light-gray">You are here: </div>
            @section('breadscrumb')

            @show
        </ul>

        @section('subtitle')
            <h1>Titre par defaut</h1>
            @show

        @include('Partials/_flashdatas')


        @yield('content')

    </div>



 <!-- PERMETS DE DEFINIR UN BLOC NOMMÉ CONTENT -->




 <!-- / #content-wrapper -->
<div id="main-menu-bg"></div>



</div> <!-- / #main-wrapper -->
    @include('Partials/_footermenu')
<!-- Get jQuery from Google CDN -->
<!--[if !IE]> -->
<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js">'+"<"+"/script>"); </script>
<!-- <![endif]-->
<!--[if lte IE 9]>
<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">'+"<"+"/script>"); </script>
<![endif]-->




@section('js')
<!-- Pixel Admin's javascripts -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/pixel-admin.min.js') }}"></script>
<script src="{{ asset('js/all.js') }}"></script>


<script type="text/javascript">
    init.push(function () {
        // Javascript code here
    })
    window.PixelAdmin.start(init);
</script>



@show
</body>
</html>