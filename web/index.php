<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <style>
.color{
    outline: 0;
    border-width: 0 0 2px;
    border-color: wheat;
    background-color: black;
}




.star:hover,
.star.selected,
.star:hover ~ .star,
.star.selected ~ .star{
    transition: color 0.8s ease;
    color: black;
}
    </style>
</head>
<body style="background-color: black">
<div class="container-fluid">
    <center><img src="Img/IMG_0700.PNG"   style="width: 100%;"></center>
</div>
  <div class="container-fluid mt-4">

      <div id="carouselExampleIndicators fluid " class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img class="d-block w-100" src="Img/photo_2022-01-25_16-14-58.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                  <img class="d-block w-100" src="Img/photo_2022-01-25_16-14-58.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                  <img class="d-block w-100" src="Img/photo_2022-01-25_16-14-58.jpg" alt="Third slide">
              </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
      </div>



<form>
    <div class="form-row">
        <div class="form-group col-md-6  ">
            <label for="Name" class="text-white">Имя</label>
            <input type="text" style="" class="form-control color" id="Name" >
        </div>
        <div class="form-group col-md-6  ">
            <label for="Firstname" class="text-white">Фамилия</label>
            <input type="email" class="form-control  color" id="Firstname" >
        </div>
        <div class="form-group col-md-6  ">
            <label for="telephone" class="text-white">Телефон</label>
            <input type="tel" class="form-control  color" id="telephone" >
        </div>

    </div>

        <div class="form-group col-md-6  ">
            <label for="inputState" class="text-white">Вид Вашего заказа:</label>
            <select id="inputState" class="form-control color text-danger">
                <option selected>В заведение</option>
                <option>Доставка</option>
            </select>
        </div>


    <div class="form-group   ">
        <label for="Firstname" class="text-white mt-4" >Оцените качество обслуживания кассира</label>
   <div style="font-size: 25px;">
       <div class="rating">
           <input type='radio' hidden name='rate' id='rating_opt5' data-idx='0'>
           <label for='rating_opt5'> </label>

           <input type='radio' hidden name='rate' id='rating_opt4' data-idx='1'>
           <label for='rating_opt4'> </label>

           <input type='radio' hidden name='rate' id='rating_opt3' data-idx='2'>
           <label for='rating_opt3'> </label>

           <input type='radio' hidden name='rate' id='rating_opt2' data-idx='3'>
           <label for='rating_opt2'> </label>

           <input type='radio' hidden name='rate' id='rating_opt1' data-idx='4'>
           <label for='rating_opt1'></label>
       </div>
   </div>
      </div>
    <div class="form-group  " style="margin-top:-50px">
        <label for="Firstname" class="text-white  " style="margin-top: -100px">Оцените качество
            обслуживания оператора</label>
        <div  style="width: 100%">
            <div class="rating">
                <input type='radio' hidden name='rate' id='rating_opt5' data-idx='0'>
                <label for='rating_opt5'> </label>

                <input type='radio' hidden name='rate' id='rating_opt4' data-idx='1'>
                <label for='rating_opt4'> </label>

                <input type='radio' hidden name='rate' id='rating_opt3' data-idx='2'>
                <label for='rating_opt3'> </label>

                <input type='radio' hidden name='rate' id='rating_opt2' data-idx='3'>
                <label for='rating_opt2'> </label>

                <input type='radio' hidden name='rate' id='rating_opt1' data-idx='4'>
                <label for='rating_opt1'></label>
            </div>
        </div>
    </div>
    <div class="form-group col-md-6  " style="margin-top: -40px">
        <label for="Firstname" class="text-white ">Оцените качество
            обслуживания оператора</label>
        <div style="font-size:2px;">
            <i class = "fa fa-star" aria-hidden = "true" id = "st11"></i>
            <i class = "fa fa-star" aria-hidden = "true" id = "st12"></i>
            <i class = "fa fa-star" aria-hidden = "true" id = "st13"></i>
            <i class = "fa fa-star" aria-hidden = "true" id = "st14"></i>
            <i class = "fa fa-star" aria-hidden = "true" id = "st15"></i>
        </div>
    </div>
    <div class="form-group text-white">
        <label for="exampleFormControlTextarea1" >Подскажите что нам улушить?</label>
        <textarea class="form-control col-md-6 bg-dark text-white " id="exampleFormControlTextarea1" rows="3"></textarea>

        <center>
            <button type="submit" class="btn btn-primary mb-2 mt-2">OKEY</button>
        </center>
    </div>

    </div>

    </div>

</form></div>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"> </script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/css/bootstrap-slider.min.css" integrity="sha512-3q8fi8M0VS+X/3n64Ndpp6Bit7oXSiyCnzmlx6IDBLGlY5euFySyJ46RUlqIVs0DPCGOypqP8IRk/EyPvU28mQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>

</html>