//Waiting the DOM to be ready for manipulation
document.addEventListener('DOMContentLoaded', function(){

//Creating an array to store the images
var images = new Array();
images.push("images/front.jpg");
images.push("images/back.jpg");
images.push("images/side.jpg");


var counter = 0;
// function that grabs the id from the html page and change the source 
// by a new image
function changeImage() {
	
	document.getElementById('placeholder').src = images[counter];
	if(counter < 2) {
		counter += 1;
	} else {
		counter = 0;
	}
}
//Function that is activated once the page is loaded and runs the function
// change image every 2500 milisseconds
window.onload = function() {
	setInterval(function () {
		changeImage();}, 2500);}














});