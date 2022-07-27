<section class="content-header">
    <h1>Categories<small>Kategori Barang</small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <li class="active">Category</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?=ucfirst($page) ?> Category</h3>
          <div class="pull-right">
            <a href="<?= site_url('category') ?>" class="btn btn-warning btn-xs">
              <i class="fa fa-undo"></i>
              Back
            </a> 
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form action="<?=site_url('category/process') ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Category Name *</label>
                  <input type="hidden" name="id" value="<?=$row->category_id ?>">
                  <input type="text" name="category_name" value="<?=$row->name ?>" class="form-control" placeholder="Category Name" required="">
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