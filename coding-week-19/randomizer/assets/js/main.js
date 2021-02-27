const list = [
    "Mohammed",
    "Yasmina",
    "Amine",
    "Salim",
    "Abdel",
    "Majda",
    "Bilal",
    "Laurie",
    "Mahad",
    "Saïd",
    "Camille",
    "Antoine",
    "Ayoub",
    "Yassin",
    "Cem",
    "Gauthier",
];

let min = 8 * list.length * 2;
let max = 8 * list.length * 6;
let counter;
let count;
let timer;

const app = new Vue({
    el: "#app",
    data: {
        index: -1,
        list: list,
        current: [...list],
        chosen: "",
    },
    created() {
        this.run();
    },
    methods: {
        run: function () {
            if (count < 80) {
                count -= 0.25;
            } else if (count < 160) {
                count -= 0.5;
            } else {
                count -= 1;
            }
            if ((counter - count) % 8 === 0) {
                //this.index = (this.index + 1) % this.current.length;
                let index = Math.floor(Math.random() * this.current.length);
                if (this.index === index) {
                    this.index = (index + 1) % this.current.length;
                } else {
                    this.index = index;
                }
            }
            if (count <= 0) {
                clearInterval(timer);
                setTimeout(() => {
                    this.chosen = this.current.splice(this.index, 1).shift();
                }, 1000);
            }
        },
        onRandom: function () {
            if (this.current.length === 1) {
                this.index = 0;
                this.run();
            } else {
                this.chosen = "";
                counter = count = Math.floor(Math.random() * (max - min)) + min;
                timer = setInterval(this.run, 1000 / 60);
            }
        },
        isActive: function (name) {
            return this.chosen === name;
        },
        isDeactivate: function (name) {
            return !this.isActive(name) && !this.current.includes(name);
        },
        isChosen: function (name) {
            return !this.chosen && this.current[this.index] === name;
        },
    },
});
