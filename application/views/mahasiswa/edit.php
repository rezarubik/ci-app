<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Edit Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama Mahasiswa</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Mahasiswa" value="<?= $mahasiswa['nama']; ?>">
                            <small class="form-text text-danger"> <?= form_error('nama'); ?> </small>
                        </div>
                        <div class="form-group">
                            <label for="nim">Nomor Induk Mahasiswa</label>
                            <input type="text" class="form-control" name="nim" id="nim" placeholder="Masukkan NIM Mahasiswa" value="<?= $mahasiswa['nim']; ?>">
                            <small class=" form-text text-danger"> <?= form_error('nim'); ?> </small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Mahasiswa</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan Email Mahasiswa" value="<?= $mahasiswa['email']; ?>">
                            <small class=" form-text text-danger"> <?= form_error('email'); ?> </small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" name="jurusan" id="jurusan">
                                <?php foreach ($jurusan as $j) : ?>
                                    <!-- Jika jurusan = seperti juruan mahasiswanya -->
                                    <?php if ($j == $mahasiswa['jurusan']) : ?>
                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                    <?php else : ?>
                                        <!-- Jika tidak sama -->
                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>