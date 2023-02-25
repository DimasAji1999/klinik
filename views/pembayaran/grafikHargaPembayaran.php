<?php
use dosamigos\highcharts\HighCharts;
use app\models\Pembayaran;

$this->title = 'Grafik Harga Pembayaran';

$ar_harga = Pembayaran::grafikHargaPembayaran();
// print_r($ar_harga);exit;
foreach ($ar_harga as $values){
    $a[0] = ($values['id_layanan']);
    $c[] = ($values['id_layanan']);
    $b[] = [
        'name'=>$values['id_layanan'],
        'data'=>[(int)$values['harga']],
    ];
}
?>

<?=
HighCharts::widget([
    'clientOptions' => [
        'chart' => [
                'type' => 'column'
        ],
        'title' => [
             'text' => 'Grafik Harga Pembayaran'
             ],
        'xAxis' => [
            'categories' => [
                'Id Layanan',
            ]
        ],
        'yAxis' => [
            'title' => [
                'text' => 'Harga Pembarayan'
            ]
        ],
        'series' => $b
    ]
]);
// ... 