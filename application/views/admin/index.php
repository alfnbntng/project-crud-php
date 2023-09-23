<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Your Dashboard App</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Font Awesome CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <style>
  @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
      body {
        font-family: "Poppins", sans-serif;
        background: #fafafa;
      }
    </style>
  </head>
  <body>
      <?php $this->load->view('sidebar'); ?>
        <div class="container-fluid my-4">
          <h2 class="text-center py-4">Data Guru Dan Siswa</h2>
          <div class="row py-2">
               <!-- Card 1 -->
            <div class="col-lg-6 col-md-6 mb-6">
              <div class="card border-white text-white bg-transparent outline-light">
                <div class="card-header bg-warning border-white">Data Siswa</div>
                <div class="card-body">
                  <h5 class="card-title">Jumlah Siswa</h5>
                  <p class="card-text">
                  <?php echo $siswa ;?>
                  </p>
                  <a href="<?php echo base_url('admin/siswa') ?>" class="btn btn-outline-warning">Lihat Data</a>
                </div>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-6 col-md-6 mb-6">
              <div class="card border-white text-white bg-transparent outline-light">
                <div class="card-header bg-warning border-white">Data Guru</div>
                <div class="card-body">
                  <h5 class="card-title">Jumlah Guru</h5>
                  <p class="card-text">
                  <?php echo $guru ;?>
                  </p>
                  <a href="<?php echo base_url('admin/guru') ?>" class="btn btn-outline-warning">Lihat Data</a>
                </div>
              </div>
            </div>
          </div>
        </div>     
           <!-- di sini saya tambahkan tag penutup dari sidebar file sidebar -->

          </div>
        </main>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
      $(document).ready(function () {
        $("#sidebarCollapse").on("click", function () {
          $("#sidebar").toggleClass("active");
        });
      });
    </script>
  </body>
</html>
