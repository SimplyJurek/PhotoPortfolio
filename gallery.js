const thumbGrid = document.querySelector(".thumbnails-gallery");
const template = document.querySelector(".thumbnail-template");
const slidePlayer = document.querySelector(".slide-player")
let thumbs = [];

class Thumbnail {
    constructor(template,id) {
        this.clone = template.content.cloneNode(true);
        this.id = id;
    }
    getClone = () => this.clone;
    getId = () => this.id;
}

for( var i = 0; i < 100; i++) {
    thumbs[i] = new Thumbnail(template,i);
    thumbGrid.appendChild(thumbs[i].getClone());
}



