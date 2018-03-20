---
layout: docs
title: Getting Started
page_title: Getting Started - turretcss - A Responsive Front-end Framework for Accessible and Semantic Websites
description: A introduction to how to get started, download and use turretcss.
permalink: /docs/getting-started/
---

## Introduction

turretcss makes creating responsive, accessible, mobile-first web interfaces simple. turretcss provides a robust CSS foundation of HTML typography, forms, and elements that are easy to customise and style.

## Contents

* Will be replaced with the ToC, excluding the "Contents" header
{:toc}

## Quick start

### CDN

Include the stylesheet `<link>` into your `<head>`.

```html
<link rel="stylesheet" href="{{ site.cdn }}" crossorigin="anonymous">
```

### Template

turretcss makes use of HTML5 elements and CSS properties that require the use of the HTML5 doctype. To ensure proper rendering and touch zooming, add the viewport meta tag to your `<head>`.

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Page Title -->
    <title>turretcss</title>
    
    <!-- turretcss CSS -->
    <link rel="stylesheet" type="text/css" href="{{ site.cdn }}" crossorigin="anonymous">
  </head>
  <body>
    ...
  </body>
</html>
```

### Boilerplate

The turretcss-boilerplate is a basic boilerplate using [turretcss][turretcss], [PostCSS][PostCSS], [PostCSS CLI][PostCSS CLI], [cssnext][cssnext], and [CSSNano][CSSNano].

<p>
  <a class="button" href="https://github.com/turretcss/turretcss-boilerplate/archive/master.zip">Download from GitHub</a>
  <a class="button" href="https://github.com/turretcss/turretcss-boilerplate/">View GitHub Repo</a>
</p>

## Download

### Download

Download the turretcss repo to include ready-to-use CSS code to easily drop into your project. Includes compiled and minified versions of the turretcss CSS.

<p>
  <a class="button button-primary" href="https://github.com/turretcss/turretcss/archive/master.zip">Download from GitHub</a>
</p>

### GitHub

Clone the repo from GitHub download the source CSS, and documentation files.

```bash
git clone https://github.com/turretcss/turretcss.git
```

### npm

Install turretcss for your Node powered apps with the [npm package](https://www.npmjs.com/package/turretcss):

```bash
npm install turretcss
```

### yarn

Install turretcss with [yarn](https://github.com/yarnpkg/yarn):

```bash
yarn add turretcss
```

## Usage

### Selectors

Where styles are applied on HTML elements with classes, the structuring of classes is element, modifier, style.

```html
<element class="[element] [element-modifier] [element-style]">...</element>
```

 For example the .button class can extended to button button-block button-primary

```html
<button class="button button-border button-primary">...</button>
```

### Normalize

For improved cross-browser rendering, turretcss includes [Normalize.css](https://necolas.github.io/normalize.css/), a project by Nicolas Gallagher and Jonathan Neal.

### Sizes

turretcss uses a generic language for size scale. The scale ranges from xs to xl (xs, s, m, l, xl) and is applicable for both responsive breakpoints, and the HTML elements themselves.

#### Device Sizes

Responsive breakpoints are configurable via setting [@custom-media queries](/docs/base/#media-queries), by default these are configured to the following pixel sizes:

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th width="25%">Breakpoint</th>
        <th width="25%">Device</th>
        <th width="25%">Min Width</th>
        <th width="25%">Max Width</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>xs</td>
        <td>Phone</td>
        <td class="color-grey background-light-50">None</td>
        <td>767px</td>
      </tr>
      <tr>
        <td>s</td>
        <td>Tablet</td>
        <td>768px</td>
        <td>1023px</td>
      </tr>
      <tr>
        <td>m</td>
        <td>Laptop</td>
        <td>1024px</td>
        <td>1279px</td>
      </tr>
      <tr>
        <td>l</td>
        <td>Desktop</td>
        <td>1280px</td>
        <td>1679px</td>
      </tr>
      <tr>
        <td>xl</td>
        <td>Large Screen</td>
        <td>1680px</td>
        <td class="color-grey background-light-50">None</td>
      </tr>
    </tbody>
  </table>
</div>

#### Element Sizes

Each interactive element - such as `<input>`, `<select>`, `<button>`, etc. - have sizes that can be applied with optional classes, for example `.button-s`.

The height of these elements is set by [global height variables](/docs/globals/#height).

Element sizes examples:

* [Input Sizes](/docs/form/#input-sizes)
* [Input Group Sizes](/docs/form/#input-group-sizes)
* [Control Sizes](/docs/form/#control-sizes)
* [Select Sizes](/docs/form/#select-sizes)
* [Range Sizes](/docs/form/#range-sizes)
* [Progress Sizes](/docs/form/#progress-sizes)
* [Button Sizes](/docs/elements/#button-sizes)

### States

Any element that has states - hover, focus, active, selected etc. - has default options that can be set these include: `color`, `background`, `border-color`, and `shadow`. These states inherit  styles (`box-shadow`) that are configured [globally](/docs/globals/#box-shadow) as well as specific state styles that can be configures per element, and style.

### Indicators

Each interactive element - such as `<input>`, `<select>`, `<button>`, etc. - have indicator styles that are applied with global classes:

| Class | Description |
| --- | --- |
| `.error`   | Applies [error color styles](/docs/globals/#error) to element |
| `.warning` | Applies [warning color styles](/docs/globals/#warning) to element  |
| `.success` | Applies [success color styles](/docs/globals/#success) to element  |
| `.info`    | Applies [info color styles](/docs/globals/#info) to element  |

Element indicators examples:

* [Input Indicators](/docs/form/#input-indicators)
* [Control Indicators](/docs/form/#control-indicators)
* [Select Indicators](/docs/form/#select-indicators)
* [Range Indicators](/docs/form/#range-indicators)
* [Progress Indicators](/docs/form/#progress-indicators)
* [Button Indicators](/docs/elements/#button-indicators)

### Structure

The turretcss source code download includes the precompiled CSS, along with source CSS, and documentation.

The source file structure is as follows:

```
turret/
  └ dist/
    └ turret.min.css
  └ docs/
  └ turret/
```

The `turret` directory contains the source code CSS. The `dist` directory includes precompiled CSS. The `docs` directory includes the source code for our documentation. Any other included file provides support for packages, license information, and development.

## Build Tools

### [PostCSS][PostCSS]

turretcss makes use of [PostCSS][PostCSS] and [cssnext][cssnext] to compile modern CSS into browser compatible CSS. Each element of turretcss is inlcuded in individual CSS files that include variables set at the root scope. To use turretcss with [PostCSS][PostCSS] in your project you will need to import `turretcss/turret/turret.css` to include styles for all elements.

### [cssnext][cssnext]

To use turretcss with [cssnext][cssnext] in your project you will need to import `turret.css` to include styles for all elements.

### [Autoprefixer][autoprefixer]

turretcss uses [Autoprefixer][autoprefixer] as part of [cssnext][cssnext] to automatically add vendor prefixes to some CSS properties at build time.

### Styling

To theme turretcss you can override default style variables either within your own project styles or included as `variables.css` to `@import` in your styles.

```css
@import 'turretcss/turret/turret.css';

/* Override Primary Color */
:root {
    --primary: red;
}
```

### Documentation

View full documentation at: <http://turretcss.com/>

turretcss's documentation, included in this repo in the `docs` directory, is built with [Jekyll](https://jekyllrb.com) and publicly hosted on GitHub Pages at <https://turretcss.com>. The docs may also be run locally.

#### Tooling

To use and run the documentation locally, you'll need a copy of turretcss's source files, and Node. To install the required tools follow these steps:

1. [Download and install Node](https://nodejs.org/download/), which we use to manage our dependencies.
2. Navigate to the root `/turret` directory and run `npm install` to install our local dependencies listed in [package.json](https://github.com/turretcss/turret/blob/master/package.json).
3. [Install Ruby][install-ruby], install [Bundler][gembundler] with `gem install bundler`, and finally run `bundle install`. This will install all Ruby dependencies, such as Jekyll and plugins.
  - **Windows users:** Read [this unofficial guide](http://jekyll-windows.juthilo.com/) to get Jekyll up and running without problems.

When completed, you'll be able to run the various scripts provided from the command line.

#### Scripts

turretcss includes the following commands and tasks:

| Task | Description |
| --- | --- |
| `npm start` | Run `npm run watch` |
| `npm run watch` | Watches changes to the `/docs` directory and builds docs CSS  |
| `npm run build` | Compile and minify the turretcss CSS into `/dist`. Uses [PostCSS][PostCSS], [cssnext][cssnext], and [CSSNano][CSSNano].  |
| `npm run docs` | Compile and minify the Docs CSS into `/dist`. Uses [PostCSS][PostCSS], [cssnext][cssnext], and [CSSNano][CSSNano].  |


#### Running documentation locally

1. Install [Install Ruby][install-ruby], install [Bundler][gembundler] with `gem install bundler`.
2. Install Jekyll (the site builder) and other Ruby dependencies with `bundle install`. This will install all Ruby dependencies, such as Jekyll and plugins.
3. Run  `npm start` or `yarn start` to rebuild CSS.
4. From the root `/turret` directory, run `bundle exec jekyll serve` in the command line.
5. Open <http://0.0.0.0:2001> in your browser.

Learn more about using Jekyll by reading its [documentation](https://jekyllrb.com/docs/home/).


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
        <td class="color-grey background-light-50">Not supported</td>
        <td>N/A</td>
      </tr>
      <tr>
        <th>iOS</th>
        <td>Supported</td>
        <td>Supported</td>
        <td class="color-grey background-light-50">Not supported</td>
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
        <td class="color-grey background-light-50">Not supported</td>
      </tr>
    </tbody>
  </table>
</div>

#### Android Default Browser

The Default Android Browser is not supported. Android 4.4+ does not ship with a default Browser. (note: Chrome on Android is fully supported)

#### IE Compatibility modes

turretcss is not supported in the old Internet Explorer compatibility modes. To be sure you're using the latest rendering mode for IE, consider including the appropriate `<meta>` tag in your pages:

```html
<meta http-equiv="X-UA-Compatible" content="IE=edge">
```

The meta tag tells the IE rendering engine it should use the latest, or edge, version of the IE rendering environment

### CSS

Some CSS properties and HTML5 attributes and elements are not fully supported by Internet Explorer 8 and 9.

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
        <td class="color-grey background-light-50">Not supported</td>
        <td>Supported</td>
        <td>Supported</td>
      </tr>
      <tr>
        <td><code>box-shadow</code></td>
        <td class="color-grey background-light-50">Not supported</td>
        <td>Supported</td>
        <td>Supported</td>
      </tr>
      <tr>
        <td><code>transform</code></td>
        <td class="color-grey background-light-50">Not supported</td>
        <td>2D transforms supported, with <code>-ms</code> prefix</td>
        <td>Supported</td>
      </tr>
      <tr>
        <td><code>transition</code></td>
        <td class="color-grey background-light-50">Not supported</td>
        <td class="color-grey background-light-50">Not supported</td>
        <td>Supported</td>
      </tr>
      <tr>
        <td><code>placeholder</code></td>
        <td class="color-grey background-light-50">Not supported</td>
        <td class="color-grey background-light-50">Not supported</td>
        <td>Supported</td>
      </tr>
      <tr>
        <td><code>flexbox</code></td>
        <td class="color-grey background-light-50">Not supported</td>
        <td class="color-grey background-light-50">Not supported</td>
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

turretcss is released under the MIT license and is copyright 2018 <a href="http://bigfish.tv">bigfish.tv</a>. Boiled down to smaller chunks, it can be described with the following conditions.

**It requires you to:**

* Include the license and copyright notice in your works

**It permits you to:**

* Freely download and use turretcss, in whole or in part, for personal, private, company internal, or commercial purposes
* Use turretcss in packages or distributions that you create
* Modify the source code
* Grant a sublicense to modify and distribute turretcss to third parties not included in the license

**It forbids you to:**

*  Hold the authors and license owners liable for damages as turretcss is provided without warranty
*  Hold the creators or copyright holders of turretcss liable
*  Redistribute any piece of turretcss without proper attribution
*  Use any marks owned by <a href="http://bigfish.tv">bigfish.tv</a> in any way that might state or imply that <a href="http://bigfish.tv">bigfish.tv</a> endorses your distribution
*  Use any marks owned by <a href="http://bigfish.tv">bigfish.tv</a> in any way that might state or imply that you created the <a href="http://bigfish.tv">bigfish.tv</a> software in question

**It does not require you to:**

* Include the source of turretcss itself, or of any modifications you may have made to it, in any redistribution you may assemble that includes it
* Submit changes that you make to turretcss back to the turretcss project (though such feedback is encouraged)

The full turretcss license is located in the project repository for more information.

[install-ruby]: https://www.ruby-lang.org/en/documentation/installation/
[gembundler]: https://bundler.io/
[turretcss]: https://turretcss.com/
[turretcss-boilerplate]: https://github.com/turretcss/turretcss-boilerplate
[PostCSS]: http://postcss.org/
[PostCSS CLI]: https://github.com/postcss/postcss-cli
[cssnext]: http://cssnext.io/
[CSSNano]: http://cssnano.co/
[autoprefixer]: https://github.com/postcss/autoprefixer
