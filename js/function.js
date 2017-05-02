// JavaScript Document
var screenWidth = $(window).width();
var screenHeight = $(window).height();

function isNumber(o) {
  return !isNaN(o - 0) && o !== null && o.replace(/^\s\s*/, '') !== "" && o !== false;
}
function resizeWindow() {
  var screenWidth = $(window).width();
  var screenHeight = $(window).height();
  var rightHeaderWidth = 698;
  var msgheight = screenHeight * 0.75;
  //var formheight = screenHeight - 170;
  //var formheights = screenHeight - 250;
  var formheight = screenHeight - parseInt(screenHeight * 0.28);
  var testiheight = screenHeight - parseInt(435);
  var mainheight = screenWidth / 16 * 9 - parseInt(80);
  var maincontentheight = screenHeight - parseInt(308);
  var maincontentmargin = $("#maincontent").outerHeight(true) - $("#maincontent").outerHeight();
  var procontentheight = screenHeight - parseInt(125);
  var pageheight = screenHeight - 400;

  if (screenWidth > 996) {
    //alert(1);
    //$("#msource").css({"height":msgheight});
    //$(".subform").css({"max-height":formheight});
    $("#maincontent").css({
      "min-height": maincontentheight - maincontentmargin,
      "-webkit-transition": "0.5s",
      "transition": "0.5s"
    });
    $("#productcontent").css({
      "min-height": procontentheight + "px",
      "-webkit-transition": "0.5s",
      "transition": "0.5s",
      "-webkit-transition": "0.5s",
      "transition": "0.5s"
    });
    $("#caseblock").css({"min-height": testiheight, "-webkit-transition": "0.5s", "transition": "0.5s", "-webkit-transition": "0.5s", "transition": "0.5s"});
    $(".homebg").css({"min-height": mainheight, "-webkit-transition": "0.5s", "transition": "0.5s"});
    $(".ugpageheight").css({"min-height": pageheight});
    //$(".subicon").css({"margin":"0 auto;","width":"996px"});
  } else if (screenWidth <= 996) {
    //$("#msource").css({"height":msgheight});
    //$(".subform").css({"max-height":formheights});
    //var realheight = $("#productarea").outerHeight();
    //var aaa = $("#footer").offset(1000).top;
    $("#productcontent").css({
      "min-height": procontentheight + "px",
      "-webkit-transition": "0.5s",
      "transition": "0.5s",
      "-webkit-transition": "0.5s",
      "transition": "0.5s"
    });
    /*
		var $w = $(window).scroll(function(){
			if ( $w.scrollTop() > realheight ) {
			console.log(realheight);
				$('#sidemenu').css({"position":"relative"});
				//$('#voice3').css({"border-bottom":"2px solid #2e375b"});
			} else {
				$('#sidemenu').css({"position":"fixed"});
			}
		});*/

  }

  sticky_relocate();
  sticksidemenu_ce();
  var win_width = $(window).width();
  if (win_width < 996) {
    reposition_toolbar();
  }
}

/*
function sticksidemenu(){
	if (screenWidth < 996){
		var maincontent = $("#maincontent").outerHeight();
		var lowernav = $(".lowernav").outerHeight();
		var viewh = $(window).height();
		var pheight = parseInt(maincontent) + parseInt(lowernav) - parseInt(viewh);
		console.log(pheight);
		var $w = $(window).scroll(function(){
			if ( $w.scrollTop() < pheight ) {
				$('#sidemenu').css({"position":"fixed"});
			} else {
				$('#sidemenu').css({"position":"relative"});
			}
		});
	}
}
*/
function sticksidemenu_ce() {
  var win_width = $(window).width();
  if (win_width < 996) {
    var realh = $(".pageheight").outerHeight(true);
    var viewh = $(window).height();
    var pheight = realh - parseInt(viewh);
    //console.log(pheight);
    if ($(window).scrollTop() < pheight) {
      $('#sidemenu').css({"position": "fixed", "-webkit-transition": "0.5s", "transition": "0.5s"});
    } else {
      $('#sidemenu').css({"position": "relative", "-webkit-transition": "0.5s", "transition": "0.5s"});
    }
    var $w = $(window).scroll(function() {
      //console.log($w.scrollTop())
      realh = $(".pageheight").outerHeight(true);
      viewh = $(window).height();
      pheight = realh - parseInt(viewh);
      var realtime_width = $(window).width();
      if ($w.scrollTop() < pheight || realtime_width >= 996) {
        $('#sidemenu').css({"position": "fixed", "-webkit-transition": "0.5s", "transition": "0.5s"});
      } else {
        $('#sidemenu').css({"position": "relative", "-webkit-transition": "0.5s", "transition": "0.5s"});
      }
    });
  } else {
    $('#sidemenu').css({"position": "fixed", "-webkit-transition": "0.5s", "transition": "0.5s"});
  }
}

function reposition_toolbar() {
  var realh = $(".pageheight").outerHeight(true);
  var viewh = $(window).height();
  var pheight = realh - parseInt(viewh);
  //console.log(pheight);
  if ($(window).scrollTop() < pheight) {
    //console.log("111");
    $('#sidemenu').css({"position": "fixed", "-webkit-transition": "0.5s", "transition": "0.5s"});
  } else {
    //console.log("222");
    $('#sidemenu').css({"position": "fixed", "-webkit-transition": "0.5s", "transition": "0.5s"});
  }
}

function sticky_relocate() {
  var window_top = $(window).scrollTop();
  var div_top = 25;
  var realh = 71;
  var footer_top = realh - parseInt(200);
  var win_width = $(window).width();
  //console.log(realh);
  if (win_width < 996) {
    if (window_top >= div_top) {
      $('.headerRow').addClass('stick').css({"-webkit-transition": "0.5s", "transition": "0.5s"});
      $('#headrow').animate({
        height: $('#topmenu').height() + $('.headerRow').height() + "px"
      }, 0);
    } else {
      $('.headerRow').removeClass('stick').css({"-webkit-transition": "0.5s", "transition": "0.5s"});
      $('#headrow').animate({
        height: "0px"
      }, 0);
    }
    if (window_top < footer_top) {
      $('#sidemenu').addClass('stick').css({"-webkit-transition": "0.5s", "transition": "0.5s"});
    } else {
      $('#sidemenu').removeClass('stick').css({"-webkit-transition": "0.5s", "transition": "0.5s"});
    }
  } else {
    $('.headerRow').removeClass('stick');
    $('#headrow').animate({
      height: "0px"
    }, 0);
    $('#sidemenu').removeClass('stick').css({"-webkit-transition": "0.5s", "transition": "0.5s"});
  }
}
$(document).ready(function() {

  //console.log(accessip);
  if (window.location.href.indexOf("/eng/") > -1) {
    var lang = "eng";
  } else {
    var lang = "chi";
  }

  var serverName = window.location.host;
  var screenWidth = $(window).width();
  var screenHeight = $(window).height();
  var rightHeaderWidth = 698;

  if ((serverName == "42.3.224.24") || (serverName == "127.0.0.1")) {
    var serverURL = serverName + "/smart";
  } else {
    var serverURL = serverName;
  }
  //alert(serverURL);

  var headurl = "http://" + serverURL + "/" + lang + "/index.html";

  //alert(headurl);
  $(".headerlogo").click(function() {
    window.location.href = headurl;
  });

  //pagecount
  //var formdata = $("#awardform").serialize();
  var url = window.location.pathname;
  var contentType = "application/x-www-form-urlencoded; charset=utf-8";
  //var pageName = window.location.pathname.split('/').pop();
  var pageName = window.location.pathname;

  $.ajax({
    crossDomain: false,
    cache: false,
    type: 'post',
    dataType: 'html',
    url: "/pagecount.php",
    data: {
      pagename: pageName
    },
    //processData: false,
    contentType: contentType,
    beforeSend: function() {
      //alert("beforeSend");
    },
    complete: function() {
      //alert("complete");
    },
    error: function(data) {
      //alert("ERROR");
    },
    success: function(data) {
      //var resultCode = data.resultcode;
      if (data == "Y") {} else {
        console.log(data);
      }
    }
  });
  //end pagecount

  //share
  $(".navSub,.subcatMenu, .snlv2, .snlv3, .snlv4").hide();

  $(".nav").mouseover(function() {
    //console.log("xxxxxx");
    $(this).children(".navSub").stop().fadeIn("fast").css({"min-height": "782px;"});

  });
  $(".nav").mouseout(function() {
    $(this).children(".navSub").stop().fadeOut("fast");
  });

  $(".catMenu").mouseover(function() {
    $(this).children(".subcatMenu").stop().fadeIn("fast");
    $(".fullWidthMenu").css({"min-height": catminheight, "-webkit-transition": "all 0.5s ease", "transition": "all 0.5s ease"});
  });

  $(".catMenu").mouseout(function() {
    $(this).children(".subcatMenu").stop().fadeOut(100);
    $(".fullWidthMenu").css({"min-height": "auto", "-webkit-transition": "all 0.5s ease", "transition": "all 0.5s ease"});
  });

  //small nav
  $(".navSub, .subcatMenu, .snlv2, .snlv3, .snlv4").hide();

  $('#smallnav').click(function() {
    var hidden = $('.lv1');
    if (hidden.hasClass('visible')) {
      hidden.animate({
        "left": "-530px"
      }, "slow").removeClass('visible');
      $(this).removeClass("smallnavx");
    } else {
      hidden.animate({
        "left": "0px"
      }, "slow").addClass('visible');
      $(this).addClass("smallnavx");
    }
  });

  $(".snlv1").click(function() {
    $(".snlv2").not(this).slideUp(10).css({"height": "auto"});
    $(this).toggleClass("closearrow");
    $(".snlv1").not(this).removeClass("closearrow");
    $(".subrow").not(this).removeClass("closesubarrow");
    $(".snlv3").slideUp(10);
    $(this).next(".snlv2").stop().slideToggle(100);
    //$(".snlv3, .snlv4").fadeOut();
  });
  $(".subrow").click(function() {
    $(".snlv3").not(this).slideUp(10).css({"height": "auto"});
    $(this).toggleClass("closesubarrow");
    $(".subrow").not(this).removeClass("closesubarrow");
    $(".subsubrow").removeClass("closesubarrow");
    $(".snlv4").slideUp(10);
    //
    $(this).next(".snlv3").stop().slideToggle(100);
    //$(".snlv4").fadeOut();
    //alert(1);
  });
  $(".subsubrow").click(function() {
    $(".snlv4").not(this).slideUp(10).css({"height": "auto"});
    $(this).toggleClass("closesubarrow");
    $(".subsubrow").not(this).removeClass("closesubarrow");
    $(this).next(".snlv4").stop().slideToggle(100);
  });
  //end of small nav

  if (screenWidth <= 996) {
    $(window).scroll(sticky_relocate);
    sticky_relocate();
  }
  var realheight = $("#productarea").outerHeight();

  $("#subscribearea").click(function() {
    $("#mask").fadeIn();
  });

  $("#closeBtn").click(function() {
    $("#mask").fadeOut();
  });
  //share
  $(".copy").click(function() {
    $("#sharesub").slideToggle();
  });

  //console.log(realheight);
  var btns = document.getElementById('btn');
  var clipboard = new Clipboard(btns);
});
