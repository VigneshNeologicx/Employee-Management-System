        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="/dashboard"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Dashboard</span></a
                >
              </li>

              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-receipt"></i
                  ><span class="hide-menu">Departments </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="{{route('dept.list')}}" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu"> Departments List </span></a
                    >
                  </li>
                </ul>
              </li>

              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-face"></i
                  ><span class="hide-menu">Employee</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="{{route('add.staff')}}" class="sidebar-link"
                      ><i class="mdi mdi-emoticon"></i
                      ><span class="hide-menu"> Add Staff and Listing </span></a
                    >
                  </li>


                  <li class="sidebar-item">
                    <a href="{{route('role.pos')}}" class="sidebar-link"
                      ><i class="mdi mdi-emoticon"></i
                      ><span class="hide-menu"> Create Role & Position </span></a
                    >
                  </li>

                  <li class="sidebar-item">
                    <a href="{{route('attendence.list')}}" class="sidebar-link"
                      ><i class="mdi mdi-emoticon-neutral"></i
                      ><span class="hide-menu"> Attendences Management </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="icon-fontawesome.html" class="sidebar-link"
                      ><i class="mdi mdi-emoticon"></i
                      ><span class="hide-menu"> Leaves Management </span></a
                    >
                  </li>

                </ul>
              </li>

              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-key"></i
                  ><span class="hide-menu">Authentication </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="authentication-login.html" class="sidebar-link"
                      ><i class="mdi mdi-all-inclusive"></i
                      ><span class="hide-menu"> Logout </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="authentication-register.html" class="sidebar-link"
                      ><i class="mdi mdi-all-inclusive"></i
                      ><span class="hide-menu"> Login as new admin </span></a
                    >
                  </li>
                </ul>
              </li>
             </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
