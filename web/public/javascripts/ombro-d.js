(function() {

	var canvas = this.__canvas = new fabric.Canvas('ombroD');
	
	var poligono = new fabric.Triangle({
		width: 60,
		height: 60,
		fill: 'orange',
		top: 20,
		left: 40
	});
	canvas.add(poligono);

}());