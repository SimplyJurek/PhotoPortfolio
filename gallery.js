const thumbGrid = document.querySelector(".thumbnails-gallery");
const template = document.querySelector(".thumbnail-template");
const slidePlayer = document.querySelector(".slide-player");

//NUMBER OF IMAGES IN THE GALLLERY

const numOfImg = 20;

//-------------------------------

let thumbs = [];

class Thumbnail {
    constructor(template,id) {
        this.clone = template.content.cloneNode(true);
        this.id = id;
    }
    getClone = () => this.clone;
    getId = () => this.id;
}
imgArr = new Array();

for( var i = 1; i <= numOfImg; i++) {
    imgArr[i] = "Gallery/" + i + ".jpeg";
}

for( var i = 1; i <= numOfImg; i++) {
    thumbs[i] = new Thumbnail(template,i);
    thumbGrid.appendChild(thumbs[i].getClone());
}

const imgSelector = document.querySelectorAll(".thumbnail-img");

for(var i = 0; i < numOfImg; i++) {
    imgSelector[i].src = imgArr[i+1];
}
    







