# Theme Deployment
The following instructions provide a description of the development and deployment workflow.

#### Table of Contents  
1. Required software
2. Local development environment setup
3. Project management
4. Version control
5. Deployment & Web Hosting
___
## Required software
The following software is required for the theme development and deployment workflow.
- [Local](https://localwp.com/)
- [GitHub Desktop](https://desktop.github.com/)

## Local development environment setup
### Installing Local (WordPress development tool)
Follow the steps below to set up your local development environment on your Windows, Mac, or Linux operating system.
1. Goto [the Local WP website](https://localwp.com/)
2. Click download and select your operating system from the dropdown
3. Follow the installation process once the download has completed
4. When the installation is complete, open local and navigate to `File > Create new site`
5. Give the site a name and click continue
6. Select custom for environment selection, enter the attributes in the table below and click continue

Attribute  | Value
------------- | -------------
PHP Version  | PHP 7.3.5
Web Server  | Nginx 1.16.0
Database | MySQL 8.0.16

7. Set a username, password and email address for the WordPress installation (we suggest using admin, admin and your personal email) and click continue
8. After clicking continue, your local WordPress site should startup, verify that your installation is working correctly by clicking the "open site" button in the dashboard

### Adding Jazzy GitHub repository to local WordPress installation
Follow the steps below to add the Jazzy GitHub theme repository to your WordPress theme folder.
1. Open your file explorer and navigate to your Local WordPress root directory. From there navigate to the themes folder `/wp-content/themes/`
2. Copy the directory path of the themes folder
3. Open GitHub Desktop and clone the Jazzy GitHub repository into the themes folder.
4. Open your WordPress admin panel and navigate to `Appearance > Themes`
5. Select the installed theme.
6. After selecting the theme, verify that it is working properly by viewing the WordPress websites home page.

## Project management
A [Trello Kanban board](https://trello.com/b/euLtVLL8/web-project-dev) has been created to track the progress of several project actions. Use this Kanban board to post details, actions and ideas. Move the Kanban cards around and assign them to contributors as needed.

## Version control
GitHub is used to collaborate and track changes to the theme code. To begin working on a new feature make a branch based off of the staging branch. When the feature is complete merge that feature branch with the staging branch for testing. If testing passes merge the staging branch with the main branch.


Branch Name | Description
------------|------------
main | This branch is used for production ready code. Code on this branch is ready to be deployed to the World Wide Web.
staging | This branch is used for theme development, and is not stable.

## Deployment & Web Hosting
Two websites that automatically track the commit history (when a change is pushed to main or staging, the website will automatically update) for the main and staging branches have been deployed on Amazon Web Services. Both of the websites are deployed on the same EC2 instance with the use of Apache Virtual Hosts.

Web Address | Name
------------- | -------------
[https://production.callumdennien.com](https://production.callumdennien.com) | Production website
[https://staging.callumdennien.com](https://staging.callumdennien.com) | Staging website
