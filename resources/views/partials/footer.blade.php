<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

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
                        
                    </div>
            </div> 
    
        </div>
        </div>
    </footer>

    
   
</body>

</html>