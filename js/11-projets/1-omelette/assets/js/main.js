import Person from "./person.js"
import Place from "./place.js"
import Ingredient from "./ingredient.js"
import { Bowl, Stove } from "./recipes.js"

var $actor = null;
var $places = {};
var $knife = null;
var $bowl = null;
var $stove = null;
var $dataIngredients = null;

window.onload = async function () {
    createObjects();
    await loadData();
    const iterator = omeletStory();
    nextStep(iterator);
}

function nextStep(iterator) {
    setTimeout(() => {
        let res = iterator.next();
        if (!res.done) {
            nextStep(iterator);
        }
    }, 1000);
}

function createObjects() {
    createKnife();
    createRecipes();
    createHouse();
    createGrocery();
    createActor();
}

function createKnife() {
    $knife = { name: "kitchen knife", action: "cut" };
}

function createRecipes() {
    $bowl = new Bowl("bol");
    $stove = new Stove("poele");
}

function createActor() {
    $actor = new Person("bilal", $places["house"], 15);
}

function createHouse() {
    $places["house"] = new Place("maison");
}

function createGrocery() {
    const createCart = name => ({ "type": name, "content": [] });
    $places["grocery"] = new Place("epicerie", [
        createCart("panier1"),
        createCart("panier2"),
        createCart("panier3")
    ])
}

async function loadData() {
    return fetch("./assets/data/ingredients.json")
        .then(response => response.json())
        .then(json => {
            $dataIngredients = json;
            setupGrocery();
        })
}

function setupGrocery() {
    for (let data of $dataIngredients) {
        const ingredient = new Ingredient(data["name"], data["price"], data["state"])
        $places["grocery"].addContent(ingredient);
    }
}

function* omeletStory() {
    yield $actor.toMove($places["house"]);
    yield $actor.toMove($places["grocery"]);
    yield $actor.leftTakeItem();
    yield* takeAllContent();
    yield* payAllContent();
    yield $actor.toMove($places["house"]);
    yield* $actor.dropCart($bowl);
    yield $actor.toMove($places["grocery"]);
    yield $actor.leftDropItem();
    yield $actor.toMove($places["house"]);
    yield* cutAll();
    yield $bowl.mix("omelette");
    yield* dropBowl();
    yield $stove.food();
}

function* takeAllContent() {
    for (let ingredient of $places["grocery"].content()) {
        yield $actor.addInCart(ingredient);
    }
}

function* payAllContent() {
    for (let article of $actor.cartContent()) {
        yield $actor.pay(article);
    }
    yield console.log(`il vous reste ${$actor.money.toFixed(2)} euros!`);
}

function* cutAll() {
    for (let ingredient of $bowl.content()) {
        yield $actor.cut(ingredient, $knife);
    }
}

function* dropBowl() {
    while ($bowl.content().length > 0) {
        yield $stove.addContent($bowl.shift());
    }
}
