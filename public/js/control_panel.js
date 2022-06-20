let BtnAjouts = document.getElementById("BtnAdd");
let BtnRemove = document.getElementById("BtnRemove");
let BtnAccess = document.getElementById("BtnAccess");
let BtnModif = document.getElementById("BtnItemModif")
let BtnModifSubmit = document.getElementById('BtnModifSubmit')

BtnAjouts.addEventListener('click', e => {
    document.getElementById('itemAddition').style.display='block'
    document.getElementById('itemSuppression').style.display='none'
    document.getElementById('AccessMgmt').style.display='none'
    document.getElementById('selectItemModif').style.display='none'
    document.getElementById('ItemFields').style.display='none'
    BtnAjouts.setAttribute('class', 'nav-link active')
    BtnRemove.setAttribute('class', 'nav-link')
    BtnAccess.setAttribute('class', 'nav-link')
    BtnModif.setAttribute('class', 'nav-link')
})


BtnRemove.addEventListener('click', e => {
    document.getElementById('itemSuppression').style.display='block'
    document.getElementById('itemAddition').style.display='none'
    document.getElementById('selectItemModif').style.display='none'
    document.getElementById('AccessMgmt').style.display='none'
    document.getElementById('ItemFields').style.display='none'
    BtnRemove.setAttribute('class', 'nav-link active')
    BtnAjouts.setAttribute('class', 'nav-link')
    BtnAccess.setAttribute('class', 'nav-link')
    BtnModif.setAttribute('class', 'nav-link')
})

BtnAccess.addEventListener('click', e => {
    document.getElementById('AccessMgmt').style.display='block'
    document.getElementById('itemSuppression').style.display='none'
    document.getElementById('itemAddition').style.display='none'
    document.getElementById('selectItemModif').style.display='none'
    document.getElementById('ItemFields').style.display='none'
    BtnAccess.setAttribute('class', 'nav-link active')
    BtnRemove.setAttribute('class', 'nav-link')
    BtnAjouts.setAttribute('class', 'nav-link')
    BtnModif.setAttribute('class', 'nav-link')
})

BtnModif.addEventListener('click', e => {
    document.getElementById('selectItemModif').style.display='block'
    document.getElementById('AccessMgmt').style.display='none'
    document.getElementById('itemSuppression').style.display='none'
    document.getElementById('itemAddition').style.display='none'
    document.getElementById('ItemFields').style.display='none'
    BtnModif.setAttribute('class', 'nav-link active')
    BtnAccess.setAttribute('class', 'nav-link')
    BtnRemove.setAttribute('class', 'nav-link')
    BtnAjouts.setAttribute('class', 'nav-link')
})

BtnModifSubmit.addEventListener('click', e => {
    document.getElementById('selectItemModif').style.display='none'
    document.getElementById('ItemFields').style.display='block'
})