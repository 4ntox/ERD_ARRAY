<?php

// mendefinisikan array barang
$barang = [
    'nama' => 'Bets Medical',
    'satuan' => 'pcs',
    'kategori' => [
        'alkes' => [
            'jenis1' => 'berkali pakai',
            'jenis2' => 'sekali pakai',
        ],
        'almed' => [
            'jenis1' => 'berkali pakai',
            'jenis2' => 'sekali pakai',
        ],
            
    ]

];


echo "hasilnya adalah :";
echo "<br/>";
echo "<br/>";
echo 'nama barang =' .$barang ['nama'] ;
echo "<br/>";
echo 'satuan =' .$barang ['satuan'];
echo "<br/>";
// echo 'kategori =' .$barang ['kategori'];

echo $barang;


echo "<br/>";
echo "<br/>";
echo "<pre>";
print_r ($barang);
echo "<pre>";





?>