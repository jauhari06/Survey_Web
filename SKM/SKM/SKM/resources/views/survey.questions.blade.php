@foreach ($pertanyaan as $index => $question)
<div id="question{{ $index + 1 }}" style="display: none;">
    <p id="questionText">{{ e($question->pertanyaan) }}</p>
    
    <!-- Tambahkan input radio untuk jawaban di sini -->
    
    <button onclick="nextQuestion('{{ $index + 1 }}')">Next</button>
</div>
@endforeach