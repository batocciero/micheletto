function getPageId(pgId) {
    try {
        let temp = document.getElementById(pgId).id
        console.log("func getPageID",temp)
        return temp
    } catch(e) {
        // console.log(e)
        return "err"
    }

}

function getMyPage() {
    const pages = {
        "home": "lhome",
        "historia": "lhistoria"
    }

    for (let [key, linkers] of Object.entries(pages)) {
        if (key === getPageId(key)){
            return document.getElementById(linkers).classList.add("active")
        }
    }
}
getMyPage()
