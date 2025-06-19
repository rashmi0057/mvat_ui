<?php include_once('header.php') ?>

            <div id="SkipContent"></div>
            <script>
                $(document).ready(function() {
                    $(".scrutiny-list > span").click(function() {
                        $(this).next("ul").slideToggle();
                    });
                });

                function changeLang() {
                    let langElement = $('#changeLang');
                    let currentLang = langElement.text();
                    let newLang = currentLang == '&#2361;&#2367;&#2344;&#2381;&#2342;&#2368;' ? 'hin' : 'en';
                    $.ajax({
                        url: "https://www.hptax.gov.in/change-language",
                        type: 'GET',
                        data: {
                            language: newLang,
                            _token: 'AbU2IbN9rtvLrgxqrIU7M6KzlsZTq4375famDvSX'
                        },
                        success: () => window.location.reload(),
                        error: (xhr) => console.error('Error updating language')
                    });
                }
            </script>

            <!-- my aded slider -->
             <div class="banner-section">
                <div class="main-slider">
                    <div class="item"><img src="images/banner_1.png" alt="HP Banner"></div>
                    <div class="item"><img src="images/banner_1.png" alt="SSP Banner English"></div>
                    <div class="item"><img src="images/banner_1.png " alt="SSP Banner Hindi"></div>
                </div>
            </div>




<!-- <div class="banner-section">
    <div class="main-slider">
        <div class="item">
            <img src="images/images-HP-banner2.jpg" alt="HP Banner" class="img-cover">
        </div>
        <div class="item">
            <img src="images/images-ssp_banner_eng.jpg" alt="SSP Banner English" class="img-cover">
        </div>
        <div class="item">
            <img src="images/images-ssp_banner_hindi.jpg" alt="SSP Banner Hindi" class="img-cover">
        </div>
    </div>
</div> -->





<div class="advisory">
    <ul class="pr-marquee" data-speed="20" data-title="Advisory" data-title-bg="var(--color1)" data-bg="linear-gradient(0deg, #dea149, #ffd391, #dea149)" data-color="#fff">
                    <li><a href="https://www.hptax.gov.in/public/notifications/1748863583683d8a5fe6043.pdf" target="_blank"> ::
                    Public Notice for Re-Allotment of Excise Vends of District Mandi and Kullu</a></li>
                    <li><a href="https://www.hptax.gov.in/public/notifications/1747722014682c1f1e8e2e9.pdf" target="_blank"> ::
                    Tentative Seniority List of JOA IT as on 30-04-2025</a></li>
                    <li><a href="https://www.hptax.gov.in/public/notifications/174747501468285a46eefce.pdf" target="_blank"> ::
                    Result ASTEO ETI</a></li>
                    <li><a href="https://www.hptax.gov.in/public/notifications/17462664616815e95ddb217.pdf" target="_blank"> ::
                    Revised MRP to be printed on  Labels of Beer Brands</a></li>
                    <li><a href="https://www.hptax.gov.in/public/notifications/17454784036809e303b1af1.pdf" target="_blank"> ::
                    Regarding amendment in syllabus of IAS-HAS-Tehsildar-Police and Excise Taxation</a></li>
                    <li><a href="https://www.hptax.gov.in/public/notifications/174376563367efc0814dccf.pdf" target="_blank"> ::
                    MRP Country Liquor for the year 2025-26</a></li>
                    <li><a href="https://www.hptax.gov.in/public/notifications/174298630367e3dc3f2b23f.pdf" target="_blank"> ::
                    Office order of JAO IT</a></li>
                    <li><a href="https://www.hptax.gov.in/public/notifications/174237921867da98d2cb9b6.pdf" target="_blank"> ::
                    Call Letter for Selection of person with Distablities for filling up 04 post of Excise and Taxation Inspector</a></li>
                    <li><a href="https://www.hptax.gov.in/public/notifications/174185674567d29fe98db9e.pdf" target="_blank"> ::
                    Excise Policy for Year 2025-26</a></li>
            </ul>
</div>
<div class="container-fluid1">
    <div class="layout">
        <script src="js/iframe-sso-iframe.js" defer></script>
    <?php  include_once('left-menu.php') ?>
        <div class="main-right">

            
            <!--small 8 card section aded by ganesear -->

            <div class="card-container" >

                <div class="box-item">
                    <div class="flip-box">
                        <div class="flip-box-front text-center bg-white border shadow-sm">
                            <div class="inner">
                                <div class="p-4">
                                    <img src="images/gst-logo.png" alt="Logo 1" height="100" />
                                    <div class="card-title mt-3">GST e-Services (I)</div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-box-back text-center bg-light shadow border">
                            <div class="inner">
                                <div class="fs-5">
                                    <div class="p-2"><a href="#">GST Registration</a></div>
                                    <div class="p-2"><a href="#">Returns Filing</a></div>
                                    <div class="p-2"><a href="#">Payment Dashboard</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-item">
                    <div class="flip-box">
                        <div class="flip-box-front text-center bg-white border shadow-sm">
                            <div class="inner">
                                <div class="p-4">
                                    <img src="images/vat-logo.jpg" alt="Logo 1" height="100" />
                                    <div class="card-title mt-3">VAT & Other Acts (I)</div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-box-back text-center bg-light shadow border">
                            <div class="inner">
                                <div class="fs-5">
                                    <div class="p-2"><a href="#">VAT Login</a></div>
                                    <div class="p-2"><a href="#">Form Download</a></div>
                                    <div class="p-2"><a href="#">Dealer Search</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-item">
                    <div class="flip-box">
                        <div class="flip-box-front text-center bg-white border shadow-sm">
                            <div class="inner">
                                <div class="p-4">
                                    <img src="images/gst-logo.png" alt="Logo 1" height="100" />
                                    <div class="card-title mt-3">GST e-Services (II)</div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-box-back text-center bg-light shadow border">
                            <div class="inner">
                                <div class="fs-5">
                                    <div class="p-2"><a href="#">GST Dashboard</a></div>
                                    <div class="p-2"><a href="#">Refund Status</a></div>
                                    <div class="p-2"><a href="#">Challan Inquiry</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-item">
                    <div class="flip-box">
                        <div class="flip-box-front text-center bg-white border shadow-sm">
                            <div class="inner">
                                <div class="p-4">
                                    <img src="images/vat-logo.jpg" alt="Logo 1" height="100" />
                                    <div class="card-title mt-3">VAT & Other Acts (II)</div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-box-back text-center bg-light shadow border">
                            <div class="inner">
                                <div class="fs-5">
                                    <div class="p-2"><a href="#">TIN Verification</a></div>
                                    <div class="p-2"><a href="#">Taxpayer Details</a></div>
                                    <div class="p-2"><a href="#">Penalty Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-item">
                    <div class="flip-box">
                        <div class="flip-box-front text-center bg-white border shadow-sm">
                            <div class="inner">
                                <div class="p-4">
                                    <img src="images/faq-logo.png" alt="Logo 1" height="100" />
                                    <div class="card-title mt-3">FAQ</div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-box-back text-center bg-light shadow border">
                            <div class="inner">
                                <div class="fs-5">
                                    <div class="p-2"><a href="#">General Queries</a></div>
                                    <div class="p-2"><a href="#">GST Questions</a></div>
                                    <div class="p-2"><a href="#">Help Videos</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-item">
                    <div class="flip-box">
                        <div class="flip-box-front text-center bg-white border shadow-sm">
                            <div class="inner">
                                <div class="p-4">
                                    <img src="images/kyo-logo.png" alt="Logo 1" height="100" />
                                    <div class="card-title mt-3">Know Your Officer</div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-box-back text-center bg-light shadow border">
                            <div class="inner">
                                <div class="fs-5">
                                    <div class="p-2"><a href="#">Officer Details</a></div>
                                    <div class="p-2"><a href="#">Jurisdiction</a></div>
                                    <div class="p-2"><a href="#">Zonal Contacts</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-item">
                    <div class="flip-box">
                        <div class="flip-box-front text-center bg-white border shadow-sm">
                            <div class="inner">
                                <div class="p-4">
                                    <img src="images/help-logo.jpg" alt="Logo 1" height="100" />
                                    <div class="card-title mt-3">May I Help You?</div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-box-back text-center bg-light shadow border">
                            <div class="inner">
                                <div class="fs-5">
                                    <div class="p-2"><a href="#">Support Desk</a></div>
                                    <div class="p-2"><a href="#">Raise a Ticket</a></div>
                                    <div class="p-2"><a href="#">Live Chat</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-item">
                    <div class="flip-box">
                        <div class="flip-box-front text-center bg-white border shadow-sm">
                            <div class="inner">
                                <div class="p-4">
                                    <img src="images/whatsNew-logo.webp" alt="Logo 1" height="100" />
                                    <div class="card-title mt-3">What’s New</div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-box-back text-center bg-light shadow border">
                            <div class="inner">
                                <div class="fs-5">
                                    <div class="p-2"><a href="#">Support Desk</a></div>
                                    <div class="p-2"><a href="#">Raise a Ticket</a></div>
                                    <div class="p-2"><a href="#">Live Chat</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-item">
                    <div class="flip-box">
                        <div class="flip-box-front text-center bg-white border shadow-sm">
                            <div class="inner">
                                <div class="p-4">
                                    <img src="images/contact-logo.png" alt="Logo 1" height="100" />
                                    <div class="card-title mt-3">Contact us!</div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-box-back text-center bg-light shadow border">
                            <div class="inner">
                                <div class="fs-5">
                                    <div class="p-2"><a href="#">Support Desk</a></div>
                                    <div class="p-2"><a href="#">Raise a Ticket</a></div>
                                    <div class="p-2"><a href="#">Live Chat</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="card">
                <div class="card-header">
                    <img src="images/dept-logo.png" alt="Logo 1">
                    <div class="card-title">GST e-Services (I)</div>
                </div>
                <div class="card-description">
                    <a href="#">GST Registration</a>
                    <a href="#">Returns Filing</a>
                    <a href="#">Payment Dashboard</a>
                </div>
                </div>

                <div class="card">
                <div class="card-header">
                    <img src="images/dept-logo.png" alt="Logo 2">
                    <div class="card-title">VAT & Other Acts (I)</div>
                </div>
                <div class="card-description">
                    <a href="#">VAT Login</a>
                    <a href="#">Form Download</a>
                    <a href="#">Dealer Search</a>
                </div>
                </div>
 -->
                <!-- <div class="card">
                <div class="card-header">
                    <img src="images/dept-logo.png" alt="Logo 3">
                    <div class="card-title">GST e-Services (II)</div>
                </div>
                <div class="card-description">
                    <a href="#">GST Dashboard</a>
                    <a href="#">Refund Status</a>
                    <a href="#">Challan Inquiry</a>
                </div>
                </div> -->
<!-- 
                <div class="card">
                <div class="card-header">
                    <img src="images/dept-logo.png" alt="Logo 4">
                    <div class="card-title">VAT & Other Acts (II)</div>
                </div>
                <div class="card-description">
                    <a href="#">TIN Verification</a>
                    <a href="#">Taxpayer Details</a>
                    <a href="#">Penalty Details</a>
                </div>
                </div> -->
<!-- 
                <div class="card">
                <div class="card-header">
                    <img src="images/images-logo.png" alt="Logo 5">
                    <div class="card-title">FAQ</div>
                </div>
                <div class="card-description">
                    <a href="#">General Queries</a>
                    <a href="#">GST Questions</a>
                    <a href="#">Help Videos</a>
                </div>
                </div> -->
<!-- 
                <div class="card">
                <div class="card-header">
                    <img src="images/dept-logo.png" alt="Logo 6">
                    <div class="card-title">Know Your Officer</div>
                </div>
                <div class="card-description">
                    <a href="#">Officer Details</a>
                    <a href="#">Jurisdiction</a>
                    <a href="#">Zonal Contacts</a>
                </div>
                </div> -->

                <!-- <div class="card">
                <div class="card-header">
                    <img src="images/dept-logo.png" alt="Logo 7">
                    <div class="card-title">May I Help You?</div>
                </div>
                <div class="card-description">
                    <a href="#">Support Desk</a>
                    <a href="#">Raise a Ticket</a>
                    <a href="#">Live Chat</a>
                </div>
                </div>

                <div class="card">
                <div class="card-header">
                    <img src="images/dept-logo.png" alt="Logo 9">
                    <div class="card-title">What’s New</div>
                </div>
                <div class="card-description">
                    <a href="#">Support Desk</a>
                    <a href="#">Raise a Ticket</a>
                    <a href="#">Live Chat</a>
                </div>
                </div>
 
                <div class="card">
                <div class="card-header">
                    <img src="images/dept-logo.png" alt="Logo 9">
                    <div class="card-title">Contact us!</div>
                </div>
                <div class="card-description">
                    <a href="#">Support Desk</a>
                    <a href="#">Raise a Ticket</a>
                    <a href="#">Live Chat</a>
                </div>
                </div>
-->

            </div>


            <!-- ends here -->



                <!--1st big 4 card section aded by ganeswar -->
    <div class="bg-light">

    <div class="container px-4 py-5 bg-light">
        <h2 class="text-center fw-bold text-dark fs-2 mb-5">In Focus</h2>

        <div class="row g-4">
        <!-- CARD 1 -->
        <div class="col-12 col-md-6 col-lg-3">
            <div class="custom-card h-100 d-flex flex-column shadow hover-shadow">
            <div class="position-relative mx-3 mt-n4 overflow-hidden rounded shadow-sm card-image">
                <img src="images/business_1.jpg" class="w-100 h-100 object-fit-cover" alt="Card Image 1">
            </div>
            <div class="p-4 flex-grow-1">
                <h5 class="mb-3 fw-semibold text-dark">Ease of Doing Business</h5>
                <div class="card-links d-flex flex-column gap-1">
                <a href="#">World Bank Report</a>
                <a href="#">Official Poster</a>
                </div>
            </div>
            <div class="p-4 pt-0">
                <button class="custom-btn w-100 d-flex justify-content-center align-items-center gap-2">
                Read More
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="icon">
                    <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </button>
            </div>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-12 col-md-6 col-lg-3">
            <div class="custom-card h-100 d-flex flex-column shadow hover-shadow">
            <div class="position-relative mx-3 mt-n4 overflow-hidden rounded shadow-sm card-image">
                <img src="images/even2.jpeg" class="w-100 h-100 object-fit-cover" alt="Card Image 2">
            </div>
            <div class="p-4 flex-grow-1">
                <h5 class="mb-3 fw-semibold text-dark">Important Events</h5>
                <div class="card-links d-flex flex-column gap-1">
                <a href="#">Mahagst Profile Photo</a>
                <a href="#">Upcoming Department Events</a>
                </div>
            </div>
            <div class="p-4 pt-0">
                <button class="custom-btn w-100 d-flex justify-content-center align-items-center gap-2">
                Read More
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="icon">
                    <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </button>
            </div>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-12 col-md-6 col-lg-3">
            <div class="custom-card h-100 d-flex flex-column shadow hover-shadow">
            <div class="position-relative mx-3 mt-n4 overflow-hidden rounded shadow-sm card-image">
                <img src="images/award_cards3.jpeg" class="w-100 h-100 object-fit-cover" alt="Card Image 3">
            </div>
            <div class="p-4 flex-grow-1">
                <h5 class="mb-3 fw-semibold text-dark">Awards & Achievements</h5>
                <div class="card-links d-flex flex-column gap-1">
                <a href="#">TIOL Award 2023</a>
                <a href="#">Skoch Merit 2014</a>
                </div>
            </div>
            <div class="p-4 pt-0">
                <button class="custom-btn w-100 d-flex justify-content-center align-items-center gap-2">
                Read More
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="icon">
                    <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </button>
            </div>
            </div>
        </div>

        <!-- CARD 4 -->
        <div class="col-12 col-md-6 col-lg-3">
            <div class="custom-card h-100 d-flex flex-column shadow hover-shadow">
            <div class="position-relative mx-3 mt-n4 overflow-hidden rounded shadow-sm card-image">
                <img src="images/news1.jpeg" class="w-100 h-100 object-fit-cover" alt="Card Image 4">
            </div>
            <div class="p-4 flex-grow-1">
                <h5 class="mb-3 fw-semibold text-dark">News and Media</h5>
                <div class="card-links d-flex flex-column gap-1">
                <a href="#">Official Media Updates</a>
                <a href="#">Press Releases</a>
                </div>
            </div>
            <div class="p-4 pt-0">
                <button class="custom-btn w-100 d-flex justify-content-center align-items-center gap-2">
                Read More
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="icon">
                    <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </button>
            </div>
            </div>
        </div>
        </div>
    </div>

    </div>


    <!-- 2nd line 4 cards -->
     <div class="bg-light">

    <div class="container px-4 py-5 bg-light">
        <h2 class="text-center fw-bold text-dark fs-2 mb-5">Information At a Glance</h2>

        <div class="row g-4">
        <!-- CARD 1 -->
        <div class="col-12 col-md-6 col-lg-3">
            <div class="custom-card h-100 d-flex flex-column shadow hover-shadow">
            <div class="position-relative mx-3 mt-n4 overflow-hidden rounded shadow-sm card-image">
                <img src="images/business_1.jpg" class="w-100 h-100 object-fit-cover" alt="Card Image 1">
            </div>
            <div class="p-4 flex-grow-1">
                <h5 class="mb-3 fw-semibold text-dark">Ease of Doing Business</h5>
                <div class="card-links d-flex flex-column gap-1">
                <a href="#">World Bank Report</a>
                <a href="#">Official Poster</a>
                </div>
            </div>
            <div class="p-4 pt-0">
                <button class="custom-btn w-100 d-flex justify-content-center align-items-center gap-2">
                Read More
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="icon">
                    <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </button>
            </div>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-12 col-md-6 col-lg-3">
            <div class="custom-card h-100 d-flex flex-column shadow hover-shadow">
            <div class="position-relative mx-3 mt-n4 overflow-hidden rounded shadow-sm card-image">
                <img src="images/even2.jpeg" class="w-100 h-100 object-fit-cover" alt="Card Image 2">
            </div>
            <div class="p-4 flex-grow-1">
                <h5 class="mb-3 fw-semibold text-dark">Important Events</h5>
                <div class="card-links d-flex flex-column gap-1">
                <a href="#">Mahagst Profile Photo</a>
                <a href="#">Upcoming Department Events</a>
                </div>
            </div>
            <div class="p-4 pt-0">
                <button class="custom-btn w-100 d-flex justify-content-center align-items-center gap-2">
                Read More
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="icon">
                    <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </button>
            </div>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-12 col-md-6 col-lg-3">
            <div class="custom-card h-100 d-flex flex-column shadow hover-shadow">
            <div class="position-relative mx-3 mt-n4 overflow-hidden rounded shadow-sm card-image">
                <img src="images/award_cards3.jpeg" class="w-100 h-100 object-fit-cover" alt="Card Image 3">
            </div>
            <div class="p-4 flex-grow-1">
                <h5 class="mb-3 fw-semibold text-dark">Awards & Achievements</h5>
                <div class="card-links d-flex flex-column gap-1">
                <a href="#">TIOL Award 2023</a>
                <a href="#">Skoch Merit 2014</a>
                </div>
            </div>
            <div class="p-4 pt-0">
                <button class="custom-btn w-100 d-flex justify-content-center align-items-center gap-2">
                Read More
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="icon">
                    <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </button>
            </div>
            </div>
        </div>

        <!-- CARD 4 -->
        <div class="col-12 col-md-6 col-lg-3">
            <div class="custom-card h-100 d-flex flex-column shadow hover-shadow">
            <div class="position-relative mx-3 mt-n4 overflow-hidden rounded shadow-sm card-image">
                <img src="images/news1.jpeg" class="w-100 h-100 object-fit-cover" alt="Card Image 4">
            </div>
            <div class="p-4 flex-grow-1">
                <h5 class="mb-3 fw-semibold text-dark">News and Media</h5>
                <div class="card-links d-flex flex-column gap-1">
                <a href="#">Official Media Updates</a>
                <a href="#">Press Releases</a>
                </div>
            </div>
            <div class="p-4 pt-0">
                <button class="custom-btn w-100 d-flex justify-content-center align-items-center gap-2">
                Read More
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="icon">
                    <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </button>
            </div>
            </div>
        </div>
        </div>
    </div>

    </div>



    <!-- ends here -->



            <div class="welcome-sec">
                <div class="row">
                    
                    <div class="col-md-6">
                        <ul class="pr-marquee pr-ticker" data-speed="30" data-title="Suggestions & Feedback" data-height="216">
                                                            <li><a href="https://www.hptax.gov.in/public/notifications/1748863583683d8a5fe6043.pdf" target="_blank"> ::
                                        Public Notice for Re-Allotment of Excise Vends of District Mandi and Kullu </a><img src="images/images-new-icon.gif" alt="new" style="height:20px"></li>
                                                            <li><a href="https://www.hptax.gov.in/public/notifications/1747722014682c1f1e8e2e9.pdf" target="_blank"> ::
                                        Tentative Seniority List of JOA IT as on 30-04-2025 </a></li>
                                                            <li><a href="https://www.hptax.gov.in/public/notifications/174747501468285a46eefce.pdf" target="_blank"> ::
                                        Result ASTEO ETI </a></li>
                                                            <li><a href="https://www.hptax.gov.in/public/notifications/17462664616815e95ddb217.pdf" target="_blank"> ::
                                        Revised MRP to be printed on  Labels of Beer Brands </a></li>
                                                            <li><a href="https://www.hptax.gov.in/public/notifications/17454784036809e303b1af1.pdf" target="_blank"> ::
                                        Regarding amendment in syllabus of IAS-HAS-Tehsildar-Police and Excise Taxation </a></li>
                                                            <li><a href="https://www.hptax.gov.in/public/notifications/174376563367efc0814dccf.pdf" target="_blank"> ::
                                        MRP Country Liquor for the year 2025-26 </a></li>
                                                            <li><a href="https://www.hptax.gov.in/public/notifications/174298630367e3dc3f2b23f.pdf" target="_blank"> ::
                                        Office order of JAO IT </a></li>
                                                            <li><a href="https://www.hptax.gov.in/public/notifications/174237921867da98d2cb9b6.pdf" target="_blank"> ::
                                        Call Letter for Selection of person with Distablities for filling up 04 post of Excise and Taxation Inspector </a></li>
                                                            <li><a href="https://www.hptax.gov.in/public/notifications/174185674567d29fe98db9e.pdf" target="_blank"> ::
                                        Excise Policy for Year 2025-26 </a></li>
                                                    </ul>
                    </div>

                    <div class="col-md-6">
                        <ul class="pr-marquee pr-ticker" data-speed="30" data-title="What's New" data-height="216">
                                                            <li><a href="https://www.hptax.gov.in/public/notifications/1748863583683d8a5fe6043.pdf" target="_blank"> ::
                                        Public Notice for Re-Allotment of Excise Vends of District Mandi and Kullu </a><img src="images/images-new-icon.gif" alt="new" style="height:20px"></li>
                                                            <li><a href="https://www.hptax.gov.in/public/notifications/1747722014682c1f1e8e2e9.pdf" target="_blank"> ::
                                        Tentative Seniority List of JOA IT as on 30-04-2025 </a></li>
                                                            <li><a href="https://www.hptax.gov.in/public/notifications/174747501468285a46eefce.pdf" target="_blank"> ::
                                        Result ASTEO ETI </a></li>
                                                            <li><a href="https://www.hptax.gov.in/public/notifications/17462664616815e95ddb217.pdf" target="_blank"> ::
                                        Revised MRP to be printed on  Labels of Beer Brands </a></li>
                                                            <li><a href="https://www.hptax.gov.in/public/notifications/17454784036809e303b1af1.pdf" target="_blank"> ::
                                        Regarding amendment in syllabus of IAS-HAS-Tehsildar-Police and Excise Taxation </a></li>
                                                            <li><a href="https://www.hptax.gov.in/public/notifications/174376563367efc0814dccf.pdf" target="_blank"> ::
                                        MRP Country Liquor for the year 2025-26 </a></li>
                                                            <li><a href="https://www.hptax.gov.in/public/notifications/174298630367e3dc3f2b23f.pdf" target="_blank"> ::
                                        Office order of JAO IT </a></li>
                                                            <li><a href="https://www.hptax.gov.in/public/notifications/174237921867da98d2cb9b6.pdf" target="_blank"> ::
                                        Call Letter for Selection of person with Distablities for filling up 04 post of Excise and Taxation Inspector </a></li>
                                                            <li><a href="https://www.hptax.gov.in/public/notifications/174185674567d29fe98db9e.pdf" target="_blank"> ::
                                        Excise Policy for Year 2025-26 </a></li>
                                                    </ul>
                    </div>
                </div>
            </div>
            <div class="sec-2">
                <div class="block-1">
                    <h2>General</h2>
                    <ul>
                        <li><a href="postquery-view.html">Post Query</a></li>
                        <li><a href="feedback.html">Feedback</a></li>
                        <li><a href="checklist-form.html">Checklist &amp; Procedure</a></li>
                        <li><a href="https://www.mygov.in/group-issue/simplified-gst-return-principles-and-draft-return-formats/">Draft
                                GST Return Design, Principles And Formats</a></li>
                        <li><a href="#">Comment / Feedback input on GST Returns and Design forms (please be sent
                                in prescribed format only by email.
                                <ol>
                                    <li>To GST Council Secretariat at gstc.secretariat[at]gov[dot]in</li>
                                    <li>To ETD HP rakesh.sharma[at]mailhptax[dot]gov[dot]in , info-gst-hp[at]hp[dot]gov[dot]in)</li>
                                </ol>
                            </a></li>
                        <li><a href="https://parivahan.gov.in/parivahan/">Transport Department <small>W.e.f 1st January
                                    2022 PGT/AGT dealers are requested to do the payment from "TRANSPORT DEPARTMENT"
                                    website</small></a></li>
                    </ul>
                </div>
                <div class="block-1">
                    <h2>View</h2>
                    <ul>
                        <li><a href="https://www.gst.gov.in/help/helpmodules/">GST FAQ</a></li>
                        <li><a href="publicFaq.html">VAT FAQ</a></li>
                        <li><a href="tenders.html">Tenders</a></li>
                        <li><a href="advertisement.html">Advertisement</a></li>
                    </ul>
                </div>
                <div class="block-1">
                    <h2>Form Finder</h2>
                    <ul>
                        <li><a href="https://www.gst.gov.in/quicklinks/downloads-utilities">GST Form</a></li>
                        <li><a href="vat-forms.html">VAT Forms</a></li>
                        <li><a href="cst-forms.html">CST Forms</a></li>
                        <li><a href="cgcr-form.html">CGCR Forms</a></li>
                        <li><a href="pgt-forms.html">PGT Forms</a></li>
                        <li><a href="mtp-forms.html">M&amp;TP Forms</a></li>
                        <li><a href="e-services-forms.html">Downloads</a></li>
                    </ul>
                </div>
                <div class="block-1">
                    <h2>Tax Haat Corner</h2>
                    <ul>
                        <li><a href="https://cmsankalp.hp.gov.in/ExciseTax/QueryRegister.aspx">Submit Query</a></li>
                        <li><a href="https://cmsankalp.hp.gov.in/ExciseAndTaxgrievance-status.aspx">View Status of
                                Query</a></li>
                    </ul>
                </div>
            </div>
            <div class="quote">
                <div class=""><i class="priya-quote-left"></i> In case you receive any e-mail from an address
                    appearing to be sent by ETD, advising you of any changes made in your personal information, account
                    details or information on your user id and password of web portal, PLEASE DO NOT RESPOND. It is
                    ETD's policy not to seek/send such information through email. If you have already disclosed your
                    password please change it immediately. You are strongly advised to NOT provide your user id and
                    password to anyone. <i class="priya-quote-right"></i></div>
            </div>
        </div>
    </div>
</div>


<?php include_once('footer.php') ?>