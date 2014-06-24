function change_category(item){
    cat_id = $(item).attr("value");
    loadEvents(cat_id,item);
}

function loadEvents(id,obj){
    $.ajax({
        url:"<?php echo Yii::app()->baseUrl?>/site/getEvents",//Browse menu call
        type: "POST",
        dataType: 'json',
        data: {
            isAjax:1,
            feature:3,
            order:'now',
            cate:id,
            limit:8
        },
        success: function(data) {
            //Formatting the browse bar
            var color = ($(obj).css('background-color'));
            $('.subnav').find('.active').removeClass('active');
            $(obj).addClass('active');
            colorChange(color,obj);//Change the color of the browse bar
            //Handle data result
            if (data.status == 1) {
                $('#browse_elements').html('<div class="all_elements" id="temp_all_elements"></div>');
                $('#temp_all_elements').html(data.re);
                $('#seeAll').attr('onclick','seeCate('+id+');')
                if(data.event_num > 1){//OK
                    $('.all_elements').bxSlider({
                        minSlides: 1,
                        maxSlides: 3,
                        moveSlides:1,
                        slideWidth: 430,
                        slideMargin: 18,
                        auto:false,
                        autoHover:true,
                        speed:1000,
                        pager: false,
                        responsive:true
                    });
                }
                else{
                    $('#temp_all_elements').html('<div style= "width:430px;height=122px;margin-left:35%;">'+data.re+'</div>');
                }

            } else {
                $('#browse_elements').html('<div class="no_events" id="temp_all_elements"></div>');
                $('#temp_all_elements').html(data.message);
                return false;
            }
        }
    });
}

function colorChange(color,obj){
    if($(obj).attr('value') == 0 )//OK
    {
        $('browse_bar').css('background-color', 'transparent');
        var imageUrl = '/themes/fashion/img/all_back.png';
        $('browse_bar').css('background-image', 'url(' + imageUrl + ')');
        $('#browse_bar').css('background-image', '');
    }
    else{
        $('#browse_bar').css('background-image', 'none');
        $('#browse_bar').css('background-color', color);
        $('#browse_bar').css('opacity', 1);
    }
}

function seeCate(cid){
    if(cid == 0){
        window.location.href = "event/explore";
    }else{
        window.location.href = 'event/explore?cate='+cid+'';
    }
}