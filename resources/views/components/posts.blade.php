<div class="posts_wrap">
    <div class="content">
        <p class="title_label">Лаборатория</p>
        <h2 class="title_block">{{$title}}</h2>
        <div class="preview_cards_wrap">
            @foreach($posts as $post)
                <div style="background-image: url('{{$post->getFirstMediaUrl('post_cover')}}')" class="preview_card">
                    <h3 class="title">{{$post['title']}}</h3>
                    <a href="{{route('post_page', $post['id'])}}" class="link-bg black">
                        Читать
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 13L7 7L1 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
