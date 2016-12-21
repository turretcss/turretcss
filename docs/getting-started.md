---
layout: docs
title: Getting Started
page_title: Getting Started - Turret - A Responsive Front-end Framework for Accessible and Semantic Websites
description: A introduction to how to get started, download and use Turret.
permalink: /docs/getting-started/
---

## Download

There are three quick start ways to download Turret available:

### Download the latest release

<a class="button" href="https://github.com/bigfishtv/turret/archive/master.zip">Download from GitHub</a>

### Clone the repo from GitHub

```bash
git clone https://github.com/bigfishtv/turret.git
```

### Install with npm

```bash
npm install turretcss
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
```

### Normalize

For improved cross-browser rendering, Turret uses Normalize.css, a project by Nicolas Gallagher and Jonathan Neal.

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

  </body>
</html>
```


## Usage

Turret is a collection of CSS files that include variables set at the root scope, and individual CSS files for the styles required for each element. These can be included and removed as required to minimise generated CSS styles.

### CSS

To use Turret as CSS in your project include turret.min.css in your document `<head>`

### PostCSS/PostCSS-cssnext

To use Turret with PostCSS/PostCSS-cssnext in your project you will need to import `turret.css` to include styles for all elements.

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