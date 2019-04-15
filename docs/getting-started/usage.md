---
layout: docs
title: Usage
description: null
---

## Selectors

Where styles are applied on HTML elements with classes, the structuring of classes is element, modifier, style.

```html
<element class="[element] [element-modifier] [element-style]">...</element>
```

For example the .button class can extended to button button-block button-primary

```html
<button class="button button-border button-primary">...</button>
```

## Normalize

For improved cross-browser rendering, turretcss includes [Normalize.css](https://necolas.github.io/normalize.css/), a project by Nicolas Gallagher and Jonathan Neal.

## Sizes

turretcss uses a generic language for size scale. The scale ranges from xxs to xxl (xxs, xs, s, m, l, xl, xxl) and is applicable for both responsive breakpoints, and the HTML elements themselves.

### Device Sizes

Responsive breakpoints are configurable via setting [@custom-media queries](/base/media-queries), by default these are configured to the following pixel sizes:

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th width="25%">Breakpoint</th>
        <th width="25%" colspan="2">Min Width</th>
        <th width="25%" colspan="2">Max Width</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>xxs</code></td>
        <td><code>-</code></td>
        <td><code>-</code></td>
        <td><code>20rem</code></td>
        <td><code>320px</code></td>
      </tr>
      <tr>
        <td><code>xs</code></td>
        <td><code>20rem</code></td>
        <td><code>320px</code></td>
        <td><code>40rem</code></td>
        <td><code>640rem</code></td>
      </tr>
      <tr>
        <td><code>s</code></td>
        <td><code>40rem</code></td>
        <td><code>640rem</code></td>
        <td><code>60rem</code></td>
        <td><code>960px</code></td>
      </tr>
      <tr>
        <td><code>m</code></td>
        <td><code>60rem</code></td>
        <td><code>960px</code></td>
        <td><code>80rem</code></td>
        <td><code>1280px</code></td>
      </tr>
      <tr>
        <td><code>l</code></td>
        <td><code>80rem</code></td>
        <td><code>1280px</code></td>
        <td><code>100rem</code></td>
        <td><code>1600px</code></td>
      </tr>
      <tr>
        <td><code>xl</code></td>
        <td><code>100rem</code></td>
        <td><code>1600px</code></td>
        <td><code>120rem</code></td>
        <td><code>1920px</code></td>
      </tr>
      <tr>
        <td><code>xxl</code></td>
        <td><code>120rem</code></td>
        <td><code>1920px</code></td>
        <td><code>-</code></td>
        <td><code>-</code></td>
      </tr>
    </tbody>
  </table>
</div>

### Element Sizes

Each interactive element - such as `<input>`, `<select>`, `<button>`, etc. - have sizes that can be applied with optional classes, for example `.button-s`.

The size of these elements is set by global height variables.

Element sizes examples:

- [Input Sizes](/form/input-sizes)
- [Input Group Sizes](/form/input-group/#sizes)
- [Control Sizes](/form/control-sizes)
- [Select Sizes](/form/select-sizes)
- [Range Sizes](/form/range-sizes)
- [Progress Sizes](/form/progress-sizes)
- [Button Sizes](/element/button-sizes)

## States

Any element that has states - hover, focus, active, selected etc. - has default options that can be set these include: `color`, `background`, `border-color`, and `shadow`. These states inherit styles (`box-shadow`) that are configured globally as well as specific state styles that can be configured per element, and style.

## Indicators

Each interactive element - such as `<input>`, `<select>`, `<button>`, etc. - have indicator styles that are applied with global classes:

| Class      | Description                                                |
| ---------- | ---------------------------------------------------------- |
| `.error`   | Applies [error color styles](/color/#error) to element     |
| `.warning` | Applies [warning color styles](/color/#warning) to element |
| `.success` | Applies [success color styles](/color/#success) to element |
| `.info`    | Applies [info color styles](/color/#info) to element       |

Element indicators examples:

- [Input Indicators](/form/input-indicators)
- [Control Indicators](/form/control-indicators)
- [Select Indicators](/form/select-indicators)
- [Range Indicators](/form/range-indicators)
- [Progress Indicators](/form/progress-indicators)
- [Button Indicators](/element/button-colors/#indicators)

## Structure

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

### [PostCSS][postcss]

turretcss makes use of [PostCSS][postcss] and [postcss-preset-env][postcss-preset-env] to compile modern CSS into browser compatible CSS. Each element of turretcss is inlcuded in individual CSS files that include variables set at the root scope. To use turretcss with [PostCSS][postcss] in your project you will need to import `turretcss/turret/turret.css` to include styles for all elements.

### [postcss-preset-env][postcss-preset-env]

To use turretcss with [postcss-preset-env][postcss-preset-env] in your project you will need to import `turret.css` to include styles for all elements.

### [Autoprefixer][autoprefixer]

turretcss uses [Autoprefixer][autoprefixer] as part of [postcss-preset-env][postcss-preset-env] to automatically add vendor prefixes to some CSS properties at build time.

## Styling

To theme turretcss you can override default style variables either within your own project styles or included as `variables.css` to `@import` in your styles.

```css
@import "turretcss/turret/turret.css";

/* Override Primary Color */
:root {
  --primary: red;
}
```

## Documentation

View full documentation at: <https://turretcss.com/>

turretcss's documentation, included in this repo in the `docs` directory, is built with [Jekyll](https://jekyllrb.com) and publicly hosted on GitHub Pages at <https://turretcss.com>. The docs may also be run locally.

### Tooling

To use and run the documentation locally, you'll need a copy of turretcss's source files, and Node. To install the required tools follow these steps:

1. [Download and install Node](https://nodejs.org/download/), which we use to manage our dependencies.
2. Navigate to the root `/turret` directory and run `npm install` to install our local dependencies listed in [package.json](https://github.com/turretcss/turret/blob/master/package.json).
3. [Install Ruby][install-ruby], install [Bundler][gembundler] with `gem install bundler`, and finally run `bundle install`. This will install all Ruby dependencies, such as Jekyll and plugins.

- **Windows users:** Read [this unofficial guide](https://jekyll-windows.juthilo.com/) to get Jekyll up and running without problems.

When completed, you'll be able to run the various scripts provided from the command line.

### Scripts

turretcss includes the following commands and tasks:

| Task             | Description                                                                                                                                     |
| ---------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `start`          | Run `npm run watch`                                                                                                                             |
| `watch`          | Run `npm run watch:turret & npm run watch:docs`                                                                                                 |
| `watch:turret`   | Watches changes to the `/turret` directory and builds turret CSS `npm run compile:turret -- --verbose --watch`                                  |
| `watch:docs`     | Watches changes to the `/docs` directory and builds docs CSS `npm run compile:docs -- --verbose --watch`                                        |
| `compile:turret` | Builds turret CSS using [PostCSS][postcss], [postcss-preset-env][postcss-preset-env], and [CSSNano][cssnano] with config in `postcss.config.js` |
| `compile:docs`   | Builds docs CSS using [PostCSS][postcss], [postcss-preset-env][postcss-preset-env], and [CSSNano][cssnano] with config in `postcss.config.js`   |
| `format`         | Run `npm run format:css & npm run format:md`                                                                                                    |
| `format:css`     | Prettier CSS files `prettier --single-quote --print-width 180 --write '*.css'`                                                                  |
| `format:md`      | Prettier Markdown files `prettier --print-width 180 --write '*.md'`                                                                             |

### Running documentation locally

1. Install [Install Ruby][install-ruby], install [Bundler][gembundler] with `gem install bundler`.
2. Install Jekyll (the site builder) and other Ruby dependencies with `bundle install`. This will install all Ruby dependencies, such as Jekyll and plugins.
3. Run `npm start` or `yarn start` to rebuild CSS.
4. From the `/docs` directory, run `bundle exec jekyll serve` in the command line.
5. Open <https://0.0.0.0:2001> in your browser.

Learn more about using Jekyll by reading its [documentation](https://jekyllrb.com/docs/home/).

[install-ruby]: https://www.ruby-lang.org/en/documentation/installation/
[gembundler]: https://bundler.io/
[turretcss]: https://turretcss.com/
[turretcss-boilerplate]: https://github.com/turretcss/turretcss-boilerplate
[postcss]: https://postcss.org/
[postcss cli]: https://github.com/postcss/postcss-cli
[postcss-preset-env]: https://preset-env.cssdb.org/
[cssnano]: https://cssnano.co/
[autoprefixer]: https://github.com/postcss/autoprefixer
