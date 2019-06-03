<div class="page-sidebar-wrapper">

<!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item start ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="arrow"></span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">المنتجات</h3>
            </li>
            <li class="nav-item  ">
                <a href="{{route('addNews')}}" class="nav-link nav-toggle">
                    <i class="icon-plus"></i>
                    <span class="title">اضافة خبر </span>
              </a>
            </li>
            <li class="nav-item  ">
                <a href="" class="nav-link nav-toggle">
                    <i class="fa fa-edit"></i>
                    <span class="title">تعديل خبر</span>
              </a>
            </li>
            <li class="nav-item  ">
                <a href="" class="nav-link nav-toggle">
                    <i class="fa fa-trash"></i>
                    <span class="title"> حذف خبر </span></a>
            </li>
            <li class="nav-item  ">
                <a href="{{route('news')}}" class="nav-link nav-toggle">
                    <i class="fa fa-list-alt"></i>
                    <span class="title">كل الأخبار </span>
               </a>
            </li>
            <li class="nav-item  ">
                <a href="{{route('gameType')}}" class="nav-link nav-toggle">
                    <i class="icon-plus"></i>
                    <span class="title">اضافة تصنيف </span>
                </a>
            </li>

            <li class="heading">
                <h3 class="uppercase">المدراء</h3>
            </li>
            <li class="nav-item  ">
                <a href="{{route('adminAdd')}}" class="nav-link nav-toggle">
                    <i class="icon-plus"></i>
                    <span class="title">اضافة مدير </span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="" class="nav-link nav-toggle">
                    <i class="fa fa-edit"></i>
                    <span class="title">تعديل مدير</span>
                </a>
            </li>


        </ul>
        <!-- END SIDEBAR MENU -->
    </div>

    <!-- END SIDEBAR -->
</div>
