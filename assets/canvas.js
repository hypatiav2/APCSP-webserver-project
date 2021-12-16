let slider;
function setup() {
    var myCanvas = createCanvas(1200, 400);
    myCanvas.parent("newcanvas");
    background(10);
    fill(20);
    rect(0, 0, 200, height+100);
    colorPicker = createColorPicker('#ed225d');
    colorPicker.position(60, height-50);
    colorPicker.style('background-color', 'black');
    slider = createSlider(1, 20, 5);
    slider.position(50, height);
    slider.style('width', '80px');
    slider.style('background-color', 'black');
    slider.style('border', 'solid 1px white');
    slider.style('height', '2px');
}

function mouseDragged(){
    if (mouseX >= 210) {
        stroke(colorPicker.color());
        strokeWeight(slider.value());
        line(mouseX, mouseY, pmouseX, pmouseY);
    }
}
