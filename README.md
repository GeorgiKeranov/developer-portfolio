# Developer Portfolio Theme

Custom WordPress theme build for developers to show their personality, experience, skills and projects that they have built.

## Table of contents
- [Technologies used](#technologies-used)
- [Theme Functionalities](#theme-functionalities)
  - [Header](#header) 
  - [Footer](#footer)
  - [Page Templates](#page-templates)
  - [Shortcodes](#shortcodes)
- [Installation](#installation)

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
