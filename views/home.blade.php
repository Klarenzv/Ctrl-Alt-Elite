<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Head -->
@include('head')

<body class="antialiased" >
    <!-- Header -->
    @include('header')

    <!-- Top Section -->
    <div class="container-fluid" style="display: block;">
        <div class=top id=topp>

            <!-- Introduction Section -->
            <h2 class="center">Fil-Chi Animal Clinic</h2>
            <div class=homediv>
                <p class=center> We Care About Your Pets</p>
                <p class=center>
                    "Discover peace of mind and exceptional care for
                    your beloved pets through our unwavering commitment to
                    providing compassionate, expert veterinary services tailored to
                    their unique needs, ensuring their health, happiness, and well-being."
                </p>
            </div>

        </div>
    </div>

    <div class="container-fluid" style="display: block;">
        <h2 class="center">About</h2>

        <div class=center>
            <p class=homediv>
                Fil-Chinese Animal Clinic is a dedicated facility that provides 
                essential veterinary services to your beloved pets. Our clinics focus
                 on promoting preventative health and wellness for pets, offering regular 
                 check-ups and minor surgical procedures
            </p>
        </div>
    </div>
    <div class="center">
        <p> Hello World!</p>
    </div>

    <!-- Footer -->
    @include('footer')

</body>

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

</html>