<footer>
    <div class="footer-class">
        <div class="container-fluid-custom border-bottom-green-second border-top-green-second py-5">
            <div class="row">
                <div class="col-6">
                    <div class="content-logo">
                        <a href="{{ url('/')}}" class="h-100 w-100 textos-dinamicos-footer" url-static="texto">
                            <img src="{{ asset('assets/images/logo-footer.svg') }}" alt="logo color verde futbolme">
                        </a>                            
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex align-items-center justify-content-end pb-5 mb-5">
                        <span class="btn-flotante-arriba cursor-pointer">
                            <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.251953" width="32" height="32" rx="16" fill="#99CCAF"/>
                                <path d="M15.3 13.9072C15.3 14.2938 15.6134 14.6072 16 14.6072C16.3866 14.6072 16.7 14.2938 16.7 13.9072H15.3ZM16.495 13.2123C16.2216 12.9389 15.7784 12.9389 15.505 13.2123L11.0503 17.667C10.7769 17.9404 10.7769 18.3836 11.0503 18.657C11.3236 18.9303 11.7668 18.9303 12.0402 18.657L16 14.6972L19.9598 18.657C20.2332 18.9303 20.6764 18.9303 20.9497 18.657C21.2231 18.3836 21.2231 17.9404 20.9497 17.667L16.495 13.2123ZM16.7 13.9072V13.7072H15.3V13.9072H16.7Z" fill="#025325"/>
                            </svg>
                        </span>                                            
                    </div>
                    <div class="row">                        
                        <div class="col-12 col-lg-3"></div>
                        <div class="col-12 col-lg-3"></div>
                        <div class="col-12 col-lg-3">
                            <p><a href="{{ url('/preguntas-frecuentes')}}" class="enlace-unstyle color-black fs-00">FAQ</a></p>
                            <p><a href="{{ url('/noticias')}}" class="enlace-unstyle color-black fs-00">Noticias</a></p>
                            <p><a href="{{ url('/publicidad')}}" class="enlace-unstyle color-black fs-00">Publicidad</a></p>                                                                                 
                        </div>
                        <div class="col-12 col-lg-3">
                            <p><a href="{{ url('/contacto')}}" class="enlace-unstyle color-black fs-00">Contacto</a></p>   
                            <p><a href="{{ url('/partidos')}}" class="enlace-unstyle color-black fs-00">Livescore</a></p>                            
                            <p><a href="{{ url('/gol-average')}}" class="enlace-unstyle color-black fs-00">Golaverage</a></p>                                                        
                        </div>
                    </div>                                
                </div>                                
            </div>
        </div>
        <div class="container-fluid-custom py-3">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center justify-content-lg-start justify-content-center">
                    <p class="mb-0 color-gray-contrast fs-000">Copyright 1999-2023 Futbolme.com Todos derechos reservados.</p>        
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-lg-end justify-content-center">
                    <a href="{{ url('/politica-cookies')}}" class="enlace-unstyle"><span class="text-politicas text-politica-cookies color-black fs-000">Política de cookies y privacidad</span></a>            
                    <span class="px-lg-3 px-2">|</span>
                    <a href="{{ url('/condiciones-uso')}}" class="enlace-unstyle"><span class="text-politicas text-condiciones-de-uso color-black fs-000">Condiciones de uso</span></a>  
                </div>
            </div>
        </div>
    </div>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.0.0/socket.io.min.js"></script>

    <script>
        const socket = io("http://localhost:5000");

        socket.on('json-data-futbolme', (datos) => {
            console.log('Datos JSON recibidos:', datos);
            // Aquí puedes procesar los datos como lo desees
        });

        socket.on('nuevos-datos-futbolme', (nuevosDatos) => {
            console.log('Nuevos datos recibidos:', nuevosDatos);
            // Aquí puedes procesar los nuevos datos como lo desees
        });
    </script> --}}
    
</footer>