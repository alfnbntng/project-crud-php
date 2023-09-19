<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
</head>
<body class="min-vh-100 d-flex align-items-center bg-dark"> 
    <div class="card w-75 m-auto p-3 bg-dark text-light">
        <h3 class="text-center p-3">Ubah Guru</h3>
        <?php foreach($guru as $data_guru): ?>
        <form method="post" action="<?php echo base_url('admin/action_ubah_guru') ?>" enctype="multipart/form-data" class="row">
        <input name="id_guru" type="hidden" value="<?php echo $data_guru->id_guru ?>">
            <div class="mb-3 col-6">
                <label for="nama" class="form-label">Nama Guru</label>
                <input type="text" value="<?php echo $data_guru->nama_guru?>" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3 col-6">
                <label for="nisn" class="form-label">NIK</label>
                <input type="text" value="<?php echo $data_guru->nik?>" class="form-control" id="nik" name="nik">
            </div>
            <div class="mb-3 col-6">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" value="<?php echo $data_guru->alamat?>" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="mb-3 col-6">
                <label for="mapel" class="form-label">Mapel</label>
                <input type="text" value="<?php echo $data_guru->mapel?>" class="form-control" id="mapel" name="mapel">
            </div>
            <div class="mb-3 col-6">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" value="<?php echo $data_guru->jabatan?>" class="form-control" id="jabatan" name="jabatan">
            </div>
            <div class="mb-3 col-6">
                <label for="nama" class="form-label">Gender</label>
                <select name="gender" class="form-select">
                    <option selected>Pilih Gender</option>
                    <option value="<?php echo $data_guru->gender ?>"><?php echo $data_guru->gender?></option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3 col-12">
                <label for="nama" class="form-label">Foto guru</label>
                <input type="file" class="form-control" id="file" name="file">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        <?php endforeach; ?>
    </div>
</body>
</html>