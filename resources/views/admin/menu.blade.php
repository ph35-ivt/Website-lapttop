<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li class="sub-menu">
                    <a href="{{route('dashboard')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Category</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('list-category')}}">List category</a></li>
                        <li><a href="{{route('add-category')}}">Add category</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fas fa-box-open"></i>
                        <span>Product</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('list-product')}}">List product</a></li>
                        <li><a href="{{route('add-product')}}">Add product</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fas fa-cart-arrow-down"></i>
                        <span>Order</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('list-order')}}">List order</a></li>
                                                   
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fas fa-comments"></i>
                        <span>Comment</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('list-comment')}}">List comment</a></li>
                    </ul>

                    <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fas fa-user-circle"></i>
                        <span>User</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('list-user')}}">List user</a></li>
                        <li><a href="{{route('add-user')}}">Add user</a></li>
                    </ul>
                </li>
                </li>
            </ul>            
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>