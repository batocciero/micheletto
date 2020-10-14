# Vinhos Micheletto

### Deps:
* Composer
* Node

`npm install`
`composer update`

##### Fav icon
`<link rel="icon" href="<? url("/theme/img/Logo_Fav.svg.png"); ?>" />`

## My old javascript active adder, just works on single pages

```js
function whoIsActive() {
    let IDs = ["lhome", "lhistoria", "lprodutos", "lturismo", "lservicos", "leventos", "lcuriosidades"]

    for (let i = 0; i < IDs.length; i++) {
        if (document.getElementById(IDs[i]).classList.contains("active") === true) {
            return IDs[i]
        }
    }
}

function addClass (idName) {

    let x = document.getElementById(idName)
    if (x === null) {
        console.log("Null class on addClass()")
        return 0
    } else {
        if (whoIsActive() === idName) {
            console.log("Tudo Suave então")
        } else {
            removeClass(whoIsActive())
            let x = document.getElementById(idName)
            x.classList.add("active")
        }
    }
}

function removeClass (idName) {
    let x = document.getElementById(idName)
    if (x === null) {
        console.log("Null class on addClass()")
        return 0
    } else {
        x.classList.remove("active")
    }
}
```