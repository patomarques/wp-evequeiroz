window.addEventListener('load', function () {
    //console.log("It's loaded!");
    const imgs = document.querySelectorAll(".content-lazy-loading a")

    scrolling()
    window.onscroll = scrolling

    function scrolling() {
        const viewportHeight = window.innerHeight
        imgs.forEach(img => {
            if (img.getBoundingClientRect().top < viewportHeight) {
                img.style.animationPlayState = "running"
            }
        })
    }
});