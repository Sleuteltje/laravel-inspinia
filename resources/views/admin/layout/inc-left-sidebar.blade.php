<nav class="navbar-default navbar-static-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav" id="side-menu">
			<li class="nav-header">
				<div class="dropdown profile-element">
					<span><img alt="image" class="img-circle" src="{{asset('/assets/img/profile_small.jpg')}}"></span>
					<a data-toggle="dropdown" class="dropdown-toggle" href="{{ URL::to('#') }}">
						<span class="clear">
							<span class="block m-t-xs"><strong class="font-bold">David Williams</strong></span>
							<span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
						</span>
					</a>
					<ul class="dropdown-menu animated fadeInRight m-t-xs">
						<li><a href="{{ URL::to('admin/profile') }}">Profile</a></li>
						<li><a href="{{ URL::to('admin/contacts') }}">Contacts</a></li>
						<li><a href="{{ URL::to('admin/mailbox') }}">Mailbox</a></li>
						<li class="divider"></li>
						<li><a href="{{ URL::to('admin/lockscreen') }}">Lock Screen</a></li>
						<li><a href="{{ URL::to('admin/login') }}">Logout</a></li>
					</ul>
				</div>
				<div class="logo-element">CI+</div>
			</li>
			<li>
                <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ URL::to('admin/index') }}">Dashboard v.1</a></li>
                    <li><a href="{{ URL::to('admin/index2') }}">Dashboard v.2</a></li>
                    <li><a href="{{ URL::to('admin/index3') }}">Dashboard v.3</a></li>
                    <li><a href="{{ URL::to('admin/index4') }}">Dashboard v.4</a></li>
                </ul>
            </li>			
			<li>
				<a href="#"><i class="fa fa-bar-chart-o"></i><span class="nav-label">Graph</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="{{ URL::to('admin/graph_flot') }}">Flot Charts</a></li>
					<li><a href="{{ URL::to('admin/graph_morris') }}">Morris.js Charts</a></li>
					<li><a href="{{ URL::to('admin/graph_rickshaw') }}">Rickshaw Charts</a></li>
					<li><a href="{{ URL::to('admin/graph_chartjs') }}">Chart.js</a></li>
					<li><a href="{{ URL::to('admin/graph_peity') }}">Peity Charts</a></li>
					<li><a href="{{ URL::to('admin/graph_sparkline') }}">Sparkline Charts</a></li>
				</ul>
			</li>
			<li>
				<a href="#"><i class="fa fa-envelope"></i><span class="nav-label">Mailbox</span><span class="label label-warning pull-right">16/24</span></a>
				<ul class="nav nav-second-level">
					<li><a href="{{ URL::to('admin/mailbox') }}">Inbox</a></li>
					<li><a href="{{ URL::to('admin/mail_detail') }}">Email view</a></li>
					<li><a href="{{ URL::to('admin/mail_compose') }}">Compose email</a></li>
					<li><a href="{{ URL::to('admin/email_template') }}">Email templates</a></li>
				</ul>
			</li>
			<li>
				<a href="{{ URL::to('admin/widgets') }}"><i class="fa fa-flask"></i><span class="nav-label">Widget</span></a>
			</li>
			<li>
				<a href="#"><i class="fa fa-edit"></i><span class="nav-label">Form</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="{{ URL::to('admin/form_basic') }}">Basic form</a></li>
					<li><a href="{{ URL::to('admin/form_advanced') }}">Advanced Plugins</a></li>
					<li><a href="{{ URL::to('admin/form_wizard') }}">Wizard</a></li>
					<li><a href="{{ URL::to('admin/form_file_upload') }}">File Upload</a></li>
					<li><a href="{{ URL::to('admin/form_editors') }}">Text Editor</a></li>
				</ul>
			</li>
			<li>
				<a href="#"><i class="fa fa-desktop"></i><span class="nav-label">App View</span><span class="pull-right label label-primary">SPECIAL</span></a>
				<ul class="nav nav-second-level">
					<li><a href="{{ URL::to('admin/projects') }}">Projects</a></li>
					<li><a href="{{ URL::to('admin/project_detail') }}">Project detail</a></li>
					<li><a href="{{ URL::to('admin/file_manager') }}">File manager</a></li>
					<li><a href="{{ URL::to('admin/calendar') }}">Calendar</a></li>
					<li><a href="{{ URL::to('admin/timeline') }}">Timeline</a></li>
					<li><a href="{{ URL::to('admin/pin_board') }}">Pin board</a></li>
				</ul>
			</li>
			<li>
				<a href="#"><i class="fa fa-files-o"></i><span class="nav-label">Other Page</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="{{ URL::to('admin/search_results') }}">Search results</a></li>
					<li><a href="{{ URL::to('admin/lockscreen') }}">Lockscreen</a></li>
					<li><a href="{{ URL::to('admin/invoice') }}">Invoice</a></li>
					<li><a href="{{ URL::to('admin/login') }}">Login</a></li>
					<li><a href="{{ URL::to('admin/login_two_columns') }}">Login v.2</a></li>
					<li><a href="{{ URL::to('admin/register') }}">Register</a></li>
					<li><a href="{{ URL::to('admin/error404') }}">404 Page</a></li>
					<li><a href="{{ URL::to('admin/error500') }}">500 Page</a></li>
					<li><a href="{{ URL::to('admin/empty_page') }}">Empty page</a></li>
				</ul>
			</li>
			<li>
				<a href="#"><i class="fa fa-globe"></i><span class="nav-label">Miscellaneous</span><span class="label label-info pull-right">NEW</span></a>
				<ul class="nav nav-second-level">
					<li><a href="{{ URL::to('admin/toastr_notifications') }}">Notification</a></li>
					<li><a href="{{ URL::to('admin/nestable_list') }}">Nestable list</a></li>
					<li><a href="{{ URL::to('admin/timeline_2') }}">Timeline v.2</a></li>
					<li><a href="{{ URL::to('admin/forum_main') }}">Forum view</a></li>
					<li><a href="{{ URL::to('admin/google_maps') }}">Google maps</a></li>
					<li><a href="{{ URL::to('admin/code_editor') }}">Code editor</a></li>
					<li><a href="{{ URL::to('admin/modal_window') }}">Modal window</a></li>
					<li><a href="{{ URL::to('admin/validation') }}">Validation</a></li>
					<li><a href="{{ URL::to('admin/tree_view') }}">Tree view</a></li>
					<li><a href="{{ URL::to('admin/chat_view') }}">Chat view</a></li>
				</ul>
			</li>
			<li>
				<a href="#"><i class="fa fa-flask"></i><span class="nav-label">UI Element</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="{{ URL::to('admin/typography') }}">Typography</a></li>
					<li><a href="{{ URL::to('admin/icons') }}">Icons</a></li>
					<li><a href="{{ URL::to('admin/draggable_panels') }}">Draggable Panels</a></li>
					<li><a href="{{ URL::to('admin/buttons') }}">Buttons</a></li>
					<li><a href="{{ URL::to('admin/video') }}">Video</a></li>
					<li><a href="{{ URL::to('admin/tabs_panels') }}">Tabs & Panels</a></li>
					<li><a href="{{ URL::to('admin/notifications') }}">Notifications & Tooltips</a></li>
					<li><a href="{{ URL::to('admin/badges_labels') }}">Badges, Labels, Progress</a></li>
				</ul>
			</li>
			<li>
				<a href="{{ URL::to('admin/grid_options') }}"><i class="fa fa-laptop"></i><span class="nav-label">Grid option</span></a>
			</li>
			<li>
				<a href="#"><i class="fa fa-table"></i><span class="nav-label">Table</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="{{ URL::to('admin/table_basic') }}">Static Tables</a></li>
					<li><a href="{{ URL::to('admin/table_data_tables') }}">Data Tables</a></li>
					<li><a href="{{ URL::to('admin/jq_grid') }}">jqGrid</a></li>
				</ul>
			</li>
			<li>
				<a href="#"><i class="fa fa-picture-o"></i><span class="nav-label">Gallery</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="{{ URL::to('admin/basic_gallery') }}">Lightbox Gallery</a></li>
					<li><a href="{{ URL::to('admin/carousel') }}">Bootstrap Carusela</a></li>
				</ul>
			</li>
			<li>
                <a href="#"><i class="fa fa-sitemap"></i><span class="nav-label">Menu Levels </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Third Level <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a href="#">Third Level Item</a></li>
                            <li><a href="#">Third Level Item</a></li>
                            <li><a href="#">Third Level Item</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Second Level Item</a></li>
                    <li><a href="#">Second Level Item</a></li>
                    <li><a href="#">Second Level Item</a></li>
                </ul>
            </li>			
			<li>
				<a href="{{ URL::to('admin/css_animation') }}"><i class="fa fa-magic"></i><span class="nav-label">CSS Animation</span><span class="label label-info pull-right">62</span></a>
			</li>
			<li class="landing_link">
                <a target="_blank" href="{{ URL::to('admin/css_animation') }}"><i class="fa fa-star"></i> <span class="nav-label">Landing Page</span> <span class="label label-warning pull-right">NEW</span></a>
            </li>
			<li class="special_link">
				<a href="{{ URL::to('admin/package') }}"><i class="fa fa-database"></i><span class="nav-label">Package</span></a>
			</li>
		</ul>
	</div>
</nav>