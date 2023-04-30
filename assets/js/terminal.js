const terminal = document.getElementById("terminal");
const output = document.getElementById("output");
const input = document.getElementById("command");
const qtext = document.getElementById("question");
const htext = document.getElementById("hint");
const qnumt = document.getElementById("qt");

var q_idx = 0;

qtext.innerHTML = questions_js[q_idx].question;

qnumt.innerHTML = "Question (" + (q_idx + 1 + "/" + questions_js.length) + ")";

// console.log(qtext);

function processCommand() {
  const command = input.value;
  input.value = "";

  if (q_idx === questions_js.length) {
    return;
  }

  // do something with the command
  // for example, check if it's a valid UNIX command and show the output
  // or show an error message if it's not a valid command

  if (command === "clear") {
    output.innerHTML = "";
    return;
  }

  if (command !== questions_js[q_idx].correct_answer) {
    htext.innerHTML = "Hint: " + questions_js[q_idx].hint;
    return;
  } else {
    q_idx++;

    if (q_idx === questions_js.length) {
      qtext.innerHTML = "You have completed all the questions!";
      qnumt.innerHTML = "";
      htext.innerHTML = "";
      output.innerHTML += `<div>$ ${command}</div>`;
      output.innerHTML += `<div>` + questions_js[q_idx - 1].output + `</div>`;
      terminal.scrollTop = terminal.scrollHeight; // scroll to the bottom of the terminal
      return;
    }

    qtext.innerHTML = questions_js[q_idx].question;
    qnumt.innerHTML =
      "Question (" + (q_idx + 1 + "/" + questions_js.length) + ")";
    htext.innerHTML = "";

    output.innerHTML += `<div>$ ${command}</div>`;
    output.innerHTML += `<div>` + questions_js[q_idx - 1].output + `</div>`;
    terminal.scrollTop = terminal.scrollHeight; // scroll to the bottom of the terminal

    return;
  }
}

input.addEventListener("keydown", (event) => {
  if (event.key === "Enter") {
    processCommand();
  }
});
