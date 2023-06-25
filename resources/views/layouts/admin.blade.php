<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<!DOCTYPE html>
<html lang="en">
  @include('admin.includes.header')
<head>

</head>

<body class="">
  <div class="wrapper ">
     @include('admin.includes.menu')
    <div class="main-panel">
      <!-- Navbar -->
       @include('admin.includes.toolbar')
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          
          @yield('content') 
          @include('admin.includes.footer')
        </div>

          </div>
        </div>
      </div>
      
</body>

</html>