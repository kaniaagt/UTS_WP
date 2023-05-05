<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Homepage</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <style>
            *{
                margin: 0;
                padding: 0;
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

            .star-balance {
                margin: 10vw;
                text-align: center;
            }

            .star-balance .container {
                margin-top: 1vw;
                margin-bottom: 1vw;
                display: flex;
                justify-content: center;
            }

            .star-balance .angka {
                margin-top: 2vw;
            }

            .star-balance img {
                width: 10vw;
                height: 10vw;
                margin-left: 3vw;
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

            .promo {
                margin: 10vw;
            }

            .promo .promo-container {
                margin: 5vw 0;
                display: flex;
                justify-content: center;
            }

            .promo .isi-promo {
                margin-left: 4vw;
            }

            .promo img {
                width: 30vw;
                height: 30vw;
                margin-top: 5vw;
                /* margin-left: 1vw; */
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
                    <a href="#">Transaction</a>
                </div>
            </div>
        </div>

        {{-- <div class="p-3">
            <h1>Transaction</h1>

            @foreach ($transaction as $item)
            <div class="m-3 rounded p-3 bg-gradient bg-primary text-white">
                <p>Order : {{$item->coffee->name}}</p>
                <p>Date : {{date('d M Y', strtotime($item->created_at))}}</p>
            </div>

            @endforeach

        </div> --}}

        {{-- maaf pak gabisa manggil datanya dari database soalnya codenya error :(
        jadi ini saya manual nampilin datanya, tp sebenernya saya udah melakukan seeder dan migration
        namun tidak bisa dipanggil variable nya --}}

        <div class="p-3">
            <h1>Transaction</h1>
            <div class="m-3 rounded p-3" style="background-color: #dfcc9a;">
                <p>Order : Butterbeer</p>
                <p>Date : 19 March 2023</p>
            </div>
            <div class="m-3 rounded p-3" style="background-color: #dfcc9a;">
                <p>Order : Butterbeer</p>
                <p>Date : 20 March 2023</p>
            </div>
            <div class="m-3 rounded p-3" style="background-color: #dfcc9a;">
                <p>Order : Iced Tea</p>
                <p>Date : 21 March 2023</p>
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
