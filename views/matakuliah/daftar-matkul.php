<<?php
    use yii\grid\Gridview;
?>

<?=
    Gridview::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'kode_mk',
            'nama_mk',
            'jurusan'
        ]
    ])
?>   