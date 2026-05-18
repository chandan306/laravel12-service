<!DOCTYPE html>
<html>
<head>
    <title>Softwere Service</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body{
            overflow-x:hidden;
        }

        .hero{
            height:70vh;
            background:#0d6efd;
            color:white;
            display:flex;
            align-items:center;
        }

        .service-card{
            transition:0.3s;
        }

        .service-card:hover{
            transform:translateY(-10px);
        }

        .slider-img{
        height:70vh;
        object-fit:cover;
    }

    .carousel-caption{
        background:rgba(0,0,0,0.5);
        left:0;
        right:0;
        top:0;
        bottom:0;
    }
   .mt-50{
        margin-top: 60px !important;
    }

    .carousel-caption h1,
    .carousel-caption p{
        color:#fff;
    }

    @media(max-width:768px){
    .slider-img{
        height:100vh;
    }

    .carousel-caption h1{
        font-size:32px;
    }

    .carousel-caption p{
        font-size:16px;
    }
    }

    </style>
</head>
<body>

@include('layouts.navbar')

<!-- @yield('content') -->

@include('layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>