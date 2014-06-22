<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <script type="text/javascript">
        $(document).ready(function(){

            //Header Fixed Bar
            $('#header').sticky({ topSpacing: 0 });
            //Backgorund Fixed Effect
            $.backstretch("<?php echo  Yii::app()->baseUrl;?>/images/bg.png");
            //Header Content
            $.ajax({
                    type: 'POST',
                    data: '',
                    url: '<?php echo CController::createUrl('site/GetHeader'); ?>',
                    success: function(data){
                            $('#header').html(data)
                    }
            })
            //Page Content
            $.ajax({
                    type: 'POST',
                    data: '',
                    url: '<?php echo CController::createUrl('site/GetContent'); ?>',
                    success: function(data){
                            $('#main-content').html(data)
                    }
            })
            //Footer Content
            $.ajax({
                    type: 'POST',
                    data: '',
                    url: '<?php echo CController::createUrl('site/GetFooter'); ?>',
                    success: function(data){
                            $('#footer').html(data)
                    }
                })
            })
    </script>
</head>
<!-- START PAGE -->
<body>

<div class="container" id="page">

    <!-- START HEADER -->
    <div class="header" id="header"></div>
    <!-- END HEADER -->

    <!-- START MAIN-CONTENT -->
    <div class="main-content" id="main-content" style="margin-top:100px;"></div>
    <div class="clear"></div>
    <!-- END MAIN-CONTENT -->

    <!-- START FOOTER -->
	<div class="footer" id="footer"></div>
    <!-- END FOOTER -->

</div>
<!-- END PAGE-->

</body>
</html>
