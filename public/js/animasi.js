document.addEventListener("DOMContentLoaded", function() {
    let valueDisplays = document.querySelectorAll(".num");
    let interval = 10000;

    valueDisplays.forEach((valueDisplay) => {
      let startValue = 0;
      let endValue = parseInt(valueDisplay.getAttribute("data-val"));
      let duration = Math.floor(interval / endValue);
      let counter = setInterval(function() {
        startValue += 1;
        valueDisplay.textContent = startValue.toString().padStart(3, '0'); // Ensuring the number is always 3 digits
        if (startValue === endValue) {
          clearInterval(counter);
        }
      }, duration);
    });
  });