<?php get_header(); ?>

<div class="load-container">
    <div class="loading-screen">
    </div>
</div>
<main data-barba="container" data-barba-namespace="contact">
    <section class="contact pt-small">
        <div class="container">
            <h1 class="contact-title h1">
                get in touch
            </h1>
            <div class="contact-row">
                <div class="contact-info col-4">
                    <form action="" class="contact-form">
                        <span class="contact-text body">Name*</span>
                        <input type="text" name="Name" id="Name">
                        <span class="contact-text body">Company*</span>
                        <input type="text" name="Company" id="Company">
                        <span class="contact-text body">Country*</span>
                        <input type="text" name="Country" id="Country">
                        <span class="contact-text body">Email*</span>
                        <input type="email" name="Email" id="Email">
                        <span class="contact-text body">Message*</span>
                        <textarea></textarea>
                    </form>
                    <a class="btn btn-green col-5">
                        Send
                    </a>
                    <div class="contact-message">
                        <img src="/wp-content/uploads/2022/07/contact-icon.svg" alt="">
                        <div class="contact-text">
                            <h4 class="h4">Contact us</h4>
                            <p class="body">Drop us a message on Whatsapp. We'll rely in 12 hours.</p>
                        </div>
                    </div>
                </div>
                <div class="contact-map col-7">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14906.669178962276!2d106.0625204!3d20.9257011!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11a987dd4f25e566!2sHung%20Yen%20Knitting%20%26%20Dyeing%20Co.ltd!5e0!3m2!1svi!2s!4v1657625780096!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>