# WordPress Theme with Bootstrap5 based on Understrap

## About

Understrap is an open-source WordPress starter theme that combines Underscores with Bootstrap. This theme is a stripped back version using Bootstrap5, Slick and Animate on Scroll.

## Installation

Clone this repository into your WordPress themes folder.

## Developing With npm, postCSS, Rollup, SASS and BrowserSync

This theme uses [sass](https://www.npmjs.com/package/sass) and [postCSS](https://postcss.org) to handle compiling all of the styles into one style sheet. The theme also includes [rollup.js](https://www.rollupjs.org/) to handle javascript compilation and minification. These choices are based on the same libraries and npm commands used in Bootstrap. In addition, it comes with [Browser Sync](http://browsersync.io) to handle live reloading while you develop.

### Confused by All the CSS, SCSS, and SASS Files?

- The theme itself uses the `/style.css` file only to identify the theme inside of WordPress. The file is not loaded by the theme and does not include any styles.
- The `/css/theme.css` and its minified little brother `/css/theme.min.css` file(s) provides all styles. It is composed of different SCSS sets and one variable file, all imported at `/src/sass/theme.scss`
- Your design goes into: `/src/sass/theme`.
  - Override Bootstrap by addind your variables to the `/src/sass/theme/_theme_variables.scss`
  - Add your custom styles to the `/src/sass/theme/_theme.scss` file
  - Or add other .scss files into it and `@import` it into `/src/sass/theme/_theme.scss`.

The same goes for Javascript. Just add your javascript to `/src/js/custom-javascript.js` and let rollup.js handle the rest.

### Installing Dependencies
- Make sure you have installed Node.js and Browser-Sync (optional) on your computer globally
- Then open your terminal and browse to the location of your Understrap copy
- Run: `$ npm install`

### Running
To work with and compile your Sass and Javascript files on the fly start:

```bash
npm run watch
```

Or, to run with Browser-Sync:

First change the browser-sync options to reflect your environment in the file `/build/browser-sync.config.js` in the beginning of the file:
```javascript
module.exports = {
	"proxy": "localhost/", // Change here
	"notify": false,
	"files": ["./css/*.min.css", "./js/*.min.js", "./**/*.php"]
};
```

then run:

```bash
npm run watch-bs
```

## Page Templates
Understrap includes several different page template files to render a number of unique layouts.

### Blank Template

The `blank.php` template is useful when working with various page builders and can be used as a starting blank canvas.

### Empty Template

The `empty.php` template displays a header and a footer only. A good starting point for landing pages.

### Sidebar Templates

The theme also includes a number of templates for enabling the right and left sidebars.

### Full Width Template

The `fullwidthpage.php` template has full width layout without a sidebar.

