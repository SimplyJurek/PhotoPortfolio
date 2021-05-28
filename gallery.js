const thumbGrid = document.querySelector(".thumbnails-gallery");
const template = document.querySelector(".thumbnail-template");
const slidePlayer = document.querySelector(".slide-player");
const slideImg = document.querySelector(".slide-img");
const closePlayerBtn = document.querySelector(".close-player")
const body = document.querySelector("body");
//NUMBER OF IMAGES IN THE GALLLERY

const numOfImg = 20;

//-------------------------------

let thumbs = []; // Array for holding clones of template

class Thumbnail {
    constructor(template,id) {
        this.clone = template.content.cloneNode(true);
        this.id = id;
    }
    getClone = () => this.clone;
    getId = () => this.id;
}

imgArr = new Array(); // Array for holding URLs of images as strings
for( var i = 1; i <= numOfImg; i++) {
    imgArr[i] = "Gallery/" + i + ".jpeg";
}
//filling thumbs[] with clones
for( var i = 1; i <= numOfImg; i++) { 
    thumbs[i] = new Thumbnail(template,i);
    thumbGrid.appendChild(thumbs[i].getClone());
}
// selecting all img
const imgSelector = document.querySelectorAll(".thumbnail-img");
// changinng their src property to URL from imgArr

var currPhoto;

function togglePlayer(url) {
    slidePlayer.classList.toggle('slide-player-active');
    closePlayerBtn.classList.toggle('close-player-active');
    // body.classList.toggle('body-slide'); no scroll locking bcs i dont know how to resolve some problems it creates
    currPhoto = url;
    slideImg.src = currPhoto;
}

for(var i = 0; i < numOfImg; i++) {
    imgSelector[i].src = imgArr[i+1];
}
console.log(imgArr);

function next() {
    if(currPhoto[31] === '.') {
        slideImg.src = "Gallery/" +( parseInt(currPhoto[30]) + 1) + ".jpeg"
        currPhoto = slideImg.src;
    }
    else if(currPhoto[32] === '.') {
        slideImg.src = "Gallery/" +( parseInt(currPhoto[30])*10 + parseInt(currPhoto[31]) + 1) + ".jpeg"
        currPhoto = slideImg.src;
    }
}

function prev() {
    if(currPhoto[31] === '.') {
        slideImg.src = "Gallery/" +( parseInt(currPhoto[30]) - 1) + ".jpeg"
        currPhoto = slideImg.src;
    }
    else if(currPhoto[32] === '.') {
        slideImg.src = "Gallery/" +( parseInt(currPhoto[30])*10 + parseInt(currPhoto[31]) - 1) + ".jpeg"
        currPhoto = slideImg.src;
    }
}




