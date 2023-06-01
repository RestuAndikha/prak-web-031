<?php
    use yii\widgets\DetailView;
    use yii\helpers\Html;
?>

<?=
DetailView::widget([
    'model' => $mahasiswa,
    'attributes' =>[
        'nim',
        'nama',
        'kelas',
        'status',
        ]
    ])
?>