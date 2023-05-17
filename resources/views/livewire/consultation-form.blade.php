<div>
    <div id="consult_form" class="consult_form_block_wrap">
        <div class="content">
            <div class="consult_form_wrap">
                <form wire:submit.prevent="MakeConsult(Object.fromEntries(new FormData($event.target)))">
                    <h2>Задайте нам вопросы</h2>
                    <p>
                        Заполните форму ниже, и мы свяжемся с вами, чтобы ответить на все ваши вопросы
                    </p>
                    <div class="input_wrap">
                        <label for="">Тема вопроса *</label>
                        <select required name="topic" id="">
                            <option value="Общий вопрос">Общий вопрос</option>
                            <option value="О продукции">О продукции</option>
                            <option value="Сотрудничество">Сотрудничество</option>
                            </select>
                    </div>
                    <div class="input_wrap">
                        <label for="">Фио *</label>
                        <input required name="user_name" type="text">
                    </div>
                    <div class="input_wrap">
                        <label for="">E-mail *</label>
                        <input required name="user_email" type="email">
                    </div>
                    <div class="input_wrap">
                        <label for="">Телефон *</label>
                        <input required name="user_mobile" placeholder="8 (911) 123-45-67" class="mobile_input"
                               type="text">
                    </div>
                    <div class="input_wrap">
                        <label for="">Ваш вопрос *</label>
                        <textarea required name="user_text" type="text"></textarea>
                    </div>

                    <div class="checkbox_wrap">
                        <input required id="agreement" type="checkbox">
                        <label for="agreement">Я согласен с условиями пользовательского соглашения</label>
                    </div>
                    <div class="checkbox_wrap">
                        <input required id="person_data" type="checkbox">
                        <label for="person_data">Я даю свое согласие на обработку персональных данных</label>
                    </div>

                    <button type="submit" class="show_preloader link-bg orange">Отправить</button>
                </form>
            </div>
            <img src="/media/media_fixed/consult_image.png" alt="">
        </div>
    </div>
    @push('scripts')
        <script>
            window.addEventListener('make_loader', event => {
                $('.show_preloader').on('click', function () {
                    $(this).html('<span class="loader"></span>')
                })
            })

            window.addEventListener('form_reset', event => {
                $('form').trigger("reset");
            })


        </script>
    @endpush
</div>
