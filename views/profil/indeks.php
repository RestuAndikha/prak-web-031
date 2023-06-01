<?php
    use yii\grid\Gridview;
    use yii\data\ActiveDataProvider;
    use app\models\Profil60200121031;
    use yii\grid\ActionColumn;
    use yii\helpers\Url;
?>

<?=
    Gridview::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'id_mahasiswa',
            'foto_profil',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, $model, $key, $index) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ]
        ]
    ])
?>   