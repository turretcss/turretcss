---
layout: docs
title: Getting Started
page_title: Getting Started - turretcss - A Responsive Front-end Framework for Accessible and Semantic Websites
description: turretcss makes creating responsive, accessible, mobile-first web interfaces simple. turretcss provides a robust CSS foundation of HTML typography, forms, and elements that are easy to customise and style.
---

## CDN

Include the stylesheet `<link>` into your `<head>`.

```html
<link rel="stylesheet" href="{{ site.cdn }}" crossorigin="anonymous">
```

## Template

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

## Boilerplate

The turretcss-boilerplate is a basic boilerplate using [turretcss][turretcss], [PostCSS][postcss], [PostCSS CLI][postcss cli], [postcss-preset-env][postcss-preset-env], and [CSSNano][cssnano].

<p>
  <a class="button" href="https://github.com/turretcss/turretcss-boilerplate/archive/master.zip">Download from GitHub</a>
  <a class="button" href="https://github.com/turretcss/turretcss-boilerplate/">View GitHub Repo</a>
</p>

## Download

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

[turretcss]: https://turretcss.com/
[postcss]: https://postcss.org/
[postcss cli]: https://github.com/postcss/postcss-cli
[postcss-preset-env]: https://preset-env.cssdb.org/
[cssnano]: https://cssnano.co/
