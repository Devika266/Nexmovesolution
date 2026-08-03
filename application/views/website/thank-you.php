<div class="page-wrapper">

    <style>
        .thankyou-section {
            min-height: 100vh;
            background: linear-gradient(135deg, #f5f9ff, #eef5ff);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 80px 0;
        }

        .thankyou-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0,0,0,.08);
            padding: 60px 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .thankyou-card::before {
            content: "";
            position: absolute;
            width: 250px;
            height: 250px;
            background: rgba(13,110,253,.05);
            border-radius: 50%;
            top: -120px;
            right: -120px;
        }

        .success-icon{
            width:110px;
            height:110px;
            background:#0d6efd;
            border-radius:50%;
            display:flex;
            align-items:center;
            justify-content:center;
            margin:0 auto 30px;
            animation: pop .7s ease;
        }

        .success-icon svg{
            width:55px;
            height:55px;
            fill:#fff;
        }

        @keyframes pop{
            0%{
                transform:scale(0);
            }
            70%{
                transform:scale(1.15);
            }
            100%{
                transform:scale(1);
            }
        }

        .thankyou-card h1{
            font-size:48px;
            font-weight:700;
            color:#0d6efd;
        }

        .thankyou-card p{
            color:#6c757d;
            font-size:18px;
            line-height:30px;
        }

        .btn-home{
            padding:14px 35px;
            border-radius:50px;
            font-weight:600;
        }

        .btn-back{
            padding:14px 35px;
            border-radius:50px;
            font-weight:600;
        }

        .redirect-text{
            margin-top:25px;
            color:#888;
            font-size:15px;
        }

        @media(max-width:767px){

            .thankyou-card{
                padding:40px 25px;
            }

            .thankyou-card h1{
                font-size:34px;
            }

            .thankyou-card p{
                font-size:16px;
            }

        }

    </style>

    <section class="thankyou-section">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-7">

                    <div class="thankyou-card">

                        <div class="success-icon">

                            <svg viewBox="0 0 16 16">
                                <path d="M13.485 1.929a.75.75 0 011.06 1.06L6.56 10.975a.75.75 0 01-1.06 0L1.454 6.93a.75.75 0 111.06-1.06l3.516 3.515 7.455-7.456z"/>
                            </svg>

                        </div>

                        <h1>Thank You!</h1>

                        <h4 class="mb-4">
                            Your enquiry has been submitted successfully.
                        </h4>

                        <p>
                            Thank you for contacting
                            <strong>Nexmove Solutions</strong>.
                            <br>
                            We have received your enquiry and one of our
                            experts will get in touch with you shortly.
                        </p>

                        <div class="mt-5 d-flex justify-content-center flex-wrap gap-3">

                            <button onclick="history.back();" class="btn btn-outline-primary btn-back">

                                <i class="fa fa-arrow-left me-2"></i>
                                Go Back

                            </button>

                        </div>

                        <div class="redirect-text">

                            You will be redirected to the homepage in
                            <span id="count">10</span> seconds...

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>

<script>

let time = 10;

const timer = setInterval(function(){

    time--;

    document.getElementById("count").innerHTML = time;

    if(time <= 0){

        clearInterval(timer);

        window.location.href="<?= base_url(); ?>";

    }

},1000);

</script>