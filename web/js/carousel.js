
var indexClass=2;
var p=0;

//срабатывает до начала показа	
$('#w3').on('slide.bs.carousel', function () {

	 	
	
})

//после начал показа
$('#w3').on('slid.bs.carousel', function () {


	
	$('#slide').removeClass();
	if (indexClass>3) {indexClass=1}
	$('#slide').addClass('color'+indexClass);
	indexClass++;
	
	

	$('.imgslide').addClass('imgslideshow');
	
	

	
})


