<?php use yii\helpers\Html;
use yii\widgets\ActiveForm;?>


<?php if(!Yii::$app->user->isGuest):?>
    <div class="leave-comment"><!--leave comment-->

        <?php if(Yii::$app->session->getFlash('comment')):?>
            <div class="alert alert-success" role="alert">
                <?= Yii::$app->session->getFlash('comment'); ?>
            </div>
        <?php endif;?>
        <?php $form = ActiveForm::begin([
            'action'=>['site/comment', 'id'=>$news->id],
            'options'=>['class'=>'form-horizontal contact-form', 'role'=>'form']])?>
        <div class="form-group">
            <div class="col-md-12">
                <?= $form->field($commentForm, 'comment')
                    ->textarea(['class'=>'form-control','placeholder'=>'Введите сообщение'])
                    ->label('Оставить комментрарий');?>
            </div>
        </div>
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-outline-dark']) ?>
        <?php ActiveForm::end();?>
    </div><!--end leave comment-->
<?php endif;?>