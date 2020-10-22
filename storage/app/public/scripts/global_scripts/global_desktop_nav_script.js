let box = $('#d-desktop_nav-container');
let desktopNavOverlay = $('#d-desktop-nav-overlay');
let menuItems = $('.d-desktop-nav-item');
let prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    let currentScrollPos = window.pageYOffset;
    if(currentScrollPos === 0){
        //console.log("Top")
        desktopNavOverlay.addClass('d-desktop-nav-overlay-hide');
        menuItems.removeClass('d-desktop-nav-item-black-color');
    }

    if (prevScrollpos > currentScrollPos) {
        //console.log("Scroll top")
        box.removeClass('d-desktop-nav-container-hide')
        if(currentScrollPos !== 0){
            desktopNavOverlay.removeClass('d-desktop-nav-overlay-hide');
            menuItems.addClass('d-desktop-nav-item-black-color');
        }
    } else {
        box.addClass('d-desktop-nav-container-hide')
    }
    prevScrollpos = currentScrollPos;
}
