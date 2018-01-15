$(document).ready(function(){
	var options = {
		autoPlay: true,
		autoPlayDelay: 4000,
		pauseOnHover: false,
		nextButton: false,
		prevButton: false,
		preloader: false,
		navigationSkipThreshold: 4000,
		fadeFrameWhenSkipped: false
	};
	var sequence = $("#sequence").sequence(options).data("sequence");
});