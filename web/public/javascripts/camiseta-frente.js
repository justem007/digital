(function() {

	var canvas = this.__canvas = new fabric.Canvas('frente');

	var rect = new fabric.Rect({
		left: 30, top: 50,
		width: 100,	height: 100,
		fill: 'red',
		padding: 1
	});
	canvas.add(rect);

	var circle = new fabric.Circle({
		left: 20,
		top: 40,
		radius: 20,
		fill: 'blue',
		padding: 1
	});
	canvas.add(circle);

	var text = "Novo texto !";

	var texto = new fabric.Text(text,{
		fontFamily: 'Comic Sans',
		fontSize: 20,
		fontWeight: 'bold',
		textShadow: 'rgba(0,0,0,0.3) 5px 5px 5px',
		fill: 'green',
		left: 20,
		top: 30
	});
	canvas.add(texto);

	var ellipse1 = new fabric.Ellipse({
        rx: 80,
        ry: 40,
        fill: '#800080',
        stroke: '#555',
        strokeWidth: 5,
        angle: 30
      });

      var ellipse2 = new fabric.Ellipse({
        rx: 80,
        ry: 40,
        fill: '#FFFF00',
        stroke: '#555',
        strokeWidth: 5,
        angle: -1
      });

      var textes = new fabric.Text('I am a group!', {
        fill: '#333',
        fontFamily: 'Helvetica',
        fontSize: 17
      });

      var group = new fabric.Group([ ellipse1, ellipse2, textes ], {
        left: 30,
        top: 30,
        angle: -5
      });
      canvas.add(group);

}());