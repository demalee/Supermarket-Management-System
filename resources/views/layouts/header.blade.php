
<!--**********************************
        Nav header start
    ***********************************-->
<div class="nav-header">
    <a href="{{url('/')}}" class="brand-logo">

       <p>Kurasa</p> <img src="https://kurasa.org/images/square-kurasa-logo.png" style="width: 100px; height: 100px;">


    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
    Nav header end
***********************************-->


<!--**********************************
    Header start
***********************************-->
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="nav-item">
                        <div class="input-group search-area">
                            <input type="text" class="form-control" placeholder="Find something here......">
                            <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav header-right">
                    <li class="nav-item recipe">
                        <a href="javascript:void(0);" class="btn btn-primary btn-rounded">Kurasa Supermarket</a>
                    </li>


                </ul>
            </div>
        </nav>
    </div>
</div>
<!--**********************************
    Header end ti-comment-alt
***********************************-->

<!--**********************************
    Header end ti-comment-alt
***********************************-->

<!--**********************************
    Sidebar start
***********************************-->
<!--**********************************
Sidebar start
***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Supermarkets</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('welcome')}}">All Supermarkets</a></li>

                </ul>
                <ul aria-expanded="false">
                    <li><a href="{{route('add_kurasa_supermarket')}}">Add Supermarket</a></li>

                </ul>

            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-050-info"></i>
                    <span class="nav-text">Managers</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('kurasa_managers')}}">Managers</a></li>

                </ul>

            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-050-info"></i>
                    <span class="nav-text">Employees</span>
                </a>

            </li>
            <li><a href="chart-flot.html">
                    <i class="flaticon-041-graph"></i>
                    <span class="nav-text">Suppliers</span>
                </a>

            </li>

        </ul>
        <div class="plus-box">
            <img src="public/images/plus.png" alt="">
            <h5 class="fs-18 font-w700">Welcome to Kurasa</h5>
            <p class="fs-14 font-w400">Shop with Us <br>Best supermarket!!<i class="fas fa-arrow-right ms-3"></i></p>
        </div>

    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->        <!--**********************************
            Sidebar end
        ***********************************-->
