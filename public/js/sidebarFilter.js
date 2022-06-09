let parent = document.getElementsByClassName("col col-content");
let radioButtons = document.getElementsByName("radio");
radioButtons.forEach(radio => {
    radio.addEventListener('change', e => {
        filterMagasin(e.target.id);
    })
});

function filterMagasin(id) {
    for (let i = 0; i < parent.length; i++) {
        if (parent[i].getAttribute('name') === id) {
            parent[i].style.display = 'block'
        } else {
            parent[i].style.display = 'none';
        }
    }
}