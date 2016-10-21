<section id="container" >     
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?php echo URL?>admin/index" class="logo"><b>Administrador</b></a>
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
              	  <h5 class="centered"><?php echo session::getValue('nombre');?></h5>
              	  	
                  <li class="mt">
                      <a class="active" href="<?php echo URL?>admin/index" id="escritorio">
                          <i class="fa fa-dashboard"></i>
                          <span>Escritorio</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" id="user">
                          <i class="fa fa-user"></i>
                          <span>Usuario</span>
                      </a>
                      <ul class="sub">
                          <li id="user_ingreso"><a  href="<?php echo URL?>admin/user_ingreso">Ingreso</a></li>
                          <li id="user_listado"><a  href="<?php echo URL?>admin/user_listado">Listado</a></li>                          
                      </ul>
                  </li>                

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
     
   
   