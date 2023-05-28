{{-- overla menu mobile --}}
<div class="bg-overlay-menu" style="display:none;"></div>

{{-- publicidad escrita top bar --}}
<div class="content-top-nav-bar py-3 bg-dark-green">

    <h1 class="text-top-nav-bar mb-0 color-white text-center fs-00">Fútbol en directo, livescore - resultados de partidos de fútbol</h1>

</div>

<div class="publicidad-header bg-dark-green remove-mobile">
    <div class="container-fluid-custom pb-lg-5 pb-3">
        <div class="content-publi d-flex align-items-center justify-content-center" style="height: 88px;background-color:#827C6E;">
            <p class="mb-0 text-white">Publicidad Banner 1320x88px <-- update <span class="update-un-minuto">000</span> --></p>
        </div>
    </div>    
</div>

{{-- content header --}}
<header class="navBar bg-brand-green">    

    <div class="container-fluid-custom d-flex align-items-center justify-content-between py-lg-4 py-4 position-relative">

        {{-- icono buscador --}}
        <div class="content-buscador cursor-pointer remove-desktop">

            <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">

                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1369 5.69469C10.1369 8.20268 8.1038 10.2358 5.59581 10.2358C3.08782 10.2358 1.05469 8.20268 1.05469 5.69469C1.05469 3.18669 3.08782 1.15356 5.59581 1.15356C8.1038 1.15356 10.1369 3.18669 10.1369 5.69469ZM9.14437 9.95066C8.18311 10.753 6.94584 11.2358 5.59581 11.2358C2.53553 11.2358 0.0546875 8.75497 0.0546875 5.69469C0.0546875 2.63441 2.53553 0.153564 5.59581 0.153564C8.65609 0.153564 11.1369 2.63441 11.1369 5.69469C11.1369 7.04487 10.654 8.28227 9.85151 9.24358L13.7993 13.1913C13.9945 13.3866 13.9945 13.7032 13.7993 13.8984C13.604 14.0937 13.2874 14.0937 13.0922 13.8984L9.14437 9.95066Z" fill="white"/>
                
            </svg>            

        </div>

        {{-- buscador mobile menu --}}        
        <div style="display:none;" class="content-input-buscador content-input-buscador-mobile position-absolute remove-desktop py-4 container-fluid-custom bg-silver">

            <div class="d-flex align-items-center">

                <input class="w-100 py-2 px-4 border-0" type="text" placeholder="Buscar Equipo o Jugador">
                
                <div class="content-icon-buscador content-icon-buscador-mobile d-flex align-items-center justify-content-center cursor-pointer" style="background: var(--color-white);">
                    
                    <svg width="32" height="34" viewBox="0 0 32 32" style="background: var(--color-white);opacity: .7;" fill="none" xmlns="http://www.w3.org/2000/svg">
                        
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.1034 15.0517C19.1034 17.0133 17.5133 18.6034 15.5517 18.6034C13.5902 18.6034 12 17.0133 12 15.0517C12 13.0902 13.5902 11.5 15.5517 11.5C17.5133 11.5 19.1034 13.0902 19.1034 15.0517ZM18.3972 18.6046C17.6179 19.2296 16.6285 19.6034 15.5517 19.6034C13.0379 19.6034 11 17.5656 11 15.0517C11 12.5379 13.0379 10.5 15.5517 10.5C18.0656 10.5 20.1034 12.5379 20.1034 15.0517C20.1034 16.1286 19.7295 17.1181 19.1044 17.8975L22.3535 21.1467C22.5488 21.3419 22.5488 21.6585 22.3535 21.8538C22.1583 22.049 21.8417 22.049 21.6464 21.8538L18.3972 18.6046Z" fill="black"/>
                        
                    </svg>                    
                    
                </div>

            </div>

        </div>                    

        {{-- logo web --}}
        <div class="content-logo">

            <a href="{{ url('/')}}" class="h-100 w-100">

                <img src="{{ asset('assets/images/logo.svg') }}" alt="logo color blanco futbolme">

            </a>            

        </div>

        {{-- menu enlaces estaticos mas buscador mostrado desktop y remove en mobile --}}
        <div class="content-enlaces-static desktop remove-mobile">

            <ul class="list-unstyled mb-0 d-flex align-items-center">

                <li>

                    <div class="d-flex align-items-center">

                        <div class="svg-content">

                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">

                                <path d="M14.591 10.577H8.64789C7.86486 10.577 7.22764 11.2129 7.22764 11.9951V20.9085C7.22764 21.6906 7.86488 22.3266 8.64823 22.3266H23.3519C24.135 22.3266 24.7722 21.6906 24.7722 20.9085V11.9951V11.8951H24.7684C24.7168 11.1594 24.101 10.577 23.3516 10.577H16.5768L19.3422 7.42852L19.3423 7.42844C19.4012 7.36124 19.4248 7.27069 19.4124 7.18239C19.4123 7.1823 19.4123 7.1822 19.4123 7.18211L19.3133 7.1962C19.3041 7.13034 19.2681 7.07297 19.2147 7.03903M14.591 10.577L18.7825 7.01791C18.8423 6.94971 18.9307 6.91386 19.0141 6.9034C19.0978 6.8929 19.1921 6.90595 19.2685 6.95475M14.591 10.577L11.8277 7.43158L11.8273 7.43121C11.7688 7.36386 11.745 7.27376 11.7576 7.18516L11.8566 7.19925M14.591 10.577L12.3873 7.02056C12.3275 6.95237 12.239 6.91656 12.1557 6.90611C12.072 6.89562 11.9776 6.90864 11.9012 6.95754L11.9011 6.9576C11.8221 7.00839 11.7705 7.09209 11.7575 7.18544L11.8566 7.19925M19.2147 7.03903L19.2685 6.95475M19.2147 7.03903C19.11 6.97216 18.9366 6.99388 18.8577 7.08384L19.2685 6.95475M19.2147 7.03903L19.2684 6.95465C19.2684 6.95468 19.2685 6.95471 19.2685 6.95475M11.8566 7.19925C11.8477 7.26137 11.8647 7.32179 11.9028 7.36558L12.3122 7.08655C12.2333 6.9966 12.0595 6.97487 11.9552 7.04174C11.9018 7.07603 11.8657 7.1334 11.8566 7.19925ZM23.3739 21.6021H23.3516H8.64823C8.2647 21.6021 7.95295 21.2906 7.95295 20.9081V11.9954C7.95295 11.6129 8.2647 11.3014 8.64823 11.3014H23.3519C23.7355 11.3014 24.0472 11.6126 24.0472 11.9951V20.9085C24.0472 21.2837 23.7473 21.5905 23.3739 21.6021Z" fill="#F0FCF5" stroke="#F0FCF5" stroke-width="0.2"/>

                                <path d="M19.5421 12.1275H10.0059C9.28094 12.1275 8.69614 12.747 8.69614 13.4947V19.4297C8.69614 20.1774 9.28094 20.7969 10.0059 20.7969H19.5421C20.2671 20.7969 20.8519 20.1774 20.8519 19.4297V13.4947C20.8519 12.747 20.2671 12.1275 19.5421 12.1275ZM19.5421 20.1746H10.0059C9.62175 20.1746 9.29939 19.8436 9.29939 19.4297V13.4947C9.29939 13.0808 9.62175 12.7498 10.0059 12.7498H19.5418C19.9259 12.7498 20.2483 13.0808 20.2483 13.4947V19.4297C20.2483 19.8437 19.9259 20.1746 19.5421 20.1746Z" fill="#F0FCF5" stroke="#F0FCF5" stroke-width="0.2"/>

                                <path d="M22.8596 19.1128V19.1129C22.8596 19.3953 22.6295 19.6253 22.3463 19.6253C22.063 19.6253 21.8329 19.3953 21.8329 19.1129C21.8329 18.8305 22.063 18.6005 22.3463 18.6005C22.6296 18.6005 22.8599 18.8306 22.8596 19.1128ZM22.3463 17.9779C21.72 17.9779 21.2096 18.4872 21.2096 19.1129C21.2096 19.7386 21.72 20.2479 22.3463 20.2479C22.9725 20.2479 23.4829 19.7386 23.4829 19.1129C23.4829 18.4872 22.9725 17.9779 22.3463 17.9779Z" fill="#F0FCF5" stroke="#F0FCF5" stroke-width="0.2"/>

                                <path d="M23.3404 15.5488H21.5211C21.4349 15.5488 21.3554 15.5779 21.2971 15.6361C21.2388 15.6943 21.2096 15.7738 21.2096 15.8599C21.2096 15.9461 21.2388 16.0256 21.2971 16.0838C21.3554 16.142 21.4349 16.1711 21.5211 16.1711H23.3404C23.4266 16.1711 23.5061 16.142 23.5644 16.0838C23.6227 16.0256 23.6519 15.9461 23.6519 15.8599C23.6519 15.7738 23.6227 15.6943 23.5644 15.6361C23.5061 15.5779 23.4266 15.5488 23.3404 15.5488Z" fill="#F0FCF5" stroke="#F0FCF5" stroke-width="0.2"/>

                                <path d="M23.3404 14.493H21.5211C21.4349 14.493 21.3554 14.5222 21.2971 14.5804C21.2388 14.6386 21.2096 14.7181 21.2096 14.8042C21.2096 14.8903 21.2388 14.9698 21.2971 15.028C21.3554 15.0862 21.4349 15.1153 21.5211 15.1153H23.3404C23.4266 15.1153 23.5061 15.0862 23.5644 15.028C23.6227 14.9698 23.6519 14.8903 23.6519 14.8042C23.6519 14.7181 23.6227 14.6386 23.5644 14.5804C23.5061 14.5222 23.4266 14.493 23.3404 14.493Z" fill="#F0FCF5" stroke="#F0FCF5" stroke-width="0.2"/>

                            </svg>                                                               

                        </div>

                        <p class="mb-0 color-white"><a href="{{ url('/partidos')}}" class="enlace-unstyle color-white fs-00">Partidos Televisados</a></p>  

                    </div>                    

                </li>

                <li>

                    <div class="d-flex align-items-center mx-5">

                        <div class="svg-content">

                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">

                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.4023 11.9803C12.5656 11.8187 12.8286 11.8187 12.9919 11.9803L15.4989 14.4621C15.7749 14.7353 15.7749 15.1812 15.4989 15.4544C15.2269 15.7237 14.7887 15.7237 14.5166 15.4544L13.3988 14.3479V19.6102C13.3988 19.9977 13.0847 20.3119 12.6971 20.3119C12.3096 20.3119 11.9954 19.9977 11.9954 19.6102V14.3479L10.8776 15.4544C10.6055 15.7237 10.1673 15.7237 9.89526 15.4544C9.61927 15.1812 9.61927 14.7353 9.89526 14.4621L12.4023 11.9803Z" fill="#F0FCF5"/>

                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.5977 20.0199C19.4344 20.1815 19.1714 20.1815 19.0081 20.0199L16.5011 17.5381C16.2251 17.2649 16.2251 16.819 16.5011 16.5458C16.7731 16.2764 17.2113 16.2764 17.4834 16.5458L18.6012 17.6523L18.6012 12.39C18.6012 12.0024 18.9153 11.6882 19.3029 11.6882C19.6904 11.6882 20.0046 12.0024 20.0046 12.39L20.0046 17.6523L21.1224 16.5458C21.3945 16.2764 21.8327 16.2764 22.1047 16.5458C22.3807 16.819 22.3807 17.2649 22.1047 17.5381L19.5977 20.0199Z" fill="#F0FCF5"/>

                            </svg>                                                                                             

                        </div>

                        <p class="mb-0 color-white"><a href="{{ url('/ascensos-y-descensos/nacional')}}" class="enlace-unstyle color-white fs-00">Ascensos y descensos</a></p>

                    </div>                    

                </li>

                <li>

                    <div class="d-flex align-items-center me-5">

                        <div class="svg-content">

                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">

                                <path d="M18.0796 14.6347C17.9337 14.3445 17.5536 14.1447 17.2324 14.1904C16.8077 14.2503 16.3792 14.314 15.9539 14.3788C15.6327 14.4278 15.3256 14.7295 15.2706 15.0502C15.1976 15.4738 15.1268 15.9007 15.0588 16.3237C15.0076 16.6434 15.2003 17.0267 15.4873 17.1781C15.8663 17.3784 16.249 17.5761 16.6291 17.7699C16.9166 17.9158 17.3386 17.8516 17.5705 17.6273C17.8771 17.3311 18.1842 17.0299 18.4869 16.7294C18.7161 16.5018 18.7891 16.0809 18.6486 15.7907C18.4629 15.4068 18.2718 15.0202 18.0791 14.6358L18.0796 14.6347Z" fill="#F0FCF5"/>

                                <path d="M16.698 9C12.8321 9 9.698 12.1341 9.698 16C9.698 19.8659 12.8321 23 16.698 23C20.5639 23 23.698 19.8659 23.698 16C23.698 12.1341 20.5639 9 16.698 9ZM21.2151 19.1984C20.6875 19.2218 20.1414 19.2403 19.5822 19.2539C19.1597 19.2637 18.6876 19.5958 18.5427 19.9808C18.35 20.4893 18.1583 20.9772 17.9705 21.4346C17.8578 21.7128 17.9324 22.0401 18.1267 22.2562C17.6672 22.3608 17.1891 22.4163 16.698 22.4163C16.1747 22.4163 15.6662 22.3531 15.1789 22.235C15.3716 22.0205 15.4468 21.6965 15.3368 21.4188C15.1522 20.9576 14.9643 20.467 14.777 19.9557C14.6355 19.5697 14.1683 19.2316 13.7474 19.2163C13.1909 19.1951 12.6475 19.17 12.1243 19.1401C11.8166 19.1227 11.5128 19.2925 11.3467 19.5414C10.7973 18.7132 10.4358 17.75 10.3209 16.7117C10.61 16.8478 11.0015 16.7977 11.2487 16.5625C11.6048 16.2222 11.9778 15.8715 12.3649 15.5143C12.6715 15.2317 12.8038 14.6671 12.6524 14.2729C12.4618 13.7752 12.2789 13.2868 12.1047 12.8115C12.005 12.5403 11.7556 12.3334 11.485 12.2599C12.1989 11.2667 13.1898 10.4854 14.3447 10.0302C14.3169 10.3307 14.4558 10.6629 14.7171 10.8393C15.1538 11.1328 15.6041 11.4399 16.0631 11.7579C16.41 11.9996 16.9915 12.0018 17.3427 11.7644C17.8071 11.4502 18.2623 11.1475 18.7045 10.8578C18.9713 10.6825 19.1145 10.3487 19.0894 10.0465C20.2633 10.5186 21.2652 11.3272 21.9758 12.3535C21.7454 12.4439 21.5424 12.629 21.4525 12.8643C21.2728 13.3374 21.0855 13.8237 20.889 14.3192C20.7332 14.7123 20.8585 15.278 21.1634 15.5639C21.5467 15.9254 21.9164 16.2799 22.2687 16.6245C22.4772 16.8265 22.792 16.8951 23.0604 16.8293C22.9286 17.8545 22.554 18.8041 21.997 19.6182C21.8331 19.3639 21.5271 19.1864 21.2151 19.2V19.1984Z" fill="#F0FCF5"/>

                            </svg>                                                                                              

                        </div>

                        <p class="mb-0 color-white"><a href="{{ url('/gol-average')}}" class="enlace-unstyle color-white fs-00">Calcular Gol Average</a></p>

                    </div>                    

                </li>

                <li>

                    <div class="content-input-buscador">

                        <div class="d-flex align-items-center justify-content-center">
                            
                            <input class="w-100 py-2 px-3 input-generic border-0 input-text-buscador" type="text" placeholder="Buscar Equipo o Jugador">
                            
                            <div class="content-icon-buscador d-flex align-items-center justify-content-center cursor-pointer" style="background: var(--color-white);">
                                
                                <svg width="32" height="31" style="background: var(--color-white);opacity: .7;" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.1034 15.0517C19.1034 17.0133 17.5133 18.6034 15.5517 18.6034C13.5902 18.6034 12 17.0133 12 15.0517C12 13.0902 13.5902 11.5 15.5517 11.5C17.5133 11.5 19.1034 13.0902 19.1034 15.0517ZM18.3972 18.6046C17.6179 19.2296 16.6285 19.6034 15.5517 19.6034C13.0379 19.6034 11 17.5656 11 15.0517C11 12.5379 13.0379 10.5 15.5517 10.5C18.0656 10.5 20.1034 12.5379 20.1034 15.0517C20.1034 16.1286 19.7295 17.1181 19.1044 17.8975L22.3535 21.1467C22.5488 21.3419 22.5488 21.6585 22.3535 21.8538C22.1583 22.049 21.8417 22.049 21.6464 21.8538L18.3972 18.6046Z" fill="black"/>
                                    
                                </svg>                    
                                
                            </div>

                            <div class="content-resultado-buscador py-4">
                                <div class="numero-resultados d-flex align-items-center justcontent-start mb-4">
                                    <p class="mb-0 px-4 py-2"><span class="num-rest-equipos">0</span> equipos</p> <p class="mb-0 px-4 py-2"><span class="num-rest-jugadores">0</span> jugadores</p>
                                </div>
                                <ul class="list-unstyled listado-result-equipos-jugadores">
                                    <li>
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row g-0">
                                                <div class="col-md-4 d-flex align-items-center justify-content-center ps-3">
                                                    <img src="https://futbolme.com/static/img/club/escudo4466.png" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h3 class="card-title titulo-equ-text">Card title</h3>
                                                        <p class="card-text categoria-equ-text">Senior Masculino</p>
                                                        <p class="card-text localidad-equ-text">Localidad</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
            
                    </div>

                </li>

            </ul>

        </div>

        {{-- hamburguesa desplegable menu --}}
        <div class="content-icon-menu cursor-pointer remove-desktop">

            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">

                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.743652 1.15964C0.743652 0.62409 1.1778 0.189941 1.71335 0.189941H18.2867C18.8222 0.189941 19.2563 0.62409 19.2563 1.15964C19.2563 1.69519 18.8222 2.12933 18.2867 2.12933H1.71335C1.1778 2.12933 0.743652 1.69519 0.743652 1.15964ZM0.743652 7.09903C0.743652 6.56348 1.1778 6.12933 1.71335 6.12933H18.2867C18.8222 6.12933 19.2563 6.56348 19.2563 7.09903C19.2563 7.63458 18.8222 8.06873 18.2867 8.06873H1.71335C1.1778 8.06873 0.743652 7.63458 0.743652 7.09903ZM19.2563 13.0384C19.2563 12.5029 18.8222 12.0687 18.2867 12.0687H1.71335C1.1778 12.0687 0.743652 12.5029 0.743652 13.0384C0.743652 13.574 1.1778 14.0081 1.71335 14.0081H18.2867C18.8222 14.0081 19.2563 13.574 19.2563 13.0384Z" fill="white"/>

            </svg>
                
        </div>

    </div>

</header>