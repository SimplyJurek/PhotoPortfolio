const navSlide = () => {
    const dropDown = document.querySelector('.drop-down');
    const nav = document.querySelector('.nav-list');
    const navBar = document.querySelector('.nav-bar');
    
    //Toggle Nav
    dropDown.addEventListener('click', () => {
        nav.classList.toggle('nav-list-active');
        navBar.classList.toggle('nav-bar-active');

        dropDown.classList.toggle('toggle');
    });
}

    navSlide();