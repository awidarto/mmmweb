            <!-- top header -->
            <header class="header header-fixed navbar bg-success">

                <a href="#" class="fa fa-bars navbar-toggle off-left visible-xs" data-toggle="collapse" data-target="#hor-menu"></a>

                <div class="brand bg-success width-auto">
                    <a href="{{ URL::to('/')}}" class="navbar-brand text-white">
                        <img src="{{ URL::to('images')}}/mmm-logo.png" alt="mmm-logo" style="margin-top:4px;" />
                    </a>
                </div>

                <div class="collapse navbar-collapse pull-left no-padding" id="hor-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown show-on-hover">
                            <a href="#" data-toggle="dropdown">
                                <span>My Media</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ URL::to('music') }}" class="{{ sa('music') }}" >
                                        <span>My Music</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('video') }}" class="{{ sa('video') }}" >
                                        <span>My Movies</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('playlist') }}" class="{{ sa('playlist') }}" >
                                        <span>My Playlists</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown show-on-hover">
                            <a href="#" data-toggle="dropdown">
                                <span>My Store</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ URL::to('uploads') }}" class="{{ sa('uploads') }}" >
                                        <span>My Uploads</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('sales') }}" class="{{ sa('sales') }}" >
                                        <span>Cash Box</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <form class="navbar-form navbar-left hidden-xs" role="search">
                    <div class="form-group">
                        <button class="btn text-white no-border no-margin bg-none" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                        <input type="text" class="form-control no-border no-padding search" placeholder="Search Workspace">
                    </div>
                </form>

                <ul class="nav navbar-nav navbar-right hidden-xs">
                    <li class="quickmenu mg-r-md">
                        @include('partials.identity')
                    </li>
                </ul>
            </header>
            <!-- /top header -->
