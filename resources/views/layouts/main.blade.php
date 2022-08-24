<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  {{-- styles --}}
  @vite(['resources/scss/style.scss'])
</head>

<body>
  <header class="header">
    <div class="container">


      <div class="header__logo">
        Smith Realty
      </div>
      <div class="header__menu">
        <a href="#" class="header__menu-link header__menu-link--active">Home</a>
        <a href="#" class="header__menu-link">Listing</a>
        <a href="#" class="header__menu-link">Property</a>
        <a href="#" class="header__menu-link">Pages</a>
      </div>
      <div class="header__account">
        <div class="header__account-link"><i class="fa-solid fa-heart"></i></div>
        <div class="header__account-link"><i class="fa-solid fa-user"></i></div>
      </div>
    </div>
  </header>

  @yield('content')
</body>

</html>