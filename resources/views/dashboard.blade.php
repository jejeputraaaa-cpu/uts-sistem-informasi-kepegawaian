
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Kepegawaian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-primary px-4">
        <span class="navbar-brand">Sistem Informasi Kepegawaian</span>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-light btn-sm" type="submit">Logout</button>
        </form>
    </nav>

    <main class="container py-4">
        <h2>Dashboard</h2>
        <p>Selamat datang, {{ auth()->user()->name }}!</p>

        <div class="row g-3">
            <div class="col-md-6">
                <div class="card p-3">
                    <h5>Total Departemen</h5>
                    <h2>{{ $departmentCount }}</h2>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card p-3">
                    <h5>Total Pegawai</h5>
                    <h2>{{ $employeeCount }}</h2>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('departments.index') }}"
               class="btn btn-primary">Kelola Departemen</a>

            <a href="{{ route('employees.index') }}"
               class="btn btn-success">Kelola Pegawai</a>
        </div>
    </main>
</body>
</html>
