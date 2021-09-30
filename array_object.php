<?php

// mendefinisikan array object barang
$barang = (object) [
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

$barang->kategori = (object) $barang->kategori;
$barang->kategori->alkes = (object) $barang->kategori->alkes;
$barang->kategori->almed = (object) $barang->kategori->almed;
echo "hasilnya adalah :";
echo "<br/>";
echo "<pre>";
print_r ($barang);
echo "<pre>";





?>