export default class Slider {
    constructor(element) {
        this.element = element;
        this.itemsScroll = 1;
        this.index = 0;
        this.newIndex = 0;
        this.time = 5000;
        this.transition = 33;
        this.inner = null;
        this.children = [];
        this.options = {};
        this.moveInterval = null;
        this.setup();
    }

    setup() {
        this.getOptions();
        this.inner = this.element.querySelector(".slider-inner");
        this.children = this.element.querySelectorAll(".slider-item");
        window.addEventListener("resize", this.fixSize.bind(this));
        this.nextSlide();
        if (this.options.loop) {
            this.setupLoop();
        }
        // this.btnPrev = this.element.querySelector(".carousel-control-prev");
        // this.btnNext = this.element.querySelector(".carousel-control-next");
        // this.btnNext.addEventListener("click", () => {
        //     if (this.index !== this.numItems() - 1) {
        //         console.log(this.index, this.numItems());
        //         this.newIndex =
        //             (this.newIndex + this.itemsScroll) % this.numItems();
        //         this.moveSlide();
        //     }
        // });
        // this.btnPrev.addEventListener("click", () => {
        //     if (this.index !== 0) {
        //         this.newIndex =
        //             (this.newIndex - this.itemsScroll) % this.numItems();
        //         this.moveSlide();
        //     }
        // });
        this.onCompleteScroll();
    }

    getOptions() {
        const value = this.element.getAttribute("data-loop");
        this.options.loop = value === "true";
    }

    itemsVisible() {
        return Math.floor(window.innerWidth / this.itemWidth());
    }

    setupLoop() {
        this.inner.appendChild(this.children[0].cloneNode(true));
        this.children = this.element.querySelectorAll(".slider-item");
    }

    nextSlide() {
        this.newIndex = (this.newIndex + this.itemsScroll) % this.numItems();
        this.moveSlideInterval();
    }

    previousSlide() {
        this.newIndex = (this.newIndex - this.itemsScroll) % this.numItems();
        this.moveSlideInterval();
    }

    moveSlideInterval() {
        setTimeout(this.moveSlide.bind(this), this.time);
    }

    moveSlide() {
        this.moveInterval = setInterval(
            this.updateScroll.bind(this),
            1000 / 60
        );
    }

    numItems() {
        return this.children.length;
    }

    fixSize() {
        this.inner.scrollLeft = this.displayX();
    }

    itemWidth() {
        return this.children[0].offsetWidth;
    }

    displayX() {
        return this.newIndex * this.itemWidth();
    }

    updateScroll() {
        this.processScroll();
        if (this.isScrollRight()) {
            if (this.displayX() <= this.inner.scrollLeft) {
                this.onCompleteScroll();
            }
        }
        if (this.isScrollLeft()) {
            if (this.displayX() >= this.inner.scrollLeft) {
                this.onCompleteScroll();
            }
        }
    }

    isScrollRight() {
        return this.index < this.newIndex;
    }

    isScrollLeft() {
        return this.index > this.newIndex;
    }

    onCompleteScroll() {
        this.index = this.newIndex;
        this.inner.scrollLeft = this.displayX();
        clearInterval(this.moveInterval);
        setTimeout(() => this.nextSlide(), this.time);
        if (this.isTerminate()) {
            this.newIndex = this.numItems() - 1;
            this.onLoop();
        }
        // this.btnPrev.style.display = "block";
        // this.btnNext.style.display = "block";
        // if (this.index === 0) {
        //     this.btnPrev.style.display = "none";
        // }
        // if (this.index === this.numItems() - 1) {
        //     this.btnNext.style.display = "none";
        // }
    }

    onLoop() {
        if (this.options.loop) {
            this.inner.scrollLeft = 0;
            this.index = this.newIndex = 0;
        }
    }

    isTerminate() {
        return this.index + this.itemsVisible() === this.numItems();
    }

    processScroll() {
        const s = this.isScrollRight() ? 1 : -1;
        const d = this.itemWidth(); //* Math.abs(this.index - this.newIndex);
        this.inner.scrollLeft += (d / this.transition) * s;
    }
}
