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
  "eventos": "leventos",
  "quiosque": "lquiosque"
}

function getPageId(pgId) {
  try {
    let temp = document.getElementById(pgId).id
    console.log("func getPageID", temp)
    return temp
  } catch (e) {
    // console.log(e)
    return e
  }
}

function activeAdder() {
  // Add the black color on links while the navigation
  for (let [key, linkers] of Object.entries(pages)) if (key === getPageId(key)) {
    return document.getElementById(linkers).classList.add("active")
  }
}

// Add the fixed footer only on the home page
function footerFixed() {
  for (let [key, linkers] of Object.entries(pages)) if (key === getPageId(key)) {
    if (key === "home") {
      console.log(linkers)
      return document.getElementById("footer").classList.add("footer-fixed")
    }
  }
}

const micheletto = () => {
  return [
    activeAdder(),
    footerFixed()
  ]
}

micheletto()
