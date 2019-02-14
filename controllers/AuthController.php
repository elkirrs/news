<?php
/**
 * Created by PhpStorm.
 * User: elkirrs
 * Date: 11.02.2019
 * Time: 16:23
 */

namespace app\controllers;


use app\models\LoginForm;
use app\models\SingupForm;
use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class AuthController extends Controller
{

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('/auth/login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


    /**
     * Регистрация пользователя
     */

    public function actionSingup()
    {
        $model = new SingupForm();


        if (Yii::$app->request->isPost ){
            $model->load(Yii::$app->request->post());
            if ($model->singup()){
                return $this->redirect('login');
            }
        }

        return $this->render('/auth/singup', ['model' => $model]);
    }


}