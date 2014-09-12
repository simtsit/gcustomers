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
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs">Charts</span>
					</a>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
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
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-list"></i>
						<span class="hidden-xs">Reports</span>
					</a>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-map-marker"></i>
						<span class="hidden-xs">Invoices</span>
					</a>
				</li>

				<li>
					<a class="ajax-link" href="<?php echo base_url(); ?>ajax/calendar.html">
						<i class="fa fa-calendar"></i>
						<span class="hidden-xs">Calendar</span>
					</a>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-picture-o"></i>
						<span class="hidden-xs">Settings</span>
					</a>
				</li>

				<li>
					<a class="ajax-link" href="<?php echo base_url(); ?>ajax/typography.html">
						<i class="fa fa-font"></i>
						<span class="hidden-xs">History Log</span>
					</a>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-picture-o"></i>
						<span class="hidden-xs">Calendar</span>
					</a>
				</li>
			</ul>
		</div>