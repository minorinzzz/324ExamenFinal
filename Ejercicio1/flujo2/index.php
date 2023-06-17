
<?php ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css" />
    
    <style>
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}


body {
    font-family: 'Spartan', sans-serif;
}

.wave {
    position: fixed;
    height: 100%;
    left: 0;
    bottom: 0;
    z-index: -1;
}

.container {
    width: 100vw;
    height: 100vh;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 7rem;
    padding: 0 2rem;

}

.img {
    display: flex;
    justify-content: flex-end;
    align-items: center;
}


.login-container {
    display: flex;
    align-items: center;
    text-align: center;
}

form {
    width: 360px;
}

form h2 {
    font-size: 2.9rem;
    text-transform: uppercase;
    margin: 15px 0;
    color: #333333;
}


.input-div {
    position: relative;
    display: grid;
    grid-template-columns: 7% 93%;
    margin: 25px 0;
    padding: 5px 0;
    border-bottom: 2px solid #d9d9d9;
}


.input-div:after, .input-div:before {
    content: '';
    position: absolute;
    bottom: -2px;
    width: 0;
    height: 2px;
    background-color: #38d39f;
    transition: .3s;
}

.input-div:after {
    right: 50%;
}

.input-div:before {
    left: 50%;
}

.input-div.focus .i i {
    color: #38d39f;
}

.input-div.focus div h5 {
    top: -5px;
    font-size: 15px;
}


.input-div.focus:after , .input-div.focus:before {
    width: 50%;
}

.input-div.one {
    margin-bottom: 4px;
}

.input-div.two {
    margin-bottom: 4px;
}

.i {
    display: flex;
    justify-content: center;
    align-items: center;
}

.i i {
    color: #d9d9d9;
    transition: .3s;
}

.input-div > div {
    position: relative;
    height: 45px;
}

.input-div > div h5{
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #999;
    font-size: 18px;
    transition: .3s;
}

.input {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    border: none;
    outline: none;
    background: none;
    padding: 0.5rem 0.7rem;
    font-size: 1.2rem;
    font-family: 'Spartan', sans-serif;
    color: #555;
}

a {
    display: block;
    text-align: right;
    text-decoration: none;
    color: #999;
    font-size: 0.9rem;
    transition: 0.3s;
}

.btn {
    display: block;
    width: 100%;
    height: 50px;
    border-radius: 25px;
    margin: 1rem 0;
    font-size: 1.2rem;
    outline: none;
    border: none;
    background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
    cursor: pointer;
    color: #fff;
    font-family: 'Spartan', sans-serif;
    background-size: 200;
    transition: .5s;
}

.btn:hover {
    background-position: right;
}

a:hover {
    color: #38d39f;
}

.img img{
    width: 500px;
}

.avatar {
    width: 100px;
}

@media screen and (max-width: 1050px) {
    .container {
        grid-gap: 5rem;
    }
}

@media screen and (max-width: 1000px) {
    form{
        width: 290px;
    }

    form h2 {
        font-size: 2.4rem;
        margin: 8px 0;
    }

    .img img {
        width: 400px;
    }
}

@media screen and (max-width: 900px) {
    .img {
        display: none;
    }

    .container{
        grid-template-columns: 1fr;
    }

    .wave{
        display: none;
    }

    .login-container {
        justify-content: center;
    }
}
    </style>
  </head>



<body>
    <img class="wave" src="assets/wave.png" alt="wave image form undraw" />
    <div class="container">
    <div class="img">
        <img src="assets/bg.svg" alt="backround from undraw" />
    </div>
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="card">
          <div class="card-body">
            <h4 class="mb-2" align="center">Bienvenido</h4>
            <form class="mb-3" action="indexcontrol.php" method="GET">
              <div class="mb-3">
                <label class="form-label">Usuario</label>
                <input type="text" class="form-control" placeholder="Ingrese su usuario" name='usuario' autofocus />
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Contraseña</label>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" class="form-control" name="contrasenia" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i> </span>
                </div>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit" value="Aceptar" name="Aceptar">Ingresar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      
      </div>
    </div>

  </body>