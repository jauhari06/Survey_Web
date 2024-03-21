<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Isi Survey</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A700" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A700" />
  <link rel="stylesheet" href="{{ asset('css/survey.css') }}" />
</head>

<body>
  <div class="container">
    <div class="title">
      Halaman Survey
    </div>
    <div class="description-container">
      <div class="details">
        Survey Kepuasan
        <br />
        Civitas Akademika
        <br />
        Fakultas Vokasi
        <br />
        Universitas Brawijaya
      </div>

      <div class="form-container">
        <form id="surveyForm" method="GET" action="{{ route('survey.show') }}">
          @csrf
          <div class="mb-3">
            <label class="mb-1" for="Departemen">Departemen</label>
            <select class="form-select" id="Departemen" name="departemen">
              <option value="" selected disabled>Pilih</option>
              <option value="Bisnis dan Hospitality">Bisnis dan Hospitality</option>
              <option value="Industri Kreatif dan Digital">Industri Kreatif dan Digital</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="mb-1" for="Status">Kategori</label>
            <select class="form-select" id="Status" name="status">
              <option value="" selected disabled>Pilih</option>
              <option value="Dosen">Dosen</option>
              <option value="Tenaga Pendidik">Tenaga Pendidik</option>
              <option value="Mahasiswa">Mahasiswa</option>
            </select>
          </div>
        </form>

        <form id="Form" method="POST" action="{{ route('submitSurvey') }}">
          @csrf
          <div class="mb-3">
            <label class="mb-1" for="Email">Email</label>
            <input type="email" class="form-control" id="Email" name="email" autocomplete="off" required>
          </div>
          <button id="startButton" type="button" onclick="startSurvey(event)">Mulai</button>

          <div id="questionContainer" style="display: none;">
            <p id="questionText"></p>
            <input id="jawaban1" type="radio" name="jawaban" value="Sangat Puas">Sangat Puas<br>
            <input id="jawaban2" type="radio" name="jawaban" value="Cukup Puas">Cukup Puas<br>
            <input id="jawaban3" type="radio" name="jawaban" value="Puas">Puas<br>
            <input id="jawaban4" type="radio" name="jawaban" value="Tidak Puas">Tidak Puas<br>
            <input id="jawaban5" type="radio" name="jawaban" value="Sangat Tidak Puas">Sangat Tidak Puas<br>

            <button id="nextButton" onclick="nextQuestion(event)">Next</button>
            <button id="finishButton" type="submit" onclick="finishSurvey(event)" style="display: none;">Selesai</button>
          </div>
        </form>

      </div>
    </div>
  </div>
  <div class="line"></div>
  <div class="copyright-container">
    <div class="copyright">
      &#169; 2023 TI VOK-UB
    </div>
  </div>
  </div>
  <script>
    let currentQuestionIndex = 0;
    let questions = [];
    let departemen, status, email;

    function collectAnswer() {
      if (!questions) {
    console.error('questions is null or undefined');
    return false;
  }
      const answerElements = document.getElementsByName('jawaban');
      let answer;
      for (let i = 0; i < answerElements.length; i++) {
        if (answerElements[i].checked) {
          answer = answerElements[i].value;
          break;
        }
      }
      if (!answer) {
        alert('Harap pilih jawaban sebelum melanjutkan.');
        return false;
      }
      questions[currentQuestionIndex].userAnswer = answer;
      return true;
    }

    function startSurvey(event) {
  event.preventDefault();
  document.getElementById('surveyForm').style.display = 'none';
  departemen = document.getElementById('Departemen').value;
  status = document.getElementById('Status').value;
  email = document.getElementById('Email').value;

  if (!departemen || !status) {
    alert('Harap pilih departemen dan status sebelum memulai survei.');
    return;
  }

  const emailRegex = new RegExp('^[^\\s@]+@ub\\.ac\\.id$');
  if (!email || !emailRegex.test(email)) {
    alert('Harap masukkan email yang valid. Email harus berakhir dengan @ub.ac.id');
    document.getElementById('surveyForm').style.display = 'block';
    return;
  }
  fetch(`/survey?departemen=${departemen}&status=${status}`, {
  headers: {
    'X-Requested-With': 'XMLHttpRequest '
  }
})
.then(response => response.json())
.then(data => {
  questions = data;
  showQuestion(0);
})
.catch(error => {
  console.error('Error:', error);
});
}

    function showQuestion(index) {
      if (!questions) {
    console.error('questions is null or undefined');
    return;
  }
      const question = questions[index];
      document.getElementById('questionText').innerText = question.pertanyaan;
      const answerElements = document.getElementsByName('jawaban');
      for (let i = 0; i < answerElements.length; i++) {
        answerElements[i].checked = false;
      }

      document.getElementById('questionContainer').style.display = 'block';
      document.getElementById('nextButton').style.display = index < questions.length - 1 ? 'block' : 'none';
      document.getElementById('finishButton').style.display = index === questions.length - 1 ? 'block' : 'none';
    }

    function nextQuestion(event) {
      event.preventDefault();
      if (!collectAnswer()) {
        return;
      }
      currentQuestionIndex++;
      if (currentQuestionIndex < questions.length) {
        showQuestion(currentQuestionIndex);
      } else {
        finishSurvey();
      }
    }

    function finishSurvey() {
      if (!collectAnswer()) {
        return;
      }
      document.getElementById('questionContainer').style.display = 'none';
      document.getElementById('criticAndSuggestionContainer').style.display = 'block';
    }

    function submitSurvey(event) {
      event.preventDefault();

      const criticAndSuggestion = document.getElementById('criticAndSuggestion').value;
      if (!criticAndSuggestion) {
        alert('Harap masukkan kritik dan saran Anda.');
        return;
      }
      const answers = questions.map((question, index) => {
        return {
          questionId: question.id,
          answer: question.userAnswer
        };
      });
      fetch('/submit-survey', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            email: email,
            criticAndSuggestion: criticAndSuggestion,
            answers: answers
          })
        })
        .then(response => {
          if (!response.ok) {
            console.log('Response:', response);
            throw new Error('Network response was not ok');
          }
          alert('Terima kasih telah mengisi survei.');
        })
        .catch(error => {
          console.error('There has been a problem with your fetch operation:', error);
          alert('Terjadi kesalahan saat mengirim jawaban Anda. Silakan coba lagi.');
        });
    }
  </script>
</body>

</html>