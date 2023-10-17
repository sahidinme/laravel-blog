
@extends('front.layout.template')

@section('title', 'Category '. $category)

@section('content')
    
        <!-- Page content-->
        <div class="container">

            <div class="mb-3">
                <form action="{{ route('search') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input class="form-control" type="text" name="keyword" placeholder="Enter search"/>
                        <button class="btn btn-primary" id="button-search" type="submit">Submit</button>
                    </div>
                </form>
            </div>

            
                <p>Showing articles with category : <b>{{ $category }}</b></p>
            

            <div class="row">

                @forelse ($articles as $item)
                    <div class="col-4">
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="{{ url('p/'.$item->slug) }}">
                                <img class="card-img-top post-img" src="{{ asset('storage/back/'.$item->img) }}" alt="..." />
                            </a>
                            <div class="card-body card-height">
                                <div class="small text-muted">
                                    {{ $item->created_at->format('d-m-y') }}
                                    <a href="{{ url('category/'.$item->Category->slug) }}">{{ $item->Category->name }}</a>
                                </div>
                                
                                <h2 class="card-title h4">{{ $item->title }}</h2>
                                <p class="card-text">
                                   {{ Str::limit(strip_tags($item->desc), 150, '...') }}
                                </p>
                                <a class="btn btn-primary" href="{{ url('p/'.$item->slug) }}">Read more →</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3>Not found</h3>
                @endforelse
                
            </div>

            <!-- Pagination-->         

            <div class="pagination justify-content-center my-4">
                {{ $articles->links() }}
            </div>
        </div>

@endsection       