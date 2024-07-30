<header>
  <!-- Nội dung header của bạn -->
  <div class="topnav">
      <div class="togglenav-mobile">
          <span class="menu-icon" onclick="toggleNav()">&#9776;</span>
      </div>
      <div class="logo-mobi">
          <a href="#"> 
              <img src="{{ asset('images/logo-header.svg') }}" alt="logo">
          </a>
      </div>
      <div class="login-mobi">
          <a href="">Đăng Nhập</a>
      </div>
  </div>
  <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href=""><i class="fas fa-home"></i> Trang chủ</a>
      <a href=""><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng nhập/Đăng ký</a>
      <a href=""><i class="fa fa-car" aria-hidden="true"></i> Thuê xe</a>
      <a href=""><i class="fa fa-plane" aria-hidden="true"></i> Vé máy bay</a>
      <a href=""><i class="fa fa-gift" aria-hidden="true"></i> Khám phá ưu đãi</a>
  </div>
  <div class="total-header">
      <div class="left-header">
          <div class="logo-header">
              <a href="#"> 
                  <img src="{{ asset('images/logo-header.svg') }}" alt="logo">
              </a>
          </div>
          <div class="slogan-header">
              Cam kết hoàn 150% nếu nhà xe không cung cấp dịch vụ vận chuyển
          </div>
      </div>
      <ul class="right-header nav">
          <li class="nav-item">
              <a href="" class="nav-link nav-link-header">Đơn hàng của tôi</a>
          </li>
          <li class="nav-item">
              <a href="" class="nav-link nav-link-header">Mở bán vé trên Vexere</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link nav-link-header dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Trở thành đối tác
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item dropdown-item-header" href="#">Phần mềm nhà xe</a></li>
                  <li><a class="dropdown-item dropdown-item-header" href="#">Phần mềm đại lý</a></li>
              </ul>
          </li>
          <li class="Navbar2__GroupItem-sa2air-4 hEFchp menu-group-item">
              <div class="Navbar2__ButtonHotline-sa2air-8 ijyXqH">
                  <div class="material-icons-wrapper md-20 icon-phone">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                  </div>
                  <p class="base__Headline03-sc-1tvbuqk-15 boemqK">Hotline 24/7</p>
              </div>
              <div class="contact-dropdown">
                  <i class="fa fa-phone" aria-hidden="true"></i> Hotline 1:<a href="tel:0967041900"> 0967041900</a><br>
                  <i class="fa fa-phone" aria-hidden="true"></i> Hotline 2:<a href="tel:0967041900"> 0967041900</a>
              </div>
          </li>
          <li class="Navbar2__GroupItem-sa2air-4 hEFchp menu-group-item">
              <div class="Navbar2__ButtonHotline-sa2air-8 ijyXqH">
                  <p class="base__Headline03-sc-1tvbuqk-15 boemqK">Đăng nhập</p>
              </div>
          </li>
      </ul>
  </div>
</header>
