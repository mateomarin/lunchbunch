$(document).ready(function(){
	// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
	$('.modal-trigger').leanModal();
	// Activate the side menu 
	$(".button-collapse").sideNav();
});

// this is all the code for modal triggers and mobile view side nav