<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! Html::style('template_admin/css/bootstrap.min.css') !!}
    {!! Html::style('template_admin/css/style.css') !!}
   
    @yield('styles')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    
    <title>Dashboard</title>
</head>
<body>
    <div class="container2">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="logo-apple"></ion-icon></span>
                        <span class="title">Brand Name</span>
                    </a>


                </li>
                <li>
                    <a href="{{route('home')}}">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>


                </li>
               
                <li>
                    <a href="{{route('purchases.index')}}">
                        <span class="icon"><i class="fas fa-cash-register fa-2x"></i></span>
                        <span class="title">Compras</span>
                    </a>


                </li>

                <li>
                    <a href="{{route('clients.index')}}">
                        <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                        <span class="title">Clientes</span>
                    </a>


                </li>
                <li>
                    <a href="{{route('products.index')}}">
                        <span class="icon"><i class="fas fa-boxes fa-2x"></i></span>
                        <span class="title">Productos</span>
                    </a>


                </li>
                <li>
                    <a href="{{route('categories.index')}}">
                        <span class="icon"><ion-icon name="folder-outline"></ion-icon></span>
                        <span class="title">Categorias</span>
                    </a>


                </li>
                <li>
                    <a href="{{route('providers.index')}}">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">Proveedores</span>
                    </a>


                </li>
                <li>
                    <a href="{{route('sales.index')}}">
                        <span class="icon"><i class="fas fa-shopping-bag fa-2x"></i></span>
                        <span class="title">Ventas</span>
                    </a>


                </li>
                <li>
                    <a href="{{route('users.index')}}">
                        <span class="icon"><i class="fas fa-user-tie fa-2x"></i></span>
                        <span class="title">Usuarios</span>
                    </a>


                </li>

                <li>
                    <a href="{{route('roles.index')}}">
                        <span class="icon"><i class="fas fa-key"></i></span>
                        <span class="title">Roles</span>
                    </a>


                </li>


            </ul>


        </div>
        <!-- main -->
        <div class="main">
            
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <!-- seacrh-->
                <div class="search">
                    <label>
                        <input type="text" placeholder="Buscar">
                       
                    </label>

                  

                </div>
                <!--userImage-->
                <div class="user">
                    {{-- <img src="user.jpg"> --}}
                </div>




            </div>

            @yield('content')
            <!--Cards-->
            <div class="cardBox">

                   
            </div>




        </div>
    </div>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    //menuToggle
    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');

    toggle.onclick = function(){
        navigation.classList.toggle('active');
        main.classList.toggle('active');
    }



    //add hovered class in selected list item
    let list = document.querySelectorAll('.navigation li');
    function activeLink(){
        list.forEach((item) =>
        item.classList.remove('hovered'));
        this.classList.add('hovered');
    }
    list.forEach((item) => item.addEventListener('mouseover',activeLink));
</script>

@yield('scripts')
</body>
</html>