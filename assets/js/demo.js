var f = function(){
	var canvas = document.getElementById('canvas'); // we have only one canvas.
	var c = canvas.getContext('2d');


	c.beginPath();
	c.moveTo(50,50);
	c.lineTo(100,250);
	c.lineTo(400,250);
	c.lineTo(600,50);
	c.closePath();
	c.lineTo(500,500);
	c.lineTo(500,600);
	c.stroke();

};


window.addEventListener('load',f,false);