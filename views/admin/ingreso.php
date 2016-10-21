<section id="main-content">
    <section class="wrapper site-min-height">
     <div class="row">
        <div class="col-sm-12 main-chart">
            <h3 class="text-center" style="margin-bottom:50px;" >Ingresar Usuario</h3>            
        </div>
        <form class="form-horizontal" id="formuser" method="post">
        <div class="col-sm-6 col-sm-offset-3">
             <div class="form-group">
                 <label class="col-sm-4 control-label">Nombre Completo</label>
                 <div class="col-sm-8">
                     <input type="text" id="nombre" name="nombre" class="form-control" required>
                 </div>
             </div>
             <div class="form-group">
                 <label class="col-sm-4  control-label">Nombre de Usuario</label>
                 <div class="col-sm-8">
                     <input type="text" id="usuario" name="usuario" class="form-control" required>
                 </div>
             </div>
             <div class="form-group">
                 <label class="col-sm-4  control-label">Correo</label>
                 <div class="col-sm-8">
                     <input type="email" id="mail" name="mail" class="form-control" required>
                 </div>
             </div>
             <div class="form-group">
                 <label class="col-sm-4 control-label">Perfil</label>
                 <div class="col-sm-8">
                   <select name="perfil" id="perfil" class="form-control">
                    <option value="">Escoja un perfil</option>
                    <option value="1">Administrador</option>
                    <option value="0">Vendedor</option>
                 </select>  
                 </div>                 
             </div>
             <div class="form-group">
                 <label class="col-sm-4  control-label">Contraseña</label>
                 <div class="col-sm-8">
                     <input type="text" id="password" name="password" class="form-control" maxlength="5" required> 
                 </div>
             </div>
             <div class="form-group">
                 <label class="col-sm-4 control-label">Repetir Contraseña</label>
                 <div class="col-sm-8">
                     <input type="text" id="password2" name="password2" class="form-control" maxlength="5" required>
                 </div>
             </div>                                                          
             <div class="form-group">
                  <button class="btn btn-primary form-control" id="btn_usuario" >Registrar</button>
             </div>             
          </div>   
        </form>
      </div>     
     </section>
 </section>