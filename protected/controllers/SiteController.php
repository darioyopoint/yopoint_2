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
        echo '<div id="logo">'.CHtml::encode(Yii::app()->name).'</div>';
    }

    public function actionGetContent()
    {
        $this->renderPartial("index",'',false);
    }

    public function actionGetFooter()
    {
        $footer_html = '
                      <h4>YOPOINT <span>LTD</span></h4>
                            <div class="row">
                                <div class="">
                                    <ul class="foot_info">
                                        <li><p><i class="yp-icon-mail"></i> 37/16A One Canada Square Canary Wharf, London E14 5AA</p></li>
                                        <li><p><i class="yp-icon-tel"></i> +44[0]207712 1568</p></li>
                                        <li><p><i class="yp-icon-email"></i> info@yopoint.com</p></li>
                                        <li><p><i class="yp-icon-click"></i><a href="http://www.yopoint.com">www.yopoint.com</a></p></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="foot_socal" style="padding-left:60px;">
                                        <li><a href="https://www.facebook.com/pages/YoPoint-%E6%82%A0%E7%82%B9/134777376546022"><i class="yp-icon-facebook"></i> Find us on Facebook&nbsp&nbsp</a></li>
                                        <li><a href="https://plus.google.com/118247963514120148054/posts?hl=en-GB&partnerid=gplp0"><i class="yp-icon-google"></i> Plus Yopoint&nbsp&nbsp</a></li>
                                        <li><a href="https://twitter.com/YoPoint13"><i class="yp-icon-twitter"></i> Find us on Twitter&nbsp&nbsp</a></li>
                                        <li><a href=""><i class="yp-icon-weibo"></i> Find us on Weibo&nbsp&nbsp</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="foot_link" style="text-align: center;">'."<?php
                                        echo CHtml::link('Advertise with Yopint&nbsp&nbsp',array('site/advertise'), array('target'=>'_blank'));<br />
                                        echo CHtml::link('Ticket Sales and Partnerships&nbsp&nbsp',array('site/terms'), array('target'=>'_blank')); ?><br />
                                        echo CHtml::link('Careers at Yopoint&nbsp&nbsp',array('site/terms'), array('target'=>'_blank')); ?><br />
                                        echo CHtml::link('Terms and conditions&nbsp&nbsp',array('site/terms'), array('target'=>'_blank')); ?><br />
                                        echo CHtml::link('Privacy policy&nbsp&nbsp',array('site/terms'), array('target'=>'_blank')); ?><br />
                                        echo CHtml::link('Cookie notice&nbsp&nbsp',array('site/terms'), array('target'=>'_blank')); ?><br />
                                    </ul>
                                </div>
                      </div>Copyright &copy; echo date('Y'); ?> YoPoint LTD.<br/>
                               All Rights Reserved.<br/> ?>";
        echo $footer_html;
    }
    /*###################################################################################*/
}