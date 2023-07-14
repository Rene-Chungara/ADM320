<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisis Crediticio</title>
    <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
</head>
<body>
    <header class="header">
        <div class="logo">
            <h1>Analisis Crediticio <span class="material-symbols-outlined">multiline_chart</span> </h1>
        </div>
        <nav class="main-menu">
            <ul>
                <li><a href="{{ route('inicio') }}">Inicio</a></li>
                <li><a href="{{ route('calculadora') }}">Calcula tu credito</a></li>
                <li><a href="#">Desarrolladores</a></li>
            </ul>
        </nav>
    </header>

    <section class="main-section">
        <h2 class="section-title">La importancia del análisis crediticio para tomar decisiones financieras informadas</h2>
        <p class="section-content">
            El análisis crediticio es el proceso de evaluar la información financiera de una persona, 
            empresa u otra entidad para tomar decisiones informadas sobre la concesión de crédito. Ayuda a determinar 
            la capacidad de pago y el riesgo de incumplimiento de los prestatarios, permitiendo a las organizaciones tomar 
            decisiones financieras seguras y rentables. El análisis crediticio minimiza los riesgos, establece condiciones 
            de crédito adecuadas y optimiza la gestión de la cartera de crédito. Es fundamental para tomar decisiones 
            financieras sólidas y establecer relaciones financieras saludables.
        </p>
    </section>

    <div class="section-wrapper">
        <section class="section">
            <img src="{{asset('images/Análisis_financiero.jpg')}}" alt="Análisis Financiero" width="90%">
            <h2 class="section-title">Análisis de Datos Financieros</h2>
            <p class="section-content">
                El análisis de los estados financieros es el proceso de examinar y evaluar la información financiera 
                de una empresa para comprender su situación y desempeño. Ayuda a tomar decisiones informadas y evaluar 
                la salud financiera de la empresa.
            </p>
        </section>
    
        <section class="section">
            <h2 class="section-title">Los Ratios Financieros</h2>
            <p class="section-content">
                Son herramientas para medir y evaluar la salud financiera de una empresa. 
                Estas medidas ayudan a entender su rendimiento, rentabilidad y solvencia, entre otros aspectos. Son útiles 
                para tomar decisiones informadas y comparar el desempeño financiero de la empresa.
            </p>
        </section>
    
        <section class="section">
            <img src="{{asset('images/IAenlasfinanzas.jpg')}}" alt="Análisis Financiero y la inteligencia artificial" width="100%">
            <h2 class="section-title">Beneficios de la IA</h2>
            <p class="section-content">La inteligencia artificial en el análisis crediticio evalua la capacidad 
                de pago y el riesgo crediticio de las personas. Ayuda a tomar decisiones más rápidas y precisas 
                al analizar grandes cantidades de datos financieros y no financieros. Identifica patrones ocultos en 
                los datos y ayuda a reducir el riesgo de incumplimiento al otorgar crédito.
            </p>
        </section>
    </div>

    <footer class="footer">
        <p>© 2023. Todos los derechos reservados.</p>
    </footer>

    <script>
        function toggleMenu() {
            var menu = document.getElementById('nav-links');
            menu.classList.toggle('active');
        }
    </script>

</body>
</html>





