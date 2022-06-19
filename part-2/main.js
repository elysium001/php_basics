document.addEventListener("DOMContentLoaded", function() {

    const tempContainerEl = document.querySelector('.temp-calculator');
    const fahrenheit = tempContainerEl.querySelector('#fahrenheit');
    const calcButton = tempContainerEl.querySelector('button');
    const celciusEl = tempContainerEl.querySelector('#celcius');

    calcButton.addEventListener( 'click', function(e){
        let celciusVal = (fahrenheit.value - 32) * (5/9);
        celciusVal = Math.round(celciusVal * 100) / 100

        celciusEl.innerHTML = `${celciusVal} celcius`;
    });


});