<section class="content-header">
    <h1>Suppliers<small>Pemasok Barang</small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <li class="active">Suppliers</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?=ucfirst($page) ?> Suppliers</h3>
          <div class="pull-right">
            <a href="<?= site_url('supplier') ?>" class="btn btn-warning btn-xs">
              <i class="fa fa-undo"></i>
              Back
            </a> 
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form action="<?=site_url('supplier/process') ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Supplier Name *</label>
                  <input type="hidden" name="id" value="<?=$row->supplier_id ?>">
                  <input type="text" name="supplier_name" value="<?=$row->name ?>" class="form-control" placeholder="Spplier Name" required="">
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
                  <label>Description</label>
                  <textarea type="text" name="desc" class="form-control" placeholder="Description"><?=$row->description ?></textarea>
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