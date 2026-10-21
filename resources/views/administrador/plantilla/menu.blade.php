 <!-- MENU SIDEBAR-->
 <aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        
       
            <h5 class="m-0 text-uppercase text-primary lg-3">
                <img class="img-fluid" width="50" height="50" src="{{asset('frontdend/img/logo.jpg')}}" alt="Panel Admistrativo">
                Panel
            </h5>
       
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active ">
                    <a class="" href="{{route('inicio.index')}}">
                        <i class="fas fa-tachometer-alt"></i>Principal</a>
                   
                </li>
                <li>
                    <a href="{{route('curso.index')}}">
                        <i class="fas fa-chart-bar"></i>Cursos</a>
                </li>
                <li>
                    <a href="{{route('municipio.index')}}">
                        <i class="fas fa-chart-bar"></i>Municipios</a>
                </li>
                <li>
                    <a href="{{route('estudianteinscritos.index')}}">
                        <i class="fas fa-chart-bar"></i>Estudiantes Inscritos</a>
                </li>
                <li>
                    <a href="{{route('baner.index')}}">
                        <i class="fas fa-chart-bar"></i>Baner</a>
                </li>
                
                <li>
                    <a href="">
                        <i class=""></i></a>
                </li>
             
              
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->