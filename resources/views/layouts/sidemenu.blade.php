<div class="menu_main_wrap">
    <nav class="menu_main_nav_area">
       <ul id="menu_main" class="menu_main_nav">
          <li class="icon-folder menu-item current-menu-ancestor current-menu-parent menu-item-has-children">
             <a href="{{ asset('/dashboard') }}"><span>Dashboard</span></a>
          </li>

          <li class="icon-technology-2 menu-item menu-item-has-children">
             <a href="{{ route('admin.file.index') }}"><span>File Ticket</span></a>
          </li>

          <li class="icon-communication menu-item menu-item-has-children">
            <a href="{{ route('admin.community.index') }}"><span>Community</span></a>
         </li>

        <li class="icon-users-group menu-item menu-item-has-children">
            <a href="{{ route('admin.user.index') }}"><span>Users</span></a>
        </li>

        <li class="icon-school menu-item menu-item-has-children">
        <a href="{{ route('admin.role.index') }}"><span>Department</span></a>
        </li>

        <li class="icon-cog menu-item menu-item-has-children">
            <a href="{{ route('admin.general.setting') }}"><span>General Settings</span></a>
        </li>



       </ul>
    </nav>
 </div>
