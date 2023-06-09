<?php
/** @var yii\web\View $this */
use yii\grid\GridView;
$this->title = "Mahasiswa";

// add mhs success
$msg = Yii::$app->session->getFlash('sucAddMhs');
if( $msg !== NULL )
    echo '<div class="alert alert-success d-flex align-items-center" role="alert"><div>' . $msg . ' </div></div>';

// update mhs success
$upd = Yii::$app->session->getFlash('sucUpdMhs');
if( $upd !== NULL )
    echo '<div class="alert alert-success d-flex align-items-center" role="alert"><div>' . $upd . ' </div></div>';

// delete mhs success
$del = Yii::$app->session->getFlash('sucDelMhs');
if( $del !== NULL )
    echo '<div class="alert alert-success d-flex align-items-center" role="alert"><div>' . $del . ' </div></div>';
?>
<a href="/mahasiswa/tambah" class="btn btn-primary">Mahasiswa Baru</a>
<?=
GridView::widget([
    'dataProvider' => $dataProvider,
    'tableOptions' => [
        'class' => 'table table-striped table-bordered'
    ],
    'options' => [
        'class' => 'table-responsive',
    ],
    'columns' => [
        // Number of row
        [
            'class' => 'yii\grid\SerialColumn'
        ],
        'id_101',
        'no_induk_mahasiswa_101',
        'nama_mahasiswa_101',
        'kelas_101',
        'status_101',
        // Menampilkan kolom edit
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete}',
        ],
    ],
])
?>