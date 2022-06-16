let sliders = document.getElementsByName('quantitySlider');
let outputs = document.getElementsByName('quantityText');

for (let i = 0; i < outputs.length; i++) {
    outputs[i].innerHTML = sliders[i].value;
}

for (let i = 0; i < sliders.length; i++) {
    sliders[i].oninput = () => {
        outputs[i].innerHTML = sliders[i].value;
    };
}