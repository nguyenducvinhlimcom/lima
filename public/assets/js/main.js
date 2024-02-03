$(document).ready(function(){

	__slider();

	__slider_2();

	__slider_3();

	__slider_5();

	__slider_dl();

	__slider_services();

	__testmonial_group();

	__news();

 	__about_item();

	__scrollUnity();

	__clients();

	__about_item();

	__services_detail();

	__img_select();

	__open_menu_mobile();

	__scrollUnity_menu();

	function __scrollUnity_menu(){
		$(window).scroll(function(){
			if($(window).scrollTop() > 0){
			 $(".__header_contact").addClass("__header__contact_fixed");
			 $(".__header_menu").addClass("__header_fixed");
			}else{
				$(".__header_contact").removeClass("__header__contact_fixed");
				$(".__header_menu").removeClass("__header_fixed");
			}
		})
	}

	function __scrollUnity(){

		$(window).scroll(function(){
			if($(window).scrollTop() > 0){
				$(".__moveTop").css({"display":"flex"});
			}else{
				$(".__moveTop").hide();
			}
		})

		$(".__moveTop").on("click",function(e){
			e.preventDefault();
			$("html , body").animate({
				scrollTop:"0px"
			})
		})
	}

	function __btn_mobile(){
		var __btn_mobile = $(".__btn_mobile");
		$isOpen = false;
		__btn_mobile.click(function(e){
			e.preventDefault();
			$isOpen = !$isOpen;
			if($isOpen){
				$(".__header_menu_left").slideDown();
			}else{
				$(".__header_menu_left").slideUp();
			}
		})

		$(".__icon_show").click(function(){
			$next = $(this).next();
			if($next.is(":hidden")){
				$next.addClass("none");
				$next.slideDown();
			}else{
				$next.removeClass("none");
				$next.slideUp();
			}
		})
	}


	function __slider(){
		var __slider = $(".__slider .owl-carousel");
		__slider.owlCarousel({
			loop:true,
			items:1,
			nav:false,
			dots:false
		});
	}
	function __slider_2(){
		var __slider = $(".__slider_2 .owl-carousel");
		__slider.owlCarousel({
			loop:true,
			items:1,
			nav:true,
			dots:false
		});
	}
	function __slider_3(){
		var __slider = $(".__slider_3 .owl-carousel");
		__slider.owlCarousel({
			margin:30,
			loop:true,
			items:5,
			nav:false,
			dots:true
		});
	}
	function __slider_5(){
		var __slider = $(".__slider_5 .owl-carousel");
		__slider.owlCarousel({
			margin:30,
			loop:true,
			responsive:{
					0:{
		          items:1
		      },
			786:{
		          items:2
		      },
		      992:{
		          items:3
		      }
			},
			nav:true,
			dots:true
		});
	}
	function __slider_dl(){
		var __slider = $(".__slider_dl .owl-carousel");
		__slider.owlCarousel({
			margin:30,
			loop:false,
			items:5,
			nav:false,
			dots:false
		});
	}
	function __services_detail(){
		var __services_detail = $(".__services_detail .__project_list .owl-carousel");
		__services_detail.owlCarousel({
			loop:true,
			dots:false,
			nav:false,
			responsive:{
					0:{
		          items:1
		      },
					786:{
		          items:2
		      },
		      992:{
		          items:4
		      }
		  }
		});
	}


function __slider_services(){
		var __services = $(".__services .owl-carousel");
		__services.owlCarousel({
 			margin:30,
			loop:true,
			dots:false,
			nav:true,
			responsive:{
					0:{
	            items:1
	        },
					786:{
	            items:2
	        },
	        992:{
	            items:3
	        }
	    }
		});
	}

	function __news(){
		var __news = $(".__news .owl-carousel");
		__news.owlCarousel({
 			margin:30,
			loop:true,
			dots:false,
			nav:true,
			responsive:{
					0:{
	            items:1
	        },
					786:{
	            items:2
	        },
	        992:{
	            items:3
	        }
	    }
		});
	}

 	function __clients(){
		var __clients = $(".__clients .owl-carousel");
		__clients.owlCarousel({
 			margin:30,
			loop:true,
			dots:false,
			nav:false,
			responsive:{
					0:{
	            items:2
	        },
					786:{
	            items:4
	        },
	        992:{
	            items:6
	        }
	    }
		});
	}

	function __testmonial_group(){
		var __testmonial_group = $(".__testmonial_group .owl-carousel");
		__testmonial_group.owlCarousel({
			loop:true,
			items:1,
			nav:false,
			dots:true
		});
	}

	function __img_select(){
		$(".__img_select img").mouseover(function(){
			$(".__img_show img").attr("src" , $(this).attr("src") );
		})
	}

  function __about_item(){
  	$(".__about_item  .__about_item_title  h1").click(function(e){
  		e.preventDefault();
  		$p = $(this).parent().next();
  		if($p.is(":hidden")){
  			$(".__about_item").find(".__about_item_title_active").removeClass("__about_item_title_active");
  			$(".__about_item p ").height(0).hide();
  			//get height
  		  $h = $p.height("initial").height();
  		  //show
  		  $p.height(0).show();
  		  //active title
  		  $(this).parent().addClass("__about_item_title_active ");
  		  $p.animate({
  		  	height:$h
  		  })
  		}
  	})
  }

  function __open_menu_mobile(){
  	$open = false;
  	$(".__open_menu_mobile").click(function(e){
  		e.preventDefault();
  		$open = !$open;
  		$open === true ? $(".__header_mobile_nav_list").slideDown() : $(".__header_mobile_nav_list").slideUp();
  	})
  }

})
