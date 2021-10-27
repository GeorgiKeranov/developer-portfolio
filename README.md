# Developer Portfolio Theme

Custom WordPress theme build for developers to show their personality, experience, skills and projects that they have built. The theme is responsive and has a page builder template from which you can add custom sections in the order you want.

## Table of contents
- [Technologies used](#technologies-used)
- [Theme Functionalities](#theme-functionalities)
  - [Header](#header) 
  - [Footer](#footer)
  - [Page Templates](#page-templates)
  - [Shortcodes](#shortcodes)
- [Installation](#installation)
- [Design Images](#design-images)

## Technologies used
- Wordpress
- PHP
- JavaScript
- CSS3
- HTML5
- SASS
- jQuery
- Carbon Fields (Custom fields like ACF plugin but specifically for developers)
- MySQL
- Webpack
- Particles.js

## Theme Functionalities

### Header

Header contains logo, menu and socials.\
Logo can be changed from Admin Panel -> Appearance -> Customize -> Site Identity -> Logo.\
Menu can be managed from Admin Panel -> Appearance -> Menus -> Main Menu.\
Socials can be managed from Admin Panel -> Theme Options -> Global.\

---------------------

### Footer

Footer contains text, menu, socials and copyright.
Text and copyright can be managed from Admin Panel -> Theme Options -> Footer.\
Menu can be managed from Admin Panel -> Appearance -> Menus -> Main Menu.\
Socials can be managed from Admin Panel -> Theme Options -> Global.\

---------------------

### Page Templates

#### Page Builder

Page Builder template contains several sections that can be added and ordered as you wish.

Page builder contains these sections:
- Section Intro
- Section Text
- Section Tabs with Text
- Section Text with Skills
- Section All Projects
- Section Selected Projects
- Section Skills
- Section Words With Image
- Section Contact

---------------------

### Shortcodes

`[year]`

Use this shortcode to display the current year.

---------------------

## Installation

### Requirements

`developer-theme` requires the following dependencies:

- [Yarn](https://yarnpkg.com/) or [Node.js](https://nodejs.org/)
- [Composer](https://getcomposer.org/)

### Setup

To use this theme you need to install the necessary Node.js and Composer dependencies :

```sh
$ composer install
$ yarn install
```

### Available CLI commands

- `yarn watch:css` : watches all SASS and recompiles the bundle css file when they change.
- `yarn watch:js` : watches all JavaScript and recompiles the bundle js file when they change.
- `yarn compile` : compiles all SASS and JavaScript files to one css and one js file.
- `yarn bundle` : generates a .zip archive for distribution, excluding development and system files.

## Design Images
![intro-section](https://user-images.githubusercontent.com/22518317/136260344-d1d14aba-3399-48eb-b4ff-f30c3ec3e962.png)
![about-section](https://user-images.githubusercontent.com/22518317/136260363-f7a0a92a-9949-4b75-8fdb-35d9c2921b0c.png)
![experience-and-skills-section](https://user-images.githubusercontent.com/22518317/136260388-3482aa92-6dc0-482a-bfd3-6d69d53debc6.png)
![projects-section](https://user-images.githubusercontent.com/22518317/136260405-a27136e9-8467-433e-957c-b6941e0d9a33.png)
![footer](https://user-images.githubusercontent.com/22518317/136260421-554f4c0b-1f1e-4886-87b7-f7d931cccca4.png)
![skills-section](https://user-images.githubusercontent.com/22518317/136260445-a07da282-2faf-4c20-9195-636db8e04f90.png)
![interests-and-hobies-section](https://user-images.githubusercontent.com/22518317/136260473-54b2a008-3b49-4d7e-a72e-6766ee4e9888.png)
![project-detail](https://user-images.githubusercontent.com/22518317/136260494-3a2c8cc0-028b-48be-a1b7-4af090907229.png)
![contact](https://user-images.githubusercontent.com/22518317/136268436-a6c8243f-d5e4-40a5-bbcd-3853eb1fee4e.png)
