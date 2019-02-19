<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if (Auth::user())
                            {{Auth::user()->name}}
                        @endif
                        </div>
                    <div class="email">  @if (Auth::user())
                            {{Auth::user()->email}}
                        @endif</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li><a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a><i class="material-icons">input</i>Sign Out</a> <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form></li>
                      @endguest
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                        <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="{{ route('home') }}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                        <a href="{{ route('admin.category.index') }}">
                            <i class="material-icons">home</i>
                            <span>Category</span>
                        </a>
                        <a href="{{ route('admin.client.index') }}">
                            <i class="material-icons">home</i>
                            <span>Client</span>
                        </a>
                      
                         <a href="{{ route('admin.employee.index') }}">
                            <i class="material-icons">home</i>
                            <span>Employee</span>
                        </a>
                         <a href="{{ route('admin.project.index') }}">
                            <i class="material-icons">home</i>
                            <span>Project</span>
                        </a>
                        <a href="{{ route('admin.service.index') }}">
                            <i class="material-icons">home</i>
                            <span>Service</span>
                        </a>
                    </li>
                 
                   
                    
                    

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">home</i>
                            <span>Report</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ route('admin.report.client') }}">
                                    Client
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin.report.employee') }}">
                                    Employee
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.report.project') }}">
                                     Project
                                </a>
                            </li> 
                            <li>
                                <a href="{{ route('admin.report.betweenDate') }}">
                                     Between Date
                                </a>
                            </li>
                            <li>
                                Date
                            </li>
                            
                        </ul>
                    </li>
                   
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
           
            <!-- #Footer -->
</aside>