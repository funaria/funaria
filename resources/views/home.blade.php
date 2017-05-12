@extends("templates.default")
@section("content")
    @foreach($posts as $post)
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ $post->img }}">
                </div>
                <div class="card-content">
                    <span class="card-title">{{ $post->titleLimited }}</span>
                </div>
                <div class="card-action">
                    <a href="{{ $post->url }}" class="grey-text">Lire la suite</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
@section('script')
    <script type="javascript" src="{{ url('js/posts.js') }}"></script>
@endsection