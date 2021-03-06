@extends('layouts.header-footer')

@section('main')
    <div class="content-line my-5">
        <div class="container">
            <div class="container-2 col-lg-8 mx-auto">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h3>Сотрудничество</h3>
                        </div>
                    </div>
                </div>
                <div class="content-info">
                    <div class="law col">
                        <div class="title">
                            <div class="row">
                                <div class="col my-3">
                                    <h5>Юридическим лицам</h5>
                                    <span class="text-muted">*Организаторам фестивалей и студиям</span>
                                </div>
                            </div>
                        </div>
                        <div class="info">
                            <p>
                                Возьмите коврики для йоги в аренду за небольшую плату в YourYoga.<br><br>
                                Условия аренды ковриков для йоги:<br>
                            <table class="rent-condition">
                                <tbody>
                                <tr>
                                    <th>Стоимость аренды</th>
                                    <th>Условие аренды</th>
                                </tr>
                                <tr>
                                    <td>100 р. /коврик.</td>
                                    <td>С участием компании "YourYoga" в качестве спонсора*.</td>
                                </tr>
                                <tr>
                                    <td>200 р ./коврик.</td>
                                    <td>Для мероприятий на тему йоги, без участия "Йогин" в качестве спонсора</td>
                                </tr>
                                <tr>
                                    <td>300 р. /коврик.</td>
                                    <td>Для других практик, не связанных с йогой.</td>
                                </tr>
                                </tbody>
                            </table><br>
                            * Спонсорство предполагает следующие условия сотрудничества:<br>
                            - аудитория мероприятия не менее 100 участников;<br>
                            - размещение на мероприятии рекламного стенда с нашим логотипом;<br>
                            - размещение информации о нашей компании/проводимых акциях в медиа (соцсети, сайт и пр.);<br>
                            - предоставление фотоотчета по итогам проведения мероприятия
                            (качественные фото, на которых виден логотип youryoga.ru, не менее 10 шт.).<br><br>
                            <div style="background: #eeeeee;" class="p-3">
                                Коврики выдаются под залог (возвращается при возврате ковриков).<br>
                                Получение и возврат ковриков осуществляется из нашего офиса на Ленинском проспекте.<br>
                            </div><br>
                                Подробности аренды можно узнать по тел.: +7 (999) 666-22-33, либо написать на почту youryoga@gmail.com.
                            </p>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="physical col">
                        <div class="title">
                            <div class="row">
                                <div class="col my-3">
                                    <h5>Физическим лицам</h5>
                                    <span class="text-muted">*Инструкторам йоги</span>
                                </div>
                            </div>
                        </div>
                        <div class="info">
                            <p>
                                YourYoga поддерживает йога инструкторов и дарит им скидку 25%* на товары для
                                йоги.<br><br>

                                Чтобы участвовать в программе, сертифицированному преподавателю йоги необходимо:<br>
                                1. В любом из наших розничных магазинов предъявить сертификат/удостоверение инструктора
                                йоги.<br>
                                2. Заполнить анкету инструктора (необходимо разрешение в обработке персональных
                                данных)<br>
                                3. Получить именную карту инструктора и четырехзначный код.<br><br>

                                В случае, если вы проживаете не в Томске, необходимо:<br>
                                1. Скачать анкету инструктора йоги в электронном виде, максимально полно заполнить
                                информацию в ней.<br>
                                2. Отсканировать/сфотографировать документ, подтверждающий статус преподавателя йоги<br>
                                3. Прислать скан документа и заполненную анкету на почту youryoga@gmail.com <br>
                                4. Дождаться ответа менеджера о готовности карты/необходимости дополнительных
                                действий.<br>
                            <div style="background: #eeeeee;" class="p-3">
                                <strong>Внимание!</strong>
                                Карта инструктора является именной. Продавец вправе попросить подтвердить каким-либо
                                документом личность владельца карты.
                                При передаче карты третьим лицам карта считается недействительной и аннулируется.
                                Правило касается как покупок в розничных магазинах, так и интернет-заказов.
                                * На некоторые категории товаров максимальная скидка может составлять менее 25%, в этом
                                случае мы сможем оформить покупку,
                                учитывая её максимально возможный размер. Точную скидку рассчитают менеджеры или
                                продавцы.
                            </div>
                            </p>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('img/static/partners.jpg') }}" alt="партнёры"
                             class="col-lg-12 col-md-12 col-sm-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
