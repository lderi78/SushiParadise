let canvas = document.getElementById("canvas");
let ctx = canvas.getContext("2d");
let interval;
let img;
let x=50;
let y = 50;
let angle = 0;
function init() {
    img = new Image();
    img.src = "assets/sushi450.png";
    interval = setInterval(run, 1000 / 60); 
}
function draw(ctx) {
    ctx.save();
    ctx.translate(x + img.width / 2, y + img.height / 2);
    ctx.rotate((Math.PI / 180) * angle);
    ctx.drawImage(img, -img.width / 2, -img.height / 2);
    ctx.restore();
}
function run() {
    angle += 0.2;
    if (angle > 359) {
        angle = 0; 
    }
    ctx.clearRect(0, 0, canvas.clientWidth, canvas.clientHeight);
    draw(ctx);
}

init();
