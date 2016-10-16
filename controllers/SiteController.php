<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\PardavimuForma;
use app\models\Preke;

class SiteController extends Controller
{
    /**
     * @inheritdoc
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
     * @inheritdoc
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
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
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
	
	public function actionPardavimai()
    {
        $model = new PardavimuForma();
		if ($model->load(Yii::$app->request->post()) && $model->issaugotiPardavima()) {
            Yii::$app->session->setFlash('pardavimuFormosPatvirtinimas');
            return $this->refresh();
		}
		$kategorijos = Yii::$app->db->createCommand('SELECT * FROM kategorijos')
            ->queryAll();
		$kategorijuListas = ArrayHelper::map($kategorijos,'id','pavadinimas');
		$apmokejimoPozymiai = [
		['id' => '0', 'pozymis' => 'Neapmoketa'],
		['id' => '1', 'pozymis' => 'Apmoketa'],
		];
		$apmokejimuListas = ArrayHelper::map($apmokejimoPozymiai,'id','pozymis');
		return $this->render('pardavimai', [
            'model' => $model, 'kategorijuListas'=>$kategorijuListas,
			'apmokejimuListas'=>$apmokejimuListas
		]);
    }
	
	public function actionGautiprekes($id){
		phpinfo();
		$skaiciuotiPrekes = Preke::find()
                ->where(['kategorija_id' => $id])
                ->count();
 
        $prekes = Preke::find()
                ->where(['kategorija_id' => $id])
                ->orderBy('pavadinimas DESC')
                ->all();
 
        if($skaiciuotiPrekes>0){
            foreach($prekes as $preke){
                echo "<option value='".$preke->id."'>".$preke->pavadinimas."</option>";
            }
        }
        else{
            echo "<option>-</option>";
        }
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
}
