<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Reporte de falla</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark static-top" >
        <div class="container justify-content-center"  id="nav">
          <a class="navbar-brand" href="#">
            <img src="../img/PepsiCo-Logo.png" alt="PEPSICO" height="100">
          </a>         
        </div>
      </nav>

      <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Inicio</a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="./gantt.php">Reportes</a>
            </li>            
      </ul>
</header>
    <section class="text-center">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card card2">
                <div class="row g-0">                  
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form method="post" action="../functions/insertReport.php" class="justify-content-center">
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Reporte de falla</h5>
      
                        
                            <div class="justify-content-center">
                                <label for="planta">Planta:</label class="form-label"> <br>                       

                                    <select name="planta" id="planta" class="form-control">
                                        <option value="0">Elige una opción</option>
                                        <option value="1">Vallejo</option>
                                        <option value="2">Celaya</option>
                                        <option value="3">Monterrey</option>                            
                                    </select>
                            </div>

                            <div>
                                <label for="turno">Turno:</label class="form-label"><br>                     

                                    <select name="turno" id="turno" class="form-control">
                                        <option value="0">Elige una opción</option>
                                        <option value="1">Matutino</option>
                                        <option value="2">Vespertino</option>
                                        <option value="3">Nocturno</option>                            
                                    </select>
                            </div>

                            <div>
                                <label for="linea">Linea:</label class="form-label"><br>                       

                                    <select name="linea" id="linea" class="form-control">
                                        <option value="0">Elige una opción</option>
                                        <option value="1">Linea 1</option>
                                        <option value="2">Linea 2</option>
                                        <option value="3">Linea 3</option>  
                                        <option value="4">Linea 4</option> 
                                        <option value="5">Linea 5</option> 
                                        <option value="6">Linea 6</option> 
                                        <option value="7">Linea 7</option> 
                                        <option value="8">Linea 8</option> 
                                        <option value="9">Linea 9</option>                           
                                    </select>
                            </div>

                            <div>
                                <label for="equipo">Equipo:</label class="form-label"><br>                       

                                    <select name="equipo" id="equipo" class="form-control">
                                        <option value="">Elige una opción</option>
                                        <option value="1">Equipo 1</option>
                                        <option value="2">Equipo 2</option>
                                        <option value="3">Equipo 3</option> 
                                        <option value="4">Equipo 4</option> 
                                        <option value="5">Equipo 5</option> 
                                        <option value="6">Equipo 6</option>                            
                                    </select>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="falla">Falla</label>
                                <input type="text" id="falla" name="falla" class="form-control form-control-lg" required/>                                
                              </div>
            

                    

                        <div class="pt-1 mb-4">
                            <button class="btn btn-dark btn-lg btn-block" type="submit">Enviar</button>
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