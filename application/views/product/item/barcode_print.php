<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initila-scala=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Barcode Product <?=$row->barcode ?></title>
</head>
<body>
	<?php 
         $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
        echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($row->barcode, $generator::TYPE_CODE_128)) . '" style="width:250px">';
         ?>
         <br/>
         <?=$row->barcode  ?>
</body>
</html>