val1 = 0;
val2 = 0;
section1 = document.getElementById("section1");
section2 = document.getElementById("section2");

function escribir(element) {
  num = element.innerHTML;
  section2.innerHTML += num;
}

buttons = document.querySelectorAll(".button");

buttons.forEach((button) => {
  if (!isNaN(button.innerHTML)) {
    button.addEventListener("click", () => {
      escribir(button);
    });
  }
});

function plus() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `${val1}+`;
  section2.innerHTML = "";
}

plusButton = document.getElementById("plus");
plusButton.addEventListener("click", () => {
  plus();
});

function minus() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `${val1}-`;
  section2.innerHTML = "";
}

minusButton = document.getElementById("minus");
minusButton.addEventListener("click", () => {
  minus();
});

function multiplication() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `${val1}*`;
  section2.innerHTML = "";
}

multiplicationButton = document.getElementById("multiplication");
multiplicationButton.addEventListener("click", () => {
  multiplication();
});

function division() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `${val1}/`;
  section2.innerHTML = "";
}

divisionButton = document.getElementById("division");
divisionButton.addEventListener("click", () => {
  division();
});

function equal() {
  op = section1.innerHTML[section1.innerHTML.length - 1];
  if (section2.innerHTML.length > 0) val2 = parseInt(section2.innerHTML);
  else val2 = 0;
  switch (op) {
    case "+":
      res = val1 + val2;
      section1.innerHTML = `${val1}+${val2}`;
      section2.innerHTML = `${res}`;
      break;
    case "-":
      res = val1 - val2;
      section1.innerHTML = `${val1}-${val2}`;
      section2.innerHTML = `${res}`;
      break;
    case "*":
      res = val1 * val2;
      section1.innerHTML = `${val1}*${val2}`;
      section2.innerHTML = `${res}`;
      break;
    case "/":
      res = val1 / val2;
      section1.innerHTML = `${val1}/${val2}`;
      section2.innerHTML = `${res}`;
      break;
    case "^":
      res = Math.pow(val1, val2);
      section1.innerHTML = `${val1}^${val2}`;
      section2.innerHTML = `${res}`;
      break;
    case "√":
      res = Math.sqrt(val1);
      section1.innerHTML = `√${val1}`;
      section2.innerHTML = `${res}`;
      break;
    case "!":
      res = factorial(val1);
      section1.innerHTML = `${val1}!`;
      section2.innerHTML = `${res}`;
      break;
    case "log":
      res = Math.log10(val1);
      section1.innerHTML = `log(${val1})`;
      section2.innerHTML = `${res}`;
      break;
    default:
      break;
  }
}

equalButton = document.getElementById("equal");
equalButton.addEventListener("click", () => {
  equal();
});

function del() {
  section2.innerHTML = section2.innerHTML.slice(0, -1);
}

delButton = document.getElementById("delete");
delButton.addEventListener("click", () => {
  del();
});

function clean() {
  section1.innerHTML = "";
  section2.innerHTML = "";
}

cleanButton = document.getElementById("clean");
cleanButton.addEventListener("click", () => {
  clean();
});

function power() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `${val1}^`;
  section2.innerHTML = "";
}

powerButton = document.getElementById("power");
powerButton.addEventListener("click", () => {
  power();
});

function sqrt() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `√`;
  section2.innerHTML = "";
  equal();
}

sqrtButton = document.getElementById("sqrt");
sqrtButton.addEventListener("click", () => {
  sqrt();
});

function factorial(n) {
  if (n === 0 || n === 1) return 1;
  return n * factorial(n - 1);
}

function factorialOp() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `${val1}!`;
  section2.innerHTML = "";
  equal(); 
}

factorialButton = document.getElementById("factorial");
factorialButton.addEventListener("click", () => {
  factorialOp();
});

function log() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `log(${val1})`;
  section2.innerHTML = "";
  equal(); 
}

logButton = document.getElementById("log");
logButton.addEventListener("click", () => {
  log();
});
