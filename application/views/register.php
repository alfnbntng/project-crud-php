<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Register</title> 
    <!-- Tambahkan link ke Bootstrap CSS --> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"> 
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
 
    <style> 
 
        body { 
            background-image: url('https://img.freepik.com/free-vector/realistic-style-technology-particle-background_23-2148426704.jpg'); 
            background-size: cover;  
            background-repeat: no-repeat; 
            background-attachment: fixed;  
        } 
        .card-title { 
            color: #fff; 
        } 
        .card { 
            background-color: rgba(255, 255, 255, 0.3);  
            padding: 20px; 
        } 
        .logo { 
            max-width: 200px; 
            height: auto;  
            display: block;  
            margin: 0 auto 40px;  
        } 
        .field-icon {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            user-select: none;
        }

 
    </style> 
</head> 
<body> 
    <div class="min-vh-100 d-flex align-items-center"> 
        <div class="container"> 
            <div class="row justify-content-center"> 
                <div class="col-md-4"> 
                    <div class="card"> 
                        <div class="card-body"> 
                            <img src="https://binusasmg.sch.id/ppdb/logobinusa.png" alt="Logo" class="mb-4 logo"> 
                            <h2 class="card-title text-center">Sign Up</h2> 
                            <form action="<?= base_url('auth/process_register'); ?>" method="post"> 
                                <div class="mb-3"> 
                                    <input type="text" class="form-control" name="email" placeholder="Email" required> 
                                </div> 
                                <div class="mb-3"> 
                                    <input type="text" class="form-control" name="username" placeholder="Username" required> 
                                </div> 
                                <div class="mb-3 position-relative">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                    <span class="fa fa-fw fa-eye-slash field-icon toggle-password" onclick="togglePassword()"></span>
                                </div>

                                <div class="mb-3"> 
                                    <input type="text" class="form-control" name="role" placeholder="Role" required> 
                                </div> 
                                <div class="text-center"> 
                                    <button type="submit" class="btn btn-primary">Daftar</button> 
                                </div>
                            </form> 
                            <div class="text-center">
                                    <span><a class="text-white" href="<?= base_url('auth');?>">Klik di sini bila sudah memiliki akun</a></span>
                                </div> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            var icon = document.querySelector(".toggle-password");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            } else {
                passwordField.type = "password";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            }
        }
    </script>

</body> 
</html>