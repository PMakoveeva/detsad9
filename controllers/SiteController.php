<?php

namespace app\controllers;

use app\models\Comments;
use \Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;


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

    public function actionIndex()
    {
        date_default_timezone_set('Asia/Yekaterinburg');

        $hour=date('G');

        $hour = (isset($_GET['hour']))?$_GET['hour']:$hour;
        $css=[];
        if($hour>=23 || $hour<5 && $hour>=0){
            $css['bg_slider']='bg_slider_night';
            $css['parallax']='parallax_night';
            $css['bg_footer']='bg_footer_night';
        }
        if($hour>5 && $hour<13){
            $css['bg_slider']='bg_slider_morning';
            $css['parallax']='parallax_morning';
            $css['bg_footer']='bg_footer_morning';

        }
        if($hour>=13 && $hour<17){
            $css['bg_slider']='bg_slider_day';
            $css['parallax']='parallax_day';
            $css['bg_footer']='bg_footer_day';
        }
        if($hour>=17 && $hour<23){
            $css['bg_slider']='bg_slider_evening';
            $css['parallax']='parallax_evening';
            $css['bg_footer']='bg_footer_evening';

        }

        return $this->render('index', $css);
    }

    public function actionAboutUs(){
        return $this->render('about-us', $this->getCss());
    }

    public function actionEventDetails(){
        return $this->render('event-details', $this->getCss());
    }

    public function actionClass(){
        return $this->render('class', $this->getCss());
    }

    public function actionClassDetails(){
        return $this->render('class-details',$this->getCss());
    }


    public function actionBlog(){
        return $this->render('blog', $this->getCss());
    }

    public function actionBlogDetails(){
        return $this->render('blog-details', $this->getCss());
    }

    public function  actionShortcode(){
        return $this->render('shortcode', $this->getCss());
    }

    public function  actionTeacherDetails(){
        return $this->render('teacher-details', $this->getCss());
    }

    public function  actionTeacher(){
        return $this->render('teacher', $this->getCss());
    }

    public function  actionRoutine(){
        return $this->render('routine', $this->getCss());
    }

    public function actionEvent(){
        return $this->render('event', $this->getCss());
    }

    public function actionContact(){
        return $this->render('contact', $this->getCss());
    }


    public function getCss()
    {
        $hour=date('G');

        $hour = (isset($_GET['hour']))?$_GET['hour']:$hour;

        $css=[];
        if($hour>=23 || $hour<5 && $hour>=0){
            $css['colour_line_top']='night_line_top';
            $css['bg_footer']='bg_footer_night';
            $css['header']='header_clouds_night';
        }
        if($hour>5 && $hour<13){
            $css['colour_line_top']='morning_line_top';
            $css['bg_footer']='bg_footer_morning';
            $css['header']='header_clouds_mo';
        }
        if($hour>=13 && $hour<17){
            $css['colour_line_top']='day_line_top';
            $css['bg_footer']='bg_footer_day';
            $css['header']='header_clouds_day';
        }
        if($hour>=17 && $hour<23){
            $css['colour_line_top']='evening_line_top';
            $css['bg_footer']='bg_footer_evening';
            $css['header']='header_clouds_evening';
        }
        return $css;
    }

    public static function getCssStyle($style='')
    {
        $hour=date('G');

        $hour = (isset($_GET['hour']))?$_GET['hour']:$hour;

        $css=[];
        if($hour>=23 || $hour<5 && $hour>=0){
            $css['colour_line_top']='night_line_top';
            $css['bg_footer']='bg_footer_night';
            $css['header']='header_clouds_night';
        }
        if($hour>5 && $hour<13){
            $css['colour_line_top']='morning_line_top';
            $css['bg_footer']='bg_footer_morning';
            $css['header']='header_clouds_mo';
        }
        if($hour>=13 && $hour<17){
            $css['colour_line_top']='day_line_top';
            $css['bg_footer']='bg_footer_day';
            $css['header']='header_clouds_day';
        }
        if($hour>=17 && $hour<23){
            $css['colour_line_top']='evening_line_top';
            $css['bg_footer']='bg_footer_evening';
            $css['header']='header_clouds_evening';
        }
        if (!empty($style)) {
            $ret = (isset($css[$style]) ? $css[$style] : '');
            return $ret;
        } else {
            return $css;
        }
    }

    public function actionComments()
    {
        $comments = Comments::find()->all();
        return $this->render( 'comments',
            ['comments' => $comments]
        );

    }
    /**
     * Login action.
     *
     * @return Response|string
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
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
//    public function actionContact()
//    {
//        $model = new ContactForm();
//        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
//            Yii::$app->session->setFlash('contactFormSubmitted');
//
//            return $this->refresh();
//        }
//        return $this->render('contact', [
//            'model' => $model,
//        ]);
//    }

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
