
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
                                    <h2>Client's Machine Analyzers Information</h2>
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
                            <div class="cmp-tb-hd cmp-int-hd">
                                
		
		
                            </div>
                            <?php echo $this->Form->create('ClientMachineAnalyzer.'); ?>
                            <?php echo $this->Form->input('ClientMachineAnalyzer.id'); ?>
                            <?php echo $this->Form->input('ClientMachineAnalyzer.client_id', array('hidden'=>true,'label'=>false)); ?>
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <label class="hrzn-fm">Provider</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <?php echo $this->Form->input('provider_id', array('label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <label class="hrzn-fm">Machine Analyzer</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <?php echo $this->Form->input('ClientMachineAnalyzer.machine_analyzer_id', array('label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int form-horizental mg-t-15">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <label class="hrzn-fm">Laboratory Section</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <?php echo $this->Form->input('ClientMachineAnalyzer.laboratory_section_id', array('label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="form-example-int form-horizental mg-t-15">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <label class="hrzn-fm">Connectivity Date</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <?php echo $this->Form->date('ClientMachineAnalyzer.connectivity_date', array('label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="form-example-int form-horizental mg-t-15">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <label class="hrzn-fm">Provider Engineer</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <?php echo $this->Form->input('ClientMachineAnalyzer.external_engineer', array('label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-example-int form-horizental mg-t-15">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <label class="hrzn-fm">Internal Engineer</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                               <?php echo $this->Form->input('ClientMachineAnalyzer.internal_engineer', array('label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-example-int form-horizental mg-t-15">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <label class="hrzn-fm">Connectivity Type</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                               <?php 

                                               $connection_type = array('Serial'=>'Serial', 'TCP/IP'=>'TCP/IP');
                                               echo $this->Form->input('ClientMachineAnalyzer.connectivity_type', array('options' => $connection_type,'label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-example-int form-horizental mg-t-15">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <label class="hrzn-fm">Communication Port</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                               <?php echo $this->Form->input('ClientMachineAnalyzer.communication_port', array('label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-example-int form-horizental mg-t-15">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <label class="hrzn-fm">IP Address</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <?php echo $this->Form->input('ClientMachineAnalyzer.ip_address', array('type'=>'text','label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            

							<div class="form-example-int form-horizental mg-t-15">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <label class="hrzn-fm">MI IP Address</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <?php echo $this->Form->input('ClientMachineAnalyzer.mi_ip_address', array('type'=>'text','label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-example-int form-horizental mg-t-15">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <label class="hrzn-fm">MI Driver Date</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <?php echo $this->Form->date('ClientMachineAnalyzer.mi_driver_date', array('label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div class="form-example-int form-horizental mg-t-15">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <label class="hrzn-fm">Accepted Reference Range</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <?php echo $this->Form->date('ClientMachineAnalyzer.accepted_reference_range', array('label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-example-int form-horizental mg-t-15">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <label class="hrzn-fm">Accepted Reference Range URL</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <?php echo $this->Form->date('ClientMachineAnalyzer.accepted_reference_range_url', array('label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
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