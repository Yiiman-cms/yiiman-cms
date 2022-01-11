<?php
	
	use yii\helpers\Html;
	use yii\grid\GridView;
	
	/* @var $this yii\web\View */
	/* @var $searchModel common\models\SearchProperties */
	/* @var $dataProvider yii\data\ActiveDataProvider */
	/**
	 * @var $update    boolean
	 * @var $indexName string
	 * @var $modelNew
	 * @var $modelErrors boolean
	 * @var $modelNewErrors boolean
	 *
	 */
	$js=<<<JS
	$('.close').click(function(e) {
		e.preventDefault();
		$('.must-delete').remove();
		$('.must-extend').removeClass('col-md-6');
		$('.must-extend').addClass('col-md-12');
	});
JS;
	$this->registerJs( $js,$this::POS_END);
	$this->title                   = $indexName;
	$this->params['breadcrumbs'][] = $this->title;
	
	$columns[] = [
		'attribute' => 'status' ,
		'label'     => 'Status' ,
		'value'     => function ( $model ) {
			/**
			 * @var $model \common\models\Neighbourhoods
			 */
			switch ( $model->status ) {
				case 10:
					return 'Active';
					break;
				case 0:
					return 'Preview';
					break;
			}
		} ,
	];
	$columns[] =
		[
			'class'   => 'yii\grid\ActionColumn' ,
			'buttons' =>
				[
					'update' => function ( $url , $model , $key ) {
						return '<a href="../' . Yii::$app->controller->id . '/index/' . $model->id . '" title="Update" aria-label="Update" data-pjax="0"><span class="glyphicon glyphicon-pencil"></span></a>';
					}
				]
		];
?>
<style>
	.table {
		width: 100%;
		max-width: 100%;
		margin-bottom: 20px;
		overflow: auto !important;
		
		display: block;
	}
</style>

<div class="properties-index">
	
	
	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	
	<div class="col-md-12 ml-auto mr-auto">
		<div class="page-categories">
			<h3 class="title text-center"><?= Html::encode( $this->title ) ?></h3>
			<br>
			<ul class="nav nav-pills flex nav-pills-warning nav-pills-icons justify-content-center" role="tablist">
				<li class="nav-item">
					<a class="nav-link <?= $update ||$modelErrors ? '' : 'active show' ?>" data-toggle="tab" href="#index"
					   role="tablist">
						<i class="material-icons">info</i> Info List
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?= !$update && $modelNewErrors ? 'active show' : '' ?>" data-toggle="tab" href="#create" role="tablist">
						<i class="material-icons">add</i> Add New details
					</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#descriptions" role="tablist">
						<i class="material-icons">help_outline</i> Descriptions
					</a>
				</li>
			</ul>
			<div class="tab-content tab-space tab-subcategories">
				<div class="tab-pane active show" id="index">
					<div class="card">
						<div class="col-md-<?= $update ? '6' : '12' ?> must-extend">
							
							<?= GridView::widget(
								[
									'dataProvider' => $dataProvider ,
									'filterModel'  => $searchModel ,
									'columns'      => $columns ,
								]
							); ?>
						</div>
						<?php
							if ( ! empty( $update ) ) {
								echo '<div class="col-md-6 center-block must-delete">';
								?>
								<div class="row ">
									<div class="col-md-12">
										<a href="#" class="btn btn-danger justify-content-center close center-block">Close This Window</a>
									</div>
								</div>
								<?php
								echo $this->render( '@backend/views/'.Yii::$app->controller->id.'/update.php' , [ 'model' => $model ] );
								echo '</div>';
							}
						?>
					</div>
				</div>
				<div class="tab-pane" id="create">
					<div class="card">
						<div class="row">
							<div class="col-md-12">
								<?= $this->render( '@backend/views/'.Yii::$app->controller->id.'/create.php' , [ 'model' => $modelNew ] ) ?>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="descriptions">
					<div class="card">
						<div class="row">
							<div class="col-md-12">
								<?= $this->render( '@backend/views/'.Yii::$app->controller->id.'/descriptions.php' ) ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
