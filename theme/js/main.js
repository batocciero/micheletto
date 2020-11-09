function getPageId(pgId) {
    try {
        let temp = document.getElementById(pgId).id
        console.log("func getPageID", temp)
        return temp
    } catch(e) {
        // console.log(e)
        return e
    }
}

function linkAdderActive() {
    const pages = {
        "home": "lhome",
        "historia": "lhistoria",
        "vinhos": "lprodutos",
        "uvas": "lprodutos",
        "mudasdeuvas": "lprodutos",
        "flores": "lprodutos",
        "emporio": "lprodutos",
        "cavalos": "lprodutos",
        "tecnico": "lturismo",
        "pedagogico": "lturismo",
        "melhoridade": "lturismo",
        "monitorado": "lturismo",
        "curiosidades": "lcuriosidades",
        "servicos": "lservicos",
        "eventos": "leventos"
    }

    for (let [key, linkers] of Object.entries(pages)) if (key === getPageId(key)) {
        return document.getElementById(linkers).classList.add("active")
    }
}
linkAdderActive()
