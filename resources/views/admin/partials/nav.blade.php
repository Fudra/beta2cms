 <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">SB Admin</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                <ul class="dropdown-menu message-dropdown">
                    @include('admin.partials.massage', [
                        'route' => null,
                        'image' => 'http://placehold.it/50x50',
                        'name' => 'John Smith',
                        'time' => 'Yesterday at 4:32 PM',
                        'message' => 'Lorem ipsum dolor sit amet, consectetur...'
                        ])

                    <li class="message-footer">
                        <a href="#">Read All New Messages</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                <ul class="dropdown-menu alert-dropdown">

                    @include('admin.partials.alert' ,  [
                    'route' => null,
                    'name' => 'Alert Name',
                    'level' => 'success',
                    'massage' => 'Alert Badge'
                    ])
                    {{--<li>--}}
                        {{--<a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>--}}
                    {{--</li>--}}
                    <li class="divider"></li>
                    <li>
                        <a href="#">View All</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                @include()
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>