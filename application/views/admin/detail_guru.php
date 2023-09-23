<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Your Dashboard App</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background-image: url("https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/v1016-c-08_1-ksh6mza3.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=f584d8501c27c5f649bc2cfce50705c0");
            background-repeat: no-repeat;
            background-position: center bottom;
            background-size: cover; 
            color: black;
        }
        p {
          text-align: center;
        }
    </style>
</head>

<body>
  <div class="container">
    <div class="min-vh-100 d-flex align-items-center justify-content-center py-5">
        <?php foreach ($guru as $gurus) : ?>
            <div class="card bg-body-secondary" style="width: 18rem;">
                <img src="<?php echo base_url('uploads/guru/' . $gurus->foto_guru); ?>" class="card-img-top responsive-img" alt="...">
                <div class="card-body">
                    <h3 class="card-text text-center"><?php echo $gurus->nama_guru ?></h3>
                    <p class="text-secondary"><?php echo $gurus->alamat?></p>
                    <h4 class="text-secondary text-center">Guru <?php echo $gurus->mapel?></h4>
                    <a href="<?php echo base_url("admin/siswa")?>" class="d-flex align-self-center btn btn-primary text-center">Kembali</a>
                </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>  
</body>

</html>
