@extends('layouts.main')

@section('title', 'Welcome To Homepage - White Copper Travel')

@section('contend')
    <div style="transform: translateY(-100%);" class="preloader-block">
        <div class="first-level wrapper pa acc ovh">
            <div class="top-part preloader-part"></div>
            <div class="bottom-part preloader-part"></div>
            <div class="second-level wrapper pr fullheight fullwidth ovh">
                <div class="top-part preloader-part"></div>
                <div class="bottom-part preloader-part"></div>
            </div>
        </div>
    </div>

    <div class="regular-header hidez">
        <header class="wrapper tbgc1 section-fix header-wrapper fixed-screen-header" style="height: 88px;">
            <div class="row flex items-center" style="margin-top: 15px;">
                <div class="column large-3 medium-6">
                    <div class="logo component">
                        <a href="{{ url('/') }}" class="link">
                            <img src="{{ url('/images/logo.png') }}" alt="logo" class="image darklogo">
                            <img src="{{ url('/images/logolight.png') }}" alt="logo" class="image lightlogo">
                        </a>
                    </div>
                </div>
                <div class="column large-9 medium-6">
                    <div class="wrapper js-menu-container">
                        <nav class="menu component">
                            <ul class="list inline ar xsgutter float-right">
                                <li><a class="link fz2 fw3 ttu ctm" href="#home">Home</a></li>
                                <li><a class="link fz2 fw3 ttu ctm" href="#bestOffers">best offers</a></li>
                                <li><a class="link fz2 fw3 ttu ctm" href="#activities">Holiday activities</a></li>
                                <li><a class="link fz2 fw3 ttu ctm" href="#team">team Members</a></li>
                                <li><a class="link fz2 fw3 ttu ctm" href="#aboutus">about us</a></li>
                                <li><a class="link fz2 fw3 ttu ctm" href="#contacts">contact Us</a></li>
                            </ul>
                            <div class="component menutoggle js-menu-toggle">
                                <span class="line"></span>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <section style="opacity: 1; transform: translateY(0px);" class="pt90 tbgc3 section-fix booknow-section" id="home">
        <div style="opacity: 1; transform: translateY(0px);" class="wrapper booknow-section ac">
            <div class="component">
                <!--Slider-->
                <div class="skdslider">
                    <ul id="demo1" class="slides">
                        <li>
                            <img src="{{ url('images/slides/1.jpg') }}" />
                            <!--Slider Description example-->
                            <div class="slide-desc">
                                <h2>Slider Title 1</h2>
                                <p>Demo description here. Demo description here. Demo description here. Demo description here. Demo description here. <a class="more" href="#">more</a></p>
                            </div>
                        </li>
                        <li>
                            <img src="{{ url('images/slides/2.jpg') }}" />
                            <div class="slide-desc">
                                <h2>Slider Title 2</h2>
                                <p>Demo description here. Demo description here. Demo description here. Demo description here. Demo description here. <a class="more" href="#">more</a></p>
                            </div>
                        </li>
                        <li>
                            <img src="{{ url('images/slides/3.jpg') }}" />
                            <!--NO Description Here-->
                        </li>
                        <li>
                            <img src="{{ url('images/slides/4.jpg') }}" />
                            <div class="slide-desc">
                                <h2>Slider Title 4</h2>
                                <p>Demo description here. Demo description here. Demo description here. Demo description here. Demo description here. <a class="more" href="#">more</a></p>
                            </div>
                        </li>
                        <li><img src="{{ url('images/slides/5.jpg') }}" /></li>
                        <li>
                            <img src="{{ url('images/slides/6.jpg') }}" />
                            <div class="slide-desc">
                                <h2>Slider Title 6</h2>
                                <p>Demo description here. Demo description here. Demo description here. Demo description here. Demo description here. <a class="more" href="#">more</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--End Slider-->
            </div>
        </div>
    </section>

    <section class="pt40 pb40 tbgc3 section-fix booknow-section" style="opacity: 1; transform: translateY(0px);">
        <div class="wrapper booknow-section ac" style="opacity: 1; transform: translateY(0px);">
            <div class="component">
                <div class="row">
                    <div class="column large-8">
                        <div class="wrapper mt5">
                            <h3 class="text title ttu fz8 cmt fw3 lss">BOOK YOUR tour travel with us this season.</h3>
                        </div>
                    </div>
                    <div class="column large-4">
                        <div class="wrapper">
                            <span class="button js-booknow-btn"><span class="text fz6 lh22 ttu fw3">book now</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt100 pb100 tbgc1 section-fix" id="bestOffers">
        <div class="wrapper offers-section">
            <div class="component">
                <div class="row">
                    <div class="column large-12">
                        <h2 class="text fz8 fw3 ttu lsm mb30 title ac text-[#00426c]">Best Offers</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="column large-12">
                        <div class="ovh pr wrapper">
                            <div class="wrapper best-offers mb-40">
                                <div class="row">
                                    <div class="column large-6 medium-6 mb40">
                                        <div style="opacity: 1; transform: translateX(0px);" class="wrapper component offer-item-wrapper js-offer-block">
                                            <div class="row">
                                                <div class="column small-12 large-6">
                                                    <div class="wrapper  ovh pr offer-thumb js-show-details pointer">
                                                        <span onClick="setTour('Lamayuru Padum Trek');" class="lines-container pa fullheight fullwidth wrapper"></span>
                                                        <img src="{{ url('images/activities/small/lamayuru-padum.jpg') }}" alt="" class="image fullwidth pointer" data-path="images/activities/small/" data-large-images="[&quot;lamayuru-padum.jpg&quot;, &quot;2.jpg&quot;, &quot;3.jpg&quot;]">
                                                        <div class="wrapper pa fullwidth left bottom pb15 price-palette pt15">
                                                            <p class="text cw fz6 lh1 js-cost ac title-tour-front">
                                                                19 Days Trek
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column small-12 large-6">
                                                    <div class="wrapper">
                                                        <h4 onClick="setTour('Lamayuru Padum Trek');" class="title text fz6 fw3 lh12 ctm mb5 pointer js-show-details js-name">Lamayuru Padum Trek</h4>
                                                        <p class="description text fz1 c6 lh2 mb10 fsi js-description">The most beautiful and longest trek for around 20-21 days starts from Lamayuru, where the 10th Century's monastery is located, around 125 Kms. from Leh Town. You can also do this trek in 10 days finishing at Padum in Zangskar Valley. The trek starts from Lamayuru and it enters Zangskar Valley passing through Wanla and the most remote villages of Lingshed. On the 9th and 10th day, one reaches Hanamur or Pishu via Karsha monastery to Padum (the headquarter of Zangskar valley). After a day rest at Padum you can proceed towards Darcha via Phuktal monastery and high passes (Shikun La 5,100 m). The trek finishes at Darcha village in Lahul & Spiti district of Himachal Pradesh around 145 kms. from Manali.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row hide">
                                                <div class="column large-12">
                                                    <div class="days-list">
                                                        <div class="day">
                                                            <p class="js-title">1st Day</p>
                                                            <p class="js-acc-description">Arrive Delhi, where you will be met and transfered to your hotel.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">2nd Day</p>
                                                            <p class="js-acc-description">Delhi - Leh (3500m) by plane.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">3rd Day</p>
                                                            <p class="js-acc-description">A whole day at leisure in Leh. You can visit some of the most famous and oldest monasteries of Ladakh (15th and 17th century), Thikse, Shey and Hemis and take a walk to the colorful bazaar. Overnight at Hotel.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">4th Day</p>
                                                            <p class="js-acc-description">Leh - Kargil (3700m) by bus.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">5th Day</p>
                                                            <p class="js-acc-description">Kargil - Padum (3600m) by bus.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">6th Day</p>
                                                            <p class="js-acc-description">A pleasant walk through fields. On the way we will visit Pepiting monastery and the Karsha Gompa--one of the most important in Zanskar and dating back to the 15th century. We have beautiful panoramic vistas of the full Himalayan range.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">7th Day</p>
                                                            <p class="js-acc-description">We progress along the Zanskar river.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">8th Day</p>
                                                            <p class="js-acc-description">An easy-going walk along the right bank of the river takes us to Rinam village. We continue to the tiny hamlet of Hanumil.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">9th Day</p>
                                                            <p class="js-acc-description">Hanumil - Purfi La (3950m) - Snertse (3850m) in 6h.Up and down over a steep path.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">10th Day</p>
                                                            <p class="js-acc-description">After a steep climb we reach the Purfi La pass, from where the panorama towards the Ladakhi and Zanskari ranges is quite impressive. Visit of Lingshet monastery.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">11th Day</p>
                                                            <p class="js-acc-description">We start a long and gradual ascent to the Netuke La pass (4280m), where we have a wonderful view towards the Nierag valley. The trail then descends shortly to reach Skimpata and Gongma villages, then climbs steeply to reach the second pass, Khyupa La (4300m).</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">12th Day</p>
                                                            <p class="js-acc-description">An amazing spectacle of hanging icefalls. We descend towards the Photang river and progress through barley fields.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">13th Day</p>
                                                            <p class="js-acc-description">Photang valley turns into a gorge labyrinth, which forces us to make a detour via Sirsir La pass. Three shortens mark Hanupatta and its giant hundred-year-old cedar, flanked by colorful prayer flags.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">14th Day</p>
                                                            <p class="js-acc-description">We head down towards the Photang valley and climb up to the Panjila pass(3410m). We finally descend to Wanla and visit its tiny monastery.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">15th Day</p>
                                                            <p class="js-acc-description">Visit of the monastery at Lamayuru, which is the biggest in western Ladakh and was built in the 16th century on the site of a much older temple. The gompa is very well kept and famous for its many colorful wall paintings.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">16th Day</p>
                                                            <p class="js-acc-description">Lamayuru - Leh (3500m) by bus.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">17th Day</p>
                                                            <p class="js-acc-description">Leh – Delhi by plane.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">18th Day</p>
                                                            <p class="js-acc-description">At leisure in Delhi. Safety day for your international flight.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">19th Day</p>
                                                            <p class="js-acc-description">Transfer to airport and fly back home</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column large-6 medium-6 mb40">
                                        <div style="opacity: 1; transform: translateX(0px);" class="wrapper component offer-item-wrapper js-offer-block">
                                            <div class="row">
                                                <div class="column small-12 large-6">
                                                    <div class="wrapper  ovh pr offer-thumb js-show-details pointer">
                                                        <span onClick="setTour('Pangong Jeep Safari');" class="lines-container pa fullheight fullwidth wrapper"></span>
                                                        <img src="{{ url('images/activities/small/pangong-safari.jpg') }}" alt="" class="image fullwidth pointer" data-path="images/activities/small/" data-large-images="[&quot;1.jpg&quot;, &quot;2.jpg&quot;, &quot;pangong-safari.jpg&quot;]">
                                                        <div class="wrapper pa fullwidth left bottom pb15 price-palette pt15">
                                                            <p class="text cw fz6 lh1 js-cost ac title-tour-front">
                                                                12 Days Safari
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column small-12 large-6">
                                                    <div class="wrapper">
                                                        <h4 onClick="setTour('Pangong Jeep Safari');" class="title text fz6 fw3 lh12 ctm mb5 pointer js-show-details js-name">Pangong Jeep Safari</h4>
                                                        <p class="description text fz1 c6 lh2 mb10 fsi js-description">Pangong Lake is the highest lake in Ladakh region and is famous for colorful stones, fossils and wild flowers in summer. Trip to Pangog Tso is very rewarding and gives you a life long memory. You will drive through the villages of pastoral community who have retained their nomadic glory in spite of harsh weather.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row hide">
                                                <div class="column large-12">
                                                    <div class="days-list">
                                                        <div class="day">
                                                            <p class="js-title">1st Day</p>
                                                            <p class="js-acc-description">Arrival in Delhi. Meet the guide at the airport and transfer to hotel.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">2nd Day</p>
                                                            <p class="js-acc-description">Flight to Leh.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">3rd Day</p>
                                                            <p class="js-acc-description">Sightseeing of Leh's monasteries and palaces.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">4th Day</p>
                                                            <p class="js-acc-description">Drive from Lhe to Durbuk (110km) and en route visit Chemra and Taktak Gompas. Overnight camp.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">5th Day</p>
                                                            <p class="js-acc-description">Drive to Lukung, by pass village Tantse (100km)</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">6th Day</p>
                                                            <p class="js-acc-description">Drive to Pangong Tso (60km) via Spangmik village at the bank of Pangong Tso. Overnight camp.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">7th Day</p>
                                                            <p class="js-acc-description">Explore the area, drive and trek along the lake.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">8th Day</p>
                                                            <p class="js-acc-description">Drive back to Tangtse by crossing over a pass. You will have beautiful opportunity of photography. Overnight camp.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">9th Day</p>
                                                            <p class="js-acc-description">Drive to Chang La. En route visit Durbuk Gompa.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">10th Day</p>
                                                            <p class="js-acc-description">Drive back to Leh via Hemis monastery.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">11th Day</p>
                                                            <p class="js-acc-description">Flight to Delhi. Transfer to hotel.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">12th Day</p>
                                                            <p class="js-acc-description">Departure</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="column large-6 medium-6 mb40">
                                        <div style="opacity: 1; transform: translateX(0px);" class="wrapper component offer-item-wrapper js-offer-block">
                                            <div class="row">
                                                <div class="column small-12 large-6">
                                                    <div class="wrapper  ovh pr offer-thumb js-show-details pointer">
                                                        <span onClick="setTour('Wild Ladakh Tour');" class="lines-container pa fullheight fullwidth wrapper"></span>
                                                        <img src="{{ url('images/activities/small/wild-ladakh.jpg') }}" alt="" class="image fullwidth pointer" data-path="images/activities/small/" data-large-images="[&quot;wild-ladakh.jpg&quot;]">
                                                        <div class="wrapper pa fullwidth left bottom pb15 price-palette pt15">
                                                            <p class="text cw fz6 lh1 js-cost ac title-tour-front">
                                                                6 Days Wild Tour
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column small-12 large-6">
                                                    <div class="wrapper">
                                                        <h4 onClick="setTour('Wild Ladakh Tour');" class="title text fz6 fw3 lh12 ctm mb5 pointer js-show-details js-name">Wild Ladakh Tour</h4>
                                                        <p class="description text fz1 c6 lh2 mb10 fsi js-description">If you are a wildlife enthusiast then this 5 nights and 6 day wildlife tour of Ladakh is an excellent opportunity for you to spot some most exotic animal species roam freely in their natural habitat. The tour starts with sightseeing of the city of Leh. Later, you will be able to spot various wild animals such as blue sheep, snow leopard, Tibetan argali, and many more. Spotting these exotic species in terrains, which in winters become inaccessible for human is a thrilling experience. On the last day of the tour, enjoy trekking on the Stokla pass (4900m) and a visit to the Stok Palace.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row hide">
                                                <div class="column large-12">
                                                    <div class="days-list">
                                                        <div class="day">
                                                            <p class="js-title">1st Day</p>
                                                            <p class="js-acc-description">Arrive at the Leh airport where our tour representative will meet you for an assisted transfer to the hotel. Check -in to the hotel and relax. Post lunch, visit the Leh Market, the Leh Palace, the Hall of Fame and the Shanti Stupa. Overnight stay at the hotel.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">2nd Day</p>
                                                            <p class="js-acc-description">After breakfast, full day 2 is booked for sight seeing which includes visits to the Shey Palace, Thiksey and Hemis monasteries as well as the Stock Palace Museum. Return back to Leh in the evening. Overnight at the hotel.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">3rd Day</p>
                                                            <p class="js-acc-description">Post breakfast, hit the road for Phey Bridge. After crossing the bridge, walk to reach the Zingchen Gorge. En-route, you can spot signs of the snow leopard along the bottom of the side valleys during winters or early spring or fall. Arrive in Rumbak, by evening.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">4th Day</p>
                                                            <p class="js-acc-description">Full day 4, after breakfast, proceed for full- day wildlife viewing. You will be accompanied by a  local guide. You might spot various kinds of animals such as the great Tibetan sheep also called aragali, blue sheep, a Tibetan wolf, various migratory bird species, exquisite flora and if really lucky, a Snow leopard. Return to the hotel for an overnight halt.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">5th Day</p>
                                                            <p class="js-acc-description">Start early for a trek up the Stokla pass (4900m- 3 hours), move towards the extreme left along the south facing hill. After one hour, you start climbing up to the pass. From here, you can get an amazing view of the Indus valley. Slide downwards to the Stok village. A visit to Stok Palace museum can be arranged. Later drive towards Leh. On arrival, check-into the hotel for an overnight stay.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">6th Day</p>
                                                            <p class="js-acc-description">Assisted transfer to the airport, to catch a flight back to Delhi.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column large-6 medium-6 mb40">
                                        <div style="opacity: 1; transform: translateX(0px);" class="wrapper component offer-item-wrapper js-offer-block">
                                            <div class="row">
                                                <div class="column small-12 large-6">
                                                    <div class="wrapper  ovh pr offer-thumb js-show-details pointer">
                                                        <span onClick="setTour('Hidden Monasteries');" class="lines-container pa fullheight fullwidth wrapper"></span>
                                                        <img src="{{ url('images/activities/small/hidden-monasteries.jpg') }}" alt="" class="image fullwidth pointer" data-path="images/activities/small/" data-large-images="[&quot;hidden-monasteries.jpg&quot;]">
                                                        <div class="wrapper pa fullwidth left bottom pb15 price-palette pt15">
                                                            <p class="text cw fz6 lh1 js-cost ac title-tour-front">
                                                                7 Days
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column small-12 large-6">
                                                    <div class="wrapper">
                                                        <h4 onClick="setTour('Hidden Monasteries');" class="title text fz6 fw3 lh12 ctm mb5 pointer js-show-details js-name">Hidden Monasteries</h4>
                                                        <p class="description text fz1 c6 lh2 mb10 fsi js-description">The Ladakh region is home to an array of Tibetan Buddhist monasteries, whose foundation was laid by the Ladakhi kings and Buddhist saints. The Hidden Monasteries Tour has been designed to let you explore beautiful and vivid monasteries that offer a sneak peek into the Tibetan culture and history.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row hide">
                                                <div class="column large-12">
                                                    <div class="days-list">
                                                        <div class="day">
                                                            <p class="js-title">1st Day</p>
                                                            <p class="js-acc-description">Upon your arrival at Leh Airport, our tour representative will meet you and assist you in smooth transfer to the hotel. The day is kept free for acclimatization. Stay overnight in the hotel.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">2nd Day</p>
                                                            <p class="js-acc-description">The morning is free to relax. In the afternoon, hit the road to Saboo, which is around 8 kilometers from Leh and nestled atop of a hillock facing the Indus Valley. It is the most visited monastery in Leh. On your way back to Leh, visit the SOS village (Choglamsar). It is an important destination for those who are interested in studying Tibetan culture. The Central Institute of Buddhist Studies located here features a Tibetan library, handicraft shop, restaurants and medical center. There is  also a golf course and a polo ground.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">3rd Day</p>
                                                            <p class="js-acc-description">Day 3 starts with an early morning visit to Takthok Gompa. Built in the 8th century  by Guru Padmasambhava, Takthok Gompa is situated around the cave where he meditated. Post your return from Takthok Gompa, set off to visit the Chemrey Gompa. Built under the patronage of Sengge Namgyal,the construction of  Chemrey Gompa was started in March 1644 A.D. and got completed in 1646 A.D. This monastery is nestled atop of a small hill, whose one side is a dwelling of monks.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">4th Day</p>
                                                            <p class="js-acc-description">Post breakfast, take a road journey to Alchi. On the way, halt at Phyang Gompa, located on the main highway to Alchi. It is one of the most beautiful monasteries in Ladakh. Post sightseeing in Phyang monastery, visit Basgo, which is located along the road to Alchi. When the kingdom of Ladakh got divided in the 15th and 16th century, the Basgo village was an important tourist center in the medieval times.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">5th Day</p>
                                                            <p class="js-acc-description">While returning back from Alchi to Lamayuru, pay a visit to Ridzong Gompa, one of the less visited monasteries in Ladakh. Built sometime around 1840, this Gompa is beautifully set in a valley, in a gorge and was founded by Lama Tsultim Nima. After exploration of Ridzong Gompa, proceed on a trip to the 11th century Lamayuru Monastery. There is a popular legend that the Arhat Madhyantika, a disciple of Buddha, offered holy food and water to satisfy the spirits inhabiting the Gompa. Stay overnight in the hotel.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">6th Day</p>
                                                            <p class="js-acc-description">Today, you will drive back to Leh for lunch at the hotel. The afternoon is free for leisure. Stay overnight in the hotel.</p>
                                                        </div>
                                                        <div class="day">
                                                            <p class="js-title">7th Day</p>
                                                            <p class="js-acc-description">Today, you will be transferred to the airport to board flight back to Delhi.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <div class="wrapper all-tours-btn ac mt40">
                            <a href="#tours" class="button js-all-tours"><span class="text fz6 lh22 ttu fw3">all tours</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Tours-->
    <section class="tbgc1 pt100 pb100 section-fix" id="activities">
        <div class="wrapper">
            <div class="row">
                <div class="column large-12">
                    <h2 class="text fz8 fw3 ttu lsm mb30 title ac text-[#00426c]">Activities</h2>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <div class="portfoliofilters ac">
                        <ul class="list inline xsgutter mb50">
                            <li class="portfoliofilter active" data-group="all"><span class="text fz3 fsi fw3 ttu pointer">activities</span></li>
                            <li class="portfoliofilter" data-group="treking"><span class="text fz3 fsi fw3 ttu pointer">Trekking</span></li>
                            <li class="portfoliofilter" data-group="expedition"><span class="text fz3 fsi fw3 ttu pointer">Expedition</span></li>
                            <li class="portfoliofilter" data-group="safari"><span class="text fz3 fsi fw3 ttu pointer">Safari</span></li>
                            <li class="portfoliofilter" data-group="rafting"><span class="text fz3 fsi fw3 ttu pointer">Rafting</span></li>
                            <li class="portfoliofilter" data-group="packages"><span class="text fz3 fsi fw3 ttu pointer">Packages</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row fullwidth nogutter">
                <div class="column large-12">
                    <div style="position: relative; overflow: hidden; height: 177px; transition: height 250ms ease-out 0s;" class="portfolio component shuffle">
                        <div class="sizer"></div>
                        <div class="item wrapper p5 shuffle-item concealed" data-groups="[&quot;treking&quot;]">
                            <div style="opacity: 1; transform: translateX(0px);" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 js-name inline mr5">Rumtse - Tsomoriri Trek</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">The duration of this trek is 9 days. Best time to undertake it is between June and September. The highest point of this trek is Shibuk La which is at 5016 m. There are monasteries, wildlife, lakes to see and encounter with the nomads makes this an unforgettable experience.</p>
                                                <p class="js-description">It crosses three passes before Tsokar Lake and another three passes after Tsokar the salt Lake. While trekking in this area, you can visit birds, wild animals and Changpa nomades grazing their herds of goats at the mountains and high passes. The mid point of the trek is Tsomoriri Lake or Korzok, the head quarter of Nomadic people.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">Jeep from Leh to Rumtse (4 hours).</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">Hike from Rumtse to other side of the Shingbuk La pass (6 hours, highest point: Shingbuk La 4875 m).</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">Hike from Shingbuk La to Thukjey Gompa (7 hours).</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">Rest day in Thukjey and walk around for acclimatization Before crossing Kyamayuri La pass and yalung Nayu La.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">5th Day</p>
                                                        <p class="js-acc-description">Hike from Thukjey to Nuruchan village (5 hours).</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">6th Day</p>
                                                        <p class="js-acc-description">Hike from Nurchan village to Gyama (6 hours, highest point: Kyamayuri La 5400 m).</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">7th Day</p>
                                                        <p class="js-acc-description">Hike from Gyama to Korzok (6-7 hours, highest point: Yalung Nyau La 5440 m).</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">8th Day</p>
                                                        <p class="js-acc-description">Rest day in Korzok and sightseeing around Tso Moriri</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">9th Day</p>
                                                        <p class="js-acc-description">Korzok to Leh by Jeep.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/rumtse-tsomoriri.jpg') }}" class="image activities" alt="Rumtse Tsomoriri" data-path="images/activities/small/" data-large-images="[&quot;rumtse-tsomoriri.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Rumtse - Tsomoriri Trek');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; opacity: 0; transform: translate3d(268px, 0px, 0px) scale3d(0.001, 0.001, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item concealed" data-groups="[&quot;treking&quot;]">
                            <div style="opacity: 1; transform: translateX(0px);" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 js-name inline mr5">Lamayuru to Darcha Trek</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">Lamayuru to Darcha trek is the most popular trail into Zangskar valley via Shingo La. Lamayuru - Darcha trek starts from famous and ancient buddhist monastery of Lamayuru and proceeds into Zangskar though most isolated villages of Lingshet, Photoksar and then the headquarter of Zangskar called Padum. Further this trek leads you to Darcha in Himachal Paradesh via Phuktal and Bardan monasteries.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">Drive to Lamayuru en route visit Liker and Alchi Monastery. Reach Leh by afternoon. Overnight in camp /Guest House.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">Walk down along the stream towards east and then after 20 minutes cross the stream near the Chorten. Walk along another stream towards southward and then east up to the Prikiting La (3700m). After the pass you reach down the river in the Shillakung valley.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">Cross the river and the stream and walk along the road eastward. The trail splits into two, one going to the left leading towards Alchi and Sumda Chanmo. Cross the bridge and walk along the road for sometimes.After crossing another bridge, the trail enters into a Hanupatta gorge, which is very dangerous for ponies. Cross the first bridge and walk ignoring the second bridge, passing through a stupa the gorge turns into a narrow valley. The anupatta is reached after an easy ascent.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">Walk along the stream crossing the tributaries and then stream to the left. Walk up to Sirirla (4850m). Walk along the stream leading to the Photoksar village. The campsite is just before the village across the stream.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">5th Day</p>
                                                        <p class="js-acc-description">Walk down leaving the village and the stream on your left side. On the way comes a few Pulu (harders shelter), after crossing the stream the trail starts going up to the base of Singayla. Pitch the tent after a few minutes walk from the herders shelter.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">6th Day</p>
                                                        <p class="js-acc-description">Start walking up to Singay La (5050m). Walking down the pass the trail goes to your left, which goes to Yulchung Nerags. Take the right trail to the same direction and you are reached Kyukpa la (4430). Leaving Kyukpala again take the right trail to the same direction down to a hamlet. Cross the stream and walk upwardsto Margola (4500m). The Lingshet village is reached after the descent of the pass. The Campsite near the School. The monastery is above the village on the left hand side.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">7th Day</p>
                                                        <p class="js-acc-description">Walk down the stream through the fields and an easy ascent starts after crossing the stream. Reach Hanumala (4800m) from where you can have the view of Lingshet. Walk down along the stream and the Campsite is near the tree.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">8th Day</p>
                                                        <p class="js-acc-description">Cross the stream and walk upward for sometimes leaving the stream to your left. After a curve start walking up to the stream, crossing the bridge, the steep ascent takes you to Parfila (3950m). Walk down to the Zangskar River and the trail leads along the river till Hanamur, which has herder shelters. The camp is near the field and the river. Hanamur has only two houses.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">9th Day</p>
                                                        <p class="js-acc-description">Walk along the Zanskar River passing through Pidmo. Overnight in the camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">10th Day</p>
                                                        <p class="js-acc-description">Walk along the Zanskar river towards Karsha passing through Rinam village. Camp near the stream near the monastery. Visit Karsha monastery and overnight in the tent.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">11th Day</p>
                                                        <p class="js-acc-description">Walk towards Padum crossing the river and Padum is reached after passing through Pibiting village adjacent to Padum. Check in Hotel Ibex and visit Sani and Stakrimo monastery. After the Hot Lunch Overnight in the hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">12th Day</p>
                                                        <p class="js-acc-description">Today is the rest day and you can visit monasteries of Sani and Staskrimo. After the Lunch at your leisure. Overnight in the hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">13th Day</p>
                                                        <p class="js-acc-description">Walk along the rough road along the Lungnak River. Passing through Bardan Gonpa and Mune village. The campsite is near the bridge.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">14th Day</p>
                                                        <p class="js-acc-description">Cross the river and along the river with many ups and downs. And the Pepula is reached near the stream. Campsite is near the teashop.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">15th Day</p>
                                                        <p class="js-acc-description">Cross the stream and walk up to the next bridge near Tantse. Cross the Lungnak river and walk to wards north for Purne, where you have to camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">16th Day</p>
                                                        <p class="js-acc-description">Walk towards Phugtal Monastery and walk back to the Camp at Purne. Overnight in the Camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">17th Day</p>
                                                        <p class="js-acc-description">Walk towards south and cross the same bridge. Walk southward passing through yal. Overnight in the Camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">18th Day</p>
                                                        <p class="js-acc-description">Walk towards Kargyak and the camp site is just across the bridge. Overnight in the camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">19th Day</p>
                                                        <p class="js-acc-description">Again walk along the river and the ascent starts after a few miles walk. Reach Shinkunla (5090m) top and other side of the pass is little bit difficult. Arrive Ramjak passing through Chumik Nakpo. The Campsite is near a Mani wall. Overnight in the Camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">20th Day</p>
                                                        <p class="js-acc-description">Walk towards the same direction along the stream and after sometimes cross the river, and you are reached near a teashop. The campsite is after crossing the bigger stream. Overnight in the Camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">21st Day</p>
                                                        <p class="js-acc-description">Today is the last day with short walk passing through the villages of Chika and Rarik villages. From where the motor able road starts and it takes you to Darcha Sumdo.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/lamayuru-darcha.jpg') }}" class="image activities" alt="Lamayuru Darcha" data-path="images/activities/small/" data-large-images="[&quot;lamayuru-darcha.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Lamayuru Darcha Trek');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; opacity: 0; transform: translate3d(536px, 0px, 0px) scale3d(0.001, 0.001, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item concealed" data-groups="[&quot;treking&quot;]">
                            <div style="opacity: 1; transform: translateX(0px);" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 js-name inline mr5">Sham Valley Trek</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">This trek is very ideal for the novice and less experienced, as it is much easier then the rest of the treks in Ladakh. That is the reason why Sham trek is taged  as Baby trek among teh tourist becuase it is  a milder trek, which is a very convenient trek for people of all age. Sham trek passes through many villages and monasteries deep in mountainous regoins giving more chance to interact and observe the locals lifestyle of Ladakhi villages. You also have the option of staying in a local house during this trek as it traverses through some houses; specially appointed for village Homestay.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">Arrive Delhi from Home: On arrival met by representative and assistance at International Airport. Transfer to hotel in New Delhi.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">Delhi-Leh: Transfer to Domestic Airport to connect flight to Leh. Meeting and assistance on arrival at Leh Airport and 
                                                            transfer to hotel. Rest of the day free for acclimatization.
                                                        </p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">Introductory / acclimatization sightseeing of Shey, Thiksey and Hemis monasteries. Overnight hotel at Leh.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">The trek to Hemis Shukpachan crosses over two passes – Rongtill – La (4000 mts.) and Maptak – La (3800 mts.) Hemis Shukpachan is a large village to be visited. Trek times: 05 hrs.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">5th Day</p>
                                                        <p class="js-acc-description">An easy walk which crosses over a pass Tsermangchan La 4600 mts. Overnight camp at Yangthang near the stream. Trek times: 04 hrs.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">6th Day</p>
                                                        <p class="js-acc-description">Today is a rest day or visits the Rizong Gompa the most peaceful and hidden among the hills. Trek time with visit to Gompa 06 hrs.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">7th Day</p>
                                                        <p class="js-acc-description">Easy walk to Likir village, cross a pass Chagatse – La (4200 mts.) Liker is a big village with a large Monastery belonging to the yellow sect. Overnight at Liker . Trek times: 04 hrs.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">8th Day</p>
                                                        <p class="js-acc-description">A long dry walk today, Rafta is a small place with only three families. Trek times: 07 hrs.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">9th Day</p>
                                                        <p class="js-acc-description">We cross pa pass Mandang – La (4100 mts.) and descend to Umla, a nice camping place. Trek times: 04 hrs.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">10th Day</p>
                                                        <p class="js-acc-description">An easy walk up to Taroo village, we also cross a small pass. Taroo is a big village of 60 families. Overnight in camps at Taroo village.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">11th Day</p>
                                                        <p class="js-acc-description">An easy walk to Phyang village. Phyang is considered one of the important Monastery in Ladakh. From Phyang drive to Leh. Trek times: 05 hrs. Overnight in hotel in Leh.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">12th Day</p>
                                                        <p class="js-acc-description">Day at leisure in Leh. Overnight in hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">13th Day</p>
                                                        <p class="js-acc-description">Transfer to Airport to connect flight to Delhi. Meeting and assistance on arrival at Delhi Airport and transfer to hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">14th Day</p>
                                                        <p class="js-acc-description">On time departure transfer to International airport. Fly Home.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/sham.jpg') }}" class="image activities" alt="Sham Valley" data-path="images/activities/small/" data-large-images="[&quot;sham.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Sham Valley Trek');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item filtered" data-groups="[&quot;treking&quot;]">
                            <div style="opacity: 1; transform: translateX(0px);" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 js-name inline mr5">Hemis to Zangla Trek</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">The trek starts from Hemis monastery (one of the richest monastery in Ladakh). It enters in famous Markha valley and Zangskar via Junglam, which is open only for a month. In summer this route is closed due to water crossing and in winter heavy snowfall.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">Early morning flight from Delhi to Leh, transfer to hotel and rest.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">Morning sightseeing - Shanti Stupa, and Sangkar Gompa; lunch at hotel, afternoon rest.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">Sightseeing around Sham, the lower part of Ladakh, visiting the Likir and Alchi monasteries.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">Early morning Leh to Hemis by jeep, visit the Hemis Gompa and start trekking to Shang Sumdo: cross Martselang bridge, then ascent up valley along the river, crossing it several times before reaching Sang Sumdo.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">5th Day</p>
                                                        <p class="js-acc-description">Trek Shang Sumdo to Lartsa Kongmarula, 4800m. The route follows through a stunning landscape of red rocks along the slope, then along river till Chuskyurmo (sour water),on through gorges of small rivers many of which need to be crossed before camp is made for the night at Lartsa below Kongmarula Pass.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">6th Day</p>
                                                        <p class="js-acc-description">Trek Larsa Kongmarula to Langthang Chu river. Before descending to a high mountain pasture at Nimaling (4700m), we must ascent steeply up to Kongmarula Pass (5150m), offering a beautiful view of the northern face of Kang Yatse Peak (6400m). From Nimaling up, cross a ridge, then descent to a beautiful valley, cross river, on up again, following a rocky slope up to Konga Ngonpo (5090m), then descend along a very steep route before reaching a campsite near Male.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">7th Day</p>
                                                        <p class="js-acc-description">Trek Langthang Chu - Zalung Karpo La (5200m). After crossing a large stream and a moraine, valley divides an hour later. Continuing to our right, the route goes up and down before reaching Zalung Karpo La. Camp on the other side of the pass.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">8th Day</p>
                                                        <p class="js-acc-description">Trek Zalungkarpola to Tilat Sumdo. Start descending from the camp towards the main stream. After an hour arrive at Khamak Sumdo, a valley coming from the north (route directly north leads to Rabrang La, 5000m.) Follow the gorge, crossing a stream several times before reaching Tilat Sumdo along a rocky route.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">9th Day</p>
                                                        <p class="js-acc-description">Trek Tilat Sumdo to a north camp (4450m) of Chhar Chhar La 4950m). Just after Tilat Sumdo camp, cross Khurna river, continue on its right bank, past couple side valleys. Four hours later as the valley narrows, break camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">10th Day</p>
                                                        <p class="js-acc-description">Trek from the north camp Chhar Chhar La to Zangla Sumdo. Follow the narrow gorge, past several narrow side gorges, eventually leaving behind the stream. The route follows gently up to the top of Chharchhar La, 4950m. From top follow stream down to Zangla Sumdo.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">11th Day</p>
                                                        <p class="js-acc-description">Trek Zanglasumdo to Zangla. Continuing down from Zangla Sumdo along the stream, the trail reaches the wide expanse of the Zanskar Valley, with great views of the Zanskar River and the villages of Pishu and Pidmo on the other side of the river.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">12th Day</p>
                                                        <p class="js-acc-description">Sightseeing around Zanskar, visiting Zangla, Stongde and Karsha monasteries.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">13th Day</p>
                                                        <p class="js-acc-description">Start back to Leh by jeep; overnight in Mulbek.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">14th Day</p>
                                                        <p class="js-acc-description">Return to Leh.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">15th Day</p>
                                                        <p class="js-acc-description">Full day of rest in Leh.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">16th Day</p>
                                                        <p class="js-acc-description">Return flight to Delhi.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/hemis-zangla.jpg') }}" class="image activities" alt="Hemis Zangla" data-path="images/activities/small/" data-large-images="[&quot;hemis-zangla.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Hemis Zangla Trek');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(268px, 0px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item filtered" data-groups="[&quot;treking&quot;]">
                            <div style="opacity: 1; transform: translateX(0px);" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 js-name inline mr5">Lamayuru to Padum Trek</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">The most beautiful and longest trek for around 20-21 days starts from Lamayuru, where the 10th Century's monastery is located, around 125 Kms. from Leh Town. You can also do this trek in 10 days finishing at Padum in Zangskar Valley. The trek starts from Lamayuru and it enters Zangskar Valley passing through Wanla and the most remote villages of Lingshed. On the 9th and 10th day, one reaches Hanamur or Pishu via Karsha monastery to Padum (the headquarter of Zangskar valley). After a day rest at Padum you can proceed towards Darcha via Phuktal monastery and high passes (Shikun La 5,100 m). The trek finishes at Darcha village in Lahul & Spiti district of Himachal Pradesh around 145 kms. from Manali.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">Arrive Delhi, where you will be met and transfered to your hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">Delhi - Leh (3500m) by plane.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">A whole day at leisure in Leh. You can visit some of the most famous and oldest monasteries of Ladakh (15th and 17th century), Thikse, Shey and Hemis and take a walk to the colorful bazaar. Overnight at Hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">Leh - Kargil (3700m) by bus.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">5th Day</p>
                                                        <p class="js-acc-description">Kargil - Padum (3600m) by bus.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">6th Day</p>
                                                        <p class="js-acc-description">A pleasant walk through fields. On the way we will visit Pepiting monastery and the Karsha Gompa--one of the most important in Zanskar and dating back to the 15th century. We have beautiful panoramic vistas of the full Himalayan range.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">7th Day</p>
                                                        <p class="js-acc-description">We progress along the Zanskar river.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">8th Day</p>
                                                        <p class="js-acc-description">An easy-going walk along the right bank of the river takes us to Rinam village. We continue to the tiny hamlet of Hanumil.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">9th Day</p>
                                                        <p class="js-acc-description">Hanumil - Purfi La (3950m) - Snertse (3850m) in 6h.Up and down over a steep path.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">10th Day</p>
                                                        <p class="js-acc-description">After a steep climb we reach the Purfi La pass, from where the panorama towards the Ladakhi and Zanskari ranges is quite impressive. Visit of Lingshet monastery.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">11th Day</p>
                                                        <p class="js-acc-description">We start a long and gradual ascent to the Netuke La pass (4280m), where we have a wonderful view towards the Nierag valley. The trail then descends shortly to reach Skimpata and Gongma villages, then climbs steeply to reach the second pass, Khyupa La (4300m).</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">12th Day</p>
                                                        <p class="js-acc-description">An amazing spectacle of hanging icefalls. We descend towards the Photang river and progress through barley fields.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">13th Day</p>
                                                        <p class="js-acc-description">Photang valley turns into a gorge labyrinth, which forces us to make a detour via Sirsir La pass. Three shortens mark Hanupatta and its giant hundred-year-old cedar, flanked by colorful prayer flags.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">14th Day</p>
                                                        <p class="js-acc-description">We head down towards the Photang valley and climb up to the Panjila pass(3410m). We finally descend to Wanla and visit its tiny monastery.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">15th Day</p>
                                                        <p class="js-acc-description">Visit of the monastery at Lamayuru, which is the biggest in western Ladakh and was built in the 16th century on the site of a much older temple. The gompa is very well kept and famous for its many colorful wall paintings.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">16th Day</p>
                                                        <p class="js-acc-description">Lamayuru - Leh (3500m) by bus.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">17th Day</p>
                                                        <p class="js-acc-description">Leh – Delhi by plane.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">18th Day</p>
                                                        <p class="js-acc-description">At leisure in Delhi. Safety day for your international flight.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">19th Day</p>
                                                        <p class="js-acc-description">Transfer to airport and fly back home</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/lamayuru-padum.jpg') }}" class="image activities" alt="Lamayuru Padum" data-path="images/activities/small/" data-large-images="[&quot;lamayuru-padum.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Lamayuru Padum Trek');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; opacity: 0; transform: translate3d(0px, 177px, 0px) scale3d(0.001, 0.001, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item concealed" data-groups="[&quot;treking&quot;]">
                            <div style="opacity: 1; transform: translateX(0px);" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 js-name inline mr5">Markha Valley Trek</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">Markha Valley trek has been, one of the most sought after holiday trek among whole range of trekkers from expert to naive, partly because it lies adjacent to the most favorite Valley of Ladakh and partly because at the culimation point where the valley ends lies the famous and the massive mountain Kangyatse with snow-capped  peak touching the sky with glory. The beautiful Valley of Markha is overshadowed by kangyatse and other groups of Peaks in the range.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">Delhi To Leh Arrival Leh and welcome to the clients in a traditional way and transfer to the hotel, day free for acclimatization, overnight at hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">Leh And Surroundings Sightseeing, visit to the most popular monasteries and palaces, namely Shay, Thiksay and Hemis. Overnight at hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">Leh - Lamayuru-Alchi - Leh Drive to the western part of Leh, visit the 11th century monastery Lamayuru and Alchi, overnight at hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">Leh To Chilling Drive by Toyota Qualis/ Sumo & from Chilling Trek begins for Skiu, Overnight at camp (5-6hrs walk).</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">5th Day</p>
                                                        <p class="js-acc-description">Skiu To Markha Trek (6-7hrs Walk). Overnight at camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">6th Day</p>
                                                        <p class="js-acc-description">Markha To Thochungtse Trek (6-7hrs walk) Overnight at camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">7th Day</p>
                                                        <p class="js-acc-description">Thochungtse To Nimaling Trek (3-4hrs walk) Overnight at camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">8th Day</p>
                                                        <p class="js-acc-description">Nimaling To Shang Sumdo Trek (8-9hrs) Descending Overnight at camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">9th Day</p>
                                                        <p class="js-acc-description">Shang Sumdo To Leh Our Vehicle will pick you up from last point of the trek and drive back to Leh and transfer to the hotel, afternoon visit to the Royal Palace of Ladakh, Japanese temple and Sankar monastery, evening free for shopping. Overnight at hotel.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/markha-valley.jpg') }}" class="image activities" alt="Markha Valley" data-path="images/activities/small/" data-large-images="[&quot;markha-valley.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Markha Valley Trek');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; opacity: 0; transform: translate3d(268px, 177px, 0px) scale3d(0.001, 0.001, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item concealed" data-groups="[&quot;treking&quot;]">
                            <div style="opacity: 1; transform: translateX(0px);" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 inline mr5">Darcha to Padum Trek</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">Ladakh is called as " Little Tibet ", an ancient Kingdom enclosed by the chains of the Karakoram , the Himalayas and crossed by the Indus River. It is also known as the country of Moonland, its stark Landscape, and its bare-rocked reserts. Around the every village we can see the wall of stones (Mani) which are engrave with prayer. It is rich of numerous Monastery , decorated with historic arts of the Tibetan religion which represents the daily life's of Ladakihis. In several months Villages are completely isolated by the snow every year.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">Transfer to railway station for supper fast train to Chandigarh.-3 hours . Arrive Chandigarh, meet upon arrival and drive straight to reach Manali (1920M) by covering 338 kms. Arrive Manali and check into hotel for overnight stay.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">Morning at leisure. Afternoon proceed for half day city tour. Overnight stay in hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">Morning after breakfast drive 140 kms to reach Darcha (3400M) via Rohtang pass. Spend some time at the pass to enjoy the beauty around. Continue to reach Darcha by late afternoon. Overnight stay in tents.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">Morning after breakfast start trekking to reach Chalang Tokpo (3580M) in about 5-6 hours. This Day's trek is eassy and Gradual all the way. Overnight stay in tents.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">5th Day</p>
                                                        <p class="js-acc-description">Morning after breakfast start an easy trekking to Zanskar Sumdo (3750M). Proceed to Ramjak., total trekking time is approx. 7-8 hours. Overnight stay in tents.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">6th Day</p>
                                                        <p class="js-acc-description">Morning after breakfast start trekking to reach Chumikanakpo (4060 in about 5-6 hours. Climb steeply immediately after the Campsite and then climb gradually upto Chumikanakpo. Arrive and overnight stay in tents.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">7th Day</p>
                                                        <p class="js-acc-description">Morning after an early breakfast start trekking 16 Kms to reach Lakong (4100M) by crossing Shingo La 5100m). The climb to the pass is not difficult but climbing down is quite steep through the Glacier. The Day is quite long and Tiring, 7-8 hours approx. Arrive and overnight stay in tents.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">8th Day</p>
                                                        <p class="js-acc-description">Morning after breakfast start trekking to reach Kurgiak (4060 M) by covering approx. 14 Kms, 6-7 hours approx. Now you will find the diference in the features of the mountains as you are in Zanskar, Arrive and overnight in stay tents.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">9th Day</p>
                                                        <p class="js-acc-description">Morning after breakfast start trekking to reach Purne (3745M) trek for about 5-6 hours. Arrive and overnight stay in tents.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">10th Day</p>
                                                        <p class="js-acc-description">Morning after breakfast start trekking for an excursion to Phutkal Gompa which in one the most impressive Gompas in Ladakh by covering approx 14 kms. Return back to purne and overnight stay in tents.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">11th Day</p>
                                                        <p class="js-acc-description">Morning after breakfast, cross small Canyons of Pudding stones, which leads to Char village and passing Hanumi and Surle villages. Arrive at Ichar, 5-6 hours approx. Overnight stay in tents.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">12th Day</p>
                                                        <p class="js-acc-description">Morning after breakfast start trekking to reach Mone (3650 M) 5-6 hours approx .Arrive and overnight stay in tents.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">13th Day</p>
                                                        <p class="js-acc-description">Morning after breakfast start trekking to reach Padum (3560 M), 5 - 6 hrs approx. Padum is the old capital of Zanskar. Arrive and overnight stay in tents.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">14th Day</p>
                                                        <p class="js-acc-description">Morning after breakfast drive to reach Ringdom Gompa (4100 M) by covering approx. 140 kms. Upon arrival visit Ringdom Gompa. Overnight stay in tents.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">15th Day</p>
                                                        <p class="js-acc-description">Morning after breakfast drive to reach Kargil (3700 M) by covering approx. 160 kms. Arrive and check into hotel for overnight stay.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">16th Day</p>
                                                        <p class="js-acc-description">Morning after breakfast drive to reach Alchi by covering 174 kms in 6 hrs approx. En-route visit Lamayuru Monastery. Arrive and check into Guest house for overnight stay.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">17th Day</p>
                                                        <p class="js-acc-description">Morning after breakfast visit Alchi Gompa. After lunch. Proceed to Leh (65 kms) en-route visit Likir Gompa. Arrive Leh in the evening for overnight stay in hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">18th Day</p>
                                                        <p class="js-acc-description">Morning after breakfasts proceed for sightseeing of Leh. Visit Leh Palace, Leh Gompa and bazaar. Pm: Visit Spituk and Phyang Gompas. Overnight stay in hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">19th Day</p>
                                                        <p class="js-acc-description">After breakfast leave for full Day excursion to Shey, Tiksey and Hemis Gompas. Return to hotel in the afternoon. Even free for shopping etc. Overnight stay in hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">20th Day</p>
                                                        <p class="js-acc-description">Transfer to Domestic airport in time to board flight for Delhi.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/darcha-padum.jpg') }}" class="image activities" alt="Darcha Padum" data-path="images/activities/small/" data-large-images="[&quot;darcha-padum.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Darcha Padum Trek');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(536px, 0px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item filtered" data-groups="[&quot;treking&quot;]">
                            <div style="opacity: 1; transform: translateX(0px);" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 js-name inline mr5">Nubra Valley Trek</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">The Nubra Valley is a tributary of the Shyok river which flows parallel to the Indus. Due to  the  lower altitude the valley has a mild climate and thus the vegetation is  richer. This moderate  trek is less frequent trekking route  in Ladakh, Trail  goes over several passes and isolated villages from  valley of Indus  to Nubra the part of  old silk route. Buddhist monasteries flourished in the valley. While trekking   climate is tougher due to  higher  altitude and dryness of the  landscape. Highest point during the trek is Digar la (5360 m.) and by road is  Khardungla (5600 mtrs). One or two night  stay in local house.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">Upon arrival meet to our representative, transfer to near by hotel for rest of the night.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">Early in the morning take flight to Leh over the panoramic view of Indian Himalaya, on arrival at Leh airport, meet to our local staff, drive to hotel, rest of the time free for accalimitization. Overnight at hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">After breakfast commence full day local Monasteries visit, Hemis, Thiksey, Shey, & Stok Palace, Rest of the time walk in the local market, overnight at hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">After breakfast short drive till the Sabu village, later commence short the starting point of trek, 22 km from Leh. Visit Sabu village and continue by easy trek to Sabu Phu. afternoon, discover the area,. Overnight at tent.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">5th Day</p>
                                                        <p class="js-acc-description">Early start the easy and beautiful day, walking along a beautiful landscape. On arrival at camping site set the tent overnight at camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">6th Day</p>
                                                        <p class="js-acc-description">Steep and gradual climbing to the pass, one can have a panoramic view of the Shyok and Leh valley, crossing the Digar La and descending in zigzag to the Digar. Ovrnight in camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">7th Day</p>
                                                        <p class="js-acc-description">An early breakfast commence easy walk to Agyam, situated in the Shyok valley, on the bank of Shyok river. Overnight in camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">8th Day</p>
                                                        <p class="js-acc-description">The trail goes through, on the bank of the Shyok river to the Hotong. Easy and beautiful walk. Overnight in camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">9th Day</p>
                                                        <p class="js-acc-description">After breakfast commence the trail to next destination. Overnight in camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">10th Day</p>
                                                        <p class="js-acc-description">End of the trek in Shyok valley. Visit the Khalsar village, where you can join the road to Leh. Jeeps are waiting to pick you to visit all the Nubra valley, which will introduce you to its treasures of nature, culture and history. Overnight in camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">11th Day</p>
                                                        <p class="js-acc-description">We stop at Diskit to explore the town  and monastery,  further drive to Hunder a beautiful village beside  the  Shyok river,   One  can have 6 kms walk on the sand of  Shyok  river to Hunder,  night in camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">12th Day</p>
                                                        <p class="js-acc-description">Back to  Sumour, same way back in Shyok valley,  take diversion just before  the  Khalsar to Nubra valley,   stop over  in Tirith  a  centre of handicraft, wool  and jewelry, further visit to  Panamik  where in olden time  Caravan’s of  silk  route   use  to take  halt, by evening  visit a 250 years old Samour gompa,  Overnight in  camp</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">13th Day</p>
                                                        <p class="js-acc-description">Drive early in the morning,   Road  goes over the world highest motor able road Khardung-la (5620m), afternoon  reach at Leh, check in hotel for overnight.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">14th Day</p>
                                                        <p class="js-acc-description">After breakfast, commence drive to Phay form we start the Rafting in the Indus river, 3hrs rafting till the Nimm, confluence Indus and Zankar river, finish the rafting take lunch further drive to Basgo village, check in local house, in the evening enjoy the local food, folk dance and local wine Chhang, Overngiht at local house.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">15th Day</p>
                                                        <p class="js-acc-description">Morning commence drive to Alchi, visit the 11th century monastery, drive back to Leh, en route visit Likir Monastery. On arrival at Leh check in hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">16th Day</p>
                                                        <p class="js-acc-description">Early morning take flight to Delhi, upon arrival meet to assistance straight drive to Agra, visit Taj Mahal (Every Friday closed) Overnight at hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">17th Day</p>
                                                        <p class="js-acc-description">Morning, visit Agra Fort and Fatehpur Sikri, drive back to Delhi (4 hrs drive). Farewell dinner, later transfer to international airport take onward flight.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/nubra-valley.jpg') }}" class="image activities" alt="Nubra Valley" data-path="images/activities/small/" data-large-images="[&quot;nubra-valley.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Nubra Valley Trek');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; opacity: 0; transform: translate3d(804px, 177px, 0px) scale3d(0.001, 0.001, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item concealed" data-groups="[&quot;treking&quot;]">
                            <div style="opacity: 1; transform: translateX(0px);" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 js-name inline mr5">Winter Chadar Trek</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">Chadar means blanket though this trail doesn’t offer the warmth that a blanket does. This once in a lifetime trail on ice over the frozen Zanskar river has emerged as a must do trek for all avid adventurers. The route traversing altitudes of nothing less than 14,000ft / 4500 metres, goes over the frozen Zanskar river traversing deep canyons and gorges otherwise inaccessible during the summer months. And, under the solemn gaze of greyish - white mountain peaks temperatures can plummet to –anywhere between -25 to -30º c. Our halting stages for camping at night are often caves in the hillsides. The altitudes we traverse are all above 4500 metres / 14,000 feet. This is still a traditional winter route used by the Zanskari folk to travel to Leh with no other options.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">Arrive Leh, Jammu and Kashmir, 3200 meters. Remainder of day is spent acclimating to the altitude.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">Leh to Shey, Thikse, and Hemis. Sightseeing of Shey Gompa, Thikse Gompa, and Hemis Gompa. Return to Leh for overnight stay.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">Leh to Chilling (3200 meters). Drive to Chilling, meet the staff and overnight in a village home.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">Chilling to Zaribago (3250 meters). First day of walking, and experiencing the frozen Zanskar River. Walking time 5 hours. Overnight in camps or caves depending on conditions.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">5th Day</p>
                                                        <p class="js-acc-description">Zaribago to Deepyokma (3300 meters). Continue trek to Deepyokma village. Walking time 5 hours. Overnight in camps or caves depending on conditions.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">6th Day</p>
                                                        <p class="js-acc-description">Deepyokma to Nyrak Pulu (3400 meters). Continue trek through maze of canyons passing through frozen icefalls to Nyrak Pulu. Walking time 6 hours. Overnight in camps or caves depending on conditions.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">7th Day</p>
                                                        <p class="js-acc-description">Nyrak Pulu to Lingshed (3800 meters). Trek continues to Lingshed valley. Monastery visit before overnight stay at local home or tents. Walking time 4 hours.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">8th Day</p>
                                                        <p class="js-acc-description">Rest Day, Lingshed. Spend an entire day resting in Lingshed, one of the most remote villages in Ladakh. Visit monastery, school for monks and explore the village.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">9th Day</p>
                                                        <p class="js-acc-description">Lingshed to Nyrak Pulu (3400 meters). Begin trek back, walk to Nyrak Pulu. Walking time 5 hours. Overnight in camps or caves depending on conditions.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">10th Day</p>
                                                        <p class="js-acc-description">Nyrak Pulu to Tsomo paldar (3300 meters). Continue trek back to Leh. Walking time 8 hours. Overnight in camps or caves depending on conditions.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">11th Day</p>
                                                        <p class="js-acc-description">Tsomo paldar to Tilatdo (3200 meters). Walk to Tilatdo. Walking time 8 hours. Overnight in caves.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">12th Day</p>
                                                        <p class="js-acc-description">Tilatdo to Leh via Chilling (3500 meters). Finish trek to Chilling. Board a private vehicle for drive back to Leh. Walking time 4 hours. Stay overnight at hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">13th Day</p>
                                                        <p class="js-acc-description">Leh. The day is reserved for any unexpected delay in the itinerary. Stay overnight at hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">14th Day</p>
                                                        <p class="js-acc-description">Depart Leh.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/winter-chadar.jpg') }}" class="image activities" alt="Winter Chadar" data-path="images/activities/small/" data-large-images="[&quot;winter-chadar.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Winter Chadar Trek');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(804px, 0px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item filtered" data-groups="[&quot;treking&quot;]">
                            <div style="opacity: 1; transform: translateX(0px);" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 js-name inline mr5">Spituk to Stok Trek</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">Spituk Stok trek, a relatively short, accessible trek with beautiful view and moderate difficulty, this trek is definitely the one for you to explore. Rumbuk is a Beautiful village which lies in the route of Stok Kangri. As one approaches Rumbak fields the valley suddenly opens up with snowcapped mountains in the background which is a great place to view Ladakh flora and fauna. Some of the prized sightings would be Blue sheep, the Great Tibetan sheep or the Argali, various mountain and migratory birds, high altitude flora and occasionally a Tibetan Wolf or a Snow leopard if extremely lucky.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">On arrival meeting and assistance at the Airport followed by the traditional welcome by garlanding and then escorted transfer to your hotel. Rest of the day is leisure. Overnight at hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">Take the morning flight for Leh. Check into the guest house and relax the whole day. This is necessary for getting acclimatised. Overnight at the guest house.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">On this day you will go a sightseeing trip to some ancient monasteries in this area. Shey Gompa is about 15 kms from Leh. It used to be the summer palace of the kings of Ladakh. There are lots of Stupas and Gompas built around the palace. Shey palace was built by Deldan Namgyal in the beginning of 17'Th century AD. Main attraction in Shey is the 12m Shakyamuni Buddha statue inside the Dresthang Gompa. Thiksey Gompa, close to Shey is about 17 kms from Leh. The monastery is considered to be one of the most beautiful in Ladakh and belongs to the Gelukspa order.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">Our walk begins along an old jeep road on very dry and exposed land, so water and protection against the sun are important! After 3 hours the landscape becomes greener as we go into the Zingchen Valley, where the Rumbak River flows into the Indus. Our camp is in the small village of Zingchen, which means 'big field', where there are just two houses. The rest of the day will be spent enjoying the view and maybe even a dip in the river.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">Today we enter Hemis National Park, home to the famous Snow Leopard, Blue Sheep, Ladakhi Urial (a type of goat), great Tibetan sheep (Arghali), red fox, Tibetan wolf, wild dog (dhole), Lynx, marmot and mountain hare. We start to climb gradually up to village of Rumbak.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">In the morning after breakfast you will ascend the 4,900-m. Stok Pass also known as the Namlung La. If you are fit and have camped at the plateau just under the pass as all do, you should have no problem climbing up to the pass. One can climb steadily and made it in less than 1.5 hrs.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">Today is an easy day going downhill all the way. Follow the stream on its left bank as it heads north. The path is broad and easy. You will find willows and wild roses growing on islands in the middle of the stream which grows quite wide as you approach Stok. Visit the Stok Palace, residence of the king of Ladakh. We steadily descend through meadows to Thachutse and cross the Nimaling river. The trail follows the Markha river now, and will do so for the next few days.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">Transfer to the airport for the spectacular flight across the main chain of the Himalaya to Delhi. Upon arrival at Delhi, transfer to domestic airport to catch the flight for onward destination.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/spituk-stok.jpg') }}" class="image activities" alt="Spituk Stok" data-path="images/activities/small/" data-large-images="[&quot;spituk-stok.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Spituk Stok Trek');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; opacity: 0; transform: translate3d(0px, 354px, 0px) scale3d(0.001, 0.001, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item concealed" data-groups="[&quot;expedition&quot;]">
                            <div style="opacity: 0;" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 js-name inline mr5">Stok Kangri Expedition</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">Stok Kangri is at an amazing height of 20, 080 ft (6, 153 m) and is the highest mountain in the Stok range of Himalayas. It is 24 kms from the district of Leh. Even though the trek is the most glamorous one, it is by no means an easy trek. Only very few people who attempt, succeed to reach the Stok Kangri Peak. People from all over the world come here to endeavour this amazing trek to the summit. The only reason this trek is considered a difficult one is due to the height of the destination, which is almost 70% of the Mt. Everest. And by no likelihoodt you can finish the trek in 5 days. Many people suggest completing the journey in five days to reduce the cost. But this might be dangerous as your body needs proper acclimatization.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">Early morning transfer to Domestic Airport to connect the flight for Leh. Upon arrival at LehAirport our representative would assist you at the Airport and transfer to Hotel. Check into the hotel. Full day relax at the hotel for the acclimatisation.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">Drive to Stok, Trek up to Manikarmo which will take up to 3-4 hoursand camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">Trek up to Base Camp which will take up to 5-6 hours.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">Acclimatization day around Base Camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">5th Day</p>
                                                        <p class="js-acc-description">Reserved for establishing Advanced Base Camp and summit attempts.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">6th Day</p>
                                                        <p class="js-acc-description">Return to Manikarmo.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">7th Day</p>
                                                        <p class="js-acc-description">Return to Stok and drive back to Leh.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">8th Day</p>
                                                        <p class="js-acc-description">In the morning transfer to the airport to catch flight for Delhi. On arrival at Delhi take a half day guided sightseeing. In the evening transfer to International airport to catch onwards flight.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/stok-kangri.jpg') }}" class="image activities" alt="Stok Kangri" data-path="images/activities/small/" data-large-images="[&quot;stok-kangri.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Stok Kangri Expedition');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; opacity: 0; transform: translate3d(268px, 354px, 0px) scale3d(0.001, 0.001, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item concealed" data-groups="[&quot;expedition&quot;]">
                            <div style="opacity: 0;" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 js-name inline mr5">Kangyatse Expedition</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">This climb offers you an opportunity to reach a height of 6200m without technical skills, and 6400 m with basic technical skills. The climb on Kangyatse is challenging and interesting, ideal for someone in quest of his/her first Himalayan summit. If you choose to scale the primary summit (6400 m), you will need to be experienced and well prepared, as it requires a traverse of a very difficult and technically challenging ridge.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">Early morning flight to Leh and rest of the day for acclimatized.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">Today we are visiting Shey Palace overlooking a small lake, the palace and fortification of Shey was the site of one of the former capitals of Ladakh. In the 10th century the first ruler of western Tibet, Nyima-Gon, laid the foundation of the first dynasty of Ladakh. Later we visit Theksey Monastery is most imposing structure providing a panoramic view of the green Indus valley from its vantage point atop a hill. Lastly we explore Hemis the most famous monastery in Ladakh the private monastery of the royal house and built over a period of 40 years (1602-42). Today Hemis is well known for its festival.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">After breakfast we are heading towards Stok the present residence of the former royal family of Ladakh. The palace museum displays the collections of the royal family. Later we undertake short hike up to the gorges leading into the Stok Range an invaluable day to assist with our acclimatization before we commence our trek.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">After breakfast we have short drive up to village Spituk along the Indus River. In the beginning we walk along the Indus River and then we turn left willow-line gorge.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">5th Day</p>
                                                        <p class="js-acc-description">We follow the same spectacular gorge and this is the home of Snow leopards. One the way we reach parachute tent tea house run by women groups of Rumbak village. Later we are heading towards another valley goes to Kandala base camp 4400 meters.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">6th Day</p>
                                                        <p class="js-acc-description">Today we have ascending with zigzag trail up the pass Kandala 4900 meters. When we are on the top of the pass we have a nice view of Zangskar and Ladakh Range including peak Stok-kangri 6150 meters. Later we are descending down in the valley were our camp just above village Shingo 4150 meters.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">7th Day</p>
                                                        <p class="js-acc-description">After the breakfast we follow down in the narrow gorge down to the Village Sku 3400 meters. Later we follow up to the Markha valley. In village Sku here we see again see few parachute tented tea house run by local people. During the day we passes village like Sku Gongma and Pentse. Later we camp in Sara.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">8th Day</p>
                                                        <p class="js-acc-description">We follow the same Markha valley river and on the way we pass village Chalag. Markha 3850 meters is the biggest village in this valley. After that we are heading to Hankar village where we camp. On the way we have a glimpse of the peak known as Kangyatse 6200 meters were we are climbing.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">9th Day</p>
                                                        <p class="js-acc-description">Hangkar is the Last village in the Markha valley and where we see very old ruins Hangkar castle an early CHO period before 10th century. From that point we have a nice view of Kangyatse 6400 meters. After the Tho-chung-tse 4100 meters we have decent up to the small seasonal lake known as "Tsegu" a good place for lunch with view of Kangyatse. From the lake we walk up to the Kangyatse Base Camps.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">10th Day</p>
                                                        <p class="js-acc-description">Today we are doing Kangyatse Expeditions.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">11th Day</p>
                                                        <p class="js-acc-description">Reserve day</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">12th Day</p>
                                                        <p class="js-acc-description">We are heading towards the Kongmaru-la 5200 meters pass. After the pass we have step descending and one the way we have colorful rocks along the trail. Later we pass Chuskurmo (sulfur sore spring water) where local people coming with (Amchi) local doctor for cure. The Shangsumdo 3760 meters is our last camp side during the tour.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">13th Day</p>
                                                        <p class="js-acc-description">After the breakfast we drive to Leh and afternoon is free to explore Leh town.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">14th Day</p>
                                                        <p class="js-acc-description">Morning flight back to Delhi and trip conclude.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/kangyatse.jpg') }}" class="image activities" alt="kangyatse" data-path="images/activities/small/" data-large-images="[&quot;kangyatse.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Kangyatse Expedition');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; opacity: 0; transform: translate3d(536px, 354px, 0px) scale3d(0.001, 0.001, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item concealed" data-groups="[&quot;expedition&quot;]">
                            <div style="opacity: 0;" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="text vam fz5 cw fw3 js-name inline mr5">
                                            <h3 class="text vam fz5 cw fw3 inline mr5">Kangla Expedition</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">Kangla pass trek begins in the Miyar valley of Himachal Pradesh and connects the Zanskar valley in Ladakh after negotiating the Kang la pass. It is a remote and challenging trek. The trek begins from Lahaul in Himachal Pradesh and ends in the Zanskar Range after negotiating the Kang La Pass (5450m) and a long glacier. The Miyar Nala in Lahaul that the trek covers, is famous for its wild flowers in June and July.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">Arrive Delhi. O/N Hotel</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">Delhi Chandigarh by Train. Chandigarh to Manali by road. O/N Hotel</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">Manali – Udaipur by road Duration: 10 hours. O/N Guest House/ Camp</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">Udaipur – Urgos (3250m) by road Duration: 2 hours. O/N Camp</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">5th Day</p>
                                                        <p class="js-acc-description">Urgos – Tharang (3700m)  Duration: 5 hours. O/N Camp</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">6th Day</p>
                                                        <p class="js-acc-description">Tharang – Gumbah Nala (3900m) Duration: 6 hours. O/N Camp</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">7th Day</p>
                                                        <p class="js-acc-description">Gumbah Nala – Base Camp of Miyar Glacier (4200m) Duration: 6 hours. O/N Camp</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">8th Day</p>
                                                        <p class="js-acc-description">Base Camp of Miyar Glacier – Base Camp of Kang La (4600m) Duration: 8 hours. O/N Camp</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">9th Day</p>
                                                        <p class="js-acc-description">Base Camp of Kang La – Kang La (5450m) Duration: 8 hours. O/N Camp</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">10th Day</p>
                                                        <p class="js-acc-description">Camp after the Pass – Burdun Duration: 5 hours. O/N Camp</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">11th Day</p>
                                                        <p class="js-acc-description">Burdun – Padam Duration: 3 hours. O/N Guest House/camp</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">12th Day</p>
                                                        <p class="js-acc-description">Padum – Kargil by road Duration: 5 hours. O/N Hotel/Guest House</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">13th Day</p>
                                                        <p class="js-acc-description">Kargil – Leh by road Duration: 10 hours. O/N Hotel/ Guest House</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">14th Day</p>
                                                        <p class="js-acc-description">Fly Delhi. End of services</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/kangla.jpg') }}" class="image activities" alt="Kangla" data-path="images/activities/small/" data-large-images="[&quot;kangla.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Kangla Expedition');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; opacity: 0; transform: translate3d(804px, 354px, 0px) scale3d(0.001, 0.001, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item concealed" data-groups="[&quot;safari&quot;]">
                            <div style="opacity: 0;" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="text vam fz5 cw fw3 js-name inline mr5">
                                            <h3 class="text vam fz5 cw fw3 inline mr5">Pangong Jeep Safari</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">Pangong Lake is the highest lake in Ladakh region and is famous for colorful stones, fossils and wild flowers in summer. Trip to Pangog Tso is very rewarding and gives you a life long memory. You will drive through the villages of pastoral community who have retained their nomadic glory in spite of harsh weather.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">Arrival in Delhi. Meet the guide at the airport and transfer to hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">Flight to Leh.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">Sightseeing of Leh's monasteries and palaces.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">Drive from Lhe to Durbuk (110km) and en route visit Chemra and Taktak Gompas. Overnight camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">5th Day</p>
                                                        <p class="js-acc-description">Drive to Lukung, by pass village Tantse (100km)</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">6th Day</p>
                                                        <p class="js-acc-description">Drive to Pangong Tso (60km) via Spangmik village at the bank of Pangong Tso. Overnight camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">7th Day</p>
                                                        <p class="js-acc-description">Explore the area, drive and trek along the lake.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">8th Day</p>
                                                        <p class="js-acc-description">Drive back to Tangtse by crossing over a pass. You will have beautiful opportunity of photography. Overnight camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">9th Day</p>
                                                        <p class="js-acc-description">Drive to Chang La. En route visit Durbuk Gompa.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">10th Day</p>
                                                        <p class="js-acc-description">Drive back to Leh via Hemis monastery.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">11th Day</p>
                                                        <p class="js-acc-description">Flight to Delhi. Transfer to hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">12th Day</p>
                                                        <p class="js-acc-description">Departure</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/pangong-safari.jpg') }}" class="image activities" alt="Pangong Safari" data-path="images/activities/small/" data-large-images="[&quot;pangong-safari.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Pangong Safari');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(1072px, 0px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item filtered" data-groups="[&quot;safari&quot;]">
                            <div style="opacity: 1; transform: translateX(0px);" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 js-name inline mr5">Ladakh Jeep Safari</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">Several Exotic places in Ladakh are far off and inaccessible normally and can only be explored by a Jeep/ 4 x 4 - wheel drive. You can thus explore the the culture, tradition, and wildlife in these places, which are must see for a Visitor to Ladakh. Tourists who do not like the trek, yet are interested to explore the Culture, Tradition, Wilderness can visit adventurous places in Ladakh by a Jeep -Safari. They can range from an ultimate test for your 4x4-wheel drive or a gentle drive through some of the most spectacular landscapes on our planet. Tourists interested in various culture, tradition, and wildlife have places, which are must see.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">Met upon arrival at the Leh airport and transfer to hotel. Day free at rest for high altitude acclamatisation. Overnight stay at the hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">Morning proceed to visit the most important monasteries of central Ladakh along river Indus. VISIT: SHEY GOMPA (It was the ancient capital of Ladakh. The monastery has a huge copper gilted image of Sakayamuni Buddha and a large silver lamp burning infront of the statue), THIKSAY GOMPA (one of the most pictresquely lacted Gompa, the monastery is actually a complex of buildings on a crag rising in tier upon tier above the village.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">Early morning drive in jeeps to Hunder. After 39 kms from Leh cross over the highest motorable road in the world KHARDUNG-LA (5,578 MT). The view from the top is simply amazing. Enter Nubra Valley situated along river Shayok. The valley is covered with dense thickets of seabuckthorn - a throny schurb which the villagers use for fuel and fencing their fields. Enroute drive past the capital Diskit. Drive another 9 kms further and arrive at the small village of Hunder (3,048 mt). Overnight stay in tents.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">Morning visit Chamba monastery of Hunder and then start the Safari on the shabby double-humped Bactrian camels, which in olden days were the main mode of transport on the Ladakh-Yarkhand (Turkmanistan) trade. The Safari goes along the soft white sandy deserts with rolling sand dunes. Arrival at the capital of Nubra i.e. Diskit. Afternoon proceed to explore the DISKIT VILLAGE. Being the main town of Nubra, it has a small market bustling with activity. Also visit the Gompa, situated on a rocky spur above the village providing a commanding view of the valley.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">5th Day</p>
                                                        <p class="js-acc-description">Morning drive to Tegger village (3,146 mt). Upon arrival visit Samstanling village off the main road and is one of the most charming villages of Nubra. Visit Samstanling Gompa. Afternoon start Safari to reach Pinchimic.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">6th Day</p>
                                                        <p class="js-acc-description">Morning start the last leg of Safari to Panamic. Enroute visit a beautiful lake chucked between two small hills. Checkin at the camps upon arrival. Afternoon explore PANAMIC VILLAGE: During the trade between Central Asia and Ladakh, Panamic was the lastmajor settlement before the caravans cross the Karakoram range. Today, Panamic is a sleepy village, with its people quitly working in their fields. Visit the village thermal HOT SPRINGS locally reputed to have therapeutic qualities. Overnight in tents.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">7th Day</p>
                                                        <p class="js-acc-description">Morning visit to ENSA GOMPA across the river clinging precariously to the mountain sorrounded by few trees. Return back and drive to Leh. Upon arrival in the evening checkin at the hotel. Overnight stay at hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">8th Day</p>
                                                        <p class="js-acc-description">Day free at leisure to explore the market. Evening proceed for Folk dances of Ladakh programme. Overnight stay at the hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">9th Day</p>
                                                        <p class="js-acc-description">Morning transfer to airport to board flight for Delhi.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/ladakh-safari.jpg') }}" class="image activities" alt="Ladakh Safari" data-path="images/activities/small/" data-large-images="[&quot;ladakh-safari.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Ladakh Safari');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(1072px, 0px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item filtered" data-groups="[&quot;safari&quot;]">
                            <div style="opacity: 1; transform: translateX(0px);" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 inline mr5">Ladakh & Zanskar</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">Passing up the Suru Valley through Pensi la (which is open 3-4 months JULY-OCTOBER), one arrives in Zanskar. Over PensiLa is the 5,000 sq km vast expanse of concentrated mountains and long valleys of Zanskar, an ancient kingdom with a better preserved cultural entity Primarily Buddhist, Padum is a sub district head quarters with several accessible monasteries and 8th century rock edicts with significant carvings and inscriptions. Other places of interest in Zanskar are Karsha with its large and wealthy monastery and Zangla. Treks commence from here for Lamayuru and Hemis. Phugtal and Zongkhul are two famous cave monasteries in Zanskar. To savor a typical experience of western Ladakh, a trip to Sabku, Panikahar and Parkachik is a must.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">Arrive Delhi and transfer to hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">Transfer to airport for flight to Leh. On arrival transfer to hotel. Rest of the day free for acclimatization. Overnight in hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">Morning sight-seeing of Spituk and Phyang monasteries. Afternoon visit Leh monastery, Leh palace and Leh Bazaar. Overnight in hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">Full day tour of Shey, Tiksey and Hemis monasteries. Overnight in hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">5th Day</p>
                                                        <p class="js-acc-description">Drive to Saspol. Afternoon sight-seeing of Alchi monasteries. Overnight in camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">6th Day</p>
                                                        <p class="js-acc-description">Drive to Kargil. En-route visit Lamayuru and Mulbekh monastery. Overnight in hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">7th Day</p>
                                                        <p class="js-acc-description">Drive to Ringdom. Visit Ringdom Monastery. Overnight in camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">8th Day</p>
                                                        <p class="js-acc-description">Drive to Padum, the capital of Zanskar enroute visit Sani monastery. Overnight in camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">9th Day</p>
                                                        <p class="js-acc-description">Sight-seeing of Padum and surroundings, visit Karsha, Pipi Tong and Stagnimo monasteries. Overnight in camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">10th Day</p>
                                                        <p class="js-acc-description">Visit Bardan Gompa (2 hours trek one way). Overnight in camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">11th Day</p>
                                                        <p class="js-acc-description">Return drive to Kargil. Overnight in camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">12th Day</p>
                                                        <p class="js-acc-description">Drive to Srinagar. Transfer to houseboat for overnight stay.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">13th Day</p>
                                                        <p class="js-acc-description">Morning visit Mughal Garden, afternoon Shikara ride on the Dal Lake. Overnight on houseboat.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">14th Day</p>
                                                        <p class="js-acc-description">Full day excursion to Gulmarg. Overnight on houseboat.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">15th Day</p>
                                                        <p class="js-acc-description">Transfer to airport for flight to Delhi. On arrival transfer to hotel. Evening at leisure. Overnight in hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">16th Day</p>
                                                        <p class="js-acc-description">Morning full day sight-seeing tour of Old and New Delhi. Later transfer to airport for flight to onward destination.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/ladakh-zanskar.jpg') }}" class="image activities" alt="Ladakh Zanskar" data-path="images/activities/small/" data-large-images="[&quot;ladakh-zanskar.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Ladakh Zanskar');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(1072px, 0px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item filtered" data-groups="[&quot;safari&quot;]">
                            <div style="opacity: 1; transform: translateX(0px);" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 js-name inline mr5">Leh-Kargil-Zanskar</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">Passing up the Suru Valley through Pensi la (which is open 3-4 months JULY-OCTOBER), one arrives in Zanskar. Over PensiLa is the 5,000 sq km vast expanse of concentrated mountains and long valleys of Zanskar, an ancient kingdom with a better preserved cultural entity Primarily Buddhist, Padum is a sub district head quarters with several accessible monasteries and 8th century rock edicts with significant carvings and inscriptions. Other places of interest in Zanskar are Karsha with its large and wealthy monastery and Zangla. Treks commence from here for Lamayuru and Hemis. Phugtal and Zongkhul are two famous cave monasteries in Zanskar.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">Arrival and transfer to Hotel, full day rest for acclimatization. Overnight stay at Hotel (3500 Metres).</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">In the morning visit Leh Bazaar and surrounding. In the afternoon tea with a traditional Ladakhi family house. Overnight stay at Hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">Jeep Safari ToursFull day excursion. Visit Shanti Stupa, Sankar, Leh Palace and Tsemo Gonpa. Return back to hotel for overnight stay.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">Drive 4 to 5 hours, enroute visit Shey Palace, Thiksay and Chemrey Gonpa.Over night in Camp. (3950 Metres)</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">5th Day</p>
                                                        <p class="js-acc-description">Drive 5 to 6 hours, crossing the 2nd highest motorable pass Changla (5320 Metres). After tea, visit Pangong Lake, one of the largest and most beautiful natural brakish lakes in the country. Part of this lake extends to China. Overnight stay at Camp (3950 Metres).</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">6th Day</p>
                                                        <p class="js-acc-description">Drive for 6 hours. Enroute visit Hemis and Matho Monasteries that are famous for the festival of the blindfolded acrobatic oracle monks. Overnight stay at Camp (3510 Metres).</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">7th Day</p>
                                                        <p class="js-acc-description">Jeep Safari ToursDrive for 4 hours along the Indus river. Enroute visit Stok Palace Museum, Spituk and Alchi Monastery. Overnight stay at Camp (3050 Metres).</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">8th Day</p>
                                                        <p class="js-acc-description">Drive 6 hours via Sanjak and Chigtan valley, crossing Namika la Pass (3720 Metres). Enter Mulbekh and stop by the roadside to see a huge imposing rock carving of future Buddha. Overnight stay at Hotel (2704 m).</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">9th Day</p>
                                                        <p class="js-acc-description">Drive 3 to 4 hours through the Suru valley and the villages of Sankoo and Panikhar. From Sankoo drive towards Thasgam to see the Meitreya sculpture in the Suru valley. On the way to Parkachik get the stunning view of Kun peaks. Overnight stay at Camp (3700 m).</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">10th Day</p>
                                                        <p class="js-acc-description">Drive 6 for 7 hours from the camp. A short hike atop the saddle one can have a panoramic view of the Twin Peaks. Enroute visit Rangdum Gonpa perched on a hill, which was founded in the 18th century by Lobzang Yeshe Takpa during the reign of King Tsewang Namgyal Of Ladakh. While crossing Penzila pass (4400 Metres) one can have a magnificent view of majestic Drang-drung glacier. From here onwards you enter into the valley of Zanskar. Overnight stay at Camp (3505 m).</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">11th Day</p>
                                                        <p class="js-acc-description">In the morning, visit Bardan Gonpa and in the evening Sani Gonpa. The unusual thing about Bardan Gonpa is that it is not built on a hill or mountain but on flat ground is also famous for the Kanika Chorten. Sani Gonpa is the oldest Monastery in Zanskar region. Overnight stay Camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">12th Day</p>
                                                        <p class="js-acc-description">After breakfast visit Karsha Gonpa, the largest and most important Monastery in Zanskar, Stongdey the 2nd largest monastic establishment of Zanskar and Zangla, the rebuilt castle of the one time kings of Zanskar. Overnight stay at Camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">13th Day</p>
                                                        <p class="js-acc-description">Jeep Safari ToursVisit Zongkhul Gonpa, the famous Monastery founded by Naropa and built directly on a rock wall. Its roof terrace offers magnificent views of the beautiful surrounding. Drive onwards to Gulmatang and give your eyes a feast with breathtaking scenery in this practically uninhabited valley. Overnight stay at Camp (3600 Metres).</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">14th Day</p>
                                                        <p class="js-acc-description">Drive for 4 hours. Enjoy the scenic beauty of Suru Valley during the excursion. Overnight stay at Hotel (2704 m).</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">15th Day</p>
                                                        <p class="js-acc-description">6 to 7 hours drive via Lamayuru, enroute visit an Nunnery (Changchub Chosling) at Mulbekh. Overnight stay at Hotel. Note:- From Kargil optional drive to Srinagar then Flight to Delhi.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/leh-kargil-zanskar.jpg') }}" class="image activities" alt="Leh Kargil Zanskar" data-path="images/activities/small/" data-large-images="[&quot;leh-kargil-zanskar.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Leh Kargil Zanskar');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(1072px, 0px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item filtered" data-groups="[&quot;rafting&quot;]">
                            <div style="opacity: 1; transform: translateX(0px);" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 js-name inline mr5">Rafting in Ladakh</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">The most difficult but exciting option for river running is on the Zanskar along its spectacular course through the gorge in the Zanskar mountins, between Padum and Nimo.River Rafting, Ladakh Tourism This is suitable only for well organized white-water expedition, prepared for several days of river running and camping in absolute wilderness. Participants are required to be trained rafters themselves while the arrangements should be assigned to a dependable professional agency.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">Welcome upon arrival at the Leh airport (3,500 mt) and transfer to hotel. Rest of the day fee for accalamatisation.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">Morning after breakfast proceed to visit Sankar monastery, Peace Pagoda and Changspa Chorten. which is situated on the valley floor. Afternoon free at leisure. Overnight stay at the hotel</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">Morning after breakfast drive 50 kms to visit the famous Hemis Monastery which has some of the most precious Thankas, silver stupas enshrines statues of various Buddhist god and goddesses. Later drive back to Stakna. Upon arrival meet the RAFTING team includes the Raft driver and helper. </p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">Morning after an early breakfast drive to visit Thiksay Monastery-this imposing monastery situated on a hill overlooking the village has a huge statue of Shakayamuni Buddha. Later drive 2 kms further to visit Shey Palace which was earlier the Royal Palace. Drive back to camp and start Rafting to reach Spituk. Lunch enroute. This is one of the most beautiful stretch overlooking Stok Kangri on your left and zigzaging along the river. Checkin at the camps in Spituk for overnight stay.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">5th Day</p>
                                                        <p class="js-acc-description">Morning after an early breakfast proceed to visit Spituk Monastery situated at the end of the Leh airport, the gompa has large collections of old Thanks and statues. Later drive back to the Rafting camp and start the final part of the RAFTING till Nimu. This day the river valley get narrower. Rafting will finish after the confluence of River Zanskar and Indus at Nimu. Later proceed for a short village visit to Nimu. Overnight stay at the Camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">6th Day</p>
                                                        <p class="js-acc-description">Morning after breakfast proceed to visit the Likir Monastery which has an impressive sitting statue of Maitreya Buddha. On the way back visit Basgo Monastery. Later drive back to Leh and on arrival checkin at the hotel for overnight stay.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">7th Day</p>
                                                        <p class="js-acc-description">Morning after breakfast transfer to airport to board flight for Delhi</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/rafting-ladakh.jpg') }}" class="image activities" alt="Rafting Ladakh" data-path="images/activities/small/" data-large-images="[&quot;rafting-ladakh.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Rafting Ladakh');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(1072px, 0px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item filtered" data-groups="[&quot;rafting&quot;]">
                            <div style="opacity: 1; transform: translateX(0px);" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 js-name inline mr5">Chilling to Nimmo</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">This day trip rafting starts from Chilling and ends at NIMU. Nimu is the confluence point of Indus & Zanskar river. The rafting period is of around 3hrs. and the Grade is three. The rafting takes you through some breath taking Himalayan landscape.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">This day trip rafting starts from Chilling and ends at NIMU. Nimu is the confluence point of Indus & Zanskar river. The rafting period is of around 3hrs. and the Grade is three. The rafting takes you through some breath taking Himalayan landscape.</p>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/chilling-nimmo.jpg') }}" class="image activities" alt="Chilling Nimmo" data-path="images/activities/small/" data-large-images="[&quot;chilling-nimmo.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Chilling Nimmo');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(1072px, 0px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item filtered" data-groups="[&quot;rafting&quot;]">
                            <div style="opacity: 1; transform: translateX(0px);" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 js-name inline mr5">Chilling to Saspol</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">This is a two day rafting starting from Chilling and ending at Saspol. This is of Grade three. On day one you drive to Chilling and raft up to Nimu which is of around 3 hrs. Stay over night at Nimu in Camp. On day two rafting period is of around 4hrs. Drive back to leh, enroute visit to Alchi & Basgo monasteries.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">Drive to Chilling and raft up to Nimu which is of around 3 hrs. Stay over night at Nimu in Camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">Today's rafting period is of around 4hrs. Drive back to leh, enroute visit to Alchi & Basgo monasteries.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/chilling-saspol.jpg') }}" class="image activities" alt="Chilling Saspol" data-path="images/activities/small/" data-large-images="[&quot;chilling-saspol.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Chilling Saspol');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(1072px, 0px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item filtered" data-groups="[&quot;rafting&quot;]">
                            <div style="opacity: 1; transform: translateX(0px);" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 js-name inline mr5">Phey to Nimmo</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">This is a day trip. Normally one starts around 9AM from leh & is back by 3PM. The rafting period is of around 3hrs and is of grade two. One does not need any past experience for this one. One cross by some spectacular gorges and Himalayan landscape. The raft starts from PHE and ends up at NIMU, the place were Indus & Zanskar river meets (confluence).</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">The rafting period is of around 3hrs and is of grade two.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/phey-nimmo.jpg') }}" class="image activities" alt="Phey Nimmo" data-path="images/activities/small/" data-large-images="[&quot;phey-nimmo.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Phey Nimmo');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(1072px, 0px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item filtered" data-groups="[&quot;rafting&quot;]">
                            <div style="opacity: 1; transform: translateX(0px);" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 js-name inline mr5">Zanskar River Rafting</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">If adventure is what you love, rafting in the Zanskar River will be an adventurous experience like never before. Zanskar Valley, located at a height of more than 12,000 feet above sea level, has the Zanskar River flowing through it. The river takes You through with wonderfully striking sights.and Grade3 and Grade 4 rapids to scale. Along the way, you get to camp by the riverside, have simple meals, talk to your guide and hear fascinating stories of thrill and adventure. The highlight of the Zanskar rafting adventure is the Zanskar Canyon, a.k.a the Grand Canyon of Asia. As you make your way through thrilling Grade 4 when surrounded by towering rocks and rapids, it feels helpless in front of mother nature.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">Morning drive to Kargil,enroute visit Hall of Fame museum,Pathar Sahib Gurudwara,Magnetic hill,liker Monastery,Alchi, , Lamayuru, one of the oldest Monastery of Ladakh and enjoy the view of Moon Landscape & Mulbek, Giant Living Buddha Sculpture on Rock.Overnight hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">Morning after  drive to Parkachik, On the way, visit to Karsekar village where u can have view of giant rock carved buddha in 960 AD, Reach Parkachik by afternoon.Overnight Camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">Morning after breakfast leave to Padum though Penzi La Pass (4400m),enroute visit Rangdum have magnificent view of Nun Kun Peak and Dran Drung Glacier & passing.Reach Padum by afternoon. Overnight Camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">Morning after Breakfast leave for local sightseeing of Karsha, Stongdey & Sani gompa and visit to Zangla fort. Overnight Camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">5th Day</p>
                                                        <p class="js-acc-description">Start rafting from Padum to Hanamul of Grade/Level III+.Overnight Camp at Hanamul.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">6th Day</p>
                                                        <p class="js-acc-description">Start rafting from Hanamul to Neyraks of Grade/Level III+.Overnight Camp.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">7th Day</p>
                                                        <p class="js-acc-description">Start rafting from Neraks to Chilling/Nimmo of Grade/Level III+.Hot Lunch will be served at Nimmo,after lunch drive back to Leh.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/zanskar-rafting.jpg') }}" class="image activities" alt="Zanskar Rafting" data-path="images/activities/small/" data-large-images="[&quot;zanskar-rafting.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Zanskar Rafting');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(1072px, 0px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item filtered" data-groups="[&quot;packages&quot;]">
                            <div style="opacity: 1; transform: translateX(0px);" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 js-name inline mr5">Incrdible Ladakh</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">If there is a heaven on Earth, then it is in Kashmir (read Ladakh). A tour package of 3 nights and 4 days, Ladakh. Wonder, is the fastest and the shortest way for a tourist to enjoy the best of the ancient monasteries, clear water lakes, and high altitude roads of Ladakh. The highlight of this trip is a visit to Khardung La Pass, the highest motorable pass in the world along with visit to Pangong Tso, one of the most famous and breathtaking lakes in the world. Visit to these famous landmarks along with monasteries and palace will give you a peek into the culture and natural flavor of this incredible Himalayan terrain.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">Take an early morning flight to reach Leh, the capital of Ladakh situated at a height of 11800 ft above sea level. As you land at the Kushok Bakula Rimpochee Airport, transfer to your hotel is promptly arranged. Check into your room and spend the day taking rest and adapting to the low air pressure, which is must to settle yourself to the high altitudes of Ladakh. Late afternoon, visit Shanti stupa, a true Buddhist architectural gem. Use the evening to scout local markets. Overnight stay is at the hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">After a leisurely breakfast, we'll drive to Spituk. Today we'll cover Spituk Monastery, the famous Magnetic Hills, teh conflunce of Indus and Zanskar River near Nimoo and visit to Pather Sahib an inportant Sikh Pilgrimage Site.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">Day 3 starts with a full day excursion to Pangong Lake which is a 135 km drive from Leh. The Pangong Lake is nearly 140km long and 3-5km wide and more than half of it lies in the Tibetan territory. Since you return by the evening, you can roam about Leh’s local markets looking for a deal or two. Overnight stay is at the hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">Morning of the fourth day begins with a visit to Khardungla Pass at 18360 ft which, not surprisingly, is the world’s highest motorable pass. In the afternoon visit the Sangam of Indus and Zanskar rivers, and drive past Magnetic Hill & the Thiksey Monastery which enshrines the most photographed statue of Maitreya Buddha in India.  Overnight stay is arranged at the hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">5th Day</p>
                                                        <p class="js-acc-description">Today is the day for cultural immersion in and around Leh. Sightseeing will include visit to Thiskey Gompa, one of the most breathtaking monasteries in Ladakh. We would also vist Shey Palace in the vicinity. After that we'd go Hemis which hosts one of the most well-known festivals in Ladakh. After visiting the monasteries we will drive to Stok Palace Museum which showcases royal artefacts and paraphernalia.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">6th Day</p>
                                                        <p class="js-acc-description">Early morning transfer to Kushok Bakula Rimpochhe Airport on time to board flight for onward destination.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/incredible-ladakh.jpg') }}" class="image activities" alt="Incredible Ladakh" data-path="images/activities/small/" data-large-images="[&quot;incredible-ladakh.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Incredible Ladakh');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(1072px, 0px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item filtered" data-groups="[&quot;packages&quot;]">
                            <div style="opacity: 1; transform: translateX(0px);" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 js-name inline mr5">Discover Ladakh</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">The ‘Discover Ladakh’ tour package is an endeavor to discover the natural and cultural riches of Ladakh valley in its true sense. Besides being ‘the land of high passes’, Ladakh personifies sheer Tibetan Buddhist culture in near about half of its population. The weeklong tour is an enchanting mix of some of the most popular destinations of Ladakh which include monasteries such as Rizong Nunnery, Alchi, Thikse and Hemis, Pangong Lake, Nubra Valley, Khardongla Pass, Stok Palace Museum and Lamayuru Lunar landscapes.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">Arrival at Kushok Bakula airport in Leh followed by assisted transfer to the hotel (3 to 4 kilometers) by our tour representative. On reaching hotel, you’ll be greeted with a welcome drink and escorted to your rooms. A full day acclimatization to get familiarized with the high altitudes and high pressure of Ladakh is necessary. A walking tour of local Leh bazaars is scheduled for the evening.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">A full day tour of monasteries and palaces alongside Indus Valley is on the cards today. Visit the summer palace of erstwhile maharajas of Ladakh- Shey Palace, Thiksey monastery (housed with 100 ft tall statue of Maitreya Buddha) and Hemis monastery (the largest monastery in Ladakh). Return back to Leh in the evening.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">Early morning, hit the road to Alchi (68 kilometers from Leh). Drive past Magnetic Hill, confluence of Indus & Zanskar River at Nimu and visit Basgo Castle. In the afternoon, arrive in Alchi village followed by check in at the hotel. Later visit Alchi monastery-listed among the top 7 heritage monuments in India and 1000 year old miniature paintings. In the evening, take a walking tour around the village.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">Post an unhurried breakfast in the morning, visit Samstanling Monastery. Later drive back to Leh, en route eat packed lunch. In the evening, enjoy shopping in the local markets of Leh.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">5th Day</p>
                                                        <p class="js-acc-description">A full day excursion to Pangong Lake which is 135 kilometer away from Leh and situated at an elevation of 4,400 meters is on the cards today. En route, you’ll cross Chang La Pass (situated at a height of 17500 feet) and drive past Durbuk and Tangste villages in the Changthang region of Ladakh.  The Pangong Lake is the most amazing lake in Asia region and changes its tone 4 to 5 times a day. Stay overnight at the hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">6th Day</p>
                                                        <p class="js-acc-description">Post breakfast in the morning; hit the road to Nubra Valley (142 kilometer away from Stok) via Khardongla Pass. On reaching Nubra, visit Hunder and Diskit monastery and white Sand Dunes.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">7th Day</p>
                                                        <p class="js-acc-description">Post a leisurely breakfast in the morning, head back to Leh via similar route. In the evening, explore the local bazaars of Leh for shopping. Stay overnight at the hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">8th Day</p>
                                                        <p class="js-acc-description">In the morning, check out of the hotel and get transferred to Kushok Bakula airport to board flight for onwards destination.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/discover-ladakh.jpg') }}" class="image activities" alt="Discover Ladakh" data-path="images/activities/small/" data-large-images="[&quot;discover-ladakh.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Discover Ladakh');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(1072px, 0px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item filtered" data-groups="[&quot;packages&quot;]">
                            <div style="opacity: 1; transform: translateX(0px);" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 js-name inline mr5">Little Tibet Package</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">Our Little Tibet package combines visit to Monasteries with Tibetan Buddhism influence, palaces and attractions as well as visit to high mountain passes and stunning Pangong Tso Lake to bring out the best of Ladakh in the shortest possible tour itinerary of Ladakh. The ‘Little Tibet’ experience also takes care of your acclimatization need as you get to spend first two days in Leh town which is the recommended duration for getting used to the tough conditions on high altitude.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">Board an early morning flight to Leh. On arrival, our representative(s) arrange for the transfer to your hotel. Check into the hotel and use the rest of the day to rest and get acclimatized to the high altitude (3500 meters/11800 ft) and low air pressure in Leh. Strolling around the local markets maybe a good idea during the evening. Overnight stay is arranged at the Hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">After breakfast, proceed to a 68 km ride to the 1000 year old paintings of Alchi Monastery. En-route, visit the famous Maitreya Buddha statue at Likir monastery and drive past the confluence of Indus & Zanskar rivers at Nimoo, Magnetic Hill and military Hall of Fame. Stay overnight at the Hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">Day 3 morning starts with a visit to Khardongla Pass which, at 18360 ft,  is the world’s highest motorable pass. During the afternoon, you are introduced to a local family in Stok village which serves delicious homemade butter tea and barley drink. Later, visit the Thiksey Monastery which houses the most photographed statue of Maitreya Buddha in India.  Return by evening for overnight stay at the hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">In the early morning of the penultimate day, an excursion is scheduled to Pangong Lake, a 135 km drive from Leh. The Pangong Lake is 140km long and 3-5km in width – more than half of which lies in Tibetan territory. As you return back Leh by evening, you can use the remaining time exploring local markets, looking for a decent bargain. Overnight stay is again at the hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">5th Day</p>
                                                        <p class="js-acc-description">Early morning transfer to KBR airport to board flight for onward journey.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/little-tibet.jpg') }}" class="image activities" alt="Little Tibet" data-path="images/activities/small/" data-large-images="[&quot;little-tibet.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Little Tibet');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(1072px, 0px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item filtered" data-groups="[&quot;packages&quot;]">
                            <div style="opacity: 1; transform: translateX(0px);" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 js-name inline mr5">Glimpses of Ladakh</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">Glimpses of Ladakh is the ideal opportunity  for those looking to discover Ladakh’s cultural and topographical treasures – its scenic highway passes, monasteries, scenic countryside – in as little time as possible. This 3 nights and 4 days package will let you explore some of the most remarkable Buddhist Monasteries in Leh Ladakh which includes Shey Monatery, Thiksey Monastery, Hemis Monastery and Stok. While in Leh, you'll also visit Shanti Stupa which offers panoramic view of the Leh Town and one of the best photo ops of the town along with Leh Palace where the former monarch of Ladakh resided. And that is not all as you will be taken on topof Khardung La, the highest motorable pass in the world.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">After your early morning flight has brought you to the beautiful city of Leh, our representatives will escort you out of the Kushok Bakula Rinpoche (KBR) Airport transfer to your hotel. Once you have checked into your room you have the remainder of the day at your own leisure. We recommend you use this time to get acclimatized to the high altitude and low air pressure in Ladakh. Evening can be utilized for a short walk to local markets. Return back to your rooms for overnight stay.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">After a delicious, early breakfast, proceed to a full day Indus Valley tour, which includes visits to the Shey Palace and Thiksey, Hemis and Stok Monasteries – the most beautiful Buddhist Monasteries of great historical significance in Ladakh. Box lunch is provided to all guests. Evening can be a good time to hit the local markets and try some local cuisine. Stay overnight at the hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">Day 3 kickstarts with a 48 km morning drive to Khardongla Pass which, at 5600 meters, is supposedly the world’s highest motorable pass. You are then driven back to the hotel for lunch and a short afternoon nap. Around 3:00 pm, visit Shanti Stupa, a beautiful spot to enjoy a typical Ladakh evening offering a panoramic view of the Leh town. Later, visit the 16th century Lehchen Palkhar or Leh Palace. Evenings are again kept free at your leisure. Overnight stay is at the hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">Early morning transfer to KBR airport on time to board flight for onward destination.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/glimpse-ladakh.jpg') }}" class="image activities" alt="Glimpse Ladakh" data-path="images/activities/small/" data-large-images="[&quot;glimpse-ladakh.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Glimpse Ladakh');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(1072px, 0px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item filtered" data-groups="[&quot;packages&quot;]">
                            <div style="opacity: 1; transform: translateX(0px);" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 js-name inline mr5">Hidden Monasteries</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">The Ladakh region is home to an array of Tibetan Buddhist monasteries, whose foundation was laid by the Ladakhi kings and Buddhist saints. The Hidden Monasteries Tour has been designed to let you explore beautiful and vivid monasteries that offer a sneak peek into the Tibetan culture and history.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">Upon your arrival at Leh Airport, our tour representative will meet you and assist you in smooth transfer to the hotel. The day is kept free for acclimatization. Stay overnight in the hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">The morning is free to relax. In the afternoon, hit the road to Saboo, which is around 8 kilometers from Leh and nestled atop of a hillock facing the Indus Valley. It is the most visited monastery in Leh. On your way back to Leh, visit the SOS village (Choglamsar). It is an important destination for those who are interested in studying Tibetan culture. The Central Institute of Buddhist Studies located here features a Tibetan library, handicraft shop, restaurants and medical center. There is  also a golf course and a polo ground.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">Day 3 starts with an early morning visit to Takthok Gompa. Built in the 8th century  by Guru Padmasambhava, Takthok Gompa is situated around the cave where he meditated. Post your return from Takthok Gompa, set off to visit the Chemrey Gompa. Built under the patronage of Sengge Namgyal,the construction of  Chemrey Gompa was started in March 1644 A.D. and got completed in 1646 A.D. This monastery is nestled atop of a small hill, whose one side is a dwelling of monks.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">Post breakfast, take a road journey to Alchi. On the way, halt at Phyang Gompa, located on the main highway to Alchi. It is one of the most beautiful monasteries in Ladakh. Post sightseeing in Phyang monastery, visit Basgo, which is located along the road to Alchi. When the kingdom of Ladakh got divided in the 15th and 16th century, the Basgo village was an important tourist center in the medieval times.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">5th Day</p>
                                                        <p class="js-acc-description">While returning back from Alchi to Lamayuru, pay a visit to Ridzong Gompa, one of the less visited monasteries in Ladakh. Built sometime around 1840, this Gompa is beautifully set in a valley, in a gorge and was founded by Lama Tsultim Nima. After exploration of Ridzong Gompa, proceed on a trip to the 11th century Lamayuru Monastery. There is a popular legend that the Arhat Madhyantika, a disciple of Buddha, offered holy food and water to satisfy the spirits inhabiting the Gompa. Stay overnight in the hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">6th Day</p>
                                                        <p class="js-acc-description">Today, you will drive back to Leh for lunch at the hotel. The afternoon is free for leisure. Stay overnight in the hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">7th Day</p>
                                                        <p class="js-acc-description">Today, you will be transferred to the airport to board flight back to Delhi.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/hidden-monasteries.jpg') }}" class="image activities" alt="Hidden Monasteries" data-path="images/activities/small/" data-large-images="[&quot;hidden-monasteries.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Hidden Monasteries');">
                                </span>
                            </div>
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(1072px, 0px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;" class="item wrapper p5 shuffle-item filtered" data-groups="[&quot;packages&quot;]">
                            <div style="opacity: 1; transform: translateX(0px);" class="js-offer-block">
                                <div class="wrapper pa fullwidth fullheight zim">
                                    <div class="wrapper fullwidth pa left bottom description">
                                        <div class="wrapper aj pr20 pl20 pb10 pt15">
                                            <h3 class="text vam fz5 cw fw3 js-name inline mr5">Wild Ladakh</h3>
                                            <div class="item-details hide">
                                                <p class="js-description">If you are a wildlife enthusiast then this 5 nights and 6 day wildlife tour of Ladakh is an excellent opportunity for you to spot some most exotic animal species roam freely in their natural  habitat. The tour starts with sightseeing of the city of Leh. Later, you will be able to spot various wild animals such  as blue sheep, snow leopard, Tibetan argali, and many more. Spotting these exotic species in terrains, which in winters become inaccessible for human is a thrilling experience. On the last day of the tour, enjoy trekking on the Stokla pass (4900m) and a visit to the Stok Palace.</p>
                                                <div class="days-list">
                                                    <div class="day">
                                                        <p class="js-title">1st Day</p>
                                                        <p class="js-acc-description">Arrive at the Leh airport where our tour representative will meet you for an assisted transfer to the hotel. Check -in to the hotel and relax. Post lunch, visit the Leh Market, the Leh Palace, the Hall of Fame and the Shanti Stupa. Overnight stay at the hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">2nd Day</p>
                                                        <p class="js-acc-description">After breakfast, full day 2 is booked for sight seeing which includes visits to the Shey Palace, Thiksey and Hemis monasteries as well as the Stock Palace Museum. Return back to Leh in the evening. Overnight at the hotel.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">3rd Day</p>
                                                        <p class="js-acc-description">Post breakfast, hit the road for Phey Bridge. After crossing the bridge, walk to reach the Zingchen Gorge. En-route, you can spot signs of the snow leopard along the bottom of the side valleys during winters or early spring or fall. Arrive in Rumbak, by evening.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">4th Day</p>
                                                        <p class="js-acc-description">Full day 4, after breakfast, proceed for full- day wildlife viewing. You will be accompanied by a  local guide. You might spot various kinds of animals such as the great Tibetan sheep also called aragali, blue sheep, a Tibetan wolf, various migratory bird species, exquisite flora and if really lucky, a Snow leopard. Return to the hotel for an overnight halt.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">5th Day</p>
                                                        <p class="js-acc-description">Start early for a trek up the Stokla pass (4900m- 3 hours), move towards the extreme left along the south facing hill. After one hour, you start climbing up to the pass. From here, you can get an amazing view of the Indus valley. Slide downwards to the Stok village. A visit to Stok Palace museum can be arranged. Later drive towards Leh. On arrival, check-into the hotel for an overnight stay.</p>
                                                    </div>
                                                    <div class="day">
                                                        <p class="js-title">6th Day</p>
                                                        <p class="js-acc-description">Assisted transfer to the airport, to catch a flight back to Delhi.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('images/activities/small/wild-ladakh.jpg') }}" class="image activities" alt="Wild Ladakh" data-path="images/activities/small/" data-large-images="[&quot;wild-ladakh.jpg&quot;]">
                                <span class="pointer js-show-details portfolio-view-more wrapper pa fullwidth fullheight zil" onClick="setTour('Wild Ladakh');">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
text-[#00426c]
    <section class="parallax-fix">
        <div class="parallax bg2"></div>
        <div class="wrapper pt100 pb70">
            <div class="row">
                <div class="column medium-3">
                    <div class="numbers component">
                        <div class="wrapper pt50 pb50 ac">
                            <div class="wrapper dib number mb20">
                                <h4 class="text ff2 fz11 fw1 cw ac odometer">
                                    10
                                </h4>
                            </div>
                            <p class="text cw icon">
                                <i class="pe-7s-key"></i>
                            </p>
                            <p class="text fw3 fz4 ttu cw lsm">Trekkings</p>
                        </div>
                    </div>
                </div>
                <div class="column medium-3">
                    <div class="numbers component">
                        <div class="wrapper pt50 pb50 ac">
                            <div class="wrapper dib number mb20">
                                <h4 class="text ff2 fz11 fw1 cw ac odometer">
                                    3
                                </h4>
                            </div>
                            <p class="text cw icon">
                                <i class="pe-7s-map"></i>
                            </p>
                            <p class="text fw3 fz4 ttu cw lsm">Expeditions</p>
                        </div>
                    </div>
                </div>
                <div class="column medium-3">
                    <div class="numbers component">
                        <div class="wrapper pt50 pb50 ac">
                            <div class="wrapper dib number mb20">
                                <h4 class="text ff2 fz11 fw1 cw ac odometer">
                                    4
                                </h4>
                            </div>
                            <p class="text cw icon">
                                <i class="pe-7s-like"></i>
                            </p>
                            <p class="text fw3 fz4 ttu cw lsm">Safari</p>
                        </div>
                    </div>
                </div>
                <div class="column medium-3">
                    <div class="numbers component">
                        <div class="wrapper pt50 pb50 ac">
                            <div class="wrapper dib number mb20">
                                <h4 class="text ff2 fz11 fw1 cw ac odometer">
                                    6
                                </h4>
                            </div>
                            <p class="text cw icon">
                                <i class="pe-7s-gleam"></i>
                            </p>
                            <p class="text fw3 fz4 ttu cw lsm">Tour Packages</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt100 pb100 tbgc1 section-fix" id="aboutus">
        <article class="wrapper pt20 pb20 tbgc1 section-fix header-wrapper fixed-screen-header text-sm text-gray-800">
            <div class="row">
                <div class="column large-12">
                    <h2 class="text fz8 fw3 ttu lsm mb30 title ac text-[#00426c]">About Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="column large-9 medium-6">
                    <div class="logo component">
                    <h4 class="text-md font-semibold text-[#00426c] mb-4">Tenzin Motup Tahang</h4>
                    <p class="mb-4 text-justify">
                        Tenzin Motup is a highly skilled and experienced individual with a strong background in event management and a passion for sustainability, tourism, and urban development. He has worked on a variety of projects related to these areas, and has received training in leadership, project management, and laboratory analysis. In addition, Tenzin Motup has held various positions within organizations and committees, such as being a member of the UT Level Advisory Committee for the implementation of plastic waste management rules and serving as an executive member of ALTOA. This demonstrates his ability to work with others and participate in decision-making processes.
                    </p>

                    <p class="mb-4 text-justify">
                        One of Tenzin Motup's key strengths is its diverse range of work experience.  He has served as a tour leader, Olivier and Danielle Follmi photographer's assistant, and director of a travel company White Copper Travel, and has been a resource person for the Ladakh Tourist Police and the District Legal Services Authority. His experiences have given him a wealth of knowledge and expertise in the diverse subject field, and have allowed him to develop a wide range of skills that are valuable in any organization.
                    </p>

                    <p class="mb-4 text-justify">
                        Another key strength of Tenzin Motup is his strong language skills. He is fluent in Ladakhi, Tibetan, Hindi, French, and English, which allows them to communicate effectively with a wide range of people and organizations. This is particularly valuable in the field of event management, where the ability to communicate clearly and effectively is essential.
                    </p>

                    <p class="mb-4 text-justify">
                        In conclusion, Tenzin Motup is a well-rounded and experienced individual who is well-equipped to take on a variety of roles related to event management, sustainability, tourism, and urban development. His strong language skills, diverse range of work experience, and ability to work with others make him a valuable asset to any organization.
                    </p>

                    <h4 class="text-md font-semibold text-[#00426c] mb-1 mt-6">Olivier Föllmi</h4>
                    <p class="mb-4 text-justify">
                        Swiss french photographer involved since 35 years in Himalaya, Olivier Föllmi has been a leading personnality to popularise ladakhi and zanskari culture. Author of 33 books translated in nine languages, published in 1,5 millions copies around the world, he has been awarded by Life magazine among the 50th best photographer of the world. <a href="http://www.follmispirit.com/"><b>www.follmispirit.com</b></a> 
                    </p>

                    <h4 class="text-md font-semibold text-[#00426c] mb-1 mt-6">Core Skills & Job Profile</h4>
                    <p class="mb-2">
                        Tenzin Motup played his role as ‘Event Manager’ to perfection as his skills from 2018-2022.
                    </p>
                    <p class="mb-2">
                        His job profile includes:
                    </p>
                    <ul class="skill text-sm text-gray-500 list-inside dark:text-gray-400 ml-6">
                        <li class="flex items-start">
                        <svg class="w-4 h-4 mt-0.5 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Mobilising local stakeholders for multiple meetings and workshops.
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Planning and conducting events for communication of various components of the project.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Organizing various events such as town hall, meetings and workshops</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Mobilising masses for public support for the project.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Providing support in arranging logistics and supplies for the project.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Conducting research and evaluate trainings programmes</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Conducting other project-related work</li>
                    </ul>

                    <h4 class="text-md font-semibold text-[#00426c] mb-1 mt-6">Work Experience</h4>
                    <ul class="experience text-gray-500 list-inside dark:text-gray-400 ml-6">
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Worked with LEDeG for 5 years.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Resource person for Ladakh Tourist Police.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Resource person on history of culture, Economics and Sustainability in the region at Live to Love, 2019.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Constitution of UT Level Advisory Committee for implementation of the Plastic Waste (Management and Handling) Rules, 2016 as amended from time to time. I am a member representing LEDeG, 2021.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Resource person to District Legal Services Authority leh, on pan India Awareness and outreach campaign, Legal Awareness camp on Environment Protection, 2021.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Played the character of “KAGA THELMET” for livable leh project funded by European Union and BORDA from 2018-2020</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Attended Exposure tour on Solid Waste organised by LEDeG, Ahmedabad, 2021.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Attended Exposure tour on Solid Waste and Waste to Energy Plants organised by LAHDC leh to Mumbai and Agra, 2021.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Leh Vision Document 2030 owned by LAHDC Leh, Event Manager 2018-2020.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Attended Senior Leadership Training along with Government official of UT Ladakh 4 Modules 2018-2020.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Attended Future Leadership Training along with Government officials 4 Modules 2018-2020.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Been Executive members of ALTOA as cashier2018-2020.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Attended workshop on principles & Method on the laboratory Analysis of septage & wastewater, 2021.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Been Executive members of ALTOA as cashier2018-2020.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Attended Workshop on Project Management, 2020.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Attended O & M training Workshop, 2021.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Attended  Water Tariff Structure & Water Management Training for the 10 & 11th September, 2021.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Attended community Awareness Programme on Source Segregation of Municipal Solid Waste at Shanam, 2021.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Attended Workshop on Solid Waste Management, Safai karamchari of MC, 2020.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Attended 2nd October cleanliness drive in Skampari ward with Government officials and Safai Karam Charis. The ceremony will be flag off by the LT. Governor for rest of the wards in Leh. Organised & attended Awareness campaign on climate change in the main market, 2021.
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Attended stakeholders meeting with sanitation Workers  2021..</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Attended  and Organised world water day in Kargil, 2021.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Attended Future Leader Programme Module 5 Training, 2018-2021.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Attended workshop on Integrated Urban Water Management.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Attended workshop on principles & Method on the laboratory Analysis of septage & wastewater.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Rammed Earth Workshop, 2018.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Water and wastewater workshop.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Workshop for Municipal Committee members.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Organized Town Hall Meetings on different themes related to the project, 2018-2020.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Conducted an event on the theme of an " Impact Of Rapid Urbanization on health for stakeholders in Leh".</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            2002-2003 President of Ladakh Student Union, Delhi.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            2004- 2011 French tour leader for Atalante France.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            2010- Employed as assistant photographer for world renowned photographer Olivier et Danielle Follmi for National Geography.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            2011-  INTACH, Attended Heritage Interpreters Trainning Programme for Guides.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            2012-2017 Director White Copper Travel, Leh.</li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 mt-0.5 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="#00426c" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            2013 Organized " Le Fleve Gelee"  Olivier Follmi  et Danielle Follmi Conference In France , Switzerland for 40 days also played the main actor of the show.</li>
                    </ul>


                    <h4 class="text-md font-semibold text-[#00426c] mb-1 mt-6">White Copper Travel</h4>
                    <p class="mb-4 text-justify">
                        Organises treks and expeditions to the Himalayas. Formed in 2012 by Tenzin  Motup Tahang after having an experience of ten years on the field. White Copper Travel has established itself as a well-known innovator, with the ability to offer a wide range of activities and destinations, as well as being able to customize the experience for both large and small expeditions to the Himalayas. 
                    </p>

                    <p class="mb-4 text-justify">
                        We take pride in being innovative and strive to offer a service that exceeds client expectations. Trips are custom-designed in-house to meet your individual requirements. Whether you’re planning a simple family vacation, a commercial group trek or a challenging mountaineering expedition, we can meet your needs with professionalism .
                    </p>
                    </div>
                </div>
                <div class="column large-3 medium-6">
                    <div class="wrapper pt20 pb20 js-menu-container">
                    <h4 class="text-md font-semibold text-[#00426c] mb-1 mt-4">Activities</h4>
                    <ul class="list-disc">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Trekking</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Mountaineering</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Rafting</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Mountain Biking</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Cultural Tours</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Jeep Safaris</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Family Adventures</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Film Making</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Traditional Home Stay</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Chadaar Trek</li>
                    </ul>


                    <h4 class="text-md font-semibold text-[#00426c] mb-1 mt-6">Destinations</h4>
                    <ul class="list-disc">
                        <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                        India</li>
                            <ul class="list-disc ml-4">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                                    Ladakh
                                </li>

                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                                    Zanskar
                                </li>

                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                                    Himachal
                                </li>

                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                                    Garhwal
                                </li>

                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                                    Kumaon
                                </li>

                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                                    Sikkim
                                </li>

                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                                    Arunachal
                                </li>

                            </ul>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Nepal</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Bhutan</li>
                    </ul>

                    <h4 class="text-md font-semibold text-[#00426c] mb-1 mt-6">Languages Known</h4>
                    <ul class="language list-disc">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Ladakhi</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Tibetain</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Hindi</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            French</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            English</li>
                    </ul>

                    <h4 class="text-md font-semibold text-[#00426c] mb-1 mt-6">Countries Visited</h4>
                    <ul class="countries list-disc">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            France</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            France</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Great Britain</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Italy</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Monaco</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Greece</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Bhutan</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Nepal</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Thailand</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Sri Lanka</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Sicily</li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" width="15" height="15" viewBox="0 0 32 32" id="right-arrow"><path d="M23.706 15.312l-5.918-6.69a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0 1.422 1.422l5.918-6.69c.2-.2.296-.462.292-.724a1.004 1.004 0 0 0-.292-.724zm-14.514 8.14c.392.392 1.03.392 1.422 0l5.918-6.69c.2-.2.296-.462.292-.724a.993.993 0 0 0-.292-.724l-5.916-6.692a1.007 1.007 0 0 0-1.422 1.422l5.3 5.992-5.3 5.992a1.007 1.007 0 0 0-.002 1.424z"></path></svg>
                            Austria</li>
                    </ul>
                    </div>
                </div>
            </div>
        </article>
    </section>



    <section id="contacts" class="tbgc5 section-fix">
        <div class="wrapper pt100">
            <div class="row">
                <div class="column large-12">
                    <h2 class="text fz8 fw3 ttu lsm mb30 cmt title ac">Contact Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="column large-12 wrapper ovh">
                    <div class="wrapper separator around">
                        <div class="row">
                            <div class="column large-12 wrapper pr">
                                <div class="wrapper pr">
                                    <div class="row">
                                        <div class="column medium-6">
                                            <div class="wrapper p40 component contacts">
                                                <div class="wrapper mb40 logo-container">
                                                    <img class="image" alt="" src="img/theme/logo.png">
                                                </div>
                                                <div class="wrapper mb40">
                                                    <p class="text fz3 fsi cmt fw3">
                                                        We are reachable every day via e-mail or phone and from Sunday to Friday personally at our office! You can also fill in and send the form below to book your holiday with us.
                                                    </p>
                                                </div>
                                                <div class="wrapper">
                                                    <div class="list">
                                                        <li class="mb20">
                                                            <div class="wrapper pl20 pr">
                                                                <div class="wrapper pa left top">
                                                                    <span class="text cm fz3"><i class="pe-7s-mail"></i></span>
                                                                </div>
                                                                <p class="text cmt fz3 fw3 lss">whitecoppertravel@gmail.com</p>
                                                            </div>
                                                        </li>
                                                        <li class="mb20">
                                                            <div class="wrapper pl20 pr">
                                                                <div class="wrapper pa left top">
                                                                    <span class="text cm fz3"><i class="pe-7s-phone"></i></span>
                                                                </div>
                                                                <p class="text cmt fz3 fw3 lss">+91 9419655545</p>
                                                            </div>
                                                        </li>
                                                        <li class="mb20">
                                                            <div class="wrapper pl20 pr">
                                                                <div class="wrapper pa left top">
                                                                    <span class="text cm fz3"><i class="pe-7s-map-marker"></i></span>
                                                                </div>
                                                                <p class="text cmt fz3 fw3 lss">Fort Road, Leh Ladakh, India 194101</p>
                                                            </div>
                                                        </li>
                                                        <div class="flex mt-4 space-x-6 justify-center sm:justify-start md:mt-0 ml-4">
                                                            <a href="#" class="text-[#00426c] hover:text-yellow-500 dark:hover:text-white">
                                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                                                                <span class="sr-only">Facebook page</span>
                                                            </a>
                                                            <a href="#" class="text-[#00426c] hover:text-yellow-500 dark:hover:text-white">
                                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                                                                <span class="sr-only">Instagram page</span>
                                                            </a>
                                                            <a href="#" class="text-[#00426c] hover:text-yellow-500 dark:hover:text-white">
                                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                                                                <span class="sr-only">Twitter page</span>
                                                            </a>
                                                            <a href="#" class="text-[#00426c] hover:text-yellow-500 dark:hover:text-white">
                                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                                                                <span class="sr-only">GitHub account</span>
                                                            </a>
                                                            <a href="#" class="text-[#00426c] hover:text-yellow-500 dark:hover:text-white">
                                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                                                                <span class="sr-only">Dribbble account</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <livewire:contact />
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="tbgc5 section-fix">
        <div class="wrapper">
            <div class="row">
                <div class="column large-12">
                    <div class="component ac pt40 pb40">
                        <p class="text ctm fz3 lh1">©2015 - <?php echo date("Y"); ?> <a href="http://vsart.me/">White Copper Travel</a>. All right reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    
    <!-- Tour Model divs -->
    <div class="modals">
        <div class="offer-modal">
            <div class="wrapper tbgc3 pf fullwidth fullheight top left js-details-wrapper details-wrapper">
                <div class="table-container">
                    <div class="cell-container">
                        <div class="row ovh wrapper">
                            <div class="column medium-12 large-4 wrapper fullheight offer-slider-column">
                                <div class="offers-slider-container">
                                </div>
                            </div>
                            <div class="column medium-12 large-8">
                                <div class="wrapper pa close-btn pointer ovh js-close-details fa fa-angle-left"> <span class="fw3 text">back</span></div>
                                <div class="wrapper pb30 pt30 pr offer-tabs-container">
                                    <div class="wrapper ovh js-details-container">
                                        <div class="row">
                                            <div class="column large-7">
                                                <div class="wrapper">
                                                    <p class="text cm fz6 lh1 js-item-price mb20"></p>
                                                    <h4 class="text title fw3 fz6 cmt lh1 mb15 js-item-title"></h4>
                                                    <div class="description">
                                                        <p class="item-description text fsi fz1 c6 lh2 mb10"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="column large-5">
                                                <div class="wrapper">
                                                    <span class="button js-booknow-btn fullwidth ac"><span class="text fz6 lh22 ttu fw3">book now</span></span>
                                                </div>
                                                <div class="wrapper js-days-list mt30">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrapper js-book-container book-container pa fullwidth fullheight top right tbgc3 pt20 pb20">
                                        <h4 class="title fz6 cmt lh14 fw3 text mt5 mb-10" id="booking-title">Book Now!</h4>
                                        <div class="wrapper mt50">
                                            @if(Session::has('success'))
                                                <div class="alert alert-success" style="color: green; font-size: 15px; font-weight: bold;">
                                                    {{Session::get('success')}}
                                                </div>
                                            @endif
                                            <form method="POST" class="form booking-form" id="booking-form" >
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="medium-6 column ar">
                                                        <div class="wrapper mb10 ml15 mr15 inline field-container pr">
                                                            <input id="b-name" name="name" class="input required pl20 book-field" placeholder="Name" type="text">	
                                                            @if ($errors->has('name'))
                                                                <span class="error-star pt20 pb20">{{ $errors->first('name') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="medium-6 column al">
                                                        <div class="wrapper mb10 ml15 mr15 inline field-container pr">
                                                            <input id="b-phone" name="phone" class="input required pl20 book-field" placeholder="Phone" type="text">
                                                            @if ($errors->has('phone'))
                                                                <span class="error-star pt20 pb20">{{ $errors->first('phone') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="medium-6 column ar">
                                                        <div class="wrapper mb10 ml15 mr15 inline field-container pr">
                                                            <input name="email" id="b-email" class="input required pl20 book-field" placeholder="Email" type="text"> 
                                                            @if ($errors->has('email'))
                                                                <span class="error-star pt20 pb20">{{ $errors->first('email') }}</span>
                                                            @endif
                                                        </div>
                                                        <div class="wrapper mb10 ml15 mr15 inline field-container pr">
                                                            <input id="b-date" name="date" required="" class="input required pl20 pr10 book-field" placeholder="Date" type="date">
                                                            @if ($errors->has('date'))
                                                            <span class="error-star pt20 pb20">{{ $errors->first('date') }}</span>
                                                        @endif
                                                        </div>
                                                    </div>
                                                    <div class="medium-6 column al">
                                                        <div class="wrapper mb10 ml15 mr15 inline field-container pr">
                                                            <textarea id="b-message" name="message" class="textarea required pl20 pb10 book-field" placeholder="Message"></textarea>
                                                            @if ($errors->has('message'))
                                                                <span class="error-star pt20 pb20">{{ $errors->first('message') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row hide">
                                                    <input name="order_name" class="order-name-field" type="text">
                                                    <input name="order_price" class="order-price-field" type="text">
                                                </div>
                                                <div class="row">
                                                    <div class="medium-12 column title fz6 cmt lh14 fw3 text mt5 mb-10">
                                                        <span onClick="onBookings()" id="cfgelement" class="cfg-submit " name="cfgelement">Submit</span>
                                                    </div>
                                                    <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                                                    @if ($errors->has('captcha'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('captcha') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Tour Model divs -->
		
    <script src="js/require.js" data-main="js/index.min"></script>
@endsection

