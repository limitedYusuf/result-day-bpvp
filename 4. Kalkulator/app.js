const switchBtn = document.getElementById("switch");
const display = document.getElementById("display");
const input = document.querySelectorAll("input");
let value = "";

// dark mode toggle
switchBtn.addEventListener("click", () => {
  if (switchBtn.checked == true) {
    document.body.setAttribute("data-theme", "dark");
  } else {
    document.body.setAttribute("data-theme", "");
  }
});

input.forEach((e) => {
  e.addEventListener("click", (event) => {
    // condition if = input clicked
    if (event.target.value == "=") {
      if (value.length != 0) {
        const xhr = new XMLHttpRequest();
        xhr.open("GET", `calculate.php?data=${encodeURIComponent(value)}`, true);

        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
              display.value = xhr.responseText;
            }
        };

        xhr.send();
      }
    } else if (event.target.value == "C") {
      // empty display or clear value
      value = "";
      display.value = value;
    } else if (event.target.value == "switch") {
      
    } else {
      value += event.target.value;
      display.value = value;
    }

    if (!event.target.classList.contains("switch")) {
      event.target.classList.add("active");
      setTimeout(() => {
        event.target.classList.remove("active");
      }, 400)
    }
  });
});