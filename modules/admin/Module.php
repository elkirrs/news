<?php

namespace app\modules\admin;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use yii\web\User;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */

    public $layout = '/admin';
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * @return array
     *
     * Закрытие админики.
     */



    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'denyCallback' => function ($rule, $action) {
                    //return Yii::$app->response->redirect(['/admin/login/index']);
                    throw new \yii\web\NotFoundHttpException();
                },
                'rules' => [
                    [
                        'allow' => true,
                        'matchCallback' => function ($rule, $action) {
                            if (!empty(Yii::$app->user->identity->isAdmin)){
                               return true;
                            }else{
                                return Yii::$app->response->redirect(['/']);
                            };
                        }
                    ]
                ]
            ]
        ];
    }
}
