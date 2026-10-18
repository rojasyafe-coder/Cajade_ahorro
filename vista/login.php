
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#080d19">

    <title>CajaEstudiante | Inicio de sesión</title>

    <link rel="stylesheet" href="vista/css/estilos.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700;800&display=swap"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

    <main class="contenedor">

        <!-- PRESENTACIÓN DEL SISTEMA -->
        <section class="presentacion">

            <header class="marca">
                <div class="logo">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>

                <div class="marca-texto">
                    <h2>CajaEstudiante</h2>
                    <span>TecNM · TIC's</span>
                </div>
            </header>

            <div class="etiqueta">
                <span class="punto-verde"></span>
                Proyecto financiero educativo
            </div>

            <h1>
                Aprende a administrar hoy,
                <span class="texto-azul">transforma tu</span>
                <span class="texto-verde">futuro.</span>
            </h1>

            <p class="descripcion">
                Un entorno académico para practicar ahorro,
                aportaciones y préstamos responsables dentro
                de la sociedad de alumnos.
            </p>

            <!-- ESTADÍSTICAS -->
            <div class="estadisticas">

                <article class="estadistica">
                    <h3>5</h3>
                    <p>Módulos formativos</p>
                </article>

                <article class="estadistica">
                    <h3>100%</h3>
                    <p>Entorno educativo</p>
                </article>

                <article class="estadistica">
                    <h3>24/7</h3>
                    <p>Consulta y práctica</p>
                </article>

            </div>

            <!-- FLUJO FINANCIERO ILUSTRATIVO -->
            <div class="flujo-financiero">

                <div class="flujo-paso">
                    <div class="flujo-icono">
                        <i class="fa-solid fa-dollar-sign"></i>
                    </div>
                    <span>Aportación</span>
                </div>

                <div class="linea-flujo"></div>

                <div class="flujo-paso">
                    <div class="flujo-icono">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <span>Fondo común</span>
                </div>

                <div class="linea-flujo"></div>

                <div class="flujo-paso">
                    <div class="flujo-icono">
                        <i class="fa-solid fa-percent"></i>
                    </div>
                    <span>Meta grupal</span>
                </div>

            </div>

        </section>

        <!-- FORMULARIO DE ACCESO -->
        <section class="zona-login">

            <div class="tarjeta-login">

                <div class="encabezado-login">
                    <span class="subtitulo">BIENVENIDO DE NUEVO</span>
                    <h2>Inicia sesión</h2>

                    <p>
                        Accede al panel de administración
                        de la caja estudiantil.
                    </p>
                </div>

                <form action="#" method="post" id="formularioLogin">

                    <div class="grupo-campo">
                        <label for="correo">Correo institucional</label>

                        <div class="campo">
                            <i class="fa-regular fa-envelope"></i>

                            <input
                                type="email"
                                id="correo"
                                name="correo"
                                placeholder="usuario@tecnm.mx"
                                value="tesoreria@tecnm.mx"
                                autocomplete="username"
                                required>
                        </div>
                    </div>

                    <div class="grupo-campo">
                        <label for="contrasena">Contraseña</label>

                        <div class="campo">
                            <i class="fa-solid fa-lock"></i>

                            <input
                                type="password"
                                id="contrasena"
                                name="contrasena"
                                placeholder="Ingresa tu contraseña"
                                value="educativa"
                                autocomplete="current-password"
                                required>

                            <button
                                type="button"
                                class="boton-ver"
                                id="mostrarContrasena"
                                aria-label="Mostrar contraseña"
                                aria-pressed="false">

                                <i class="fa-regular fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <button type="submit" class="boton-entrar">
                        <span>Entrar al sistema</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>

                    <p class="aviso-formulario" id="avisoFormulario"
                       role="status" aria-live="polite"></p>

                </form>

                <!-- ACCESO DEMOSTRATIVO -->
                <div class="acceso-demo">

                    <div class="demo-texto">
                        <strong>Acceso demostrativo</strong>

                        <span>tesoreria@tecnm.mx</span>
                        <span>Contraseña: educativa</span>
                    </div>

                    <div class="demo-icono">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                </div>

            </div>

            <p class="nota-seguridad">
                <i class="fa-solid fa-circle-info"></i>
                Simulación académica · No realiza operaciones
                bancarias reales
            </p>

        </section>

    </main>

    <script>
        // Mostrar u ocultar contraseña
        const campoContrasena = document.getElementById('contrasena');
        const botonMostrar = document.getElementById('mostrarContrasena');

        botonMostrar.addEventListener('click', function () {
            const estaOculta = campoContrasena.type === 'password';

            campoContrasena.type = estaOculta ? 'text' : 'password';

            this.innerHTML = estaOculta
                ? '<i class="fa-regular fa-eye-slash"></i>'
                : '<i class="fa-regular fa-eye"></i>';

            this.setAttribute('aria-pressed', String(estaOculta));
            this.setAttribute(
                'aria-label',
                estaOculta ? 'Ocultar contraseña' : 'Mostrar contraseña'
            );
        });

        // Todavía no se conecta con un controlador de autenticación.
        document.getElementById('formularioLogin').addEventListener(
            'submit',
            function (evento) {
                evento.preventDefault();

                document.getElementById('avisoFormulario').textContent =
                    'Interfaz de prueba. La autenticación se implementará después.';
            }
        );
    </script>

</body>
</html>
