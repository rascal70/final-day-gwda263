function responsive() {

var theBody = document.querySelector('body');

//Declare functions
function detectWinWidth() {
	var currWidth = window.innerWidth;
	console.log(currWidth);

	if (currWidth >= 800)
	{
		theBody.classList.add('timbuktu');
	}
	else
	{
		theBody.classList.remove('timbuktu');
	}
}

//Call functions
detectWinWidth();
window.addEventListener('resize', detectWinWidth);

/*-------------------------------------
| hamburger menu
-------------------------------------*/
var hamburger = document.querySelector('body header a.hamburger');
var nav = document.querySelector('nav.mainmenu');
var body = document.querySelector('body');

console.log(hamburger);

function toggleHamburger(event) {
	event.preventDefault();
	body.classList.toggle('open');
}

hamburger.addEventListener('click', toggleHamburger);

/*-------------------------------------
| Slideshow
-------------------------------------*/
$(document).ready(function (){

	function fadeOut(){
		$("#faded .slide img:last").animate({"opacity":"0"}, 3000, function(){
			$("#faded .slide img:last").prependTo("#faded .slide");
			$("#faded .slide img:first").css({"opacity":"1"});
			setTimeout(fadeOut, 1500);
		});
	}
	// fadeOut();
	setTimeout(fadeOut, 1500);
});

}

/*-------------------------------------
| Gallery Light Box
-------------------------------------*/
$(document).ready(function(){

				var Light = $("#Light");
				var Dark = $("#Dark");

				function ShowImg(){
					var theImg = $(this).clone();

					var theTitle = theImg.attr("title");
					var theDesc = theImg.attr("alt");

					$("#Light .target").html(theImg);
					$("<h2>"+theTitle+"</h2>").prependTo("#Light .target");
					$("<h3>"+theDesc+"</h3>").appendTo("#Light .target");

					Light.show();
					Dark.show();
				}
				function GoAway(){
					Light.hide();
					Dark.hide();
				}

				$("#gallery img").click(ShowImg);
				$("#Light .close").click(GoAway);
				Dark.click(GoAway);
			});

// responsive();

window.addEventListener('load', responsive);

