//弹出更多网址
function getAllSitesHtml(target) {
	return $(target).closest('div.item').find('p.hidden').clone();
}
$('#h-waterfall .more a').qtip({
	content: {
		text: function(event, api) {
			return getAllSitesHtml(event.target);
		},
		title: 'More'
	},
	hide: {
		event: 'click',
		fixed: true
	},
	show: {
		event: 'click',
		modal: {
			on: true,
			blur: true,
			escape: true
		}
	},
	position: {
		my: 'bottom left',  // Position my top left...
		at: 'center right', // at the bottom right of...
		target: false
	},
	style: {
		classes: 'qtip-more-sites qtip-tipped'
	}
});
//end弹出更多网址

//返回顶部
function returnPageTop() {
	var topVss = $(window).scrollTop();
	if (topVss > 5) {
		$(".returnTop > .box").stop(true, false).animate({bottom: 200}, "fast");
	} else {
		$(".returnTop > .box").animate({bottom: -60}, "fast");
	}
}
$(function() {
	//返回顶部和底部
	$(".returnTop").click(function() {
		$("html, body").animate({scrollTop: 0}, "slow");
	});
	returnPageTop(); //返回顶部调用
	$(".returnTop > .box").hover(function() {
		$(this).stop(true, false).animate({width: 100}, "fast");
	}, function() {
		$(this).animate({width: 36}, "fast");
	});
	$(window).scroll(function() {
		//返回顶部
		returnPageTop();
	});
});
//end 返回顶部