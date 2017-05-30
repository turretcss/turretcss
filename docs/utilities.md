---
layout: docs
title: Utilities
page_title: Utilities - turretcss - A Responsive Front-end Framework for Accessible and Semantic Websites
description: Utility classes for typographic styles, display, positioning, floats and visibility of elements for rapid frontend development.
permalink: /docs/utilities/
---

## Contents

* Will be replaced with the ToC, excluding the "Contents" header
{:toc}

## Utility Classes

For text and background color utility classes check out the [color](#colors) section. Text align utility classes are demonstrated in the [typography](#typography) section.

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td><code>clearfix</code></td>
        <td>Clears floats using <code>.clearfix;</code> mixin</td>
      </tr>
      <tr>  
        <td><code>cover</code></td>
        <td>Makes element cover it's container using <code>.cover;</code> mixin</td>
      </tr>
      <tr>  
        <td><code>circle</code></td>
        <td>Makes element a circle by applying <code>border-radius: 50%;</code></td>
      </tr>
      <tr>  
        <td><code>center</code></td>
        <td>Makes element center using <code>.center;</code> mixin</td>
      </tr>
      <tr>  
        <td><code>full-height</code></td>
        <td>Sets height to 100%</td>
      </tr>
      <tr>  
        <td><code>fixed</code></td>
        <td>Sets <code>position: fixed;</code></td>
      </tr>
      <tr>  
        <td><code>relative</code></td>
        <td>Sets <code>position: relative;</code></td>
      </tr>
      <tr>  
        <td><code>absolute</code></td>
        <td>Sets <code>position: absolute;</code></td>
      </tr>
      <tr>  
        <td><code>pointer</code></td>
        <td>Sets <code>cursor: pointer;</code></td>
      </tr>
      <tr>  
        <td><code>no-border</code></td>
        <td>Removes borders <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
      </tr>
    </tbody>
  </table>
</div>

## Visibility

Define content to be `visible` or `hidden`.

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td><code>hide</code></td>
        <td>Hides element <code>display: none;</code></td>
      </tr>
      <tr>  
        <td><code>show</code></td>
        <td>Shows element <code>display: block;</code></td>
      </tr>
      <tr>  
        <td><code>visible</code></td>
        <td>Sets <code>visibility: visible;</code></td>
      </tr>
      <tr>  
        <td><code>hidden</code></td>
        <td>Sets <code>visibility: hidden;</code></td>
      </tr>
      <tr>  
        <td><code>hidden-print</code></td>
        <td>Hides element for when <code>@media print</code></td>
      </tr>
      <tr>  
        <td><code>visible-print</code></td>
        <td>Shows element for when <code>@media print</code></td>
      </tr>
      <tr>  
        <td><code>hidden-screen</code></td>
        <td>Hides element for when <code>@media screen</code></td>
      </tr>
      <tr>  
        <td><code>visible-screen</code></td>
        <td>Shows element for when <code>@media screen</code></td>
      </tr>
      <tr>  
        <td><code>hide-visually</code></td>
        <td>Hide element but keep in DOM for Screen Readers <code>@apply --hide-visually;</code> mixin</td>
      </tr>
      <tr>  
        <td><code>text-hide</code></td>
        <td>Hides text <code>@apply --text-hide;</code> mixin</td>
      </tr>
    </tbody>
  </table>
</div>

### Visibile Breakpoint Classes

Define content to be visible at different breakpoints. Note: `!important` is used to override specificity issues.

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th width="25%"></th>
        <th width="15%">Extra Small Devices<br><small>Phones (<767px)</small></th>
        <th width="15%">Small Devices<br><small>Tablets (768px - 1023px)</small></th>
        <th width="15%">Medium devices<br><small>Laptops (1024px - 1279px)</small></th>
        <th width="15%">Large devices<br><small>Desktops (1280px - 1679px)</small></th>
        <th width="15%">Extra Large devices<br><small>Large Desktops (≥1680px)</small></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>.visible-xs</code></td>
        <td>Visible</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
      </tr>
      <tr>
        <td><code>.visible-s</code></td>
        <td class="color-grey background-light-100">Hidden</td>
        <td>Visible</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
      </tr>
      <tr>
        <td><code>.visible-s-up</code></td>
        <td class="color-grey background-light-100">Hidden</td>
        <td>Visible</td>
        <td>Visible</td>
        <td>Visible</td>
        <td>Visible</td>
      </tr>
      <tr>
        <td><code>.visible-s-down</code></td>
        <td>Visible</td>
        <td>Visible</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
      </tr>
      <tr>
        <td><code>.visible-m</code></td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td>Visible</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
      </tr>
      <tr>
        <td><code>.visible-m-up</code></td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td>Visible</td>
        <td>Visible</td>
        <td>Visible</td>
      </tr>
      <tr>
        <td><code>.visible-m-down</code></td>
        <td>Visible</td>
        <td>Visible</td>
        <td>Visible</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
      </tr>
      <tr>
        <td><code>.visible-l</code></td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td>Visible</td>
        <td class="color-grey background-light-100">Hidden</td>
      </tr>
      <tr>
        <td><code>.visible-l-up</code></td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td>Visible</td>
        <td>Visible</td>
      </tr>
      <tr>
        <td><code>.visible-l-down</code></td>
        <td>Visible</td>
        <td>Visible</td>
        <td>Visible</td>
        <td>Visible</td>
        <td class="color-grey background-light-100">Hidden</td>
      </tr>
      <tr>
        <td><code>.visible-xl</code></td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td>Visible</td>
      </tr>
    </tbody>
  </table>
</div>

### Hidden Breakpoint Classes

Define content to be hidden at different breakpoints. Note: `!important` is used to override specificity issues.

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th width="25%"></th>
        <th width="15%">Extra Small Devices<br><small>Phones (<767px)</small></th>
        <th width="15%">Small Devices<br><small>Tablets (768px - 1023px)</small></th>
        <th width="15%">Medium devices<br><small>Laptops (1024px - 1279px)</small></th>
        <th width="15%">Large devices<br><small>Desktops (1280px - 1679px)</small></th>
        <th width="15%">Extra Large devices<br><small>Large Desktops (≥1680px)</small></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>.hidden-xs</code></td>
        <td class="color-grey background-light-100">Hidden</td>
        <td>Visible</td>
        <td>Visible</td>
        <td>Visible</td>
        <td>Visible</td>
      </tr>
      <tr>
        <td><code>.hidden-s</code></td>
        <td>Visible</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td>Visible</td>
        <td>Visible</td>
        <td>Visible</td>
      </tr>
      <tr>
        <td><code>.hidden-s-up</code></td>
        <td>Visible</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
      </tr>
      <tr>
        <td><code>.hidden-s-down</code></td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td>Visible</td>
        <td>Visible</td>
        <td>Visible</td>
      </tr>
      <tr>
        <td><code>.hidden-m</code></td>
        <td>Visible</td>
        <td>Visible</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td>Visible</td>
        <td>Visible</td>
      </tr>
      <tr>
        <td><code>.hidden-m-up</code></td>
        <td>Visible</td>
        <td>Visible</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
      </tr>
      <tr>
        <td><code>.hidden-m-down</code></td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td>Visible</td>
        <td>Visible</td>
      </tr>
      <tr>
        <td><code>.hidden-l</code></td>
        <td>Visible</td>
        <td>Visible</td>
        <td>Visible</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td>Visible</td>
      </tr>
      <tr>
        <td><code>.hidden-l-up</code></td>
        <td>Visible</td>
        <td>Visible</td>
        <td>Visible</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
      </tr>
      <tr>
        <td><code>.hidden-l-down</code></td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td class="color-grey background-light-100">Hidden</td>
        <td>Visible</td>
      </tr>
      <tr>
        <td><code>.hidden-xl</code></td>
        <td>Visible</td>
        <td>Visible</td>
        <td>Visible</td>
        <td>Visible</td>
        <td class="color-grey background-light-100">Hidden</td>
      </tr>
    </tbody>
  </table>
</div>

## Display

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td><code>display-block</code></td>
        <td>Sets <code>display: block;</code> on element</td>
      </tr>
      <tr>  
        <td><code>display-inline-block</code></td>
        <td>Sets <code>display: inline-block;</code> on element</td>
      </tr>
      <tr>  
        <td><code>display-table</code></td>
        <td>Sets <code>display: table;</code> on element</td>
      </tr>
      <tr>  
        <td><code>display-table-cell</code></td>
        <td>Sets <code>display: table-cell;</code> on element</td>
      </tr>
    </tbody>
  </table>
</div>

## Positioning

Utility classes can be used to position elements easily, each position utility class is `position: absolute;` and allows for either absolute positioning or using `@gutter` spacing by adding the `gutter` class to any position class

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>position-top-left</code></td>
        <td>Positions element to the top left of it's container</td>
      </tr>
      <tr>
        <td><code>position-top-right</code></td>
        <td>Positions element to the top right of it's container</td>
      </tr>
      <tr>
        <td><code>position-bottom-left</code></td>
        <td>Positions element to the bottom left of it's container</td>
      </tr>
      <tr>
        <td><code>position-bottom-right</code></td>
        <td>Positions element to the bottom right of it's container</td>
      </tr>
      <tr>
        <td><code>position-left-center</code></td>
        <td>Positions element left and centered vertically of it's container</td>
      </tr>
      <tr>
        <td><code>position-right-center</code></td>
        <td>Positions element right and centered vertically of it's container</td>
      </tr>
      <tr>
        <td><code>position-center</code></td>
        <td>Positions element centered vertically and horizontally of it's container</td>
      </tr>
    </tbody>
  </table>
</div>

## Fill

<div>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-white" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-black" cx="8" cy="8" r="8"/></svg>
</div>

```html
<circle class="fill-white" ... />
<circle class="fill-black" ... />
```

### Shades

#### Light

<div>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-light" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-light-100" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-light-200" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-light-300" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-light-400" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-light-500" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-light-600" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-light-700" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-light-800" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-light-900" cx="8" cy="8" r="8"/></svg>
</div>

```html
<circle class="fill-light" ... />
<circle class="fill-light-100" ... />
<circle class="fill-light-200" ... />
<circle class="fill-light-300" ... />
<circle class="fill-light-400" ... />
<circle class="fill-light-500" ... />
<circle class="fill-light-600" ... />
<circle class="fill-light-700" ... />
<circle class="fill-light-800" ... />
<circle class="fill-light-900" ... />
```

#### Grey

<div>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-grey" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-grey-100" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-grey-200" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-grey-300" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-grey-400" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-grey-500" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-grey-600" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-grey-700" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-grey-800" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-grey-900" cx="8" cy="8" r="8"/></svg>
</div>

```html
<circle class="fill-grey" ... />
<circle class="fill-grey-100" ... />
<circle class="fill-grey-200" ... />
<circle class="fill-grey-300" ... />
<circle class="fill-grey-400" ... />
<circle class="fill-grey-500" ... />
<circle class="fill-grey-600" ... />
<circle class="fill-grey-700" ... />
<circle class="fill-grey-800" ... />
<circle class="fill-grey-900" ... />
```

#### Dark

<div>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-dark" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-dark-100" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-dark-200" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-dark-300" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-dark-400" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-dark-500" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-dark-600" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-dark-700" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-dark-800" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-dark-900" cx="8" cy="8" r="8"/></svg>
</div>

```html
<circle class="fill-dark" ... />
<circle class="fill-dark-100" ... />
<circle class="fill-dark-200" ... />
<circle class="fill-dark-300" ... />
<circle class="fill-dark-400" ... />
<circle class="fill-dark-500" ... />
<circle class="fill-dark-600" ... />
<circle class="fill-dark-700" ... />
<circle class="fill-dark-800" ... />
<circle class="fill-dark-900" ... />
```

### Palettes

#### Primary

<div>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-primary" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-primary-100" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-primary-200" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-primary-300" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-primary-400" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-primary-500" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-primary-600" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-primary-700" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-primary-800" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-primary-900" cx="8" cy="8" r="8"/></svg>
</div>

```html
<circle class="fill-primary" ... />
<circle class="fill-primary-100" ... />
<circle class="fill-primary-200" ... />
<circle class="fill-primary-300" ... />
<circle class="fill-primary-400" ... />
<circle class="fill-primary-500" ... />
<circle class="fill-primary-600" ... />
<circle class="fill-primary-700" ... />
<circle class="fill-primary-800" ... />
<circle class="fill-primary-900" ... />
```

#### Secondary

<div>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-secondary" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-secondary-100" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-secondary-200" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-secondary-300" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-secondary-400" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-secondary-500" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-secondary-600" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-secondary-700" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-secondary-800" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-secondary-900" cx="8" cy="8" r="8"/></svg>
</div>

```html
<circle class="fill-secondary" ... />
<circle class="fill-secondary-100" ... />
<circle class="fill-secondary-200" ... />
<circle class="fill-secondary-300" ... />
<circle class="fill-secondary-400" ... />
<circle class="fill-secondary-500" ... />
<circle class="fill-secondary-600" ... />
<circle class="fill-secondary-700" ... />
<circle class="fill-secondary-800" ... />
<circle class="fill-secondary-900" ... />
```

#### Tertiary

<div>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-tertiary" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-tertiary-100" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-tertiary-200" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-tertiary-300" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-tertiary-400" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-tertiary-500" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-tertiary-600" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-tertiary-700" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-tertiary-800" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-tertiary-900" cx="8" cy="8" r="8"/></svg>
</div>

```html
<circle class="fill-tertiary" ... />
<circle class="fill-tertiary-100" ... />
<circle class="fill-tertiary-200" ... />
<circle class="fill-tertiary-300" ... />
<circle class="fill-tertiary-400" ... />
<circle class="fill-tertiary-500" ... />
<circle class="fill-tertiary-600" ... />
<circle class="fill-tertiary-700" ... />
<circle class="fill-tertiary-800" ... />
<circle class="fill-tertiary-900" ... />
```

### Indicators

#### Error

<div>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-error" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-error-100" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-error-200" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-error-300" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-error-400" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-error-500" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-error-600" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-error-700" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-error-800" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-error-900" cx="8" cy="8" r="8"/></svg>
</div>

```html
<circle class="fill-error" ... />
<circle class="fill-error-100" ... />
<circle class="fill-error-200" ... />
<circle class="fill-error-300" ... />
<circle class="fill-error-400" ... />
<circle class="fill-error-500" ... />
<circle class="fill-error-600" ... />
<circle class="fill-error-700" ... />
<circle class="fill-error-800" ... />
<circle class="fill-error-900" ... />
```

#### Warning

<div>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-warning" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-warning-100" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-warning-200" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-warning-300" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-warning-400" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-warning-500" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-warning-600" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-warning-700" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-warning-800" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-warning-900" cx="8" cy="8" r="8"/></svg>
</div>

```html
<circle class="fill-warning" ... />
<circle class="fill-warning-100" ... />
<circle class="fill-warning-200" ... />
<circle class="fill-warning-300" ... />
<circle class="fill-warning-400" ... />
<circle class="fill-warning-500" ... />
<circle class="fill-warning-600" ... />
<circle class="fill-warning-700" ... />
<circle class="fill-warning-800" ... />
<circle class="fill-warning-900" ... />
```

#### Success

<div>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-success" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-success-100" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-success-200" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-success-300" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-success-400" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-success-500" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-success-600" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-success-700" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-success-800" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-success-900" cx="8" cy="8" r="8"/></svg>
</div>

```html
<circle class="fill-success" ... />
<circle class="fill-success-100" ... />
<circle class="fill-success-200" ... />
<circle class="fill-success-300" ... />
<circle class="fill-success-400" ... />
<circle class="fill-success-500" ... />
<circle class="fill-success-600" ... />
<circle class="fill-success-700" ... />
<circle class="fill-success-800" ... />
<circle class="fill-success-900" ... />
```

#### Info

<div>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-info" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-info-100" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-info-200" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-info-300" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-info-400" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-info-500" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-info-600" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-info-700" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-info-800" cx="8" cy="8" r="8"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="fill-info-900" cx="8" cy="8" r="8"/></svg>
</div>

```html
<circle class="fill-info" ... />
<circle class="fill-info-100" ... />
<circle class="fill-info-200" ... />
<circle class="fill-info-300" ... />
<circle class="fill-info-400" ... />
<circle class="fill-info-500" ... />
<circle class="fill-info-600" ... />
<circle class="fill-info-700" ... />
<circle class="fill-info-800" ... />
<circle class="fill-info-900" ... />
```

## Flex

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>flex</code></td>
        <td>Applies <code>display: flex;</code> to element</td>
      </tr>
      <tr>
        <td><code>inline-flex</code></td>
        <td>Applies <code>display: inline-flex;</code> to element</td>
      </tr>
      <tr>
        <td><code>flex-wrap</code></td>
        <td>Applies <code>flex-wrap: wrap;</code> to element</td>
      </tr>
      <tr>
        <td><code>flex-nowrap</code></td>
        <td>Applies <code>flex-wrap: nowrap;</code> to element</td>
      </tr>
      <tr>
        <td><code>flex-row</code></td>
        <td>Applies <code>flex-direction: row;</code> to element</td>
      </tr>
      <tr>
        <td><code>flex-column</code></td>
        <td>Applies <code>flex-direction: column;</code> to element</td>
      </tr>
      <tr>
        <td><code>flex-1</code></td>
        <td>Applies <code>flex: 1 1 0;</code> to element</td>
      </tr>
      <tr>
        <td><code>flex-1-1-auto</code></td>
        <td>Applies <code>flex: 1 1 auto;</code> to element</td>
      </tr>
      <tr>
        <td><code>flex-1-0-auto</code></td>
        <td>Applies <code>flex: 1 0 auto;</code> to element</td>
      </tr>
      <tr>
        <td><code>flex-0-1-auto</code></td>
        <td>Applies <code>flex: 0 1 auto;</code> to element</td>
      </tr>
      <tr>
        <td><code>flex-0-0-auto</code></td>
        <td>Applies <code>flex: 0 0 auto;</code> to element</td>
      </tr>
      <tr>
        <td><code>justify-content-flex-start</code></td>
        <td>Applies <code>justify-content: flex-start;</code> to element</td>
      </tr>
      <tr>
        <td><code>justify-content-flex-end</code></td>
        <td>Applies <code>justify-content: flex-end;</code> to element</td>
      </tr>
      <tr>
        <td><code>justify-content-center</code></td>
        <td>Applies <code>justify-content: center;</code> to element</td>
      </tr>
      <tr>
        <td><code>justify-content-space-between</code></td>
        <td>Applies <code>justify-content: space-between;</code> to element</td>
      </tr>
      <tr>
        <td><code>justify-content-space-around</code></td>
        <td>Applies <code>justify-content: space-around;</code> to element</td>
      </tr>
      <tr>
        <td><code>align-content-flex-start</code></td>
        <td>Applies <code>align-content: flex-start;</code> to element</td>
      </tr>
      <tr>
        <td><code>align-content-flex-end</code></td>
        <td>Applies <code>align-content: flex-end;</code> to element</td>
      </tr>
      <tr>
        <td><code>align-content-center</code></td>
        <td>Applies <code>align-content: center;</code> to element</td>
      </tr>
      <tr>
        <td><code>align-content-space-between</code></td>
        <td>Applies <code>align-content: space-between;</code> to element</td>
      </tr>
      <tr>
        <td><code>align-content-space-around</code></td>
        <td>Applies <code>align-content: space-around;</code> to element</td>
      </tr>
      <tr>
        <td><code>align-content-stretch</code></td>
        <td>Applies <code>align-content: stretch;</code> to element</td>
      </tr>
      <tr>
        <td><code>align-items-flex-start</code></td>
        <td>Applies <code>align-items: flex-start;</code> to element</td>
      </tr>
      <tr>
        <td><code>align-items-flex-end</code></td>
        <td>Applies <code>align-items: flex-end;</code> to element</td>
      </tr>
      <tr>
        <td><code>align-items-center</code></td>
        <td>Applies <code>align-items: center;</code> to element</td>
      </tr>
      <tr>
        <td><code>align-items-baseline</code></td>
        <td>Applies <code>align-items: baseline;</code> to element</td>
      </tr>
      <tr>
        <td><code>align-items-stretch</code></td>
        <td>Applies <code>align-items: stretch;</code> to element</td>
      </tr>
      <tr>
        <td><code>align-self-flex-start</code></td>
        <td>Applies <code>align-self: flex-start;</code> to element</td>
      </tr>
      <tr>
        <td><code>align-self-flex-end</code></td>
        <td>Applies <code>align-self: flex-end;</code> to element</td>
      </tr>
      <tr>
        <td><code>align-self-center</code></td>
        <td>Applies <code>align-self: center;</code> to element</td>
      </tr>
      <tr>
        <td><code>align-self-baseline</code></td>
        <td>Applies <code>align-self: baseline;</code> to element</td>
      </tr>
      <tr>
        <td><code>align-self-stretch</code></td>
        <td>Applies <code>align-self: stretch;</code> to element</td>
      </tr>
    </tbody>
  </table>
</div>

## Float

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td><code>left</code></td>
        <td>Floats element left</td>
      </tr>
      <tr>  
        <td><code>right</code></td>
        <td>Floats element right</td>
      </tr>
    </tbody>
  </table>
</div>

### Responsive Floats

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th width="25%"></th>
        <th width="15%">Extra Small Devices<br><small>Phones (<767px)</small></th>
        <th width="15%">Small Devices<br><small>Tablets (768px - 1023px)</small></th>
        <th width="15%">Medium devices<br><small>Laptops (1024px - 1279px)</small></th>
        <th width="15%">Large devices<br><small>Desktops (1280px - 1679px)</small></th>
        <th width="15%">Extra Large devices<br><small>Large Desktops (≥1680px)</small></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>.right-xs</code></td>
        <td>Right</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
      </tr>
      <tr>
        <td><code>.right-s</code></td>
        <td class="color-grey background-light-100">None</td>
        <td>Right</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
      </tr>
      <tr>
        <td><code>.right-s-up</code></td>
        <td class="color-grey background-light-100">None</td>
        <td>Right</td>
        <td>Right</td>
        <td>Right</td>
        <td>Right</td>
      </tr>
      <tr>
        <td><code>.right-s-down</code></td>
        <td>Right</td>
        <td>Right</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
      </tr>
      <tr>
        <td><code>.right-m</code></td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td>Right</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
      </tr>
      <tr>
        <td><code>.right-m-up</code></td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td>Right</td>
        <td>Right</td>
        <td>Right</td>
      </tr>
      <tr>
        <td><code>.right-m-down</code></td>
        <td>Right</td>
        <td>Right</td>
        <td>Right</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
      </tr>
      <tr>
        <td><code>.right-l</code></td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td>Right</td>
        <td class="color-grey background-light-100">None</td>
      </tr>
      <tr>
        <td><code>.right-l-up</code></td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td>Right</td>
        <td>Right</td>
      </tr>
      <tr>
        <td><code>.right-l-down</code></td>
        <td>Right</td>
        <td>Right</td>
        <td>Right</td>
        <td>Right</td>
        <td class="color-grey background-light-100">None</td>
      </tr>
      <tr>
        <td><code>.right-xl</code></td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td>Right</td>
      </tr>
      <tr>
        <td><code>.left-xs</code></td>
        <td>Left</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
      </tr>
      <tr>
        <td><code>.left-s</code></td>
        <td class="color-grey background-light-100">None</td>
        <td>Left</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
      </tr>
      <tr>
        <td><code>.left-s-up</code></td>
        <td class="color-grey background-light-100">None</td>
        <td>Left</td>
        <td>Left</td>
        <td>Left</td>
        <td>Left</td>
      </tr>
      <tr>
        <td><code>.left-s-down</code></td>
        <td>Left</td>
        <td>Left</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
      </tr>
      <tr>
        <td><code>.left-m</code></td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td>Left</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
      </tr>
      <tr>
        <td><code>.left-m-up</code></td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td>Left</td>
        <td>Left</td>
        <td>Left</td>
      </tr>
      <tr>
        <td><code>.left-m-down</code></td>
        <td>Left</td>
        <td>Left</td>
        <td>Left</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
      </tr>
      <tr>
        <td><code>.left-l</code></td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td>Left</td>
        <td class="color-grey background-light-100">None</td>
      </tr>
      <tr>
        <td><code>.left-l-up</code></td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td>Left</td>
        <td>Left</td>
      </tr>
      <tr>
        <td><code>.left-l-down</code></td>
        <td>Left</td>
        <td>Left</td>
        <td>Left</td>
        <td>Left</td>
        <td class="color-grey background-light-100">None</td>
      </tr>
      <tr>
        <td><code>.left-xl</code></td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td class="color-grey background-light-100">None</td>
        <td>Left</td>
      </tr>
    </tbody>
  </table>
</div>

## Max Width

<p class="max-width-xl">Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper.</p>
<p class="max-width-l">Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper.</p>
<p class="max-width-m">Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper.</p>
<p class="max-width-s">Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper.</p>
<p class="max-width-xs">Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper.</p>

```html
<p class="max-width-xl">...</p>
<p class="max-width-l">...</p>
<p class="max-width-m">...</p>
<p class="max-width-s">...</p>
<p class="max-width-xs">...</p>
```

## Gutter

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>no-gutter</code></td>
        <td>Removes padding from element</td>
      </tr>
      <tr>
        <td><code>gutter</code></td>
        <td>Applies padding <code>var(--gutter)</code> to element</td>
      </tr>
      <tr>
        <td><code>gutter-vertical</code></td>
        <td>Applies padding <code>var(--gutter-l)</code> to top and bottom of element</td>
      </tr>
      <tr>
        <td><code>gutter-top</code></td>
        <td>Applies padding <code>var(--gutter-l)</code> to top of element</td>
      </tr>
      <tr>
        <td><code>gutter-bottom</code></td>
        <td>Applies padding <code>var(--gutter-l)</code> to bottom of element</td>
      </tr>
      <tr>
        <td><code>gutter-horizontal</code></td>
        <td>Applies padding <code>var(--gutter-l)</code> to left and right of element</td>
      </tr>
      <tr>
        <td><code>gutter-left</code></td>
        <td>Applies padding <code>var(--gutter-l)</code> to left of element</td>
      </tr>
      <tr>
        <td><code>gutter-right</code></td>
        <td>Applies padding <code>var(--gutter-l)</code> to right of element</td>
      </tr>
    </tbody>
  </table>
</div>

## Margin

### Margin Sizes

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>margin-xl</code></td>
        <td>Applies <code>var(--margin-xl)</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-l</code></td>
        <td>Applies <code>var(--margin-l)</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-m</code></td>
        <td>Applies <code>var(--margin-m)</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-s</code></td>
        <td>Applies <code>var(--margin-s)</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-xs</code></td>
        <td>Applies <code>var(--margin-xs)</code> to element</td>
      </tr>
    </tbody>
  </table>
</div>

### No Margin

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td><code>no-margin</code></td>
        <td>Removes margin <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
      </tr>
      <tr>  
        <td><code>no-margin-vertical</code></td>
        <td>Removes margin top and bottom <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
      </tr>
      <tr>  
        <td><code>no-margin-horizontal</code></td>
        <td>Removes margin left and right <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
      </tr>
      <tr>  
        <td><code>no-margin-top</code></td>
        <td>Removes top margin <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
      </tr>
      <tr>  
        <td><code>no-margin-right</code></td>
        <td>Removes right margin <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
      </tr>
      <tr>  
        <td><code>no-margin-bottom</code></td>
        <td>Removes bottom margin <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
      </tr>
      <tr>  
        <td><code>no-margin-left</code></td>
        <td>Removes left margin <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
      </tr>
    </tbody>
  </table>
</div>

### Margin Auto

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td><code>margin-auto</code></td>
        <td>Adds margin auto</td>
      </tr>
      <tr>  
        <td><code>margin-vertical-auto</code></td>
        <td>Adds margin auto top and bottom</td>
      </tr>
      <tr>  
        <td><code>margin-horizontal-auto</code></td>
        <td>Adds margin auto left and right</td>
      </tr>
      <tr>  
        <td><code>margin-top-auto</code></td>
        <td>Adds top margin auto</td>
      </tr>
      <tr>  
        <td><code>margin-right-auto</code></td>
        <td>Adds right margin auto</td>
      </tr>
      <tr>  
        <td><code>margin-bottom-auto</code></td>
        <td>Adds bottom margin auto</td>
      </tr>
      <tr>  
        <td><code>margin-left-auto</code></td>
        <td>Adds left margin auto</td>
      </tr>
    </tbody>
  </table>
</div>

### Margin Vertical

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>margin-vertical-xl</code></td>
        <td>Applies <code>margin-top: var(--margin-xl);</code> and <code>margin-bottom: var(--margin-xl);</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-vertical-l</code></td>
        <td>Applies <code>margin-top: var(--margin-l);</code> and <code>margin-bottom: var(--margin-l);</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-vertical-m</code></td>
        <td>Applies <code>margin-top: var(--margin-m);</code> and <code>margin-bottom: var(--margin-m);</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-vertical-s</code></td>
        <td>Applies <code>margin-top: var(--margin-s);</code> and <code>margin-bottom: var(--margin-s);</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-vertical-xs</code></td>
        <td>Applies <code>margin-top: var(--margin-xs);</code> and <code>margin-bottom: var(--margin-xs);</code> to element</td>
      </tr>
    </tbody>
  </table>
</div>

### Margin Horizontal

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>margin-horizontal-xl</code></td>
        <td>Applies <code>margin-left: var(--margin-xl);</code> and <code>margin-right: var(--margin-xl);</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-horizontal-l</code></td>
        <td>Applies <code>margin-left: var(--margin-l);</code> and <code>margin-right: var(--margin-l);</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-horizontal-m</code></td>
        <td>Applies <code>margin-left: var(--margin-m);</code> and <code>margin-right: var(--margin-m);</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-horizontal-s</code></td>
        <td>Applies <code>margin-left: var(--margin-s);</code> and <code>margin-right: var(--margin-s);</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-horizontal-xs</code></td>
        <td>Applies <code>margin-left: var(--margin-xs);</code> and <code>margin-right: var(--margin-xs);</code> to element</td>
      </tr>
    </tbody>
  </table>
</div>

### Margin Top

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>margin-top-xl</code></td>
        <td>Applies <code>margin-top: var(--margin-xl);</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-top-l</code></td>
        <td>Applies <code>margin-top: var(--margin-l);</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-top-m</code></td>
        <td>Applies <code>margin-top: var(--margin-m);</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-top-s</code></td>
        <td>Applies <code>margin-top: var(--margin-s);</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-top-xs</code></td>
        <td>Applies <code>margin-top: var(--margin-xs);</code> to element</td>
      </tr>
    </tbody>
  </table>
</div>

### Margin Bottom

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>margin-bottom-xl</code></td>
        <td>Applies <code>margin-bottom: var(--margin-xl);</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-bottom-l</code></td>
        <td>Applies <code>margin-bottom: var(--margin-l);</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-bottom-m</code></td>
        <td>Applies <code>margin-bottom: var(--margin-m);</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-bottom-s</code></td>
        <td>Applies <code>margin-bottom: var(--margin-s);</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-bottom-xs</code></td>
        <td>Applies <code>margin-bottom: var(--margin-xs);</code> to element</td>
      </tr>
    </tbody>
  </table>
</div>

### Margin Left

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>margin-left-xl</code></td>
        <td>Applies <code>margin-left: var(--margin-xl);</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-left-l</code></td>
        <td>Applies <code>margin-left: var(--margin-l);</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-left-m</code></td>
        <td>Applies <code>margin-left: var(--margin-m);</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-left-s</code></td>
        <td>Applies <code>margin-left: var(--margin-s);</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-left-xs</code></td>
        <td>Applies <code>margin-left: var(--margin-xs);</code> to element</td>
      </tr>
    </tbody>
  </table>
</div>

### Margin Right

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>margin-right-xl</code></td>
        <td>Applies <code>margin-right: var(--margin-xl);</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-right-l</code></td>
        <td>Applies <code>margin-right: var(--margin-l);</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-right-m</code></td>
        <td>Applies <code>margin-right: var(--margin-m);</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-right-s</code></td>
        <td>Applies <code>margin-right: var(--margin-s);</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-right-xs</code></td>
        <td>Applies <code>margin-right: var(--margin-xs);</code> to element</td>
      </tr>
    </tbody>
  </table>
</div>

## Padding

### Padding Sizes

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>padding-xl</code></td>
        <td>Applies <code>var(--padding-xl)</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-l</code></td>
        <td>Applies <code>var(--padding-l)</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-m</code></td>
        <td>Applies <code>var(--padding-m)</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-s</code></td>
        <td>Applies <code>var(--padding-s)</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-xs</code></td>
        <td>Applies <code>var(--padding-xs)</code> to element</td>
      </tr>
    </tbody>
  </table>
</div>

### No Padding

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td><code>no-padding</code></td>
        <td>Removes padding <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
      </tr>
      <tr>  
        <td><code>no-padding-vertical</code></td>
        <td>Removes padding top and bottom <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
      </tr>
      <tr>  
        <td><code>no-padding-horizontal</code></td>
        <td>Removes padding left and right <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
      </tr>
      <tr>  
        <td><code>no-padding-top</code></td>
        <td>Removes top padding <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
      </tr>
      <tr>  
        <td><code>no-padding-right</code></td>
        <td>Removes right padding <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
      </tr>
      <tr>  
        <td><code>no-padding-bottom</code></td>
        <td>Removes bottom padding <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
      </tr>
      <tr>  
        <td><code>no-padding-left</code></td>
        <td>Removes left padding <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
      </tr>
    </tbody>
  </table>
</div>

### Padding Vertical

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>padding-vertical-xl</code></td>
        <td>Applies <code>padding-top: var(--padding-xl);</code> and <code>padding-bottom: var(--padding-xl);</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-vertical-l</code></td>
        <td>Applies <code>padding-top: var(--padding-l);</code> and <code>padding-bottom: var(--padding-l);</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-vertical-m</code></td>
        <td>Applies <code>padding-top: var(--padding-m);</code> and <code>padding-bottom: var(--padding-m);</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-vertical-s</code></td>
        <td>Applies <code>padding-top: var(--padding-s);</code> and <code>padding-bottom: var(--padding-s);</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-vertical-xs</code></td>
        <td>Applies <code>padding-top: var(--padding-xs);</code> and <code>padding-bottom: var(--padding-xs);</code> to element</td>
      </tr>
    </tbody>
  </table>
</div>

### Padding Horizontal

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>padding-vertical-xl</code></td>
        <td>Applies <code>padding-left: var(--padding-xl);</code> and <code>padding-right: var(--padding-xl);</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-vertical-l</code></td>
        <td>Applies <code>padding-left: var(--padding-l);</code> and <code>padding-right: var(--padding-l);</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-vertical-m</code></td>
        <td>Applies <code>padding-left: var(--padding-m);</code> and <code>padding-right: var(--padding-m);</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-vertical-s</code></td>
        <td>Applies <code>padding-left: var(--padding-s);</code> and <code>padding-right: var(--padding-s);</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-vertical-xs</code></td>
        <td>Applies <code>padding-left: var(--padding-xs);</code> and <code>padding-right: var(--padding-xs);</code> to element</td>
      </tr>
    </tbody>
  </table>
</div>

### Padding Top

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>padding-top-xl</code></td>
        <td>Applies <code>padding-top: var(--padding-xl);</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-top-l</code></td>
        <td>Applies <code>padding-top: var(--padding-l);</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-top-m</code></td>
        <td>Applies <code>padding-top: var(--padding-m);</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-top-s</code></td>
        <td>Applies <code>padding-top: var(--padding-s);</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-top-xs</code></td>
        <td>Applies <code>padding-top: var(--padding-xs);</code> to element</td>
      </tr>
    </tbody>
  </table>
</div>


### Padding Bottom

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>padding-bottom-xl</code></td>
        <td>Applies <code>padding-bottom: var(--padding-xl);</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-bottom-l</code></td>
        <td>Applies <code>padding-bottom: var(--padding-l);</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-bottom-m</code></td>
        <td>Applies <code>padding-bottom: var(--padding-m);</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-bottom-s</code></td>
        <td>Applies <code>padding-bottom: var(--padding-s);</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-bottom-xs</code></td>
        <td>Applies <code>padding-bottom: var(--padding-xs);</code> to element</td>
      </tr>
    </tbody>
  </table>
</div>

### Padding Left

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>padding-left-xl</code></td>
        <td>Applies <code>padding-left: var(--padding-xl);</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-left-l</code></td>
        <td>Applies <code>padding-left: var(--padding-l);</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-left-m</code></td>
        <td>Applies <code>padding-left: var(--padding-m);</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-left-s</code></td>
        <td>Applies <code>padding-left: var(--padding-s);</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-left-xs</code></td>
        <td>Applies <code>padding-left: var(--padding-xs);</code> to element</td>
      </tr>
    </tbody>
  </table>
</div>

### Padding Right

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>padding-right-xl</code></td>
        <td>Applies <code>padding-right: var(--padding-xl);</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-right-l</code></td>
        <td>Applies <code>padding-right: var(--padding-l);</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-right-m</code></td>
        <td>Applies <code>padding-right: var(--padding-m);</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-right-s</code></td>
        <td>Applies <code>padding-right: var(--padding-s);</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-right-xs</code></td>
        <td>Applies <code>padding-right: var(--padding-xs);</code> to element</td>
      </tr>
    </tbody>
  </table>
</div>

## Headings

<p class="h1">Heading 1 <small>Heading 1 small</small></p>
<p class="h2">Heading 2 <small>Heading 2 small</small></p>
<p class="h3">Heading 3 <small>Heading 3 small</small></p>
<p class="h4">Heading 4 <small>Heading 4 small</small></p>
<p class="h5">Heading 5 <small>Heading 5 small</small></p>
<p class="h6">Heading 6 <small>Heading 6 small</small></p>

```html
<p class="h1">Heading 1 <small>Heading 1 small</small></p>
<p class="h2">Heading 2 <small>Heading 2 small</small></p>
<p class="h3">Heading 3 <small>Heading 3 small</small></p>
<p class="h4">Heading 4 <small>Heading 4 small</small></p>
<p class="h5">Heading 5 <small>Heading 5 small</small></p>
<p class="h6">Heading 6 <small>Heading 6 small</small></p>
```

## Font Family

<p class="font-family-system">Font Family System</p>
<p class="font-family-sans-serif">Font Family Sans Serif</p>
<p class="font-family-serif">Font Family Serif</p>
<p class="font-family-monospace">Font Family Monospace</p>

```html
<p class="font-family-system">...</p>
<p class="font-family-sans-serif">...</p>
<p class="font-family-serif">...</p>
<p class="font-family-monospace">...</p>
```

## Font Weight

<p class="font-weight-thin">Font Weight Thin</p>
<p class="font-weight-light">Font Weight Light</p>
<p class="font-weight-regular">Font Weight Regular</p>
<p class="font-weight-medium">Font Weight Medium</p>
<p class="font-weight-semibold">Font Weight Semibold</p>
<p class="font-weight-bold">Font Weight Bold</p>
<p class="font-weight-black">Font Weight Black</p>

```html
<p class="font-weight-thin">...</p>
<p class="font-weight-light">...</p>
<p class="font-weight-regular">...</p>
<p class="font-weight-medium">...</p>
<p class="font-weight-semibold">...</p>
<p class="font-weight-bold">...</p>
<p class="font-weight-black">...</p>
```

## Font Size

<p class="font-size-xl">Font Size Extra Large</p>
<p class="font-size-l">Font Size Large</p>
<p class="font-size-m">Font Size Medium</p>
<p class="font-size-s">Font Size Small</p>
<p class="font-size-xs">Font Size Extra Small</p>

```html
<p class="font-size-xl">...</p>
<p class="font-size-l">...</p>
<p class="font-size-m">...</p>
<p class="font-size-s">...</p>
<p class="font-size-xs">...</p>
```

## Line Height

<p class="line-height-xl">Line Height Extra Large</p>
<p class="line-height-l">Line Height Large</p>
<p class="line-height-m">Line Height Medium</p>
<p class="line-height-s">Line Height Small</p>
<p class="line-height-xs">Line Height Extra Small</p>

```html
<p class="line-height-xl">...</p>
<p class="line-height-l">...</p>
<p class="line-height-m">...</p>
<p class="line-height-s">...</p>
<p class="line-height-xs">...</p>
```

## Letter Spacing

<p class="letter-spacing-xl">Letter Spacing Extra Large</p>
<p class="letter-spacing-l">Letter Spacing Large</p>
<p class="letter-spacing-m">Letter Spacing Medium</p>
<p class="letter-spacing-s">Letter Spacing Small</p>
<p class="letter-spacing-xs">Letter Spacing Extra Small</p>

```html
<p class="letter-spacing-xl">...</p>
<p class="letter-spacing-l">...</p>
<p class="letter-spacing-m">...</p>
<p class="letter-spacing-s">...</p>
<p class="letter-spacing-xs">...</p>
```

## Stroke

<div>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-white" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-black" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
</div>

```html
<circle class="stroke-white" ... />
<circle class="stroke-black" ... />
```

### Shades

#### Light

<div>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-light" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-light-100" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-light-200" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-light-300" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-light-400" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-light-500" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-light-600" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-light-700" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-light-800" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-light-900" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
</div>

```html
<circle class="stroke-light" ... />
<circle class="stroke-light-100" ... />
<circle class="stroke-light-200" ... />
<circle class="stroke-light-300" ... />
<circle class="stroke-light-400" ... />
<circle class="stroke-light-500" ... />
<circle class="stroke-light-600" ... />
<circle class="stroke-light-700" ... />
<circle class="stroke-light-800" ... />
<circle class="stroke-light-900" ... />
```

#### Grey

<div>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-grey" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-grey-100" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-grey-200" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-grey-300" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-grey-400" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-grey-500" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-grey-600" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-grey-700" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-grey-800" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-grey-900" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
</div>

```html
<circle class="stroke-grey" ... />
<circle class="stroke-grey-100" ... />
<circle class="stroke-grey-200" ... />
<circle class="stroke-grey-300" ... />
<circle class="stroke-grey-400" ... />
<circle class="stroke-grey-500" ... />
<circle class="stroke-grey-600" ... />
<circle class="stroke-grey-700" ... />
<circle class="stroke-grey-800" ... />
<circle class="stroke-grey-900" ... />
```

#### Dark

<div>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-dark" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-dark-100" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-dark-200" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-dark-300" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-dark-400" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-dark-500" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-dark-600" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-dark-700" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-dark-800" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-dark-900" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
</div>

```html
<circle class="stroke-dark" ... />
<circle class="stroke-dark-100" ... />
<circle class="stroke-dark-200" ... />
<circle class="stroke-dark-300" ... />
<circle class="stroke-dark-400" ... />
<circle class="stroke-dark-500" ... />
<circle class="stroke-dark-600" ... />
<circle class="stroke-dark-700" ... />
<circle class="stroke-dark-800" ... />
<circle class="stroke-dark-900" ... />
```

### Palettes

#### Primary

<div>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-primary" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-primary-100" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-primary-200" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-primary-300" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-primary-400" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-primary-500" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-primary-600" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-primary-700" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-primary-800" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-primary-900" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
</div>

```html
<circle class="stroke-primary" ... />
<circle class="stroke-primary-100" ... />
<circle class="stroke-primary-200" ... />
<circle class="stroke-primary-300" ... />
<circle class="stroke-primary-400" ... />
<circle class="stroke-primary-500" ... />
<circle class="stroke-primary-600" ... />
<circle class="stroke-primary-700" ... />
<circle class="stroke-primary-800" ... />
<circle class="stroke-primary-900" ... />
```

#### Secondary

<div>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-secondary" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-secondary-100" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-secondary-200" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-secondary-300" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-secondary-400" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-secondary-500" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-secondary-600" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-secondary-700" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-secondary-800" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-secondary-900" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
</div>

```html
<circle class="stroke-secondary" ... />
<circle class="stroke-secondary-100" ... />
<circle class="stroke-secondary-200" ... />
<circle class="stroke-secondary-300" ... />
<circle class="stroke-secondary-400" ... />
<circle class="stroke-secondary-500" ... />
<circle class="stroke-secondary-600" ... />
<circle class="stroke-secondary-700" ... />
<circle class="stroke-secondary-800" ... />
<circle class="stroke-secondary-900" ... />
```

#### Tertiary

<div>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-tertiary" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-tertiary-100" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-tertiary-200" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-tertiary-300" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-tertiary-400" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-tertiary-500" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-tertiary-600" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-tertiary-700" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-tertiary-800" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-tertiary-900" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
</div>

```html
<circle class="stroke-tertiary" ... />
<circle class="stroke-tertiary-100" ... />
<circle class="stroke-tertiary-200" ... />
<circle class="stroke-tertiary-300" ... />
<circle class="stroke-tertiary-400" ... />
<circle class="stroke-tertiary-500" ... />
<circle class="stroke-tertiary-600" ... />
<circle class="stroke-tertiary-700" ... />
<circle class="stroke-tertiary-800" ... />
<circle class="stroke-tertiary-900" ... />
```

### Indicators

#### Error

<div>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-error" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-error-100" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-error-200" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-error-300" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-error-400" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-error-500" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-error-600" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-error-700" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-error-800" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-error-900" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
</div>

```html
<circle class="stroke-error" ... />
<circle class="stroke-error-100" ... />
<circle class="stroke-error-200" ... />
<circle class="stroke-error-300" ... />
<circle class="stroke-error-400" ... />
<circle class="stroke-error-500" ... />
<circle class="stroke-error-600" ... />
<circle class="stroke-error-700" ... />
<circle class="stroke-error-800" ... />
<circle class="stroke-error-900" ... />
```

#### Warning

<div>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-warning" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-warning-100" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-warning-200" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-warning-300" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-warning-400" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-warning-500" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-warning-600" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-warning-700" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-warning-800" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-warning-900" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
</div>

```html
<circle class="stroke-warning" ... />
<circle class="stroke-warning-100" ... />
<circle class="stroke-warning-200" ... />
<circle class="stroke-warning-300" ... />
<circle class="stroke-warning-400" ... />
<circle class="stroke-warning-500" ... />
<circle class="stroke-warning-600" ... />
<circle class="stroke-warning-700" ... />
<circle class="stroke-warning-800" ... />
<circle class="stroke-warning-900" ... />
```

#### Success

<div>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-success" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-success-100" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-success-200" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-success-300" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-success-400" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-success-500" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-success-600" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-success-700" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-success-800" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-success-900" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
</div>

```html
<circle class="stroke-success" ... />
<circle class="stroke-success-100" ... />
<circle class="stroke-success-200" ... />
<circle class="stroke-success-300" ... />
<circle class="stroke-success-400" ... />
<circle class="stroke-success-500" ... />
<circle class="stroke-success-600" ... />
<circle class="stroke-success-700" ... />
<circle class="stroke-success-800" ... />
<circle class="stroke-success-900" ... />
```

#### Info

<div>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-info" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-info-100" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-info-200" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-info-300" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-info-400" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-info-500" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-info-600" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-info-700" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-info-800" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><circle class="stroke-info-900" stroke-width="4" fill="none" cx="8" cy="8" r="6"/></svg>
</div>

```html
<circle class="stroke-info" ... />
<circle class="stroke-info-100" ... />
<circle class="stroke-info-200" ... />
<circle class="stroke-info-300" ... />
<circle class="stroke-info-400" ... />
<circle class="stroke-info-500" ... />
<circle class="stroke-info-600" ... />
<circle class="stroke-info-700" ... />
<circle class="stroke-info-800" ... />
<circle class="stroke-info-900" ... />
```

## Text

### Text Align

<p class="text-left">Text Left</p>
<p class="text-center">Text Center</p>
<p class="text-right">Text Right</p>
<p class="text-justify">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Maecenas sed diam eget risus varius blandit sit amet non magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
<p class="truncate">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas faucibus mollis interdum. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>

```html
<p class="text-left">...</p>
<p class="text-center">...</p>
<p class="text-right">...</p>
<p class="text-justify">...</p>
<p class="truncate">...</p>
```

### Text Transform

<p class="uppercase">Uppercase</p>
<p class="lowercase">Lowercase</p>
<p class="capitalize">capitalize</p>

```html
<p class="uppercase">Uppercase</p>
<p class="lowercase">Lowercase</p>
<p class="capitalize">capitalize</p>
```

## Color

<p class="color-inherit">Color Inherit</p>
<p class="current-color">Current Color</p>

```html
<p class="color-inherit">Color Inherit</p>
<p class="current-color">Current Color</p>
```

<p class="color-white background-black">White</p>
<p class="color-black">Black</p>

```html
<p class="color-white">...</p>
<p class="color-black">...</p>
```

### Shades

#### Light

<p class="color-light">Light</p>
<p class="color-light-100">Light 100</p>
<p class="color-light-200">Light 200</p>
<p class="color-light-300">Light 300</p>
<p class="color-light-400">Light 400</p>
<p class="color-light-500">Light 500</p>
<p class="color-light-600">Light 600</p>
<p class="color-light-700">Light 700</p>
<p class="color-light-800">Light 800</p>
<p class="color-light-900">Light 900</p>

```html
<p class="color-light">...</p>
<p class="color-light-100">...</p>
<p class="color-light-200">...</p>
<p class="color-light-300">...</p>
<p class="color-light-400">...</p>
<p class="color-light-500">...</p>
<p class="color-light-600">...</p>
<p class="color-light-700">...</p>
<p class="color-light-800">...</p>
<p class="color-light-900">...</p>
```

#### Grey

<p class="color-grey">Grey</p>
<p class="color-grey-100">Grey 100</p>
<p class="color-grey-200">Grey 200</p>
<p class="color-grey-300">Grey 300</p>
<p class="color-grey-400">Grey 400</p>
<p class="color-grey-500">Grey 500</p>
<p class="color-grey-600">Grey 600</p>
<p class="color-grey-700">Grey 700</p>
<p class="color-grey-800">Grey 800</p>
<p class="color-grey-900">Grey 900</p>

```html
<p class="color-grey">...</p>
<p class="color-grey-100">...</p>
<p class="color-grey-200">...</p>
<p class="color-grey-300">...</p>
<p class="color-grey-400">...</p>
<p class="color-grey-500">...</p>
<p class="color-grey-600">...</p>
<p class="color-grey-700">...</p>
<p class="color-grey-800">...</p>
<p class="color-grey-900">...</p>
```

#### Dark

<p class="color-dark">Dark</p>
<p class="color-dark-100">Dark 100</p>
<p class="color-dark-200">Dark 200</p>
<p class="color-dark-300">Dark 300</p>
<p class="color-dark-400">Dark 400</p>
<p class="color-dark-500">Dark 500</p>
<p class="color-dark-600">Dark 600</p>
<p class="color-dark-700">Dark 700</p>
<p class="color-dark-800">Dark 800</p>
<p class="color-dark-900">Dark 900</p>

```html
<p class="color-dark">...</p>
<p class="color-dark-100">...</p>
<p class="color-dark-200">...</p>
<p class="color-dark-300">...</p>
<p class="color-dark-400">...</p>
<p class="color-dark-500">...</p>
<p class="color-dark-600">...</p>
<p class="color-dark-700">...</p>
<p class="color-dark-800">...</p>
<p class="color-dark-900">...</p>
```

### Palettes

#### Primary

<p class="color-primary">Primary</p>
<p class="color-primary-100">Primary 100</p>
<p class="color-primary-200">Primary 200</p>
<p class="color-primary-300">Primary 300</p>
<p class="color-primary-400">Primary 400</p>
<p class="color-primary-500">Primary 500</p>
<p class="color-primary-600">Primary 600</p>
<p class="color-primary-700">Primary 700</p>
<p class="color-primary-800">Primary 800</p>
<p class="color-primary-900">Primary 900</p>

```html
<p class="color-primary">...</p>
<p class="color-primary-100">...</p>
<p class="color-primary-200">...</p>
<p class="color-primary-300">...</p>
<p class="color-primary-400">...</p>
<p class="color-primary-500">...</p>
<p class="color-primary-600">...</p>
<p class="color-primary-700">...</p>
<p class="color-primary-800">...</p>
<p class="color-primary-900">...</p>
```

#### Secondary

<p class="color-secondary">Secondary</p>
<p class="color-secondary-100">Secondary 100</p>
<p class="color-secondary-200">Secondary 200</p>
<p class="color-secondary-300">Secondary 300</p>
<p class="color-secondary-400">Secondary 400</p>
<p class="color-secondary-500">Secondary 500</p>
<p class="color-secondary-600">Secondary 600</p>
<p class="color-secondary-700">Secondary 700</p>
<p class="color-secondary-800">Secondary 800</p>
<p class="color-secondary-900">Secondary 900</p>

```html
<p class="color-secondary">...</p>
<p class="color-secondary-100">...</p>
<p class="color-secondary-200">...</p>
<p class="color-secondary-300">...</p>
<p class="color-secondary-400">...</p>
<p class="color-secondary-500">...</p>
<p class="color-secondary-600">...</p>
<p class="color-secondary-700">...</p>
<p class="color-secondary-800">...</p>
<p class="color-secondary-900">...</p>
```

#### Tertiary

<p class="color-tertiary">Tertiary</p>
<p class="color-tertiary-100">Tertiary 100</p>
<p class="color-tertiary-200">Tertiary 200</p>
<p class="color-tertiary-300">Tertiary 300</p>
<p class="color-tertiary-400">Tertiary 400</p>
<p class="color-tertiary-500">Tertiary 500</p>
<p class="color-tertiary-600">Tertiary 600</p>
<p class="color-tertiary-700">Tertiary 700</p>
<p class="color-tertiary-800">Tertiary 800</p>
<p class="color-tertiary-900">Tertiary 900</p>

```html
<p class="color-tertiary">...</p>
<p class="color-tertiary-100">...</p>
<p class="color-tertiary-200">...</p>
<p class="color-tertiary-300">...</p>
<p class="color-tertiary-400">...</p>
<p class="color-tertiary-500">...</p>
<p class="color-tertiary-600">...</p>
<p class="color-tertiary-700">...</p>
<p class="color-tertiary-800">...</p>
<p class="color-tertiary-900">...</p>
```

### Indicators

#### Info

<p class="color-info">Info</p>
<p class="color-info-100">Info 100</p>
<p class="color-info-200">Info 200</p>
<p class="color-info-300">Info 300</p>
<p class="color-info-400">Info 400</p>
<p class="color-info-500">Info 500</p>
<p class="color-info-600">Info 600</p>
<p class="color-info-700">Info 700</p>
<p class="color-info-800">Info 800</p>
<p class="color-info-900">Info 900</p>

```html
<p class="color-info">...</p>
<p class="color-info-100">...</p>
<p class="color-info-200">...</p>
<p class="color-info-300">...</p>
<p class="color-info-400">...</p>
<p class="color-info-500">...</p>
<p class="color-info-600">...</p>
<p class="color-info-700">...</p>
<p class="color-info-800">...</p>
<p class="color-info-900">...</p>
```

#### Error

<p class="color-error">Error</p>
<p class="color-error-100">Error 100</p>
<p class="color-error-200">Error 200</p>
<p class="color-error-300">Error 300</p>
<p class="color-error-400">Error 400</p>
<p class="color-error-500">Error 500</p>
<p class="color-error-600">Error 600</p>
<p class="color-error-700">Error 700</p>
<p class="color-error-800">Error 800</p>
<p class="color-error-900">Error 900</p>

```html
<p class="color-error">...</p>
<p class="color-error-100">...</p>
<p class="color-error-200">...</p>
<p class="color-error-300">...</p>
<p class="color-error-400">...</p>
<p class="color-error-500">...</p>
<p class="color-error-600">...</p>
<p class="color-error-700">...</p>
<p class="color-error-800">...</p>
<p class="color-error-900">...</p>
```

#### Warning

<p class="color-warning">Warning</p>
<p class="color-warning-100">Warning 100</p>
<p class="color-warning-200">Warning 200</p>
<p class="color-warning-300">Warning 300</p>
<p class="color-warning-400">Warning 400</p>
<p class="color-warning-500">Warning 500</p>
<p class="color-warning-600">Warning 600</p>
<p class="color-warning-700">Warning 700</p>
<p class="color-warning-800">Warning 800</p>
<p class="color-warning-900">Warning 900</p>

```html
<p class="color-warning">...</p>
<p class="color-warning-100">...</p>
<p class="color-warning-200">...</p>
<p class="color-warning-300">...</p>
<p class="color-warning-400">...</p>
<p class="color-warning-500">...</p>
<p class="color-warning-600">...</p>
<p class="color-warning-700">...</p>
<p class="color-warning-800">...</p>
<p class="color-warning-900">...</p>
```

#### Success

<p class="color-success">Success</p>
<p class="color-success-100">Success 100</p>
<p class="color-success-200">Success 200</p>
<p class="color-success-300">Success 300</p>
<p class="color-success-400">Success 400</p>
<p class="color-success-500">Success 500</p>
<p class="color-success-600">Success 600</p>
<p class="color-success-700">Success 700</p>
<p class="color-success-800">Success 800</p>
<p class="color-success-900">Success 900</p>

```html
<p class="color-success">...</p>
<p class="color-success-100">...</p>
<p class="color-success-200">...</p>
<p class="color-success-300">...</p>
<p class="color-success-400">...</p>
<p class="color-success-500">...</p>
<p class="color-success-600">...</p>
<p class="color-success-700">...</p>
<p class="color-success-800">...</p>
<p class="color-success-900">...</p>
```

## Background

<div class="palette">
  <div class="swatch color-black background-white">White</div>
  <div class="swatch color-white background-black">Black</div>
</div>

```html
<div class="background-white">...</div>
<div class="background-black">...</div>
```

### Shades

#### Light

<div class="palette">
  <div class="swatch color-dark background-light">Light</div>
  <div class="swatch color-dark background-light-100">Light 100</div>
  <div class="swatch color-dark background-light-200">Light 200</div>
  <div class="swatch color-dark background-light-300">Light 300</div>
  <div class="swatch color-dark background-light-400">Light 400</div>
  <div class="swatch color-dark background-light-500">Light 500</div>
  <div class="swatch color-dark background-light-600">Light 600</div>
  <div class="swatch color-dark background-light-700">Light 700</div>
  <div class="swatch color-dark background-light-800">Light 800</div>
  <div class="swatch color-dark background-light-900">Light 900</div>
</div>

```html
<div class="background-light">...</div>
<div class="background-light-100">...</div>
<div class="background-light-200">...</div>
<div class="background-light-300">...</div>
<div class="background-light-400">...</div>
<div class="background-light-500">...</div>
<div class="background-light-600">...</div>
<div class="background-light-700">...</div>
<div class="background-light-800">...</div>
<div class="background-light-900">...</div>
```

#### Grey

<div class="palette">
  <div class="swatch color-white background-grey">Grey</div>
  <div class="swatch color-white background-grey-100">Grey 100</div>
  <div class="swatch color-white background-grey-200">Grey 200</div>
  <div class="swatch color-white background-grey-300">Grey 300</div>
  <div class="swatch color-white background-grey-400">Grey 400</div>
  <div class="swatch color-white background-grey-500">Grey 500</div>
  <div class="swatch color-white background-grey-600">Grey 600</div>
  <div class="swatch color-white background-grey-700">Grey 700</div>
  <div class="swatch color-white background-grey-800">Grey 800</div>
  <div class="swatch color-white background-grey-900">Grey 900</div>
</div>

```html
<div class="background-grey">...</div>
<div class="background-grey-100">...</div>
<div class="background-grey-200">...</div>
<div class="background-grey-300">...</div>
<div class="background-grey-400">...</div>
<div class="background-grey-500">...</div>
<div class="background-grey-600">...</div>
<div class="background-grey-700">...</div>
<div class="background-grey-800">...</div>
<div class="background-grey-900">...</div>
```

#### Dark

<div class="palette">
  <div class="swatch color-white background-dark">Dark</div>
  <div class="swatch color-white background-dark-100">Dark 100</div>
  <div class="swatch color-white background-dark-200">Dark 200</div>
  <div class="swatch color-white background-dark-300">Dark 300</div>
  <div class="swatch color-white background-dark-400">Dark 400</div>
  <div class="swatch color-white background-dark-500">Dark 500</div>
  <div class="swatch color-white background-dark-600">Dark 600</div>
  <div class="swatch color-white background-dark-700">Dark 700</div>
  <div class="swatch color-white background-dark-800">Dark 800</div>
  <div class="swatch color-white background-dark-900">Dark 900</div>
</div>

```html
<div class="background-dark">...</div>
<div class="background-dark-100">...</div>
<div class="background-dark-200">...</div>
<div class="background-dark-300">...</div>
<div class="background-dark-400">...</div>
<div class="background-dark-500">...</div>
<div class="background-dark-600">...</div>
<div class="background-dark-700">...</div>
<div class="background-dark-800">...</div>
<div class="background-dark-900">...</div>
```

### Palettes

#### Primary

<div class="palette">
  <div class="swatch color-white background-primary">Primary</div>
  <div class="swatch color-white background-primary-100">Primary 100</div>
  <div class="swatch color-white background-primary-200">Primary 200</div>
  <div class="swatch color-white background-primary-300">Primary 300</div>
  <div class="swatch color-white background-primary-400">Primary 400</div>
  <div class="swatch color-white background-primary-500">Primary 500</div>
  <div class="swatch color-white background-primary-600">Primary 600</div>
  <div class="swatch color-white background-primary-700">Primary 700</div>
  <div class="swatch color-white background-primary-800">Primary 800</div>
  <div class="swatch color-white background-primary-900">Primary 900</div>
</div>

```html
<div class="background-primary">...</div>
<div class="background-primary-100">...</div>
<div class="background-primary-200">...</div>
<div class="background-primary-300">...</div>
<div class="background-primary-400">...</div>
<div class="background-primary-500">...</div>
<div class="background-primary-600">...</div>
<div class="background-primary-700">...</div>
<div class="background-primary-800">...</div>
<div class="background-primary-900">...</div>
```

#### Secondary

<div class="palette">
  <div class="swatch color-white background-secondary">Secondary</div>
  <div class="swatch color-white background-secondary-100">Secondary 100</div>
  <div class="swatch color-white background-secondary-200">Secondary 200</div>
  <div class="swatch color-white background-secondary-300">Secondary 300</div>
  <div class="swatch color-white background-secondary-400">Secondary 400</div>
  <div class="swatch color-white background-secondary-500">Secondary 500</div>
  <div class="swatch color-white background-secondary-600">Secondary 600</div>
  <div class="swatch color-white background-secondary-700">Secondary 700</div>
  <div class="swatch color-white background-secondary-800">Secondary 800</div>
  <div class="swatch color-white background-secondary-900">Secondary 900</div>
</div>

```html
<div class="background-secondary">...</div>
<div class="background-secondary-100">...</div>
<div class="background-secondary-200">...</div>
<div class="background-secondary-300">...</div>
<div class="background-secondary-400">...</div>
<div class="background-secondary-500">...</div>
<div class="background-secondary-600">...</div>
<div class="background-secondary-700">...</div>
<div class="background-secondary-800">...</div>
<div class="background-secondary-900">...</div>
```

#### Tertiary

<div class="palette">
  <div class="swatch color-white background-tertiary">Tertiary</div>
  <div class="swatch color-white background-tertiary-100">Tertiary 100</div>
  <div class="swatch color-white background-tertiary-200">Tertiary 200</div>
  <div class="swatch color-white background-tertiary-300">Tertiary 300</div>
  <div class="swatch color-white background-tertiary-400">Tertiary 400</div>
  <div class="swatch color-white background-tertiary-500">Tertiary 500</div>
  <div class="swatch color-white background-tertiary-600">Tertiary 600</div>
  <div class="swatch color-white background-tertiary-700">Tertiary 700</div>
  <div class="swatch color-white background-tertiary-800">Tertiary 800</div>
  <div class="swatch color-white background-tertiary-900">Tertiary 900</div>
</div>

```html
<div class="background-tertiary">...</div>
<div class="background-tertiary-100">...</div>
<div class="background-tertiary-200">...</div>
<div class="background-tertiary-300">...</div>
<div class="background-tertiary-400">...</div>
<div class="background-tertiary-500">...</div>
<div class="background-tertiary-600">...</div>
<div class="background-tertiary-700">...</div>
<div class="background-tertiary-800">...</div>
<div class="background-tertiary-900">...</div>
```

### Indicators

#### Error

<div class="palette">
  <div class="swatch color-white background-error">Error</div>
  <div class="swatch color-white background-error-100">Error 100</div>
  <div class="swatch color-white background-error-200">Error 200</div>
  <div class="swatch color-white background-error-300">Error 300</div>
  <div class="swatch color-white background-error-400">Error 400</div>
  <div class="swatch color-white background-error-500">Error 500</div>
  <div class="swatch color-white background-error-600">Error 600</div>
  <div class="swatch color-white background-error-700">Error 700</div>
  <div class="swatch color-white background-error-800">Error 800</div>
  <div class="swatch color-white background-error-900">Error 900</div>
</div>

```html
<div class="background-error">...</div>
<div class="background-error-100">...</div>
<div class="background-error-200">...</div>
<div class="background-error-300">...</div>
<div class="background-error-400">...</div>
<div class="background-error-500">...</div>
<div class="background-error-600">...</div>
<div class="background-error-700">...</div>
<div class="background-error-800">...</div>
<div class="background-error-900">...</div>
```

#### Warning

<div class="palette">
  <div class="swatch color-white background-warning">Warning</div>
  <div class="swatch color-white background-warning-100">Warning 100</div>
  <div class="swatch color-white background-warning-200">Warning 200</div>
  <div class="swatch color-white background-warning-300">Warning 300</div>
  <div class="swatch color-white background-warning-400">Warning 400</div>
  <div class="swatch color-white background-warning-500">Warning 500</div>
  <div class="swatch color-white background-warning-600">Warning 600</div>
  <div class="swatch color-white background-warning-700">Warning 700</div>
  <div class="swatch color-white background-warning-800">Warning 800</div>
  <div class="swatch color-white background-warning-900">Warning 900</div>
</div>

```html
<div class="background-warning">...</div>
<div class="background-warning-100">...</div>
<div class="background-warning-200">...</div>
<div class="background-warning-300">...</div>
<div class="background-warning-400">...</div>
<div class="background-warning-500">...</div>
<div class="background-warning-600">...</div>
<div class="background-warning-700">...</div>
<div class="background-warning-800">...</div>
<div class="background-warning-900">...</div>
```

#### Success

<div class="palette">
  <div class="swatch color-white background-success">Success</div>
  <div class="swatch color-white background-success-100">Success 100</div>
  <div class="swatch color-white background-success-200">Success 200</div>
  <div class="swatch color-white background-success-300">Success 300</div>
  <div class="swatch color-white background-success-400">Success 400</div>
  <div class="swatch color-white background-success-500">Success 500</div>
  <div class="swatch color-white background-success-600">Success 600</div>
  <div class="swatch color-white background-success-700">Success 700</div>
  <div class="swatch color-white background-success-800">Success 800</div>
  <div class="swatch color-white background-success-900">Success 900</div>
</div>

```html
<div class="background-success">...</div>
<div class="background-success-100">...</div>
<div class="background-success-200">...</div>
<div class="background-success-300">...</div>
<div class="background-success-400">...</div>
<div class="background-success-500">...</div>
<div class="background-success-600">...</div>
<div class="background-success-700">...</div>
<div class="background-success-800">...</div>
<div class="background-success-900">...</div>
```

#### Info

<div class="palette">
  <div class="swatch color-white background-info">Info</div>
  <div class="swatch color-white background-info-100">Info 100</div>
  <div class="swatch color-white background-info-200">Info 200</div>
  <div class="swatch color-white background-info-300">Info 300</div>
  <div class="swatch color-white background-info-400">Info 400</div>
  <div class="swatch color-white background-info-500">Info 500</div>
  <div class="swatch color-white background-info-600">Info 600</div>
  <div class="swatch color-white background-info-700">Info 700</div>
  <div class="swatch color-white background-info-800">Info 800</div>
  <div class="swatch color-white background-info-900">Info 900</div>
</div>

```html
<div class="background-info">...</div>
<div class="background-info-100">...</div>
<div class="background-info-200">...</div>
<div class="background-info-300">...</div>
<div class="background-info-400">...</div>
<div class="background-info-500">...</div>
<div class="background-info-600">...</div>
<div class="background-info-700">...</div>
<div class="background-info-800">...</div>
<div class="background-info-900">...</div>
```

## Border

<div class="swatch border">Border</div>

```html
<div class="border">...</div>
```

### Border Directions

<div class="swatch margin-bottom-xs border-vertical">Vertical</div>
<div class="swatch margin-bottom-xs border-horizontal">Horizontal</div>
<div class="swatch margin-bottom-xs border-top">Top</div>
<div class="swatch margin-bottom-xs border-right">Right</div>
<div class="swatch margin-bottom-xs border-bottom">Bottom</div>
<div class="swatch border-left">Left</div>

```html
<div class="border-vertical">...</div>
<div class="border-horizontal">...</div>
<div class="border-top">...</div>
<div class="border-right">...</div>
<div class="border-bottom">...</div>
<div class="border-left">...</div>
```

## Border Radius

<div class="swatch background-light border-radius">Border Radius</div>

```html
<div class="border-radius">...</div>
```

## Border Color

<div class="swatch border border-color-white">White</div>
<div class="swatch border border-color-black">Black</div>

```html
<div class="border border-color-white">...</div>
<div class="border border-color-black">...</div>
```

### Shades

#### Light

<div class="swatch border border-color-light">Light</div>
<div class="swatch border border-color-light-100">Light 100</div>
<div class="swatch border border-color-light-200">Light 200</div>
<div class="swatch border border-color-light-300">Light 300</div>
<div class="swatch border border-color-light-400">Light 400</div>
<div class="swatch border border-color-light-500">Light 500</div>
<div class="swatch border border-color-light-600">Light 600</div>
<div class="swatch border border-color-light-700">Light 700</div>
<div class="swatch border border-color-light-800">Light 800</div>
<div class="swatch border border-color-light-900">Light 900</div>

```html
<div class="border border-color-light">...</div>
<div class="border border-color-light-100">...</div>
<div class="border border-color-light-200">...</div>
<div class="border border-color-light-300">...</div>
<div class="border border-color-light-400">...</div>
<div class="border border-color-light-500">...</div>
<div class="border border-color-light-600">...</div>
<div class="border border-color-light-700">...</div>
<div class="border border-color-light-800">...</div>
<div class="border border-color-light-900">...</div>
```

#### Grey

<div class="swatch border border-color-grey">Grey</div>
<div class="swatch border border-color-grey-100">Grey 100</div>
<div class="swatch border border-color-grey-200">Grey 200</div>
<div class="swatch border border-color-grey-300">Grey 300</div>
<div class="swatch border border-color-grey-400">Grey 400</div>
<div class="swatch border border-color-grey-500">Grey 500</div>
<div class="swatch border border-color-grey-600">Grey 600</div>
<div class="swatch border border-color-grey-700">Grey 700</div>
<div class="swatch border border-color-grey-800">Grey 800</div>
<div class="swatch border border-color-grey-900">Grey 900</div>

```html
<div class="border border-color-grey">...</div>
<div class="border border-color-grey-100">...</div>
<div class="border border-color-grey-200">...</div>
<div class="border border-color-grey-300">...</div>
<div class="border border-color-grey-400">...</div>
<div class="border border-color-grey-500">...</div>
<div class="border border-color-grey-600">...</div>
<div class="border border-color-grey-700">...</div>
<div class="border border-color-grey-800">...</div>
<div class="border border-color-grey-900">...</div>
```

#### Dark

<div class="swatch border border-color-dark">Dark</div>
<div class="swatch border border-color-dark-100">Dark 100</div>
<div class="swatch border border-color-dark-200">Dark 200</div>
<div class="swatch border border-color-dark-300">Dark 300</div>
<div class="swatch border border-color-dark-400">Dark 400</div>
<div class="swatch border border-color-dark-500">Dark 500</div>
<div class="swatch border border-color-dark-600">Dark 600</div>
<div class="swatch border border-color-dark-700">Dark 700</div>
<div class="swatch border border-color-dark-800">Dark 800</div>
<div class="swatch border border-color-dark-900">Dark 900</div>

```html
<div class="border border-color-dark">...</div>
<div class="border border-color-dark-100">...</div>
<div class="border border-color-dark-200">...</div>
<div class="border border-color-dark-300">...</div>
<div class="border border-color-dark-400">...</div>
<div class="border border-color-dark-500">...</div>
<div class="border border-color-dark-600">...</div>
<div class="border border-color-dark-700">...</div>
<div class="border border-color-dark-800">...</div>
<div class="border border-color-dark-900">...</div>
```

### Palettes

#### Primary

<div class="swatch border border-color-primary">Primary</div>
<div class="swatch border border-color-primary-100">Primary 100</div>
<div class="swatch border border-color-primary-200">Primary 200</div>
<div class="swatch border border-color-primary-300">Primary 300</div>
<div class="swatch border border-color-primary-400">Primary 400</div>
<div class="swatch border border-color-primary-500">Primary 500</div>
<div class="swatch border border-color-primary-600">Primary 600</div>
<div class="swatch border border-color-primary-700">Primary 700</div>
<div class="swatch border border-color-primary-800">Primary 800</div>
<div class="swatch border border-color-primary-900">Primary 900</div>

```html
<div class="border border-color-primary">...</div>
<div class="border border-color-primary-100">...</div>
<div class="border border-color-primary-200">...</div>
<div class="border border-color-primary-300">...</div>
<div class="border border-color-primary-400">...</div>
<div class="border border-color-primary-500">...</div>
<div class="border border-color-primary-600">...</div>
<div class="border border-color-primary-700">...</div>
<div class="border border-color-primary-800">...</div>
<div class="border border-color-primary-900">...</div>
```

#### Secondary

<div class="swatch border border-color-secondary">Secondary</div>
<div class="swatch border border-color-secondary-100">Secondary 100</div>
<div class="swatch border border-color-secondary-200">Secondary 200</div>
<div class="swatch border border-color-secondary-300">Secondary 300</div>
<div class="swatch border border-color-secondary-400">Secondary 400</div>
<div class="swatch border border-color-secondary-500">Secondary 500</div>
<div class="swatch border border-color-secondary-600">Secondary 600</div>
<div class="swatch border border-color-secondary-700">Secondary 700</div>
<div class="swatch border border-color-secondary-800">Secondary 800</div>
<div class="swatch border border-color-secondary-900">Secondary 900</div>

```html
<div class="border border-color-secondary">...</div>
<div class="border border-color-secondary-100">...</div>
<div class="border border-color-secondary-200">...</div>
<div class="border border-color-secondary-300">...</div>
<div class="border border-color-secondary-400">...</div>
<div class="border border-color-secondary-500">...</div>
<div class="border border-color-secondary-600">...</div>
<div class="border border-color-secondary-700">...</div>
<div class="border border-color-secondary-800">...</div>
<div class="border border-color-secondary-900">...</div>
```

#### Tertiary

<div class="swatch border border-color-tertiary">Tertiary</div>
<div class="swatch border border-color-tertiary-100">Tertiary 100</div>
<div class="swatch border border-color-tertiary-200">Tertiary 200</div>
<div class="swatch border border-color-tertiary-300">Tertiary 300</div>
<div class="swatch border border-color-tertiary-400">Tertiary 400</div>
<div class="swatch border border-color-tertiary-500">Tertiary 500</div>
<div class="swatch border border-color-tertiary-600">Tertiary 600</div>
<div class="swatch border border-color-tertiary-700">Tertiary 700</div>
<div class="swatch border border-color-tertiary-800">Tertiary 800</div>
<div class="swatch border border-color-tertiary-900">Tertiary 900</div>

```html
<div class="border border-color-tertiary">...</div>
<div class="border border-color-tertiary-100">...</div>
<div class="border border-color-tertiary-200">...</div>
<div class="border border-color-tertiary-300">...</div>
<div class="border border-color-tertiary-400">...</div>
<div class="border border-color-tertiary-500">...</div>
<div class="border border-color-tertiary-600">...</div>
<div class="border border-color-tertiary-700">...</div>
<div class="border border-color-tertiary-800">...</div>
<div class="border border-color-tertiary-900">...</div>
```

### Indicators

#### Info

<div class="swatch border border-color-info">Info</div>
<div class="swatch border border-color-info-100">Info 100</div>
<div class="swatch border border-color-info-200">Info 200</div>
<div class="swatch border border-color-info-300">Info 300</div>
<div class="swatch border border-color-info-400">Info 400</div>
<div class="swatch border border-color-info-500">Info 500</div>
<div class="swatch border border-color-info-600">Info 600</div>
<div class="swatch border border-color-info-700">Info 700</div>
<div class="swatch border border-color-info-800">Info 800</div>
<div class="swatch border border-color-info-900">Info 900</div>

```html
<div class="border border-color-info">...</div>
<div class="border border-color-info-100">...</div>
<div class="border border-color-info-200">...</div>
<div class="border border-color-info-300">...</div>
<div class="border border-color-info-400">...</div>
<div class="border border-color-info-500">...</div>
<div class="border border-color-info-600">...</div>
<div class="border border-color-info-700">...</div>
<div class="border border-color-info-800">...</div>
<div class="border border-color-info-900">...</div>
```

#### Error

<div class="swatch border border-color-error">Error</div>
<div class="swatch border border-color-error-100">Error 100</div>
<div class="swatch border border-color-error-200">Error 200</div>
<div class="swatch border border-color-error-300">Error 300</div>
<div class="swatch border border-color-error-400">Error 400</div>
<div class="swatch border border-color-error-500">Error 500</div>
<div class="swatch border border-color-error-600">Error 600</div>
<div class="swatch border border-color-error-700">Error 700</div>
<div class="swatch border border-color-error-800">Error 800</div>
<div class="swatch border border-color-error-900">Error 900</div>

```html
<div class="border border-color-error">...</div>
<div class="border border-color-error-100">...</div>
<div class="border border-color-error-200">...</div>
<div class="border border-color-error-300">...</div>
<div class="border border-color-error-400">...</div>
<div class="border border-color-error-500">...</div>
<div class="border border-color-error-600">...</div>
<div class="border border-color-error-700">...</div>
<div class="border border-color-error-800">...</div>
<div class="border border-color-error-900">...</div>
```

#### Warning

<div class="swatch border border-color-warning">Warning</div>
<div class="swatch border border-color-warning-100">Warning 100</div>
<div class="swatch border border-color-warning-200">Warning 200</div>
<div class="swatch border border-color-warning-300">Warning 300</div>
<div class="swatch border border-color-warning-400">Warning 400</div>
<div class="swatch border border-color-warning-500">Warning 500</div>
<div class="swatch border border-color-warning-600">Warning 600</div>
<div class="swatch border border-color-warning-700">Warning 700</div>
<div class="swatch border border-color-warning-800">Warning 800</div>
<div class="swatch border border-color-warning-900">Warning 900</div>

```html
<div class="border border-color-warning">...</div>
<div class="border border-color-warning-100">...</div>
<div class="border border-color-warning-200">...</div>
<div class="border border-color-warning-300">...</div>
<div class="border border-color-warning-400">...</div>
<div class="border border-color-warning-500">...</div>
<div class="border border-color-warning-600">...</div>
<div class="border border-color-warning-700">...</div>
<div class="border border-color-warning-800">...</div>
<div class="border border-color-warning-900">...</div>
```

#### Success

<div class="swatch border border-color-success">Success</div>
<div class="swatch border border-color-success-100">Success 100</div>
<div class="swatch border border-color-success-200">Success 200</div>
<div class="swatch border border-color-success-300">Success 300</div>
<div class="swatch border border-color-success-400">Success 400</div>
<div class="swatch border border-color-success-500">Success 500</div>
<div class="swatch border border-color-success-600">Success 600</div>
<div class="swatch border border-color-success-700">Success 700</div>
<div class="swatch border border-color-success-800">Success 800</div>
<div class="swatch border border-color-success-900">Success 900</div>

```html
<div class="border border-color-success">...</div>
<div class="border border-color-success-100">...</div>
<div class="border border-color-success-200">...</div>
<div class="border border-color-success-300">...</div>
<div class="border border-color-success-400">...</div>
<div class="border border-color-success-500">...</div>
<div class="border border-color-success-600">...</div>
<div class="border border-color-success-700">...</div>
<div class="border border-color-success-800">...</div>
<div class="border border-color-success-900">...</div>
```