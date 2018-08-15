$('#slider').cycle({
	
	fx:				'scrollHorz',
	next:			'#banner-right',
	prev:			'#banner-left',
	pager:			'#pager',
	timeout:		4000,
	speed:			900,
	
});






















/*var img_banner = ["jl.jpg", "vikings.png", "starw.jpg"]

console.log(img_banner);

var number = 0;
var timer1 = 0;
var timer2 = 0;
var block = false;



function hideslide()
{
	$("#slider").fadeOut(500);
	
}

function blockslide()
{
	//$("#banner-left").unbind( "click", "#banner-left");
	$( "#banner-left" ).prop( "disabled", "disabled" );
	
}


function changeslide() 
{
	number++;
	if (number>2) number=0;

	var img = "<a href=\"#\"><img src=\"img/"+ img_banner[number] + "\"/></a>" ;
	$("#slider").html(img) ;
	$("#slider").fadeIn(500);
	timer1 = setTimeout("changeslide()", 4000);
	timer2 = setTimeout("hideslide()", 3500);
	//alert(number);
	//alert(img);


	//var s = $("#banner-nr" + number).focus();
	//console.log(s);
}	

$("#banner-left").click(function(){
	
	

	clearTimeout(timer1);
	clearTimeout(timer2);
	
	block=true;
	if (block==true)
	{
		 blockslide();
	}
	
	number= number-2;
	if (number == -1) number=2;
	if (number ==-2) number=1;
	if (number == -3) number=0;
	
	hideslide();
	setTimeout("changeslide()", 500);
	
});

$("#banner-right").click(function(){
	
	clearTimeout(timer1);
	clearTimeout(timer2);
	
	
	hideslide();
	setTimeout("changeslide()", 500);
	
});

*/


	