<div class="posts_wrap">
    <div class="content">
        <p class="title_label">Лаборатория</p>
        <h2 class="title_block">{{$title}}</h2>
        <div class="preview_cards_wrap">
            @foreach($posts as $post)
                <div data-post-id="{{$post['id']}}"
                     onclick="window.open('{{route('post_page', $post['id'])}}','mywindow');"
                     style="background-image: url('{{$post->getFirstMediaUrl('post_cover')}}')" class="post_wrap preview_card">
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
        <a id="load_more_posts" class="link-bg orange">Загрузить еще</a>
        <p class="all_loaded_text"></p>
        @push('scripts')
            <script>
                cards_to_show = 3
                cards_to_add = 3
                card = $('.post_wrap')
                cards_total = card.length

                function show_cards(cards_to_show) {
                    card.each(function(index) {
                        if(index > cards_to_show - 1) {
                            $(this).hide()
                        } else {
                            $(this).show()
                        }
                    })

                    if(cards_to_show >= cards_total) {
                        $('#load_more_posts').hide()

                        text = 'Все статьи загружены (' + cards_total + ')'
                        $('.all_loaded_text').text(text)
                    }

                }
                show_cards(cards_to_show)
                $('#load_more_posts').on('click', function() {
                    cards_to_show += cards_to_add;
                    show_cards(cards_to_show)
                })
            </script>
        @endpush
    </div>
</div>
