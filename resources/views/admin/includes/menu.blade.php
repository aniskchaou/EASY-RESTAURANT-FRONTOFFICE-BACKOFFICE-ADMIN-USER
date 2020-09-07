<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="{{asset('/')}}" class="simple-text logo-normal">
          HOME
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{asset('/admin')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{asset('/comand/index')}}">
              <i class="material-icons">person</i>
              <p>Reservations</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{asset('/category/index')}}">
              <i class="material-icons">content_paste</i>
              <p>Categories</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{asset('/message/index')}}">
              <i class="material-icons">library_books</i>
              <p>Messages</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{asset('/product/index')}}">
              <i class="material-icons">bubble_chart</i>
              <p>Products</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{asset('/slider/index')}}">
              <i class="material-icons">location_ons</i>
              <p>Slider</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{asset('/user/index')}}">
              <i class="material-icons">notifications</i>
              <p>Users</p>
            </a>
          </li>
         
        </ul>
      </div>
    </div>