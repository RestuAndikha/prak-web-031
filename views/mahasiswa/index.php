<?php
    use yii\helpers\Html;
    use yii\grid\Gridview;
    use yii\data\ActiveDataProvider;
    use app\models\Mahasiswa;
    use yii\helpers\Url;
    use yii\grid\ActionColumn;


?>

<p><a class="btn btn-lg btn-success" style="background-color:blue" href="../mahasiswa/tambah/">Mahasiswa Baru</a></p>

<?=
    Gridview::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'nim',
            'nama',
            'kelas',
            'status',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, $model, $key, $index) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ]
        ]
    ])
?>   