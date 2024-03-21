function addQuestion() {
    var container = document.getElementById("questions-container");
    var button = document.querySelector("button[onclick='addQuestion()']");

    var questionDiv = document.createElement("div");
    questionDiv.classList.add("mb-3");

    var questionLabel = document.createElement("label");
    questionLabel.classList.add("mb-1");
    questionLabel.setAttribute("for", "inputQuestion");
    questionLabel.textContent = "Pertanyaan";

    var questionInput = document.createElement("input");
    questionInput.classList.add("form-control");
    questionInput.setAttribute("type", "text");
    questionInput.setAttribute("name", "question");
    questionInput.setAttribute("placeholder", "Masukkan Pertanyaan Anda");
    questionInput.setAttribute("required", "");

    questionDiv.appendChild(questionLabel);
    questionDiv.appendChild(questionInput);

    container.insertBefore(questionDiv, button);

    var answerDiv = document.createElement("div");
    answerDiv.classList.add("mb-3");

    var answerLabel = document.createElement("label");
    answerLabel.classList.add("mb-1");
    answerLabel.textContent = "Jawaban";

    answerDiv.appendChild(answerLabel);

    var answersDiv = document.createElement("div"); // Membuat div baru untuk opsi jawaban
    answersDiv.style.display = "flex"; // Menambahkan ini
    answersDiv.style.justifyContent = "space-between"; // Menambahkan ini

    var answers = ["Tidak puas", "Kurang puas", "Puas", "Cukup Puas", "Sangat Puas"];

    for (var i = 0; i < answers.length; i++) {
        var answerInput = document.createElement("div");
        answerInput.classList.add("form-check");

        var input = document.createElement("input");
        input.classList.add("form-check-input");
        input.setAttribute("type", "radio");
        input.setAttribute("name", "answer");
        input.setAttribute("value", i + 1);

        var label = document.createElement("label");
        label.classList.add("form-check-label");
        label.textContent = answers[i];

        answerInput.appendChild(input);
        answerInput.appendChild(label);

        answersDiv.appendChild(answerInput); // Menambahkan opsi jawaban ke div baru
    }

    answerDiv.appendChild(answersDiv); // Menambahkan div baru ke answerDiv

    container.insertBefore(answerDiv, button);
}