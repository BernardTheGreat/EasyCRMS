<div class="background">
  <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                  <div class="flash-message">  
                    <?= $this->Flash->render() ?>
  				        </div>
                  <?= $this->Form->create() ?>
                 
                  <div class="form-group">
                    <label class="label">Username</label>
                        <?php 
                         $this->Form->setTemplates([
                            'inputContainer' => '<div class="input-group">
                                {{content}}'
                        ]);

                        ?>


  					             <?= $this->Form->control('username', array('class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'Username', 'label'=>false, 'div'=>false)) ?>
                         <div class="input-group-append">
                            <span class="input-group-text">
                              <i class="mdi mdi-check-circle-outline"></i>
                            </span>
                          </div>
                        </div>

                     
                  </div>
                  <div class="form-group">
                    <label class="label">Password</label>
                 
                      <?= $this->Form->control('password', array('class'=>'form-control', 'autocomplete'=>'off', 'div'=>false, 'placeholder'=>'********', 'label'=>false)) ?>

                      <div class="input-group-append">
                            <span class="input-group-text">
                              <i class="mdi mdi-check-circle-outline"></i>
                            </span>
                          </div>
                        </div>
                  </div>
                  <div class="form-group">
                   <?= $this->Form->button('Login', array('class'=>'btn btn-primary submit-btn btn-block')) ?>
  						
                  </div>
                  <div class="form-group d-flex justify-content-between">
                    <div class="form-check form-check-flat mt-0">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked> Keep me signed in
                      </label>
                    </div>
                    <a href="#" class="text-small forgot-password text-black">Forgot Password</a>
                  </div>
                  <div class="text-block text-center my-3">
                    <span class="text-small font-weight-semibold">Not a member ?</span>
                    <a href="/clients/register" class="text-black text-small">Create new account</a>
                  </div>
                <?= $this->Form->end() ?>
              </div>
             
              <p class="footer-text text-center">Copyright © <?php echo date('Y'); ?>. All rights reserved.</p>
            </div>
          </div>
        </div>
      <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
  </div>