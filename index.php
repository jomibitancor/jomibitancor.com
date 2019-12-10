<?php
    include '.env/keys.php';

    if($_POST){
        function getCaptcha($SecretKey){
            $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}");
            $Return = json_decode($Response);
            return $Return;
        }
        $Return = getCaptcha($_POST['response']);
        if($Return->success == true && $Return->score >0.5){
            echo "Success!";
        }else{
            echo "Robot";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/fullpage.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/svg_anim.css">
    <link rel="stylesheet" href="css/media_queries.css">
    <link rel="stylesheet" href="css/glide.core.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0b3e758f0c.js" crossorigin="an1onymous"></script>
    <title>Jomi Bitancor</title>

    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>"></script>
</head>

<body>
    <div id="fullpage">
        <section class="section" id="section_1">
            <div id="name-container">
                <svg id="john-svg" width="237" height="56" viewBox="0 0 237 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="j" d="M2.35413 45.5714L1.84687 46.1478L2.27279 46.7867C3.90308 49.2321 6.02474 51.1244 8.62666 52.4509C11.2221 53.7741 14.0428 54.432 17.0728 54.432C22.0987 54.432 26.0539 53.0596 28.7501 50.1519C31.4801 47.2116 32.7608 42.9419 32.7608 37.52V2.6V1.6H31.7608H8.07284H7.07284V2.6V7.208V8.208H8.07284H25.5048V37.736C25.5048 41.3153 24.7459 43.8134 23.4007 45.4069C22.0829 46.968 20.0621 47.824 17.1448 47.824C13.0559 47.824 9.72517 45.9625 7.10192 42.0729L6.37774 40.9991L5.52213 41.9714L2.35413 45.5714Z" stroke="white" stroke-width="2" />
                    <path id="o" d="M64.1437 50.9927L64.1437 50.9928L64.156 50.9995C68.3932 53.2925 73.0948 54.432 78.24 54.432C83.3838 54.432 88.0404 53.2931 92.186 50.9962C96.3717 48.7036 99.6716 45.5303 102.068 41.4858L102.071 41.4812C104.47 37.3822 105.664 32.814 105.664 27.8C105.664 22.7871 104.471 18.2415 102.07 14.1886C99.6739 10.0967 96.3743 6.89788 92.1865 4.60409C88.0408 2.30699 83.384 1.168 78.24 1.168C73.0918 1.168 68.388 2.33286 64.1499 4.67588C59.9643 6.9684 56.6644 10.1417 54.2677 14.1862L54.2677 14.1862L54.2631 14.1941C51.9117 18.2465 50.744 22.79 50.744 27.8C50.744 32.81 51.9117 37.3535 54.2631 41.4059L54.263 41.4059L54.2677 41.4138C56.6636 45.4569 59.9615 48.6526 64.1437 50.9927ZM95.7301 17.6373L95.7334 17.643C97.4633 20.6476 98.336 24.0253 98.336 27.8C98.336 31.5733 97.4639 34.9765 95.732 38.0315C93.9992 41.0401 91.611 43.4071 88.5516 45.1434C85.4972 46.829 82.0675 47.68 78.24 47.68C74.4137 47.68 70.9585 46.8295 67.8536 45.1418C64.7951 43.4054 62.3822 41.0376 60.6015 38.027C58.8712 34.9731 58 31.5714 58 27.8C58 24.0261 58.8723 20.6491 60.6015 17.645C62.3836 14.5841 64.7965 12.2184 67.8514 10.5314L67.8558 10.5289C70.961 8.79372 74.4152 7.92 78.24 7.92C82.0649 7.92 85.4927 8.79372 88.5467 10.5258L88.5466 10.5259L88.5566 10.5314C91.6099 12.2175 93.9966 14.5808 95.7301 17.6373Z" stroke="white" stroke-width="2" />
                    <path id="h" d="M168.328 2.6V1.6H167.328H162.072H161.072V2.6V24.064H131.536V2.6V1.6H130.536H125.208H124.208V2.6V53V54H125.208H130.536H131.536V53V30.744H161.072V53V54H162.072H167.328H168.328V53V2.6Z" stroke="white" stroke-width="2" />
                    <path id="n" d="M235.328 2.6V1.6H234.328H229.072H228.072V2.6V40.6284L197.383 1.97816L197.083 1.6H196.6H192.208H191.208V2.6V53V54H192.208H197.536H198.536V53V14.9766L229.152 53.621L229.452 54H229.936H234.328H235.328V53V2.6Z" stroke="white" stroke-width="2" />
                </svg>
                <br><br>
                <svg id="michael-svg" width="382" height="56" viewBox="0 0 382 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="m" d="M55.552 2.6V1.6H54.552H50.16H49.584L49.295 2.0983L28.4837 37.9821L7.46288 2.09458L7.17319 1.6H6.60001H2.20801H1.20801V2.6V53V54H2.20801H7.32001H8.32001V53V16.5717L26.2578 47.0986L26.5478 47.592H27.12H29.64H30.2141L30.5036 47.0962L48.44 16.376V53V54H49.44H54.552H55.552V53V2.6Z" stroke="white" stroke-width="2" />
                    <path id="i" d="M78.208 1.6H77.208V2.6V53V54H78.208H83.536H84.536V53V2.6V1.6H83.536H78.208Z" stroke="white" stroke-width="2" />
                    <path id="c" d="M115.075 50.9947L115.08 50.9971C119.271 53.2926 123.951 54.432 129.096 54.432C132.953 54.432 136.535 53.7888 139.831 52.4904L139.831 52.4904L139.838 52.4875C143.183 51.1396 146.021 49.2093 148.336 46.6931L148.985 45.9871L148.307 45.3089L144.923 41.9249L144.203 41.2048L143.496 41.9379C139.813 45.7577 135.113 47.68 129.312 47.68C125.487 47.68 122.033 46.8063 118.928 45.0711C115.817 43.3328 113.38 40.9631 111.6 37.9523C109.872 34.9488 109 31.5728 109 27.8C109 24.0273 109.872 20.6512 111.6 17.6478C113.38 14.637 115.817 12.2672 118.928 10.5289C122.033 8.79372 125.487 7.92 129.312 7.92C135.066 7.92 139.771 9.81951 143.505 13.5988L144.212 14.3145L144.923 13.6031L148.307 10.2191L148.985 9.54085L148.336 8.83494C146.021 6.31871 143.205 4.41051 139.903 3.10959C136.607 1.81123 133.025 1.168 129.168 1.168C124.023 1.168 119.343 2.30744 115.152 4.6029C110.962 6.89719 107.661 10.0972 105.265 14.1908L105.265 14.1908L105.263 14.1941C102.912 18.2465 101.744 22.79 101.744 27.8C101.744 32.8101 102.912 37.3755 105.26 41.4733L105.264 41.4796L105.268 41.4858C107.663 45.5279 110.937 48.7013 115.075 50.9947Z" stroke="white" stroke-width="2" />
                    <path id="h" d="M209.328 2.6V1.6H208.328H203.072H202.072V2.6V24.064H172.536V2.6V1.6H171.536H166.208H165.208V2.6V53V54H166.208H171.536H172.536V53V30.744H202.072V53V54H203.072H208.328H209.328V53V2.6Z" stroke="white" stroke-width="2" />
                    <path id="a" d="M229.688 54H230.335L230.6 53.4098L236.383 40.536H263.169L268.952 53.4098L269.217 54H269.864H275.48H277.037L276.389 52.5842L253.349 2.18424L253.082 1.6H252.44H247.184H246.542L246.275 2.18424L223.235 52.5842L222.587 54H224.144H229.688ZM239.222 34.216L249.776 10.5953L260.33 34.216H239.222Z" stroke="white" stroke-width="2" />
                    <path id="e" d="M326.848 48.392V47.392H325.848H296.536V30.672H321.6H322.6V29.672V25.136V24.136H321.6H296.536V8.208H324.768H325.768V7.208V2.6V1.6H324.768H290.208H289.208V2.6V53V54H290.208H325.848H326.848V53V48.392Z" stroke="white" stroke-width="2" />
                    <path id="l" d="M346.208 1.6H345.208V2.6V53V54H346.208H379.76H380.76V53V48.392V47.392H379.76H352.536V2.6V1.6H351.536H346.208Z" stroke="white" stroke-width="2" />
                </svg>
                <br><br>
                <svg id="bitancor-svg" width="439" height="56" viewBox="0 0 439 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="b" d="M40.0922 50.3527L40.0943 50.3512C43.5921 47.7931 45.328 44.1437 45.328 39.536C45.328 35.9919 44.3628 33.0112 42.3567 30.6835C40.9038 28.92 38.9989 27.6186 36.6797 26.7573C38.1658 25.8346 39.4083 24.6709 40.394 23.2632C41.9222 21.1016 42.664 18.5167 42.664 15.56C42.664 11.1396 40.9722 7.63517 37.5731 5.17591C34.2656 2.74827 29.683 1.6 23.952 1.6H2.20801H1.20801V2.6V53V54H2.20801H25.392C31.7275 54 36.6788 52.8352 40.0922 50.3527ZM32.4411 10.1805L32.447 10.1848L32.4529 10.1889C34.3605 11.5159 35.336 13.4466 35.336 16.136C35.336 18.8228 34.3615 20.7832 32.447 22.1592C30.4729 23.53 27.5629 24.28 23.592 24.28H8.53601V7.992H23.592C27.562 7.992 30.4689 8.7657 32.4411 10.1805ZM34.9893 45.472C32.9234 46.8493 29.7473 47.608 25.32 47.608H8.53601V30.672H25.32C29.7961 30.672 32.9759 31.4492 35.0124 32.8533C36.9817 34.2111 38 36.2372 38 39.104C38 42.1027 36.9622 44.1567 34.9893 45.472Z" stroke="white" stroke-width="2" />
                    <path id="i" d="M84.288 7.208V8.208H85.288H102V53V54H103H108.328H109.328V53V8.208H126.04H127.04V7.208V2.6V1.6H126.04H85.288H84.288V2.6V7.208Z" stroke="white" stroke-width="2" />
                    <path id="t" d="M139.688 54H140.335L140.6 53.4098L146.383 40.536H173.169L178.952 53.4098L179.217 54H179.864H185.48H187.037L186.389 52.5842L163.349 2.18424L163.082 1.6H162.44H157.184H156.542L156.275 2.18424L133.235 52.5842L132.587 54H134.144H139.688ZM149.222 34.216L159.776 10.5953L170.33 34.216H149.222Z" stroke="white" stroke-width="2" />
                    <path id="a" d="M244.328 2.6V1.6H243.328H238.072H237.072V2.6V40.6284L206.383 1.97817L206.083 1.6H205.6H201.208H200.208V2.6V53V54H201.208H206.536H207.536V53V14.9766L238.152 53.621L238.452 54H238.936H243.328H244.328V53V2.6Z" stroke="white" stroke-width="2" />
                    <path id="n" d="M275.075 50.9947L275.08 50.9971C279.271 53.2926 283.951 54.432 289.096 54.432C292.953 54.432 296.535 53.7888 299.831 52.4904L299.831 52.4904L299.838 52.4875C303.183 51.1396 306.021 49.2093 308.336 46.6931L308.985 45.9871L308.307 45.3089L304.923 41.9249L304.203 41.2048L303.496 41.9379C299.813 45.7577 295.113 47.68 289.312 47.68C285.487 47.68 282.033 46.8063 278.928 45.0711C275.817 43.3328 273.38 40.9631 271.6 37.9523C269.872 34.9488 269 31.5728 269 27.8C269 24.0273 269.872 20.6512 271.6 17.6478C273.38 14.637 275.817 12.2672 278.928 10.5289C282.033 8.79372 285.487 7.92 289.312 7.92C295.066 7.92 299.771 9.81951 303.505 13.5988L304.212 14.3145L304.923 13.6031L308.307 10.2191L308.985 9.54085L308.336 8.83494C306.021 6.31871 303.205 4.41051 299.903 3.10959C296.607 1.81124 293.025 1.168 289.168 1.168C284.023 1.168 279.343 2.30744 275.152 4.6029C270.962 6.89719 267.661 10.0972 265.265 14.1908L265.265 14.1908L265.263 14.1941C262.912 18.2465 261.744 22.79 261.744 27.8C261.744 32.8101 262.912 37.3755 265.26 41.4733L265.264 41.4796L265.268 41.4858C267.663 45.5279 270.937 48.7013 275.075 50.9947Z" stroke="white" stroke-width="2" />
                    <path id="c" d="M334.144 50.9927L334.144 50.9928L334.156 50.9995C338.393 53.2925 343.095 54.432 348.24 54.432C353.384 54.432 358.04 53.2931 362.186 50.9962C366.372 48.7036 369.672 45.5303 372.068 41.4858L372.071 41.4812C374.47 37.3822 375.664 32.814 375.664 27.8C375.664 22.7871 374.471 18.2416 372.07 14.1886C369.674 10.0967 366.374 6.89788 362.186 4.60409C358.041 2.307 353.384 1.168 348.24 1.168C343.092 1.168 338.388 2.33287 334.15 4.67588C329.964 6.9684 326.664 10.1417 324.268 14.1862L324.268 14.1862L324.263 14.1941C321.912 18.2465 320.744 22.79 320.744 27.8C320.744 32.81 321.912 37.3535 324.263 41.4059L324.263 41.4059L324.268 41.4138C326.664 45.4569 329.961 48.6526 334.144 50.9927ZM365.73 17.6373L365.733 17.643C367.463 20.6476 368.336 24.0253 368.336 27.8C368.336 31.5733 367.464 34.9765 365.732 38.0315C363.999 41.0401 361.611 43.4071 358.552 45.1434C355.497 46.829 352.067 47.68 348.24 47.68C344.414 47.68 340.958 46.8295 337.854 45.1418C334.795 43.4054 332.382 41.0376 330.601 38.027C328.871 34.9731 328 31.5715 328 27.8C328 24.0261 328.872 20.6491 330.601 17.645C332.384 14.5841 334.797 12.2184 337.851 10.5314L337.856 10.5289C340.961 8.79372 344.415 7.92 348.24 7.92C352.065 7.92 355.493 8.79373 358.547 10.5258L358.547 10.5259L358.557 10.5314C361.61 12.2175 363.997 14.5808 365.73 17.6373Z" stroke="white" stroke-width="2" />
                    <path id="o" d="M427.809 53.5795L428.108 54H428.624H434.456H436.396L435.27 52.4197L423.726 36.2168C426.983 34.9442 429.572 33.0387 431.446 30.4797C433.607 27.546 434.664 23.9938 434.664 19.88C434.664 14.2512 432.74 9.73065 428.836 6.44309C424.953 3.17347 419.657 1.6 413.072 1.6H394.208H393.208V2.6V53V54H394.208H399.536H400.536V53V38.016H413.072C414.29 38.016 415.475 37.9622 416.627 37.8541L427.809 53.5795ZM423.734 11.2871L423.734 11.2871L423.743 11.294C426.105 13.2263 427.336 16.0348 427.336 19.88C427.336 23.6199 426.11 26.414 423.734 28.4009C421.34 30.4034 417.789 31.48 412.928 31.48H400.536V8.208H412.928C417.789 8.208 421.34 9.28459 423.734 11.2871Z" stroke="white" stroke-width="2" />
                    <path id="r" d="M64.208 1.6H63.208V2.6V53V54H64.208H69.536H70.536V53V2.6V1.6H69.536H64.208Z" stroke="white" stroke-width="2" />
                </svg>


                <div id="logo-container">
                    <a href="src/resume.pdf" target="_blank"><i id="resume" class="fas fa-file-alt fa-3x"></i></a>
                    <a href="https://www.github.com/jomibitancor" target="_blank"><i id="github" class="fab fa-github fa-3x"></i></a>
                    <a href="https://www.linkedin.com/in/john-bitancor-182376157/" target="_blank"><i id="linkedin" class="fab fa-linkedin-in fa-3x"></i></a>
                </div>
            </div>

        </section>
        <section class="section" id="contact_section">
            <div class="form-container">
                <h1>CONTACT ME</h1>
                <form method="POST" action="php/process_email.php">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input class="form-control" type="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="Message">Message</label>
                        <textarea id="message" class="form-control" name="message" rows="4"></textarea>
                    </div>
                    <input type="hidden" id="response" name="response">
                    <input class="btn btn-outline-dark" type="submit" value="Send Form">
                </form>
                <script>
                grecaptcha.ready(function() {
                    grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'homepage'});
                });
                </script>
            </div>
        </section>

        <!-- <section class="section" id="section_2">
            <h1 id="section-header">Websites and Projects</h1>
            <div id="glide-container">
                <div class="glide">
                    <div data-glide-el="track" class="glide__track">
                        <ul class="glide__slides">
                            <li class="glide__slide">
                                <h1>YoungLeaders.World</h1>
                                <img src="src/ylw.png" alt="">
                            </li>
                            <li class="glide__slide">asdasd</li>
                            <li class="glide__slide">asdasdasd</li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>
        <section class="section" id="section_3">
        </section> -->
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="js/fullpage.min.js"></script>
    <script src="js/glide.min.js"></script>
    <script src="js/svg_anim.js"></script>
    <script src="js/media_queries.js"></script>
    <script src="js/app.js"></script>
</body>

</html>