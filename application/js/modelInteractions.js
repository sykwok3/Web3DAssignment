//adapted from example code 'benskitchen.com'

function cokeScene() {
    nSwitch = 0;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function spriteScene() {
    nSwitch = 1;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function pepperScene() {
    nSwitch = 2;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

// var spinning = true;
var spinning = false;

function spin() {
    spinning = !spinning;
    // spinning = true;
    document.getElementById('model__animationTIMER').setAttribute('enabled', spinning.toString());
}

function stopRotation() {
    spinning = false;
    document.getElementById('model__animationTIMER').setAttribute('enabled', spinning.toString());
}

function animateModel() {
    if (document.getElementById('model__animationTIMER').getAttribute('enabled') != 'true')
        document.getElementById('model__animationTIMER').setAttribute('enabled', 'true');
    else
        document.getElementById('model__animationTIMER').setAttribute('enabled', 'false');
}

function wireFrame() {
    var e = document.getElementById('wire');
    e.runtime.togglePoints(true);
    e.runtime.togglePoints(true);
}

var lightOn = true;

function headLight() {
    lightOn = !lightOn;
    document.getElementById('model__NavInfo001').setAttribute('headlight', lightOn.toString());
    console.log(lightOn);
}

function omniLight() {
    lightOn = !lightOn;
    document.getElementById('model__Omni002').setAttribute('Omni002', lightOn.toString());
    console.log(lightOn);
}

function targetLight() {
    lightOn = !lightOn;
    document.getElementById('model__targetLight').setAttribute('headlight', lightOn.toString());
    console.log(lightOn);
}

function cameraFront() {
    document.getElementById('model__Camera001').setAttribute('bind', 'true');
}

function cameraBack() {
    document.getElementById('model__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft() {
    document.getElementById('model__Camera002').setAttribute('bind', 'true');
}

function cameraRight() {
    document.getElementById('model__Camera003').setAttribute('bind', 'true');
}

function cameraTop() {
    document.getElementById('model__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom() {
    document.getElementById('model__CameraBottom').setAttribute('bind', 'true');
}