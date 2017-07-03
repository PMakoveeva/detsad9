<?php

namespace app\controllers;

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

        public function actionEventDetails(){
        date_default_timezone_set('Asia/Yekaterinburg');

        $hour=date('G');

        $hour = (isset($_GET['hour']))?$_GET['hour']:$hour;

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
        return $this->render('event-details', $css);
    }
    public function actionClass(){
        date_default_timezone_set('Asia/Yekaterinburg');

        $hour=date('G');

        $hour = (isset($_GET['hour']))?$_GET['hour']:$hour;

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
        return $this->render('class', $css);
    }

    public function actionClassDetails(){
        date_default_timezone_set('Asia/Yekaterinburg');

        $hour=date('G');

        $hour = (isset($_GET['hour']))?$_GET['hour']:$hour;

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
        return $this->render('class-details', $css);
    }


    public function actionBlog(){
        
        return $this->render('blog');
    }


    public function actionBlogDetails(){
        date_default_timezone_set('Asia/Yekaterinburg');

        $hour=date('G');

        $hour = (isset($_GET['hour']))?$_GET['hour']:$hour;

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
        return $this->render('blog-details', $css);
    }

    public function  actionShortcode(){
        date_default_timezone_set('Asia/Yekaterinburg');

        $hour=date('G');

        $hour = (isset($_GET['hour']))?$_GET['hour']:$hour;

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
        return $this->render('shortcode', $css);
    }

    public function  actionTeacherDetails(){
        date_default_timezone_set('Asia/Yekaterinburg');

        $hour=date('G');

        $hour = (isset($_GET['hour']))?$_GET['hour']:$hour;

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
        return $this->render('teacher-details', $css);
    }

    public function  actionTeacher(){
        date_default_timezone_set('Asia/Yekaterinburg');

        $hour=date('G');

        $hour = (isset($_GET['hour']))?$_GET['hour']:$hour;

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
        return $this->render('teacher', $css);
    }

    public function  actionRoutine(){
        date_default_timezone_set('Asia/Yekaterinburg');

        $hour=date('G');

        $hour = (isset($_GET['hour']))?$_GET['hour']:$hour;

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
        return $this->render('routine', $css);
    }

    public function actionEvent(){
        date_default_timezone_set('Asia/Yekaterinburg');

        $hour=date('G');

        $hour = (isset($_GET['hour']))?$_GET['hour']:$hour;

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
        return $this->render('event', $css);
    }

    public function actionContact(){
        date_default_timezone_set('Asia/Yekaterinburg');

        $hour=date('G');

        $hour = (isset($_GET['hour']))?$_GET['hour']:$hour;

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
        return $this->render('contact', $css);
    }
    public function actionIndex()
    {
        date_default_timezone_set('Asia/Yekaterinburg');

        $hour=date('G');

        $hour = (isset($_GET['hour']))?$_GET['hour']:$hour;

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

    public function actionAboutUs()
    {

        return $this->render('about-us', $this->getCss());

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

    public static function getCssStyle()
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
