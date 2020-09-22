<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#dashboard"><i class="zmdi zmdi-home m-r-5"></i>Oreo</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#user">Docter</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">
                            <div class="image"><a href="{{route('doctor.profile')}}"><img src="../assets/images/profile_av.jpg" alt="User"></a></div>
                            <div class="detail">
                                <h4>Dr. Charlotte</h4>
                                <small>Neurologist</small>                        
                            </div>
                        </div>
                    </li>
                    <li class="header">MAIN</li>
                    
                    <li class="{{ Request::segment(1) === 'dashboard' ? 'active open' : null }}"><a href="{{route('dashboard.index')}}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>            
                    <li class="{{ Request::segment(1) === 'appointment' ? 'active open' : null }}"><a href="{{route('appointment.book-appointment')}}"><i class="zmdi zmdi-calendar-check"></i><span>Appointment</span></a></li>
                    <li class="{{ Request::segment(1) === 'doctor' ? 'active open' : null }}">
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-add"></i><span>Doctors</span></a>
                        <ul class="ml-menu">
                            <li class="{{ Request::segment(2) === 'doctors' ? 'active' : null }}"><a href="{{route('doctor.doctors')}}">All Doctors</a></li>
                            <li class="{{ Request::segment(2) === 'add-doctor' ? 'active' : null }}"><a href="{{route('doctor.add-doctor')}}">Add Doctor</a></li>                       
                            <li class="{{ Request::segment(2) === 'profile' ? 'active' : null }}"><a href="{{route('doctor.profile')}}">Doctor Profile</a></li>
                            <li class="{{ Request::segment(2) === 'events' ? 'active' : null }}"><a href="{{route('doctor.events')}}">Doctor Schedule</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::segment(1) === 'patients' ? 'active open' : null }}">
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Patients</span></a>
                        <ul class="ml-menu">
                            <li class="{{ Request::segment(2) === 'all-patients' ? 'active' : null }}"><a href="{{route('patients.all-patients')}}">All Patients</a></li>
                            <li class="{{ Request::segment(2) === 'add-patients' ? 'active' : null }}"><a href="{{route('patients.add-patients')}}">Add Patient</a></li>                       
                            <li class="{{ Request::segment(2) === 'patients-profile' ? 'active' : null }}"><a href="{{route('patients.patients-profile')}}">Patient Profile</a></li>
                            <li class="{{ Request::segment(2) === 'invoice' ? 'active' : null }}"><a href="{{route('patients.invoice')}}">Invoice</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::segment(1) === 'payment' ? 'active open' : null }}">
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-balance-wallet"></i><span>Payments</span></a>
                        <ul class="ml-menu">
                            <li class="{{ Request::segment(2) === 'all-payment' ? 'active' : null }}"><a href="{{route('payment.all-payment')}}">All Payments</a></li>
                            <li class="{{ Request::segment(2) === 'add-payment' ? 'active' : null }}"><a href="{{route('payment.add-payment')}}">Add Payment</a></li>
                            <li class="{{ Request::segment(2) === 'invoice' ? 'active' : null }}"><a href="{{route('patients.invoice')}}">Invoice</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::segment(1) === 'departments' ? 'active open' : null }}">
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-label-alt"></i><span>Departments</span></a>
                        <ul class="ml-menu">
                            <li class="{{ Request::segment(2) === 'add-department' ? 'active' : null }}"><a href="{{route('departments.add-department')}}">Add</a></li>
                            <li class="{{ Request::segment(2) === 'all-departments' ? 'active' : null }}"><a href="{{route('departments.all-departments')}}">All Departments</a></li>
                            <li><a href="javascript:void(0);">Cardiology</a></li>
                            <li><a href="javascript:void(0);">Pulmonology</a></li>
                            <li><a href="javascript:void(0);">Gynecology</a></li>
                            <li><a href="javascript:void(0);">Neurology</a></li>
                            <li><a href="javascript:void(0);">Urology</a></li>
                            <li><a href="javascript:void(0);">Gastrology</a></li>
                            <li><a href="javascript:void(0);">Pediatrician</a></li>
                            <li><a href="javascript:void(0);">Laboratory</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Authentication</span></a>
                        <ul class="ml-menu">
                            <li><a href="{{route('authentication.login')}}">Sign In</a></li>
                            <li><a href="{{route('authentication.register')}}">Sign Up</a></li>
                            <li><a href="{{route('authentication.forgot-password')}}">Forgot Password</a></li>
                            <li><a href="{{route('authentication.page404')}}">Page 404</a></li>
                            <li><a href="{{route('authentication.page500')}}">Page 500</a></li>
                            <li><a href="{{route('authentication.page-offline')}}">Page Offline</a></li>
                            <li><a href="{{route('authentication.lockscreen')}}">Locked Screen</a></li>
                        </ul>
                    </li>
                    <li class="header">EXTRA COMPONENTS</li>
                    <li class="{{ Request::segment(1) === 'blog' ? 'active open' : null }}">
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a>
                        <ul class="ml-menu">
                            <li class="{{ Request::segment(2) === 'dashboard' ? 'active' : null }}"><a href="{{route('blog.dashboard')}}">Dashboard</a></li>
                            <li class="{{ Request::segment(2) === 'new-post' ? 'active' : null }}"><a href="{{route('blog.new-post')}}">New Post</a></li>
                            <li class="{{ Request::segment(2) === 'list' ? 'active' : null }}"><a href="{{route('blog.list')}}">Blog List</a></li>
                            <li class="{{ Request::segment(2) === 'grid' ? 'active' : null }}"><a href="{{route('blog.grid')}}">Blog Grid</a></li>
                            <li class="{{ Request::segment(2) === 'detail' ? 'active' : null }}"><a href="{{route('blog.detail')}}">Blog Detail</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::segment(1) === 'file-manager' ? 'active open' : null }}">
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-folder"></i><span>File Manager</span></a>
                        <ul class="ml-menu">
                            <li class="{{ Request::segment(2) === 'dashboard' ? 'active' : null }}"><a href="{{route('file-manager.dashboard')}}">All File</a></li>
                            <li class="{{ Request::segment(2) === 'documents' ? 'active' : null }}"><a href="{{route('file-manager.documents')}}" >Documents</a></li>
                            <li class="{{ Request::segment(2) === 'media' ? 'active' : null }}"><a href="{{route('file-manager.media')}}">Media</a></li>
                            <li class="{{ Request::segment(2) === 'image' ? 'active' : null }}"><a href="{{route('file-manager.image')}}">Images</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::segment(1) === 'app' ? 'active open' : null }}">
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>App</span></a>
                        <ul class="ml-menu">
                            <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a href="{{route('app.inbox')}}">Inbox</a></li>
                            <li class="{{ Request::segment(2) === 'chat' ? 'active' : null }}"><a href="{{route('app.chat')}}">Chat</a></li>
                            <li class="{{ Request::segment(2) === 'contact-list' ? 'active' : null }}"><a href="{{route('app.contact-list')}}">Contact list</a></li>
                        </ul>
                    </li>                    
                    <li class="{{ Request::segment(1) === 'widgets' ? 'active open' : null }}">
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Widgets</span></a>
                        <ul class="ml-menu">
                            <li class="{{ Request::segment(2) === 'apps' ? 'active' : null }}"><a href="{{route('widgets.apps')}}">Apps Widgetse</a></li>
                            <li class="{{ Request::segment(2) === 'data' ? 'active' : null }}"><a href="{{route('widgets.data')}}">Data Widgetse</a></li>
                        </ul>
                    </li>                    
                    <li class="{{ Request::segment(1) === 'pages' ? 'active open' : null }}">
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Sample Pages</span></a>
                        <ul class="ml-menu">
                            <li class="{{ Request::segment(2) === 'blank-page' ? 'active' : null }}"><a href="{{route('pages.blank-page')}}">Blank Page</a></li>
                            <li class="{{ Request::segment(2) === 'rtl' ? 'active' : null }}"><a href="{{route('pages.rtl')}}">RTL Support</a></li>
                            <li class="{{ Request::segment(2) === 'image-gallery' ? 'active' : null }}"><a href="{{route('pages.image-gallery')}}">Image Gallery</a></li>
                            <li class="{{ Request::segment(2) === 'profile' ? 'active' : null }}"><a href="{{route('pages.profile')}}">Profile</a></li>
                            <li class="{{ Request::segment(2) === 'timeline' ? 'active' : null }}"><a href="{{route('pages.timeline')}}">Timeline</a></li>                            
                            <li class="{{ Request::segment(2) === 'invoices' ? 'active' : null }}"><a href="{{route('pages.invoices')}}">Invoices</a></li>
                            <li class="{{ Request::segment(2) === 'search-results' ? 'active' : null }}"><a href="{{route('pages.search-results')}}">Search Results</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::segment(1) === 'ui' ? 'active open' : null }}">
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>User Interface (UI)</span></a>
                        <ul class="ml-menu">
                            <li class="{{ Request::segment(2) === 'ui-kit' ? 'active' : null }}"><a href="{{route('ui.ui-kit')}}">UI KIT</a></li>
                            <li class="{{ Request::segment(2) === 'alerts' ? 'active' : null }}"><a href="{{route('ui.alerts')}}">Alerts</a></li>
                            <li class="{{ Request::segment(2) === 'collapse' ? 'active' : null }}"><a href="{{route('ui.collapse')}}">Collapse</a></li>
                            <li class="{{ Request::segment(2) === 'colors' ? 'active' : null }}"><a href="{{route('ui.colors')}}">Colors</a></li>
                            <li class="{{ Request::segment(2) === 'dialogs' ? 'active' : null }}"><a href="{{route('ui.dialogs')}}">Dialogs</a></li>
                            <li class="{{ Request::segment(2) === 'icons' ? 'active' : null }}"><a href="{{route('ui.icons')}}">Icons</a></li>
                            <li class="{{ Request::segment(2) === 'list-group' ? 'active' : null }}"><a href="{{route('ui.list-group')}}">List Group</a></li>
                            <li class="{{ Request::segment(2) === 'media-object' ? 'active' : null }}"><a href="{{route('ui.media-object')}}">Media Object</a></li>
                            <li class="{{ Request::segment(2) === 'modals' ? 'active' : null }}"><a href="{{route('ui.modals')}}">Modals</a></li>
                            <li class="{{ Request::segment(2) === 'notifications' ? 'active' : null }}"><a href="{{route('ui.notifications')}}">Notifications</a></li>
                            <li class="{{ Request::segment(2) === 'progressbars' ? 'active' : null }}"><a href="{{route('ui.progressbars')}}">Progress Bars</a></li>
                            <li class="{{ Request::segment(2) === 'range-sliders' ? 'active' : null }}"><a href="{{route('ui.range-sliders')}}">Range Sliders</a></li>
                            <li class="{{ Request::segment(2) === 'sortable-nestable' ? 'active' : null }}"><a href="{{route('ui.sortable-nestable')}}">Sortable Nestable</a></li>
                            <li class="{{ Request::segment(2) === 'tabs' ? 'active' : null }}"><a href="{{route('ui.tabs')}}">Tabs</a></li>
                            <li class="{{ Request::segment(2) === 'waves' ? 'active' : null }}"><a href="{{route('ui.waves')}}">Waves</a></li>
                        </ul>
                    </li>
                    <li class="header">Extra</li>
                    <li>
                        <div class="progress-container progress-primary m-t-10">
                            <span class="progress-badge">Traffic this Month</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
                                    <span class="progress-value">67%</span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-container progress-info">
                            <span class="progress-badge">Server Load</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-pane stretchLeft" id="user">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info m-b-20 p-b-15">
                            <div class="image"><a href="{{route('doctor.profile')}}"><img src="../assets/images/profile_av.jpg" alt="User"></a></div>
                            <div class="detail">
                                <h4>Dr. Charlotte</h4>
                                <small>Neurologist</small>                        
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a>
                                    <a title="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a>
                                    <a title="instagram" href="#"><i class="zmdi zmdi-instagram"></i></a>
                                </div>
                                <div class="col-4 p-r-0">
                                    <h5 class="m-b-5">18</h5>
                                    <small>Exp</small>
                                </div>
                                <div class="col-4">
                                    <h5 class="m-b-5">125</h5>
                                    <small>Awards</small>
                                </div>
                                <div class="col-4 p-l-0">
                                    <h5 class="m-b-5">148</h5>
                                    <small>Clients</small>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    <li>
                        <small class="text-muted">Location: </small>
                        <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                        <hr>
                        <small class="text-muted">Email address: </small>
                        <p>Charlotte@example.com</p>
                        <hr>
                        <small class="text-muted">Phone: </small>
                        <p>+ 202-555-0191</p>
                        <hr>
                        <small class="text-muted">Website: </small>
                        <p>http://dr.charlotte.com/ </p>
                        <hr>
                        <ul class="list-unstyled">
                            <li>
                                <div>Colorectal Surgery</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-blue " role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%"> <span class="sr-only">62% Complete</span></div>
                                </div>
                            </li>
                            <li>
                                <div>Endocrinology</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-green " role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%"> <span class="sr-only">87% Complete</span></div>
                                </div>
                            </li>
                            <li>
                                <div>Dermatology</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-amber" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"> <span class="sr-only">32% Complete</span></div>
                                </div>
                            </li>
                            <li>
                                <div>Neurophysiology</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-blush" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%"> <span class="sr-only">56% Complete</span></div>
                                </div>
                            </li>
                        </ul>                        
                    </li>                    
                </ul>
            </div>
        </div>
    </div>    
</aside>
