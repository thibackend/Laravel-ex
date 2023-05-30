<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>trang web cua toi</title>
</head>
<body>
   <header>
    <h1>Header</h1>
   </header>
   <main>
    <aside>
        MAIN SIDEBAR
    </aside> 
    <div class="content">
        @yield('content')
    </div>
   </main>
   <footer>
       <h1>FOOTER</h1> 
       <div class="contentfooter">  
            @yield('contentfooter')
       </div>
   </footer>
</body>
</html>