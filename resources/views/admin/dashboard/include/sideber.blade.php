<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <div class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="image text-center"><img src="{{asset('backend')}}/assets/img/img1.jpg" class="img-circle" alt="User Image"> </div>
            <div class="info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-cog"></i></a> <a href="#"><i class="fa fa-envelope-o"></i></a> <a href="#"><i class="fa fa-power-off"></i></a> </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">PERSONAL</li>
            <li class="active treeview"> <a href="#"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="index.html">Dashboard 1</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"> <i class="fa fa-bullseye"></i> <span>Slider</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('slider.create')}}">Add Slider</a></li>
                    <li><a href="{{route('slider.index')}}">Manage Slider</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"> <i class="fa fa-bullseye"></i> <span>Category</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('category.index')}}">Add Category</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"> <i class="fa fa-bullseye"></i> <span>Item</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('item.create')}}">Add Item</a></li>
                    <li><a href="{{route('item.index')}}">Manage Item</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"> <i class="fa fa-envelope-o "></i> <span>Inbox</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="apps-mailbox.html">Mailbox</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"> <i class="fa fa-map-marker"></i> <span>Maps</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="map-google.html">Google Maps</a></li>
                    <li><a href="map-vector.html" class="active">Vector Maps</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
