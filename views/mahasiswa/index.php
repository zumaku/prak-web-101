<?php
/** @var yii\web\View $this */
use yii\grid\GridView;

$add_success = Yii::$app->session->getFlash('success_add');
if(isset($add_success)){
	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
		' . $add_success . '
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>';
}

$up_success = Yii::$app->session->getFlash('success_update');
if(isset($up_success)){
	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
		' . $up_success . '
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>';
}

$del_success = Yii::$app->session->getFlash('delete_update');
if(isset($del_success)){
	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
		' . $del_success . '
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>';
}


?>
<!-- preloader -->
<div id="preloader">
	<div class="book">
		<div class="inner">
			<div class="left"></div>
			<div class="middle"></div>
			<div class="right"></div>
		</div>
		<ul>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</div>
<a href="/mahasiswa/tambah" class="btn btn-primary"style="width: fit-content;">Mahasiswa Baru</a>
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