<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initila-scala=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>QR-Code Product <?=$row->barcode ?></title>
</head>
<body>
         <img src="uploads/qr-code/item-<?=$row->item_id?>.png" style="width:250px">
         <br/>
         <?=$row->barcode  ?>
</body>
</html>