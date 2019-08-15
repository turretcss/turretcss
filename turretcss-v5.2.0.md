## Additons

- Added numerical value `.font-weight-*` utility classes for 100-900 values
- Added `position-absolute`, `position-fixed`, `position-relative` classname variants for utility classes
- Added `sticky`, `position-sitcky` and `static`, `position-static` utility classes

## Updates

- Moved `@custom-media` cusotm media queries from `_base.css` to `_media_queries.css` and remove from `:root {}` context as per issue (https://github.com/postcss/postcss-custom-media/issues/54)
- Updated dependancies. Including major versions for `postcss@^7.0.17` and `postcss-preset-env@^6.7.0`
- Updated `--select-border-radius` default variable definition in `_form.css` to `--input-border-radius`
- Updated `.font-weight-*` named variables and utility classes to match common name matching as identified in issue #32
- Updated `.position-[direction]` utility classes to include variants for `position-top`, `position-right`, `position-bottom`, `position-left`
- Updated `display-title` default variable definitions for better default styling

## Removals

- Removed duplicate `caption` selector in `reset.css`
- Removed `position: absolute;` from `.position-[direction]` utility classes

## Fixes

- Fix typo in package.json browserlist value

## Docs

- Updated Border Color examples with `margin-vertical-xs`
