jQuery(document).ready(function()
{
	 "use strict"

	 $(".slider").ripples({       //function to get the  ripple water effect 
	  dropRadius:12 ,
	  perturbance: 0.01,
	  
	});

	 // function to create jQuery typing effect

	var typed = new Typed(".text", {
	  strings:["hello world ","<strong class='primary'>welcome,</strong> students","start <strong class='primary'>learning</strong>"],
	 
	  typeSpeed:40,
	  backSpeed:30,
	  loop: true 
	  // Default value
	});


	// function for sticky navigation using DOM

	$(window).scroll(function(){
		var top=$(window).scrollTop();
		if (top>=60) 
		{
			$("nav").addClass('secondary');  //.secondary is a selector class defined in style.css file
		}

		else 
			if($("nav").hasClass('secondary'))
		{
			$("nav").removeClass('secondary');
		}

	});

	//magnific popup for work section 

	$('.work').magnificPopup({
	  delegate: 'a', // child items selector, by clicking on it popup will open
	  type: 'image',
	  gallery:{ enabled:true}
	  // other options
	});


	$('.owl-carousel').owlCarousel();

//   Email notification



	


});