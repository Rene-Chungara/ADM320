<html>
    <head>
            <title>Analisis Crediticio</title>
            <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
            <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
            <link rel="stylesheet" href="{{asset('assets/style.css')}}">
        <meta name="csrf-token" content="{{ csrf_token()}}">

    </head>
    </style>
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
            <h2 class="section-title">¿Como funciona nuestro programa?</h2>
            <p class="section-content">
                Nuestro programa te ayuda a estimar cuánto tendrías que pagar cada mes en función del monto del préstamo, la tasa 
                de interés y el plazo. Simplemente ingresa estos datos y nuestro programa calculará rápidamente el monto de tus 
                pagos mensuales. Pero eso no es todo. Nuestra herramienta también tiene en cuenta tu nivel de endeudamiento recomendado 
                para brindarte recomendaciones personalizadas. Basado en tus ingresos y estándares de capacidad de endeudamiento, 
                nuestro programa te dará una recomendación sobre si el préstamo se ajusta a tus posibilidades financieras o si 
                sería aconsejable considerar otras alternativas. 
            </p>
        </section>
        <!--CALCULADORA DE PRESTAMO BANCARIO-->
        <div class="section-wrapper">
            <div class="calculator">

                <h1>Calculadora</h1>
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

                <script src="{{asset('assets/script.js')}}"></script> <!--Script-->
            </div>

            <div class="chat-container">
                <h1>Recomendación</h1>
                <div class="chat">
                    <div id="chat-messages"></div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <p>© 2023. Todos los derechos reservados.</p>
        </footer>

    </body>    
</html>
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
        /*Fin del ejercicio*/
        var comment = "Imagina que eres un analista financiero experto y quieren un préstamo bancario de " + monto+ " bolivianos(BS) a " + meses+ " meses y un interés de " + interes+ "%. El monto a pagar de forma mensual es de "+MontoAPagar+" y tiene con un ingreso de "+ingreso+". Calcula su capacidad de endeudamiento que lo recomendable tiene que ser menor del 50% y Solo dime la recomendación bien completa y breve(que piensas del plazo,interes y demas). Y si es razonable o no el prestamo bancario.";
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

