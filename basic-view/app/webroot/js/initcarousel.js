jQuery(document).ready(function(){
    var jsFolder = "";
    if ( typeof html5Lightbox === "undefined" )
    {
        html5Lightbox = jQuery(".html5lightbox").html5lightbox({
            jsfolder:jsFolder
        });
    }
    jQuery("#amazingcarousel-7").amazingcarousel({
        jsfolder:jsFolder,
        width:240,
        height:180,
        interval:3000,
        itembottomshadowimagetop:99,
        random:false,
        direction:"horizontal",
        arrowheight:48,
        itembackgroundimagewidth:100,
        skin:"Highlight",
        responsive:true,
        bottomshadowimage:"bottomshadow-110-95-0.png",
        navstyle:"bullets",
        enabletouchswipe:true,
        backgroundimagetop:-40,
        arrowstyle:"always",
        bottomshadowimagetop:95,
        transitionduration:1000,
        hoveroverlayimage:"../img/hoveroverlay-64-64-5.png",
        itembottomshadowimage:"itembottomshadow-100-98-3.png",
        showitembottomshadow:true,
        transitioneasing:"easeOutExpo",
        showitembackgroundimage:false,
        itembackgroundimage:"",
        playvideoimagepos:"center",
        circular:true,
        arrowimage:"../img/arrows-48-48-2.png",
        showbottomshadow:false,
        screenquery:{
	mobile: {
		screenwidth: 600,
		visibleitems: 1
	}
},
        navimage:"bullet-16-16-0.png",
        itembackgroundimagetop:0,
        showbackgroundimage:false,
        showplayvideo:true,
        spacing:4,
        scrollitems:1,
        showhoveroverlay:true,
        scrollmode:"page",
        navdirection:"horizontal",
        itembottomshadowimagewidth:100,
        backgroundimage:"",
        arrowwidth:48,
        pauseonmouseover:true,
        navmode:"page",
        arrowhideonmouseleave:1000,
        navwidth:16,
        navspacing:8,
        playvideoimage:"../img/playvideo-64-64-0.png",
        visibleitems:1,
        navswitchonmouseover:false,
        bottomshadowimagewidth:120,
        autoplay:false,
        backgroundimagewidth:120,
        loop:0,
        navheight:16
    });
});