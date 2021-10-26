<?php
	$sembako = [
		[
			'nama' => 'Beras',
			'berat' => 10,
			'stok' => 40,
        ],	
        [
            'nama' => 'Tepung',
			'berat' => 20,
			'stok' => 100,
        ],
        [
            'nama' => 'Minyak Goreng',
			'berat' => 15,
			'stok' => 25,
        ],
        [
            'nama' => 'Gula',
			'berat' => 11,
			'stok' => 0,
        ],
        [
            'nama' => 'Garam',
			'berat' => 10,
			'stok' => 0,
        ]
	];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Praktikum 3</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center><h1>Tabel Konversi Warung Sayur Pak Joy</h1></center>
	<table class="table-zebra-striping">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Barang</th>
                <th>Stok</th>
				<th>Berat (kg)</th>
				<th>Berat (gram)</th>
                <th>Berat (miligram)</th>
                <th>Berat (liter)</th>
                
                
			</tr>
		</thead>
		<tbody>
            <?php foreach($sembako as $index => $value) { ?>
				<tr>
					<td><?php echo $index+1 ?></td>
					<td><?php echo $value['nama'] ?></td>
                    <?php if($value['stok']==0){ ?>
                        <td class="kosong"><?php echo 'kosong'; ?></td>
                    <?php } else { ?>
						<td><?php echo $value['stok']; ?></td>
                    <?php } ?>
					<td><?php echo $value['berat'] ?></td>
					<td><?php echo $value['berat']*1000 ?></td>
					<td><?php echo $value['berat']*1000000 ?></td>
					<td><?php echo $value['berat']*1.328 ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>