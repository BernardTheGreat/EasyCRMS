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
		            <div class="widget-tabs-list">
		                <ul class="nav nav-tabs tab-nav-right">
		                    <li class="active"><a data-toggle="tab" href="#menu1">Client Information</a></li>
		                    <li><a data-toggle="tab" href="#menu2">Job Order</a></li>
		                </ul>
		                	<div class="tab-content tab-custom-st tab-ctn-right">
			                    <div id="menu1" class="tab-pane fade in active">
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
                                                                        <i class="notika-icon notika-form"></i>
                                                                    </div>
                                                                    <div class="breadcomb-ctn">
                                                                        <h2>Client Information</h2>
                                                                     </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                                                <div class="breadcomb-report">
                                                                    <a href="/clients">
                                                                        <button data-toggle="tooltip" data-placement="top" title="Clients" class="btn"><i class="notika-icon notika-support"></i></button>
                                                                    </a>
                                                                    <button data-toggle="tooltip" data-placement="top" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Breadcomb area End-->

                                        <div class="form-example-area">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-example-wrap mg-t-30">
                                                        
                                                        <?php echo $this->Form->create('Client'); ?>
                                                       
                                                        <div class="form-example-int form-horizental">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                        <label class="hrzn-fm">Code</label>
                                                                    </div>
                                                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                        <div class="nk-int-st">
                                                                            <?php echo $this->Form->input('client_code', array('label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-example-int form-horizental mg-t-15">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                        <label class="hrzn-fm">Name</label>
                                                                    </div>
                                                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                        <div class="nk-int-st">
                                                                            <?php echo $this->Form->input('name', array('label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="form-example-int form-horizental mg-t-15">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                        <label class="hrzn-fm">Address</label>
                                                                    </div>
                                                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                        <div class="nk-int-st">
                                                                            <?php echo $this->Form->input('address', array('label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="form-example-int form-horizental mg-t-15">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                        <label class="hrzn-fm">Description</label>
                                                                    </div>
                                                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                        <div class="nk-int-st">
                                                                            <?php echo $this->Form->input('description', array('type'=>'textarea','label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-example-int form-horizental mg-t-15">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                        <label class="hrzn-fm">Type</label>
                                                                    </div>
                                                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                        <div class="nk-int-st">
                                                                           <?php echo $this->Form->input('ClientDetail.client_type_id', array('options' => $client_types, 'empty' => '-- Choose One --', 'label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="form-example-int form-horizental mg-t-15">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                        <label class="hrzn-fm">Classification</label>
                                                                    </div>
                                                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                        <div class="nk-int-st">
                                                                           <?php echo $this->Form->input('ClientDetail.client_type_classification_id', array('options' => $client_type_classifications, 'empty' => '-- Choose One --', 'label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-example-int form-horizental mg-t-15">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                    <label class="hrzn-fm" for="enabled">Active</label>
                                                                </div>
                                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="nk-int-st">
                                                                        <?php echo $this->Form->checkbox('enabled', array('hiddenField' => false, 'div'=>false, 'id'=>'enabled')); ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-example-int mg-t-15">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                </div>
                                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                    <button class="btn btn-success notika-btn-success">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                     </form>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


									</div>
			                    </div>
			                    <div id="menu2" class="tab-pane fade">
			                        <div class="tab-ctn">
			                            



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