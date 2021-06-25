var engin=0;
var engin2=0;
var engin3=0;
var engin4;
var engin5;
var engin6;




  var slider = document.getElementById("engin1");
  var output = document.getElementById("e1value");
  output.innerHTML = slider.value;
  slider.oninput = function() {
    engin = this.value;
    output.innerHTML = this.value;

  }


  var slider2 = document.getElementById("engin2");
  var output2 = document.getElementById("e2value");
  output2.innerHTML = slider2.value;
  slider2.oninput = function() {
    output2.innerHTML = this.value;
    engin2 = this.value;
  }

  var slider3 = document.getElementById("engin3");
  var output3 = document.getElementById("e3value");
  output3.innerHTML = slider3.value;
  slider3.oninput = function() {
    output3.innerHTML = this.value;
    engin3 = this.value;
  }

  var slider4 = document.getElementById("engin4");
  var output4 = document.getElementById("e4value");
  output4.innerHTML = slider4.value;
  slider4.oninput = function() {
    output4.innerHTML = this.value;
    engin4 = this.value;
  }

  var slider5 = document.getElementById("engin5");
  var output5 = document.getElementById("e5value");
  output5.innerHTML = slider5.value;
  slider5.oninput = function() {
    output5.innerHTML = this.value;
    engin5 = this.value;
  }

  var slider6 = document.getElementById("engin6");
  var output6 = document.getElementById("e6value");
  output6.innerHTML = slider6.value;

  slider6.oninput = function() {
    output6.innerHTML = this.value;
    engin6 = this.value;
  }
