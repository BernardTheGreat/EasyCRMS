<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-app"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Tabs</h2>
										<p>Welcome to Notika <span class="bread-ntd">Admin Template</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Start tabs area-->
    <div class="tabs-info-area">
        <div class="container">
		<div class="row">
		    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		        <div class="widget-tabs-int tab-ctm-wp mg-t-30">
		            <div class="tab-hd">
		                <h2>Project Information</h2>
		                <p>Simply include the class <code>.tab-nav-right</code> to align the tab header to right side.</p>
		            </div>
		            <div class="widget-tabs-list">
		                <ul class="nav nav-tabs tab-nav-right">
		                    <li class="active"><a data-toggle="tab" href="#home2">Client Information</a></li>
		                    <li><a data-toggle="tab" href="#menu12">Installation Details</a></li>
		                    <li><a data-toggle="tab" href="#menu22">Documentations</a></li>
		                </ul>
		                <div class="tab-content tab-custom-st tab-ctn-right">
		                    <div id="home2" class="tab-pane fade in active">
		                        <div class="tab-ctn">
		                           

			                        <div class="normal-table-area">
			                        	<div class="row">
							                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							                    <div class="normal-table-list mg-t-30">
							                        
							                        <div class="bsc-tbl-hvr">
							                            <table class="table table-hover">
							                            	<thead>
							                                    <tr>
							                                        <th colspan="2"><h3 class="text-center">Client Information</h3></th>
							                                    </tr>
							                                </thead>

							                                <tbody>
							                                	<tr>
							                                		<td>Code</td>
							                                		<td><?php echo $client['Client']['client_code']; ?></td>
							                               		</tr>
							                                	<tr>
							                                		<td>Name</td>
							                                		<td><?php echo $client['Client']['name']; ?></td>
							                               		</tr>
							                               		<tr>
							                                		<td>Description</td>
							                                		<td><?php echo $client['Client']['description']; ?></td>
							                               		</tr>
							                               		<tr>
							                                		<td>Address</td>
							                                		<td><?php echo $client['Client']['address']; ?></td>
							                               		</tr>
							                               		<tr>
							                                		<td>Enabled</td>
							                                		<td><?php echo $client['Client']['enabled']; ?></td>
							                               		</tr>
							                               	</tbody>
							                            </table>
							                        </div>
							                    </div>
							                </div>
							            </div>
								    </div>



								</div>
		                    </div>
		                    <div id="menu12" class="tab-pane fade">
		                        <div class="tab-ctn">
									
		                        
									 <!-- Breadcomb area Start-->
									<div class="breadcomb-area">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="breadcomb-list">
													<div class="row">
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
															<div class="breadcomb-wp">
																<div class="breadcomb-icon">
																	<i class="notika-icon notika-windows"></i>
																</div>
																<div class="breadcomb-ctn">
																	<h2>System</h2>
																	<p>Welcome to Notika <span class="bread-ntd">Admin Template</span></p>
																</div>
															</div>
														</div>
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
															<div class="breadcomb-report">
																<button data-toggle="tooltip" data-placement="top" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Breadcomb area End-->

									<div class="row">
						                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						                    <div class="normal-table-list mg-t-30">
						                        
						                        <div class="bsc-tbl-hvr">
						                            <table class="table table-hover">
						                                <thead>
						                                    <tr>
						                                        <th>Application Installed</th>
						                                        <th>Server</th>
						                                        <th>Operating System</th>
						                                        <th>IP Addresses</th>
						                                        <th>Active</th>
						                                    </tr>
						                                </thead>
						                                <tbody>
						                                  	<tr>
						                                  		<td> *fdsa </td>
						                                  	</tr>
						                                </tbody>
						                            </table>
						                        </div>
						                    </div>
						                </div>
						            </div>

									<div class="normal-table-area">
			                        	<div class="row">
							                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							                    <div class="normal-table-list mg-t-30">
							                        
							                        <div class="bsc-tbl-hvr">
							                            <table class="table table-hover">
							                                <tbody>
							                                	<?php $this->Log($client_detail); ?>
							                               	</tbody>
							                            </table>
							                        </div>
							                    </div>
							                </div>
							            </div>
								    </div>		                            












		                        	<!-- Breadcomb area Start-->
									<div class="breadcomb-area">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="breadcomb-list">
													<div class="row">
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
															<div class="breadcomb-wp">
																<div class="breadcomb-icon">
																	<i class="notika-icon notika-windows"></i>
																</div>
																<div class="breadcomb-ctn">
																	<h2>Machine Analyzers</h2>
																	<p>Welcome to Notika <span class="bread-ntd">Admin Template</span></p>
																</div>
															</div>
														</div>
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
															<div class="breadcomb-report">
																<button data-toggle="tooltip" data-placement="top" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Breadcomb area End-->

		                        	<div class="data-table-area">
							            <div class="row">
							                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							                    <div class="data-table-list">
							                        <div class="table-responsive">
							                            <table id="data-table-basic" class="table table-striped">
							                                <thead>
							                                	<tr>
																	<th><?php echo $this->Paginator->sort('machine name'); ?></th>
																	<th><?php echo $this->Paginator->sort('description'); ?></th>
																	<th><?php echo $this->Paginator->sort('section'); ?></th>
																	<th><?php echo $this->Paginator->sort('active'); ?></th>
																</tr>
							                                </thead>
							                                <tbody>
							                                	<?php foreach ($client_analyzers as $machine_analyzer): ?>
							                                		
							                                	<tr>
																	<td>
																		<?php echo $this->Html->link(__($machine_analyzer['MachineAnalyzer']['name']), array('controller'=>'MachineAnalyzers','action' => 'view', $machine_analyzer['MachineAnalyzer']['id'])); ?>
																	</td>
																	<td><?php echo h($machine_analyzer['MachineAnalyzer']['description']); ?>&nbsp;</td>
																	<td><?php echo h($machine_analyzer['LaboratorySection']['name']); ?>&nbsp;</td>
																	<td><?php echo h($machine_analyzer['MachineAnalyzer']['enabled']); ?>&nbsp;</td>
																	

							                                	</tr>
								                                <?php endforeach; ?>
							                                </tbody>
							                              </table>
							                        </div>
							                    </div>
							                </div>
							            </div>
								    </div>



								   






















		                        </div>
		                    </div>
		                    <div id="menu22" class="tab-pane fade">
		                        <div class="tab-ctn">
		                            






		                        	<div class="data-table-area">
								            <div class="row">
								                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								                    <div class="data-table-list">
								                        <div class="table-responsive">
								                            <table id="data-table" class="table table-striped">
								                                <thead>
								                                	<tr>
																		<th><?php echo $this->Paginator->sort('machine name'); ?></th>
																		<th><?php echo $this->Paginator->sort('account'); ?></th>
																		<th><?php echo $this->Paginator->sort('section'); ?></th>
																		<th><?php echo $this->Paginator->sort('active'); ?></th>
																	</tr>
								                                </thead>
								                                <tbody>

								                                	<?php foreach ($client_analyzers as $client_analyzer): 
								                                		

								                                	?>

								                                	<tr>
																		<td>
																			<?php echo $this->Html->link(__($client_analyzer['MachineAnalyzer']['name']), array('controller'=>'MachineAnalyzers','action' => 'view', $client_analyzer['MachineAnalyzer']['id'])); ?>
																		</td>
																		<td><?php echo h($client_analyzer['Client']['name']); ?></td>
																		<td><?php echo h($client_analyzer['MachineAnalyzer']['LaboratorySection']['name']); ?></td>
																		<td><?php echo h($client_analyzer['MachineAnalyzer']['enabled']); ?></td>
																		

								                                	</tr>
									                                <?php endforeach; ?>
								                                </tbody>
								                              </table>
								                        </div>
								                    </div>
								                </div>
								            </div>
								    </div>






		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
</div>