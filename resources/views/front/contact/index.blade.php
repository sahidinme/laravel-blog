
@extends('front.layout.template')

@section('title', 'Contact Blog')

@section('content')
    
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4 shadow-sm">
                        <div class="text-center">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.057787604227!2d106.60235647374077!3d-6.256117861249394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fc5d53372f2d%3A0xa427ee2247cb617d!2sSMKN%207%20Kabupaten%20Tangerang!5e0!3m2!1sid!2sid!4v1697576109838!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="card-body">
                            <div class="small text-muted">{{ date('d/m/Y') }}</div>
                            <h2 class="card-title">Contact Blog</h2>
                            <p class="card-text">
                                <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum ipsa, blanditiis ad commodi dolores fugit laboriosam laborum error tempore voluptates iusto labore reiciendis non ab voluptas dolor aperiam ratione vel.
                                </p>

                                <ul>
                                    <li>Phone : 0871372113</li>
                                    <li>Email : email@mail.com</li>
                                    <li>facebook :<a href="www.fb.com/sahidinme"> sahidinme</a></li>
                                    
                                </ul>
                                
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