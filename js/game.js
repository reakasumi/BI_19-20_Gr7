keyPressed = function () {

}

var Player = function(x,y,size,speed)
{
    this.x=x;
    this.y=y;
    this.size=size;
    this.speed=speed;
    this.update=function(){

        if(keyCode === UP){
            this.y = this.y - this.speed;
        }
        if(keyCode === DOWN){
            this.y = this.y + this.speed;
        }
        if(keyCode === LEFT){
            this.x = this.x - this.speed;
        }
        if(keyCode === RIGHT){
            this.x = this.x + this.speed;
        }

        noStroke();
        // FileList(0,255,0);
        fill(33, 232, 230);
        ellipse(this.x,this.y,this.size,this.size);
    };
};

var player = new Player (100, 100, 49, 1);

var draw = function(){
    player.update();
};