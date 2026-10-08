const whiteSlides =
        document.querySelectorAll(".white-slide");

    const whiteNext =
        document.querySelector(".white-next");

    const whitePrev =
        document.querySelector(".white-prev");

    const whiteCurrent =
        document.getElementById("whiteCurrent");

    const whiteProgress =
        document.querySelector(
            ".white-slider-progress span"
        );


    let whiteIndex = 0;

    const whiteDuration = 5000;

    let whiteTimer;


    function showWhiteSlide(index) {

        whiteSlides.forEach(slide => {
            slide.classList.remove("active");
        });

        whiteSlides[index].classList.add("active");


        whiteCurrent.textContent =
            String(index + 1).padStart(2, "0");


        /* Restart progress */

        whiteProgress.style.transition = "none";

        whiteProgress.style.width = "0%";


        setTimeout(() => {

            whiteProgress.style.transition =
                `width ${whiteDuration}ms linear`;

            whiteProgress.style.width = "100%";

        }, 50);

    }


    function nextWhiteSlide() {

        whiteIndex++;

        if (whiteIndex >= whiteSlides.length) {
            whiteIndex = 0;
        }

        showWhiteSlide(whiteIndex);
    }


    function previousWhiteSlide() {

        whiteIndex--;

        if (whiteIndex < 0) {
            whiteIndex = whiteSlides.length - 1;
        }

        showWhiteSlide(whiteIndex);
    }


    function restartWhiteTimer() {

        clearInterval(whiteTimer);

        whiteTimer =
            setInterval(
                nextWhiteSlide,
                whiteDuration
            );
    }


    whiteNext.addEventListener("click", () => {

        nextWhiteSlide();

        restartWhiteTimer();

    });


    whitePrev.addEventListener("click", () => {

        previousWhiteSlide();

        restartWhiteTimer();

    });


    /* Start */

    showWhiteSlide(0);

    restartWhiteTimer();
