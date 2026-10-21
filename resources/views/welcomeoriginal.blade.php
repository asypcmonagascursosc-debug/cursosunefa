<!DOCTYPE html>
<html lang="es">
    <!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>UNEFA-Cursos Comunitarios</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-..." crossorigin="anonymous">
  <style>
    :root {
      --brand-primary: #1e3a8a; /* ajuste a branding de UNEFA si se conoce */
      --brand-accent: #0ea5e9;
    }
    body {
      padding-top: 56px;
    }
    .hero {
      background: linear-gradient(135deg, rgba(30,58,138,0.95), rgba(14, 82, 135, 0.95));
      color: #fff;
      padding: 4rem 0;
    }
    .hero .btn { min-width: 180px; }
    .course-card{
      height:180px;
      object-fit: cover;
           
    }
    .card:hover {
      transform: translateY(-2px);
      transition: transform 0.2s;
    }
    footer {
      background: #d40808;
    }
.imagenes .img {
      min-height:80px;
    }
  .slider-container {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            overflow: hidden;
            position: relative;
        }
        
        .slider {
            display: flex;
            transition: transform 0.5s ease;
        }
        
        .slide {
            min-width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }
        
        .curso-card {
            background-color: #f5f5f5;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(110, 7, 30, 0.1);
            height:500px;
            
                    }
        
        .curso-titulo {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #f01717;
        }
        
        .curso-descripción {
            color: #666;
            margin-bottom: 15px;
        }
        
        .boton-descripción {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        
        .slider-nav {
            text-align: center;
            margin-top: 15px;
        }
        
        .slider-dot {
            height: 12px;
            width: 12px;
            margin: 0 5px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            cursor: pointer;
        }
        
        .slider-dot.active {
            background-color: #4CAF50;
        }
        
        .slider-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0,0,0,0.5);
            color: white;
            border: none;
            padding: 15px;
            cursor: pointer;
            z-index: 10;
            border-radius: 50%;
        }
        
        .prev {
            left: 10px;
        }
        
        .next {
            right: 10px;
        }
       
         :root {
      --brand-primary: #1e3a8a; /* ajuste a branding de UNEFA si se conoce */
      --brand-accent: #0ea5e9;
    }
    body {
      padding-top: 56px;
    }
    .hero {
      background: linear-gradient(135deg, rgba(30,58,138,0.95), rgba(14, 82, 135, 0.95));
      color: #fff;
      padding: 4rem 0;
    }
    .hero .btn { min-width: 180px; }
    .course-card{
      height:180px;
      object-fit: cover;
           
    }
    .card:hover {
      transform: translateY(-2px);
      transition: transform 0.1s;
    }
    footer {
      background: #f8f9fa;
    }
.imagenes .img {
      min-height:px;
    }
        .slider-container {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            overflow: hidden;
            position: relative;
            height: 800%;
        }
        
        .slider {
            display: flex;
            transition: transform 0.0s ease;
        }
        
        .slide {
            min-width:100%;
            padding: 20px;
            box-sizing: border-box;
        }
        
      
        .curso-titulo {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #333;
        }
        
        .curso-descripcion {
            color: #666;
            margin-bottom: 15px;
        }
        
       
        
        .slider-nav {
            text-align: center;
            margin-top: 15px;
        }
        
        .slider-dot {
            height:px;
            width: 12px;
            margin: 0 5px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            cursor: pointer;
        }
        
        .slider-dot.active {
            background-color: #4CAF50;
        }
        
        
        .prev {
            left: 10px;
        }
        
        .next {
            right: 10px;
        }

        .card-img-top{
            height:70%;
            width:100%;
           

 }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
            <a class="navbar-brand" href="#">UNEFA - Cursos Comunitarios</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Abrir menú">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">
          
          <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Registro</a></li>
          
          <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>
   <header class="hero d-flex align-items-center">
    <div class="imagenes"></div>
    
    <div class="container text-center">

      <h1 class="display-5 fw-bold">Cursos comunitarios impartidos por UNEFA</h1>
      <p class="lead mb-4">Capacítate con cursos accesibles para tu comunidad. Inscríbete y transforma tu futuro.</p>
      <a href="#cursos" class="btn btn-light btn-lg me-2">Ver cursos</a>
      <a href="#registro" class="btn btn-outline-light btn-lg">Registro de interesados</a>
    </div>
      
  </header>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos Disponibles</title>
    
    
</head>
<body>
    <h2 style="text-align: center;">Cursos disponibles</h2>
    
    <div class="slider-container">
        <button class="slider-arrow prev">❮</button>
        <button class="slider-arrow next">❯</button>
        
        <div class="slider">
  
            <div class="slide">
                <div class="curso-card">
                    <h3 class="curso-titulo">NOMBRE DEL CURSO</h3>
                     <a href="#" class="boton-descripción">Descripción</a>
                
                     <img src="images/redessociales.jpg" class="card-img-top" alt="Curso 1">
                </div>
            </div>
            
          
        </div>
        
        <div class="slider-nav">
            <span class="slider-dot active"></span>
            <span class="slider-dot"></span>
            <span class="slider-dot"></span>
            <span class="slider-dot"></span>
            <span class="slider-dot"></span>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.querySelector('.slider');
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.slider-dot');
            const prevBtn = document.querySelector('.prev');
            const nextBtn = document.querySelector('.next');
            
            let currentIndex = 0;
            const slideCount = slides.length;
            
            function updateSlider() {
                slider.style.transform = `translateX(-${currentIndex * 100}%)`;
                
                // Update dots
                dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentIndex);
                });
            }
            
            // Next slide
            nextBtn.addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % slideCount;
                updateSlider();
            });
            
            // Previous slide
            prevBtn.addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + slideCount) % slideCount;
                updateSlider();
            });
            
            // Dot navigation
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    currentIndex = index;
                    updateSlider();
                });
            });
            
            // Auto slide (opcional)
            setInterval(() => {
                currentIndex = (currentIndex + 1) % slideCount;
                updateSlider();
            }, 5000);
        });
    </script>
    <footer class="py-3 text-center small text-muted">
    © 2025 UNEFA - Cursos Comunitarios. Todos los derechos reservados.
  </footer>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>



</body>
</html>
</body>
</html>