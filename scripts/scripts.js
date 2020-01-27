$( document ).ready( function() {

	$('#hero-slider').slick({
		infinite: true,
		autoplay: true,
		autoplaySpeed: 5000
	});
});

function specdim() {

	var button1 = document.getElementById("b1");
	var button2 = document.getElementById("b2");
	var button3 = document.getElementById("b3");
	var button4 = document.getElementById("b4");
	var page1 = document.getElementById("dimensions");
	var page2 = document.getElementById("layouts");
	var page3 = document.getElementById("colours");
	var page4 = document.getElementById("trims");

	button1.style.backgroundColor = "rgb(0, 62, 120)";
	button2.style.backgroundColor = "white";
	button3.style.backgroundColor = "white";
	button4.style.backgroundColor = "white";
	button1.style.color = "white";
	button2.style.color = "black";
	button3.style.color = "black";
	button4.style.color = "black";
	page1.style.display = "flex";
	page2.style.display = "none";
	page3.style.display = "none";
	page4.style.display = "none";
}

function specveh() {

	var button1 = document.getElementById("b1");
	var button2 = document.getElementById("b2");
	var button3 = document.getElementById("b3");
	var button4 = document.getElementById("b4");
	var page1 = document.getElementById("dimensions");
	var page2 = document.getElementById("layouts");
	var page3 = document.getElementById("colours");
	var page4 = document.getElementById("trims");
	
	button2.style.backgroundColor = "rgb(0, 62, 120)";
	button1.style.backgroundColor = "white";
	button3.style.backgroundColor = "white";
	button4.style.backgroundColor = "white";
	button2.style.color = "white";
	button1.style.color = "black";
	button3.style.color = "black";
	button4.style.color = "black";
	page2.style.display = "inline-block";
	page1.style.display = "none";
	page3.style.display = "none";
	page4.style.display = "none";
}

function speccol() {

	var button1 = document.getElementById("b1");
	var button2 = document.getElementById("b2");
	var button3 = document.getElementById("b3");
	var button4 = document.getElementById("b4");
	var page1 = document.getElementById("dimensions");
	var page2 = document.getElementById("layouts");
	var page3 = document.getElementById("colours");
	var page4 = document.getElementById("trims");
	
	button3.style.backgroundColor = "rgb(0, 62, 120)";
	button2.style.backgroundColor = "white";
	button1.style.backgroundColor = "white";
	button4.style.backgroundColor = "white";
	button3.style.color = "white";
	button2.style.color = "black";
	button1.style.color = "black";
	button4.style.color = "black";
	page3.style.display = "inline-block";
	page2.style.display = "none";
	page1.style.display = "none";
	page4.style.display = "none";
}

function specint() {

	var button1 = document.getElementById("b1");
	var button2 = document.getElementById("b2");
	var button3 = document.getElementById("b3");
	var button4 = document.getElementById("b4");
	var page1 = document.getElementById("dimensions");
	var page2 = document.getElementById("layouts");
	var page3 = document.getElementById("colours");
	var page4 = document.getElementById("trims");
	
	button4.style.backgroundColor = "rgb(0, 62, 120)";
	button2.style.backgroundColor = "white";
	button3.style.backgroundColor = "white";
	button1.style.backgroundColor = "white";
	button4.style.color = "white";
	button2.style.color = "black";
	button3.style.color = "black";
	button1.style.color = "black";
	page4.style.display = "inline-block";
	page2.style.display = "none";
	page3.style.display = "none";
	page1.style.display = "none";
}

function blazblue() {
	document.getElementById("carcolour").src = "images/blazerblue.webp";
}

function red() {
	document.getElementById("carcolour").src = "images/red.webp";
}

function silver() {
	document.getElementById("carcolour").src = "images/silver.webp";
}

function metalicious() {
	document.getElementById("carcolour").src = "images/metalicious.webp";
}

function solar() {
	document.getElementById("carcolour").src = "images/solar.webp";
}

function deepblue() {
	document.getElementById("carcolour").src = "images/deepimpactblue.webp";
}

function black() {
	document.getElementById("carcolour").src = "images/black.webp";
}

function guard() {
	document.getElementById("carcolour").src = "images/guard.webp";
}

function magnetic() {
	document.getElementById("carcolour").src = "images/magnetic.webp";
}

function tit() {
	document.getElementById("tit").style.backgroundColor = "rgb(170, 170, 170)";
	document.getElementById("zet").style.backgroundColor = "white";
	document.getElementById("tit2").style.backgroundColor = "white";
}

function zet() {
	document.getElementById("zet").style.backgroundColor = "rgb(170, 170, 170)";
	document.getElementById("tit").style.backgroundColor = "white";
	document.getElementById("tit2").style.backgroundColor = "white";
}

function tit2() {
	document.getElementById("tit2").style.backgroundColor = "rgb(170, 170, 170)";
	document.getElementById("zet").style.backgroundColor = "white";
	document.getElementById("tit").style.backgroundColor = "white";
}