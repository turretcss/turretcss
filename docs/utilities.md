---
layout: docs
title: Utilities
page_title: Utilities - Turret - A Responsive Front-end Framework for Accessible and Semantic Websites
description: Utility classes for typographic styles, display, positioning, floats and visibility of elements for rapid frontend development.
permalink: /docs/utilities/
---

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
        <td>Clears floats using <code>.clearfix();</code> mixin</td>
      </tr>
      <tr>  
        <td><code>center-block</code></td>
        <td>Makes element center block using <code>.center-block();</code> mixin</td>
      </tr>
      <tr>  
        <td><code>cover</code></td>
        <td>Makes element cover it's container using <code>.cover();</code> mixin</td>
      </tr>
      <tr>  
        <td><code>center</code></td>
        <td>Makes element center using <code>.center();</code> mixin</td>
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
        <td><code>pointer</code></td>
        <td>Sets <code>cursor: pointer;</code></td>
      </tr>
      <tr>  
        <td><code>no-margin</code></td>
        <td>Removes margin <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
      </tr>
      <tr>  
        <td><code>no-padding</code></td>
        <td>Removes padding <small>(Note: <code>!important</code> is used to override specificity issues)</small></td>
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
        <td>Hides element <code>.hide();</code> mixin</td>
      </tr>
      <tr>  
        <td><code>show</code></td>
        <td>Shows element <code>.show();</code> mixin</td>
      </tr>
      <tr>  
        <td><code>hide-text</code></td>
        <td>Hides text <code>.hide-text();</code> mixin</td>
      </tr>
      <tr>  
        <td><code>hide-visually</code></td>
        <td>Hide element but keep in DOM for Screen Readers <code>.hide-visually();</code> mixin</td>
      </tr>
      <tr>  
        <td><code>visible</code></td>
        <td>Sets <code>visibility: visible;</code></td>
      </tr>
      <tr>  
        <td><code>invisible</code></td>
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
        <td class="is-visible">Visible</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
      </tr>
      <tr>
        <td><code>.visible-s</code></td>
        <td class="is-hidden">Hidden</td>
        <td class="is-visible">Visible</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
      </tr>
      <tr>
        <td><code>.visible-s-up</code></td>
        <td class="is-hidden">Hidden</td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
      </tr>
      <tr>
        <td><code>.visible-s-down</code></td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
      </tr>
      <tr>
        <td><code>.visible-m</code></td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-visible">Visible</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
      </tr>
      <tr>
        <td><code>.visible-m-up</code></td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
      </tr>
      <tr>
        <td><code>.visible-m-down</code></td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
      </tr>
      <tr>
        <td><code>.visible-l</code></td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-visible">Visible</td>
        <td class="is-hidden">Hidden</td>
      </tr>
      <tr>
        <td><code>.visible-l-up</code></td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
      </tr>
      <tr>
        <td><code>.visible-l-down</code></td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
        <td class="is-hidden">Hidden</td>
      </tr>
      <tr>
        <td><code>.visible-xl</code></td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-visible">Visible</td>
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
        <td class="is-hidden">Hidden</td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
      </tr>
      <tr>
        <td><code>.hidden-s</code></td>
        <td class="is-visible">Visible</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
      </tr>
      <tr>
        <td><code>.hidden-s-up</code></td>
        <td class="is-visible">Visible</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
      </tr>
      <tr>
        <td><code>.hidden-s-down</code></td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
      </tr>
      <tr>
        <td><code>.hidden-m</code></td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
      </tr>
      <tr>
        <td><code>.hidden-m-up</code></td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
      </tr>
      <tr>
        <td><code>.hidden-m-down</code></td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
      </tr>
      <tr>
        <td><code>.hidden-l</code></td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-visible">Visible</td>
      </tr>
      <tr>
        <td><code>.hidden-l-up</code></td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
      </tr>
      <tr>
        <td><code>.hidden-l-down</code></td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-hidden">Hidden</td>
        <td class="is-visible">Visible</td>
      </tr>
      <tr>
        <td><code>.hidden-xl</code></td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
        <td class="is-visible">Visible</td>
        <td class="is-hidden">Hidden</td>
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
        <td>Applies <code>flex: 1;</code> to element</td>
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

### Responsive Clear Floats

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
        <td><code>.clear-right-xs</code></td>
        <td class="is-clear">clear</td>
        <td class="is-float">right</td>
        <td class="is-float">right</td>
        <td class="is-float">right</td>
        <td class="is-float">right</td>
      </tr>
      <tr>
        <td><code>.clear-right-s</code></td>
        <td class="is-float">right</td>
        <td class="is-clear">clear</td>
        <td class="is-float">right</td>
        <td class="is-float">right</td>
        <td class="is-float">right</td>
      </tr>
      <tr>
        <td><code>.clear-right-m</code></td>
        <td class="is-float">right</td>
        <td class="is-float">right</td>
        <td class="is-clear">clear</td>
        <td class="is-float">right</td>
        <td class="is-float">right</td>
      </tr>
      <tr>
        <td><code>.clear-right-l</code></td>
        <td class="is-float">right</td>
        <td class="is-float">right</td>
        <td class="is-float">right</td>
        <td class="is-clear">clear</td>
        <td class="is-float">right</td>
      </tr>
      <tr>
        <td><code>.clear-right-xl</code></td>
        <td class="is-float">right</td>
        <td class="is-float">right</td>
        <td class="is-float">right</td>
        <td class="is-float">right</td>
        <td class="is-clear">clear</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <td><code>.clear-left-xs</code></td>
        <td class="is-clear">clear</td>
        <td class="is-float">left</td>
        <td class="is-float">left</td>
        <td class="is-float">left</td>
        <td class="is-float">left</td>
      </tr>
      <tr>
        <td><code>.clear-left-s</code></td>
        <td class="is-float">left</td>
        <td class="is-clear">clear</td>
        <td class="is-float">left</td>
        <td class="is-float">left</td>
        <td class="is-float">left</td>
      </tr>
      <tr>
        <td><code>.clear-left-m</code></td>
        <td class="is-float">left</td>
        <td class="is-float">left</td>
        <td class="is-clear">clear</td>
        <td class="is-float">left</td>
        <td class="is-float">left</td>
      </tr>
      <tr>
        <td><code>.clear-left-l</code></td>
        <td class="is-float">left</td>
        <td class="is-float">left</td>
        <td class="is-float">left</td>
        <td class="is-clear">clear</td>
        <td class="is-float">left</td>
      </tr>
      <tr>
        <td><code>.clear-left-xl</code></td>
        <td class="is-float">left</td>
        <td class="is-float">left</td>
        <td class="is-float">left</td>
        <td class="is-float">left</td>
        <td class="is-clear">clear</td>
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

## Margin

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
        <td>Applies <code>@margin-xl</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-l</code></td>
        <td>Applies <code>@margin-l</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-m</code></td>
        <td>Applies <code>@margin-m</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-s</code></td>
        <td>Applies <code>@margin-s</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-xs</code></td>
        <td>Applies <code>@margin-xs</code> to element</td>
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
        <td>Applies <code>margin-top: @margin-xl;</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-top-l</code></td>
        <td>Applies <code>margin-top: @margin-l;</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-top-m</code></td>
        <td>Applies <code>margin-top: @margin-m;</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-top-s</code></td>
        <td>Applies <code>margin-top: @margin-s;</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-top-xs</code></td>
        <td>Applies <code>margin-top: @margin-xs;</code> to element</td>
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
        <td>Applies <code>margin-bottom: @margin-xl;</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-bottom-l</code></td>
        <td>Applies <code>margin-bottom: @margin-l;</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-bottom-m</code></td>
        <td>Applies <code>margin-bottom: @margin-m;</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-bottom-s</code></td>
        <td>Applies <code>margin-bottom: @margin-s;</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-bottom-xs</code></td>
        <td>Applies <code>margin-bottom: @margin-xs;</code> to element</td>
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
        <td>Applies <code>margin-left: @margin-xl;</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-left-l</code></td>
        <td>Applies <code>margin-left: @margin-l;</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-left-m</code></td>
        <td>Applies <code>margin-left: @margin-m;</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-left-s</code></td>
        <td>Applies <code>margin-left: @margin-s;</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-left-xs</code></td>
        <td>Applies <code>margin-left: @margin-xs;</code> to element</td>
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
        <td>Applies <code>margin-right: @margin-xl;</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-right-l</code></td>
        <td>Applies <code>margin-right: @margin-l;</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-right-m</code></td>
        <td>Applies <code>margin-right: @margin-m;</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-right-s</code></td>
        <td>Applies <code>margin-right: @margin-s;</code> to element</td>
      </tr>
      <tr>
        <td><code>margin-right-xs</code></td>
        <td>Applies <code>margin-right: @margin-xs;</code> to element</td>
      </tr>
    </tbody>
  </table>
</div>

## Padding

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
        <td>Applies <code>@padding-xl</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-l</code></td>
        <td>Applies <code>@padding-l</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-m</code></td>
        <td>Applies <code>@padding-m</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-s</code></td>
        <td>Applies <code>@padding-s</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-xs</code></td>
        <td>Applies <code>@padding-xs</code> to element</td>
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
        <td>Applies <code>padding-top: @padding-xl;</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-top-l</code></td>
        <td>Applies <code>padding-top: @padding-l;</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-top-m</code></td>
        <td>Applies <code>padding-top: @padding-m;</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-top-s</code></td>
        <td>Applies <code>padding-top: @padding-s;</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-top-xs</code></td>
        <td>Applies <code>padding-top: @padding-xs;</code> to element</td>
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
        <td>Applies <code>padding-bottom: @padding-xl;</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-bottom-l</code></td>
        <td>Applies <code>padding-bottom: @padding-l;</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-bottom-m</code></td>
        <td>Applies <code>padding-bottom: @padding-m;</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-bottom-s</code></td>
        <td>Applies <code>padding-bottom: @padding-s;</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-bottom-xs</code></td>
        <td>Applies <code>padding-bottom: @padding-xs;</code> to element</td>
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
        <td>Applies <code>padding-left: @padding-xl;</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-left-l</code></td>
        <td>Applies <code>padding-left: @padding-l;</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-left-m</code></td>
        <td>Applies <code>padding-left: @padding-m;</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-left-s</code></td>
        <td>Applies <code>padding-left: @padding-s;</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-left-xs</code></td>
        <td>Applies <code>padding-left: @padding-xs;</code> to element</td>
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
        <td>Applies <code>padding-right: @padding-xl;</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-right-l</code></td>
        <td>Applies <code>padding-right: @padding-l;</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-right-m</code></td>
        <td>Applies <code>padding-right: @padding-m;</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-right-s</code></td>
        <td>Applies <code>padding-right: @padding-s;</code> to element</td>
      </tr>
      <tr>
        <td><code>padding-right-xs</code></td>
        <td>Applies <code>padding-right: @padding-xs;</code> to element</td>
      </tr>
    </tbody>
  </table>
</div>

## Font Family

<p class="sans-serif-font">Sans Serif Font</p>
<p class="serif-font">Serif Font</p>
<p class="monospace-font">Monospace Font</p>
<p class="thin-font">Thin Font</p>
<p class="regular-font">Regular Font</p>
<p class="medium-font">Medium Font</p>
<p class="semibold-font">Semibold Font</p>
<p class="bold-font">Bold Font</p>

```html
<p class="sans-serif-font">Sans Serif Font</p>
<p class="serif-font">Serif Font</p>
<p class="monospace-font">Monospace Font</p>
<p class="thin-font">Thin Font</p>
<p class="regular-font">Regular Font</p>
<p class="medium-font">Medium Font</p>
<p class="semibold-font">Semibold Font</p>
<p class="bold-font">Bold Font</p>
```

## Font Size

<p class="font-size-xl">Font Size Extra Large</p>
<p class="font-size-l">Font Size Large</p>
<p class="font-size-m">Font Size Medium</p>
<p class="font-size-s">Font Size Small</p>
<p class="font-size-xs">Font Size Extra Small</p>

```html
<p class="font-size-xl">Font Size Extra Large</p>
<p class="font-size-l">Font Size Large</p>
<p class="font-size-m">Font Size Medium</p>
<p class="font-size-s">Font Size Small</p>
<p class="font-size-xs">Font Size Extra Small</p>
```

## Text

<p class="text-left">Text Left</p>
<p class="text-center">Text Center</p>
<p class="text-right">Text Right</p>
<p class="text-justify">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Maecenas sed diam eget risus varius blandit sit amet non magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
<p class="truncate">Curabitur blandit tempus porttitor. Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

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

## Text Color

<p class="text-color text-white">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-light-grey">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-grey">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-dark-grey">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-black">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-error">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-warning">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-success">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-info">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-light">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-primary">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-secondary">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-tertiary">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-dark">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>

```html
<p class="text-white">...</p>
<p class="text-light-grey">...</p>
<p class="text-grey">...</p>
<p class="text-dark-grey">...</p>
<p class="text-black">...</p>
<p class="text-error">...</p>
<p class="text-warning">...</p>
<p class="text-success">...</p>
<p class="text-info">...</p>
<p class="text-light">...</p>
<p class="text-primary">...</p>
<p class="text-secondary">...</p>
<p class="text-tertiary">...</p>
<p class="text-dark">...</p>
```

## Background

<p class="background-white padding-xs">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-light-grey padding-xs">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-grey padding-xs text-white">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-dark-grey padding-xs text-white">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-black padding-xs text-white">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-error padding-xs">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-warning padding-xs">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-success padding-xs">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-info padding-xs">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-light padding-xs">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-primary padding-xs text-white">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-secondary padding-xs text-white">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-tertiary padding-xs text-white">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-dark padding-xs text-white">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>

```html
<p class="background-white">...</p>
<p class="background-light-grey">...</p>
<p class="background-grey">...</p>
<p class="background-dark-grey">...</p>
<p class="background-black">...</p>
<p class="background-error">...</p>
<p class="background-warning">...</p>
<p class="background-success">...</p>
<p class="background-info">...</p>
<p class="background-light">...</p>
<p class="background-primary">...</p>
<p class="background-secondary">...</p>
<p class="background-tertiary">...</p>
<p class="background-dark">...</p>  
```
      