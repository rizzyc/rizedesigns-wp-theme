<?php
/* Front Page Template */
    get_header();
?>
<div class="home">
    <div class="hero-content-riz">
        <div class="domain-check-component">
            <h1>Enter your website to see if it is available</h1>
            <label for="website"></label>
            <input id="website" name="website"/>
            <div class="home-button-riz">
                <button onclick="checkdomain()" class="btn">Submit</button>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>