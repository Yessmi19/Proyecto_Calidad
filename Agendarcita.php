<?php
// Inicia la sesión de PHP al inicio del script
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Agendar cita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
</head>
<body>
    <div class="header">
        <img src="Imagenes/Logoo.png" alt="Logo" style="width: 135px;">
        <div class="user-info">
            <img class="user-icon" src="Imagenes/IconUser.png" alt="Icono de usuario">
            <div id="usernameDisplay" style="display: none;"></div>
        </div>
    </div>
    <div class="horizontal-divider"></div>
    <div class="sidebar">
        <nav>
            <ul>
                <li><a href="Home.php"><img src="Imagenes/home+.png" alt="Icon 1"> Home</a></li>
                <li><a href="Agendarcita.php"><img src="Imagenes/calendario.png" alt="Icon 2"> Agendar cita</a></li>
                <li><a href="Historial.html"><img src="Imagenes/historial.png" alt="Icon 3"> Historial</a></li>
                <li><a href=""><img src="Imagenes/Servicios1.png" alt="Icon 4"> Servicios</a></li>
                <li><a href=""><img src="Imagenes/especialistas.png" alt="Icon 5"> Especialistas</a></li>
                <li><a href=""><img src="Imagenes/contacto.png" alt="Icon 6"> Contacto</a></li>
            </ul>
            <ul style="padding-top: 50px;">
                <li><a href=""><img src="Imagenes/confi.png" alt="Icon 7">Configuración</a></li>
                <li><a href="Login.php" id="logout-link"><img src="Imagenes/salida.png" alt="Icon 8"> Salir</a></li>
            </ul>
        </nav>
    </div>
    <div class="sidebar-right" style="padding-top: 75px">
        <h4 class="user-na">Agenda tu cita</h4>
    </div>
    <div class="form-container">
        <form id="appointment-form">
            <label for="specialist-type">Tipo de Especialista:</label>
            <select id="specialist-type" style="width: 319px;" name="specialist-type">
                <option value="general">Psicologo individual</option>
                <option value="psiquiatra">Psiquiatra</option>
                <option value="psicologoFamiliar">Terapeutas familiar y de parejas</option>
                <option value="psicologoGrupal">Terapia grupal</option>
            </select>
            <div id="specialists-list" class="specialists-list">
                <!-- Especialistas generales -->
                <div class="specialist general">
                    <img  src="Imagenes/Especialista 1.jpg" alt="Dra. Elena">
                    <h3>Dra.Elena Montenegro </h3>
                    <p>La Dra. Montenegro es una psicóloga clínica con experiencia en terapia cognitivo-conductual, enfocada en ayudar a los clientes a identificar y cambiar patrones de pensamiento y comportamiento que causan malestar emocional. Tiene un enfoque práctico y basado en la evidencia para tratar trastornos de ansiedad, depresión, y problemas de autoestima</p>
                    <button>Seleccionar</button>
                </div>
                <div class="specialist general">
                    <img src="Imagenes/Especialista 2.jpg" alt="Dr. Alejandro">
                    <h3>Dr. Alejandro Vargas</h3>
                    <p>El Dr. Alejandro Vargas es un psicólogo clínico especializado en terapia cognitivo-conductual y terapia dialéctico-conductual. Se enfoca en tratar trastornos de ansiedad, del estado de ánimo y problemas emocionales. Utiliza un enfoque basado en la evidencia para ayudar a los pacientes a cambiar patrones de pensamiento negativos y mejorar su calidad de vida.</p>
                    <button>Seleccionar</button>
                </div>
                <div class="specialist general">
                    <img src="Imagenes/Especialista 3.jpg" alt="Dra. Carolina ">
                    <h3>Dra. Carolina Ríos</h3>
                    <p>La Dra. Carolina Ríos es una psicóloga clínica con experiencia en terapia cognitivo-conductual y terapia de aceptación y compromiso. Se especializa en el tratamiento de ansiedad, depresión y estrés. Su enfoque es práctico y basado en la evidencia, ayudando a los clientes a desarrollar habilidades para mejorar su bienestar emocionaly problemas de autoestima.</p>
                    <button>Seleccionar</button>
                </div>
                <!-- Psicólogos -->
                <div class="specialist psiquiatra">
                    <img src="Imagenes/Especialista 4.jpg" alt="Dr. Carlos">
                    <h3>Dr. Carlos Méndez</h3>
                    <p>El Dr. Carlos Méndez es un psicólogo clínico especializado en terapia cognitivo-conductual y terapia dialéctico-conductual. Trabaja con pacientes para tratar trastornos de ansiedad y del estado de ánimo. Utiliza un enfoque práctico y basado en la evidencia para promover cambios positivos y duraderos.</p>
                    <button>Seleccionar</button>
                </div>
                <div class="specialist psiquiatra">
                    <img src="Imagenes/Especialista 5.jpg" alt="Dra. Laura">
                    <h3>Dra. Laura Gómez</h3>
                    <p>La Dra. Laura Gómez es una psicóloga clínica con experiencia en terapia cognitivo-conductual, enfocada en ayudar a los clientes a gestionar la ansiedad, la depresión y el estrés. Su enfoque basado en la evidencia permite a los pacientes desarrollar habilidades para mejorar su bienestar emocional.</p>
                    <button>Seleccionar</button>
                </div>
                <!-- Psicólogos familiares -->
                <div class="specialist psicologoFamiliar">
                    <img src="Imagenes/Especialista 6.jpg" alt="Dra. Ana">
                    <h3>Dra. Ana Martínez</h3>
                    <p>La Dra. Ana Martínez es una psicóloga familiar con experiencia en terapia sistémica. Ayuda a las familias a mejorar su comunicación y resolver conflictos. Su enfoque práctico y basado en la evidencia trata problemas de relaciones, dinámicas familiares y adaptación a cambios importantes.</p>
                    <button>Seleccionar</button>
                </div>
                <!-- Psicólogos grupales -->
                <div class="specialist psicologoGrupal">
                    <img src="Imagenes/grupal1.jpg" alt="Dra. Maria">
                    <h3>Dra. María Sánchez</h3>
                    <p>La Dra. María Sánchez es una psicóloga grupal con experiencia en terapia de grupo, enfocada en facilitar el apoyo mutuo y el crecimiento personal. Utiliza enfoques basados en la evidencia para tratar ansiedad, depresión y mejorar habilidades sociales en un entorno de grupo seguro y colaborativo.</p>
                    <button>Seleccionar</button>
                </div>
                <div class="specialist psicologoGrupal">
                    <img src="Imagenes/grupal2.jpg" alt="Dra. Clara">
                    <h3>Dra. Clara Ruiz</h3>
                    <p>La Dra. Clara Ruiz es una psicóloga grupal con experiencia en terapia dialéctico-conductual grupal. Facilita grupos para tratar trastornos de la conducta y problemas emocionales. Su enfoque práctico y colaborativo ayuda a los participantes a enfrentar desafíos emocionales y mejorar sus relaciones interpersonales.</p>
                    <button>Seleccionar</button>
                </div>
                <div class="specialist psicologoGrupal">
                    <img src="Imagenes/grupal3.jpg" alt="Dr. Andrés">
                    <h3>Dr. Andrés Castro</h3>
                    <p>El Dr. Andrés Castro es un psicólogo grupal especializado en terapia cognitivo-conductual grupal. Trabaja con grupos para abordar problemas de salud mental, fomentando la interacción y el aprendizaje compartido. Su enfoque ayuda a los participantes a desarrollar estrategias para manejar el estrés y mejorar su bienestar emocional.</p>
                    <button>Seleccionar</button>
                </div>
            </div>
        </form>
        <div class="appointment-details">
            <label for="date">Selecciona fecha y hora de cita</label>
            <input type="date" id="date">
            <input type="time" id="time">
            <label for="reason">Motivo de la cita</label>
            <textarea id="reason" rows="4"></textarea>
        </div>
        <div class="submit-btn">
            <button>Siguiente</button>
        </div>
    </div>
    <script>
        document.getElementById('logout-link').addEventListener('click', function(event) {
            event.preventDefault(); // Evita que el enlace navegue inmediatamente
            var confirmation = confirm('¿Estás seguro de que deseas salir?');
            if (confirmation) {
                window.location.href = this.href; // Navega a la página de logout si el usuario confirma
            }
        });

        document.addEventListener('DOMContentLoaded', function () {
            // Obtener la URL actual
            const currentUrl = window.location.pathname.split('/').pop();

            // Seleccionar todos los enlaces de la barra lateral
            const menuItems = document.querySelectorAll('.sidebar nav ul li a');

            menuItems.forEach(link => {
                // Comprobar si el enlace coincide con la URL actual
                if (link.getAttribute('href') === currentUrl) {
                    // Añadir la clase 'active' al elemento li padre del enlace
                    link.parentElement.classList.add('active');
                }
            });
        });  
        document.addEventListener('DOMContentLoaded', function() {
        // Obtener el nombre de usuario de la sesión PHP
        const nombreUsuario = "<?php echo isset($_SESSION['nombre']) ? $_SESSION['nombre'] : '' ?>";
        // Mostrar el nombre de usuario si está definido
        if (nombreUsuario) {
            document.getElementById('usernameDisplay').textContent = nombreUsuario;
            document.getElementById('usernameDisplay').style.display = 'block';
            }
        });

    </script>
</body>
</html>
