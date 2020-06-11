@extends('layouts.header-footer')

@section('main')
    <div class="content-line my-5">
        <div class="container">
            <div class="container-2">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h3>Контакты</h3>
                        </div>
                    </div>
                </div>
                <div class="map">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-12 p-0">
                            <iframe class="col-12"
                            src="https://yandex.ru/map-widget/v1/?um=constructor%3A35154e4979597d1ba6c61d888297b23ca485520feca0bdd1dc78a04416fd88d5&amp;
                            source=constructor" width="550" height="310" frameborder="0"></iframe>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 m-auto">
                            <h5>Адрес</h5>
                            <p>г.Томск, ул. Учебная, 22а, ст1</p>
                            <h5>Режим работы магазина</h5>
                            <p>
                                Будние дни: 10:00-20:00<br>
                                Выходные и праздничные дни: 10:00-18:00
                            </p>
                            <h5>Контакты</h5>
                            <p>
                                тлф: 89996662233<br>
                                e-mail: youryoga@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
