function addQuestion() {
    // Mendapatkan elemen container
    var container = document.getElementById('questions-container');

    // Mendapatkan tombol "Tambah Pertanyaan"
    var addButton = document.querySelector("button[onclick='addQuestion()']");

    // Membuat elemen div baru untuk pertanyaan
    var questionDiv = document.createElement('div');
    questionDiv.className = 'mb-3';

    // Membuat elemen label untuk pertanyaan
    var questionLabel = document.createElement('label');
    questionLabel.className = 'mb-1';
    questionLabel.setAttribute('for', 'inputQuestion');
    questionLabel.textContent = 'Pertanyaan';

    // Membuat elemen input untuk pertanyaan
    var questionInput = document.createElement('input');
    questionInput.className = 'form-control';
    questionInput.setAttribute('type', 'text');
    questionInput.setAttribute('name', 'pertanyaan[]'); // Ubah 'question' menjadi 'pertanyaan[]'
    questionInput.setAttribute('placeholder', 'Masukkan Pertanyaan Anda');
    questionInput.setAttribute('required', '');

    // Menambahkan label dan input ke dalam div pertanyaan
    questionDiv.appendChild(questionLabel);
    questionDiv.appendChild(questionInput);

    // Menambahkan div pertanyaan ke dalam container di atas tombol "Tambah Pertanyaan"
    container.insertBefore(questionDiv, addButton);
}