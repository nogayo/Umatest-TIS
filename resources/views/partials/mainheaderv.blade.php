<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
     @if(Auth::check()) 
    <a href="{{ url('/home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>U</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>UmaTest</b></span>
    </a>
    @else 
    <a href="{{ url('/') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>S</b>PG</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Inicio</span>
    </a>
    @endif 
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <!-- Navbar Right Menu -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">

             <li class="active"><a href="{{ url('/resenia_historica')}}">Reseña histórica<span class="sr-only">(current)</span></a></li>
             <li class="active"><a href="{{ url('/mision') }}">Misión<span class="sr-only">(current)</span></a></li>
             <li class="active"><a href="{{ url('/vision') }}">Visión<span class="sr-only">(current)</span></a></li>
            

             <li class="active"><a href="{{ url('/contactos') }}">Contactos<span class="sr-only">(current)</span></a></li>
             <li class="active"><a href="{{ url('/ayuda') }}">Ayuda<span class="sr-only">(current)</span></a></li>
        
        



       <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">      
            <li class="dropdown user user-menu">
              <div class="pull-rigth">
                                
             <li ></li>
             <li ></li>            
                 </div>
            </li>
             </ul>
        </div>



  <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">      
            <li class="dropdown user user-menu">
                            <div class="pull-center">
                                 <li class="active">
                                <a href="{{ route('auth.login') }}" > Iniciar sesión <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="active">
                                <a href="{{ route('auth.register') }}" > Registrarse <span class="sr-only">(current)</span></a>
                                </li>
                          
                                
                        </div>
                     </li>
                 </ul>
               </div>
             </ul>              
        </div>        
    </nav>
</header>