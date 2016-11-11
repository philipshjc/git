<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<?php
require_once "weixin.php";
$jssdk = new JSSDK("wxa5e984b74d55702f", "8f7b416a41248838e42b43fcf6c92597");
$signPackage = $jssdk->GetSignPackage();
?>
<script>
wx.config({
    debug: true, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
    appId: '<?php echo $signPackage["appId"];?>',// 必填，公众号的唯一标识
    timestamp:  <?php echo $signPackage["timestamp"];?>,// 必填，生成签名的时间戳
    nonceStr: '<?php echo $signPackage["nonceStr"];?>', // 必填，生成签名的随机串
    signature: '<?php echo $signPackage["signature"];?>',// 必填，签名，见附录1
    jsApiList: [
            'checkJsApi',
            'onMenuShareTimeline',
            'onMenuShareAppMessage',
            'onMenuShareQQ',
            'onMenuShareWeibo',
            'onMenuShareQZone'
    ] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
});
wx.ready(function(){
        wx.checkJsApi({
            jsApiList: [
            'onMenuShareTimeline',
            'onMenuShareAppMessage',
            'onMenuShareQQ',
            'onMenuShareWeibo',
            'onMenuShareQZone'           
            ]	
	    });
		wx.onMenuShareTimeline({
		    title: '赶紧来来来，Yopark租赁拍卖会，让豪宅不再是梦想！',
		    link: 'http://weixin.yopark.com/weixin.html',
		    imgUrl: '',
		    success: function (res) {
		    // 用户确认分享后执行的回调函数	
		    },
		});
		wx.onMenuShareAppMessage({
		    title: '赶紧来来来，Yopark租赁拍卖会，让豪宅不再是梦想！',
		    desc: '', // 分享描述
		    link: 'http://weixin.yopark.com/weixin.html',
		    imgUrl: '', // 分享图标
		    type: 'link', // 分享类型,music、video或link，不填默认为link
		    dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
		    success: function () { 
		        // 用户确认分享后执行的回调函数
		    },
		});		
		wx.onMenuShareQQ({
		    title: '赶紧来来来，Yopark租赁拍卖会，让豪宅不再是梦想！',
		    desc: '', // 分享描述
		    link: 'http://weixin.yopark.com/weixin.html',
		    imgUrl: '', // 分享图标
		    success: function () { 
		       // 用户确认分享后执行的回调函数
		    },
		    cancel: function () { 
		       // 用户取消分享后执行的回调函数
		    }
		});	
		wx.onMenuShareWeibo({
		    title: '赶紧来来来，Yopark租赁拍卖会，让豪宅不再是梦想！',
		    desc: '', // 分享描述
		    link: 'http://weixin.yopark.com/weixin.html',
		    imgUrl: '', // 分享图标
		    success: function () { 
		       // 用户确认分享后执行的回调函数
		    },
		    cancel: function () { 
		        // 用户取消分享后执行的回调函数
		    }
		});		
		wx.onMenuShareQZone({
		    title: '赶紧来来来，Yopark租赁拍卖会，让豪宅不再是梦想！',
		    desc: '', // 分享描述
		    link: 'http://weixin.yopark.com/weixin.html',
		    imgUrl: '', // 分享图标
		    success: function () { 
		       // 用户确认分享后执行的回调函数
		    },
		    cancel: function () { 
		        // 用户取消分享后执行的回调函数
		    }
		});			
});
wx.error(function (res) {
	    alert(JSON.stringify(res));
});
</script>
