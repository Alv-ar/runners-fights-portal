<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  .owl-carousel .item {
    height: 10rem;
    background: none;
    padding: 1rem;
  }
  .owl-carousel .item h4 {
    color: #FFF;
    font-weight: 400;
    margin-top: 0rem;
   }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>
  <script>
  jQuery(document).ready(function($){
    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:3
        },
        1000:{
          items:5
        }
      }
    })
  })
  </script>
</head>
<body>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="owl-carousel owl-theme mt-5">
            <div class="item"><img alt="image" src="{{ asset('img/runnersfights.png') }}"
                     class="rounded-circle mr-1 thumbnail-rounded user-thumbnail "></div>
            <div class="item"><img alt="image" src="{{ asset('img/unity.jpg') }}"
                     class="rounded-circle mr-1 thumbnail-rounded user-thumbnail "></div>
            <div class="item"><img alt="image" src="{{ asset('img/logo.png') }}"
                     class="rounded-circle mr-1 thumbnail-rounded user-thumbnail "></div>
            <div class="item"><img alt="image" src="{{ asset('img/runnersfights.png') }}"
                     class="rounded-circle mr-1 thumbnail-rounded user-thumbnail "></div>
            <div class="item"><img alt="image" src="{{ asset('img/unity.jpg') }}"
                     class="rounded-circle mr-1 thumbnail-rounded user-thumbnail "></div>
            <div class="item"><img alt="image" src="{{ asset('img/logo.png') }}"
                     class="rounded-circle mr-1 thumbnail-rounded user-thumbnail "></div>
        </div>
    </div>
</body>
</html>