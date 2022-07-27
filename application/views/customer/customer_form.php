<section class="content-header">
    <h1>Customers<small>Pemasok Barang</small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <li class="active">Customers</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?=ucfirst($page) ?> Customers</h3>
          <div class="pull-right">
            <a href="<?= site_url('customer') ?>" class="btn btn-warning btn-xs">
              <i class="fa fa-undo"></i>
              Back
            </a> 
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form action="<?=site_url('customer/process') ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Customer Name *</label>
                  <input type="hidden" name="id" value="<?=$row->customer_id ?>">
                  <input type="text" name="customer_name" value="<?=$row->name ?>" class="form-control" placeholder="Customer Name" required="">
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <select name="gender" class="form-control" required>
                    <option value="">- Pilih -</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>                 
                <div class="form-group">
                  <label>Phone *</label>
                  <input type="number" name="phone" value="<?=$row->phone ?>" class="form-control" placeholder="Phone Number" required="">
                </div> 
                <div class="form-group">
                  <label>Address</label>
                  <textarea type="text" name="addr" class="form-control" placeholder="Address"><?=$row->address ?></textarea>
                </div>  
                <div class="form-group">
                <button type="submit" name="<?=$page ?>" class="btn btn-success btn-xs"><i class="fa fa-paper-plane"></i> Save</button>
                <button type="reset" class="btn btn-flat btn-xs"> Reset</button>
              </div>
            </form>
          </div>
        </div> 
      </div>
    </div>
  </section>