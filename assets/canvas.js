let slider;
function setup() {
    var canvasDiv = document.getElementById('newcanvas');
    var width = canvasDiv.offsetWidth;
    var myCanvas = createCanvas(width, 400);
    myCanvas.parent("newcanvas");
    background(10);
    myCanvas.style("margin-left:-10px");

    colorPicker = createColorPicker('#ed225d');
    colorPicker.position(85, height-50);
    colorPicker.style('background-color', 'black');

    slider = createSlider(1, 50, 5);
    slider.position(70, height);
    slider.style('width', '80px');
    slider.style('height', '2px');

    button = createButton('fill');
    button.position(70,height+50);
    button.mousePressed(fillscreen);

    button2 = createButton('clear');
    button2.position(70,height+120);
    button2.mousePressed(clearscreen);

    save = createButton('save');
    save.position(width+400,height-20);
    save.mousePressed(saveImage);


}

function mouseDragged(){
        stroke(colorPicker.color());
        strokeWeight(slider.value());
        line(mouseX, mouseY, pmouseX, pmouseY);
}
function mouseClicked() {
  stroke(colorPicker.color());
  strokeWeight(slider.value());
  point(mouseX, mouseY);
}

function clearscreen() {
  background(10);
}

function fillscreen(){
  background(colorPicker.color());
}


function saveImage() {
  saveCanvas('myCanvas', 'png');
}

