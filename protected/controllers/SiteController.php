<?php

class SiteController extends Controller
{
    public function init(){
        parent::init();
        Yii::app()->clientScript->registerScriptFile('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js');
        //Registering "scrolling with fixed header animation" javascript
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.sticky.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.backstretch.min.js');

    }
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'

		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

    /*###################################################################################*/
    public function actionGetHeader()
    {
        $header_html = '<div class="header-social" id="header-social"><ul><span style="float:left; line-height:16px; vertival-align:middle;">Follow us:</span>'
                                  .'<li><a href="https://www.facebook.com/pages/YoPoint13-%E6%82%A0%E7%82%B9/134777376546022" target="_blank"><img src="'.Yii::app()->baseUrl.'/images/theme/social_icons/facebook.png"  alt="Follow us on Facebook" title="Follow us on Facebook"> </a></li>
                                    <li><a href="https://plus.google.com/118247963514120148054/posts?hl=en-GB&partnerid=gplp0" target="_blank"><img src="'.Yii::app()->baseUrl.'/images/theme/social_icons/google.png"  alt="Follow us on Google+" title="Follow us on Google+"> </a></li>
                                    <li><a href="https://twitter.com/YoPoint13" target="_blank"><img src="'.Yii::app()->baseUrl.'/images/theme/social_icons/twitter.png"  alt="Follow us on Twitter" title="Follow us on Twitter"> </a></li>
                                    <li><a href="#"><img src="'.Yii::app()->baseUrl.'/images/theme/social_icons/weibo.png"  alt="Follow us on Weibo" title="Follow us on Weibo"> </a></li>
                                </ul>
                        </div>';
        $header_html.='<div class="header-logo" id="header-logo"><a href='.Yii::app()->baseUrl."><img src=".Yii::app()->baseUrl.'/images/theme/logo_main.png alt="Yopoint Logo" title="YoPoint Home"></a></div>';
        echo $header_html;
    }

    public function actionGetContent()
    {
        //echo Yii::app()->getModule('ypman');
        $this->renderPartial("index");
        //echo CHtml::link('YPMan',array('/index/ypman'), array('target'=>'_blank'));
    }

    public function actionGetFooter()
    {
        $footer_html = '
                        <a href="'.Yii::app()->baseUrl.'">
                            <img class="footer-logo" src="'.Yii::app()->baseUrl.'/images/theme/footer_logo.png" alt="Yopoint">
                        </a>
                                <div class="footer-left" id="footer-left">
                                    <ul>
                                        <li><p><i class="yp-icon-mail"></i> 37/16A One Canada Square Canary Wharf, London E14 5AA</p></li>
                                        <li><p><i class="yp-icon-tel"></i> +44[0]207712 1568</p></li>
                                        <li><p><i class="yp-icon-email"></i> info@yopoint.com</p></li>
                                        <li><p><i class="yp-icon-click"></i><a href="http://www.yopoint.com">www.yopoint.com</a></p></li>
                                    </ul>
                                </div>
                                <div class="footer-center" id="footer-center">
                                    <ul>
                                        <li><p><a href="https://www.facebook.com/pages/YoPoint-%E6%82%A0%E7%82%B9/134777376546022"><i class="yp-icon-facebook"></i> Find us on Facebook&nbsp&nbsp</a></p></li>
                                        <li><p><a href="https://plus.google.com/118247963514120148054/posts?hl=en-GB&partnerid=gplp0"><i class="yp-icon-google"></i> Plus Yopoint&nbsp&nbsp</a></p></li>
                                        <li><p><a href="https://twitter.com/YoPoint13"><i class="yp-icon-twitter"></i> Find us on Twitter&nbsp&nbsp</a></p></li>
                                        <li><p><a href=""><i class="yp-icon-weibo"></i> Find us on Weibo&nbsp&nbsp</a></p></li>
                                    </ul>
                                </div>
                                <div class="footer-right" id="footer-right">
                                    <ul>
                                        <p>'.CHtml::link('Advertise with Yopint&nbsp&nbsp',array('site/advertise'), array('target'=>'_blank')).'</p>
                                        <p>'.CHtml::link('Ticket Sales and Partnerships&nbsp&nbsp',array('site/terms'), array('target'=>'_blank')).'</p>
                                        <p>'.CHtml::link('Careers at Yopoint&nbsp&nbsp',array('site/terms'), array('target'=>'_blank')).'</p>
                                        <p>'.CHtml::link('Terms and conditions&nbsp&nbsp',array('site/terms'), array('target'=>'_blank')).'</p>
                                        <p>'.CHtml::link('Privacy policy&nbsp&nbsp',array('site/terms'), array('target'=>'_blank')).'</p>
                                        <p>'.CHtml::link('Cookie notice&nbsp&nbsp',array('site/terms'), array('target'=>'_blank')).'</p>
                                    </ul>
                                </div>
                      <div class="footer-copyright" id="footer-copyright">Copyright &copy; '.date('Y').' YoPoint LTD. All Rights Reserved.</div><br />';
        echo $footer_html;
    }
    /*###################################################################################*/
}