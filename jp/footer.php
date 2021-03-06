<script src="https://kit.fontawesome.com/4459cbea88.js" crossorigin="anonymous"></script>
<footer class="footer " id="contact">
    <div class="footer_top ">
        <div class="container ">
            <div class="row row-center-footer ">
                <div class="col-xs-12 col-sm-12 col-md-4 column-left col-center ">
                    <div class="footer_logo wow fadeInRight " data-wow-duration="1s " data-wow-delay=".3s ">
                        <a href="index.php ">
                            <img src="img/home/logo-06.png " class="logo1 " alt=" " style="height: 120px; width: auto; ">
                        </a>
                    </div>
                    <div class="text1-footer ">資格のある経験豊富な専門家チームにより、私たちはお客様に最高の品質と最も信頼できる製品を提供する前に、すべての製品を徹底的にテストすることをお約束します

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 column-center">
                    <div class="form-advisory wow fadeInUp animated " style="visibility: visible; animation-name: fadeInUp; ">
                        <form method="POST" action="contact.php" enctype="multipart/form-data">

                            <div class="form-item wow fadeInUp " style="visibility: visible; animation-name: fadeInUp; ">
                                <p class="form-name form-add ">名前: <span>*</span></p>
                                <input type="text" name="name" value="" class="form-control ">
                                <?php 
                                if(isset($error) && in_array('name',$error))
                                {
                                    echo "<p style='color: red; font-size: 12px;'>名前を入力してください </p>";
                                }
                                ?>
                                
                                <div class="text-danger is-invalid "></div>
                            </div>
                            <div class="row ">
                                <div class="col-xs-12 col-sm-7 ">
                                    <div class="form-item wow fadeInUp " style="visibility: visible; animation-name: fadeInUp; ">
                                        <p class="form-add ">メール: <span>*</span></p>
                                        <input type="text" name="email" value=""class="form-control ">
                                        <?php 
                                            if(isset($error) && in_array('email',$error))
                                            {
                                                echo "<p style='color: red; font-size: 12px;'>メールを入力してください</p>";
                                            }
                                        ?>
                                        <div class="text-danger is-invalid "></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-5 ">
                                    <div class="form-item wow fadeInUp " style="visibility: visible; animation-name: fadeInUp; ">
                                        <p class="form-add ">電話番号: <span>*</span></p>
                                        <input type="text" name="phone" value="" class="form-control ">
                                        <?php 
                                            if(isset($error) && in_array('phone',$error))
                                            {
                                                echo "<p style='color: red; font-size: 12px;'>電話番号を入力してください</p>";
                                            }
                                        ?>
                                            <div class="text-danger is-invalid ">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-item wow fadeInUp " style="visibility: visible; animation-name: fadeInUp; ">
                                <p class="form-add ">お問い合わせ <span>*</span></p>
                                <textarea name="enquiry" rows="3 " value= ""class="form-control "></textarea>
                                <?php 
                                    if(isset($error) && in_array('enquiry',$error))
                                    {
                                        echo "<p style='color: red; font-size: 12px;'>お問い合わせを入力してください</p>";
                                    }
                                ?>
                                <div class="text-danger is-invalid "></div>
                            </div>
                            <div>
                                <button class="btn btn-primary center-block button-submit wow fadeInUp form-add " style="visibility: visible; animation-name: fadeInUp; " type="submit" name="contact">送信</button>
                                <div>
                                    <?php
                                        if (! empty($message)) {
                                            ?>
                                            <p style='color: #15BDEF; font-size: 12px; display: flex; justify-content: center; display: flex;
    justify-content: center;'><?php echo $message; ?></p>
                                        <?php
                                        }
                                    ?>
                                </div>
                            </div>
                            

                        </form>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-1s2 col-md-4 column-rights ">
                    <div class="showroom ">
                        <div class="showroom-item wow fadeInUp animated " style="visibility: visible; animation-name: fadeInUp; ">
                            <div class="name ">住所</div>
                            <div class="address ">25 番号、4/228 Thanh Binh 道、 Mo Lao 区、Ha Dong、Hanoi
                            </div>
                        </div>
                        <div class="showroom-item wow fadeInUp animated " style="visibility: visible; animation-name: fadeInUp; ">
                            <div class="name ">電話番号 </div>
                            <div class="address ">（＋８４）３７－９７５－６９３３
                            </div>
                        </div>
                        <div class="showroom-item wow fadeInUp animated " style="visibility: visible; animation-name: fadeInUp; ">
                            <div class="name ">メール </div>
                            <div class="address ">contact@dova-vn.com</div>
                        </div>
                    </div>
                    <div class="socail_links ">
                        <ul>
                            <li>
                                <a class="wow fadeInUp " data-wow-duration="1s " data-wow-delay=".6s " href="# "> <i class="fa fa-google-plus "></i> </a>
                            </li>
                            <li>
                                <a class="wow fadeInUp " data-wow-duration="1s " data-wow-delay=".3s " href="https://www.facebook.com/dovavietnam/" target="_blank"> <i class="fa fa-facebook "></i> </a>
                            </li>
                            <li>
                                <a class="wow fadeInUp " data-wow-duration="1s " data-wow-delay=".4s " href="# "> <i class="fa fa-twitter "></i> </a>
                            </li>
                            <li>
                                <a class="wow fadeInUp " data-wow-duration="1s " data-wow-delay=".5s " href="# "> <i class="fa fa-instagram "></i> </a>
                            </li>
                            <li>
                                <a class="wow fadeInUp " data-wow-duration="1s " data-wow-delay=".5s " href="https://goo.gl/maps/5uizJ9NLUbF8QF377 " target="_blank"> <i class="fa fa-map-marker-alt " style="color:white"></i> </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Load Facebook SDK for JavaScript -->
                    <div id="fb-root "></div>
                    <script>
                        window.fbAsyncInit = function() {
                            FB.init({
                                xfbml: true,
                                version: 'v8.0'
                            });
                        };

                        (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    </script>

                    <!-- Your Chat Plugin code -->
                    <div class="fb-customerchat " attribution=setup_tool page_id="111242356903449 " theme_color="#0084ff " logged_in_greeting="Xin chào! Bạn cần chúng tôi giúp gì? " logged_out_greeting="Xin chào! Bạn cần chúng tôi giúp gì? ">
                    </div>

                    <!--  -->
                </div>
            </div>
        </div>
    </div>


    <!-- Button Backtotop -->
    <a id="button-backtohome"></a>
    <script>
        var btn = $('#button-backtohome');

        $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });

        btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, '300');
        });
    </script>
    <!--  -->

    <div class="copy-right_text ">
        <div class="container ">
            <div class="footer_border "></div>
            <div class="row ">
                <div class="col-xl-12 ">
                    <p class="copy_right text-center wow fadeInUp text-footer " data-wow-duration="1s " data-wow-delay="1.3s ">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        © Copyright Dova Việt Nam
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All Rights Reserved Designed <i class="fa fa-heart-o " aria-hidden="true "></i> by <a href="https://colorlib.com " target="_blank " class="text-footer1 ">Dova Việt Nam</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>