<div class="container mt-4 mb-4">
    <div id="survey-content" class="pertanyaan">
        @isset($pertanyaan)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Pertanyaan</th>>
                </tr>
            </thead>
            <tbody>
                @foreach($pertanyaan as $question)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $question->pertanyaan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endisset
    </div>
</div>