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