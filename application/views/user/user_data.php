<section class="content-header">
    <h1>Users<small>it all starts here</small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <li class="active">Users</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
     <?php $this->view('messages') ?>  
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Users</h3>
          <div class="pull-right">
            <a href="<?= site_url('user/add') ?>" class="btn btn-primary btn-xs">
              <i class="fa fa-user-plus"></i>
              Create
            </a> 
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table class="table table-bordered" id="table1">
            <thead>  
            <tr>
              <th>#</th>
              <th>Username</th>
              <th>Name</th>
              <th>Address</th>
              <th>Level</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $no = 1;
            foreach ($row->result() as $key => $data){ ?>
            <tr>
              <td style="width:5%;"><?= $no++ ?></td>
              <td><?= $data->username ?></td>
              <td><?= $data->name ?></td>
              <td><?= $data->address ?></td>
              <td><?= $data->level == 1 ? "Admin" : "Kasir"?></td>
              <td class="text-center" width="160px">
                <form action="<?=site_url('user/del') ?>" method="post">
                <a href="<?= site_url('user/edit/'.$data->user_id) ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Update</a> 
              
                  <input type="hidden" name="user_id" value="<?=$data->user_id ?>">
                <button onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</button>
                </form> 
              </td>
              </tr>
             <?php } ?>
             </tbody>
          </table>
        </div> 
      </div>
  </section>