// browser selecting

/*
CSS Browser Selector v0.4.0 (Nov 02, 2010)
Rafael Lima (http://rafael.adm.br)
http://rafael.adm.br/css_browser_selector
License: http://creativecommons.org/licenses/by/2.5/
Contributors: http://rafael.adm.br/css_browser_selector#contributors
*/

function css_browser_selector(u){var ua=u.toLowerCase(),is=function(t){return ua.indexOf(t)>-1},g='gecko',w='webkit',s='safari',o='opera',m='mobile',h=document.documentElement,b=[(!(/opera|webtv/i.test(ua))&&/msie\s(\d)/.test(ua))?('ie ie'+RegExp.$1):is('firefox/2')?g+' ff2':is('firefox/3.5')?g+' ff3 ff3_5':is('firefox/3.6')?g+' ff3 ff3_6':is('firefox/3')?g+' ff3':is('gecko/')?g:is('opera')?o+(/version\/(\d+)/.test(ua)?' '+o+RegExp.$1:(/opera(\s|\/)(\d+)/.test(ua)?' '+o+RegExp.$2:'')):is('konqueror')?'konqueror':is('blackberry')?m+' blackberry':is('android')?m+' android':is('chrome')?w+' chrome':is('iron')?w+' iron':is('applewebkit/')?w+' '+s+(/version\/(\d+)/.test(ua)?' '+s+RegExp.$1:''):is('mozilla/')?g:'',is('j2me')?m+' j2me':is('iphone')?m+' iphone':is('ipod')?m+' ipod':is('ipad')?m+' ipad':is('mac')?'mac':is('darwin')?'mac':is('webtv')?'webtv':is('win')?'win'+(is('windows nt 6.0')?' vista':''):is('freebsd')?'freebsd':(is('x11')||is('linux'))?'linux':'','js']; c = b.join(' '); h.className += ' '+c; return c;}; css_browser_selector(navigator.userAgent);


//////////////////


$(document).ready(function(e) {
	$('#logo').delay(2500).animate({marginTop:120},1000,function(){
		$('#form-container').animate({opacity:1},1000);
	});
});


function ajaxSubmit(){
	$('#callback-loading').css({display: 'block'});
	$('#callback-loading').addClass('animated bounceIn');	
	var sentData = $('#input-domain').serialize();
	$.ajax({
		type : 'GET',
		dataType : 'html',
		url : 'whois.php?'+sentData,
		success : function(data){
			$('#callback-loading').removeClass('animated bounceIn').addClass('animated bounceOut');
			$('#logo').animate({opacity:0},500,function(){
				$('#footer-logo').animate({opacity:1},300,function(){
					$('#input-domain').addClass('animated hinge');
					$('#data-here').delay(1000).css({display: 'block'}).html(data).animate({opacity:1},750);
				});	
			})
		}
	});
};

function ajaxSubmitDown(){
	$('#callback-loading').css({display: 'block'});
	$('#callback-loading').addClass('animated bounceIn');
	$('#data-here').animate({opacity:0},750);	
	var sentData = $('#input-domain-down').serialize();
	$.ajax({
		type : 'GET',
		dataType : 'html',
		url : 'whois.php?'+sentData,
		success : function(data){
			$('#callback-loading').removeClass('animated bounceIn').addClass('animated bounceOut');
			$('#data-here').html(data).animate({opacity:1},750);
		}
	});
};