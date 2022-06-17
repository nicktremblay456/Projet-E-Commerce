let parents = document.getElementsByClassName("col col-content");
let radioButtons = document.getElementsByName("radio");

radioButtons.forEach(radio => {
    radio.addEventListener('change', e => {
        console.log(e.path[1].innerText);
        filterMagasin(e.target.id);
    })
});

function filterMagasin(id) {
    for (let i = 0; i < parents.length; i++) {
        if (parents[i].getAttribute('name') === id) {
            parents[i].style.display = 'block'
        } else {
            parents[i].style.display = 'none';
        }
    }
}