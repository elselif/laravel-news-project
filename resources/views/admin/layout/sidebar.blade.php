<div class="main-sidebar">
          <aside id="sidebar-wrapper">
              <div class="sidebar-brand">
                  <a href="{{route('admin.home')}}">Admin Panel</a>
              </div>
              <div class="sidebar-brand sidebar-brand-sm">
                  <a href="{{route('admin.home')}}"></a>
              </div>

              <ul class="sidebar-menu">

                  <li class="active"><a class="nav-link" href="{{route('admin.home')}}"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>


                  <li class="nav-item dropdown ">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Advertisements</span></a>
                    <ul class="dropdown-menu">
                        <li class="active"><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Top Advertisements</a></li>
                        <li class=""><a class="nav-link" href="{{route('admin_home_ad_show')}}"><i class="fas fa-angle-right"></i> Home Advertisements</a></li>
                        <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Sidebar Advertisements</a></li>
                    </ul>
                </li>
                  <li class="nav-item dropdown ">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>News</span></a>
                    <ul class="dropdown-menu">
                        <li class=""><a class="nav-link" href="{{route('admin_category_show')}}"><i class="fas fa-angle-right"></i> Categories</a></li>
                        <li class=""><a class="nav-link" href="{{route('admin_sub_category_show')}}"><i class="fas fa-angle-right"></i> SubCategories</a></li>
                        <li class=""><a class="nav-link" href="{{route('admin_post_show')}}"><i class="fas fa-angle-right"></i> Posts</a></li>
                        
                    </ul>
                </li>
                  <li class="nav-item dropdown ">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Page</span></a>
                    <ul class="dropdown-menu">
                        <li class=""><a class="nav-link" href="{{route('admin_page_about')}}"><i class="fas fa-angle-right"></i> About</a></li>
                       
                        
                    </ul>
                </li>

                  {{-- <li class="nav-item dropdown active">
                      <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Dropdown Items</span></a>
                      <ul class="dropdown-menu">
                          <li class="active"><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Item 1</a></li>
                          <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Item 2</a></li>
                      </ul>
                  </li> --}}

                  


                  {{-- <li class=""><a class="nav-link" href="setting.html"><i class="fas fa-hand-point-right"></i> <span>Setting</span></a></li>

                  <li class=""><a class="nav-link" href="form.html"><i class="fas fa-hand-point-right"></i> <span>Form</span></a></li>

                  <li class=""><a class="nav-link" href="table.html"><i class="fas fa-hand-point-right"></i> <span>Table</span></a></li>

                  <li class=""><a class="nav-link" href="invoice.html"><i class="fas fa-hand-point-right"></i> <span>Invoice</span></a></li> --}}

              </ul>
          </aside>
      </div>