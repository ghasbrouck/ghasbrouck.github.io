function secretForm(form) {
    var secret = form.input.value;
    alert ("I won't tell anyone that " + secret);
}

function changeColor() {

    var elements = document.querySelectorAll(".element");
			for (var i = 0; i < elements.length; i++) {
				if(elements[i].style.backgroundColor==='white') {
                    elements[i].style.background = "#333";
                } else {
                    elements[i].style.backgroundColor ="white";
                }
			}
    var container = document.querySelector(".container");

    if (container.style.backgroundColor === 'white') {
        container.style.backgroundColor = '#222';
    } else {
        container.style.backgroundColor = 'white';
    }

    var body = document.querySelector("body");
    if(body.style.backgroundColor==='white') {
        body.style.background ="#333";
    } else {
        body.style.backgroundColor ="white";
    }
  }
  