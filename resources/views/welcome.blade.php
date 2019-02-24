<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="/css/app.css" rel="stylesheet" type="text/css">

    </head>
    <body>
      <div id="example"></div>
      <script src="/js/app.js"></script>
     
      <script>
      // เราสามารถแชร์ prototype ด้วย Object.create()
      // var car = {
      //     drive: function(){
      //       console.log("driving a car");
      //     }
      // }
      var car = {
          a: 1
      }
      var redCar = Object.create(car);
      var blueCar = Object.create(car,
      { // เพิ่มพร็อพเพอร์ตี้เข้าไป ด้วยการระบุ descriptor
        b: { writable: true, configurable: true, value: 1 }, // descriptor
        c: { writable: true, configurable: true, value: 2 } // descriptor
      }
      );
      // redCar.drive(); // "driving a car"
      // blueCar.drive();

      console.log(blueCar.a + blueCar.b);
      console.log(blueCar.a + blueCar.c);
      </script>
    </body>
</html>
