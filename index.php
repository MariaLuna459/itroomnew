<?
$path = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta name="description" content="">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="pageable.min.css">
    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="js/pageable.min.js"></script>
    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
</head>

<body>
    <div class="header__block">
        <div class="header">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="158" height="42" viewBox="0 0 158 42" fill="none">
                    <path d="M36.222 29.8197V12.1799C36.222 12.0521 36.222 11.9243 36.222 11.7964C36.3498 11.5408 36.222 11.1573 36.0941 10.7738C35.9663 10.5182 35.5828 10.2625 35.3272 10.1347C35.1994 10.0069 35.0715 10.0069 34.9437 9.87907L19.6047 1.05915C19.4769 1.05915 19.3491 0.931326 19.2212 0.931326C19.0934 0.675676 18.7099 0.547852 18.4543 0.547852C18.1986 0.547852 17.8152 0.675676 17.5595 0.931326C17.4317 0.931326 17.3039 1.05915 17.176 1.05915L1.83706 9.87907C1.70923 10.0069 1.58141 10.1347 1.45358 10.1347C1.19793 10.2625 0.814456 10.5182 0.686631 10.7738C0.558806 11.0295 0.430981 11.413 0.558806 11.7964C0.558806 11.9243 0.558806 12.0521 0.558806 12.1799V29.8197C0.558806 29.9476 0.558806 30.0754 0.558806 30.2032C0.430981 30.4589 0.558806 30.8423 0.686631 31.2258C0.814456 31.4815 1.19793 31.7371 1.45358 31.8649C1.58141 31.9928 1.70923 31.9928 1.83706 32.1206L17.176 40.9405C17.3039 41.0683 17.4317 41.0683 17.5595 41.0683C17.8152 41.324 18.0708 41.4518 18.4543 41.4518C18.8378 41.4518 19.0934 41.324 19.3491 41.0683C19.4769 41.0683 19.6047 40.9405 19.7325 40.9405L35.0715 32.1206C35.1993 31.9928 35.3272 31.9928 35.455 31.8649C35.7107 31.7371 36.0941 31.6093 36.222 31.2258C36.3498 30.9702 36.4776 30.5867 36.3498 30.2032C36.222 30.0754 36.222 29.9476 36.222 29.8197ZM19.7325 3.99912L32.515 11.413L26.7629 14.7364L19.7325 10.646V3.99912ZM17.176 3.99912V10.646L10.1457 14.7364L4.39355 11.413L17.176 3.99912ZM3.1153 13.586L8.86742 16.9094V24.9624L3.1153 28.2859V13.586ZM17.176 38.0005L4.39355 30.5867L10.1457 27.2633L17.176 31.3536V38.0005ZM17.176 28.4137L11.4239 25.0902V18.4433L17.176 21.7668V28.4137ZM18.4543 19.4659L12.7022 16.1425L18.4543 12.819L24.2064 16.1425L18.4543 19.4659ZM25.3568 18.4433V25.0902L19.6047 28.4137V21.7668L25.3568 18.4433ZM19.7325 38.0005V31.3536L26.7629 27.2633L32.515 30.5867L19.7325 38.0005ZM33.6655 28.4137L27.9133 25.0902V17.0373L33.6655 13.7138V28.4137Z" fill="#F2F2F2" />
                    <path d="M45.7628 22.5811V20.9797L48.9418 17.7531H53.746V22.5811H45.7628ZM45.7628 30.5677V25.7873H53.746V30.5677H56.9284V14.5503H47.3404L42.5566 19.3783V30.5677H45.7628Z" fill="#5272FF" />
                    <path d="M60.7944 11.3712L62.4196 12.9726H70.4062L72.0076 11.3712V8.16504H68.8048V10.2492H63.9972V8.16504H60.7944V11.3712ZM62.4196 30.5676L70.4062 19.8814V30.5676H73.5852V14.5502H70.4062L62.4196 25.2126V14.5502H59.2168V30.5676H62.4196Z" fill="#5272FF" />
                    <path d="M83.9949 30.5677V17.7531H89.5573V14.5503H75.1855V17.7531H80.7921V30.5677H83.9949Z" fill="#5272FF" />
                    <path d="M94.363 30.5677L102.35 19.8815V30.5677H105.529V14.5503H102.35L94.363 25.2127V14.5503H91.1602V30.5677H94.363Z" fill="#5272FF" />
                    <path d="M111.271 22.5811V17.7531H119.258V22.5811H111.271ZM111.271 30.5677V25.7873H120.859L122.437 24.1825V16.1755L120.859 14.5503H108.068V30.5677H111.271Z" fill="#F2F2F2" />
                    <path d="M125.388 30.5677H133.399L138.179 25.7873V14.5503H135V20.9797H130.196L127.013 17.7769V14.5503H123.811V19.3783L128.594 24.1825H135L131.797 27.3649H125.388V30.5677Z" fill="#F2F2F2" />
                    <path d="M143.441 30.5677V19.7693L147.722 25.9233H150.397L154.586 19.7693V30.5677H157.789V14.5503H154.698L149.024 22.3091L143.441 14.5503H140.238V30.5677H143.441Z" fill="#F2F2F2" />
                </svg>
            </div>
            <ul class="anchors">
                <li><a href="#page-1">Главная</a></li>
                <li><a href="#page-2">Визитка</a></li>
                <li><a href="#page-3">Корпоративные сервисы</a></li>
                <li><a href="#page-4">Интернет - магазин</a></li>
                <li><a href="#page-5">CRM - система</a></li>
                <li><a href="#page-6">Индивидуальный сайт</a></li>
            </ul>
            <div class="contact">
                <div class="number__phone">+7 (951) 212-68-77</div>
            </div>
        </div>
    </div>

    <div id="container">
        <div data-anchor="Page 1" class="pageone">
            <div class="content">
                <!-- ШАПКА САЙТА -->
                <div class="main__block">
                    <div class="title">Разработка WEB-приложений</div>
                    <div class="description">Мы создаем качественные сайты для вашего бизнеса — от одностраничного
                        промо-сайта до полноценного интернет-портала</div>
                    <div class="button">
                        <a class="btn" href="#ex1" rel="modal:open">ЗАКАЗАТЬ САЙТ</a>
                    </div>
                    <div id="ex1" class="modal">
                        <p>Thanks for clicking. That felt good.</p>
                        <a href="#" rel="modal:close">Close</a>
                    </div>
                </div>
            </div>
        </div>
        <div data-anchor="Page 2" class="pagetwo">
            <div class="content">
                <!-- ШАПКА САЙТА -->
                <div class="main__block">
                    <div class="block__title__page">
                        <div class="title create__web">Разработка сайтов</div>
                        <div class="sub__title">Мы создаём сайты любой сложности</div>
                    </div>
                    <div class="description">Визитка – это небольшой веб-ресурс, обычно состоящий из одной или нескольких страниц и содержашей информацию о компании, организации, частном лице</div>
                    <div class="button">
                        <a href="tel:+73412775957" class="btn">ПОЗВОНИТЬ</a>
                        <a class="btn" href="#ex2" rel="modal:open">НАПИСАТЬ</a>
                    </div>
                    <div id="ex2" class="modal">
                        <p>Thanks for clicking. That felt good.</p>
                        <a href="#" rel="modal:close">Close</a>
                    </div>
                </div>
            </div>
        </div>
        <div data-anchor="Page 3" class="pagethree">
            <div class="content">
                <!-- ШАПКА САЙТА -->
                <div class="main__block">
                    <div class="block__title__page">
                        <div class="title create__web">Разработка сайтов</div>
                        <div class="sub__title">Мы создаём сайты любой сложности</div>
                    </div>
                    <div class="description">Корпоративные сервисы – готовое решение для сайта компании. Подходит для любого бизнеса</div>
                    <div class="button">
                        <a href="tel:+73412775957" class="btn">ПОЗВОНИТЬ</a>
                        <a class="btn" href="#ex3" rel="modal:open">НАПИСАТЬ</a>
                    </div>
                    <div id="ex3" class="modal">
                        <p>Thanks for clicking. That felt good.</p>
                        <a href="#" rel="modal:close">Close</a>
                    </div>
                </div>
            </div>
        </div>
        <div data-anchor="Page 4" class="pagefour">
            <div class="content">
                <!-- ШАПКА САЙТА -->
                <div class="main__block">
                    <div class="block__title__page">
                        <div class="title create__web">Разработка сайтов</div>
                        <div class="sub__title">Мы создаём сайты любой сложности</div>
                    </div>
                    <div class="description">Интернет магазин – сайт, торгующий товарами в интернете. Позволяет покупателям сформировать заказ на покупку, выбрать способ оплаты и доставки заказа</div>
                    <div class="button">
                        <a href="tel:+73412775957" class="btn">ПОЗВОНИТЬ</a>
                        <a class="btn" href="#ex4" rel="modal:open">НАПИСАТЬ</a>
                    </div>
                    <div id="ex4" class="modal">
                        <p>Thanks for clicking. That felt good.</p>
                        <a href="#" rel="modal:close">Close</a>
                    </div>
                </div>
            </div>
        </div>
        <div data-anchor="Page 5" class="pagefive">
            <div class="content">
                <!-- ШАПКА САЙТА -->
                <div class="main__block">
                    <div class="block__title__page">
                        <div class="title create__web">Разработка сайтов</div>
                        <div class="sub__title">Мы создаём сайты любой сложности</div>
                    </div>
                    <div class="description">СRM-система – это простая, но очень умная система для автоматизации бизнеса, где есть все нужные данные о ваших покупателях. Их контакты, записи разговоров, последние договорённости, суммы оплаты и много всего другого</div>
                    <div class="button">
                        <a href="tel:+73412775957" class="btn">ПОЗВОНИТЬ</a>
                        <a class="btn" href="#ex5" rel="modal:open">НАПИСАТЬ</a>
                    </div>
                    <div id="ex5" class="modal">
                        <p>Thanks for clicking. That felt good.</p>
                        <a href="#" rel="modal:close">Close</a>
                    </div>
                </div>
            </div>
        </div>
        <div data-anchor="Page 6" class="pagesix">
            <div class="content">
                <!-- ШАПКА САЙТА -->
                <div class="main__block">
                    <div class="block__title__page">
                        <div class="title create__web">Разработка сайтов</div>
                        <div class="sub__title">Мы создаём сайты любой сложности</div>
                    </div>
                    <div class="description">Индивидуальный сайт – реализация нестандартных веб-решений в области дизайна и функционала ресурса</div>
                    <div class="button">
                        <a href="tel:+73412775957" class="btn">ПОЗВОНИТЬ</a>
                        <a class="btn" href="#ex6" rel="modal:open">НАПИСАТЬ</a>
                    </div>
                    <div id="ex6" class="modal">
                        <p>Thanks for clicking. That felt good.</p>
                        <a href="#" rel="modal:close">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        new Pageable("#container", {
            orientation: "horizontal", // or horizontal
            delay: 50,
            onBeforeStart: function() {
                // do something before scrolling begins
            },
            onStart: function() {
                // do something when scrolling begins
            },
            onScroll: function() {
                // do something during scroll
            },
            onFinish: function() {
                // do something when scrolling ends
            },
        });
    </script>
</body>


</html>