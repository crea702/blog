@extends('layouts.main')

@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{$post->title}}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up"
               data-aos-delay="200">{{$date->translatedFormat('F')}} {{$date->day}}, {{$date->year}}
                • {{$date->format('H:i')}} • {{$post->comments->count()}} комментария(й)</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{asset('storage/'.$post->main_image)}}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        {!! $post->content !!}
                    </div>
                </div>

            </section>

            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <section class="py-3">
                        @auth()
                        <form action="{{route('post.like.store', $post->id)}}" method="POST">
                            @csrf
                            <span>
                                {{$post->liked_user_count}}
                            </span>
                            <button type="submit" class="border-0 bg-transparent">
                                    @if(auth()->user()->likedPosts->contains($post->id))
                                        <i class="fas fa-heart"></i>
                                    @else
                                        <i class="far fa-heart"></i>
                                    @endif
                            </button>
                        </form>
                        @endauth
                            @guest()
                                <div>
                                        <span>
                                        {{$post->liked_user_count}}
                                        <i class="far fa-heart"></i>
                                    </span>
                                </div>
                            @endguest
                    </section>
                    @if($realatedPosts->count() > 0)
                    <section class="related-posts">
                        <h2 class="section-title mb-4" data-aos="fade-up">Схожие посты</h2>
                        <div class="row">
                            @foreach($realatedPosts as $reaPost)
                                <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                                    <img src="{{asset('storage/'.$reaPost->preview_image)}}" alt="related post"
                                         class="post-thumbnail">
                                    <p class="post-category">{{$reaPost->category->title}}</p>
                                    <a href="{{route('post.show', $reaPost->id)}}">
                                        <h5 class="post-title">{{$reaPost->title}}</h5>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </section>
                    @endif

                    @auth()
                    <section class="comment-list mb-5">
                        <h2 class="section-title mb-3" data-aos="fade-up">Комментарии ({{$post->comments->count()}})</h2>
                        @foreach($post->comments as $comment)
                        <div class="comment-text mb-2">
                            <span class="username">
                            <div>
                                <h6>{{$comment->user->name}}</h6>
                            </div>
                                <span class="text-muted float-right">{{$comment->dateAsCarbon->diffForHumans()}}</span>
                            </span><!-- /.username -->
                                {{$comment->message}}
                        </div>
                        @endforeach
                    </section>
                    <section class="comment-section">
                        <h2 class="section-title mb-5" data-aos="fade-up">Отправить комментарий</h2>
                        <form action="{{route('post.comment.store', $post->id)}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12" data-aos="fade-up">
                                    <label for="comment" class="sr-only">Comment</label>
                                    <textarea name="message" id="comment" class="form-control"
                                              placeholder="Напишите комментарий" rows="10"> </textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" data-aos="fade-up">
                                    <input type="submit" value="Добавить" class="btn btn-warning">
                                </div>
                            </div>
                        </form>
                    </section>
                    @endauth
                </div>
            </div>
        </div>
    </main>
@endsection
