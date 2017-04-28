<?php
/* Front Page Template */
    get_header();
?>
<div class="home">
    <div class="hero-content-riz">
        <div class="a-frame">
            <h1>Every Business needs a website</h1>
            <label for="website"></label>
            <input id="website" name="website"/>
            <div class="home-button-riz">
                <button onclick="checkdomain()" class="btn">Submit</button>
            </div>
        </div>
    </div>
    <div class="services-panel-riz">
        <div class="services-panel-riz--inner aligncenter">
            <ul class="service-items">
                <li>
                    <h3>Information</h3>
                    <img src="http://placehold.it/150x150"/>
                    <div class="service-info-riz">
                        lipsum blah blah
                    </div>
                </li>
                            <li>
                    <h3>Information</h3>
                    <img src="http://placehold.it/150x150"/>
                    <div class="service-info-riz">
                        lipsum blah blah
                    </div>
                </li>
                            <li>
                    <h3>Information</h3>
                    <img src="http://placehold.it/150x150"/>
                    <div class="service-info-riz">
                        lipsum blah blah
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php get_footer(); ?>