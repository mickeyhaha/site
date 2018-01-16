// JavaScript Document
$(function() {
	$('#mytime').html(getTimeText());

    var $el, leftPos, newWidth;
    /* Add Magic Line markup via JavaScript, because it ain't gonna work without */
    $(".nav").append("<li id='magic-line'></li>");
    /* Cache it */
    var $magicLine = $("#magic-line");
    $magicLine
        .width($(".nav .cur").width())
        .css("left", $(".nav .cur a").position().left)
        .data("origLeft", $magicLine.position().left)
        .data("origWidth", $magicLine.width());
        
    $(".nav li").find("a").hover(function() {
        $el = $(this);
        leftPos = $el.position().left;
        newWidth = $el.parent().width();
        
        $magicLine.stop().animate({
            left: leftPos,
            width: newWidth
        });
    }, function() {
        $magicLine.stop().animate({
            left: $magicLine.data("origLeft"),
            width: $magicLine.data("origWidth")
        });    
    });
	
})

function addFavorite2() {
    var url = window.location;
    var title = document.title;
    var ua = navigator.userAgent.toLowerCase();
    if (ua.indexOf("360se") > -1) {
        alert("由于360浏览器功能限制，请按 Ctrl+D 手动收藏！");
    }
    else if (ua.indexOf("msie 8") > -1) {
        window.external.AddToFavoritesBar(url, title); //IE8
    }
    else if (document.all) {
  try{
   window.external.addFavorite(url, title);
  }catch(e){
   alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
  }
    }
    else if (window.sidebar) {
        window.sidebar.addPanel(title, url, "");
    }
    else {
  alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
    }
}

function chgnav(n){
	if (n>0){
		$(".nav li").removeClass("cur");
		$(".nav li:eq("+(n-1)+")").addClass("cur");

	}
}
function getTimeText(){
var _date = new Date();
var _time = _date.getHours();
var _text = '';
if(_time>=6&&_time<9)
_text = '早上好';
else if(_time>=9&&_time<11)
_text = '上午好';
else if(_time>=11&&_time<13)
_text = '中午好'
else if(_time>=13&&_time<17)
_text = '下午好';
else
_text = '晚上好';
return _text;
}
function shake(ele,cls,times){
	var i = 0, t = false, o = ele.attr("class")+" ", c = "", times = times||2;
	if(t) return;
	t= setInterval(function(){
		i++;
		c = i%2 ? o+cls : o;
		ele.attr("class",c);
		if(i==2*times){
			clearInterval(t);
			ele.removeClass(cls);
		}
	},500);
};
