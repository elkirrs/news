<?php use yii\widgets\ActiveForm;?>


<?php if(!Yii::$app->user->isGuest):?>
    <div class="leave-comment"><!--leave comment-->
        <h6>Оставить комментрарий</h6>
        <?php if(Yii::$app->session->getFlash('comment')):?>
            <div class="alert alert-success" role="alert">
                <?= Yii::$app->session->getFlash('comment'); ?>
            </div>
        <?php endif;?>
        <?php $form = ActiveForm::begin([
            'action'=>['site/single', 'id'=>$news->id],
            'options'=>['class'=>'form-horizontal contact-form', 'role'=>'form']])?>
        <div class="form-group">
            <div class="col-md-12">
                <?= $form->field($commentsForm, 'comments')
                    ->textarea(['class'=>'form-control','placeholder'=>'Введите сообщение'])
                    ->label(false);?>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-dark">Отправить</button>
        <?php ActiveForm::end();?>
    </div><!--end leave comment-->
<?php endif;?>