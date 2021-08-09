<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> --}}

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <title>E_com_laravel</title>
    </head>

    <body>
        {{View::make('header')}}
        @yield('content')
        {{View::make('footer')}}
    </body>

    <style>
        .search-box{
            width: 500px !important;
        }
        hr.style3 {
            border: 0; 
            height: 1px; 
            background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
            background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
            background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
            background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0); 
        }


        .custome-login{
            height: 500px;
            padding-top: 100px;
        }


        img.slider-img{
            height:400px !important ; 
        }
        .custom-product{
            height: 600px;
        }
        .slider-text{
            background-color: #3544355;
            color: #000000 !important;
        }
        .trending-wraper{
            margin: 30px;
        }
        .trending-image{
            height: 100px;
        }
        .trending-item{
            float: left;
            width: 20%;
        }


        .productDetails-img{
             height: 300px;
        }
        

        .select-input {
            width: 108px; 
            margin-bottom: 8px;
        }
    </style>
</html>
