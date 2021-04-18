import * as THREE from "../../../node_modules/three/build/three.module.js";
import Room from "../core/room.js";
import Scene from "../core/scene.js";
import Nintendo64 from "../objects/nintendo64.js";
import Ikea from "../objects/ikea.js";
import Board from "../objects/board.js";
import Bilal from "../objects/bilal.js";
import Bed from "../objects/bed.js";
import Arias from "../objects/faith_romance.js";
import BatenKaitos from "../objects/baten_kaitos.js";
import THT from "../objects/tht.js";
import Zelda2 from "../objects/zelda2.js";
import Arcade from "../objects/arcade.js";
import RoomJs from "../objects/room_js.js";
import Contact from "../objects/contact.js";
import Singh from "../objects/singh.js";

export default class Scene_Main extends Scene {
    // constructor() {
    //     super();
    // }

    setupLight() {
        super.setupLight();
        this.directionalLight = new THREE.DirectionalLight(0xe4692e, 0.8);
        this.directionalLight.position.set(2, 2, 4);
        this.directionalLight.shadow.mapSize.width = 2048;
        this.directionalLight.shadow.mapSize.height = 2048;
        this.add(this.directionalLight);
        this.directionalLight.castShadow = true;

        this.pointLight = new THREE.PointLight(0xe1e4e3, 0.25, 5);
        this.pointLight.position.set(0, 1, 0);
        this.add(this.pointLight);
    }

    create() {
        super.create();
        this.createGameObjects();
    }

    createGameObjects() {
        this.createRoom();
        this.createIkea();
        this.createBigN();
        this.createBoard();
        this.createBilal();
        this.createArias();
        this.createBed();
        this.createBatenKaitos();
        this.createTHT();
        this.createZelda2();
        this.createArcade();
        this.createRoomJs();
        this.createContact();
        this.createBook();
    }

    createRoom() {
        this.room = new Room();
        this.add(new Room());
        // this.floor = new Floor();
        // this.add(this.floor);
    }

    createIkea() {
        this.ikea = new Ikea();
        this.ikea.translateX(-0.5);
        this.ikea.translateY(0.35);
        this.ikea.translateZ(-0.78);
        this.ikea.rotation.set(0, Math.PI / 2, 0);
        this.add(this.ikea);
    }

    createBigN() {
        this.bigN = new Nintendo64();
        this.bigN.translateY(0.51 + 0.34);
        this.bigN.translateX(-1.3);
        this.bigN.translateZ(-0.35 - 0.1);
        this.add(this.bigN);
    }

    createBoard() {
        this.board = new Board();
        this.add(this.board);
        this.board.translateZ(-0.985);
        this.board.translateX(-0.4);
        this.board.translateY(1.35);
    }

    createBilal() {
        this.bilal = new Bilal();
        this.bilal.translateY(0.79);
        this.bilal.translateX(-0.53);
        this.bilal.translateZ(-0.9);
        this.bilal.rotation.set(0, 0, 0);
        this.add(this.bilal);
    }

    createArias() {
        this.arias = new Arias();
        this.arias.translateY(0.5);
        this.arias.translateX(-1.12);
        this.arias.translateZ(-0.7);
        // this.arias.scale.set(0.9, 0.9, 0.9);
        this.arias.scale.set(0.35, 0.35, 0.35);
        this.add(this.arias);
    }

    createBed() {
        this.bed = new Bed();
        //this.bed.translateY(0.79);
        this.bed.translateX(0.94);
        // this.bed.translateZ(-0.9);
        //this.bed.rotation.set(0, Math.PI / 2, 0);
        this.bed.scale.set(0.95, 0.8, 0.9);
        this.add(this.bed);
    }

    createBatenKaitos() {
        this.batenKaitos = new BatenKaitos();
        this.add(this.batenKaitos);
        this.batenKaitos.translateZ(-0.99);
        this.batenKaitos.translateY(1.2);
        this.batenKaitos.translateX(0.94);
    }

    createTHT() {
        this.tht = new THT();
        this.add(this.tht);
        this.tht.translateZ(0.4);
        this.tht.translateY(1);
        this.tht.translateX(1.448);
        this.tht.rotation.set(0, -Math.PI / 2, 0);
    }

    createZelda2() {
        this.zelda2 = new Zelda2();
        this.add(this.zelda2);
        this.zelda2.translateY(0.5);
        this.zelda2.translateX(-0.71);
        this.zelda2.translateZ(-0.73);
        this.zelda2.scale.set(1, 1, 1);
    }

    createArcade() {
        this.arcade = new Arcade();
        this.add(this.arcade);
        this.arcade.translateY(0.5);
        this.arcade.translateX(-0.3);
        this.arcade.translateZ(-0.7);
    }

    createRoomJs() {
        this.roomJs = new RoomJs();
        this.add(this.roomJs);
        this.roomJs.scale.set(0.06, 0.06, 0.06);
        this.roomJs.translateY(0.5);
        this.roomJs.translateX(0.1);
        this.roomJs.translateZ(-0.7);
        this.roomJs.rotation.set(0, Math.PI / 4, 0);
        // this.floor = new Floor();
        // this.add(this.floor);
    }

    createContact() {
        this.contact = new Contact();
        this.add(this.contact);
        this.contact.translateY(1.2);
        this.contact.translateX(1.35);
        this.contact.translateZ(-0.3);
        this.contact.rotation.set(0, -Math.PI / 2, 0);
    }

    createBook() {
        this.book = new Singh();
        this.add(this.book);
        this.book.translateY(0.815);
        this.book.translateX(0.2);
        this.book.translateZ(-0.83);
        this.book.rotation.set(0, -0.3, 0);
        this.book.scale.set(0.8, 0.8, 0.8);
    }
}
