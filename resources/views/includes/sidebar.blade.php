@section('sidebar-style')
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel='stylesheet' href="{{asset('https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css')}}">
@show
@section('sidebar')

    <div class="sidebar close">
        <div class="logo-details">
            <i class="bx"></i>
            <span class="logo_name">Ghyari</span>
        </div>
        <ul class="nav-links">
            {{-- <li class="search-box">
                <i class="bx bx-search icon"></i>
                <input type="text" placeholder="Search..." />
            </li> --}}
            <li>
                <a href="{{route('showAdminIndex')}}">
                    <i class="bx bx-grid-alt"></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{route('showAdminIndex')}}">Dashboard</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="{{route('showAdminItems')}}">
                        <i class="bx bx-collection"></i>
                        <span class="link_name">All Items</span>
                    </a>
                    <i class="bx bxs-chevron-down arrow"></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="{{route('showAdminItems')}}">All Items</a></li>
                    <li><a href="{{route('showAddItem')}}">Add Items</a></li>
                    <li><a href="#">Remove Items</a></li>
                </ul>
            </li>
            {{-- <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class="bx bx-book-alt"></i>
                        <span class="link_name">Manage Orders</span>
                    </a>
                    <i class="bx bxs-chevron-down arrow"></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Manage Orders</a></li>
                    <li><a href="#">Order List</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">....</a></li>
                </ul>
            </li> --}}
            <li>
                <a href="{{route('showDisableAccount')}}">
                    <i class="bx bx-pie-chart-alt-2"></i>
                    <span class="link_name">Users Accounts</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{route('showDisableAccount')}}">Users Accounts</a></li>
                </ul>
            </li>
            {{-- <li>
                <a href="#">
                    <i class="bx bx-line-chart"></i>
                    <span class="link_name">C</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">C</a></li>
                </ul>
            </li> --}}
            {{-- <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class="bx bx-plug"></i>
                        <span class="link_name">Plugins</span>
                    </a>
                    <i class="bx bxs-chevron-down arrow"></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Plugins</a></li>
                    <li><a href="#">UI Face</a></li>
                    <li><a href="#">Pigments</a></li>
                    <li><a href="#">Box Icons</a></li>
                </ul>
            </li> --}}
            {{-- <li>
                <a href="#">
                    <i class="bx bx-compass"></i>
                    <span class="link_name">Explore</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Explore</a></li>
                </ul>
            </li> --}}
            <li>
                <a href="{{route('showEditAdminInformation')}}">
                    <i class="bx bx-history"></i>
                    <span class="link_name">Profile</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{route('showEditAdminInformation')}}">Profile</a></li>
                </ul>
            </li>
            {{-- <li>
                <a href="#">
                    <i class="bx bx-cog"></i>
                    <span class="link_name">Settings</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Settings</a></li>
                </ul>
            </li> --}}
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <img src="../image/ghyari.png" />
                    </div>
                    <div class="name-job">
                        <div class="profile_name">Usename</div>
                        <div class="job">Admin</div>
                    </div>
                    <a href="{{route('logout')}}"><i class="bx bx-log-out"></i></a>
                </div>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class="bx bx-menu"></i>
            <span class="text"> Sidebar</span>
        </div>
    </section>

    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
    </script>

@show
