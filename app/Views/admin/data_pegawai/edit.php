<?= $this->extend('admin/layout.php') ?>

<?= $this->section('content') ?>

<div class="card col-md-6">
    <div class="card-body">
        <form method="POST" action="<?= base_url('admin/data_pegawai/update/' . $pegawai['id']) ?>" enctype="multipart/form-data">

            <div class="input-style-1">
                <label>Nama</label>
                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" name="nama" placeholder="Nama" value="<?= set_value('nama', $pegawai['nama']) ?>" />
                <div class="invalid-feedback"><?= $validation->getError('nama') ?></div>
            </div>

            <div class="input-style-1">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : '' ?>" >
                    <option value="">--Pilih Jenis kelamin--</option>
                    <option value="Laki-Laki" <?= set_select('jenis_kelamin', 'Laki-Laki', ($pegawai['jenis_kelamin'] == 'Laki-Laki')) ?>>Laki-Laki</option>
                    <option value="Perempuan" <?= set_select('jenis_kelamin', 'Perempuan', ($pegawai['jenis_kelamin'] == 'Perempuan')) ?>>Perempuan</option>
                </select>
                <div class="invalid-feedback"><?= $validation->getError('jenis_kelamin') ?></div>
            </div>

            <div class="input-style-1">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : '' ?>" cols="30" rows="5" placeholder="Alamat" ><?= set_value('alamat', $pegawai['alamat']) ?></textarea>
                <div class="invalid-feedback"><?= $validation->getError('alamat') ?></div>
            </div>

            <div class="input-style-1">
                <label>No. Handphone</label>
                <input type="number" class="form-control <?= ($validation->hasError('no_handphone')) ? 'is-invalid' : '' ?>" name="no_handphone" placeholder="No. Handphone" value="<?= set_value('no_handphone', $pegawai['no_handphone']) ?>" />
                <div class="invalid-feedback"><?= $validation->getError('no_handphone') ?></div>
            </div>

            <div class="input-style-1">
                <label>Jabatan</label>
                <select name="jabatan" class="form-control <?= ($validation->hasError('jabatan')) ? 'is-invalid' : '' ?>" >
                    <option value="">--Pilih Jabatan--</option>
                    <?php foreach ($jabatan as $jab) : ?>
                        <option value="<?= $jab['jabatan'] ?>" <?= set_select('jabatan', $jab['jabatan'], ($pegawai['jabatan'] == $jab['jabatan'])) ?>>
                            <?= $jab['jabatan'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback"><?= $validation->getError('jabatan') ?></div>
            </div>

            <div class="input-style-1">
                <label>Lokasi Presensi</label>
                <select name="lokasi_presensi" class="form-control <?= ($validation->hasError('lokasi_presensi')) ? 'is-invalid' : '' ?>" >
                    <option value="">--Pilih Lokasi Presensi--</option>
                    <?php foreach ($lokasi_presensi as $lok) : ?>
                        <option value="<?= $lok['id'] ?>" <?= set_select('lokasi_presensi', $lok['id'], ($pegawai['lokasi_presensi'] == $lok['id'])) ?>>
                            <?= $lok['nama_lokasi'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback"><?= $validation->getError('lokasi_presensi') ?></div>
            </div>
            
            <div class="input-style-1">
                <label>Foto</label>
                <input type="hidden" value="<?= $pegawai['foto'] ?>" name="foto_lama" >
                <input type="file" class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : '' ?>" name="foto" />
                <div class="invalid-feedback"><?= $validation->getError('foto') ?></div>
            </div>

            <div class="input-style-1">
                <label>Username</label>
                <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" name="username" placeholder="Username" value="<?= set_value('username', $pegawai['username']) ?>" />
                <div class="invalid-feedback"><?= $validation->getError('username') ?></div>
            </div>

            <div class="input-style-1">
                <label>Password</label>
                <input type="hidden" value="<?= $pegawai['password'] ?>" name="password_lama" >
                <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" name="password" placeholder="Password" />
                <div class="invalid-feedback"><?= $validation->getError('password') ?></div>
            </div>

            <div class="input-style-1">
                <label>Konfirmasi Password</label>
                <input type="password" class="form-control <?= ($validation->hasError('konfirmasi_password')) ? 'is-invalid' : '' ?>" name="konfirmasi_password" placeholder="Konfirmasi password" />
                <div class="invalid-feedback"><?= $validation->getError('konfirmasi_password') ?></div>
            </div>

            <div class="input-style-1">
                <label>Role</label>
                <select name="role" class="form-control <?= ($validation->hasError('role')) ? 'is-invalid' : '' ?>" >
                    <option value="">--Pilih Role--</option>
                    <option value="Admin" <?= set_select('role', 'Admin', ($pegawai['role'] == 'Admin')) ?>>Admin</option>
                    <option value="Pegawai" <?= set_select('role', 'Pegawai', ($pegawai['role'] == 'Pegawai')) ?>>Pegawai</option>
                </select>
                <div class="invalid-feedback"><?= $validation->getError('role') ?></div>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            
        </form>
    </div>
</div>

<?= $this->endSection() ?>