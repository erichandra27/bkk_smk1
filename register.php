<?= view('layouts/header'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mt-5">Registrasi Super Admin</h2>

            <!-- Menampilkan pesan error jika registrasi gagal -->
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <!-- Menampilkan pesan sukses setelah registrasi berhasil -->
            <?php if (session()->getFlashdata('message')): ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('message') ?>
                </div>
            <?php endif; ?>

            <form action="/register/save" method="post">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3">
                    <label for="role_id" class="form-label">Role</label>
                    <select class="form-control" id="role_id" name="role_id" required>
                        <option value="1">Super Admin</option>
                        <option value="2">Admin Sekolah</option>
                        <option value="3">Admin DU/DI</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary w-100">Registrasi</button>
            </form>
        </div>
    </div>
</div>

<?= view('layouts/footer'); ?>