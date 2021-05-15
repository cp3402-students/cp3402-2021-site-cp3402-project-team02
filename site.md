# Maintaining the site
Follow the instructions below to maintain the site.

## Table of contents  
1. [Required plugins](#required-plugins)
2. [Footer customisation](#footer-customisation)
3. [Media player customisation](#media-player-customisation)
___
## Required plugins
The following plugins must be installed for the website to function as expected. Please install them and follow the extra steps where required.
Plugin Name | Plugin Description | Plugin Link | Extra Steps Required
--------|--------|--------|--------
**Font awesome** | The official way to use Font Awesome Free or Pro icons on your site, brought to you by the Font Awesome team. | [https://wordpress.org/plugins/font-awesome/](https://wordpress.org/plugins/font-awesome/)| NO
**Really Simple SSL** | Lightweight plugin without any setup to make your site SSL proof. | [https://wordpress.org/plugins/really-simple-ssl/](https://wordpress.org/plugins/really-simple-ssl/) | NO
**WP Pusher** | Pain-free deployment of WordPress themes and plugins directly from GitHub. | [https://wppusher.com/](https://wppusher.com/)| YES
**Widget for Social Page Feeds** | This widget adds a Simple Facebook Page Like widget into your WordPress website sidebar within a few minutes. |[https://wordpress.org/plugins/facebook-pagelike-widget/](https://wordpress.org/plugins/facebook-pagelike-widget/) | YES
**Meta Slider** | Easy to use slideshow plugin. Create SEO optimised responsive slideshows with Nivo Slider, Flex Slider, Coin Slider and Responsive Slides. | [https://wordpress.org/plugins/ml-slider/](https://wordpress.org/plugins/ml-slider/) | YES

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
**Repository host** | GitHub
**Theme repository** | Enter the URL of your repository
**Repository branch** | Enter the name of the branch to track
**Repository subdirectory** | jazzy
**Push to deploy** | YES

8. Click Install theme when complete.

#### Widget for Social Page Feeds
1. Ensure the plugin is installed and activated.

2. In the WordPress admin panel and select `Appearance > Widgets` from the left navigation sidebar.

3. Drag the `Facebook Page Like Widget` from Available Widgets to the sidebar card.

4. Settings for the widget can be found by clicking the dropdown arrow icon on the widget card, follow the suggested configuration below.

Setting Name | Suggested Value
-------------|----------------
**Title** |
**Facebook Page Url** | https://www.facebook.com/yourfacebookpage
**Set Width** | 300px
**Set Height** | 800px

5. To save your changes click save.

#### Meta Slider
1. Ensure the plugin is installed and activated.

2. In the WordPress admin panel click on the MetaSlider link in the left navigation sidebar.

3. Once the MetaSlider dashboard has opened, create a slideshow and add suitable media slides.

4. Settings for the slideshow can be found on the right of the MetaSlider dashboard, follow the suggested configuration below.

##### Regular settings

Setting Name | Suggested Value
-------------|----------------
**Slideshow type** | Nivo slider
**Width** | 700px
**Height** | 180px
**Effect** | Random
**Arrows** | YES
**Navigation** | Hidden

##### Advanced settings

Setting Name | Suggested Value
-------------|----------------
**Slideshow type** | Nivo slider
**100% width** | YES
**Center align** | YES
**Auto play** | YES
**Arrows** | YES

5. After the slideshow has been created and the settings have been configured, the id of the slideshow must be added to the `Customizer > Image Slider` settings. On the MetaSlider dashboard, copy the only the id value from the 'How to Use' card. Do not copy the entire PHP code.

6. To add the slideshow id to the site go to the WordPress dashboard and select `Customizer > Image Slider` from the left navigation sidebar.

7. Enter the id of the slideshow into the `Slider ID` field.

## Footer Customisation
The Jazzy theme allows for several links that are represented visually with an icon to be added to the footer. Follow the steps below to do this.

1. In the WordPress admin panel and select `Appearance > Customize > Footer Socials` from the left navigation sidebar.

2. Add social and contact information into the relevant fields.

3. Click publish to save and publish.

## Media Player Customisation 
The Jazzy theme allows for an audio file to be added below the image slider banner. Follow the steps below to do this.

1. In the WordPress admin panel select `Customize > Media Player` from the left navigation sidebar.

2. Enter the URL of the `MP3` audio file you wish to add into the `URL` field. 
