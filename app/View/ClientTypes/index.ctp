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
                                        <h2>Client Types</h2>
                                        <p>Welcome to IT Easy Clients <span class="bread-ntd">Admin Template</span></p>
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



		<div class="normal-table-area">
		        <div class="container">
				    <div class="row">
		                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		                    <div class="normal-table-list mg-t-30">
		                        <div class="basic-tb-hd">
		                            <h2>Client Types</h2>
		                        </div>
		                        <div class="bsc-tbl-hvr">
		                            <table class="table table-hover">
		                                <thead>
		                                    <tr>
		                                        <th><?php echo $this->Paginator->sort('name'); ?></th>
												<th><?php echo $this->Paginator->sort('entry_datetime'); ?></th>
												<th><?php echo $this->Paginator->sort('enabled'); ?></th>
		                                    </tr>
		                                </thead>
		                                <tbody>
		                                    <?php foreach ($clientTypes as $clientType): ?>
				                                <tr>
				                                    <td>

				                                    	
				                                    	<?php echo $this->Html->link(__($clientType['ClientType']['name']), array('action' => 'edit', $clientType['ClientType']['id'])); ?>
				                                    	&nbsp;
				                                    </td>
				                                    <td><?php echo h($clientType['ClientType']['entry_datetime']); ?>&nbsp;</td>
				                                    <td><?php 
				                                            if($clientType['ClientType']['enabled'] == 1) {
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