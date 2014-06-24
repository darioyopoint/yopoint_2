<?php

class SiteController extends Controller
{
    public function init(){
        parent::init();
        //Registering CSS
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl.'/css/screen.css',"screen, projection");
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl.'/css/print.css','print');
        Yii::app()->clientScript->registerCssFile('/css/ie.css', 'screen, projection', 'lt IE 8');//IE8 Hack
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl.'/css/main.css');//General CSS
	    Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl.'/css/form.css');
	    Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl.'/js/header-carousel/css/jquery.jscrollpane.css','all');//Header carousel CSS
	    Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl.'/js/header-carousel/css/reset.css');//Header carousel CSS
	    Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl.'/js/header-carousel/css/style.css');//Header carousel CSS
        //Registering jquery
        Yii::app()->clientScript->registerScriptFile('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js');
        //Registering "scrolling with fixed header animation" javascript
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.sticky.js');
        //Registering fixed_background javascript
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.backstretch.min.js');
        //Registering Common JavaScript file
       // Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.common.js');
        //Registering header_carousel javascript
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/header-carousel/js/jquery.contentcarousel.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/header-carousel/js/jquery.easing.1.3.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/header-carousel/js/jquery.mousewheel.js');
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
    //Action sending header code to the ajax caller
    public function actionGetHeader()
    {
        //Social icons bar
        $header_html = '<div class="header-social" id="header-social"><ul><span style="float:left; line-height:16px; vertival-align:middle;">Follow us:</span>'
                                  .'<li><a href="https://www.facebook.com/pages/YoPoint13-%E6%82%A0%E7%82%B9/134777376546022" target="_blank"><img src="'.Yii::app()->baseUrl.'/images/theme/social_icons/facebook.png"  alt="Follow us on Facebook" title="Follow us on Facebook"> </a></li>
                                    <li><a href="https://plus.google.com/118247963514120148054/posts?hl=en-GB&partnerid=gplp0" target="_blank"><img src="'.Yii::app()->baseUrl.'/images/theme/social_icons/google.png"  alt="Follow us on Google+" title="Follow us on Google+"> </a></li>
                                    <li><a href="https://twitter.com/YoPoint13" target="_blank"><img src="'.Yii::app()->baseUrl.'/images/theme/social_icons/twitter.png"  alt="Follow us on Twitter" title="Follow us on Twitter"> </a></li>
                                    <li><a href="#"><img src="'.Yii::app()->baseUrl.'/images/theme/social_icons/weibo.png"  alt="Follow us on Weibo" title="Follow us on Weibo"> </a></li>
                                </ul>
                        </div>';
        //Header Logo
        $header_html.='<div class="header-logo" id="header-logo"><a href='.Yii::app()->baseUrl."><img src=".Yii::app()->baseUrl.'/images/theme/logo_main.png alt="Yopoint Logo" title="YoPoint Home"></a></div>';
        //Header events carousel
        $header_html.='<div id="ca-container" class="ca-container">
                            <div class="ca-wrapper">
                                <div class="ca-item">
						            <div class="ca-item-main">
							            <div class="ca-icon"></div>
							                <h5>Stop factory farming</h5>
							                <h4>
								                <span class="ca-quote"></span>
								                <span>The greatness of a nation and its moral progress can be judged by the way in which its animals are treated.</span>
							                </h4>
								            <a href="#" class="ca-more">more...</a>
						            </div>
						            <div class="ca-content-wrapper">
							            <div class="ca-content">
								            <h6>Animals are not commodities</h6>
								            <a href="#" class="ca-close">close</a>
								            <div class="ca-content-text">
									            <p>Text Here...</p>
								            </div>
							            </div>
						            </div>
					            </div>
                                <div class="ca-item">
						        <div class="ca-item-main">
							            <div class="ca-icon"></div>
							                <h5>Stop factory farming</h5>
							                <h4>
								                <span class="ca-quote"></span>
								                <span>The greatness of a nation and its moral progress can be judged by the way in which its animals are treated.</span>
							                </h4>
								            <a href="#" class="ca-more">more...</a>
						            </div>
						        <div class="ca-content-wrapper">
							            <div class="ca-content">
								            <h6>Animals are not commodities</h6>
								            <a href="#" class="ca-close">close</a>
								            <div class="ca-content-text">
									            <p>Text Here...</p>
								            </div>
							            </div>
						            </div>
					            </div>
					            <div class="ca-item">
						            <div class="ca-item-main">
							            <div class="ca-icon"></div>
							                <h5>Stop factory farming</h5>
							                <h4>
								                <span class="ca-quote"></span>
								                <span>The greatness of a nation and its moral progress can be judged by the way in which its animals are treated.</span>
							                </h4>
								            <a href="#" class="ca-more">more...</a>
						            </div>
						            <div class="ca-content-wrapper">
							            <div class="ca-content">
								            <h6>Animals are not commodities</h6>
								            <a href="#" class="ca-close">close</a>
								            <div class="ca-content-text">
									            <p>Text Here...</p>
								            </div>
							            </div>
						            </div>
					            </div>
                                <div class="ca-item">
						            <div class="ca-item-main">
							            <div class="ca-icon"></div>
							                <h5>Stop factory farming</h5>
							                <h4>
								                <span class="ca-quote"></span>
								                <span>The greatness of a nation and its moral progress can be judged by the way in which its animals are treated.</span>
							                </h4>
								            <a href="#" class="ca-more">more...</a>
						            </div>
						            <div class="ca-content-wrapper">
							            <div class="ca-content">
								            <h6>Animals are not commodities</h6>
								            <a href="#" class="ca-close">close</a>
								            <div class="ca-content-text">
									            <p>Text Here...</p>
								            </div>
							            </div>
						            </div>
					            </div>
					            <div class="ca-item">
						            <div class="ca-item-main">
							            <div class="ca-icon"></div>
							                <h5>Stop factory farming</h5>
							                <h4>
								                <span class="ca-quote"></span>
								                <span>The greatness of a nation and its moral progress can be judged by the way in which its animals are treated.</span>
							                </h4>
								            <a href="#" class="ca-more">more...</a>
						            </div>
						            <div class="ca-content-wrapper">
							            <div class="ca-content">
								            <h6>Animals are not commodities</h6>
								            <a href="#" class="ca-close">close</a>
								            <div class="ca-content-text">
									            <p>Text Here...</p>
								            </div>
							            </div>
						            </div>
					            </div>
                                <div class="ca-item">
						        <div class="ca-item-main">
							            <div class="ca-icon"></div>
							                <h5>Stop factory farming</h5>
							                <h4>
								                <span class="ca-quote"></span>
								                <span>The greatness of a nation and its moral progress can be judged by the way in which its animals are treated.</span>
							                </h4>
								            <a href="#" class="ca-more">more...</a>
						            </div>
						        <div class="ca-content-wrapper">
							            <div class="ca-content">
								            <h6>Animals are not commodities</h6>
								            <a href="#" class="ca-close">close</a>
								            <div class="ca-content-text">
									            <p>Text Here...</p>
								            </div>
							            </div>
						            </div>
					            </div>
					            <div class="ca-item">
						            <div class="ca-item-main">
							            <div class="ca-icon"></div>
							                <h5>Stop factory farming</h5>
							                <h4>
								                <span class="ca-quote"></span>
								                <span>The greatness of a nation and its moral progress can be judged by the way in which its animals are treated.</span>
							                </h4>
								            <a href="#" class="ca-more">more...</a>
						            </div>
						            <div class="ca-content-wrapper">
							            <div class="ca-content">
								            <h6>Animals are not commodities</h6>
								            <a href="#" class="ca-close">close</a>
								            <div class="ca-content-text">
									            <p>Text Here...</p>
								            </div>
							            </div>
						            </div>
					            </div>
                                <div class="ca-item">
						            <div class="ca-item-main">
							            <div class="ca-icon"></div>
							                <h5>Stop factory farming</h5>
							                <h4>
								                <span class="ca-quote"></span>
								                <span>The greatness of a nation and its moral progress can be judged by the way in which its animals are treated.</span>
							                </h4>
								            <a href="#" class="ca-more">more...</a>
						            </div>
						            <div class="ca-content-wrapper">
							            <div class="ca-content">
								            <h6>Animals are not commodities</h6>
								            <a href="#" class="ca-close">close</a>
								            <div class="ca-content-text">
									            <p>Text Here...</p>
								            </div>
							            </div>
						            </div>
					            </div>
                            </div>
                       </div>';
        //Echo header code to ajax caller
        echo $header_html;
    }

    //Action sending content code to the ajax caller
    public function actionGetContent()
    {
        $this->renderPartial("index");
    }

    //Action sending footer code to the ajax caller
    public function actionGetFooter()
    {
        $footer_html = '
                        <a href="'.Yii::app()->baseUrl.'">
                            <img class="footer-logo" src="'.Yii::app()->baseUrl.'/images/theme/footer_logo.png" alt="Yopoint">
                        </a>
                                <div class="footer-left" id="footer-left">
                                    <ul>
                                        <li><p><i class="yp-icon-mail"></i> 37/16A One Canada Square Canary Wharf<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;London E14 5AA</p></li>
                                        <li><p><i class="yp-icon-tel"></i> +44[0]207712 1568</p></li>
                                        <li><p><i class="yp-icon-email"></i><a href="mailto:info@yopoint.com?Subject=Site%20Contact%20Request" target="_top">info@yopoint.com</p></li>
                                        <li><p><i class="yp-icon-click"></i><a href="http://www.yopoint.com">&nbsp;www.yopoint.com</a></p></li>
                                    </ul>
                                </div>
                                <div class="footer-center" id="footer-center">
                                    <ul>
                                        <li><p><i class="yp-icon-facebook"></i><a href="https://www.facebook.com/pages/YoPoint-%E6%82%A0%E7%82%B9/134777376546022">&nbsp;Find us on Facebook&nbsp&nbsp</a></p></li>
                                        <li><p><i class="yp-icon-google"></i><a href="https://plus.google.com/118247963514120148054/posts?hl=en-GB&partnerid=gplp0">&nbsp;Plus Yopoint&nbsp&nbsp</a></p></li>
                                        <li><p><i class="yp-icon-twitter"></i><a href="https://twitter.com/YoPoint13">&nbsp;Find us on Twitter&nbsp&nbsp</a></p></li>
                                        <li><p><i class="yp-icon-weibo"></i><a href="#">&nbsp;Find us on Weibo&nbsp&nbsp</a></p></li>
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
                      <div class="footer-copyright" id="footer-copyright">Copyright &copy; 2012-'.date('Y').'<a href="http://www.yopoint.com" target="_blank">&nbsp;YoPoint LTD.</a> All Rights Reserved</div><br />';
        echo $footer_html;
    }

    //Action that retrieves events from database and sends them to the ajax caller
    public function actionGetEvents(){
        if(!isset($_POST['isAjax'])){
            throw new CHttpException(400,'Invalid request.');
        } else {
            $ticket = false;
            $re ='';
            $feature = $_POST['feature'];
            $order = $_POST['order'];
            $limit = $_POST['limit'];
            $cate  = $_POST['cate'];
            if(isset($_POST['ticket']))
                $ticket = $_POST['ticket'];
            $condition = array('publish = 1');
            if($ticket)
                $condition[] = 'feiyong = '.$ticket.'';
            if($cate != 0)
                $condition[] = 'cid = '.$cate.'';
            if($feature == 1)
                $condition[] = 'feature = "1"';
            elseif($feature == 0)
                $condition[] = 'feature = "0"';
            if($order == 'addtime')
                $orderBy = 'id desc';
            else{
                $between_date = date('Ymd', time());
                /*                $condition []= 'DATE_FORMAT(  `publish_on` ,  "%Y%m%d" ) <='.$between_date.' AND DATE_FORMAT(  `start_date` ,  "%Y%m%d" ) <='.$between_date.'
                                                            AND DATE_FORMAT(  `end_date` ,  "%Y%m%d" ) >='.$between_date.'';*/
                $condition []= 'DATE_FORMAT(  `publish_on` ,  "%Y%m%d" ) <='.$between_date.'
                                            AND DATE_FORMAT(  `end_date` ,  "%Y%m%d" ) >='.$between_date.'';
                $orderBy = 'end_date asc';
            }
            $condition = implode(' and ', $condition);
            $events = Huodong::model()->findAll(array('condition'=>$condition,'order'=>$orderBy,'limit'=>$limit));
            if($events){
                foreach ($events as $event){
                    $poster = $event->getPoster();
                    if($event->isFree()){
                        $tickinfo = 'Free Ticket!';
                    }else{
                        if($event->priceFrom())
                            $tickinfo = 'Tickets from £'.$event->priceFrom();
                        else
                            $tickinfo = 'Free Listing';
                    }
                    //Generating article htmlcode
                    $re .= '<article>
                                         <a href="'.Yii::app()->baseUrl.'/event/'.$event->euniqid.'" style="padding:10px;">
                                         ';
                    if($event->feature_tag  && $event->feature_tag == "Free")
                        $re .= '<img src="'.Yii::app()->theme->baseUrl.'/img/free_marker.png" class="free_marker">';
                    $re .=  '<img src="'.Yii::app()->iwi->load($poster->path.'/'.$poster->name)->resize(102,102,Image::HEIGHT)->crop(102 , 102)->cache().'" title="'.$event->getTitle().'">
                                         <h1 class="article_title">'.$event->getTitle().'</h1>
                                         <h2 class="article_date"><span title="Start Date">'.date("M j S Y",  strtotime($event->start_date)).'</span>-<span title="End Date">'.date("M j S Y",  strtotime($event->end_date)).'</span></h2>
                                         <h3 class="article_location"><span title="article_city">'.$event->city.'</span><span class="article_area"></span></h3>
                                         <h4 class="article_ticket_info">'.$tickinfo.'</h4>
                                         </a>
                                         </article>';
                }
                die(CJSON::encode(array('status'=>1,'re'=>$re,'event_num'=>count($events))));
            }else{
                $html_message='<span style="color=#fff;">We have no events for this category at this time</span><br />';
                $html_message.='<span style="color=#fff;"><strong>Check back later!</strong></span>';
                die(CJSON::encode(array('status'=>2,'message'=>$html_message)));
            }
        }
    }

    /*###################################################################################*/
}