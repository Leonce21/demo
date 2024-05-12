<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<img src="/backend/vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
				<img src="/backend/vendors/images/deskapp-logo-white.svg" alt="" class="light-logo" />
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
						<div class="sidebar-small-cap">Application</div>
					</li>
					<li>
						<a href="<?= route_to('dashboard.home'); ?>" class="dropdown-toggle no-arrow">
							<span class="micon bi bi-house"></span
							><span class="mtext">Home</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon bi bi-textarea-resize"></span><span class="mtext">Carte Grise</span>
						</a>
						<ul class="submenu">
							<li><a href="form-basic.html">nouvelle immatriculation</a></li>
							<li>
								<a href="advanced-components.html">Renouvelle votre carte grise</a>
							</li>
							<li>
								<a href="advanced-components.html">Dupliquer votre carte grise</a>
							</li>
							<li>
								<a href="advanced-components.html">Change de prioprietaire</a>
							</li>
							<li>
								<a href="advanced-components.html">Change d'immatriculation</a>
							</li>
							
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon bi bi-textarea-resize"></span><span class="mtext">Carte Blue</span>
						</a>
						<ul class="submenu">
							<li><a href="form-basic.html">nouvelle carte blue</a></li>
							<li>
								<a href="advanced-components.html">Renouvelle votre carte blue</a>
							</li>
							<li>
								<a href="advanced-components.html">Dupliquer votre carte grise</a>
							</li>
							
							
						</ul>
					</li>
					
					<li>
						<a href="calendar.html" class="dropdown-toggle no-arrow">
							<span class="micon bi bi-calendar4-week"></span
							><span class="mtext">License de transport</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon bi bi-textarea-resize"></span><span class="mtext">Maritime</span>
						</a>
						<ul class="submenu">
							<li><a href="form-basic.html">nouvelle authorisation provisiore</a></li>
							
							<li>
								<a href="advanced-components.html">nouveau livret professionnell maritime</a>
							</li>
							<li>
								<a href="advanced-components.html">nouveau livret maritime temporiare</a>
							</li>
							<li>
								<a href="advanced-components.html">nouvelle carte marin</a>
							</li>
							<li>
								<a href="advanced-components.html">nouveau permit de conduire des pirogues a moteur</a>
							</li>
							
							
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon bi bi-textarea-resize"></span><span class="mtext">Consultation & Modification</span>
						</a>
						
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<div class="sidebar-small-cap">Account</div>
					</li>
					
					<li>
						<a href="<?= route_to('profile-page'); ?>" class="dropdown-toggle no-arrow">
							<span class="micon bi bi-person"></span
							><span class="mtext">Profile</span>
						</a>
					</li>

					<li>
						<a href="<?= site_url('setting-page'); ?>" class="dropdown-toggle no-arrow">
							<span class="micon bi bi-gear"></span
							><span class="mtext">Settings</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>