---
layout: docs
title: Build Tools
description: null
---

### [PostCSS][postcss]

turretcss makes use of [PostCSS][postcss] and [cssnext][cssnext] to compile modern CSS into browser compatible CSS. Each element of turretcss is inlcuded in individual CSS files that include variables set at the root scope. To use turretcss with [PostCSS][postcss] in your project you will need to import `turretcss/turret/turret.css` to include styles for all elements.

### [cssnext][cssnext]

To use turretcss with [cssnext][cssnext] in your project you will need to import `turret.css` to include styles for all elements.

### [Autoprefixer][autoprefixer]

turretcss uses [Autoprefixer][autoprefixer] as part of [cssnext][cssnext] to automatically add vendor prefixes to some CSS properties at build time.

### Styling

To theme turretcss you can override default style variables either within your own project styles or included as `variables.css` to `@import` in your styles.

```css
@import "turretcss/turret/turret.css";

/* Override Primary Color */
:root {
  --primary: red;
}
```

### Documentation

View full documentation at: <https://turretcss.com/>

turretcss's documentation, included in this repo in the `docs` directory, is built with [Jekyll](https://jekyllrb.com) and publicly hosted on GitHub Pages at <https://turretcss.com>. The docs may also be run locally.

#### Tooling

To use and run the documentation locally, you'll need a copy of turretcss's source files, and Node. To install the required tools follow these steps:

1. [Download and install Node](https://nodejs.org/download/), which we use to manage our dependencies.
2. Navigate to the root `/turret` directory and run `npm install` to install our local dependencies listed in [package.json](https://github.com/turretcss/turret/blob/master/package.json).
3. [Install Ruby][install-ruby], install [Bundler][gembundler] with `gem install bundler`, and finally run `bundle install`. This will install all Ruby dependencies, such as Jekyll and plugins.

- **Windows users:** Read [this unofficial guide](https://jekyll-windows.juthilo.com/) to get Jekyll up and running without problems.

When completed, you'll be able to run the various scripts provided from the command line.

#### Scripts

turretcss includes the following commands and tasks:

| Task            | Description                                                                                                             |
| --------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `npm start`     | Run `npm run watch`                                                                                                     |
| `npm run watch` | Watches changes to the `/docs` directory and builds docs CSS                                                            |
| `npm run build` | Compile and minify the turretcss CSS into `/dist`. Uses [PostCSS][postcss], [cssnext][cssnext], and [CSSNano][cssnano]. |
| `npm run docs`  | Compile and minify the Docs CSS into `/dist`. Uses [PostCSS][postcss], [cssnext][cssnext], and [CSSNano][cssnano].      |

#### Running documentation locally

1. Install [Install Ruby][install-ruby], install [Bundler][gembundler] with `gem install bundler`.
2. Install Jekyll (the site builder) and other Ruby dependencies with `bundle install`. This will install all Ruby dependencies, such as Jekyll and plugins.
3. Run `npm start` or `yarn start` to rebuild CSS.
4. From the root `/turret` directory, run `bundle exec jekyll serve` in the command line.
5. Open <http://0.0.0.0:2001> in your browser.

Learn more about using Jekyll by reading its [documentation](https://jekyllrb.com/docs/home/).

[install-ruby]: https://www.ruby-lang.org/en/documentation/installation/
[gembundler]: https://bundler.io/
[turretcss]: https://turretcss.com/
[turretcss-boilerplate]: https://github.com/turretcss/turretcss-boilerplate
[postcss]: https://postcss.org/
[postcss cli]: https://github.com/postcss/postcss-cli
[cssnext]: https://cssnext.io/
[cssnano]: https://cssnano.co/
[autoprefixer]: https://github.com/postcss/autoprefixer
