@extends('layouts.portal')

@section('title')Инструкции@endsection

@section('content')
    <div class=" ins_page_wrap">
        <div class="content bread_wrap">
            <a href="{{route('home')}}">
                Главная
            </a>
            <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="2.5" r="2" fill="#212121"/>
            </svg>
            <p>Инструкции</p>
        </div>

        <div
            style="background-image: url('/media/media_fixed/instruction_cover.png')"
            class="content page_cover_wrap">
            <h2>Инструкции по применению</h2>
            <p>
                <span>OOPS</span> – это линейка средств для уборки и дезинфекции дома, устранения запахов, пятен и
                меток, а также коррекции поведения домашних животных
            </p>
        </div>

        <div class="instructions_block_wrap">
            <div class="instructions_wrap">
                <div class="ins_wrap">
                    <img src="/media/media_fixed/ins_1.svg" alt="">
                    <p>
                        Средства OOPS! для уборки и дезинфекции дома выпускаются в концентрированном виде,
                        <span style="color: #E34A4A">для применения их необходимо развести водой</span>
                    </p>
                </div>
                <div class="ins_wrap">
                    <img src="/media/media_fixed/ins_2.svg" alt="">

                    <p>
                        Средства OOPS! для устранения запахов, пятен и меток домашних животных, а также коррекции
                        поведения
                        животных
                        <span style="color: #C67B0C">применяйте только в исходной концентрации</span> (без разведения)
                    </p>
                </div>
                <div class="ins_wrap">
                    <img src="/media/media_fixed/ins_3.svg" alt="">

                    <p>
                        Средства OOPS! разработаны
                        <span
                            style="color: #E8592B">для устранения запахов и пятен только органического происхождения</span>
                        (моча, метки, рвота, кровь, фекалии и др.)
                    </p>
                </div>
                <div class="ins_wrap">
                    <img src="/media/media_fixed/ins_4.svg" alt="">

                    <p>
                        <span style="color: #26A4B6">Применяйте продукцию OOPS! в первую очередь,</span> так как другие
                        средства могут химически зафиксировать пятна, и удалить их будет невозможно
                    </p>
                </div>
                <div class="ins_wrap">
                    <img src="/media/media_fixed/ins_5.svg" alt="">

                    <p>
                        Перед применением средств для устранения пятен и запахов
                        <span style="color: #4B6EC7">протестируйте поверхность на цветоустойчивость</span> (на
                        незаметном
                        участке поверхности)
                    </p>
                </div>
                <div class="ins_wrap">
                    <img src="/media/media_fixed/ins_6.svg" alt="">

                    <p>
                        <span style="color: #9179D4">Не смешивайте продукты OOPS!</span> с мылами, содой,
                        хлорсодержащими и
                        другими чистящими средствами.
                    </p>
                </div>
                <div class="ins_wrap">
                    <img src="/media/media_fixed/ins_7.svg" alt="">

                    <p>
                        Перед применением средств OOPS!
                        <span style="color: #0CA68A">сначала удалите видимые загрязнения водой</span>, затем нанесите
                        средства OOPS!
                    </p>
                </div>
                <div class="ins_wrap">
                    <img src="/media/media_fixed/ins_8.svg" alt="">

                    <p>
                        <span style="color: #B235BD">Средства устранят запах только при непосредственном контакте с источником. </span>
                        Нанесите средство на поверхность и протрите ветошью (для застарелых загрязнений – щеткой),
                        оставьте
                        на 20-60 минут
                    </p>
                </div>
                <div class="ins_wrap">
                    <img src="/media/media_fixed/ins_9.svg" alt="">

                    <p>
                        Для удаления пятен и запахов с мягкой мебели и тканей, салонов автомобилей необходимо
                        <span style="color: #C83C5E">тщательно пропитать все слои.</span> Для полного устранения
                        застарелых
                        запахов может потребоваться до 2-х недель
                    </p>
                </div>

                <p class="last_ins">
                    Инструкции для разных продуктов OOPS! отличаются и доступны после выбора продуктов
                </p>

                <a href="" class="link-bg orange">
                    Перейти в каталог
                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 11L6 6L1 1" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </a>


            </div>
            <img src="/media/media_fixed/instruction_back.png" class="ins_back" alt="">
        </div>
    </div>



    <livewire:consultation-form/>
@endsection
