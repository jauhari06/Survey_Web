<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->

        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i class="fas fa-user-secret me-2"></i>Admin</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" id="survey" class="list-group-item list-group-item-action bg-transparent second-text active d-flex align-items-center">
                    <span class="material-symbols-outlined me-2">ballot</span>Survey</a>
                <a href="#" id="question" class="list-group-item list-group-item-action bg-transparent second-text fw-bold d-flex align-items-center">
                    <span class="material-symbols-outlined me-2">question_mark</span>Pertanyaan</a>
                <a href="#" id="analytics" class="list-group-item list-group-item-action bg-transparent second-text fw-bold d-flex align-items-center">
                    <span class="material-symbols-outlined me-2">show_chart</span>Analytics</a>
                <a href="/logout" id="logout" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold d-flex">
                    <span class="material-symbols-outlined me-2">logout</span>Logout</a>
            </div>
            <hr class="sidebar-divider ">
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>John Doe
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>


<div class="container mt-4 mb-4">
    <div id="survey-content" class="content">
        <div class="table-responsive">
            <h3>Tabel Survei</h3>
            <form id="survey-form" method="GET" action="{{ route('Admin.show') }}">
                <div class="from-group row">
                    <label for="" class="col-sm-2 col-form-label">
                    </label>
                </div>
                <div class="mb-3">
                    <label class="mb-1" for="Departemen">Departemen</label>
                    <select class="form-select" id="Departmen" name="departemen">
                        <option value="" disabled>Pilih</option>
                        <option value="Bisnis dan Hospitality" {{ request('departemen') == 'Bisnis dan Hospitality' ? 'selected' : '' }}>Departemen Bisnis dan Hospitality</option>
                        <option value="Industri Kreatif dan Digital" {{ request('departemen') == 'Industri Kreatif dan Digital' ? 'selected' : '' }}>Industri Kreatif dan Digital</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="mb-1" for="Status">Target</label>
                    <select class="form-select" id="Status" name="status">
                        <option value="" disabled>Pilih</option>
                        <option value="Dosen" {{ request('status') == 'Dosen' ? 'selected' : '' }}>Dosen</option>
                        <option value="Tenaga Pendidik" {{ request('status') == 'Tenaga Pendidik' ? 'selected' : '' }}>Tenaga Pendidik</option>
                        <option value="Mahasiswa" {{ request('status') == 'Mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
            <div id="search-results"></div> <!-- New element for search results -->
        </div>
    </div>
</div>


<div id="question-content" class="content" style="display: none;">
    <form action="{{ url('/store-survey') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="mb-1" for="Departemen">Departemen</label>
            <select class="form-select" id="Departemen" name="departemen">
                <option value="" selected disabled>Pilih</option>
                <option value="Bisnis dan Hospitality">Departemen Bisnis dan Hospitality</option>
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

        <div class="mb-3">
            <label class="mb-1" for="pertanyaan">Pertanyaan</label>
            <input class="form-control" id="pertanyaan" type="text" name="pertanyaan[]" placeholder="Masukkan Pertanyaan Anda" required />
        </div>

        <div id="questions-container">
            <button type="button" onclick="addQuestion()">Tambah Pertanyaan</button>
        </div>
        <!-- Sisanya sama -->
        <div class="mb-3">
            <button class="btn text-white" type="submit" type="kirim" style="background-color: #003366">
                Kirim
            </button>
        </div>
    </form>
</div>


<div id="analytics-content" class="content" style="display: none;">
    <canvas id="myChart"></canvas>
</div>
</div>
</div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
    <script src="{{ asset('js/adminsidebar.js') }}"></script>
    <script src="{{ asset('js/surveiadmin.js') }}"></script>
    <script src="{{ asset('js/date.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };

        $(document).ready(function() {
            $('#survey-form').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: $(this).attr('action'),
                    method: 'GET',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#search-results').html(response);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error(textStatus, errorThrown);
                    }
                });
            });

            // Handle delete form submission
            $(document).on('submit', '.delete-form', function(e) {
                e.preventDefault();

                var form = $(this);
                var row = form.closest('tr');

                $.ajax({
                    url: form.attr('action'),
                    method: 'DELETE',
                    data: form.serialize(),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        // Remove the deleted row from the table
                        console.log(row);
                        // Remove the deleted row from the table
                        row.remove();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error(textStatus, errorThrown);
                    }
                });
            });
        });

        let ctx = document.getElementById('myChart').getContext('2d');

let myChart = new Chart(ctx, {
type: 'bar', // jenis grafik, bisa 'line', 'bar', dll.
data: {
labels: [], // label untuk data
datasets: [{
    label: 'Jumlah Jawaban',
    data: [], // data yang akan ditampilkan
    backgroundColor: 'rgba(75, 192, 192, 0.2)',
    borderColor: 'rgba(75, 192, 192, 1)',
    borderWidth: 1
}]
},
options: {
scales: {
    y: {
        beginAtZero: true
    }
}
}
});

// Ambil data dari server
fetch('/api/jawaban')
.then(response => response.json())
.then(data => {
myChart.data.labels = data.labels;
myChart.data.datasets[0].data = data.values;
myChart.update();
});
    </script>
</body>


</html>