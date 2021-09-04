<div class="leftside-menu leftside-menu-detached">

    <div class="leftbar-user">
        <a href="javascript: void(0);">
            <img src="https://shapka-youtube.ru/wp-content/uploads/2021/01/man-ava5.jpg" alt="user-image" height="42"
                 class="rounded-circle shadow-sm">
            <span class="leftbar-user-name">{{Auth::user()->name}}</span>
        </a>
    </div>

    <!--- Sidemenu -->
    <ul class="side-nav">

        <li class="side-nav-title side-nav-item">Menu</li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects"
               class="side-nav-link">
                <i class="uil-briefcase"></i>
                <span> Projects </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarProjects">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="{{route('projects.index')}}">List</a>
                    </li>
                    <li>
                        <a href="{{route('projects.create')}}">Create Project <span
                                class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks"
               class="side-nav-link">
                <i class="uil-clipboard-alt"></i>
                <span> Tasks </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarTasks">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="{{route('tasks.index')}}">List</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="side-nav-item">
            <a href="#" class="side-nav-link">
                <i class="uil-folder-plus"></i>
                <span> Users </span>
            </a>
        </li>
        <li class="side-nav-item">
            <a href="#" class="side-nav-link">
                <i class="uil-folder-plus"></i>
                <span> Clients </span>
            </a>
        </li>
        <li class="side-nav-item">
            <a href="{{route('logout')}}" class="side-nav-link"
               onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                <i class="uil-exit text-danger"></i>
                <span> Logout </span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>

    <!-- End Sidebar -->

    <div class="clearfix"></div>
    <!-- Sidebar -left -->

</div>

