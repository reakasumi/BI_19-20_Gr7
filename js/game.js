var SnakeGame      = SnakeGame      || {};
var Keyboard  = Keyboard  || {}; 
var HolderOfContents = HolderOfContents || {};

Keyboard.Keymap = {
  37: 'left',
  38: 'up',
  39: 'right',
  40: 'down'
};

Keyboard.ControllerEvents = function() { 
  var self      = this;
  this.pressKey = null;
  this.keymap   = Keyboard.Keymap;
  
  document.onkeydown = function(event) {
    self.pressKey = event.which;
  };
  
  this.getKey = function() {
    return this.keymap[this.pressKey];
  };
};


HolderOfContents.Field = function(canvas, parameters) {  
  
  this.keyEvent  = new Keyboard.ControllerEvents();
  this.width     = canvas.width;
  this.height    = canvas.height;
  this.length    = [];
  this.food      = {};
  this.score     = 0;
  this.direction = 'right';
  this.parameters      = {
    cw   : 10,
    size : 5,
  };

  if (typeof parameters == 'object') {
    for (var key in parameters) {
      if (parameters.hasOwnProperty(key)) {
        this.parameters[key] = parameters[key];
      }
    }
  }
  
};


HolderOfContents.Snake = function(canvas, parameters) {
  
  this.field = new HolderOfContents.Field(canvas, parameters);
  
  this.initSnake = function() {  
    for (var i = 0; i < this.field.parameters.size; i++) {
      // Adding cells on snake body
      this.field.length.push({x: i, y:0});
		}
	};
  
  // initial value
  this.initSnake();
 
  this.initFood = function() {
    this.field.food = {
			x: Math.round(Math.random() * (this.field.width - this.field.parameters.cw) / this.field.parameters.cw), 
			y: Math.round(Math.random() * (this.field.height - this.field.parameters.cw) / this.field.parameters.cw), 
		};
	};
  
 
  this.initFood();

  this.restart = function() {
    this.field.length            = [];
    this.field.food              = {};
    this.field.score             = 0;
    this.field.direction         = 'right';
    this.field.keyEvent.pressKey = null;
    this.initSnake();
    this.initFood();
  };
};


SnakeGame.Draw = function(context, snake) {

  this.drawField = function() {
      
    var keyPress = snake.field.keyEvent.getKey(); 
    if (typeof(keyPress) != 'undefined') {
      snake.field.direction = keyPress;
    }
    
    // the snake body , with shadows behind

    var grd = context.createRadialGradient(75, 50, 5, 90, 60, 100);
    grd.addColorStop(0, "#333");
    grd.addColorStop(1, "#111");
    context.fillStyle = grd;
	context.fillRect(0, 0, snake.field.width, snake.field.height);
		
    var horizontal = snake.field.length[0].x;
		var vertical = snake.field.length[0].y;
	
    switch (snake.field.direction) {
      case 'right':
        horizontal++;
        break;
      case 'left':
        horizontal--;
        break;
      case 'up':
        vertical--;
        break;
      case 'down':
        vertical++;
        break;
    }
    
    // Check Collision
    if (this.collision(horizontal, vertical) == true) {
      snake.restart();
      return;
    }
    

    if (horizontal == snake.field.food.x && vertical == snake.field.food.y) {
      var tail = {x: horizontal, y: vertical};
      snake.field.score++;
      snake.initFood();
    } else {
      var tail = snake.field.length.pop();
      tail.x   = horizontal;
      tail.y   = vertical;	
    }
    snake.field.length.unshift(tail); 
    
    for (var i = 0; i < snake.field.length.length; i++) {
      var cell = snake.field.length[i];
      this.drawCell(cell.x, cell.y);
    }
    
    
    this.drawCell(snake.field.food.x, snake.field.food.y);
    
    //score
    var str = 'Score: ' 
    context.fillText(str.toUpperCase() + snake.field.score, 5, (snake.field.height - 5));
  };
  
 
  this.drawCell = function(x, y) {
    context.fillStyle = 'rgb(170, 170, 170)';
    context.beginPath();
    context.arc((x * snake.field.parameters.cw + 6), (y * snake.field.parameters.cw + 6), 4, 0, 2*Math.PI, false);    
    context.fill();
  };
  
  // collision and the score to win
  this.collision = function(horizontal, vertical) {  
    if (horizontal == -1 || horizontal == (snake.field.width / snake.field.parameters.cw) || vertical == -1 || vertical == (snake.field.height / snake.field.parameters.cw)) {
      return true;
    }
    else if( snake.field.score == 3){
            window.alert("Congrats,you have reached the required score!!");
        return true;
    }
    return false;    
	}
};


SnakeGame.Snake = function(elementId, parameters) {
  var canvas   = document.getElementById(elementId);
  var context  = canvas.getContext("2d");
  var snake    = new HolderOfContents.Snake(canvas, parameters);
  var gameDraw = new SnakeGame.Draw(context, snake);
 
  setInterval(function() {gameDraw.drawField();}, snake.field.parameters.velocity);
};



window.onload = function() {
  var snake = new this.SnakeGame.Snake('field', {velocity: 100, size: 4});
};