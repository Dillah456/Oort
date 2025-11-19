<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<h1 class="mt-4">Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Primary Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">Warning Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">Success Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">Danger Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-area me-1"></i>
                Area Chart Example
            </div>
            <div class="card-body">
                <canvas id="myAreaChart" width="100%" height="40"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-bar me-1"></i>
                Bar Chart Example
            </div>
            <div class="card-body">
                <canvas id="myBarChart" width="100%" height="40"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Example
    </div>
    <div class="card-body">
        <form id="entitasForm" action="/diphda/save" method="post">
                <label>Id:</label>
                <input type="text" name="Id">

                <label>Nama:</label>
                <input type="text" name="Nama">

                <label>Harta:</label>
                <input type="number" name="Harta">

                <label>Hutang:</label>
                <input type="number" name="Hutang">

              <button type="submit">Simpan</button>
        </form>
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tanggal Registrasi</th>
                    <th>Nama</th>
                    <th>Harta</th>
                    <th>Hutang</th>
                </tr>
            </thead>

            <tbody>
                <?php if (!empty($records)) : ?>
                    <?php foreach ($records as $row) : ?>
                        <tr>
                            <td><?= $row['Id'] ?></td>
                            <td><?= $row['RegDate'] ?></td>
                            <td><?= $row['Nama'] ?></td>
                            <td><?= $row['Harta'] ?></td>
                            <td><?= $row['Hutang'] ?></td>
                        </tr>
                    <?php endforeach ?>
                <?php endif ?>
            </tbody>
        </table>
    </div>
     <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Example
    </div>
</div>

<?= $this->endSection() ?>
