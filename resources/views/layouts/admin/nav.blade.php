<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <span>
                        <img alt="image" style=" width: 30%; height: auto;" class="img-circle" src="/img/avatar.png" />
                    </span>
                    <span data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">{{ Auth::user()->name }}</strong>
                            </span>
                        </span>
                    </span>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li>
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    BR+
                </div>
            </li>
            <li class="">
                <a href="{{ url('/home') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Main Page</span> </a>
            </li>
            <li class="{{ route::is('manage-goods.*') ? 'active' : '' }}">
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">จัดการครุภัณฑ์</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="{{ route::is('manage-goods.index') ? 'active' : '' }}">
                        <a href="{{ route('manage-goods.index') }}">จัดการรายการครุภัณฑ์</a>
                    </li>
                    <li class="{{ route::is('manage-goods.approve') ? 'active' : '' }}">
                        <a href="{{ route('manage-goods.approve') }}">อนุมัติ เบิก-คืน ครุภัณฑ์</a>
                    </li>
                    <li class="{{ route::is('manage-goods.history') ? 'active' : '' }}">
                        <a href="{{ route('manage-goods.history') }}">ประวัติการ เบิก-คืน ครุภัณฑ์</a>
                    </li>
                </ul>
            </li>

            <li class="{{ route::is('manage-materials.*') ? 'active' : '' }}">
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">จัดการวัสดุ</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="{{ route::is('manage-materials.index') ? 'active' : '' }}">
                        <a href="{{ route('manage-materials.index') }}">จัดการรายการวัสดุ</a>
                    </li>
                    <li class="{{ route::is('manage-materials.approve') ? 'active' : '' }}">
                        <a href="{{ route('manage-materials.approve') }}">อนุมัติ เบิก-คืน วัสดุ</a>
                    </li>
                    <li class="{{ route::is('manage-materials.history') ? 'active' : '' }}">
                        <a href="{{ route('manage-materials.history') }}">ประวัติการ เบิก-คืน วัสดุ</a>
                    </li>
                </ul>
            </li>

{{--
            <li class="{{ route::is('materials.*') ? 'active' : '' }}">
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">-- วัสดุ --</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="{{ route::is('materials.index') ? 'active' : '' }}">
                        <a href="{{ route('materials.index') }}">เบิกวัสดุ</a>
                    </li>
                    <li class="{{ route::is('materials.history') ? 'active' : '' }}">
                        <a href="{{ route('materials.history') }}">ประวัติการ เบิก-คืน วัสดุ</a>
                    </li>
                </ul>
            </li>

            <li class="{{ route::is('goods.*') ? 'active' : '' }}">
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">-- ครุภัณฑ์ --</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="{{ route::is('goods.index') ? 'active' : '' }}">
                        <a href="{{ route('goods.index') }}">เบิกครุภัณฑ์</a>
                    </li>
                    <li class="{{ route::is('goods.history') ? 'active' : '' }}">
                        <a href="{{ route('goods.history') }}">ประวัติการ เบิก-คืน ครุภัณฑ์</a>
                    </li>
                </ul>
            </li> --}}


            <li class="{{ route::is('generals.*') ? 'active' : '' }}">
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">ตั้งค่าทั่วไป</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="{{ route::is('generals.manage-units.index') ? 'active' : '' }}">
                        <a href="{{ route('generals.manage-units.index') }}">ตั้งค่าหน่วยนับ</a>
                    </li>
                    <li class="{{ route::is('generals.manage-departments.index') ? 'active' : '' }}">
                        <a href="{{ route('generals.manage-departments.index') }}">ตั้งค่าหน่วยงาน</a>
                    </li>
                    <li class="{{ route::is('generals.manage-types.index') ? 'active' : '' }}">
                        <a href="{{ route('generals.manage-types.index') }}">ตั้งค่าประเภทวัสดุ</a>
                    </li>
                </ul>
            </li>


            <li class="{{ route::is('reports.*') ? 'active' : '' }}">
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">รายงาน</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="{{ route::is('reports.index') ? 'active' : '' }}">
                        <a href="{{ route('reports.index') }}">รายงาน</a>
                    </li>
                </ul>
            </li>

        </ul>

    </div>
</nav>
