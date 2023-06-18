<div class="layout-wrapper layout-content-navbar">
<div class="layout-container">
<div class="layout-page">
   <div class="content-wrapper">
      <div class="container-xxl flex-grow-1 container-p-y">
         <!-- <h1 class="fw-bold py-0 mb-3" align="center">Bienvenido</h1> -->
         <div class="row mb-0">
            <div class="col-md-6 col-lg-3"></div>
            <div class="col-md-6 col-lg-6">
               <div class="card text-center mb-3">
                  <div class="card-body">
                     <p class="card-text"> 
                     <h3>Cajas </h3>
                     <p>
                        El usuario <?php echo $usuario_en_el_sistema; ?> solicito certificado de conclusión de estudios <br/>
                        Un requisito es haber depositado un total de 
                     <h6>65 Bs</h6>
                     Este monto es con el concepto de "CONCLUSION DE ESTUDIOS" <br/>
                     </p>
                     <h5>Verificando deposito ... </h5>
                     <div class="card">
                        <h4 class="card-header">
                        Deposito realizado para el tramite</h5>
                        <div class="card">
                           <div class="col-md-12 mb-4" align='center'>
                              <div class="card">
                                 <h5 class="card-header">Documento de pago realizado</h5>
                                 <div class="card-body">
                                    <?php 
                                       echo "<embed align='center' type='application/pdf' src='certificacion/verificacion_de_pago/".$filacerti['nombre_verificacion']."' height='450' width='50%'>";
                                       ?>
                                 </div>
                             
                        </div>
                        <p class="card-header" align='center'>
                           Si los datos están llenados correctamente, responda <strong>SI</strong>, caso contrario <strong>NO</strong>
                        </p>
                     </div>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
   </div>
</div>