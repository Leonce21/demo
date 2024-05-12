<?= $this->extend('backend/layout/auth-layout.php') ?>
<?= $this->section('content') ?>
  
<!-- <div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Sign In</h5>
                    <?php if(session()->getFlashdata('error')):?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif;?>
                    <form action="<?php echo base_url('/login'); ?>" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                            <p class="text-center">Don't have account? <a href="<?php echo base_url('/'); ?>">Register here</a><p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
     
</div> -->

<div class="login-box bg-white box-shadow border-radius-10">
    <div class="login-title">
        <h2 class="text-center text-primary">Login To DeskApp</h2>
        
    </div>
    <?php if(session()->getFlashdata('error')):?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif;?>
    <form action="<?php echo base_url('/login'); ?>" method="post">
        <div class="input-group custom">
            <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email" />
            <div class="input-group-append custom">
                <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
            </div>
        </div>
        <div class="input-group custom">
            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="**********" />
            <div class="input-group-append custom">
                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
            </div>
        </div>
        <div class="row pb-30">
            <div class="col-6">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" />
                    <label class="custom-control-label" for="customCheck1">Remember</label>
                </div>
            </div>
            <div class="col-6">
                <div class="forgot-password">
                    <a href="forgot-password.html">Forgot Password</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="input-group mb-0">
                    
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                </div>
                <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">
                    OR
                </div>
                <div class="input-group mb-0">
                    <a class="btn btn-outline-primary btn-lg btn-block" href="<?php echo base_url('/register'); ?>">Register To Create
                        Account</a>
                </div>
            </div>
        </div>
    </form>
</div>

  
<?=$this->endSection()?>