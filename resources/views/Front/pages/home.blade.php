@extends('Front.layout.master')

@section('title', 'Home')

@section('content')

    <style>
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-5%); 
            }
        }
        #carCarousel {
            width: calc(100% + 15px); /* Adjusting for margin */
        }

        .card-container {
            transition: transform 0.3s ease; 
        }

        .card-container:hover {
            transform: scale(1.1); 
        }

    </style>

    <script>
        // التوقف عند التمرير فوق السلايدر
        const carousel = document.getElementById('carCarousel');

        carousel.addEventListener('mouseenter', () => {
            carousel.style.animationPlayState = 'paused'; // إيقاف الحركة عند المرور
        });

        carousel.addEventListener('mouseleave', () => {
            carousel.style.animationPlayState = 'running'; // استئناف الحركة عند الخروج
        });
    </script>

    <div class="container-fluid" style="background: linear-gradient(to right, #31586E, #264658, #002133); height: 530px; display: flex; align-items: center; justify-content: center; flex-direction: column;">
        <h1 class="text-white" style="margin-top: 1px;">Get a car on your terms</h1> 
        <h2 class="text-white mt-3">We Deliver the car at your doorstep</h2> 
        <div class="">
            <div class="d-flex overflow-hidden" id="carCarousel" style="white-space: nowrap; animation: scroll 30s linear infinite; margin-top: 50px;"> 
                @for ($i = 1; $i <= 20; $i++)
                    <div class="d-inline-block card-container" style="margin-right: 30px;">
                        <div class="card" style="width: 25rem; height: 230px; position: relative;"> 
                            <img src="{{ asset('front/assets/images/Untitled design(6).png') }}" class="card-img-top" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                            <div class="card-body" style="padding-top: 20px; display: flex; flex-direction: column; justify-content: flex-start; position: absolute; top: 0; left: 0; right: 0; color: white; padding: 10px;"> 
                                <h5 class="card-title">Wasil-lk Weekly Plan</h5>
                                <p class="card-text">Own a car on affordable monthly instalment</p>
                                <a href="#" class="btn btn-primary" style="align-self: flex-start; margin-top: auto;">View Details</a> 
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <div class="mt-5">
    <div class="row">
        @for ($i = 1; $i <= 4; $i++)
            <div class="col-md-3" style="padding: 0 40px; margin-bottom: 20px;">
                <div class="custom-card" style="height: 400px; width: 100%; max-width: 500px; border: 2px solid black;"> <!-- إضافة بوردر أسود -->
                    <img src="{{ asset('front/assets/images/PNG.png') }}" class="card-img-top" alt="" style="max-width: 60%; height: auto; margin: 10px auto; display: block;"> <!-- تصغير الصورة وجعلها في المنتصف -->
                    <div class="card-body">
                        <h5 class="card-title">Car {{ $i }}</h5>
                        <p class="card-text">This is a short description of Car {{ $i }}.</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>


@endsection
