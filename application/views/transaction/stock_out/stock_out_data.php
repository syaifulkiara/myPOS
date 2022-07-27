<section class="content-header">
    <h1>Stock Out<small>Barang Rusak</small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <li>Transaction</li>
      <li class="active">Stock Out</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">  
  <?php $this->view('messages') ?>  
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Stock Out</h3>
          <div class="pull-right">
            <a href="<?= site_url('stock/out/add') ?>" class="btn btn-primary btn-xs">
              <i class="fa fa-plus"></i> Add Stock Out</a> 
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table class="table table-bordered" id="table1">
            <thead>  
            <tr>
              <th>#</th>
              <th>Barcode</th>
              <th>Product Item</th>
              <th>Qty</th>
              <th>Info</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $no = 1;
            foreach ($row as $key => $data){ ?>
            <tr>
              <td style="width:5%;"><?= $no++ ?></td>
              <td><?= $data->barcode ?></td>
              <td><?= $data->name ?></td>
              <td><?= $data->qty ?></td>
              <td><?= $data->detail ?></td>
              <td><?=indonesia_date($data->date) ?></td>
              <td class="text-center" width="160px">
                <a href="<?= site_url('stock/out/del/'.$data->stock_id.'/'.$data->item_id) ?> " onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a> 
              </td>
              </tr>
             <?php } ?>
             </tbody>
          </table>
        </div> 
      </div>
  </section>