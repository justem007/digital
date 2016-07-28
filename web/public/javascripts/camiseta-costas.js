(function() {

	var canvas = this.__canvas = new fabric.Canvas('costas');

	var rect = new fabric.Rect({
		left: 20,
		top: 40,
		width: 100,
		height: 100,
		fill: 'blue',
		padding: 1
	});
	canvas.add(rect);

}());