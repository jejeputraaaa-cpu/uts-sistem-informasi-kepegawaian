
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

        <form action="<?php echo e(route('logout')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button class="btn btn-light btn-sm" type="submit">Logout</button>
        </form>
    </nav>

    <main class="container py-4">
        <h2>Dashboard</h2>
        <p>Selamat datang, <?php echo e(auth()->user()->name); ?>!</p>

        <div class="row g-3">
            <div class="col-md-6">
                <div class="card p-3">
                    <h5>Total Departemen</h5>
                    <h2><?php echo e($departmentCount); ?></h2>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card p-3">
                    <h5>Total Pegawai</h5>
                    <h2><?php echo e($employeeCount); ?></h2>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <a href="<?php echo e(route('departments.index')); ?>"
               class="btn btn-primary">Kelola Departemen</a>

            <a href="<?php echo e(route('employees.index')); ?>"
               class="btn btn-success">Kelola Pegawai</a>
        </div>
    </main>
</body>
</html>
<?php /**PATH C:\laragon\www\uts-sistem-informasi-kepegawaian\resources\views/dashboard.blade.php ENDPATH**/ ?>