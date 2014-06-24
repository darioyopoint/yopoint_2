<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<!--[if lt IE 7]>   <html lang="en" class="ie ie6" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#"><![endif]-->
<!--[if IE 7]>      <html lang="en" class="ie ie7" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#"><![endif]-->
<!--[if IE 8]>      <html lang="en" class="ie ie8" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#"><![endif]-->
<!--[if IE 9]>      <html lang="en" class="ie ie9" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#"><![endif]-->
<!--[if (gt IE 9) | !(IE)]>  <html lang="<?php echo Yii::app()->language; ?>" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#"><![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="YoPoint: Tickets,Events.." />
    <meta name="keywords" content="yopoint,ticket,events,theatre,comedy,sports,football,family,outdoors,exposition,museum,art,london,uk" />
    <meta name="author" content="YoPoint LTD" />
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/theme/favicon.ico" type="image/x-icon" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <script type="text/javascript">
        $(document).ready(function(){
            //Header Fixed Bar
            $('#header').sticky({ topSpacing: 0 });
            //Background Fixed Effect
            $.backstretch("<?php echo  Yii::app()->baseUrl;?>/images/theme/bg.png");
            //Header Content
            $.ajax({
                    type: 'POST',
                    data: '',
                    url: '<?php echo CController::createUrl('site/GetHeader'); ?>',
                    success: function(data){
                            $('#header').html(data)
                            //Loading header carousel
                            $('#ca-container').contentcarousel({
                                // speed for the sliding animation
                                sliderSpeed     : 1000,
                                // easing for the sliding animation
                                sliderEasing    : 'easeOutExpo',
                                // number of items to scroll at a time
                                scroll          : 1
                            });
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
    <div class="main-content" id="main-content"></div>
    <!-- END MAIN-CONTENT -->

    <!-- START FOOTER -->
	<div class="footer" id="footer"></div>
    <!-- END FOOTER -->

</div>
<!-- END PAGE-->

</body>
</html>
