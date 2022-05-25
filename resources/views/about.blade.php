<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Runners Fights</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico')}}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets/css/landing.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/js/landing.js') }}"></script>


</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="{{ asset('img/runnersfights.png') }}" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">{{ __('main.nav.about_game') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#album">{{ __('main.nav.album') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#ranking">{{ __('main.nav.ranking') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">{{ __('main.nav.about_us') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">{{ __('main.nav.team') }}</a></li>
                    @if(Route::has('login'))
                    @auth
                    @hasrole('Administrador')
                    <li class="nav-item"><a href="{{ url('/home') }}" class="nav-link">{{ __('auth.dev') }}</a></li>
                    @endhasrole
                    @else
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">{{ __('auth.login') }}</a></li>
                    @if (Route::has('register'))
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">{{ __('auth.register') }}</a></li>
                    @endif
                    @endauth
                    @endif
                    @auth
                    <li class="nav-item"><a href="#perfilModal" data-bs-toggle="modal" class="nav-link nav-link-lg nav-link-user">
                            Perfil
                        </a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Bienvenido A Runners Fights!</div>

            @auth 
            <a class="btn btn-primary btn-xl text-uppercase" id="downloadBtn" download="test.txt">Descargar</a>
            @else
            <a class="btn btn-primary btn-xl text-uppercase disabled" href="#services" id="downloadBtn">Descargar</a>
            @endauth
        </div>
    </header>
    <!-- Information-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Run!</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-gamepad fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3"></h4>
                    <p class="text-muted">Runners Fights es una aventura de acción clásica en 2D ambientada en un vasto mundo interconectado. Descubre ciudades y sus rascacielos. Combate contra criaturas futuristas y combate contra otros jugadores en mapas interactivos.</p>
                    <!-- Inmersive game experience, inmersive sounds effects and a nice catchy Lore. Complimented with a nice battle system to make you keep attention the whole time. -->
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-headset fa-stack-1x fa-inverse"></i>           
                    </span>
                    <h4 class="my-3"></h4>
                    <p class="text-muted">¿Preparado para más? Consigue Runners Fights hoy mismo y sumérgete en sus modos Individual y Multijugador, llenos de acción.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-brands fa-steam fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3"></h4>
                    <p class="text-muted">Nuevas aventuras y nuevos personajes en un futuro. Nos podras encontrar en fechas futuras en Steam!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Album Grid-->
    <section class="page-section bg-light" id="album">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Album</h2>
                <h3 class="section-subheading text-muted">And this is our Unity Project Game</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Album item 1-->
                    <div class="album-item">
                        <a class="album-link" data-bs-toggle="modal" href="#albumModal1">
                            <div class="album-hover">
                                <div class="album-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('img/tutorial.png')}}" alt="..." />
                        </a>
                        <div class="album-caption">
                            <div class="album-caption-heading">Tutorial in-game</div>
                            <div class="album-caption-subheading text-muted"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Album item 2-->
                    <div class="album-item">
                        <a class="album-link" data-bs-toggle="modal" href="#albumModal2">
                            <div class="album-hover">
                                <div class="album-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('img/multi.png')}}" alt="..." />
                        </a>
                        <div class="album-caption">
                            <div class="album-caption-heading">Multiplayer</div>
                            <div class="album-caption-subheading text-muted"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Album item 3-->
                    <div class="album-item">
                        <a class="album-link" data-bs-toggle="modal" href="#albumModal3">
                            <div class="album-hover">
                                <div class="album-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('img/muerte.png')}}" alt="..." />
                        </a>
                        <div class="album-caption">
                            <div class="album-caption-heading">Easter Eggs</div>
                            <div class="album-caption-subheading text-muted"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ranking-->
    <section class="page-section ranking" id="ranking">
        <div class="table-responsive">
            <table class="table table-borderless">
                <thead style="background-color:#8946A6">
                    <th style="display: none;">ID</th>
                    <th style="color:#fff;">Nombre</th>
                    <th style="color:#fff;">E-mail</th>
                    <th style="color:#fff;">Puntos</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    @auth
                    @if(Auth::user()->name == $user->name)
                    <tr class="table-active">
                        <td style="display: none;">{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->kills }}</td>
                    </tr>
                    @else
                    <tr>
                        <td style="display: none;">{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->kills }}</td>
                    </tr>
                    @endif
                    @endauth
                    @guest
                    <tr>
                        <td style="display: none;">{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->kills }}</td>
                    </tr>
                    @endguest
                    @endforeach
                </tbody>
            </table>
        </div>

    </section>
    <!-- About-->
    <section class="page-section bg-light" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About</h2>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('img/about/teamWork3.jpg')}}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Noviembre 2021</h4>
                            <h4 class="subheading">Primera reunión del equipo</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Aquí empieza nuestro proyecto, nos reunimos por primera vez como grupo para distribuir roles y para organizarnos.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('img/about/teamWork1.jpg')}}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Enero 2022</h4>
                            <h4 class="subheading"></h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Dos meses más tarde de nuestro inicio ya logramos muchos avances tanto en el equipo de Unity como en el equipo Web. Conjuntamente, sumamos un total de 35 commits.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('img/about/rogerRubio.jpg')}}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Marzo 2022</h4>
                            <h4 class="subheading"></h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Marzo fue un gran mes para nuestro grupo, logramos acabar la página web, la API propia y pudimos por primera vez probar la parte de multijugador de nuestro juego. </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('img/about/keenUwU.jpg')}}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Mayo 2022</h4>
                            <h4 class="subheading"></h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Con la llegada de mayo llegaron también los nervios, nuestro último mes para acabar un proyecto al que habíamos dedicado mucho tiempo. Logramos acabar todas las tareas esperadas antes de la fecha límite y obtuvimos un buen resultado.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Be Part
                            <br />
                            Of Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Team-->
    <section class="page-section" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('img/team/keen.jpg') }}" alt="..." />
                        <h4>Keen Abril</h4>
                        <p class="text-muted">Developer</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/keen-aaron-abril-pangan-663a3b214/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('img/team/roger.jpg') }}" alt="..." />
                        <h4>Roger Capdevila</h4>
                        <p class="text-muted">Developer</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/rogerc_02/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/roger-capdevila-perez"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('img/team/raul.jpg') }}" alt="..." />
                        <h4>Raul Díaz</h4>
                        <p class="text-muted">Developer</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/rauldz/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/ra%C3%BAl-d%C3%ADaz-olmedo-999b0a223/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('img/team/alvar.jpg') }}" alt="..." />
                        <h4>Alvar Recamales</h4>
                        <p class="text-muted">Developer</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/alvaaaarr/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/alvar-recamales/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Si deseas unirte a nosotros no dudes en ponerte en contacto! Somos un equipo abierto a nuevas incorporaciones.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Runners Fights 2021</div>
            </div>
        </div>
    </footer>
    @auth
    <!-- Perfil Modal-->
    <div class="album-modal modal fade" id="perfilModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">¡Hola! {{\Illuminate\Support\Facades\Auth::user()->name}}</h2><br>
                                <p class="item-intro text-muted">Puntuacion: {{\Illuminate\Support\Facades\Auth::user()->kills}}</p>
                                <p class="item-intro text-muted">Email: {{\Illuminate\Support\Facades\Auth::user()->email}}</p>
                                <p><a href="{{ url('logout') }}" class="nav-link" onclick="event.preventDefault(); localStorage.clear();  document.getElementById('logout-form').submit();">
                                        {{ __('auth.logout') }}
                                    </a></p>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="d-none">
                                    {{ csrf_field() }}
                                </form>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endauth
    <!-- Album Modals-->
    <!-- Album item 1 modal popup-->
    <div class="album-modal modal fade" id="albumModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Tutoral in-game</h2>
                                <p class="item-intro text-muted"></p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('img/tutorial.png')}}" alt="..." />
                                <p>Para los nuevos usuarios tenemos un tutorial in-game para aprender a jugar y poder pasar los niveles mas facilmente</p>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Album item 2 modal popup-->
    <div class="album-modal modal fade" id="albumModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Multijugador</h2>
                                <p class="item-intro text-muted"></p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('img/multi.png')}}" alt="..." />
                                <p>Tambien hay un modo multijugador donde las partidas son maximo de 4 personas y minimo de 2</p>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Album item 3 modal popup-->
    <div class="album-modal modal fade" id="albumModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Chuk Norris</h2>
                                <p class="item-intro text-muted">Frases celebres</p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('img/muerte.png') }}" alt="..." />
                                <p></p>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>