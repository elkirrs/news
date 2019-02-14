<?php

namespace app\controllers;

use app\models\Category;
use app\models\categorySearch;
use app\models\CommentForm;
use app\models\News;
use app\models\SingupForm;
use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $data = News::getAll(11);
        $categories = Category::getAll();


        return $this->render('index', [
            'news' => $data['news'],
            'pages' => $data['pages'],
            'categories' => $categories,
        ]);

    }
    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }


    public function actionView($id)
    {
        $news = News::findOne($id);
        $categories = Category::getAll();
        $commentsnews = $news->commentsnews;
        $commentForm = new CommentForm();


        return $this->render('single',[
            'news' => $news,
            'categories' => $categories,
            'commentsnews' => $commentsnews,
            'commentForm' => $commentForm,
        ]);
    }


    public function actionCategory($id)
    {
        $data = Category::getNewsByCategory($id);
        $categories = Category::getAll();


        return $this->render('category',[
            'news' => $data['news'],
            'pages' => $data['pages'],
            'categories' => $categories,
        ]);
    }

    public function actionComment($id)
    {
        $model = new CommentForm();


        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->saveComment($id))
            {
                return $this->redirect(['site/view', 'id' => $id]);
            };
        }

    }



}
