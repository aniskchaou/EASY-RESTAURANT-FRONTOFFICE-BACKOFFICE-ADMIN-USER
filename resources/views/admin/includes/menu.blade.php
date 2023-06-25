<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo" style="padding:0px;"><a href="{{asset('/')}}" class="simple-text logo-normal">
          <img src="{{asset('assets/images/log.png')}}" alt="logo" width="50" height="50">
          <h6>Easy Restaurant </h6>
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{asset('/admin')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
           <li class="nav-item">
           <h6 class="nav-link ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-8">Booking</h6>
          </li> 
          <li class="nav-item ">
            <a class="nav-link" href="{{asset('/comand/index')}}">
              <i class="material-icons">bookmark</i>
              <p>Orders</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{asset('/tablereservation/index')}}">
              <i class="material-icons">table_bar</i>
              <p>Tables Reservations</p>
            </a>
          </li>

           <li class="nav-item">
           <h6 class="nav-link ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-8">Locale</h6>
          </li> 
          <li class="nav-item ">
            <a class="nav-link" href="{{asset('/table/index')}}">
              <i class="material-icons">table_restaurant</i>
              <p>Tables</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{asset('/room/index')}}">
              <i class="material-icons">family_restroom</i>
              <p>Rooms</p>
            </a>
          </li>
           <li class="nav-item">
           <h6 class="nav-link ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-8">Food</h6>
          </li> 
          <li class="nav-item ">
            <a class="nav-link" href="{{asset('/category/index')}}">
              <i class="material-icons">menu</i>
              <p>Food Categories</p>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="{{asset('/product/index')}}">
              <i class="material-icons">fastfood</i>
              <p>Foods</p>
            </a>
          </li>
           <li class="nav-item">
           <h6 class="nav-link ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-8">Attribute</h6>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{asset('/ingredients/index')}}">
              <i class="material-icons">ramen_dining</i>
              <p>Ingredients</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{asset('/addons/index')}}">
              <i class="material-icons">nightlife</i>
              <p>Addons</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{asset('/size/index')}}">
              <i class="material-icons">soup_kitchen</i>
              <p>Size</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{asset('/kitchen/index')}}">
              <i class="material-icons">kitchen</i>
              <p>Kitchen</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="{{asset('/foodtype/index')}}">
              <i class="material-icons">local_dining</i>
              <p>Food Types</p>
            </a>
          </li>
           
          <li class="nav-item">
           <h6 class="nav-link ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-8">Website</h6>
          </li> 
           <li class="nav-item ">
            <a class="nav-link" href="{{asset('/message/index')}}">
              <i class="material-icons">message</i>
              <p>Messages</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{asset('/offer/index')}}">
              <i class="material-icons">assessment</i>
              <p>Offers</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{asset('/slider/index')}}">
              <i class="material-icons">location_ons</i>
              <p>Slider</p>
            </a>
          </li>
           <li class="nav-item">
           <h6 class="nav-link ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-8">Relationship</h6>
          </li> 
           <li class="nav-item ">
            <a class="nav-link" href="{{asset('/customer/index')}}">
              <i class="material-icons">people</i>
              <p>Customers</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{asset('/supplier/index')}}">
              <i class="material-icons">groups</i>
              <p>Suppliers</p>
            </a>
          </li>
          <li class="nav-item">
           <h6 class="nav-link ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-8">Reporting</h6>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="{{asset('/reporting/food')}}">
              <i class="material-icons">summarize</i>
              <p>Food Reports</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="{{asset('/reporting/order')}}">
              <i class="material-icons">summarize</i>
              <p>Order Reports</p>
            </a>
          </li>
           <li class="nav-item">
           <h6 class="nav-link ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-8">System</h6>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{asset('/user/index')}}">
              <i class="material-icons">person</i>
              <p>Users</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{asset('/merchant/index')}}">
              <i class="material-icons">settings</i>
              <p>Merchant</p>
            </a>
          </li>
        </ul>
      </div>
    </div>