var pjs = new PointJS('2D', 640, 480, {
	backgroundColor : '#53769A' // optional
});
// pjs.system.initFullPage(); // for Full Page mode
// pjs.system.initFullScreen(); // for Full Screen mode (only Desctop)

var log    = pjs.system.log;     // log = console.log;
var game   = pjs.game;           // Game Manager
var point  = pjs.vector.point;   // Constructor for Point
var camera = pjs.camera;         // Camera Manager
var brush  = pjs.brush;          // Brush, used for simple drawing
var OOP    = pjs.OOP;            // Objects manager
var math   = pjs.math;           // More Math-methods
var levels = pjs.levels;         // Levels manager

// var key   = pjs.keyControl.initKeyControl();
// var mouse = pjs.mouseControl.initMouseControl();
// var touch = pjs.touchControl.initTouchControl();
// var act   = pjs.actionControl.initActionControl();

var width  = game.getWH().w; // width of scene viewport
var height = game.getWH().h; // height of scene viewport

pjs.system.setTitle('PointJS Game'); // Set Title for Tab or Window

// Game Loop
game.newLoopFromConstructor('myGame', function () {
	// Constructor Game Loop

	var ball = game.newCircleObject({
		positionC : point(game.getWH2().w, game.getWH2().h), // central position of text
		radius: 20,
		fillColor: '#EF7676'
	});

	var enemy = game.newCircleObject({
		positionC : point(100, 100), // central position of text
		radius: 20,
		fillColor: '#EFFFFF'
	});

	this.update = function () {
		// Update function

		game.clear(); // clear screen

		ball.draw(); // drawing text
		ball.move(point(0, 0));
		ball.transparent(0.005); // change alpha [0..>..1]

		enemy.draw();
		enemy.move(point(0, 1));

		enemy.draw();
		enemy.move(point(0, 1));

		enemy.draw();
		enemy.move(point(0, 1));

		enemy.draw();
		enemy.move(point(0, 1));

	};

	this.entry = function () { // optional
		log('myGame is started');
	};

	this.exit = function () { // optional
		log('myGame is stopped');
	};

});

game.startLoop('myGame');
