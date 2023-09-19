<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
</head>
<body class="min-vh-100 d-flex align-items-center bg-dark"> 
    <div class="card w-75 m-auto p-3 bg-dark text-light">
        <h3 class="text-center p-3">Ubah Siswa</h3>
        <?php foreach($siswa as $data_siswa): ?>
        <form method="post" action="<?php echo base_url('admin/action_ubah_siswa') ?>" enctype="multipart/form-data" class="row">
        <input name="id_siswa" type="hidden" value="<?php echo $data_siswa->id_siswa ?>">
            <div class="mb-3 col-6">
                <label for="nama" class="form-label">Nama Siswa</label>
                <input type="text" value="<?php echo $data_siswa->nama_siswa?>" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3 col-6">
                <label for="nisn" class="form-label">NISN</label>
                <input type="text" value="<?php echo $data_siswa->nisn?>" class="form-control" id="nisn" name="nisn">
            </div>
            <div class="mb-3 col-6">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" value="<?php echo $data_siswa->alamat?>" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="mb-3 col-6">
                <label for="nama" class="form-label">Gender</label>
                <select name="gender" class="form-select">
                    <option selected>Pilih Gender</option>
                    <option value="<?php echo $data_siswa->gender ?>"><?php echo $data_siswa->gender?></option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3 col-6">
                <label for="nama" class="form-label">Kelas</label>
                <select name="kelas" class="form-select">
                    <option selected>Pilih Kelas</option>
                    <option value="<?php echo $data_siswa->kelas ?>"><?php echo $data_siswa->kelas?></option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                   </select>
            </div>
            <div class="mb-3 col-6">
                <label for="nama" class="form-label">Jurusan</label>
                <select name="jurusan" class="form-select">
                    <option selected>Pilih Jurusan</option>
                    <option value="<?php echo $data_siswa->jurusan ?>"><?php echo $data_siswa->jurusan?></option>
                    <option value="TBSM">Teknik dan Bisnis Sepeda Motor</option>
                    <option value="TKJ">Teknik Komputer Dan Jaringan</option>
                    <option value="TB">Tata Busana</option>
                    <option value="DKV">Desain Komunikasi Visual</option>
                    <option value="MultiMedia">MultiMedia</option>
                   </select>
            </div>
            <div class="mb-3 col-12">
                <label for="nama" class="form-label">Foto Siswa</label>
                <input type="file" class="form-control" id="file" name="file">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        <?php endforeach; ?>
    </div>
</body>
</html>