<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama Mahasiswa</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Mahasiswa">
                            <small class="form-text text-danger"> <?= form_error('nama'); ?> </small>
                        </div>
                        <div class="form-group">
                            <label for="nim">Nomor Induk Mahasiswa</label>
                            <input type="text" class="form-control" name="nim" id="nim" placeholder="Masukkan NIM Mahasiswa">
                            <small class="form-text text-danger"> <?= form_error('nim'); ?> </small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Mahasiswa</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan Email Mahasiswa">
                            <small class="form-text text-danger"> <?= form_error('email'); ?> </small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" name="jurusan" id="jurusan">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Elektro">Teknik Elektro</option>
                                <option value="Teknik Sipil">Teknik Sipil</option>
                                <option value="Matematika">Matematika</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>