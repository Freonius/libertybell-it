console.log("1.1.1");

// Lazy loader for images
const lazyLoad = (selector) => {
	let els = null;
	if (selector.startsWith(".")) {
		selector = selector.replace(".", "");
		els = document.getElementsByClassName(selector);
	}
	else {
		els = document.getElementsByTagName(selector);
	}
	if (!els) {
		return;
	}
	for (let i = 0; i < els.length; i++) {
		if (els[i].hasAttribute("data-src")) {
			let src = els[i].getAttribute("data-src");
			if (els[i].classList.contains("set")) {
				els[i].setAttribute("srcset", src);
			}
			else {
				els[i].setAttribute("src", src);
			}
		}
	}
};

const menuMaker = () => {
	let container, menu, links, subMenus;
	container = document.getElementById("site-navigation");
	if (!container) {
		return;
	}
	menu = container.getElementsByTagName("ul")[0];
	menu.setAttribute("aria-expanded", "false");
	if (-1 === menu.className.indexOf("nav-menu")) {
		menu.className += " nav-menu";
	}
	links = menu.getElementsByTagName("a");
	subMenus = menu.getElementsByTagName("ul");
	for (let i = 0; i < subMenus.length; i++) {
		subMenus[i].parentNode.setAttribute("aria-haspopup", "true");
	}
	for (let i = 0; i < links.length; i++) {
		links[i].addEventListener("focus", toggleFocus, true);
		links[i].addEventListener("blur", toggleFocus, true);
	}
	let toggleFocus = () => {
		let self = this;
		// Move up through the ancestors of the current link until we hit .nav-menu.
		while (-1 === self.className.indexOf("nav-menu")) {

			// On li elements toggle the class .focus.
			if ("li" === self.tagName.toLowerCase()) {
				if (-1 !== self.className.indexOf("focus")) {
					self.className = self.className.replace(" focus", "");
				}
				else {
					self.className += " focus";
				}
			}
			self = self.parentElement;
		}
	}
};

const init = () => {
	// Lazy load the images and the iframes
	lazyLoad("iframe");
	lazyLoad(".lazy");

	// Nav
	$("#menu").slicknav();
	menuMaker();
};

// Slide in animation

var $animation_elements = $('.animation-element');
var $window = $(window);
var prev_pos = 0;
function check_if_in_view() {
  var window_height = $window.height();
  //window_height = screen.height;
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);
  var scrolling_down = false;
  if (window_top_position > prev_pos) {
    scrolling_down = true;

  }

  prev_pos = window_top_position;
  var i = 0;
  $.each($animation_elements, function() {
    i++;
    var $element = $(this);
    var element_height = $element.outerHeight();
    
    var element_top_position = $element.offset().top;

    var element_bottom_position = (element_top_position + (element_height * 0.7));
    var inV = (window_bottom_position > (element_top_position + (element_height * 0.3))
      &&
      window_top_position < element_bottom_position);
    element_top_position += (element_height * 0.3);

   if (inV) {
     $element.addClass("in-view");
   }
   else {
     $element.removeClass("in-view");
   }
  });
}
try {
	$window.on('scroll resize', check_if_in_view);
} catch (error) {
	console.log(error);
}

// OnLoad
window.onload = init;

//Sticky sidebar
$(function() {
var asideElement = "#text-3";
var aniDuration = 100;
var useAnimation = true;
	var offset = $(asideElement).offset();
	var topPadding = 15;
	$(window).scroll(function() {
		try {
		if ($(window).scrollTop() > offset.top) {
			if (useAnimation) {
			$(asideElement).stop().animate({
				marginTop: $(window).scrollTop() - offset.top + topPadding
			}, aniDuration);
		}
		else {
			$(asideElement).css("margin-top", ($(window).scrollTop() - offset.top + topPadding).toString() + "px");
		}
		} else {
			if (useAnimation) {
				$(asideElement).stop().animate({
					marginTop: 0
				}, aniDuration);
			}
			else {
				$(asideElement).css("margin-top", "0px");
			}
		};
	} catch (error) {
			
	}
	});
});

//Facebook
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));


// Okay, didn't know it was this mess of a file, have to work on this