<section class="content-header">
	<h1>Sales<small>Penjualan</small></h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li>Transaction</li>
		<li class="active">Sales</li>
	</ol>
</section>

<section class="content">
	<div class="row">	
		<div class="col-lg-4">
			<div class="box box-widget">
				<div class="box-body">
					<div class="form-group">
						<table width="100%">
							<tr>
								<td style="vertical-align: top">
									<label for="date">Date</label>
								</td>
								<td>
									<div class="form-group">
										<input type="date" id="date" value="<?=date('Y-m-d') ?>" class="form-control">
									</div>
								</td>
							</tr>
							<td style="vertical-align: top; width:30%">
								<label for="user">Kasir</label>	
							</td>
							<td>
								<div class="form-group">
									<input type="text" id="user" value="<?=$this->fungsi->user_login()->name?>" class="form-control">
								</div>
							</td>
						</tr>
						<td style="vertical-align: top">
							<label for="customer">Customer</label>
						</td>
						<td>
							<div>
								<select id="customer"  class="form-control">
									<option value="">Umum</option>
									<?php foreach ($customer as $cust => $value){
										echo '<option value="'.$value->customer_id.'">'.$value->name.'</option>';
									}?>
								</select>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>


<div class="col-lg-4">
	<div class="box box-widget">
		<div class="box-body">
			<table width="100%">
				<tr>
					<td style="vertical-align: top; width:30%">
						<label for="barcode">Barcode</label>
					</td>
					<td>
						<div class="form-group input-group">
							<input type="hidden" id="item_id">
							<input type="hidden" id="price">
							<input type="hidden" id="stock">
							<input type="text" id="barcode" class="form-control" autofocus>
							<span class="input-group-btn">
								<button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-item"><i class="fa fa-search"></i>
								</button>
							</span>
						</div>
					</td>
				</tr>
				<td style="vertical-align: top">
					<label for="qty">Qty</label>	
				</td>
				<td>
					<div class="form-group">
						<input type="number" id="qty" value="1" min="1" class="form-control">
					</div>
				</td>
			</tr>
			<td></td>
			<td>
				<div>
					<button type="button" id="add_cart" class="btn btn-primary"><i class="fa fa-cart-plus"></i>
					Add</button>
				</div>
			</td>
		</tr>
	</table>
   </div>
  </div>
</div>


<div class="col-lg-4">
	<div class="box box-widget">
		<div class="box-body">
			<div align="right">
				<h4>Invoice <b><span id="invoice"><?=$invoice ?></span></b></h4>
				<h1><b><span id="grand_total2" style="font-size:50pt">0</span></b></h1>	
			</div>
		</div>
	</div>
</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="box box-widget">
			<div class="box-body table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Barcode</th>
							<th>Product Item</th>
							<th>Price</th>
							<th>Qty</th>
							<th width="10%">Discount Item</th>
							<th width="10%">Total</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody id="cart_table">
						<tr>
							<td colspan="9" class="text-center">Tidak Ada Item</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-3">
		<div class="box box-widget">
			<div class="box-body">
				<table width="100%">
					<tr>
						<td style="vertical-align: top">
							<label for="sub_total">Sub Total</label>
						</td>
						<td>
							<div class="form-group">
								<input type="number" id="sub_total" value="" class="form-control">
							</div>
						</td>
					</tr>
					<td style="vertical-align: top; width:30%">
						<label for="discount">Discount</label>	
					</td>
					<td>
						<div class="form-group">
							<input type="number" id="discount" value="0" min="0" class="form-control">
						</div>
					</td>
				</tr>
				<td style="vertical-align: top">
					<label for="grand_total">Grand Total</label>
				</td>
				<td>
					<div class="form-group">
						<input type="number" id="grand_total" class="form-control">
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>
</div>

<div class="col-lg-3">
	<div class="box box-widget">
		<div class="box-body">
			<table width="100%">
				<tr>
					<td style="vertical-align: top">
						<label for="cash">Cash</label>
					</td>
					<td>
						<div class="form-group">
							<input type="number" id="cash" value="0" min="0" class="form-control">
						</div>
					</td>
				</tr>
				<td style="vertical-align: top; width:30%">
					<label for="change">Change</label>
				</td>
				<td>
					<div class="form-group">
						<input type="number" id="change" class="form-control">
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>
</div>

<div class="col-lg-3">
	<div class="box box-widget">
		<div class="box-body">
			<table width="100%">
				<tr>
					<td style="vertical-align: top">
						<label for="note">Note</label>
					</td>
					<td>
						<div>
							<textarea id="note" row="3" class="form-control"></textarea>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>

<div class="col-lg-3">
	<div>
		<button id="cancel_payment" class="btn btn-flat btn-lg btn-warning">
			<i class="fa fa-refresh"></i> Cancel</button><br><br>
			<button id="process_payment" class="btn btn-flat btn-lg btn-success">
				<i class="fa fa-paper-plane-o"></i> Process Payment</button>	
			</div>
		</div>
	</div>
</section>

<!-- Modal -->
<div class="modal fade" id="modal-item">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title">Add Product Item</h5>
      </div>
      <div class="modal-body table-responsive">
        <table class="table table-bordered table-striped" id="table1">
          <thead>
            <tr>
              <th>Barcode</th>
              <th>Name</th>
              <th>Unit</th>
              <th>Price</th>
              <th>Stock</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($item as $i => $data): ?>            
            <tr>
              <td><?=$data->barcode ?></td>
              <td><?=$data->name ?></td>
              <td><?=$data->unit_name ?></td>
              <td><?=indonesia_currency($data->price)?></td>
              <td class="text-right"><?=$data->stock ?></td>
              <td class="text-right">
                <button class="btn btn-xs btn-info" id="select"
                        data-id="<?=$data->item_id?>"
                        data-barcode="<?=$data->barcode?>"
                        data-price="<?=$data->price?>"
                        data-stock="<?=$data->stock?>">
                  <i class="fa fa-check"></i> Select
                </button>
              </td>
            </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script>
    $(document).on('click','#select', function(){
      $('#item_id')		.val($(this).data('id'))
      $('#barcode')		.val($(this).data('barcode'))
      $('#price')		.val($(this).data('price'))
      $('#stock')		.val($(this).data('stock'))
      $('#modal-item')	.modal('hide')
  })
      $(document).on('click','#add_cart', function(){
      var item_id   = $('#item_id').val()
      var price   	= $('#price').val()
      var stock     = $('#stock').val()
      var qty 		= $('#qty').val()
      if(item_id == ''){
      	alert('product belum dipilih')
      	$('#barcode').focus()
      }else if(stock < 1){
      	alert('Stock tidak mencukupi')
      	$('#item_id').val('')
        $('#barcode').val('')
        $('#barcode').focus()
      }else{
      	$.ajax({
      		type: 'POST',
      		url: '<?=site_url('sale/process') ?>',
      		data: {'add_cart' : true, 'item_id' : item_id, 'price' : price, 'qty' : qty},
      		dataType: 'json',
      		success: function(result){
      			if(result.success == true){
      				alert('Berhasil tambah cart ke db')
      			}else{
      				alert('Gagal tambah item cart')
      			}
      		}
      	})
      }
    })  
</script>