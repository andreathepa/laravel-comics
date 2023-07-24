    @extends('layout.app')

    @section('content')
        <div class="container my-5">
            <div class="row">
                @foreach($comics as $comic)
                <div class="col-10 col-md-6 col-lg-2">
                    <div class="card bg-transparent border-0 my-3 pointer">
                        <img class="img-fluidcard-img-top img-comic" src="{{ $comic['thumb'] }}" alt="{{ $comic['title']}}">
                        <i class="my-2 text-uppercase text-white">{{ $comic['title'] }}</i>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="button_load">
            <a>LOAD MORE</a>
        </div>

        <div class="container-fluid mt-5 bg-primary bg-gradient">
            <div class="row">
                <div class="col">
                    <div class="container p-5">
                        <div class="row">
                            <div class="col">
                                <ul class="d-flex align-items-center">
                                    @foreach($icons as $icon)
                                        <li class="d-flex pointer">
                                            <div class="image_icon"><img src="{{ Vite::asset( $icon['icona'])}}" alt="{{ $icon['title']}}"></div>
                                            <div class="text-white d-flex align-items-center mx-4">{{ $icon['title'] }}</div>
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    

        <footer>
            <div>
                <div class="footer_bg">
                    <div>
                        <img src="{{ Vite::asset('./resources/img/footer-bg.jpg')}}" class="bg_img" alt="">
                        <img src="../assets/img/dc-logo-bg.png" class="bg_logo" alt="">
        
                    </div>
                    <div class="list_footer">
                        <div class="list_one">
                            <ul>
                                <li><strong>Voce 1</strong></li>
                                <li>Voce</li>
                                <li>Voce</li>
                                <li>Voce</li>
                                <li>Voce</li>
                                <li>Voce</li>
                                
                            </ul>
            
                            <ul>
                                <li><strong>Voce 2</strong></li>
                                <li>Voce</li>
                                <li>Voce</li>
                                <li>Voce</li>
                                <li>Voce</li>
                                <li>Voce</li>
                                
                            </ul>
        
                        </div>
                        <div class="list_two">
                            <ul>
                                <li><strong>Voce 3</strong></li>
                                <li>Voce</li>
                                <li>Voce</li>
                                <li>Voce</li>
                                <li>Voce</li>
                                <li>Voce</li>
                                <li>Voce</li>
                                <li>Voce</li>
                                <li>Voce</li>
                                <li>Voce</li>
                                <li>Voce</li>
                                
                            </ul>
                        </div>
                        <div class="list_two">
                            <ul>
                                <li><strong>Voce 4</strong></li>
                                <li>Voce</li>
                                <li>Voce</li>
                                <li>Voce</li>
                                <li>Voce</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container_sign_up">
                <div class="sign_up d-flex justify-content-between align-items-center">
                        <div class="button_sign">
                            SIGN-UP NOW!
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="follow"><a href="">FOLLOW US</a></div>
                            <ul>
                                <li v-for="(social, index) in socials" :key="index">
                                    <a :href="social.href" :active="social.active ? 'active' : ''">
                                        <div><img :src="social.logo_social" alt=""></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                </div> 
        
            </div>
            </div>
        </footer>
    @endsection
    
