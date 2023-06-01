<?php
    use yii\helpers\Html;
    use yii\grid\Gridview;
    use yii\data\ActiveDataProvider;
    use app\models\Barang;
    use yii\helpers\Url;
    use yii\grid\ActionColumn;


?>

<?= Html::a('Barang Baru', ['create'], ['class' => 'btn btn-success']) ?>

<?=
    Gridview::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'nama_barang',
            'kode_barang',
            'harga',
            'stok',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, $model, $key, $index) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ]
        ]
    ])
?>   