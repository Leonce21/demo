<?= $this->extend('backend/layout/auth-layout.php') ?>
<?= $this->section('content') ?>
  
<!-- <div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Register</h5>
                    <form action="<?php echo base_url('/register'); ?>" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email') ?>">
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('email') ?></small>
                            <?php endif;?>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('password') ?></small>
                            <?php endif;?>
                        </div>
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('confirm_password') ?></small>
                            <?php endif;?>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-block">Register Now</button>
                            <p class="text-center">Have already an account <a href="<?php echo base_url('/login'); ?>">Login here</a><p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
     
</div> -->


<div class="login-box bg-white box-shadow border-radius-10">
    <div class="login-title">
        <h2 class="text-center text-primary">Register To DeskApp</h2>
    </div>
    <form action="<?php echo base_url('/register'); ?>" method="post">

        <div class="input-group custom">
            <input type="text" class="form-control form-control-lg" id="uname" name="uname" value="<?= set_value('uname') ?>" placeholder="UserName" />
            <div class="input-group-append custom">
                <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
            </div> 
            <?php if(isset($validation)):?>
                <small class="text-danger"><?= $validation->getError('uname') ?></small>
            <?php endif;?>
        </div>

        <div class="input-group custom">
            <input type="email" class="form-control form-control-lg" id="email" name="email" value="<?= set_value('email') ?>" placeholder="Email" />
            <div class="input-group-append custom">
                <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
            </div> 
            <?php if(isset($validation)):?>
                <small class="text-danger"><?= $validation->getError('email') ?></small>
            <?php endif;?>
        </div>

        <div class="input-group custom">
            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="**********" />
            <div class="input-group-append custom">
                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
            </div>
           
        </div>
        <?php if(isset($validation)):?>
            <small class="text-danger"><?= $validation->getError('password') ?></small>
        <?php endif;?>

        <div class="input-group custom">
            <input type="password" class="form-control form-control-lg" id="confirm_password" name="confirm_password" placeholder="**********" />
            <div class="input-group-append custom">
                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
            </div>
            <?php if(isset($validation)):?>
                <small class="text-danger"><?= $validation->getError('confirm_password') ?></small>
            <?php endif;?>
        </div>
     
        <div class="row">
            <div class="col-sm-12">
                <div class="input-group mb-0">
                    
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                </div>
                <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">
                    OR
                </div>
                <div class="input-group mb-0">
                    <a class="btn btn-outline-primary btn-lg btn-block" href="<?php echo base_url('/login'); ?>">Login To your
                        Account</a>
                </div>
            </div>
        </div>
    </form>
</div>
  
<?=$this->endSection()?>