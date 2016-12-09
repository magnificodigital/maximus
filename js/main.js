//faq
$(function(){

	$('#question-itens ul li').click(function(){
		$(this).find('div.dropdown').slideToggle("fast");
	});

});

//botão fechar lightbox
$(function(){
	$('.close-lightbox').click(function(){
		$('#form-lightbox').fadeOut('fast');
	});	
});

//Abre menu
$(function(){
	$('.open-menu').on('click',function(){
		$('#top-site nav ul').slideToggle("fast");
		$('#content-site').on('click',function(){
			$('#top-site nav ul').slideUp("fast");
		});
	});
});

//Paralaxx
$(function(){
   $('.bgParallax').each(function(){

    	var $obj = $(this);
    	$(window).scroll(function() {
		var yPos = -($(window).scrollTop() / $obj.data('speed')); 
 
		var bgpos = '50% '+ yPos + 'px';
 
		$obj.css('background-position', bgpos );
 
	}); 
   });	
});




