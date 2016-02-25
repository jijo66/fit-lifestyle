$(document).ready(function(){
alert("welcome to jijoville! the future billion dollar tech company!");

$('#toggleButton').click(function(){
    $('h3').toggle('slow',function(){
	$('#toggleButton').fadeOut();
  });
  });
   $('#jijo2').click(function(){
   $('p').toggle('slow');
});
$('h1').mouseover(function(){
$(this).addClass('hover');
});
$('h1').mouseout(function(){
$(this).removeClass('hover');
});
//hiding and revealing stuff
$('.spoiler').hide();
$('<input type="button" class="revealer" value="Tell me!"/>')
.insertBefore('.spoiler');
$('.revealer').click(function(){
$(this).hide();
$(this).next().fadeIn();
});
$('p').animate({
padding: '20px',fontSize:'20px'
},2000);
$('nav li').hover(function(){
$(this).animate({paddingLeft: '+=15px'},200);
},function(){
$(this).animate({paddingLeft: '-=15px'},200);
});
$('h3').animate({height:'+=300px'},2000,'easeOutBounce');
$('h3').animate({height:'-=300px'},2000,'easeInOutExpo');
$('h3').animate({height:'hide'},2000,'easeOutExpo');
$('h3').animate({height:'show'},2000,'easeOutBounce');
//bouncy content panes
$('#bio > div').hide();
$('#bio h5').click(function(){
$(this).next().animate(
{'height':'toggle'},2000,'easeOutBounce'
);
$('div p').show();
});
$('#quote')
.animate({marginBottom: '+=100px'},3000,'easeInExpo')
.delay(2000)
.fadeOut();
//scrollTo testing
$('a[href=#]').click(function(e) {
$.scrollTo(0,'slow');
e.preventDefault();
});
//resizing elements
$('h1').resizable();
$(window).resize(function(){
alert("You resized the window!");
});
});