
<?php require_once 'inc/header.php'; ?>

<body>

	<!-- Navbar -->
	<?php require_once 'inc/top-menu.php'; ?>
	<!-- /navbar -->


	<!-- Page container -->
 	<div class="page-container">


		<!-- Sidebar -->
		<?php require_once 'inc/left-menu.php'; ?>
		<!-- /sidebar -->


		<!-- Page content -->
	 	<div class="page-content">


			<!-- Page header -->
			<div class="page-header">
				<div class="page-title">
					<h3>Dashboard <small>Welcome Eugene. 12 hours since last visit</small></h3>
				</div>

				<div id="reportrange" class="range">
					<div class="visible-xs header-element-toggle">
						<a class="btn btn-primary btn-icon"><i class="icon-calendar"></i></a>
					</div>
					<div class="date-range"></div>
					<span class="label label-danger">9</span>
				</div>
			</div>
			<!-- /page header -->


			<!-- Breadcrumbs line -->
			<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Dashboard</li>
				</ul>

				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>

				<ul class="breadcrumb-buttons collapse">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search3"></i> <span>Search</span> <b class="caret"></b></a>
						<div class="popup dropdown-menu dropdown-menu-right">
							<div class="popup-header">
								<a href="#" class="pull-left"><i class="icon-paragraph-justify"></i></a>
								<span>Quick search</span>
								<a href="#" class="pull-right"><i class="icon-new-tab"></i></a>
							</div>
							<form action="#" class="breadcrumb-search">
								<input type="text" placeholder="Type and hit enter..." name="search" class="form-control autocomplete">
								<div class="row">
									<div class="col-xs-6">
										<label class="radio">
											<input type="radio" name="search-option" class="styled" checked="checked">
											Everywhere
										</label>
										<label class="radio">
											<input type="radio" name="search-option" class="styled">
											Invoices
										</label>
									</div>

									<div class="col-xs-6">
										<label class="radio">
											<input type="radio" name="search-option" class="styled">
											Users
										</label>
										<label class="radio">
											<input type="radio" name="search-option" class="styled">
											Orders
										</label>
									</div>
								</div>

								<input type="submit" class="btn btn-block btn-success" value="Search">
							</form>
						</div>
					</li>

					<li class="language dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/images/flags/german.png" alt=""> <span>German</span> <b class="caret"></b></a>
						<ul class="dropdown-menu dropdown-menu-right icons-right">
							<li><a href="#"><img src="assets/images/flags/ukrainian.png" alt=""> Ukrainian</a></li>
							<li class="active"><a href="#"><img src="assets/images/flags/english.png" alt=""> English</a></li>
							<li><a href="#"><img src="assets/images/flags/spanish.png" alt=""> Spanish</a></li>
							<li><a href="#"><img src="assets/images/flags/german.png" alt=""> German</a></li>
							<li><a href="#"><img src="assets/images/flags/hungarian.png" alt=""> Hungarian</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /breadcrumbs line -->


			<!-- Info blocks -->
			<ul class="info-blocks">
				<li class="bg-primary">
					<div class="top-info">
						<a href="#">Add new post</a>
						<small>post management</small>
					</div>
					<a href="#"><i class="icon-pencil"></i></a>
					<span class="bottom-info bg-danger">12 drafts in progress</span>
				</li>
				<li class="bg-success">
					<div class="top-info">
						<a href="#">Site parameters</a>
						<small>layout settings</small>
					</div>
					<a href="#"><i class="icon-cogs"></i></a>
					<span class="bottom-info bg-primary">No updates</span>
				</li>
				<li class="bg-danger">
					<div class="top-info">
						<a href="#">Site statistics</a>
						<small>visits, users, orders stats</small>
					</div>
					<a href="#"><i class="icon-stats2"></i></a>
					<span class="bottom-info bg-primary">3 new updates</span>
				</li>
				<li class="bg-info">
					<div class="top-info">
						<a href="#">My messages</a>
						<small>messages history</small>
					</div>
					<a href="#"><i class="icon-bubbles3"></i></a>
					<span class="bottom-info bg-primary">24 new messages</span>
				</li>
				<li class="bg-warning">
					<div class="top-info">
						<a href="#">Orders history</a>
						<small>purchases statistics</small>
					</div>
					<a href="#"><i class="icon-cart2"></i></a>
					<span class="bottom-info bg-primary">17 new orders</span>
				</li>
				<li class="bg-primary">
					<div class="top-info">
						<a href="#">Invoices stats</a>
						<small>invoices archive</small>
					</div>
					<a href="#"><i class="icon-coin"></i></a>
					<span class="bottom-info bg-danger">9 new invoices</span>
				</li>
			</ul>
			<!-- /info blocks -->


			<!-- Alert -->
			<div class="alert alert-warning fade in block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <i class="icon-info"></i> Nullam tincidunt dapibus nisi. Aenean porttitor egestas dolor, ut pretium enim vehicula at. Vivamus vulputate risus felis, eget blandit urna aliquam at
            </div>
            <!-- /alert -->


            <!-- Questions and contact -->
            <div class="row">
            	<div class="col-md-6">

                	<!-- Questions -->
                	<h6><i class="icon-question5"></i> Newest questions</h6>
			        <div class="panel-group block">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h6 class="panel-title panel-trigger">
									<a data-toggle="collapse" href="#question1">1. Morbi a nulla quis enim porttitor hasellus rutrum tincidunt lacus?</a>
								</h6>
							</div>
							<div id="question1" class="panel-collapse collapse">
								<div class="panel-body">
									<p class="alert alert-success fade in text-center">
						                <button type="button" class="close" data-dismiss="alert">×</button>
						                Maecenas imperdiet euismod rutrum. Vivamus at lacus vel nibh ullamcorper aliquam vel nec felis. Duis eu neque dignissim, imperdiet tellus vitae, interdum purus.
						            </p>		
						            <hr>							
									<p><strong>Praesent sollicitudin vulputate mauris, sodales auctor neque sollicitudin sed. Vestibulum non aliquet lorem, vel vehicula tellus. Vestibulum ante ipsum primis.</strong></p>
						            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h6 class="panel-title panel-trigger">
									<a data-toggle="collapse" href="#question2">2. Suspendisse rhoncus vulputate enim erat non euismod fermentum?</a>
								</h6>
							</div>
							<div id="question2" class="panel-collapse collapse">
								<div class="panel-body">
									<p class="alert alert-success fade in text-center">
						                <button type="button" class="close" data-dismiss="alert">×</button>
						                Maecenas imperdiet euismod rutrum. Vivamus at lacus vel nibh ullamcorper aliquam vel nec felis. Duis eu neque dignissim, imperdiet tellus vitae, interdum purus.
						            </p>		
						            <hr>							
									<p><strong>Praesent sollicitudin vulputate mauris, sodales auctor neque sollicitudin sed. Vestibulum non aliquet lorem, vel vehicula tellus. Vestibulum ante ipsum primis.</strong></p>
						            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h6 class="panel-title panel-trigger">
									<a data-toggle="collapse" href="#question3">3. Nullam non massa nec augue pharetra venenatis facilisis viverra?</a>
								</h6>
							</div>
							<div id="question3" class="panel-collapse collapse">
								<div class="panel-body">
									<p class="alert alert-success fade in text-center">
						                <button type="button" class="close" data-dismiss="alert">×</button>
						                Maecenas imperdiet euismod rutrum. Vivamus at lacus vel nibh ullamcorper aliquam vel nec felis. Duis eu neque dignissim, imperdiet tellus vitae, interdum purus.
						            </p>		
						            <hr>							
									<p><strong>Praesent sollicitudin vulputate mauris, sodales auctor neque sollicitudin sed. Vestibulum non aliquet lorem, vel vehicula tellus. Vestibulum ante ipsum primis.</strong></p>
						            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h6 class="panel-title panel-trigger">
									<a data-toggle="collapse" href="#question4">4. Aliquam at nisi eget lacus tincidunt semper?</a>
								</h6>
							</div>
							<div id="question4" class="panel-collapse collapse">
								<div class="panel-body">
									<p class="alert alert-success fade in text-center">
						                <button type="button" class="close" data-dismiss="alert">×</button>
						                Maecenas imperdiet euismod rutrum. Vivamus at lacus vel nibh ullamcorper aliquam vel nec felis. Duis eu neque dignissim, imperdiet tellus vitae, interdum purus.
						            </p>		
						            <hr>							
									<p><strong>Praesent sollicitudin vulputate mauris, sodales auctor neque sollicitudin sed. Vestibulum non aliquet lorem, vel vehicula tellus. Vestibulum ante ipsum primis.</strong></p>
						            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h6 class="panel-title panel-trigger">
									<a data-toggle="collapse" href="#question5">5. Vivamus sit amet nulla ac nulla iaculis blandit vitae?</a>
								</h6>
							</div>
							<div id="question5" class="panel-collapse collapse">
								<div class="panel-body">
									<p class="alert alert-success fade in text-center">
						                <button type="button" class="close" data-dismiss="alert">×</button>
						                Maecenas imperdiet euismod rutrum. Vivamus at lacus vel nibh ullamcorper aliquam vel nec felis. Duis eu neque dignissim, imperdiet tellus vitae, interdum purus.
						            </p>		
						            <hr>							
									<p><strong>Praesent sollicitudin vulputate mauris, sodales auctor neque sollicitudin sed. Vestibulum non aliquet lorem, vel vehicula tellus. Vestibulum ante ipsum primis.</strong></p>
						            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h6 class="panel-title panel-trigger">
									<a data-toggle="collapse" href="#question6">6. Nunc vitae eleifend sapien. Vestibulum et?</a>
								</h6>
							</div>
							<div id="question6" class="panel-collapse collapse">
								<div class="panel-body">
									<p class="alert alert-success fade in text-center">
						                <button type="button" class="close" data-dismiss="alert">×</button>
						                Maecenas imperdiet euismod rutrum. Vivamus at lacus vel nibh ullamcorper aliquam vel nec felis. Duis eu neque dignissim, imperdiet tellus vitae, interdum purus.
						            </p>		
						            <hr>							
									<p><strong>Praesent sollicitudin vulputate mauris, sodales auctor neque sollicitudin sed. Vestibulum non aliquet lorem, vel vehicula tellus. Vestibulum ante ipsum primis.</strong></p>
						            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
								</div>
							</div>
						</div>
					</div>
					<!-- Questions -->


					<!-- Simple contact form -->
					<form action="#" class="block validate" role="form">
						<h6 class="heading-hr"><i class="icon-support"></i> Contact support</h6>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label>Your name: <span class="mandatory">*</span></label>
		                            <input type="text" name="name" placeholder="Eugene" class="form-control required">
								</div>

								<div class="col-md-6">
									<label>Email address: <span class="mandatory">*</span></label>
		                            <input type="text" name="email_field" placeholder="your@email.com" class="form-control required">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label>Attach file:</label>
                                    <input type="file" class="styled" id="attach">
								</div>

								<div class="col-md-6">
									<label>Choose department:</label>
		                            <select data-placeholder="Select department" class="select-full" tabindex="2">
		                                <option value=""></option> 
		                                <option value="Support">Support (online)</option> 
		                                <option value="Sles">Sales department</option> 
		                                <option value="Lawers">Lawers</option> 
		                                <option value="Information">Information</option> 
		                                <option value="Administration">Web administration</option> 
		                            </select>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label>Your message: <span class="mandatory">*</span></label>
							<textarea rows="5" cols="5" name="message" placeholder="Your message..." class="elastic form-control required"></textarea>
						</div>

		                <div class="text-right">
		                	<input type="reset" value="Cancel" class="btn btn-danger">
		                	<input type="submit" value="Send message" class="btn btn-primary">
		                </div>
					</form>
					<!-- /simple contact form -->

            	</div>

            	<div class="col-md-6">

		            <!-- Contacts -->
			    	<div class="block">
			    		<h6><i class="icon-paragraph-justify2"></i> Online contacts</h6>
			        	<ul class="message-list">

			        		<li class="message-list-header">Buddies</li>

			        		<li>
			                	<div class="clearfix">
			                		<div class="chat-member">
										<a href="#"><img src="http://placehold.it/300"></a> 
										<h6>Eugene Kopyov <span class="status status-success"></span> <small>&nbsp; /&nbsp; Wed developer</small></h6>
									</div>
									<div class="chat-actions">
										<a class="btn btn-link btn-icon btn-xs"><i class="icon-bubble3"></i></a>
										<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a>
										<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a>
									</div>
			                	</div>
			        		</li>

			        		<li>
			                	<div class="clearfix">
			                		<div class="chat-member">
										<a href="#"><img src="http://placehold.it/300"></a> 
										<h6>Duncan McMart <span class="status status-default"></span> <small>&nbsp; /&nbsp; Wed designer</small></h6>
									</div>
									<div class="chat-actions">
										<a class="btn btn-link btn-icon btn-xs"><i class="icon-bubble3"></i></a>
										<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a>
										<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a>
									</div>
			                	</div>
			        		</li>

			        		<li>
			                	<div class="clearfix">
			                		<div class="chat-member">
										<a href="#"><img src="http://placehold.it/300"></a> 
										<h6>Lucy Smith <span class="status status-warning"></span> <small>&nbsp; /&nbsp; UI expert</small></h6>
									</div>
									<div class="chat-actions">
										<a class="btn btn-link btn-icon btn-xs"><i class="icon-bubble3"></i></a>
										<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a>
										<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a>
									</div>
			                	</div>
			        		</li>

			        		<li class="message-list-header">Colleagues</li>

			        		<li>
			                	<div class="clearfix">
			                		<div class="chat-member">
										<a href="#"><img src="http://placehold.it/300"></a> 
										<h6>Angel Nowak <span class="status status-default"></span> <small>&nbsp; /&nbsp; Usability expert</small></h6>
									</div>
									<div class="chat-actions">
										<a class="btn btn-link btn-icon btn-xs"><i class="icon-bubble3"></i></a>
										<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a>
										<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a>
									</div>
			                	</div>
			        		</li>

			        		<li>
			                	<div class="clearfix">
			                		<div class="chat-member">
										<a href="#"><img src="http://placehold.it/300"></a> 
										<h6>Vin Dins <span class="status status-danger"></span> <small>&nbsp; /&nbsp; Wed developer</small></h6>
									</div>
									<div class="chat-actions">
										<a class="btn btn-link btn-icon btn-xs"><i class="icon-bubble3"></i></a>
										<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a>
										<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a>
									</div>
			                	</div>
			        		</li>

			        		<li class="message-list-header">Remote team members</li>

			        		<li>
			                	<div class="clearfix">
			                		<div class="chat-member">
										<a href="#"><img src="http://placehold.it/300"></a> 
										<h6>Robert Razinsky <span class="status status-default"></span> <small>&nbsp; /&nbsp; Usability expert</small></h6>
									</div>
									<div class="chat-actions">
										<a class="btn btn-link btn-icon btn-xs"><i class="icon-bubble3"></i></a>
										<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a>
										<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a>
									</div>
			                	</div>
			        		</li>

			        		<li>
			                	<div class="clearfix">
			                		<div class="chat-member">
										<a href="#"><img src="http://placehold.it/300"></a> 
										<h6>Malik Smitsons <span class="status status-danger"></span> <small>&nbsp; /&nbsp; Usability expert</small></h6>
									</div>
									<div class="chat-actions">
										<a class="btn btn-link btn-icon btn-xs"><i class="icon-bubble3"></i></a>
										<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-phone2"></i></a>
										<a href="#" class="btn btn-link btn-icon btn-xs"><i class="icon-camera5"></i></a>
									</div>
			                	</div>
			        		</li>

			        	</ul>
			    	</div>
			    	<!-- contacts -->

            	</div>

            </div>
            <!-- /questions and contact -->


            <!-- Newest team members -->
            <h6><i class="icon-people"></i> New team members</h6>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="block">
						<div class="thumbnail">
							<a href="#" class="thumb-zoom lightbox" title="Eugene A. Kopyov">
								<img src="http://placehold.it/300">
							</a>
						
					    	<div class="caption text-center">
					    		<h6>Eugene A. Kopyov <small>UX designer</small></h6>
				    			<div class="icons-group">
			                    	<a href="#" title="Google Drive" class="tip"><i class="icon-google-drive"></i></a>
			                    	<a href="#" title="Twitter" class="tip"><i class="icon-twitter"></i></a>
			                    	<a href="#" title="Github" class="tip"><i class="icon-github3"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="block">
				    	<div class="thumbnail">
							<a href="#" class="thumb-zoom lightbox" title="Sophia R. McJamer">
						    	<img src="http://placehold.it/300">
					    	</a>
					    
					    	<div class="caption text-center">
					    		<h6>Sophia R. McJamer <small>Media designer</small></h6>
				    			<div class="icons-group">
			                    	<a href="#" title="Google Drive" class="tip"><i class="icon-google-drive"></i></a>
			                    	<a href="#" title="Twitter" class="tip"><i class="icon-twitter"></i></a>
			                    	<a href="#" title="Github" class="tip"><i class="icon-github3"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="block">
				    	<div class="thumbnail">
							<a href="#" class="thumb-zoom lightbox" title="Noah Kennedy">
						    	<img src="http://placehold.it/300">
					    	</a>
					    
					    	<div class="caption text-center">
					    		<h6>Noah Kennedy <small>CEO &amp; founder</small></h6>
				    			<div class="icons-group">
			                    	<a href="#" title="Google Drive" class="tip"><i class="icon-google-drive"></i></a>
			                    	<a href="#" title="Twitter" class="tip"><i class="icon-twitter"></i></a>
			                    	<a href="#" title="Github" class="tip"><i class="icon-github3"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="block">
				    	<div class="thumbnail">
							<a href="#" class="thumb-zoom lightbox" title="Will DeBrandon">
						    	<img src="http://placehold.it/300">
					    	</a>
					    
					    	<div class="caption text-center">
					    		<h6>Will DeBrandon <small>Print designer</small></h6>
				    			<div class="icons-group">
			                    	<a href="#" title="Google Drive" class="tip"><i class="icon-google-drive"></i></a>
			                    	<a href="#" title="Twitter" class="tip"><i class="icon-twitter"></i></a>
			                    	<a href="#" title="Github" class="tip"><i class="icon-github3"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>
				</div>
			</div>
            <!-- /newest team members -->


			<!-- Alert -->
			<div class="alert alert-success fade in block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <i class="icon-info"></i> Nullam tincidunt dapibus nisi. Aenean porttitor egestas dolor, ut pretium enim vehicula at. Vivamus vulputate risus felis, eget blandit urna aliquam at
            </div>
            <!-- /alert -->


	        <!-- Tasks table -->
	        <div class="block">
	        	<h6 class="heading-hr"><i class="icon-grid"></i> Recent tasks</h6>
	            <div class="datatable-tasks">
	                <table class="table table-bordered">
	                    <thead>
	                        <tr>
	                            <th>Task Description</th>
	                            <th class="task-priority">Priority</th>
	                            <th class="task-date-added">Date Added</th>
	                            <th class="task-progress">Progress</th>
	                            <th class="task-deadline">Deadline</th>
	                            <th class="task-tools text-center">Tools</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                            <td class="task-desc">
	                            	<a href="task_detailed.html">Donec suscipit ultrices commodo. Suspendisse potenti</a>
	                            	<span>General layout additions</span>
	                            </td>
	                            <td class="text-center"><span class="label label-danger">High</span></td>
	                            <td>September 20, 2013</td>
	                            <td>
	                            	<div class="progress progress-micro">
										<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
											<span class="sr-only">90% Complete</span>
										</div>
									</div>
	                            </td>
	                            <td><i class="icon-clock"></i> <strong class="text-danger">14</strong> hours left</td>
		                        <td class="text-center">
		                            <div class="btn-group">
			                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
										<ul class="dropdown-menu icons-right dropdown-menu-right">
											<li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
											<li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
											<li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
											<li><a href="#"><i class="icon-stack"></i> Archive</a></li>
										</ul>
		                            </div>
		                        </td>
	                        </tr>
	                        <tr>
	                            <td class="task-desc">
	                            	<a href="task_detailed.html">Donec sagittis sit amet felis non semper</a>
	                            	<span>Design &amp; UI concepts</span>
	                            </td>
	                            <td class="text-center"><span class="label label-danger">High</span></td>
	                            <td>September 18, 2013</td>
	                            <td>
	                            	<div class="progress progress-micro">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
											<span class="sr-only">40% Complete</span>
										</div>
									</div>
	                            </td>
	                            <td><i class="icon-clock"></i> <strong class="text-danger">2</strong> days left</td>
		                        <td class="text-center">
		                            <div class="btn-group">
			                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
										<ul class="dropdown-menu icons-right dropdown-menu-right">
											<li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
											<li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
											<li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
											<li><a href="#"><i class="icon-stack"></i> Archive</a></li>
										</ul>
		                            </div>
		                        </td>
	                        </tr>
	                        <tr>
	                            <td class="task-desc">
	                            	<a href="task_detailed.html">Pellentesque sed nibh non neque auctor ornare ac in est</a>
	                            	<span>HTML / CSS changes</span>
	                            </td>
	                            <td class="text-center"><span class="label label-info">Low</span></td>
	                            <td>September 2, 2013</td>
	                            <td>
	                            	<div class="progress progress-micro">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
											<span class="sr-only">12% Complete</span>
										</div>
									</div>
	                            </td>
	                            <td><i class="icon-clock"></i> <strong class="text-danger">18</strong> days left</td>
		                        <td class="text-center">
		                            <div class="btn-group">
			                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
										<ul class="dropdown-menu icons-right dropdown-menu-right">
											<li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
											<li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
											<li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
											<li><a href="#"><i class="icon-stack"></i> Archive</a></li>
										</ul>
		                            </div>
		                        </td>
	                        </tr>
	                        <tr>
	                            <td class="task-desc">
	                            	<a href="task_detailed.html">Pellentesque habitant morbi tristique senectus et netus</a>
	                            	<span>HTML / CSS changes</span>
	                            </td>
	                            <td class="text-center"><span class="label label-success">Normal</span></td>
	                            <td>August 21, 2013</td>
	                            <td>
	                            	<div class="progress progress-micro">
										<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
											<span class="sr-only">50% Complete</span>
										</div>
									</div>
	                            </td>
	                            <td><i class="icon-clock"></i> <strong class="text-danger">7</strong> days left</td>
		                        <td class="text-center">
		                            <div class="btn-group">
			                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
										<ul class="dropdown-menu icons-right dropdown-menu-right">
											<li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
											<li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
											<li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
											<li><a href="#"><i class="icon-stack"></i> Archive</a></li>
										</ul>
		                            </div>
		                        </td>
	                        </tr>
	                        <tr>
	                            <td class="task-desc">
	                            	<a href="task_detailed.html">Et malesuada fames ac turpis egestas</a>
	                            	<span>HTML / CSS changes</span>
	                            </td>
	                            <td class="text-center"><span class="label label-danger">High</span></td>
	                            <td>August 12, 2013</td>
	                            <td>
	                            	<div class="progress progress-micro">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
											<span class="sr-only">80% Complete</span>
										</div>
									</div>
	                            </td>
	                            <td><i class="icon-clock"></i> <strong class="text-danger">90</strong> days left</td>
		                        <td class="text-center">
		                            <div class="btn-group">
			                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
										<ul class="dropdown-menu icons-right dropdown-menu-right">
											<li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
											<li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
											<li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
											<li><a href="#"><i class="icon-stack"></i> Archive</a></li>
										</ul>
		                            </div>
		                        </td>
	                        </tr>
	                        <tr>
	                            <td class="task-desc">
	                            	<a href="task_detailed.html">Maecenas eros nisl, tempor vitae dolor eu</a>
	                            	<span>General layout additions</span>
	                            </td>
	                            <td class="text-center"><span class="label label-success">Normal</span></td>
	                            <td>August 7, 2013</td>
	                            <td>
	                            	<div class="progress progress-micro">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100" style="width: 41%;">
											<span class="sr-only">41% Complete</span>
										</div>
									</div>
	                            </td>
	                            <td><i class="icon-clock"></i> <strong class="text-danger">62</strong> days left</td>
		                        <td class="text-center">
		                            <div class="btn-group">
			                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
										<ul class="dropdown-menu icons-right dropdown-menu-right">
											<li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
											<li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
											<li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
											<li><a href="#"><i class="icon-stack"></i> Archive</a></li>
										</ul>
		                            </div>
		                        </td>
	                        </tr>
	                        <tr>
	                            <td class="task-desc">
	                            	<a href="task_detailed.html">Nunc gravida, nunc vel condimentum mattis</a>
	                            	<span>General layout additions</span>
	                            </td>
	                            <td class="text-center"><span class="label label-danger">High</span></td>
	                            <td>July 30, 2013</td>
	                            <td>
	                            	<div class="progress progress-micro">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
											<span class="sr-only">40% Complete</span>
										</div>
									</div>
	                            </td>
	                            <td><i class="icon-clock"></i> <strong class="text-danger">21</strong> hour left</td>
		                        <td class="text-center">
		                            <div class="btn-group">
			                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
										<ul class="dropdown-menu icons-right dropdown-menu-right">
											<li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
											<li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
											<li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
											<li><a href="#"><i class="icon-stack"></i> Archive</a></li>
										</ul>
		                            </div>
		                        </td>
	                        </tr>
	                        <tr>
	                            <td class="task-desc">
	                            	<a href="task_detailed.html">Rhoncus rutrum metus neque rutrum tortor</a>
	                            	<span>General layout additions</span>
	                            </td>
	                            <td class="text-center"><span class="label label-danger">High</span></td>
	                            <td>July 26, 2013</td>
	                            <td>
	                            	<div class="progress progress-micro">
										<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
											<span class="sr-only">60% Complete</span>
										</div>
									</div>
	                            </td>
	                            <td><i class="icon-clock"></i> <strong class="text-danger">62</strong> days left</td>
		                        <td class="text-center">
		                            <div class="btn-group">
			                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
										<ul class="dropdown-menu icons-right dropdown-menu-right">
											<li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
											<li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
											<li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
											<li><a href="#"><i class="icon-stack"></i> Archive</a></li>
										</ul>
		                            </div>
		                        </td>
	                        </tr>
	                        <tr>
	                            <td class="task-desc">
	                            	<a href="task_detailed.html">Fusce sapien velit, accumsan eget risus et</a>
	                            	<span>General layout additions</span>
	                            </td>
	                            <td class="text-center"><span class="label label-info">Low</span></td>
	                            <td>July 22, 2013</td>
	                            <td>
	                            	<div class="progress progress-micro">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
											<span class="sr-only">40% Complete</span>
										</div>
									</div>
	                            </td>
	                            <td><i class="icon-clock"></i> <strong class="text-danger">51</strong> day left</td>
		                        <td class="text-center">
		                            <div class="btn-group">
			                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
										<ul class="dropdown-menu icons-right dropdown-menu-right">
											<li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
											<li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
											<li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
											<li><a href="#"><i class="icon-stack"></i> Archive</a></li>
										</ul>
		                            </div>
		                        </td>
	                        </tr>
	                        <tr>
	                            <td class="task-desc">
	                            	<a href="task_detailed.html">Suspendisse dictum vitae ante ut tempor</a>
	                            	<span>HTML / CSS changes</span>
	                            </td>
	                            <td class="text-center"><span class="label label-info">Low</span></td>
	                            <td>July 10, 2013</td>
	                            <td>
	                            	<div class="progress progress-micro">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100" style="width: 6%;">
											<span class="sr-only">6% Complete</span>
										</div>
									</div>
	                            </td>
	                            <td><i class="icon-clock"></i> <strong class="text-danger">2</strong> days left</td>
		                        <td class="text-center">
		                            <div class="btn-group">
			                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
										<ul class="dropdown-menu icons-right dropdown-menu-right">
											<li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
											<li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
											<li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
											<li><a href="#"><i class="icon-stack"></i> Archive</a></li>
										</ul>
		                            </div>
		                        </td>
	                        </tr>
	                        <tr>
	                            <td class="task-desc">
	                            	<a href="task_detailed.html">Maecenas porta augue et odio dignissim</a>
	                            	<span>HTML / CSS changes</span>
	                            </td>
	                            <td class="text-center"><span class="label label-info">Low</span></td>
	                            <td>June 25, 2013</td>
	                            <td>
	                            	<div class="progress progress-micro">
										<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
											<span class="sr-only">65% Complete</span>
										</div>
									</div>
	                            </td>
	                            <td><i class="icon-clock"></i> <strong class="text-danger">3</strong> days left</td>
		                        <td class="text-center">
		                            <div class="btn-group">
			                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
										<ul class="dropdown-menu icons-right dropdown-menu-right">
											<li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
											<li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
											<li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
											<li><a href="#"><i class="icon-stack"></i> Archive</a></li>
										</ul>
		                            </div>
		                        </td>
	                        </tr>
	                        <tr>
	                            <td class="task-desc">
	                            	<a href="task_detailed.html">Morbi varius odio at quam vehicula mattis</a>
	                            	<span>Design &amp; UI concepts</span>
	                            </td>
	                            <td class="text-center"><span class="label label-success">Normal</span></td>
	                            <td>June 21, 2013</td>
	                            <td>
	                            	<div class="progress progress-micro">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
											<span class="sr-only">20% Complete</span>
										</div>
									</div>
	                            </td>
	                            <td><i class="icon-clock"></i> <strong class="text-danger">89</strong> days left</td>
		                        <td class="text-center">
		                            <div class="btn-group">
			                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
										<ul class="dropdown-menu icons-right dropdown-menu-right">
											<li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
											<li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
											<li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
											<li><a href="#"><i class="icon-stack"></i> Archive</a></li>
										</ul>
		                            </div>
		                        </td>
	                        </tr>
	                        <tr>
	                            <td class="task-desc">
	                            	<a href="task_detailed.html">Quisque ultrices libero in nisl fringilla</a>
	                            	<span>Design &amp; UI concepts</span>
	                            </td>
	                            <td class="text-center"><span class="label label-danger">High</span></td>
	                            <td>June 17, 2013</td>
	                            <td>
	                            	<div class="progress progress-micro">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
											<span class="sr-only">40% Complete</span>
										</div>
									</div>
	                            </td>
	                            <td><i class="icon-clock"></i> <strong class="text-danger">32</strong> days left</td>
		                        <td class="text-center">
		                            <div class="btn-group">
			                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
										<ul class="dropdown-menu icons-right dropdown-menu-right">
											<li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
											<li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
											<li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
											<li><a href="#"><i class="icon-stack"></i> Archive</a></li>
										</ul>
		                            </div>
		                        </td>
	                        </tr>
	                        <tr>
	                            <td class="task-desc">
	                            	<a href="task_detailed.html">Nam fermentum ut nunc eget tristique</a>
	                            	<span>HTML / CSS changes</span>
	                            </td>
	                            <td class="text-center"><span class="label label-danger">High</span></td>
	                            <td>June 14, 2013</td>
	                            <td>
	                            	<div class="progress progress-micro">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" style="width: 31%;">
											<span class="sr-only">31% Complete</span>
										</div>
									</div>
	                            </td>
	                            <td><i class="icon-clock"></i> <strong class="text-danger">2</strong> days left</td>
		                        <td class="text-center">
		                            <div class="btn-group">
			                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
										<ul class="dropdown-menu icons-right dropdown-menu-right">
											<li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
											<li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
											<li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
											<li><a href="#"><i class="icon-stack"></i> Archive</a></li>
										</ul>
		                            </div>
		                        </td>
	                        </tr>
	                        <tr>
	                            <td class="task-desc">
	                            	<a href="task_detailed.html">Etiam viverra porttitor auctor</a>
	                            	<span>Design &amp; UI concepts</span>
	                            </td>
	                            <td class="text-center"><span class="label label-success">Normal</span></td>
	                            <td>June 3, 2013</td>
	                            <td>
	                            	<div class="progress progress-micro">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
											<span class="sr-only">90% Complete</span>
										</div>
									</div>
	                            </td>
	                            <td><i class="icon-clock"></i> <strong class="text-danger">1</strong> day left</td>
		                        <td class="text-center">
		                            <div class="btn-group">
			                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
										<ul class="dropdown-menu icons-right dropdown-menu-right">
											<li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
											<li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
											<li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
											<li><a href="#"><i class="icon-stack"></i> Archive</a></li>
										</ul>
		                            </div>
		                        </td>
	                        </tr>
	                        <tr>
	                            <td class="task-desc">
	                            	<a href="task_detailed.html">Curabitur quis commodo massa. Proin eget arcu eros</a>
	                            	<span>Design &amp; UI concepts</span>
	                            </td>
	                            <td class="text-center"><span class="label label-danger">High</span></td>
	                            <td>May 9, 2013</td>
	                            <td>
	                            	<div class="progress progress-micro">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
											<span class="sr-only">10% Complete</span>
										</div>
									</div>
	                            </td>
	                            <td><i class="icon-clock"></i> <strong class="text-danger">2</strong> days left</td>
		                        <td class="text-center">
		                            <div class="btn-group">
			                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
										<ul class="dropdown-menu icons-right dropdown-menu-right">
											<li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
											<li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
											<li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
											<li><a href="#"><i class="icon-stack"></i> Archive</a></li>
										</ul>
		                            </div>
		                        </td>
	                        </tr>
	                        <tr>
	                            <td class="task-desc">
	                            	<a href="task_detailed.html">Maecenas sed sapien vel nisi porta sollicitudin</a>
	                            	<span>Design &amp; UI concepts</span>
	                            </td>
	                            <td class="text-center"><span class="label label-danger">High</span></td>
	                            <td>May 2, 2013</td>
	                            <td>
	                            	<div class="progress progress-micro">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
											<span class="sr-only">40% Complete</span>
										</div>
									</div>
	                            </td>
	                            <td><i class="icon-clock"></i> <strong class="text-danger">37</strong> days left</td>
		                        <td class="text-center">
		                            <div class="btn-group">
			                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
										<ul class="dropdown-menu icons-right dropdown-menu-right">
											<li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
											<li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
											<li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
											<li><a href="#"><i class="icon-stack"></i> Archive</a></li>
										</ul>
		                            </div>
		                        </td>
	                        </tr>
	                        <tr>
	                            <td class="task-desc">
	                            	<a href="task_detailed.html">Nunc placerat mattis consectetur. Cras sagittis scelerisque imperdiet</a>
	                            	<span>HTML / CSS changes</span>
	                            </td>
	                            <td class="text-center"><span class="label label-info">Low</span></td>
	                            <td>April 21, 2013</td>
	                            <td>
	                            	<div class="progress progress-micro">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
											<span class="sr-only">10% Complete</span>
										</div>
									</div>
	                            </td>
	                            <td><i class="icon-clock"></i> <strong class="text-danger">3</strong> days left</td>
		                        <td class="text-center">
		                            <div class="btn-group">
			                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
										<ul class="dropdown-menu icons-right dropdown-menu-right">
											<li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
											<li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
											<li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
											<li><a href="#"><i class="icon-stack"></i> Archive</a></li>
										</ul>
		                            </div>
		                        </td>
	                        </tr>
	                        <tr>
	                            <td class="task-desc">
	                            	<a href="task_detailed.html">Nunc tincidunt consectetur quam et venenatis</a>
	                            	<span>HTML / CSS changes</span>
	                            </td>
	                            <td class="text-center"><span class="label label-info">Low</span></td>
	                            <td>April 19, 2013</td>
	                            <td>
	                            	<div class="progress progress-micro">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
											<span class="sr-only">100% Complete</span>
										</div>
									</div>
	                            </td>
	                            <td><i class="icon-clock"></i> <strong>Complete!</strong></td>
		                        <td class="text-center">
		                            <div class="btn-group">
			                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
										<ul class="dropdown-menu icons-right dropdown-menu-right">
											<li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
											<li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
											<li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
											<li><a href="#"><i class="icon-stack"></i> Archive</a></li>
										</ul>
		                            </div>
		                        </td>
	                        </tr>
	                        <tr>
	                            <td class="task-desc">
	                            	<a href="task_detailed.html">Phasellus quis sagittis orci, vitae placerat mauris</a>
	                            	<span>Design &amp; UI concepts</span>
	                            </td>
	                            <td class="text-center"><span class="label label-info">Low</span></td>
	                            <td>April 11, 2013</td>
	                            <td>
	                            	<div class="progress progress-micro">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
											<span class="sr-only">100% Complete</span>
										</div>
									</div>
	                            </td>
	                            <td><i class="icon-clock"></i> <strong>Complete!</strong></td>
		                        <td class="text-center">
		                            <div class="btn-group">
			                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
										<ul class="dropdown-menu icons-right dropdown-menu-right">
											<li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
											<li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
											<li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
											<li><a href="#"><i class="icon-stack"></i> Archive</a></li>
										</ul>
		                            </div>
		                        </td>
	                        </tr>
	                        <tr>
	                            <td class="task-desc">
	                            	<a href="task_detailed.html">Nunc sit amet arcu euismod nulla luctus pulvinar in at enim</a>
	                            	<span>Design &amp; UI concepts</span>
	                            </td>
	                            <td class="text-center"><span class="label label-danger">High</span></td>
	                            <td>April 1, 2013</td>
	                            <td>
	                            	<div class="progress progress-micro">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
											<span class="sr-only">100% Complete</span>
										</div>
									</div>
	                            </td>
	                            <td><i class="icon-clock"></i> <strong>Complete!</strong></td>
		                        <td class="text-center">
		                            <div class="btn-group">
			                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
										<ul class="dropdown-menu icons-right dropdown-menu-right">
											<li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
											<li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
											<li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
											<li><a href="#"><i class="icon-stack"></i> Archive</a></li>
										</ul>
		                            </div>
		                        </td>
	                        </tr>
	                        <tr>
	                            <td class="task-desc">
	                            	<a href="task_detailed.html">Duis convallis ornare risus, sit amet tincidunt elit euismod vel</a>
	                            	<span>HTML / CSS changes</span>
	                            </td>
	                            <td class="text-center"><span class="label label-danger">High</span></td>
	                            <td>March 8, 2013</td>
	                            <td>
	                            	<div class="progress progress-micro">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
											<span class="sr-only">100% Complete</span>
										</div>
									</div>
	                            </td>
	                            <td><i class="icon-clock"></i> <strong>Complete!</strong></td>
		                        <td class="text-center">
		                            <div class="btn-group">
			                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
										<ul class="dropdown-menu icons-right dropdown-menu-right">
											<li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
											<li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
											<li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
											<li><a href="#"><i class="icon-stack"></i> Archive</a></li>
										</ul>
		                            </div>
		                        </td>
	                        </tr>
	                        <tr>
	                            <td class="task-desc">
	                            	<a href="task_detailed.html">Cras eu mauris adipiscing massa porttitor </a>
	                            	<span>Design &amp; UI concepts</span>
	                            </td>
	                            <td class="text-center"><span class="label label-danger">High</span></td>
	                            <td>March 2, 2013</td>
	                            <td>
	                            	<div class="progress progress-micro">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
											<span class="sr-only">100% Complete</span>
										</div>
									</div>
	                            </td>
	                            <td><i class="icon-clock"></i> <strong>Complete!</strong></td>
		                        <td class="text-center">
		                            <div class="btn-group">
			                            <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
										<ul class="dropdown-menu icons-right dropdown-menu-right">
											<li><a href="#"><i class="icon-quill2"></i> Edit task</a></li>
											<li><a href="#"><i class="icon-share2"></i> Reassign</a></li>
											<li><a href="#"><i class="icon-checkmark3"></i> Complete</a></li>
											<li><a href="#"><i class="icon-stack"></i> Archive</a></li>
										</ul>
		                            </div>
		                        </td>
	                        </tr>
	                    </tbody>
	                </table>
	            </div>
	        </div>
	        <!-- /tasks table -->


        	<!-- Recent activity -->
			<div class="block">
				<h6 class="heading-hr"><i class="icon-file"></i> Recent activity</h6>
				<ul class="media-list">
					<li class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="http://placehold.it/300" alt="">
						</a>
						<div class="media-body">
							<div class="clearfix">
								<a href="#" class="media-heading">Eugene Kopyov</a>
								<span class="media-notice">December 10, 2013 / 10:20 pm</span>
							</div>
							Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
						</div>
					</li>

					<li class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="http://placehold.it/300" alt="">
						</a>
						<div class="media-body">
							<div class="clearfix">
								<a href="#" class="media-heading">Martin Wolf</a>
								<span class="media-notice">December 12, 2013 / 10:14 pm</span>
							</div>
							Cras tempus pretium ligula, quis viverra purus eleifend et.
						</div>
					</li>

					<li class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="http://placehold.it/300" alt="">
						</a>
						<div class="media-body">
							<div class="clearfix">
								<a href="#" class="media-heading">Duncan McMart</a>
								<span class="media-notice">January 3, 2014 / 12:14 pm</span>
							</div>
							Quisque dignissim nibh nec massa egestas interdum. Proin congue vulputate velit, sodales mattis neque tempor a.
						</div>
					</li>

					<li class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="http://placehold.it/300" alt="">
						</a>
						<div class="media-body">
							<div class="clearfix">
								<a href="#" class="media-heading">Lucy Smith</a>
								<span class="media-notice">January 22, 2014 / 10:26 pm</span>
							</div>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget orci non sem sodales dictum.
						</div>
					</li>

					<li class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="http://placehold.it/300" alt="">
						</a>
						<div class="media-body">
							<div class="clearfix">
								<a href="#" class="media-heading">Angel Nowak</a>
								<span class="media-notice">January 24, 2014 / 10:20 am</span>
							</div>
							Mauris vulputate bibendum justo non pretium. Sed eleifend, est vitae pellentesque condimentum, lacus ligula consectetur dolor, a congue metus odio ut neque.
						</div>
					</li>

					<li class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="http://placehold.it/300" alt="">
						</a>
						<div class="media-body">
							<div class="clearfix">
								<a href="#" class="media-heading">Barbara Madison</a>
								<span class="media-notice">February 2, 2014 / 10:47 pm</span>
							</div>
							Nullam vel massa blandit turpis sodales consectetur. Maecenas non mattis purus. Nullam vitae risus eu est.
						</div>
					</li>

					<li class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="http://placehold.it/300" alt="">
						</a>
						<div class="media-body">
							<div class="clearfix">
								<a href="#" class="media-heading">James Willings</a>
								<span class="media-notice">February 16, 2014 / 07:28 am</span>
							</div>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc purus lacus, consequat et dui ut, ullamcorper sollicitudin lorem. Donec gravida eget nisi eget congue. Sed varius sollicitudin adipiscing.
						</div>
					</li>
				</ul>
        	</div>
        	<!-- /recent activity -->


	    <?php require_once 'inc/footer.php'; ?>