
/*var animate = new Animate(".imgslidehide" ,".header" ,".txt-msg" ,".btn");


$('#test').click(function() {
	  
	var f  =   function  () {
		   	 $('#w3').carousel('next') ;
		    };
		     
       animate.stop(f);		
   
   
});



function Animate(options) 
{
	
	var selectElements = Array.prototype.slice.call(arguments);
	var time = 100;
	var timeAnimate = 1.80;
	
	var elementTop;
	

	this.animating = function(a) {
	for (var index=0; index<selectElements.length; index++)
		{
		time = time * timeAnimate;
		$('.item.active').find(selectElements[index]).animate(
			{top: a[index] + "%"},
			{duration: time});
			}

	
	time=100;

	
	}
	
}



Animate.prototype.start = function ()
{
	
	this.animating(["0","0","20","30"]);
	
}

Animate.prototype.stop = function (f)
{

	this.animating(["100","100","100","100"],f);
	
}





var indexClass=1;
//срабатывает до начала показа	
$('#w3').on('slide.bs.carousel', function () {
	$('#slide').removeClass();
	if (indexClass>3) {indexClass=1}
	$('#slide').addClass('color'+indexClass);
	
})



 

$('#w3').on('slid.bs.carousel', function (e) {

	animate.start();
   //animate.stop();		
		
});

$('#w3').on('slide.bs.carousel', function () {
	//animate.stop();
	//var animate = new Animate(".imgslidehide" ,".header" ,".txt-msg" ,".btn");
	//animate.start();
	
});





*/








