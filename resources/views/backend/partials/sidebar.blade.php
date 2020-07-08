<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route('admin.dashboard')}}">{{env('APP_NAME')}}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{route('admin.dashboard')}}">Small Title</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>          
            <li {!!active(['customer.*'],'class="active"')!!}>
                <a class="nav-link" href="{{route('customer.index')}}">
                    <i class="fa fa-users"></i>
                    <span>Customer</span>
                </a>
            </li>
            <li {!!active(['product.*'],'class="active"')!!}><a class="nav-link" href="{{route('product.index')}}"><i class="fa fa-users"></i> <span>Product</span></a></li>
        </ul>
    </aside>
</div>