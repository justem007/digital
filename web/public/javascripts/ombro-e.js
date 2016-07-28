(function() {

	var canvas = this.__canvas = new fabric.Canvas('ombroE',{
		selectionColor: 'blue',
		slectionLineWidth: 2
	});
	
	var poligono = new fabric.Triangle({
		width: 60,
		height: 60,
		fill: 'red',
		top: 20,
		left: 40
	});
	canvas.add(poligono);

	poligono.set({
		borderColor: 'red',
		cornerColor: 'green',
		cornerSize: 7
	});

	poligono.hasBorders = true;

}());