<?php

add_action('acf/init', 'social_blocks_init');
function social_blocks_init()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name' => 'social-blocks',
            'title' => __('Social Blocks'),
            'description' => __('Social Blocks'),
            'category' => 'hotelier_elements',
            'icon' => 'format-image',
            'keywords' => ['Social'],
            'mode' => 'auto',
            'render_callback' => 'social_blocks_callback',
        ]);
    }
}

function social_blocks_callback($block)
{
    ?>
    <section class="home-social section-padding lazyloaded">
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 offset-1 col-md-10 col-lg-10 col-xl-3 offset-xl-2 p-0 heading-col">
                <div class="heading-wrapper bg-txt-light lazyloaded">
                    <div class="heading-content">
                        <h3 class="section-heading">Share Your <span>Experiences</span></h3>
                        <p class="account">@MayaUbud</p>
                        <p class="hashtag">#MayaExperiences</p>
                    </div>
                </div>
            </div>
            <div class="col-10 offset-1 col-md-10 offset-md-1 col-lg-10 col-xl-5 offset-xl-0 p-0 feed-col">
                <div class="feed-wrapper d-flex justify-content-between justify-content-xl-around flex-wrap">                                            
                        <div class="ig-item lazybg lazyloaded" data-src="https://scontent.cdninstagram.com/v/t51.29350-15/298272312_462920862088936_5178666007361482327_n.jpg?_nc_cat=105&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_eui2=AeFIa3yDKL80MMYQnBDp_UUIlYrvKzhEZTaViu8rOERlNlTohBd5hYQC-Ddl65ksvU3bp-IXrP6kb6A1A7r3r9lN&amp;_nc_ohc=ELKJ9Phmzb4AX-4hxnw&amp;_nc_ht=scontent.cdninstagram.com&amp;edm=AEQ6tj4EAAAA&amp;oh=00_AT9jzIrB2NVvSDl8W1GgbLueJrKKTej1HlkamEIQ8Xnqbw&amp;oe=62F8A90A" style="background-image: url(&quot;https://scontent.cdninstagram.com/v/t51.29350-15/298272312_462920862088936_5178666007361482327_n.jpg?_nc_cat=105&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_eui2=AeFIa3yDKL80MMYQnBDp_UUIlYrvKzhEZTaViu8rOERlNlTohBd5hYQC-Ddl65ksvU3bp-IXrP6kb6A1A7r3r9lN&amp;_nc_ohc=ELKJ9Phmzb4AX-4hxnw&amp;_nc_ht=scontent.cdninstagram.com&amp;edm=AEQ6tj4EAAAA&amp;oh=00_AT9jzIrB2NVvSDl8W1GgbLueJrKKTej1HlkamEIQ8Xnqbw&amp;oe=62F8A90A&quot;);">
                                                            <video height="1080" width="1080" controls="" poster="https://scontent.cdninstagram.com/v/t51.29350-15/298272312_462920862088936_5178666007361482327_n.jpg?_nc_cat=105&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_eui2=AeFIa3yDKL80MMYQnBDp_UUIlYrvKzhEZTaViu8rOERlNlTohBd5hYQC-Ddl65ksvU3bp-IXrP6kb6A1A7r3r9lN&amp;_nc_ohc=ELKJ9Phmzb4AX-4hxnw&amp;_nc_ht=scontent.cdninstagram.com&amp;edm=AEQ6tj4EAAAA&amp;oh=00_AT9jzIrB2NVvSDl8W1GgbLueJrKKTej1HlkamEIQ8Xnqbw&amp;oe=62F8A90A">
                                    <source src="https://video.cdninstagram.com/v/t50.33967-16/298326310_1101830057382403_1262576059140301314_n.mp4?_nc_cat=104&amp;vs=1199820467527871_1025753665&amp;_nc_vs=HBksFQAYJEdDWVp5QkVEVWl6Tkdfb0RBQUppX0lJOGtvVVJicV9FQUFBRhUAAsgBABUAGCRHUGVIelJIbkF2eDhJdkFIQUs2MllzeUtpT2dPYnFfRUFBQUYVAgLIAQAoABgAGwGIB3VzZV9vaWwBMRUAACb0yq7L973jPxUCKAJDMywXQDFVP3ztkWgYEmRhc2hfYmFzZWxpbmVfMV92MREAdQAA&amp;ccb=1-7&amp;_nc_sid=59939d&amp;efg=eyJ2ZW5jb2RlX3RhZyI6InZ0c192b2RfdXJsZ2VuLjcyMC5jbGlwcyJ9&amp;_nc_eui2=AeEQZACHQpaTpViK0kH6ur4etEUxMCSR9h60RTEwJJH2HmA7a7s8mlNIX3H38WpZoehlOntUe0Y8kxz2ZsktOupX&amp;_nc_ohc=zTcsNfkzGU8AX-dQ_7d&amp;_nc_ht=video.cdninstagram.com&amp;edm=AEQ6tj4EAAAA&amp;oh=00_AT-sJzeZObPlt1RcoHYmXwX4fKt-WSC9LJsfPFE55Nh1BA&amp;oe=62F51277&amp;_nc_rid=07ddaaf1b8">
                                </video>
                                                    </div>
                        <div class="ig-item lazybg lazyloaded" data-src="https://scontent.cdninstagram.com/v/t51.2885-15/297991068_743989706864277_6461101878569367462_n.jpg?_nc_cat=109&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_eui2=AeGCsh7f6vz7xZK4-s4H05tF71gv3lEqeWTvWC_eUSp5ZNwdI8AGfAuhtEwBoSSAclw2Y_IJBT0MIscr3r8vKJAU&amp;_nc_ohc=H4d_UHXYGzgAX9y7wfS&amp;_nc_ht=scontent.cdninstagram.com&amp;edm=AEQ6tj4EAAAA&amp;oh=00_AT8-uY5gtVeGigQDwLZD3XsilhPmdyJmTxHV1MmMDVHoqA&amp;oe=62F92224" style="background-image: url(&quot;https://scontent.cdninstagram.com/v/t51.2885-15/297991068_743989706864277_6461101878569367462_n.jpg?_nc_cat=109&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_eui2=AeGCsh7f6vz7xZK4-s4H05tF71gv3lEqeWTvWC_eUSp5ZNwdI8AGfAuhtEwBoSSAclw2Y_IJBT0MIscr3r8vKJAU&amp;_nc_ohc=H4d_UHXYGzgAX9y7wfS&amp;_nc_ht=scontent.cdninstagram.com&amp;edm=AEQ6tj4EAAAA&amp;oh=00_AT8-uY5gtVeGigQDwLZD3XsilhPmdyJmTxHV1MmMDVHoqA&amp;oe=62F92224&quot;);">
                            <a class="" href="https://www.instagram.com/p/Cg_oyBwtxpL/" target="_blank"></a>                        </div>
              
                        <div class="ig-item lazybg lazyloaded" data-src="https://scontent.cdninstagram.com/v/t51.2885-15/297344717_3188978921317972_8852072513003868977_n.jpg?_nc_cat=101&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_eui2=AeHBqlWbKzlbtPbBH9adyV735M_fS0v527vkz99LS_nbu-vPfY19GdAw9XdLXeKBfLbpF7DpHnp6VUpDNUWoz9Lv&amp;_nc_ohc=ZfJ07Dj_dAYAX9LpwKX&amp;_nc_ht=scontent.cdninstagram.com&amp;edm=AEQ6tj4EAAAA&amp;oh=00_AT_aMfmKcInFi1v_fZiEDwVHkJVP8Zru1dyKkugPAm12Cg&amp;oe=62F93435" style="background-image: url(&quot;https://scontent.cdninstagram.com/v/t51.2885-15/297344717_3188978921317972_8852072513003868977_n.jpg?_nc_cat=101&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_eui2=AeHBqlWbKzlbtPbBH9adyV735M_fS0v527vkz99LS_nbu-vPfY19GdAw9XdLXeKBfLbpF7DpHnp6VUpDNUWoz9Lv&amp;_nc_ohc=ZfJ07Dj_dAYAX9LpwKX&amp;_nc_ht=scontent.cdninstagram.com&amp;edm=AEQ6tj4EAAAA&amp;oh=00_AT_aMfmKcInFi1v_fZiEDwVHkJVP8Zru1dyKkugPAm12Cg&amp;oe=62F93435&quot;);">
                            <a class="" href="https://www.instagram.com/p/Cg1VjOytYYl/" target="_blank"></a>                        </div>           
                        <div class="ig-item lazybg lazyloaded" data-src="https://scontent.cdninstagram.com/v/t51.2885-15/296825442_1314720542395975_6919514101886040880_n.jpg?_nc_cat=107&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_eui2=AeHffQihh-HfCp5MSvj9SoxeRgw9x-1vD7JGDD3H7W8PstlPyHx0TSJyJqi1pbq8iFnDVAL7UzaRB_0L45ZVv5Vb&amp;_nc_ohc=xQ1qIrTL6bUAX8eMaiZ&amp;_nc_ht=scontent.cdninstagram.com&amp;edm=AEQ6tj4EAAAA&amp;oh=00_AT86TmFjVOYvr1NojYHIM7xydbE8xRqJG1rfAfSL-ICaXQ&amp;oe=62FA818D" style="background-image: url(&quot;https://scontent.cdninstagram.com/v/t51.2885-15/296825442_1314720542395975_6919514101886040880_n.jpg?_nc_cat=107&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_eui2=AeHffQihh-HfCp5MSvj9SoxeRgw9x-1vD7JGDD3H7W8PstlPyHx0TSJyJqi1pbq8iFnDVAL7UzaRB_0L45ZVv5Vb&amp;_nc_ohc=xQ1qIrTL6bUAX8eMaiZ&amp;_nc_ht=scontent.cdninstagram.com&amp;edm=AEQ6tj4EAAAA&amp;oh=00_AT86TmFjVOYvr1NojYHIM7xydbE8xRqJG1rfAfSL-ICaXQ&amp;oe=62FA818D&quot;);">
                            <a class="" href="https://www.instagram.com/p/CgwL-tKtzSv/" target="_blank"></a>                        </div>
       
                        <div class="ig-item lazybg lazyloaded" data-src="https://scontent.cdninstagram.com/v/t51.2885-15/296299009_766250697911135_2372278684946094622_n.jpg?_nc_cat=109&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_eui2=AeESKvDeuBP1t9z6I6LzYVLWxBpjezGNh3HEGmN7MY2HcZ-Lz5GDKnQNEUph1LVj2Wq9db9fGN8PX63N3oVRlHFR&amp;_nc_ohc=m-R2l15suyMAX_V6nJv&amp;_nc_ht=scontent.cdninstagram.com&amp;edm=AEQ6tj4EAAAA&amp;oh=00_AT9Pm9KYO_31n7ln8tWeBtBB6WPl145EIrmXgozVxDGUNw&amp;oe=62FA2DC9" style="background-image: url(&quot;https://scontent.cdninstagram.com/v/t51.2885-15/296299009_766250697911135_2372278684946094622_n.jpg?_nc_cat=109&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_eui2=AeESKvDeuBP1t9z6I6LzYVLWxBpjezGNh3HEGmN7MY2HcZ-Lz5GDKnQNEUph1LVj2Wq9db9fGN8PX63N3oVRlHFR&amp;_nc_ohc=m-R2l15suyMAX_V6nJv&amp;_nc_ht=scontent.cdninstagram.com&amp;edm=AEQ6tj4EAAAA&amp;oh=00_AT9Pm9KYO_31n7ln8tWeBtBB6WPl145EIrmXgozVxDGUNw&amp;oe=62FA2DC9&quot;);">
                            <a class="" href="https://www.instagram.com/p/CgrCop_NmKv/" target="_blank"></a>                        </div>
    
                        <div class="ig-item lazybg lazyloaded" data-src="https://scontent.cdninstagram.com/v/t51.2885-15/296089878_770502527601036_2031746397355292747_n.jpg?_nc_cat=111&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_eui2=AeGg2zxhSMWo7yWDjlMVZoq-3yXNxpw_EmffJc3GnD8SZ2yZH28-xoyeMA6BmQAPxiuvNbWwtUlq_brL6s7-DbWy&amp;_nc_ohc=yG9YggFj2ywAX-LvQ4-&amp;_nc_ht=scontent.cdninstagram.com&amp;edm=AEQ6tj4EAAAA&amp;oh=00_AT9UadYNwAXZSz8X1AXozDv6JEDri4NUvJZi-O851JjVtw&amp;oe=62FA81F5" style="background-image: url(&quot;https://scontent.cdninstagram.com/v/t51.2885-15/296089878_770502527601036_2031746397355292747_n.jpg?_nc_cat=111&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_eui2=AeGg2zxhSMWo7yWDjlMVZoq-3yXNxpw_EmffJc3GnD8SZ2yZH28-xoyeMA6BmQAPxiuvNbWwtUlq_brL6s7-DbWy&amp;_nc_ohc=yG9YggFj2ywAX-LvQ4-&amp;_nc_ht=scontent.cdninstagram.com&amp;edm=AEQ6tj4EAAAA&amp;oh=00_AT9UadYNwAXZSz8X1AXozDv6JEDri4NUvJZi-O851JjVtw&amp;oe=62FA81F5&quot;);">
                            <a class="" href="https://www.instagram.com/p/Cgl5Db0Nm2E/" target="_blank"></a>                        </div>
     
                                    </div>
            </div>
        </div>
    </div>
</section>

<?php
}
