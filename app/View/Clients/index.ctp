

<!-- Main Menu area End-->
	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
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
										<h2>Data Table</h2>
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
	</div>
	<!-- Breadcomb area End-->
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
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
										<th><?php echo $this->Paginator->sort('engineer'); ?></th>
										<th><?php echo $this->Paginator->sort('enabled'); ?></th>
										<th class="actions"><?php echo __('Actions'); ?></th>
									</tr>
                                </thead>
                                <tbody>
                                	<?php foreach ($clients as $client): ?>
                                	<tr>
										<td>
											<?php echo $this->Html->link(__($client['Client']['client_code']), array('action' => 'view', $client['Client']['id'])); ?>
										</td>
										<td><?php echo h($client['Client']['name']); ?>&nbsp;</td>
										<td><?php echo h($client['User']['first_name']." ".$client['User']['last_name']); ?>&nbsp;</td>
										<td>
											
											<?php if($client['Client']['enabled'] == 1) { 
												echo "Active";
											} else {
												echo "Inactive";
											}
											?>&nbsp;
										</td>
										<td class="actions">
											<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'notika-icon notika-menus')).' ', array('action' => 'edit',  $client['Client']['id']), array('escape' => false,'class'=>'btn btn-orange orange-icon-notika waves-effect','data-toggle'=>'tooltip', 'data-placement'=>'top','title'=>'Edit')) ?>
											<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'notika-icon notika-close')).' ', array('action' => 'delete',  $client['Client']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $client['Client']['id']), 'escape' => false,'class'=>'btn btn-danger danger-icon-notika waves-effect','data-toggle'=>'tooltip', 'data-placement'=>'top','title'=>'Delete')) ?>
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