# [turretcss](https://turretcss.com/)

[![npm version](https://img.shields.io/npm/v/turretcss.svg)](https://www.npmjs.com/package/turretcss)

turretcss - A Responsive Front-end Framework for Accessible and Semantic Websites with default HTML elements, created by [Scott de Jonge](https://twitter.com/scottdejonge).

To get started, check out <https://turretcss.com>!

## Table of contents

- [Quick start](#quick-start)
- [Bugs and feature requests](#bugs-and-feature-requests)
- [Documentation](#documentation)
- [Versioning](#versioning)
- [Creators](#creators)
- [Copyright and license](#copyright-and-license)

## Quick start

Several quick start options are available:

- [Download the latest release](https://github.com/turretcss/turretcss/).
- Clone the repo: `git clone https://github.com/turretcss/turretcss.git`.
- Install with [npm](https://www.npmjs.org): `npm install turretcss`.
- Install with [yarn](https://github.com/yarnpkg/yarn): `yarn add turretcss`

Read the [Getting started page](https://turretcss.com/docs/getting-started/) for information on structure, usage, support and more.

## Bugs and feature requests

Have a bug or a feature request? Please first search for existing and closed issues. If your problem or idea is not addressed yet, [please open a new issue](https://github.com/turretcss/turret/issues/new).

## Documentation

View full documentation at: <https://turretcss.com/>

turretcss's documentation, included in this repo in the `docs` directory, is built with [Jekyll](https://jekyllrb.com) and publicly hosted on GitHub Pages at <https://turretcss.com>. The docs may also be run locally.

### Tooling

To use and run the documentation locally, you'll need a copy of turretcss's source files, and Node. To install the required tools follow these steps:

1. [Download and install Node](https://nodejs.org/download/), which we use to manage our dependencies.
2. Navigate to the root `/turret` directory and run `npm install` to install our local dependencies listed in [package.json](https://github.com/turretcss/turret/blob/master/package.json).
3. [Install Ruby][install-ruby], install [Bundler][gembundler] with `gem install bundler`, and finally run `bundle install`. This will install all Ruby dependencies, such as Jekyll and plugins.

- **Windows users:** Read [this unofficial guide](http://jekyll-windows.juthilo.com/) to get Jekyll up and running without problems.

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

### Autoprefixer

turretcss uses [Autoprefixer][autoprefixer] as part of postcss-preset-env to automatically add vendor prefixes to some CSS properties at build time.

### Running documentation locally

1. Install [Install Ruby][install-ruby], install [Bundler][gembundler] with `gem install bundler`.
2. Install Jekyll (the site builder) and other Ruby dependencies with `bundle install`. This will install all Ruby dependencies, such as Jekyll and plugins.
3. Run `npm start` or `yarn start` to rebuild CSS.
4. From the `/docs` directory, run `bundle exec jekyll serve` in the command line.
5. Open <http://0.0.0.0:2001> in your browser.

Learn more about using Jekyll by reading its [documentation](https://jekyllrb.com/docs/home/).

### Troubleshooting

Should you encounter problems with installing dependencies or running scripts, uninstall all previous dependency versions (global and local). Then, rerun `npm install`.

## Updates

Keep track development updates by following [@turretcss](https://twitter.com/turretcss) on Twitter.

## Versioning

For transparency into our release cycle and in striving to maintain backward compatibility, turretcss is maintained under [the Semantic Versioning guidelines](http://semver.org/).

See [the Releases section of our GitHub project](https://github.com/turretcss/turret/releases) for changelogs for each release version of turretcss.

## Creators

**Scott de Jonge**

- Twitter: [@scottdejonge](https://twitter.com/scottdejonge)
- Github: [@scottdejonge](https://github.com/scottdejonge)

## Copyright and license

Code and documentation copyright 2018 [Bigfish.tv](https://bigfish.tv), Code released under the [MIT license](https://github.com/turretcss/turretcss/LICENSE). Docs released under [Creative Commons](https://github.com/turretcss/turretcss/LICENSE).

[install-ruby]: https://www.ruby-lang.org/en/documentation/installation/
[gembundler]: https://bundler.io/
[turretcss]: https://turretcss.com/
[turretcss-boilerplate]: https://github.com/turretcss/turretcss-boilerplate
[postcss]: https://postcss.org/
[postcss cli]: https://github.com/postcss/postcss-cli
[postcss-preset-env]: https://preset-env.cssdb.org/
[cssnano]: https://cssnano.co/
[autoprefixer]: https://github.com/postcss/autoprefixer
