# Maintaining the site
The following `site.md` file contains instructions on how a website maintainer can maintain a website that uses the Jazzy WordPress theme.

## Table of contents  
1. [Required plugins](#required-plugins)
2. [Customising footer icons](#customising-footer-icons)
3. [Adding media to the media player](#adding-media-to-the-media-player)
4. [Changing the logo](#changing-the-logo)
5. [Creating navigation menu](#creating-navigation-menu)
6. [Creating a page](#creating-a-page)
7. [Creating a post](#creating-a-post)
8. [Adding a slideshow](#adding-a-slideshow)
9. [Adding a Facebook feed](#adding-a-facebook-feed)
10. [Listening for repository changes](#listening-for-repository-changes)
___
## Required plugins
The following plugins must be installed for the website to function as expected.

Plugin Name | Plugin Description | Plugin Link
--------|--------|--------
**Font awesome** | The official way to use Font Awesome Free or Pro icons on your site, brought to you by the Font Awesome team. | [https://wordpress.org/plugins/font-awesome/](https://wordpress.org/plugins/font-awesome/)
**Really Simple SSL** | Lightweight plugin without any setup to make your site SSL proof. | [https://wordpress.org/plugins/really-simple-ssl/](https://wordpress.org/plugins/really-simple-ssl/)
**WP Pusher** | Pain-free deployment of WordPress themes and plugins directly from GitHub. | [https://wppusher.com/](https://wppusher.com/)
**Widget for Social Page Feeds** | This widget adds a Simple Facebook Page Like widget into your WordPress website sidebar within a few minutes. |[https://wordpress.org/plugins/facebook-pagelike-widget/](https://wordpress.org/plugins/facebook-pagelike-widget/)
**Meta Slider** | Easy to use slideshow plugin. Create SEO optimised responsive slideshows with Nivo Slider, Flex Slider, Coin Slider and Responsive Slides. | [https://wordpress.org/plugins/ml-slider/](https://wordpress.org/plugins/ml-slider/)

## Customising footer icons
The Jazzy theme allows for several links that are represented visually with an icon to be added to the footer. Follow the steps below to do this.

1. In the WordPress admin panel select **Appearance > Customize > Footer Socials** from the left navigation sidebar.
2. Add social and contact information into the relevant fields.
3. Click **publish** to save and publish.

## Adding media to the media player
The Jazzy theme allows for an audio file to be added below the image slider banner. Follow the steps below to do this.

1. In the WordPress admin panel select **Appearance > Customize > Media Player** from the left navigation sidebar.
2. Enter the URL of the `MP3` audio file you wish to add into the **URL** field. 

## Changing the logo
1. In the WordPress admin panel select **Appearance > Customize > Site Identity** from the left navigation sidebar.
2. Click **Select logo** and upload the logo you wish to use for the website.
3. Click **publish** to save and publish your changes.

## Creating navigation menu
TODO

## Creating a page
TODO

## Creating a post
TODO

## Adding a slideshow
The Jazzy theme allows for an interactive slideshow to be displayed above the navigation bar. Follow the steps below to do this.

1. Ensure the **Meta Slider** plugin is installed and activated.
2. In the WordPress admin panel click on the **MetaSlider** link in the left navigation sidebar.
3. Once the MetaSlider dashboard has opened, create a slideshow and add suitable media slides.
4. Settings for the slideshow can be found on the right of the MetaSlider dashboard, follow the suggested configuration below.

##### Regular settings

Setting name | Suggested value
-------------|----------------
**Slideshow type** | `Nivo slider`
**Width** | `700px`
**Height** | `180px`
**Effect** | `Random`
**Arrows** | `YES`
**Navigation** | `Hidden`

##### Advanced settings

Setting name | Suggested value
-------------|----------------
**100% width** | `YES`
**Center align** | `YES`
**Auto play** | `YES`
**Arrows** | `YES`

5. After the slideshow has been created and the settings have been configured, the ID of the slideshow must be added to the **Appearance > Customize > Image Slider** setting. On the **MetaSlider dashboard**, copy the **ID** value from the 'How to Use' card. **IMPORTANT:** Do not copy the entire PHP code!
6. To add the slideshow ID to the site go to the WordPress dashboard and select **Appearance > Customize > Image Slider** from the left navigation sidebar.
7. Enter the **ID** of the slideshow into the **Slider ID** field.
8. Click **publish** to save and publish your changes.

## Adding a Facebook feed
The Jazzy theme allows for an interactive Facebook feed to be displayed in a drawer sidebar. Follow the steps below to do this.

1. Ensure the **Widget for Social Page Feeds** plugin is installed and activated.
2. In the WordPress admin panel and select **Appearance > Widgets** from the left navigation sidebar.
3. Drag the **Facebook Page Like Widget** from **Available Widgets** to the sidebar card.
4. Settings for the widget can be found by clicking the dropdown arrow icon on the widget card, follow the suggested configuration below.

Setting name | Suggested value
-------------|----------------
**Title** | `Leave blank`
**Facebook Page Url** | Your Facebook page URL
**Set Width** | `300px`
**Set Height** | `800px`

5. To save your changes click **save**.

## Listening for repository changes
To track changes to the Jazzy repository and automatically update the website when a change is pushed follow the steps below.

1. Ensure the **WP Pusher** plugin is installed and activated.
2. In the WordPress admin panel click on the **WP Pusher** link in the left navigation sidebar.
3. Once inside the **WP Pusher** dashboard complete the on-screen instructions.
4. Open the GitHub tab and click the **Obtain a GitHub token** button and follow the steps.
5. To save your changes click **save**.
6. Click on the **Install Theme** link in the left navigation sidebar under **WP Pusher**.
7. Follow the suggested configuration below.

Setting name | Suggested value
-------------|----------------
**Repository host** | `GitHub`
**Theme repository** | Enter the URL of your repository
**Repository branch** | Enter the name of the branch to track
**Repository subdirectory** | `jazzy`
**Push to deploy** | `YES`

8. Click the **Install theme** button when complete to install the theme.