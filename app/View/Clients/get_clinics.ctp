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
		                <h2>Tabs Right Aligned</h2>
		                <p>Simply include the class <code>.tab-nav-right</code> to align the tab header to right side.</p>
		            </div>
		            <div class="widget-tabs-list">
		                <ul class="nav nav-tabs tab-nav-right">
		                    <li class="active"><a data-toggle="tab" href="#home2">Public / Government</a></li>
		                    <li><a data-toggle="tab" href="#menu12">Private</a></li>
		                </ul>
		                <div class="tab-content tab-custom-st tab-ctn-right">
		                    <div id="home2" class="tab-pane fade in active">
		                        <div class="tab-ctn">
		                           
		                        	<div class="data-table-area">
								            <div class="row">
								                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								                    <div class="data-table-list">
								                        <div class="basic-tb-hd">
								                            <h2>Basic Example</h2>
								                            <p>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</p>
								                        </div>
								                        <div class="table-responsive">
								                            <table id="data-table-basic" class="table table-striped">
								                                <thead>
								                                	<tr>
																		<th><?php echo $this->Paginator->sort('client_code'); ?></th>
																		<th><?php echo $this->Paginator->sort('name'); ?></th>
																		<th><?php echo $this->Paginator->sort('classification'); ?></th>
																		<th><?php echo $this->Paginator->sort('type'); ?></th>
																		<th><?php echo $this->Paginator->sort('enabled'); ?></th>
																		<th class="actions"><?php echo __('Actions'); ?></th>
																	</tr>
								                                </thead>
								                                <tbody>

								                                	<?php foreach ($public_clinics as $public_clinic): ?>
								                                	
								                                	<tr>
																		<td>
																			<?php echo $this->Html->link(__($public_clinic['Client']['client_code']), array('action' => 'view', $public_clinic['Client']['id'])); ?>
																		</td>
																		<td><?php echo h($public_clinic['Client']['name']); ?>&nbsp;</td>
																		
																		<td>
																			<?php echo h($public_clinic['ClientTypeClassification']['name']); ?>&nbsp;
																		</td>
																		<td>
																			<?php echo h($public_clinic['ClientType']['name']); ?>&nbsp;
																		</td>
																		<td>
																			
																			<?php if($public_clinic['Client']['enabled'] == 1) { 
																				echo "Active";
																			} else {
																				echo "Inactive";
																			}
																			?>&nbsp;
																		</td>

																		<td class="actions">
																			<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'notika-icon notika-menus')).' ', array('action' => 'edit',  $public_clinic['Client']['id']), array('escape' => false,'class'=>'btn btn-orange orange-icon-notika waves-effect','data-toggle'=>'tooltip', 'data-placement'=>'top','title'=>'Edit')) ?>
																			<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'notika-icon notika-close')).' ', array('action' => 'delete',  $public_clinic['Client']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $public_clinic['Client']['id']), 'escape' => false,'class'=>'btn btn-danger danger-icon-notika waves-effect','data-toggle'=>'tooltip', 'data-placement'=>'top','title'=>'Delete')) ?>
																		</td>

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
		                    <div id="menu12" class="tab-pane fade">
		                        <div class="tab-ctn">
		                            


		                        	<div class="data-table-area">
								            <div class="row">
								                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								                    <div class="data-table-list">
								                        <div class="basic-tb-hd">
								                            <h2>Basic Example</h2>
								                            <p>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</p>
								                        </div>
								                        <div class="table-responsive">
								                            <table id="data-table-basic" class="table table-striped">
								                                <thead>
								                                	<tr>
																		<th><?php echo $this->Paginator->sort('client_code'); ?></th>
																		<th><?php echo $this->Paginator->sort('name'); ?></th>
																		<th><?php echo $this->Paginator->sort('classification'); ?></th>
																		<th><?php echo $this->Paginator->sort('type'); ?></th>
																		<th><?php echo $this->Paginator->sort('enabled'); ?></th>
																		<th class="actions"><?php echo __('Actions'); ?></th>
																	</tr>
								                                </thead>
								                                <tbody>

								                                	<?php foreach ($private_clinics as $private_clinic): ?>
								                                	
								                                	<tr>
																		<td>
																			<?php echo $this->Html->link(__($private_clinic['Client']['client_code']), array('action' => 'view', $private_clinic['Client']['id'])); ?>
																		</td>
																		<td><?php echo h($private_clinic['Client']['name']); ?>&nbsp;</td>
																		
																		<td>
																			<?php echo h($private_clinic['ClientTypeClassification']['name']); ?>&nbsp;
																		</td>
																		<td>
																			<?php echo h($private_clinic['ClientType']['name']); ?>&nbsp;
																		</td>
																		<td>
																			
																			<?php if($private_clinic['Client']['enabled'] == 1) { 
																				echo "Active";
																			} else {
																				echo "Inactive";
																			}
																			?>&nbsp;
																		</td>

																		<td class="actions">
																			<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'notika-icon notika-menus')).' ', array('action' => 'edit',  $private_clinic['Client']['id']), array('escape' => false,'class'=>'btn btn-orange orange-icon-notika waves-effect','data-toggle'=>'tooltip', 'data-placement'=>'top','title'=>'Edit')) ?>
																			<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'notika-icon notika-close')).' ', array('action' => 'delete',  $private_clinic['Client']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $private_clinic['Client']['id']), 'escape' => false,'class'=>'btn btn-danger danger-icon-notika waves-effect','data-toggle'=>'tooltip', 'data-placement'=>'top','title'=>'Delete')) ?>
																		</td>

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
</div>