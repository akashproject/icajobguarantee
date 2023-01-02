<!-- Main Sidebar Container -->

        <!-- Left Sidebar - style you can find in sidebar.scss  -->

        <!-- ============================================================== -->

        <aside class="left-sidebar" data-sidebarbg="skin5">

            <!-- Sidebar scroll-->

            <div class="scroll-sidebar">

                <!-- Sidebar navigation-->

                <nav class="sidebar-nav">

                    <ul id="sidebarnav" class="p-t-30">

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('dashboard') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Courses </span></a>

                            <ul aria-expanded="false" class="collapse  first-level">

								<li class="sidebar-item"><a href="{{ url('administrator/courses') }}" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> All Courses </span></a></li>

                                <li class="sidebar-item"><a href="{{ url('administrator/add-course') }}" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> Add Course </span></a></li>

                                <li class="sidebar-item"><a href="{{ url('administrator/course-type') }}" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> Course type </span></a></li>

                            </ul>

                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Centers </span></a>

                            <ul aria-expanded="false" class="collapse  first-level">

								<li class="sidebar-item"><a href="{{ url('administrator/centers') }}" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> All Centers </span></a></li>

                                <li class="sidebar-item"><a href="{{ url('administrator/add-center') }}" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> Add Center </span></a></li>

                            </ul>

                        </li>

						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Users </span></a>

                            <ul aria-expanded="false" class="collapse  first-level">

								<li class="sidebar-item"><a href="{{ url('users') }}" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> All Users </span></a></li>

                            </ul>

                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('administrator/settings') }}" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Settings </span></a>
                        </li>
                        
                    </ul>

                </nav>

                <!-- End Sidebar navigation -->

            </div>

            <!-- End Sidebar scroll-->

        </aside>

        <!-- ============================================================== -->

        <!-- End Left Sidebar - style you can find in sidebar.scss  -->

