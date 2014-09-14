<!--Start Container-->
<div id="main" class="container-fluid">
	<div class="row">
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu">
				<li>
					<a href="<?php echo base_url(); ?>dashboard" class="<?php if ($active=='Dashboard') echo 'active'; ?> ajax-link">
						<i class="fa fa-dashboard"></i>
						<span class="hidden-xs">Dashboard</span>
					</a>
				</li>

				<li class="dropdown">
					<a href="<?php echo base_url() . 'charts'; ?>" class="<?php if ($active=='Charts') echo 'active'; ?> ajax-link">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs">Charts</span>
					</a>
				</li>

				<li class="dropdown">
					<a href="<?php echo base_url() . 'contacts'; ?>" class="<?php if ($active=='Contacts') echo 'active'; ?> ajax-link">
						<i class="fa fa-table"></i>
						<span class="hidden-xs">Contacts</span>
					</a>
				</li>

				<li class="dropdown">
					<a href="<?php echo base_url() . 'customers'; ?>" class="<?php if ($active=='Customers') echo 'active'; ?> ajax-link">
						<i class="fa fa-pencil-square-o"></i>
						<span class="hidden-xs">Customers</span>
					</a>
				</li>

				<li class="dropdown">
					<a href="<?php echo base_url() . 'companies'; ?>" class="<?php if ($active=='Companies') echo 'active'; ?> ajax-link">
						<i class="fa fa-desktop"></i>
						<span class="hidden-xs">Companies</span>
					</a>
				</li>

				<li class="dropdown">
					<a href="<?php echo base_url() . 'reports'; ?>" class="<?php if ($active=='Reports') echo 'active'; ?> dropdown-toggle">
						<i class="fa fa-list"></i>
						<span class="hidden-xs">Reports</span>
					</a>
					<ul class="dropdown-menu">
						<li>1</li>
						<li>2</li>
						<li>3</li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="<?php echo base_url() . 'invoices'; ?>" class="<?php if ($active=='Invoices') echo 'active'; ?> ajax-link">
						<i class="fa fa-map-marker"></i>
						<span class="hidden-xs">Invoices</span>
					</a>
				</li>

				<li class="dropdown">
					<a href="<?php echo base_url() . 'dont_click_this'; ?>" class="<?php if ($active=='Dontclickthis') echo 'active'; ?> ajax-link">
						<i class="fa fa-picture-o"></i>
						<span class="hidden-xs">Don't Click Here!</span>
					</a>
				</li>

				<li class="dropdown">
					<a href="<?php echo base_url() . 'calendar'; ?>" class="<?php if ($active=='Calendar') echo 'active'; ?> ajax-link">
						<i class="fa fa-calendar"></i>
						<span class="hidden-xs">Calendar</span>
					</a>
				</li>

				<li class="dropdown">
					<a href="<?php echo base_url() . 'settings'; ?>" class="<?php if ($active=='Settings') echo 'active'; ?> ajax-link">
						<i class="fa fa-picture-o"></i>
						<span class="hidden-xs">Settings</span>
					</a>
				</li>

				<li class="dropdown">
					<a href="<?php echo base_url() . 'history_log'; ?>" class="<?php if ($active=='Historylog') echo 'active'; ?> ajax-link">
						<i class="fa fa-font"></i>
						<span class="hidden-xs">History Log</span>
					</a>
				</li>

				<li class="dropdown">
					<a href="<?php echo base_url() .'logout'; ?>" class="dropdown-toggle">
						<i class="fa fa-off"></i>
						<span class="hidden-xs">Logout</span>
					</a>
				</li>
				
<!-- 				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs">Charts</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/charts_xcharts.html">xCharts</a></li>
						<li><a class="ajax-link" href="ajax/charts_flot.html">Flot Charts</a></li>
						<li><a class="ajax-link" href="ajax/charts_google.html">Google Charts</a></li>
						<li><a class="ajax-link" href="ajax/charts_morris.html">Morris Charts</a></li>
						<li><a class="ajax-link" href="ajax/charts_coindesk.html">CoinDesk realtime</a></li>
					</ul>
				</li>	 -->			

			</ul>
		</div>