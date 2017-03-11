---
layout: docs
title: Getting Started
page_title: Getting Started - Turret - A Responsive Front-end Framework for Accessible and Semantic Websites
description: A introduction to how to get started, download and use Turret.
permalink: /docs/getting-started/
---

## Introduction

Turret makes creating responsive, accessible, mobile-first web interfaces simple. Turret provides a robust CSS foundation of HTML typography, forms, and elements that are easy to customise and style.


## Quick start

Several quick start options are available:

### Download the latest release

Download the Turret repo to include ready-to-use CSS code to easily drop into your project. Includes compiled and minified versions of the Turret CSS.

<p>
  <a class="button button-primary" href="https://github.com/bigfishtv/turret/archive/master.zip">Download from GitHub</a>
</p>

### Clone the repo from GitHub

Clone the repo from GitHub download the source CSS, and documentation files.

```bash
git clone https://github.com/bigfishtv/turret.git
```

### Install with npm

Install Turret for your Node powered apps with the [npm package](https://www.npmjs.com/package/turretcss):

```bash
npm install turretcss
```

### Install with yarn

Install Turret with [yarn](https://github.com/yarnpkg/yarn):

```bash
yarn add turretcss
```

## Structure

### Selectors

Where styles are applied on HTML elements with classes, the structuring of classes is element, modifier, style. For example the .button class can extended to button button-block button-primary

```html
<element class="[element] [element-modifier] [element-style]">...</element>
```

### Viewport

To ensure proper rendering and touch zooming, add the viewport meta tag to your `<head>`.

```html
<meta name="viewport" content="width=device-width, initial-scale=1.0">
```

### HTML5 Doctype

Turret makes use of HTML5 elements and CSS properties that require the use of the HTML5 doctype.

```html
<!DOCTYPE html>
<html lang="en">
  ...
</html>
```

### Normalize

For improved cross-browser rendering, Turret uses [Normalize.css](https://necolas.github.io/normalize.css/), a project by Nicolas Gallagher and Jonathan Neal.

### Template

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Turret</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/turret.css" />
  </head>
  <body>
    ...
  </body>
</html>
```

## Usage

Turret is a collection of CSS files that include variables set at the root scope, and individual CSS files for the styles required for each element. These can be included and removed as required to minimise generated CSS styles.

### CSS

To use Turret as CSS in your project include turret.min.css in your document `<head>`

### PostCSS/cssnext

To use Turret with PostCSS/cssnext in your project you will need to import `turret.css` to include styles for all elements.

### Theming

To theme Turret you can override default style variables either within your own project styles or included as `variables.css` to `@import` in your styles.

```css
@import 'turretcss/turret/turret.css';

/* Override Primary Color */
:root {
    --primary: #FF0000;
}
```

### Repo File Structure

```
turret/
  └ dist/
    ├ turret.css
    └ turret.min.css
  └ docs/
  └ turret/
```

## Support

### Browsers

<div class="table-responsive">
  <table style="table-layout:fixed;">
    <thead>
      <tr>
        <td></td>
        <th>Chrome</th>
        <th>Firefox</th>
        <th>Internet Explorer</th>
        <th>Opera</th>
        <th>Safari</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Android</th>
        <td>Supported</td>
        <td>Supported</td>
        <td rowspan="3" style="vertical-align: middle;">N/A</td>
        <td class="color-grey background-light-100">Not supported</td>
        <td>N/A</td>
      </tr>
      <tr>
        <th>iOS</th>
        <td>Supported</td>
        <td>Supported</td>
        <td class="color-grey background-light-100">Not supported</td>
        <td>Supported</td>
      </tr>
      <tr>
        <th>Mac OS X</th>
        <td>Supported</td>
        <td>Supported</td>
        <td>Supported</td>
        <td>Supported</td>
      </tr>
      <tr>
        <th>Windows</th>
        <td>Supported</td>
        <td>Supported</td>
        <td>Supported (IE10+)</td>
        <td>Supported</td>
        <td class="color-grey background-light-100">Not supported</td>
      </tr>
    </tbody>
  </table>
</div>

#### Android Default Browser

The Default Android Browser is not supported. Android 4.4+ does not ship with a default Browser. (note: Chrome on Android is fully supported)

#### IE Compatibility modes

Turret is not supported in the old Internet Explorer compatibility modes. To be sure you're using the latest rendering mode for IE, consider including the appropriate `<meta>` tag in your pages:

```html
<meta http-equiv="X-UA-Compatible" content="IE=edge">
```

The meta tag tells the IE rendering engine it should use the latest, or edge, version of the IE rendering environment

### CSS

Some CSS properties and HTML5 elements are not fully supported by Internet Explorer 8 and 9.

<div class="table-responsive">
  <table style="table-layout:fixed;">
    <thead>
      <tr>
        <th>Feature</th>
        <th>IE8</th>
        <th>IE9</th>
        <th>IE10</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>border-radius</code></td>
        <td class="color-grey background-light-100">Not supported</td>
        <td>Supported</td>
        <td>Supported</td>
      </tr>
      <tr>
        <td><code>box-shadow</code></td>
        <td class="color-grey background-light-100">Not supported</td>
        <td>Supported</td>
        <td>Supported</td>
      </tr>
      <tr>
        <td><code>transform</code></td>
        <td class="color-grey background-light-100">Not supported</td>
        <td>2D transforms supported, with <code>-ms</code> prefix</td>
        <td>Supported</td>
      </tr>
      <tr>
        <td><code>transition</code></td>
        <td class="color-grey background-light-100">Not supported</td>
        <td class="color-grey background-light-100">Not supported</td>
        <td>Supported</td>
      </tr>
      <tr>
        <td><code>placeholder</code></td>
        <td class="color-grey background-light-100">Not supported</td>
        <td class="color-grey background-light-100">Not supported</td>
        <td>Supported</td>
      </tr>
      <tr>
        <td><code>Flexbox</code></td>
        <td class="color-grey background-light-100">Not supported</td>
        <td class="color-grey background-light-100">Not supported</td>
        <td>Partially supported, with <code>-ms</code> prefix</td>
      </tr>
    </tbody>
  </table>
</div>

Visit [Can I Use](http://caniuse.com/) for details on browser support of CSS and HTML features.

## Accessibility

### Screen Reader

Use the `screen-reader` class to display content only for screen readers, based from the A11y Project post: [How-to: Hide Content](http://a11yproject.com/posts/how-to-hide-content/)

```scss
<div class="screen-reader">...</div>
```

#### Screen Reader Focusable

In conjunction with the `screen-reader` class, the `screen-reader-focusable` class can be added to only display content when it's focused. Useful for "Skip to main content" links.

```scss
<div class="screen-reader screen-reader-focusable">...</div>
```

### ARIA Roles

<div class="table-responsive">
  <table>
    <thead>
      <tr>
      <th scope="col">Role</th>
      <th scope="col">Description</th>
      <th scope="col" width="165">Analogous To</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>application</td>
        <td>A region declared as a web application, as opposed to a web document.</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>article</td>
        <td> A section of a page that consists of a composition that forms an independent part of a document, page, or site.</td>
        <td><code>&lt;article&gt;</code></td>
      </tr>
      <tr>
        <td>banner</td>
        <td>A region that contains mostly site-oriented content, rather than page-specific content.</td>
        <td><code>&lt;header&gt;</code>,<br/><code>&lt;div id="header"&gt;</code></td>
      </tr>
      <tr>
        <td>complementary</td>
        <td>A supporting section of the document, designed to be complementary to the main content at a similar level in the DOM hierarchy, but remains meaningful when separated from the main content.</td>
        <td><code>&lt;aside&gt;</code></td>
      </tr>
      <tr>
        <td>contentinfo</td>
        <td>A large perceivable region that contains information about the parent document.</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>directory</td>
        <td>A list of references to members of a group, such as a static table of contents.</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>document</td>
        <td>A region containing related information that is declared as document content, as opposed to a web application.</td>
        <td><code>&lt;body&gt;</code></td>
      </tr>
      <tr>
        <td>form</td>
        <td>A landmark region that contains a collection of items and objects that, as a whole, combine to create a form. See related search</td>
        <td><code>&lt;form&gt;</code></td>
      </tr>
      <tr>
        <td>log</td>
        <td>A type of live region where new information is added in meaningful order and old information may disappear. See related marquee. Note: Elements with the role log have an implicit aria-live value of polite.</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>main</td>
        <td>The main content of a document.</td>
        <td><code>&lt;div id="content"&gt;</code></td>
      </tr>
      <tr>
        <td>navigation</td>
        <td>A collection of navigational elements (usually links) for navigating the document or related documents.</td>
        <td><code>&lt;nav&gt;</code></td>
      </tr>
      <tr>
        <td>note</td>
        <td>A section whose content is parenthetic or ancillary to the main content of the resource.</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>region</td>
        <td>A large perceivable section of a web page or document, that the author feels is important enough to be included in a page summary or table of contents, for example, an area of the page containing live sporting event statistics.</td>
        <td><code>&lt;div&gt;</code>, <code>&lt;frame&gt;</code>, <code>&lt;section&gt;</code></td>
      </tr>
      <tr>
        <td>search</td>
        <td>A landmark region that contains a collection of items and objects that, as a whole, combine to create a search facility. See related form.</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>status</td>
        <td>A container whose content is advisory information for the user but is not important enough to justify an alert, often but not necessarily presented as a status bar. See related alert. Note: Elements with the role status have an implicit <a href="http://www.w3.org/TR/wai-aria/states_and_properties#aria-live">aria-live</a> value of polite.</td>
        <td><code>&lt;output&gt;</code></td>
      </tr>
    </tbody>
  </table>
</div>

## Contributors

**Scott de Jonge**

Twitter: [@scottdejonge](https://twitter.com/scottdejonge)
Github: [@scottdejonge](https://github.com/scottdejonge)

## Licence

#### Code License

Applies to code inside the `turret` directory.

Code licensed under [MIT](http://opensource.org/licenses/mit-license.html) License

#### Documentation License

Applies to files inside the `docs` excluding files located in the `lib` directory.

Documentation licensed under [CC BY 3.0](http://creativecommons.org/licenses/by/3.0/)

### License Notes

Turret is released under the MIT license and is copyright 2017 <a href="http://bigfish.tv">bigfish.tv</a>. Boiled down to smaller chunks, it can be described with the following conditions.

**It requires you to:**

* Include the license and copyright notice in your works

**It permits you to:**

* Freely download and use Turret, in whole or in part, for personal, private, company internal, or commercial purposes
* Use Turret in packages or distributions that you create
* Modify the source code
* Grant a sublicense to modify and distribute Turret to third parties not included in the license

**It forbids you to:**

*  Hold the authors and license owners liable for damages as Turret is provided without warranty
*  Hold the creators or copyright holders of Turret liable
*  Redistribute any piece of Turret without proper attribution
*  Use any marks owned by <a href="http://bigfish.tv">bigfish.tv</a> in any way that might state or imply that <a href="http://bigfish.tv">bigfish.tv</a> endorses your distribution
*  Use any marks owned by <a href="http://bigfish.tv">bigfish.tv</a> in any way that might state or imply that you created the <a href="http://bigfish.tv">bigfish.tv</a> software in question

**It does not require you to:**

* Include the source of Turret itself, or of any modifications you may have made to it, in any redistribution you may assemble that includes it
* Submit changes that you make to Turret back to the Turret project (though such feedback is encouraged)

The full Turret license is located in the project repository for more information.
