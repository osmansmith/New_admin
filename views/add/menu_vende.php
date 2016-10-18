
    <section id="container" >
     
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Cambiar Menú"></div>
              </div>
            <!--logo start-->
            <a href="<?php echo URL?>vende/index" class="logo"><img src="<?php echo URL?>/public/assets/img/logo-top.png" class="img-responsive"></a>
            <!--logo end-->
           
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo URL?>user/salir">Salir</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
     <!--Menu lateral izquierdo-->
           
     <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="<?php echo URL?>public/assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo session::getValue('nombre');?><br><small>Vendedor</small></h5>
              	  	
                  <li class="mt">
                      <a href="<?php echo URL?>vende/index" id="escritorio">
                          <i class="fa fa-dashboard"></i>
                          <span>Escritorio</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" id="cot" >
                          <i class="fa fa-desktop"></i>
                          <span>Cotizaciones</span>
                      </a>
                      <ul class="sub">
                          <li id="cot_ingresar"><a  href="<?php echo URL?>vende/ingreso">Ingresar</a></li>
                          <li id="cot_listar"><a  href="<?php echo URL?>vende/listado">Listar</a></li>                                                                          
                      </ul>
                  </li>            
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
   
   