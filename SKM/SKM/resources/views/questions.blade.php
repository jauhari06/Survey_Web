<div class="container mt-4 mb-4">
    <div id="survey-content" class="questions">
        @isset($questions)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Pertanyaan</th>
                    <th scope="col">Departemen</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th> <!-- Add this line -->
                </tr>
            </thead>
            <tbody>
                @foreach($questions as $question)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $question->pertanyaan }}</td>
                    <td>{{ $question->departemen }}</td>
                    <td>{{ $question->status }}</td>
                    <td> <!-- Add this line -->
                        <form action="{{ route('questions.destroy', $question->id_pertanyaan) }}" method="POST" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td> <!-- Add this line -->
                </tr>
                @endforeach
            </tbody>
        </table>
        @endisset
    </div>
</div>