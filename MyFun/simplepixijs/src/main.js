require("./styles/main.less");

// The application will create a renderer using WebGL, if possible,
// with a fallback to a canvas render. It will also setup the ticker
// and the root stage PIXI.Container.
import * as PIXI from 'pixi.js';

var app = new PIXI.Application();

// The application will create a canvas element for you that you
// can then insert into the DOM.

// var appCanvas = document.getElementById('app');
var parentElem = document.body;

parentElem != null? document.body.appendChild(app.view):'';
// load the texture we need
PIXI.loader.add('walk1', 'src/img/Walk (1).png').load(function(loader, resources) {

    // This creates a texture from a 'bunny.png' image.
    var bunny = new PIXI.Sprite(resources.walk1.texture);

    // Setup the position of the bunny
    bunny.x = app.renderer.width / 2;
    bunny.y = app.renderer.height / 2;

    // Rotate around the center
    bunny.anchor.x = 0.5;
    bunny.anchor.y = 0.5;

    // Add the bunny to the scene we are building.
    app.stage.addChild(bunny);

    // Listen for frame updates
    app.ticker.add(function() {
         // each frame we spin the bunny around a bit
        bunny.rotation += 0.01;
    });
});