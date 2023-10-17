
@extends('front.layout.template')

@section('title', 'About Blog')

@section('content')
    
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ asset('front/img/logo-unpam.png') }}" target="_blank">
                            <img class="card-img-top featured-img" src="{{ asset('front/img/logo-unpam.png') }}" alt="About Blog" />
                        </a>
                        <div class="card-body">
                            <div class="small text-muted">{{ date('d/m/Y') }}</div>
                            <h2 class="card-title">About Blog</h2>
                            <p class="card-text">
                                <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum ipsa, blanditiis ad commodi dolores fugit laboriosam laborum error tempore voluptates iusto labore reiciendis non ab voluptas dolor aperiam ratione vel.
                                </p>

                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur velit eligendi enim fugiat sed rem voluptatem praesentium! Recusandae magnam atque quibusdam molestiae, porro iusto, quam harum tempora, ratione enim culpa fugiat voluptatum ad minus animi numquam! Temporibus sed, perspiciatis tenetur ab nobis veniam est ut autem praesentium magnam modi aliquam, soluta nam suscipit ratione exercitationem? Culpa provident molestiae est sunt doloremque laboriosam maiores ea! Asperiores, optio dicta dolore illum voluptates laboriosam expedita similique architecto maiores consequuntur iusto nulla soluta eveniet fugiat veniam cupiditate ipsum voluptatum repellat? Impedit tempora quia rerum porro! Dicta inventore soluta culpa excepturi reprehenderit beatae quis autem!
                                </p>
                                
                                <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, asperiores facilis? In repellendus possimus soluta harum voluptate amet delectus quam et sequi illum nostrum, voluptatem quidem itaque perspiciatis expedita, sunt odio laudantium ut quasi cum consectetur illo. Tempora id a, cupiditate expedita libero repudiandae perferendis saepe eius nemo doloremque consectetur.
                                </p>
                            </p>
                            
                        </div>
                    </div>


                </div>
                <!-- Side widgets-->
                @include('front.layout.side-widget')
            </div>
        </div>

@endsection       