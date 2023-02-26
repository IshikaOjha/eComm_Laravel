<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-comm Project</title>

      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
      <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
      <script src="https://cdn.tailwindcss.com/3.2.4"></script>
      <style type="text/tailwindcss"> @layer utilities {.content-auto {content-visibility: auto;} }</style>
      <script>tailwind.config = {darkMode: "class",theme: {
        fontFamily: {
        sans: ["Roboto", "sans-serif"],
        body: ["Roboto", "sans-serif"],
        mono: ["ui-monospace", "monospace"],},},
        corePlugins: { preflight: false,},};
      </script>
     <!--Latest compiled and minified JQuery3.x-->      
      <script src="https://code.jquery.com/jquery-3.6.3.min.js" 
              integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" 
              crossorigin="anonymous">
      </script>     
</head>
<body>
    {{ View::make('header')}}
    @yield('content')
    {{ View::make('footer')}}
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
<!-- <script>
  $(document).ready(function(){
    $("button").click(function(){
        alert("all Set")
    })
  })
</script> -->
<style>
  .custom-login{
    height:600px;
    padding-top: 100px;
  }
  </style>
</html>

      <!--Latest compiled and minified CSS
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
              rel="stylesheet" 
              integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
              crossorigin="anonymous">  
     //Latest compiled and minified Javascript    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
            crossorigin="anonymous"></script>-->
 
