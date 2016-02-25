$(document).ready(function(){
alert("This website will change your life!");
$('nav li').hover(function(){
$(this)
.stop(true)
.animate(
{height:'30px'},
{duration:500,easing:'easeOutBounce'}
)
},
function(){
$(this)
.stop(true)
.animate(
{height:'20px'},
{duration:500,easing:'easeOutCirc'}
)
});
$('h2')
.effect('shake', {times:3}, 800)
.effect('highlight', {}, 3000)
.hide('scale', {}, 2000)
.delay(2000)
.show('pulsate',{},2000);
//fixing the position of the nav
var nav = $('nav');
	
	$(window).scroll(function () {
		if ($(this).scrollTop() > 136) {
			nav.addClass("f-nav");
		} else {
			nav.removeClass("f-nav");
		}
	});
//custom scrolling(not working)
$('#tips').jScrollPane({
verticalGutter:50
});
//resizable elements
$('p').resizable();
});