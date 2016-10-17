<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'Pardavimai';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pardavimu-puslapis">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('pardavimuFormosPatvirtinimas')): ?>

        <div class="alert alert-success">
            Forma patvirtinta!
        </div>

        <p>
            Kolkas patvirtinimo ið duomenu bazës dël duomenu iðssauogijimo nëra
        </p>

    <?php else: ?>
	
		<p>
            Suveskite pardavimo duomenis
        </p>
		<div class="row">
            <div class="col-lg-10">

                <?php $form = ActiveForm::begin(['id' => 'pardavimu-forma']); ?>

                    <?= $form->field($model, 'pardavimoKodas')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'kategorija')->dropDownList(
						$kategorijuListas, 
						[
							'prompt' => 'Pasirinkite kategorija',
							'onchange' => '$.post("'.Url::toRoute('gautiprekes?id=').'" +$(this).val(),
								function(data) {
										$( "select#pardavimuforma-prekespavadinimas").html(data); 
								});
						']
					); 
					?>

                    <?= $form->field($model, 'prekesPavadinimas')->dropDownList( ['prompt'=>'Pasirinkite preke']) ?>
					
					<?= $form->field($model, 'pirkejoVardas') ?>
					
					<?= $form->field($model, 'pirkejoPavarde') ?>
					
					<?= $form->field($model, 'pirkejoTelefonoNumeris') ?>
					
					<?= $form->field($model, 'pirkejoElPastas') ?>
					
					<?= $form->field($model, 'kaina') ?>
					
					<?= $form->field($model, 'apmokejimoPozymis')->radioList($apmokejimuListas) ?>

                    <?= $form->field($model, 'komentaras')->textArea(['rows' => 3]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Patvirtinti', ['class' => 'btn btn-primary', 'name' => 'pardavimu-mygtukas']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
	<?php endif; ?>
</div>	