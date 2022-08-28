<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('page-title')</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  {{-- styles --}}
  @vite(['resources/scss/style.scss'])
</head>

<body>
  @include('components/header')
  <div class="account-layout">
    <div class="listings-city">
      <img class="listings-city__img"
        src="@yield('page-bg')"
        alt="">
      <h1 class="listings-city__title">@yield('title')</h1>
    </div>
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="account__menu">
              <h2>Menu</h2>
              <a href="/account/saved">Saved Listings</a>
              <a href="/account/show-status">Listing Request Status</a>
            </div>
          </div>
          <div class="col-md-9">
            @yield('content')
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>