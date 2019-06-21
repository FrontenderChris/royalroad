<section class="home-floor-plan">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1 class="wow fadeInLeft" data-wow-duration="2s" >Floor Plan & Prices</h1>
                    <p class="wow fadeInRight" data-wow-duration="2s" >Real Estates at 32 Royal Road</p>
                </div>
            </div>
        </div>
    </div>
    <div class="floor-nav">
        <div class="container">
            <ul class="nav nav-pills" role="tablist">
                <li class="nav-item"  data-bed-num="all">
                    <a href="javascript:void(0);" class="nav-link active" >All</a>
                </li>
                <li class="nav-item" data-bed-num="2">
                    <a href="javascript:void(0);" class="nav-link">2 Bed</a>
                </li>
                <li class="nav-item" data-bed-num="3">
                    <a href="javascript:void(0);" class="nav-link">3+ Bed</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="floor-content">
        <div class="container">
            <div class="row">
                <div class="tabs-section col-md-3 wow fadeInLeft">
                    <ul class="nav nav-pills flex-column">
<!--                        <li class="nav-selector nav-item">-->
<!--                            <a href="javascript:void(0);" class="nav-link">Select Floor Plan</a>-->
<!--                        </li>-->
                        <li class="nav-item">
                            <a class="active nav-link" href="javascript:" data-unit-id="0">Lilly</a>
                        </li>
                        <li class="nav-item">
                            <a class=" nav-link" href="javascript:" data-unit-id="1">Azalea</a>
                        </li>
                        <li class="nav-item">
                            <a class=" nav-link" href="javascript:" data-unit-id="2">Gardenia</a>
                        </li>
                        <li class="nav-item">
                            <a class=" nav-link" href="javascript:" data-unit-id="3">Sunflower</a>
                        </li>
                        <li class="nav-item">
                            <a class=" nav-link" href="javascript:" data-unit-id="4">Magnolia</a>
                        </li>
                        <li class="nav-item">
                            <a class=" nav-link" href="javascript:" data-unit-id="5">Camelia</a>
                        </li>
                        <li class="nav-item">
                            <a class=" nav-link" href="javascript:" data-unit-id="6">Dogwood</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content col-md-9 wow fadeInRight">
                    <div class="floor-pln">
                        <div class="blc-box">
                            <h1 id="unit-name">Lilly</h1>
                            <p><span id="unit-area">90</span> M<sup>2</sup></p>
                            <p id="unit-price">$700,000 - $800,000</p>
                        </div>
                        <ul class="floor-details">
                            <li>
                                <a href="javascript:void(0);" onclick="return false;">
                                    <i class="icon-camera ">
                                        <img class="lazyload loaded" data-src="https://2u0yuyu2fs02fa819ut739hy-wpengine.netdna-ssl.com/wp-content/themes/connorgroup-2019-understrap/img/bed.svg" alt="" src="https://2u0yuyu2fs02fa819ut739hy-wpengine.netdna-ssl.com/wp-content/themes/connorgroup-2019-understrap/img/bed.svg">
                                    </i>
                                    <span id="unit-bed">2 bed</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" onclick="return false;">
                                    <i class="icon-camrecorder">
                                        <img class="lazyload loaded" data-src="https://2u0yuyu2fs02fa819ut739hy-wpengine.netdna-ssl.com/wp-content/themes/connorgroup-2019-understrap/img/bath.png" alt="" src="https://2u0yuyu2fs02fa819ut739hy-wpengine.netdna-ssl.com/wp-content/themes/connorgroup-2019-understrap/img/bath.png">
                                    </i>
                                    <span id="unit-bath">1 bath</span>
                                </a>
                            </li>
                            <li class="request-tour-btn">
                                <a href="javascript:void(0);" onclick="return false;">
                                    <i>
                                        <img class="lazyload loaded" data-src="https://2u0yuyu2fs02fa819ut739hy-wpengine.netdna-ssl.com/wp-content/themes/connorgroup-2019-understrap/img/request-a-tour.png" alt="" src="https://2u0yuyu2fs02fa819ut739hy-wpengine.netdna-ssl.com/wp-content/themes/connorgroup-2019-understrap/img/request-a-tour.png" data-was-processed="true">
                                    </i>
                                    <span>Request Tour</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="floor-pln-img">
                        <img alt="floor-pln-img" id="unit-floor-pln-img" src="/wp-content/uploads/2019/06/1bed1bath-1.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="application/javascript">
    var floorPlnComponent = {
        state: {
            actived: 0,
            // 各单元数据
            units: [
                {
                    roomName: 'Lilly',
                    bed: 2,
                    bath: 1,
                    area: 80,
                    price: '$800,000 - $900,000',
                    floorPlnImg: '/wp-content/uploads/2019/06/1bed1bath-1.jpg'
                },
                {
                    roomName: 'Azalea',
                    bed: 2,
                    bath: 1,
                    area: 90,
                    price: '$800,000 - $900,000',
                    floorPlnImg: '/wp-content/uploads/2019/06/1bed1bath-2.jpg'
                },
                {
                    roomName: 'Gardenia',
                    bed: 2,
                    bath: 2,
                    area: 95,
                    price: '$820,000 - $950,000',
                    floorPlnImg: '/wp-content/uploads/2019/06/2bed2bath.jpg'
                },
                {
                    roomName: 'Sunflower',
                    bed: 2,
                    bath: 2,
                    area: 95,
                    price: '$850,000 - $1,000,000',
                    floorPlnImg: '/wp-content/uploads/2019/06/2bed2bath-2.jpg'
                },
                {
                    roomName: 'Magnolia',
                    bed: 2,
                    bath: 2,
                    area: 100,
                    price: '$950,000 - $1,000,000',
                    floorPlnImg: '/wp-content/uploads/2019/06/2bed2bath-2.jpg'
                },
                {
                    roomName: 'Camelia',
                    bed: 3,
                    bath: 2,
                    area: 105,
                    price: '$900,000 - $1,100,000',
                    floorPlnImg: '/wp-content/uploads/2019/06/3bed2bath.jpg'
                },
                {
                    roomName: 'Dogwood',
                    bed: 3,
                    bath: 2.5,
                    area: 120,
                    price: '$1,000,000 - $1,200,000',
                    floorPlnImg: '/wp-content/uploads/2019/06/3bed2.5bath.jpg'
                }
            ]
        },
        init: function () {
            // initialize
        },
        load: function () {
            this.init();
            this.navHandleClick();
            this.tabsHandleClick();
        },
        // 绑定顶部切换按钮点击事件
        navHandleClick: function () {
            let _this = this;
            $(".floor-nav .nav-item").on('click', function () {
                let bedNum = $(this).data("bed-num");
                let i = 0;
                $(".floor-nav .nav-link.active").removeClass("active");
                if (bedNum === 'all') {
                    $(".tabs-section .nav-link").show();
                    $(".floor-nav .nav-item:first-child .nav-link").addClass("active");
                } else
                    $(_this.state.units).each(function (key, item) {
                        if (bedNum === item.bed) {
                            $(".tabs-section .nav-link").eq(key).show();
                            $(".floor-nav .nav-item").eq(bedNum - 1).find(".nav-link").addClass("active");
                        } else {
                            $(".tabs-section .nav-link").eq(key).hide();
                        }
                    });
            });
            $(".floor-nav .nav-item").on('click', function () {
                let bedNum = $(this).data("bed-num");
            })
        },
        // 绑定左侧Tab点击事件
        tabsHandleClick: function () {
            let _this = this;
            $(".tabs-section .nav-link").on('click', function () {
                let unitId = Number($(this).attr('data-unit-id'));
                let unit = _this.state.units[unitId];
                _this.state.actived = unitId;
                _this.tabSwitch(unitId);
                $(".tab-content").fadeOut(800, function () {
                    $("#unit-name").html(unit.roomName);
                    $("#unit-area").html(unit.area);
                    $("#unit-bed").html(unit.bed + "&nbsp;&nbsp;bed");
                    $("#unit-bath").html(unit.bath + "&nbsp;&nbsp;bath");
                    $("#unit-price").html(unit.price);
                    $("#unit-floor-pln-img").attr("src", unit.floorPlnImg);

                    $(".tab-content").fadeIn(1200);
                });
            });
        },
        tabSwitch: function (unitId) {
            $(".tabs-section .nav-link.active").removeClass("active");
            $(".tabs-section .nav-item").eq(unitId).find(".nav-link").addClass("active");
        }
    };

    $(function() {
        // Handler for .ready() called.
        floorPlnComponent.load();
    });
</script>