    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background-color:#df744a">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a href={{url('/home')}}><img src="{{asset('images/logo/'.$logo_name)}}" class="navbar-brand page-scroll" ></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href={{url('/orders')}}>Orders</a>
                    </li>
                            
                    <li>
                        <a class="page-scroll" href={{url('/report')}}>Report</a>
                    </li>
                   
                    <li>
                        <a class="page-scroll" href={{url('/manage')}}>Manage</a>
                    </li>
                    <li>
                        <a class="page-scroll" href={{url('/signatures')}}>Signatures</a>
                    </li>
                    <li>
                        <a class="page-scroll" href={{url('/settings')}}>Settings</a>
                    </li>
                    <li>
                        <a class="page-scroll" href={{url('/logout')}}>Log Out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>