<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/style1.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link id='favicon' rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/x-png">
    <title>Analisis Crediticio</title>
</head>

    <body>
        <!-- navbar starts -->
        <header>
                <a href="/" class="logo"><i class="fa-solid fa-chart-simple"></i> Finanzas</a>

                <div id="menu" class="fas fa-bars"></div>
                <nav class="navbar">
                    <ul>
                    <li><a class="active" href="#home">Inicio</a></li>
                    <li><a href="#about">Información</a></li>
                    <li><a href="#skills">Calculadora</a></li>
                    </ul>
                </nav>
        </header>
        <!-- navbar ends -->


        <!-- hero section starts -->
        <section class="home" id="home">
            <div id="particles-js"></div>

            <div class="content">
                <h2>Análisis<br/> Crediticio <span> </span></h2>
                <p>Contenido: <span class="typing-text"></span></p>
                <a href="#about" class="btn"><span>Información</span>
                    <i class="fas fa-arrow-circle-down"></i>
                </a>
            </div>
            <div class="image">
                <img draggable="false" class="tilt" src="{{asset('images/analisis.png')}}" alt="">
            </div>
        </section>
        <!-- hero section ends -->


        <!-- Comienzo de informacion -->
        <section class="about" id="about">
            <h2 class="heading"><i class="fas fa-user-alt"></i> Conceptos de <span>Información</span></h2>
            <div class="row">

                <div class="image">
                    <img draggable="false" class="tilt" src="{{asset('images/analisisfinanciero2.png')}}" alt="">
                </div>
                <div class="content">
                    <h3>Análisis Financieros</h3>
                    <span class="tag">EALDE Business School</span>
                    <p>
                        El análisis financiero es una herramienta esencial en la 
                        administración y dirección de empresas. Consiste en evaluar la 
                        situación actual y pasada de una organización, así como prever su 
                        evolución futura. Este análisis utiliza técnicas como indicadores, 
                        ratios y razones financieras para diagnosticar la situación y 
                        perspectivas de la entidad. 
                    </p>
                    <div class="resumebtn">
                        <a href="https://www.ealde.es/que-es-analisis-financiero/" target="_blank" class="btn"><span>Más Información</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <div class="image">
                    <img draggable="false" class="tilt" src="{{asset('images/ratios.png')}}" alt="">
                </div>
                <div class="content">
                    <h3>Ratios Financieros</h3>
                    <span class="tag">Wolters Kluwer</span>
                    <p>
                        Los ratios financieros son indicadores que ayudan a analizar la 
                        situación económica de una empresa y tomar decisiones adecuadas. 
                        Al comparar estos ratios a lo largo del tiempo, se obtienen 
                        respuestas concretas sobre la gestión adecuada de la empresa, lo que 
                        facilita la adaptación a cambios y la implementación de soluciones más 
                        eficaces.
                    </p>
                    <div class="resumebtn">
                        <a href="https://www.wolterskluwer.com/es-es/expert-insights/ratios-financieros-cuales-son-como-se-calculan" target="_blank" class="btn"><span>Más Información</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <div class="image">
                    <img draggable="false" class="tilt" src="{{asset('images/IAenlasfinanzas.jpg')}}" alt="">
                </div>
                <div class="content">
                    <h3>Beneficios de la IA</h3>
                    <span class="tag">Worldsys</span>
                    <p>
                        Los beneficios destacados se encuentra una mayor seguridad en la protección 
                        de datos, mejor experiencia del usuario y atención al cliente las 24 horas a 
                        través de chatbots, servicios personalizados basados en el comportamiento de 
                        los usuarios, y ahorro de costos al eliminar procesos manuales.
                    </p>
                    <div class="resumebtn">
                        <a href="https://www.worldsys.co/5-beneficios-de-la-inteligencia-artificial-para-el-sector-financiero/" target="_blank" class="btn"><span>Más Información</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <div class="image">
                    <img draggable="false" class="tilt" src="{{asset('images/importancia.png')}}" alt="">
                </div>
                <div class="content">
                    <h3>Importancia del Análisis</h3>
                    <span class="tag">SciELO</span>
                    <p>
                        La importancia del análisis financiero radica en que permite identificar los 
                        aspectos económicos y financieros que muestran las condiciones en que opera la 
                        empresa con respecto al nivel de liquidez, solvencia, endeudamiento, eficiencia, 
                        rendimiento y rentabilidad, facilitando la toma de decisiones gerenciales, 
                        económicas y financieras en la actividad empresarial.
                    </p>
                    <div class="resumebtn">
                        <a href="http://ve.scielo.org/scielo.php?script=sci_arttext&pid=S1315-99842009000400009" target="_blank" class="btn"><span>Más Información</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fin de informacion -->

        <!-- skills section starts -->
        <section class="skills" id="skills">
            <h2 class="heading"><i class="fas fa-laptop-code"></i> Calculadora de <span>Préstamo</span></h2>
            <div class="row">
                <div class="content">
                    <h3>¿Como funciona nuestro programa?</h3>
                    <p>
                        Nuestro programa te ayuda a calcular tus pagos mensuales estimados según el monto 
                        del préstamo, la tasa de interés y el plazo. Además, considera tu nivel de endeudamiento 
                        recomendado para ofrecerte recomendaciones personalizadas. Basado en tus ingresos y 
                        capacidad de endeudamiento, el programa te indicará si el préstamo es adecuado para 
                        tus posibilidades financieras o si deberías considerar otras alternativas. Simplificando 
                        así el proceso de toma de decisiones sobre préstamos.
                    </p>
                </div>
            </div>

            <!--CALCULADORA DE PRESTAMO BANCARIO-->
            <div class="section-wrapper">
                <div class="calculator">
                    <h3>Calculadora</h3>
                    <div class="input-group">
                        <label for="loanAmount">Monto del préstamo:</label>
                        <input type="number" id="loanAmount" required>
                    </div>
                    <div class="input-group">
                        <label for="interestRate">Tasa de interés (%):</label>
                        <input type="number" id="interestRate" required>
                    </div>
                    <div class="input-group">
                        <label for="loanTerm">Plazo (meses):</label>
                        <input type="number" id="loanTerm" required>
                    </div>
                    <div class="input-group">
                        <label for="income">Ingresos mensuales:</label>
                        <input type="number" id="income" required>
                    </div>
                    <button id="calculateBtn">Calcular</button>
                    <div id="result" class="result"></div>        
                    <script src="{{asset('assets/script.js')}}"></script><!--Script-->
                </div>
                <div class="chat-container">
                    <h3>Recomendación</h3>
                    <div class="chat">
                        <div id="chat-messages"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- skills section ends -->

        <!-- footer section starts -->
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>Grupo 52</h3>
                    <p>Gracias por visitar el sitio web, si tienes alguna no dudes en preguntarnos. <br/></p>
                </div>
                <div class="box">
                    <h3>Enlaces rápidos</h3>
                    <a href="#home"><i class="fas fa-chevron-circle-right"></i> Inicio</a>
                    <a href="#about"><i class="fas fa-chevron-circle-right"></i> Información</a>
                    <a href="#skills"><i class="fas fa-chevron-circle-right"></i> Calculadora</a>
                </div>

                <div class="box">
                    <h3>Lenguajes de Programación</h3>
                    <div class="share">
                        <a href="https://laravel.com/" aria-label="Laravel" target="_blank" ><i class="fa-brands fa-laravel fa-lg"></i></a>
                        <a href="https://lenguajehtml.com/html/" aria-label="HTML5" target="_blank"><i class="fa-brands fa-html5 fa-lg"></i></a>
                        <a href="https://www.php.net/docs.php" aria-label="PHP" target="_blank" id="php"><i class="fa-brands fa-php fa-xl"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer section ends -->

        <!-- scroll top btn -->
        <a href="#home" aria-label="ScrollTop" class="fas fa-angle-up" id="scroll-top"></a>
        <!-- scroll back to top -->

        <!-- ==== ALL MAJOR JAVASCRIPT CDNS STARTS ==== -->
        <!-- jquery cdn -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- typed.js cdn -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js" integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- particle.js links -->
        <script src="{{asset('assets/particles.min.js')}}"></script>
        <script src="{{asset('assets/app.js')}}"></script>
        <!-- vanilla tilt.js links -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js" integrity="sha512-SttpKhJqONuBVxbRcuH0wezjuX+BoFoli0yPsnrAADcHsQMW8rkR84ItFHGIkPvhnlRnE2FaifDOUw+EltbuHg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- scroll reveal anim -->
        <script src="https://unpkg.com/scrollreveal"></script>
        <script
            type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"
        ></script>
        <!-- ==== ALL MAJOR JAVASCRIPT CDNS ENDS ==== -->

        <script src="{{asset('assets/script1.js')}}"></script>

        <!-- ==== PARTE DEL OPENAI ==== -->
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
        <script>
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
            $('#calculateBtn').on('click', function(){
                var monto = parseFloat($('#loanAmount').val());
                var interes = parseFloat($('#interestRate').val());
                var meses = parseInt($('#loanTerm').val());
                var ingreso = parseInt($('#income').val());
                /*Monto a pagar de forma mensual*/
                var monto = parseFloat(document.getElementById('loanAmount').value);
                var interes = parseFloat(document.getElementById('interestRate').value);
                var plazo = parseInt(document.getElementById('loanTerm').value);
                var interesmensual = interes / 100 / 12;
                var totalplazo = plazo;
                var numerador = monto * interesmensual;
                var denominador = 1 - Math.pow(1 + interesmensual, -totalplazo);
                var MontoAPagar = numerador / denominador;
                var endeudamiento = ingreso * 0.5;
                /*Fin del ejercicio*/
                var comment = "Quiero un préstamo total de " + monto+ " bolivianos a " + meses+ " meses y un interés de " + interes+ "% anual. El monto a pagar de forma mensual es de "+MontoAPagar.toFixed(2)+" y cuento con un ingreso de "+ingreso+".Mi nivel de endeudamiento es "+endeudamiento.toFixed(2)+" lo cual tiene que ser menor que "+MontoAPagar+" y Solo dime una buena recomendación bien completa y breve(que piensas del plazo,interes y demas).";
                $('#chat-messages').empty();
                $.ajax({
                    type: 'POST',
                    url:'{{url('send')}}',
                    data: {
                        'input': comment
                    },
                    success: function(data){
                        $('#chat-messages').append(`<div class="chatbot-message">
                                                        `+data+`
                                                    </div>`)
                    }
                })
        
                
            })
        </script>
    </body>
</html>