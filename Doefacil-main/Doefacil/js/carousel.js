window.addEventListener('load', function() {
    var carousel = document.querySelector('.carousel');
    carousel.classList.add('active');

    var images = carousel.querySelectorAll('img');
    var currentImageIndex = 0;

    function showImage(index) {
        for (var i = 0; i < images.length; i++) {
            images[i].classList.remove('active');
        }
        images[index].classList.add('active');
    }

    setInterval(function() {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        showImage(currentImageIndex);
    }, 100);
});