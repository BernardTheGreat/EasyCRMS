

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
									</tr>
                                </thead>
                                <tbody>
                                	<?php foreach ($hospitals as $hospital): ?>
                                	<tr>
										<td><?php echo $this->Html->link(__($hospital['Client']['client_code']), array('action' => 'edit', $hospital['hospital']['id'])); ?> </td>
										<td><?php echo h($hospital['Client']['name']); ?>&nbsp;</td>
										<td><?php echo h($hospital['User']['first_name']." ".$hospital['User']['last_name']); ?>&nbsp;</td>
										<td>
											
											<?php if($hospital['Client']['enabled'] == 1) { 
												echo "Active";
											} else {
												echo "Inactive";
											}
											?>&nbsp;
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