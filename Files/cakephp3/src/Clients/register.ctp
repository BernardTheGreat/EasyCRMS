
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <h2 class="text-center mb-4">Register</h2>
            <div class="auto-form-wrapper">
              <?php echo $this->Form->create($client); ?>
                <div class="form-group">
                   <?php echo $this->Form->control('username', array('placeholder'=>'Username', 'class
                   '=>'form-control', 'label'=>false)); ?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->control('password', array('placeholder'=>'******', 'class
                   '=>'form-control', 'label'=>false)); ?>
                    
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="******">
               
                </div>
                <div class="form-group d-flex justify-content-center">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked> I agree to the terms
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <?php echo $this->Form->button(__('Register'), array('class'=>'btn btn-primary submit-btn btn-block')); ?>
                </div>

                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Already have and account ?</span>
                  <a href="/clients/login" class="text-black text-small">Login</a>
                </div>
              <?php echo $this->Form->end(); ?>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>