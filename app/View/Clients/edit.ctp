






 <div class="tabs-info-area">
        <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="widget-tabs-int tab-ctm-wp mg-t-30">
                    
                    <div class="widget-tabs-list">
                        <ul class="nav nav-tabs tab-nav-right">
                            <li class="active"><a data-toggle="tab" href="#home2">Client Information</a></li>
                            <li><a data-toggle="tab" href="#menu12">Installation Details</a></li>
                            <li><a data-toggle="tab" href="#menu3">Documentations</a></li>
                            <li><a data-toggle="tab" href="#menu4">Maintenance</a></li>
                        </ul>
                        <div class="tab-content tab-custom-st tab-ctn-right">
                            <div id="home2" class="tab-pane fade in active">
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
                                                                <div class="cmp-tb-hd cmp-int-hd">
                                                                    <h2>
                                                                        <?php foreach($clients as $client_details) {
                                                                            echo $client_details['Client']['name'] ." Information";
                                                                        }
                                                                        ?>
                                                                    </h2>
                                                                </div>
                                                                <?php echo $this->Form->create('Client'); ?>
                                                                <div class="form-example-int form-horizental">
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            
                                                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                                <div class="nk-int-st">
                                                                                    <?php echo $this->Form->input('id', array('label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                                                                                   <?php echo $this->Form->input('ClientDetail.client_type_id', array('options' => $client_type_values, 'value'=>$client_type, 'empty' => '-- Choose One --', 'label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                                                                   
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
                                                                                   <?php echo $this->Form->input('ClientDetail.client_type_classification_id', array('options' => $client_type_classification_values, 'value'=>$client_type_classification, 'empty' => '-- Choose One --', 'label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                                                                   
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-example-int form-horizental mg-t-15">
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                                <label class="hrzn-fm">Engineer</label>
                                                                            </div>
                                                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                                <div class="nk-int-st">
                                                                                   <?php echo $this->Form->input('user_id', array('options' => $users,'empty' => '-- Choose One --', 'label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-example-int form-horizental mg-t-15">
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                                <label class="hrzn-fm">Entry Date</label>
                                                                            </div>
                                                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                                <div class="nk-int-st">
                                                                                    <?php echo $this->Form->input('entry_datetime', array('readonly'=>true,'type'=>'text','label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
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
                                                                        <i class="notika-icon notika-form"></i>
                                                                    </div>
                                                                    <div class="breadcomb-ctn">
                                                                        <h2>Installation Details</h2>
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


                                            <!-- Accordion -->
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                                        <div class="accordion-stn">
                                                            <div class="panel-group" data-collapse-color="nk-green" id="accordionGreen" role="tablist" aria-multiselectable="true">
                                                                <div class="panel panel-collapse notika-accrodion-cus">
                                                                    <div class="panel-heading" role="tab">
                                                                        <h4 class="panel-title">
                                                                            <a data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-one" aria-expanded="true">
                                                                                    Product Information
                                                                                </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="accordionGreen-one" class="collapse in" role="tabpanel">
                                                                        <div class="panel-body">
                                                                            

                                                                            <!-- Product Information -->

                                                                            <div class="normal-table-area">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="normal-table-list mg-t-30">
                                                                                            
                                                                                            <div class="bsc-tbl-hvr">
                                                                                                <table class="table table-hover" id="normal-table">
                                                                                                    <thead>
                                                                                                        <tr> 
                                                                                                            <td> Application </td>
                                                                                                            <td> Description </td>
                                                                                                            <td> IP Address </td>
                                                                                                            <td> Action </td>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>

                                                                                                        <?php foreach($client_products as $client_products_key => $client_products_values) {
                                                                                                         ?> 
                                                                                                          <tr> 
                                                                                                                <td><?php echo $client_products_values['Product']['name']; ?></td>
                                                                                                                <td><?php echo $client_products_values['ClientProduct']['description']; ?></td>
                                                                                                                <td><?php echo $client_products_values['ClientProduct']['ip_address']; ?></td>
                                                                                                                <td>
                                                                                                                    
                                                                                                                    <a href="#" data-toggle="modal" data-target="#myModalView_<?php echo $client_products_values['ClientProduct']['id']; ?>" class="btn btn-lightblue lightblue-icon-notika waves-effect">
                                                                                                                        <i class="notika-icon notika-next"></i>
                                                                                                                    </a>
                                                                                                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'notika-icon notika-menus')).' ', array('controller'=>'ClientProducts','action' => 'edit',  $client_products_values['ClientProduct']['id']), array('escape' => false,'class'=>'btn btn-orange orange-icon-notika waves-effect','data-toggle'=>'tooltip', 'data-placement'=>'top','title'=>'Edit')) ?>
                                                                                                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'notika-icon notika-close')).' ', array('controller'=>'ClientProducts','action' => 'delete',  $client_products_values['ClientProduct']['id']), array('confirm' => __('Are you sure you want to delete this?', $client_products_values['ClientProduct']['id']), 'escape' => false,'class'=>'btn btn-danger danger-icon-notika waves-effect','data-toggle'=>'tooltip', 'data-placement'=>'top','title'=>'Delete')) ?>
                                                                                                                </td>
                                                                                                          </tr>  
                                                                                                        <?php } ?>
                                                                                                         <tr>
                                                                                                             <td colspan="3">
                                                                                                                <!--<input type="button" id="add_button" clientproductcount="<?php echo count($client_product_client_id)?>" clientproductid="<?php echo $this->data['ClientProduct']['id']?>" class="btn btn-success notika-btn-success waves-effect add_button"  value="Add"></input>
                                                                                                                -->
                                                                                                                
                                                                                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalone">Add</button>
                                                                                                               
                                                                                                             </td>
                                                                                                         </tr>
                                                                                                        
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        <?php foreach($client_products as $client_products_key => $client_products_values) {
                                                                                                         ?>
                                                                          <div class="modal fade" id="myModalView_<?php echo $client_products_values['ClientProduct']['id'] ?>" role="dialog">
                                                                            <div class="modal-dialog modals-large">
                                                                                <div class="modal-content">
                                                                                        <div class="modal-header">

                                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                        </div>
                                                                                        <div class="modal-body">

                                                                                           
                                                                                           
                                                                                            <div class="bsc-tbl-hvr">
                                                                                                <table class="table table-hover" id="normal-table">
                                                                                                    <thead>
                                                                                                        <tr>
                                                                                                            <td colspan="2"><h4 class="text-center"><?php echo $client_products_values['Client']['client_code'].' - '.$client_products_values['Product']['name']; ?></h4></td>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td>Virtual IP Address</td>
                                                                                                            <td><?php echo $client_products_values['ClientProduct']['virtual_ip_address']; ?> </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>Teamviewer ID</td>
                                                                                                            <td><?php echo $client_products_values['ClientProduct']['teamviewer_id']; ?> </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>Teamviewer Password</td>
                                                                                                            <td><?php echo $client_products_values['ClientProduct']['teamviewer_password']; ?> </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>FTP Username</td>
                                                                                                            <td><?php echo $client_products_values['ClientProduct']['ftp_username']; ?> </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>FTP Password</td>
                                                                                                            <td><?php echo $client_products_values['ClientProduct']['ftp_password']; ?> </td>
                                                                                                        </tr>

                                                                                                        <tr>
                                                                                                            <td>Database</td>
                                                                                                            <td><?php echo $client_products_values['ClientProduct']['database']; ?> </td>
                                                                                                        </tr>

                                                                                                        <tr>
                                                                                                            <td>Database Username</td>
                                                                                                            <td><?php echo $client_products_values['ClientProduct']['database_username']; ?> </td>
                                                                                                        </tr>

                                                                                                        <tr>
                                                                                                            <td>Database Password</td>
                                                                                                            <td><?php echo $client_products_values['ClientProduct']['database_password']; ?> </td>
                                                                                                        </tr>


                                                                                                        
                                                                                                         
                                                                                                        
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="modal-footer">

                                                                                        </div>

                                                                                </div>
                                                                            </div>
                                                                          </div>
                                                                         <?php } ?>

                                                                          
                                                                            
                                                                          <div class="modal fade" id="myModalone" role="dialog">
                                                                            <div class="modal-dialog modals-large">
                                                                                <div class="modal-content">
                                                                                    <?php echo $this->Form->create('Client', array('url' => array('action' => 'edit_installation_details'))); ?>
                                                                                        <div class="modal-header">
                                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <h4 class="text-center">Add New Client Product</h4>
                                                                                            <?php 
                                                                                            $client_id = $this->data['Client']['id'];
                                                                                            echo $this->Form->hidden('ClientProduct.client_id', array('value'=>$client_id,'type'=>'text','label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                                   
                                                                                            <div class="form-example-int form-horizental mg-t-15">
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                                                                                        <label class="hrzn-fm" for="enabled">Product</label>
                                                                                                    </div>
                                                                                                    <div class="col-lg-6 col-md-7 col-sm-7 col-xs-12">
                                                                                                        <div class="nk-int-st">
                                                                                                           <?php echo $this->Form->input('ClientProduct.product_id', array('options'=>$product_info,'label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                            <div class="form-example-int form-horizental mg-t-15">
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                                                                                        <label class="hrzn-fm" for="enabled">Description</label>
                                                                                                    </div>
                                                                                                    <div class="col-lg-6 col-md-7 col-sm-7 col-xs-12">
                                                                                                        <div class="nk-int-st">
                                                                                                           <?php echo $this->Form->input('ClientProduct.description', array('label'=>false, 'div'=>false, 'class'=>'form-control input-sm', 'id'=>'description')); ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-example-int form-horizental mg-t-15">
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                                                                                        <label class="hrzn-fm" for="enabled">IP Address</label>
                                                                                                    </div>
                                                                                                    <div class="col-lg-6 col-md-7 col-sm-7 col-xs-12">
                                                                                                        <div class="nk-int-st">
                                                                                                           <?php echo $this->Form->input('ClientProduct.ip_address', array('label'=>false, 'div'=>false, 'class'=>'form-control input-sm', 'id'=>'ip_address')); ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                            <div class="form-example-int form-horizental mg-t-15">
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                                                                                        <label class="hrzn-fm" for="enabled">Virtual IP Address</label>
                                                                                                    </div>
                                                                                                    <div class="col-lg-6 col-md-7 col-sm-7 col-xs-12">
                                                                                                        <div class="nk-int-st">
                                                                                                           <?php echo $this->Form->input('ClientProduct.virtual_ip_address', array('label'=>false, 'div'=>false, 'class'=>'form-control input-sm', 'id'=>'ip_address')); ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                            <div class="form-example-int form-horizental mg-t-15">
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                                                                                        <label class="hrzn-fm" for="enabled">Teamviewer ID</label>
                                                                                                    </div>
                                                                                                    <div class="col-lg-6 col-md-7 col-sm-7 col-xs-12">
                                                                                                        <div class="nk-int-st">
                                                                                                           <?php echo $this->Form->input('ClientProduct.teamviewer_id', array('type'=>'text','label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                            <div class="form-example-int form-horizental mg-t-15">
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                                                                                        <label class="hrzn-fm" for="enabled">Teamviewer Password</label>
                                                                                                    </div>
                                                                                                    <div class="col-lg-6 col-md-7 col-sm-7 col-xs-12">
                                                                                                        <div class="nk-int-st">
                                                                                                           <?php echo $this->Form->input('ClientProduct.teamviewer_password', array('label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                            <div class="form-example-int form-horizental mg-t-15">
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                                                                                        <label class="hrzn-fm" for="enabled">FTP Username</label>
                                                                                                    </div>
                                                                                                    <div class="col-lg-6 col-md-7 col-sm-7 col-xs-12">
                                                                                                        <div class="nk-int-st">
                                                                                                           <?php echo $this->Form->input('ClientProduct.ftp_username', array('label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                            <div class="form-example-int form-horizental mg-t-15">
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                                                                                        <label class="hrzn-fm" for="enabled">FTP Password</label>
                                                                                                    </div>
                                                                                                    <div class="col-lg-6 col-md-7 col-sm-7 col-xs-12">
                                                                                                        <div class="nk-int-st">
                                                                                                           <?php echo $this->Form->input('ClientProduct.ftp_password', array('label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                            <div class="form-example-int form-horizental mg-t-15">
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                                                                                        <label class="hrzn-fm" for="enabled">Database</label>
                                                                                                    </div>
                                                                                                    <div class="col-lg-6 col-md-7 col-sm-7 col-xs-12">
                                                                                                        <div class="nk-int-st">
                                                                                                           <?php 
                                                                                                           $databases = array('MySQL'=>'MySQL', 'MS SQL'=>'MS SQL', 'PostgreSQL'=>'PostgreSQL');
                                                                                                           echo $this->Form->input('ClientProduct.database', array('options'=>$databases,'label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-example-int form-horizental mg-t-15">
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                                                                                        <label class="hrzn-fm" for="enabled">Database Username</label>
                                                                                                    </div>
                                                                                                    <div class="col-lg-6 col-md-7 col-sm-7 col-xs-12">
                                                                                                        <div class="nk-int-st">
                                                                                                           <?php echo $this->Form->input('ClientProduct.database_username', array('label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-example-int form-horizental mg-t-15">
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                                                                                        <label class="hrzn-fm" for="enabled">Database Password</label>
                                                                                                    </div>
                                                                                                    <div class="col-lg-6 col-md-7 col-sm-7 col-xs-12">
                                                                                                        <div class="nk-int-st">
                                                                                                           <?php echo $this->Form->input('ClientProduct.database_password', array('label'=>false, 'div'=>false, 'class'=>'form-control input-sm')); ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>



                                                                                            
                                                                                            
                                                                                         </div>                                 
                                                                                        <div class="modal-footer">
                                                                                            <?php echo $this->Form->end(__('Submit', array('class'=>'btn btn-success notika-btn-success'))); ?>
                                                                                        </div>
                                                                                </div>
                                                                             </div>
                                                                           </div>

                                                                            <!-- Product Information -->






                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-collapse notika-accrodion-cus">
                                                                    <div class="panel-heading" role="tab">
                                                                        <h4 class="panel-title">
                                                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-two" aria-expanded="false">
                                                                                    Laboratory Information
                                                                                </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="accordionGreen-two" class="collapse" role="tabpanel">
                                                                        <div class="panel-body">





                                                                            <div class="bsc-tbl-hvr">
                                                                                <table class="table table-hover" id="normal-table">
                                                                                    <thead>
                                                                                        <tr> 
                                                                                            <td> Chief Medtech </td>
                                                                                            <td> Champion Medtech </td>
                                                                                            <td> Lab. Main Contact # </td>
                                                                                            <td> Action </td>
                                                                                        </tr>
                                                                                    </thead>

                                                                                    <tbody>

                                                                                        <?php foreach($client_laboratory_info as $client_details_key => $client_details_values) {

                                                                                        ?> 
                                                                                          <tr> 
                                                                                                <td><?php echo $client_details_values['ClientDetail']['chief_medtech']; ?></td>
                                                                                                <td><?php echo $client_details_values['ClientDetail']['champion_medtech']; ?></td>
                                                                                                <td><?php echo $client_details_values['ClientDetail']['laboratory_contact_number']; ?></td>
                                                                                                <td>
                                                                                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'notika-icon notika-menus')).' ', array('controller'=>'ClientDetail','action' => 'edit',  $client_details_values['ClientDetail']['id']), array('escape' => false,'class'=>'btn btn-orange orange-icon-notika waves-effect','data-toggle'=>'tooltip', 'data-placement'=>'top','title'=>'Edit')) ?>
                                                                                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'notika-icon notika-close')).' ', array('controller'=>'ClientDetail','action' => 'delete',  $client_details_values['ClientDetail']['id']), array('confirm' => __('Are you sure you want to delete this?', $client_details_values['ClientDetail']['id']), 'escape' => false,'class'=>'btn btn-danger danger-icon-notika waves-effect','data-toggle'=>'tooltip', 'data-placement'=>'top','title'=>'Delete')) ?>
                                                                                                </td>
                                                                                          </tr>  
                                                                                        <?php } ?>
                                                                                         
                                                                                        
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                           

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-collapse notika-accrodion-cus">
                                                                    <div class="panel-heading" role="tab">
                                                                        <h4 class="panel-title">
                                                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-three" aria-expanded="false">
                                                                                    Machine Analyzers
                                                                                </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="accordionGreen-three" class="collapse" role="tabpanel">
                                                                        <div class="panel-body">
                                                                            





                                                                            <div class="data-table-area">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="data-table-list">
                                                                                           
                                                                                            <div class="table-responsive">
                                                                                                <table id="data-table-basic" class="table table-striped">
                                                                                                    <thead>
                                                                                                        <tr>
                                                                                                            <th><?php echo $this->Paginator->sort('machine'); ?></th>
                                                                                                            <th><?php echo $this->Paginator->sort('section'); ?></th>
                                                                                                            <th><?php echo $this->Paginator->sort('machine engineer'); ?></th>
                                                                                                            <th><?php echo $this->Paginator->sort('provider'); ?></th>
                                                                                                            <th><?php echo $this->Paginator->sort('internal engineer'); ?></th>
                                                                                                            <th><?php echo $this->Paginator->sort('enabled'); ?></th>
                                                                                                            <th class="actions"><?php echo __('Actions'); ?></th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <?php foreach ($client_machine_analyzers as $client_machine_analyzer_value): ?>
                                                                                                        <tr>
                                                                                                            <td><?php echo h($client_machine_analyzer_value['MachineAnalyzer']['name']); ?>&nbsp;</td>
                                                                                                            <td><?php echo h($client_machine_analyzer_value['LaboratorySection']['name']); ?>&nbsp;</td>
                                                                                                            <td><?php echo h($client_machine_analyzer_value['ClientMachineAnalyzer']['external_engineer']); ?>&nbsp;</td>
                                                                                                            <td><?php echo h($client_machine_analyzer_value['Provider']['name']); ?>&nbsp;</td>
                                                                                                            <td><?php echo h($client_machine_analyzer_value['ClientMachineAnalyzer']['internal_engineer']); ?>&nbsp;</td>
                                                                                                            <td>
                                                                                                                
                                                                                                                <?php if($client_machine_analyzer_value['ClientMachineAnalyzer']['enabled'] == 1) { 
                                                                                                                    echo "Active";
                                                                                                                } else {
                                                                                                                    echo "Inactive";
                                                                                                                }
                                                                                                                ?>&nbsp;
                                                                                                            </td>
                                                                                                            <td class="actions">
                                                                                                                <?php
                                                                                                                    $this->Log($client_machine_analyzer_value); 
                                                                                                                 echo $this->Html->link($this->Html->tag('i', '', array('class' => 'notika-icon notika-menus')).' ', array('controller'=>'ClientMachineAnalyzers','action' => 'edit',  $client_machine_analyzer_value['ClientMachineAnalyzer']['id']), array('escape' => false,'class'=>'btn btn-orange orange-icon-notika waves-effect','data-toggle'=>'tooltip', 'data-placement'=>'top','title'=>'Edit')) ?>
                                                                                                                <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'notika-icon notika-close')).' ', array('controller'=>'ClientMachineAnalyzers','action' => 'delete',  $client_machine_analyzer_value['ClientMachineAnalyzer']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $client_machine_analyzer_value['ClientMachineAnalyzer']['id']), 'escape' => false,'class'=>'btn btn-danger danger-icon-notika waves-effect','data-toggle'=>'tooltip', 'data-placement'=>'top','title'=>'Delete')) ?>
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

                                                <!-- Accordion -->
                                   
                                                <!-- Product Information -->

                                                





                                             
                                </div>
                           </div>




                                <div id="menu3" class="tab-pane fade">
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
                                                                            <h2>Documentations</h2>
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
                                        



                                        



                                    </div>
                                </div>





                                <div id="menu4" class="tab-pane fade">
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
                                                                            <h2>Maintenance</h2>
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
                                        



                                        



                                    </div>
                                </div>
                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <?php 

    $product_codes = array();
    foreach($products as $products_key=>$products_values)
    {
        $product_codes[$products_values['Product']['name']] = $products_values['Product']['name'];


    }



    ?>

    <style>
        .waves-button-input {
            background: #00c292;
            border: none;
            outline: none !important;
            border-radius: 2px;
            font-size: 14px;
            padding:0;
        }
    </style>



    <script type="text/javascript">
    /*


        var products = <?php echo $this->Js->object($product_codes);?>;
        var index= 1;
        jQuery('.add_button').click(function(){
            thisevent = jQuery(this);
            productcount = jQuery(thisevent).attr('clientproductcount');
            clientProductID = jQuery(thisevent).attr('clientproductid');

            newrow = "<tr><td>";
            newrow+="<input type='hidden' name='data[ClientProduct][client_id]' value='"+index+"' id='ClientProduct"+productcount+"'>"+
                    "<select name='data[Product][name]' class='clientProductIDSelect form-control input-sm'>";
            newrow+="<option value></option>";
            jQuery.each(products,function(name){
                newrow+="<option value='"+name+"'>"+name+"</option>";
            });
            
            newrow+="</select>"+
                    "</td>"+
                    "<input type='hidden' name='data[ClientProduct][client_id]' value='"+index+"' id='ClientProduct"+productcount+"'>"+

                    "<td style='text-align:center;'>"+
                        "<input name='data[ClientProduct][description]' type='text' class='form-control input-sm' size='10' maxlength='16' id='ClientProduct"+productcount+"'>"+
                    "</td>"+
                    "<td style='text-align:center;'>"+
                        "<input name='data[ClientProduct][ip_address]' type='text' class='form-control input-sm' size='10' maxlength='16' id='ClientProduct"+productcount+"'>"+
                    "</td>"+
                    
                "</tr>"
                ;



            jQuery(thisevent).closest('div').find('#normal-table tbody').append(newrow);
            jQuery(thisevent).attr('productcount',parseInt(productcount)+1);
        });
       */
    </script>