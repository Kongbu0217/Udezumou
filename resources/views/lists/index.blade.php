@extends('layouts.app_original')
@section('content')

  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <div class="card text-center">
            <div class="card-header">
                投稿一覧
            </div>
            {{-- 繰り返し処理を行いたいので@foreach @はblade.phpの中でphpが使えるようにするために必要な文法 --}}
              {{-- <div>{{dd($posts)}}</div> --}}
            @foreach ($posts as $post)
              <div class="card-body">
                  <h5 class="card-title">タイトル : {{ $post->title }}</h5> 
                  {{-- {{}}はカーリーと呼ばれechoと同義 --}}
                  <p class="card-text">
                    内容 : {{ $post->body }}
                  </p>
                  <p class="card-text">投稿者：{{ $post->user->name }}</p>
                  <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">詳細へ</a>
              </div>
              <p class="card-text">addモチベ：{{ $post->user->name }}</p>
              <p class="card-text">add優先順位：{{ $post->user->name }}</p>
              <div class="card-footer text-muted">
                  投稿日時 : {{ $post->created_at }}
              </div>
              <div class="card-footer text-muted">
                  追加分締切日 : {{ $post->created_at }}
            </div>
            @endforeach
        </div>
        </div>
        <div class="col-md-2">
          <a href="{{ route('posts.create') }}" class="btn btn-primary">
            {{-- ルートのposts.createを表示　＝web.phpで名前つけたやつ->name('posts.create'); --}}
            新規投稿
          </a>
        </div>
    </div>
  </div>
@endsection