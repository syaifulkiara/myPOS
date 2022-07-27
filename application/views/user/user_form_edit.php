<section class="content-header">
    <h1>Edit User<small>it all starts here</small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <li class="active">Users</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit User</h3>
          <div class="pull-right">
            <a href="<?= site_url('user') ?>" class="btn btn-warning btn-xs">
              <i class="fa fa-undo"></i>
              Back
            </a> 
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form action="" method="post">
              <div class="box-body">
                <div class="form-group <?=form_error('fullname') ? 'has-error' : null ?>">
                  <label>Nama *</label>
                  <input type="hidden" name="user_id" value="<?=$row->user_id ?>">
                  <input type="text" name="fullname" value="<?=$this->input->post('fullname') ?? $row->name ?>" class="form-control" placeholder="Name">
                  <?=form_error('fullname') ?>
                </div>
                 <div class="form-group <?=form_error('username') ? 'has-error' : null ?>">
                  <label>Username *</label>
                  <input type="text" name="username" value="<?=$this->input->post('username') ?? $row->username ?>" class="form-control" placeholder="Username">
                  <?=form_error('username') ?>
                </div>
                 <div class="form-group <?=form_error('password') ? 'has-error' : null ?>">
                  <label>Password</label><small>(Biarkan kosong jika tidak diganti)</small>
                  <input type="password" name="password" value="<?=$this->input->post('password') ?>" class="form-control" placeholder="Password">
                  <?=form_error('password') ?>
                </div>
                <div class="form-group <?=form_error('passconf') ? 'has-error' : null ?>">
                  <label>Password Confirmation</label>
                  <input type="password" name="passconf" value="<?=$this->input->post('passconf') ?>" class="form-control" placeholder="Password Confirmation">
                  <?=form_error('passconf') ?>
                </div>
                <div class="form-group <?=form_error('address') ? 'has-error' : null ?>">
                  <label>Address </label>
                  <textarea type="text" name="address" class="form-control" placeholder="Address"><?=$this->input->post('address') ?? $row->address ?></textarea>
                  <?=form_error('address') ?>
                </div>
                <div class="form-group <?=form_error('level') ? 'has-error' : null ?>">
                  <label>Level *</label>
                  <select name="level" class="form-control">
                    <?php $level = $this->input->post('level') ? $this->input->post('level'): $row->level ?>
                    <option value="1">Admin</option>
                    <option value="2"<?=$level == 2 ? 'selected' : null ?>>Kasir</option>
                  </select>
                  <?=form_error('level') ?>
                </div>                
                <div class="form-group">
                <button type="submit" class="btn btn-success btn-xs"><i class="fa fa-paper-plane"></i> Save</button>
                <button type="reset" class="btn btn-flat"> Reset</button>
              </div>
            </form>
          </div>
        </div> 
      </div>
    </div>
  </section>