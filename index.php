<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Menú</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark static-top" >
            <div class="container justify-content-center"  id="nav">
              <a class="navbar-brand" href="#">
                <img src="./img/PepsiCo-Logo.png" alt="PEPSICO" height="100">
              </a>         
            </div>
          </nav>
          
    </header>
    <section class="text-center">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card card2">
                <div class="row g-0">                  
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form action="./pages/falla.php">
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Ingresa tu GPID</h5>
      
                        <div class="form-outline mb-4">
                          <input type="text" id="user" name="user" class="form-control form-control-lg" required/>
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" type="submit">Entrar</button>
                        </div>
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>