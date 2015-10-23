---
layout: docs
title: Getting Started
description: A introduction to how to get started, download and use Turret including usage and examples.
permalink: /docs/getting-started/
---

## Download

There are four quick start ways to download Turret available:

### Download the latest releas

<a class="button" href="https://github.com/bigfishtv/turret/archive/master.zip">Download from GitHub</a>

### Clone the repo from GitHub

```bash
git clone https://github.com/bigfishtv/turret.git
```

### Install with npm

```bash
npm install bigfishtv-turret
```

### Install with Bower

```bash
bower install turret
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
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/turret.css" />
  </head>
  <body>

  </body>
</html>
```


## Usage

Turret is a collection of self-contained less files that include definitions and styles required for each element. These can be included and removed as required to minimise generated CSS styles.

### CSS

To use Turret as CSS in your project include turret.min.css in your document `<head>`

### Less

To use Turret with Less in your project you will need to either:

1. Import `turret.less` to include styles for all elements.
2. Import `.less` files for each element as required.

### Theming

To theme Turret you can override default style defintions either within your own project styles or included as `theme.less` to `@import` in your styles.

```scss
// Turret
@import '/turret/turret.less';

// Override Primary Color
@primary: #FF0000;

// Override Button Color
@button-color: @grey;
```

### Repo File Structure

```
turret/
  └ dist/
    ├ turret.css
    └ turret.min.css
  └ docs/
  └ examples/
    ├ grid.html
    ├ template.html
    └ theme.html
  └ turret/
```

### Turret File Structure
```

turret/
  turret.less
  └ lib/
    └ normalize.less
  └ base/
    ├ global.less
    ├ body.less
    ├ colors.less
    ├ font.less
    ├ link.less
    ├ image.less
    ├ breakpoints.less
    ├ media-queries.less
    └ print.less
  └ typography/
    ├ headings.less
    ├ strong.less
    ├ emphasis.less
    ├ paragraph.less
    ├ lead.less
    ├ hr.less
    ├ blockquote.less
    ├ pullout.less
    ├ list.less
    ├ definition-list.less
    ├ code.less
    ├ pre.less
    └ kbd.less
  └ grid/
    ├ container.less
    ├ row.less
    ├ column.less
    ├ offset.less
    ├ push.less
    └ pull.less
  └ form/
    ├ label.less
    ├ fieldset.less
    ├ form-message.less
    ├ input.less
    ├ input-indicators.less
    ├ input-sizes.less
    ├ input-group.less
    ├ input-group-sizes.less
    ├ control.less
    ├ select.less
    └ select-sizes.less
  └ elements/
    ├ button.less
    ├ button-styles.less
    ├ button-indicators.less
    ├ button-sizes.less
    ├ button-group.less
    ├ figure.less
    ├ media.less
    ├ nav.less
    └ table.less
  └ utilities/
    ├ utility-classes.less
    ├ visiblity.less
    ├ display.less
    ├ positioning.less
    ├ flex.less
    ├ float.less
    ├ max-width.less
    ├ margin.less
    ├ padding.less
    ├ font-family.less
    ├ font-size.less
    ├ text.less
    ├ text-color.less
    └ background.less
  └ mixins/
    ├ mixins.less
    ├ input.less
    ├ select.less
    ├ button.less
    ├ font.less
    ├ border-radius.less
    ├ background.less
    ├ placeholder.less
    ├ arrows.less
    ├ transitions.less
    ├ transforms.less
    ├ animations.less
    ├ filters.less
    └ flexbox.less
  └ accessibility/
    └ screen-readr.less
```


## Documentation

Turret uses npm for it's build system with watch and build scripts for documentation and for deployment:

### Watch Turret

Watch Less files in turret concatenate and compile

```bash
npm run watch:turret
```

### Watch Docs

Watch Less files in docs/styles concatenate and compile

```bash
npm run watch:docs
```

### Build

Build Less files concatenate and compile

```bash
npm run build
```

### Dist CSS

Build Less files in turret concatenate and compile into dist

```bash
npm run dist:css
```

### Dist Min

Build Less files in turret concatenate, compile, and minimise into dist

```bash
npm run dist:min
```

### Dist

Run Dist CSS and Dist Min

```bash
npm run dist
```

## Examples

<div class="row">
  <div class="column-1-4 column-small-1-2">
    <a class="example" href="examples/template.html" target="_blank">
      <img src="/assets/images/template.svg" class="responsive">
      <p>Template</p>
    </a>
  </div>
  <div class="column-1-4 column-small-1-2">
    <a class="example" href="examples/grid.html" target="_blank">
      <img src="/assets/images/grid.svg" class="responsive">
      <p>Grid</p>
    </a>
  </div>
  <div class="column-1-4 column-small-1-2">
    <a class="example" href="examples/theme.html" target="_blank">
      <img src="/assets/images/theme.svg" class="responsive">
      <p>Theme</p>
    </a>
  </div>
</div>
