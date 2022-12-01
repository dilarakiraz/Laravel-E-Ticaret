<!-- HOME -->
<div id="home">
    <!-- container -->
    <div class="container">
        <!-- home wrap -->
        <div class="home-wrap">
            <!-- home slick -->
            <div id="home-slick">
                @php
                    $i=0;
                @endphp

                    @php
                        $i+= 1;
                    @endphp
                <!-- banner -->
                <div class="banner banner-1 @if($i==1)active @endif  ">
                    <img src="" style="height:500px" alt="">
                    <div class="banner-caption text-center">
                        <h3></h3>
                        <h3 class="white-color font-weak"></h3>
                        <a href="" class="primary-btn">Şimdi Al</a>
                    </div>
                </div>
                <!-- /banner -->

            </div>
            <!-- /home slick -->
        </div>
        <!-- /home wrap -->
    </div>
    <!-- /container -->
</div>
<!-- /HOME -->
