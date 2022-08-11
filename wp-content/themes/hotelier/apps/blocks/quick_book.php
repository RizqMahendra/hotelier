<?php

add_action('acf/init', 'quickbook_init');
function quickbook_init()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name' => 'quickbook',
            'title' => __('quickbook Plan'),
            'description' => __('quickbook Block'),
            'category' => 'hotelier_elements',
            'icon' => 'format-image',
            'keywords' => ['quickbook', 'image'],
            'mode' => 'auto',
            'render_callback' => 'quickbook_callback',
        ]);
    }
}

function quickbook_callback($block)
{
    $form = get_field('form'); ?>
    <section class="home-quickbook">
    <form id="propertyQuickbookForm" action="https://be.synxis.com/" novalidate="novalidate">
        <div class="container-fluid">
            <div class="row quickbook-row">
                <div class="col-8 offset-2 col-xl-6 offset-xl-3 quickbook-col">
                    <div class="row row-side-padding">
                        <div class="col-12 booking-title-container">
                            <p>A dream-like illusion awaits</p>
                        </div>
                    </div>
                    <div class="row row-side-padding">
                        <div class="col-4 booking-label-container">
                            <label for="t-input-check-in">Check In</label>
                        </div>
                        <div class="col-4 booking-label-container">
                            <label for="t-input-check-out">Check Out</label>
                        </div>
                    </div>
                    <div class="row row-side-padding">
                        <div class="col-8 booking-input-container">
                            <div id="quickbook-datepicker" class="t-datepicker quickbook-datepicker">
                                <div class="t-check-in quickbook-check-in"><div class="t-dates t-date-check-in">➜<label class="t-date-info-title"></label><span class="t-day-check-in"> 11</span><span class="t-month-check-in"> Aug </span><span class="t-year-check-in"> 2022</span></div><input type="text" class="t-input t-input-check-in" value="2022-08-11" name="t-start"></div>
                                <div class="t-check-out quickbook-check-out"><div class="t-dates t-date-check-out">➜<label class="t-date-info-title"></label><span class="t-day-check-out"> 12</span><span class="t-month-check-out"> Aug </span><span class="t-year-check-out"> 2022</span></div><input type="text" class="t-input t-input-check-out" value="2022-08-12" name="t-end"></div>
                            </div>
                            <input id="quickbook-arrive" type="hidden" name="arrive">
                            <input id="quickbook-depart" type="hidden" name="depart">
                            <input id="quickbook-adult" type="hidden" name="adult" value="2">
                            <input id="quickbook-hotel" type="hidden" name="hotel" value="23470">
                            <input id="quickbook-chain" type="hidden" name="chain" value="9084">
                        </div>
                        <div class="col-4 booking-input-container">
                            <button id="home-quickbook-action" type="submit" class="home-reserve">Check Availability</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </section>
<?php
}
