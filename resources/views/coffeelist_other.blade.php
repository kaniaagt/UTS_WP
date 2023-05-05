<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Homepage</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

        <style>
            *{
                margin: 0;
                padding: 0;
            }

            .category_section_container {
                width: 1920px;
                margin: 0 auto;
            }

            .category_list {
                padding: 1rem 0;
                display: flex;
                justify-content: space-evenly;
                align-items: center;
            }

            .navbar_list {
                padding: 1rem;
                display: flex;
                justify-content: space-evenly;
                align-items: center;
            }

            .category {
                padding: 1vw;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                border-radius: 1rem;
            }

            .category a {
                font-size: 4vw;
                color: black;
            }

            .category_section h3 {
                margin-top: 5vh;
                text-align: center;
            }

            .drink_name img {
                width: 25vw;
                height: 25vw;
                margin-bottom: 1vw;
            }

            .category:hover {
                cursor: pointer;
            }

            .category:hover a {
                opacity: 1;
            }

            .greeting {
                margin: 1cm;
                display: flex;
                justify-content:space-between;
            }

            .greeting h4 {
                margin-top: 5vh;
            }

            .greeting h1 {
                margin-top: 2vh;
            }

            .drink_name {
                padding: 1vw;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                border-radius: 1rem;
            }

            .drink_name p {
                font-size: 3vw;
                opacity: 0.5;
            }

            .drink_name:hover {
                cursor: pointer;
            }

            .drink_name:hover p {
                opacity: 1;
            }

            .menu-bar {
                display: flex;
                justify-content: space-around;
            }

            .menu-bar a {
                font-size: 6vw;
                color: black;
            }

            .header {
                background-color: rgb(237, 235, 235);
                height: 5cm;
            }

        </style>

    </head>

    <body>
        <div class="header">
            <div class="greeting">
                <h1>
                    <?php
                        date_default_timezone_set('Asia/Calcutta');
                        $hour = date('G');
                        if ($hour >= 5 && $hour <= 11) {
                            echo "Good Morning,";
                        } else if ($hour >= 12 && $hour <= 18) {
                            echo "Good Afternoon,";
                        } else if ($hour >= 19 || $hour <= 4) {
                            echo "Good Evening,";
                        }
                    ?>
                    <br>Vico Lomar
                </h1>
                <h4 style="color: #C6A961;">Gold Level</h4>
            </div>

            <div class="menu-bar">
                <div class="menu-container">
                    <a href="/homepage">Homepage</a>
                </div>
                <div class="menu-container">
                    <a href="/transaction">Transaction</a>
                </div>
            </div>
        </div>

        {{-- maaf pak gabisa manggil datanya dari database soalnya codenya error :(
        jadi ini saya manual nampilin datanya, tp sebenernya saya udah melakukan seeder dan migration
        namun tidak bisa dipanggil variable nya --}}

        <div class="category_section">
            <h3>Our Menu</h3>
            <div class="container">
                <div class="category_list">
                    <div class="category">
                        <a href="coffeelist_signature">Signature</a>
                    </div>
                    <div class="category">
                        <a href="coffeelist_other">Other Drinks</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="category_section">
            <div class="container">
                <div class="category_list">
                    <div class="drink_name">
                        <img src="https://hips.hearstapps.com/hmg-prod/images/delish-210419-iced-tea-02-landscape-jg-1619020612.jpg?crop=0.670xw:1.00xh;0.176xw,0&resize=1200:*" alt="">
                        <p>Iced Tea</p>
                    </div>
                    <div class="drink_name">
                        <img src="https://www.forkinthekitchen.com/wp-content/uploads/2022/07/220629.iced_.latte_.vanilla-8882.jpg" alt="">
                        <p>Iced Latte</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="category_section">
            <div class="container">
                <div class="category_list">
                    <div class="drink_name">
                        <img src="https://www.allrecipes.com/thmb/Hqro0FNdnDEwDjrEoxhMfKdWfOY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/21667-easy-iced-coffee-ddmfs-4x3-0093-7becf3932bd64ed7b594d46c02d0889f.jpg" alt="">
                        <p>Iced Coffee</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- footer --}}
        <footer class="bg-light text-center text-lg-start">
            <div class="text-center p-2" style="background-color: #C6A961;">
                <p class="text-light">© 2023 The Three Broomsticks, All Rights Reserved</p>
            </div>
          </footer>

    </body>

</html>
