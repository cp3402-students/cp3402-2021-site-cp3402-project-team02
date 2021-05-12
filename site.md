# Maintaining the site
Follow the instructions below to maintain the site.

#### Table of Contents  
1. Required plugins
___
## Required plugins
The following plugins must be installed for the website to function as expected. Please install them and follow the extra steps where required.
Plugin Name | Plugin Description | Plugin Link | Extra Steps Required
--------|--------|--------|--------
Font awesome | The official way to use Font Awesome Free or Pro icons on your site, brought to you by the Font Awesome team. | [https://wordpress.org/plugins/font-awesome/](https://wordpress.org/plugins/font-awesome/)| NO
Really Simple SSL | Lightweight plugin without any setup to make your site SSL proof. | [https://wordpress.org/plugins/really-simple-ssl/](https://wordpress.org/plugins/really-simple-ssl/) | NO
WP Pusher | Pain-free deployment of WordPress themes and plugins directly from GitHub. | [https://wppusher.com/](https://wppusher.com/)| YES
Widget for Social Page Feeds | This widget adds a Simple Facebook Page Like widget into your WordPress website sidebar within a few minutes. |[https://wordpress.org/plugins/facebook-pagelike-widget/](https://wordpress.org/plugins/facebook-pagelike-widget/) | YES
Meta Slider | Easy to use slideshow plugin. Create SEO optimised responsive slideshows with Nivo Slider, Flex Slider, Coin Slider and Responsive Slides. | [https://wordpress.org/plugins/ml-slider/](https://wordpress.org/plugins/ml-slider/) | YES

### Extra plugin steps
Follow the steps for each of the below plugins to get them set up properly.
#### WP Pusher
1. Ensure the plugin is installed and activated.

2. In the WordPress admin panel click on the WP Pusher link in the left navigation sidebar.

3. Once in the WP Pusher dashboard complete the following steps.

4. Open the GitHub tab and click the Obtain a GitHub token button and follow the steps.

5. To save your changes click save.

6. Click on the Install Theme link in the left navigation sidebar under WP Pusher.

7. Follow the suggested configuration below.

Setting Name | Suggested Value
-------------|----------------
Repository host | GitHub
Theme repository | Enter the URL of your repository
Repository branch | Enter the name of the branch to track
Repository subdirectory | jazzy
Push to deploy | YES

8. Click Install theme when complete.

#### Widget for Social Page Feeds
1. Ensure the plugin is installed and activated.

2. In the WordPress admin panel and select `Appearance > Widgets` from the left navigation sidebar.

3. Drag the `Facebook Page Like Widget` from Available Widgets to the sidebar card.

4. Settings for the widget can be found by clicking the dropdown arrow icon on the widget card, follow the suggested configuration below.

Setting Name | Suggested Value
-------------|----------------
Title |
Facebook Page Url | https://www.facebook.com/yourfacebookpage
Set Width | 300px
Set Height | 800px

5. To save your changes click save.

#### Meta Slider
1. Ensure the plugin is installed and activated.

2. In the WordPress admin panel click on the MetaSlider link in the left navigation sidebar.

3. Once the MetaSlider dashboard has opened, create a slideshow and add suitable media slides.

4. Settings for the slideshow can be found on the right of the MetaSlider dashboard, follow the suggested configuration below.

##### Regular settings

Setting Name | Suggested Value
-------------|----------------
Slideshow type | Nivo slider
Width | 700px
Height | 180px
Effect | Random
Arrows | YES
Navigation | Hidden

##### Advanced settings

Setting Name | Suggested Value
-------------|----------------
Slideshow type | Nivo slider
100% width | YES
Center align | YES
Auto play | YES
Arrows | YES

5. After the slideshow has been created and the settings have been configured, the shortcode for the slideshow must be added to the `header.php` theme file. On the MetaSlider dashboard, copy the PHP code from the 'How to Use' card. This should something like `<?php echo do_shortcode('[metaslider id=""]'); ?>`

6. To add the PHP code to the theme `header.php` theme file go to the WordPress dashboard and select `Appearance > Theme Editor` from the left navigation sidebar.

7. Open the Theme Header PHP file (`header.php`) and replace `<!-- REPLACE THIS COMMENT WITH META-SLIDER SHORTCODE PHP CODE -->` with the PHP code you copied to your clipboard.

8. Save the theme file and confirm that the plugin is working properly by visiting any page on the website.
