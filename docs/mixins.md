---
layout: docs
title: Mixins
page_title: Mixins - Turret - A Responsive Front-end Framework for Accessible and Semantic Websites
description: Turrets set of mixins for simple & maintainable Less styles, as well as a collection of mixins for cross browser compatability of CSS3 properties
permalink: /docs/mixins/
---

## General

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th width="30%">Mixin</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>.clearfix();</code></td>
        <td>Clearfix mixin used in row column wrapper</td>
      </tr>
      <tr>
        <td><code>.show();</code></td>
        <td>Show element setting <code>display: block;</code>, <code>visibility: visible;</code>, and <code>opacity: 1;</code></td>
      </tr>
      <tr>
        <td><code>.hide();</code></td>
        <td>Hide element setting <code>display: none;</code>, <code>visibility: hidden;</code>, and <code>opacity: 0;</code></td>
      </tr>
      <tr>
        <td><code>.size(@width, @height);</code></td>
        <td>Sizing utility to set width and height of an element</td>
      </tr>
      <tr>
        <td><code>.square(@size);</code></td>
        <td>Sizing utility to set equal width and height of an element from <code>@size</code></td>
      </tr>
      <tr>
        <td><code>.uppercase(@letter-spacing: @body-letter-spacing);</code></td>
        <td>Sets text to uppercase with customisable letter-spacing from <code>@letter-spacing</code></td>
      </tr>
      <tr>
        <td><code>.overflow-scroll();</code></td>
        <td>Set overflow to scroll with <code>-webkit-overflow-scrolling: touch;</code> for Mobile Safari</td>
      </tr>
      <tr>
        <td><code>.center-block();</code></td>
        <td>Center an element with left/right <code>margin: auto;</code> and <code>display: block;</code></td>
      </tr>
      <tr>
        <td><code>.center();</code></td>
        <td>Absolutely center an element from the top and left by 50% using <code>.translate(-50%, -50%);</code> to center based on element size</td>
      </tr>
      <tr>
        <td><code>.hide-text();</code></td>
        <td>Hide text visually whilst still being able to be read by assistive technologies</td>
      </tr>
      <tr>
        <td><code>.text-hide();</code></td>
        <td>Utility mixin for <code>.hide-text();</code></td>
      </tr>
      <tr>
        <td><code>.truncate();</code></td>
        <td>Truncate text with ellipsis based on containing element width</td>
      </tr>
      <tr>
        <td><code>.cover();</code></td>
        <td>Absolutely cover parent element</td>
      </tr>
      <tr>
        <td><code>.hide-visually();</code></td>
        <td>Hide but keep in DOM for Screen Readers</td>
      </tr>
      <tr>
        <td><code>.user-select(@argument: none);</code></td>
        <td>Vendor prefix for <code>user-select</code> property</td>
      </tr>
      <tr>
        <td><code>.appearance(@appearance);</code></td>
        <td>Vendor prefix for <code>appearance</code> property</td>
      </tr>
      <tr>
        <td><code>.img-retina(@file-1x, @file-2x, @width-1x, @height-1x);</code></td>
        <td>Background image retina utility using @1x width and height</td>
      </tr>
      <tr>
        <td><code>.stroke-offset(@offset);</code></td>
        <td>Sets <code>stroke-dasharray</code> and <code>stroke-dashoffset</code> on element</td>
      </tr>
      <tr>
        <td><code>.media-ratio(@width, @height);</code></td>
        <td>Media ratio utility used by <code>.media</code> to set <code>padding-top</code> on element based on ratio</td>
      </tr>
      <tr>
        <td><code>.column-count(@count);</code></td>
        <td>Vendor prefix for <code>column-count</code> property</td>
      </tr>
      <tr>
        <td><code>.column-gap(@gap);</code></td>
        <td>Vendor prefix for <code>column-gap</code> property</td>
      </tr>
      <tr>
        <td><code>.box-sizing(@box-sizing);</code></td>
        <td>Vendor prefix for <code>box-sizing</code> property</td>
      </tr>
    </tbody>
  </table>
</div>

## Input

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Mixin</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>.input()</code></td>
        <td>Makes element block level and styled from default input styling</td>
      </tr>
      <tr>
        <td><code>.input-styles(@color, @background, @border)</code></td>
        <td>Applies styles to input using <code>@color</code>, <code>@background</code>, <code>@border</code></td>
      </tr>
      <tr>
        <td><code>.input-indicator(@color)</code></td>
        <td>Applies <code>color</code> and <code>border-color</code> to indicator input</td>
      </tr>
      <tr>
        <td><code>.input-theme(@color, @background, @border, @focus-color, @focus-background, @focus-border)</code></td>
        <td>Applies theme to input using <code>@color</code>, <code>@background</code>, <code>@border</code> for normal and <code>:focus</code> states</td>
      </tr>
      <tr>
        <td><code>.input-size(@padding, @height, @font-size)</code></td>
        <td>Sets input size with <code>@padding</code>, <code>@height</code>, and <code>@font-size</code></td>
      </tr>
      <tr>
        <td><code>.input-group-button(@padding, @height, @font-size)</code></td>
        <td>Sets input group button size with <code>@padding</code>, <code>@height</code>, and <code>@font-size</code></td>
      </tr>
    </tbody>
  </table>
</div>

## Select

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Mixin</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>.select-size(@padding, @height, @font-size)</code></td>
        <td>Sets select size with <code>@padding</code>, <code>@height</code>, and <code>@font-size</code></td>
      </tr>
    </tbody>
  </table>
</div>

## Button

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Mixin</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>.button()</code></td>
        <td>Makes element styled from default button styling</td>
      </tr>
      <tr>
        <td><code>.button-styles(@color, @background, @border)</code></td>
        <td>Applies styles to button using <code>@color</code>, <code>@background</code>, <code>@border</code></td>
      </tr>
      <tr>
        <td><code>.button-theme(@color, @background, @border, @hover-color, @hover-background, @hover-border)</code></td>
        <td>Applies theme to button using <code>@color</code>, <code>@background</code>, <code>@border</code> for normal, <code>:hover</code> and <code>:focus</code> states</td>
      </tr>
      <tr>
        <td><code>.button-size(@padding, @height, @font-size)</code></td>
        <td>Sets button size with <code>@padding</code>, <code>@height</code>, and <code>@font-size</code></td>
      </tr>
    </tbody>
  </table>
</div>

## Font

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th width="45%">Mixin</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td><code>.font(@family, @weight, @size);</code></td>
        <td>Quick utility to set <code>font-family</code>, <code>font-weight</code> and <code>font-size</code> values</td>
      </tr>
      <tr>  
        <td><code>.font-family(@family, @weight);</code></td>
        <td>Quick utility to set <code>font-family</code> and <code>font-weight</code> values</td>
      </tr>
      <tr>  
        <td><code>.font-face(@family, @weight: normal, @style: normal);</code></td>
        <td>Import font using <code>@font-face</code></td>
      </tr>
      <tr>  
        <td><code>.font-size(@rem);</code></td>
        <td>Appends <code>font-size</code> value with <code>rem</code></td>
      </tr>
      <tr>  
        <td><code>.font-size-pixel(@rem);</code></td>
        <td>Sets <code>font-size</code> using <code>rem</code> with <code>px</code> fallback</td>
      </tr>
      <tr>  
        <td><code>.thin-font();</code></td>
        <td>Sets <code>font-family</code> and <code>font-weight</code> from values in <code>base/font.less</code></td>
      </tr>
      <tr>  
        <td><code>.regular-font();</code></td>
        <td>Sets <code>font-family</code> and <code>font-weight</code> from values in <code>base/font.less</code></td>
      </tr>
      <tr>  
        <td><code>.medium-font();</code></td>
        <td>Sets <code>font-family</code> and <code>font-weight</code> from values in <code>base/font.less</code></td>
      </tr>
      <tr>  
        <td><code>.semibold-font();</code></td>
        <td>Sets <code>font-family</code> and <code>font-weight</code> from values in <code>base/font.less</code></td>
      </tr>
      <tr>  
        <td><code>.bold-font();</code></td>
        <td>Sets <code>font-family</code> and <code>font-weight</code> from values in <code>base/font.less</code></td>
      </tr>
    </tbody>
  </table>
</div>

## Border Radius

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Mixin</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td><code>.border-radiuses (@top-left, @top-right, @bottom-left, @bottom-right);</code></td>
        <td>Set each border radius default is <code>@border-radius</code></td>
      </tr>
      <tr>  
        <td><code>.border-top-radius(@radius);</code></td>
        <td>Sets top <code>border-radius</code></td>
      </tr>
      <tr>  
        <td><code>.border-right-radius(@radius);</code></td>
        <td>Sets right <code>border-radius</code></td>
      </tr>
      <tr>  
        <td><code>.border-bottom-radius(@radius);</code></td>
        <td>Sets bottom <code>border-radius</code></td>
      </tr>
      <tr>  
        <td><code>.border-left-radius(@radius);</code></td>
        <td>Sets left <code>border-radius</code></td>
      </tr>
    </tbody>
  </table>
</div>

## Background

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Mixin</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td><code>.gradient(@start, @start-origin, @stop, @stop-origin);</code></td>
        <td>Gradient default starting at <code>@white</code> with origin <code>0%</code> ending at <code>@black</code> with origin <code>100%</code></td>
      </tr>
      <tr>  
        <td><code>.horizontal-gradient(@start, @start-origin, @stop, @stop-origin);</code></td>
        <td>Horizontal Gradient default starting at <code>@white</code> with origin <code>0%</code> ending at <code>@black</code> with origin <code>100%</code></td>
      </tr>
      <tr>  
        <td><code>.radial-gradient(@start, @start-origin, @stop, @stop-origin);</code></td>
        <td>Radial Gradient default starting at <code>@white</code> with origin <code>0%</code> ending at <code>@black</code> with origin <code>100%</code></td>
      </tr>
      <tr>  
        <td><code>.background-cover(@url);</code></td>
        <td>Sets background image from <code>@url</code> using <code>background-size: cover;</code></td>
      </tr>
      <tr>  
        <td><code>.background-cover-fixed(@url);</code></td>
        <td>Sets background image from <code>@url</code> using <code>background-size: cover;</code> and <code>background-attachment: fixed;</code> <small>(note: only on large screens)</small></td>
      </tr>
    </tbody>
  </table>
</div>

## Placeholder

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Mixin</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td><code>.placeholder-input(@font-family, @font-size, @color, @letter-spacing, @text-transform) </code></td>
        <td>Sets styles for input placeholder<br><small>not to be used directly</small></td>
      </tr>
      <tr>  
        <td><code>.placeholder-input-focus(@color)</code></td>
        <td>Sets color for input placeholders on focus<br><small>not to be used directly</small></td>
      </tr>
      <tr>  
        <td><code>.placeholder(@color, @font-size, @font-family, @letter-spacing, @text-transform)</code></td>
        <td>Sets styles for input placeholders with all vendor prefixes</td>
      </tr>
    </tbody>
  </table>
</div>

## Arrows

<div class="arrow-boxes">
  <div class="arrow-box arrow-top"></div>
  <div class="arrow-box arrow-top-left"></div>
  <div class="arrow-box arrow-top-right"></div>
  <div class="arrow-box arrow-bottom"></div>
  <div class="arrow-box arrow-bottom-left"></div>
  <div class="arrow-box arrow-bottom-right"></div>
  <div class="arrow-box arrow-left"></div>
  <div class="arrow-box arrow-right"></div>
</div>

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Mixin</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td><code>.arrow();</code></td>
        <td>Utility mixin for arrow mixins<br><small>not to be used directly</small></td>
      </tr>
      <tr>  
        <td><code>.arrow-top(@size, @color);</code></td>
        <td>Creates CSS arrow on top of element with <code>@size</code> and <code>@color</code></td>
      </tr>
      <tr>  
        <td><code>.arrow-top-left(@size, @color, @offset);</code></td>
        <td>Creates CSS arrow on top of element with <code>@size</code> and <code>@color</code> and offset from left by <code>@offset</code></td>
      </tr>
      <tr>  
        <td><code>.arrow-top-right(@size, @color, @offset);</code></td>
        <td>Creates CSS arrow on top of element with <code>@size</code> and <code>@color</code> and offset from right by <code>@offset</code></td>
      </tr>
      <tr>  
        <td><code>.arrow-bottom(@size, @color);</code></td>
        <td>Creates CSS arrow on bottom of element with <code>@size</code> and <code>@color</code></td>
      </tr>
      <tr>  
        <td><code>.arrow-bottom-left(@size, @color, @offset);</code></td>
        <td>Creates CSS arrow on bottom of element with <code>@size</code> and <code>@color</code> and offset from left by <code>@offset</code></td>
      </tr>
      <tr>  
        <td><code>.arrow-bottom-right(@size, @color, @offset);</code></td>
        <td>Creates CSS arrow on bottom of element with <code>@size</code> and <code>@color</code> and offset from right by <code>@offset</code></td>
      </tr>
      <tr>  
        <td><code>.arrow-left(@size, @color);</code></td>
        <td>Creates CSS arrow on left of element with <code>@size</code> and <code>@color</code></td>
      </tr>
      <tr>  
        <td><code>.arrow-right(@size, @color);</code></td>
        <td>Creates CSS arrow on right of element with <code>@size</code> and <code>@color</code></td>
      </tr>
    </tbody>
  </table>
</div>

## Transitions

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Mixin</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td><code>.transition(@transition);</code></td>
        <td>Vendor prefix for <code>transition</code> property</td>
      </tr>
      <tr>  
        <td><code>.transitions(@transition1, @transition2);</code></td>
        <td>Vendor prefix for multiple <code>transitions</code> property</td>
      </tr>
      <tr>  
        <td><code>.transition-delay(@transition-delay);</code></td>
        <td>Vendor prefix for <code>transition-delay</code> property</td>
      </tr>
      <tr>  
        <td><code>.transition-property(@transition-property);</code></td>
        <td>Vendor prefix for <code>transition-property</code> property</td>
      </tr>
      <tr>  
        <td><code>.transition-duration(@transition-duration);</code></td>
        <td>Vendor prefix for <code>transition-duration</code> property</td>
      </tr>
      <tr>  
        <td><code>.transition-transform(@transition);</code></td>
        <td>Vendor prefix for <code>transition</code> property for transforms</td>
      </tr>
    </tbody>
  </table>
</div>

## Transforms

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Mixin</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td><code>.transform(@transform);</code></td>
        <td>Vendor prefixes for <code>transform</code> property</td>
      </tr>
      <tr>  
        <td><code>.rotate(@degrees);</code></td>
        <td>Rotate element by <code>@degrees</code> and adds vendor prefixes for <code>transform</code> property</td>
      </tr>
      <tr>  
        <td><code>.scale(@ratio);</code></td>
        <td>Scale element by <code>@ratio</code> and adds vendor prefixes for <code>transform</code> property</td>
      </tr>
      <tr>  
        <td><code>.scale3d(@x, @y, @z);</code></td>
        <td>Scale element along <code>@x</code>, <code>@y</code>, and <code>@z</code> axis and adds vendor prefixes for <code>transform</code> property</td>
      </tr>
      <tr>  
        <td><code>.translate(@x, @y);</code></td>
        <td>Translate element accross <code>@x</code> and <code>@y</code> axis and adds vendor prefixes for <code>transform</code> property</td>
      </tr>
      <tr>  
        <td><code>.skew(@x, @y);</code></td>
        <td>Skew element accross <code>@x</code> and <code>@y</code> axis and adds vendor prefixes for <code>transform</code> property</td>
      </tr>
      <tr>  
        <td><code>.translate3d(@x, @y, @z);</code></td>
        <td>Translate element along <code>@x</code>, <code>@y</code>, and <code>@z</code> axis and adds vendor prefixes for <code>transform</code> property</td>
      </tr>
      <tr>  
        <td><code>.translateX(@offset);</code></td>
        <td>Translate element along x-axis by <code>@offset</code> and adds vendor prefixes for <code>transform</code> property</td>
      </tr>
      <tr>  
        <td><code>.translateY(@offset);</code></td>
        <td>Translate element along y-axis by <code>@offset</code> and adds vendor prefixes for <code>transform</code> property</td>
      </tr>
      <tr>  
        <td><code>.translateZ(@offset);</code></td>
        <td>Translate element along z-axis by <code>@offset</code> and adds vendor prefixes for <code>transform</code> property</td>
      </tr>
      <tr>  
        <td><code>.rotateX(@degrees);</code></td>
        <td>Rotate element along x-axis by <code>@degrees</code> and adds vendor prefixes for <code>transform</code> property</td>
      </tr>
      <tr>  
        <td><code>.rotateY(@degrees);</code></td>
        <td>Rotate element along y-axis by <code>@degrees</code> and adds vendor prefixes for <code>transform</code> property</td>
      </tr>
      <tr>  
        <td><code>.transform-origin(@origin);</code></td>
        <td>Vendor prefix for multiple <code>transform-origin</code> property</td>
      </tr>
      <tr>  
        <td><code>.transform-style(@style);</code></td>
        <td>Vendor prefix for multiple <code>transform-style</code> property</td>
      </tr>
      <tr>  
        <td><code>.perspective(@perspective);</code></td>
        <td>Vendor prefix for multiple <code>perspective</code> property</td>
      </tr>
      <tr>  
        <td><code>.perspective-origin(@perspective);</code></td>
        <td>Vendor prefix for multiple <code>perspective-origin</code> property</td>
      </tr>
      <tr>  
        <td><code>.backface-visibility(@visibility);</code></td>
        <td>Vendor prefix for multiple <code>backface-visibility</code> property</td>
      </tr>
    </tbody>
  </table>
</div>

## Animations

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Mixin</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td><code>.animation(@animation);</code></td>
        <td>Vendor prefix for <code>animation</code> property</td>
      </tr>
      <tr>  
        <td><code>.animation-name(@name);</code></td>
        <td>Vendor prefix for <code>animation-name</code> property</td>
      </tr>
      <tr>  
        <td><code>.animation-duration(@duration);</code></td>
        <td>Vendor prefix for <code>animation-duration</code> property</td>
      </tr>
      <tr>  
        <td><code>.animation-fill-mode(@mode);</code></td>
        <td>Vendor prefix for <code>animation-fill-mode</code> property</td>
      </tr>
      <tr>  
        <td><code>.animation-timing-function(@timing-function);</code></td>
        <td>Vendor prefix for <code>animation-timing-function</code> property</td>
      </tr>
      <tr>  
        <td><code>.animation-delay(@delay);</code></td>
        <td>Vendor prefix for <code>animation-delay</code> property</td>
      </tr>
      <tr>  
        <td><code>.animation-iteration-count(@iteration-count);</code></td>
        <td>Vendor prefix for <code>animation-iteration-count</code> property</td>
      </tr>
      <tr>  
        <td><code>.animation-direction(@direction);</code></td>
        <td>Vendor prefix for <code>animation-direction</code> property</td>
      </tr>
    </tbody>
  </table>
</div>

## Filters

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Mixin</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td><code>.filter-blur(@radius);</code></td>
        <td>Vendor prefix for <code>filter-blur</code> property</td>
      </tr>
      <tr>  
        <td><code>.filter-sepia(@radius);</code></td>
        <td>Vendor prefix for <code>filter-sepia</code> property</td>
      </tr>
      <tr>  
        <td><code>.filter-hue-rotate(@radius);</code></td>
        <td>Vendor prefix for <code>filter-hue-rotate</code> property</td>
      </tr>
      <tr>  
        <td><code>.filter-brightness(@amount);</code></td>
        <td>Vendor prefix for <code>filter-brightness</code> property</td>
      </tr>
      <tr>  
        <td><code>.filter-contrast(@percentage);</code></td>
        <td>Vendor prefix for <code>filter-contrast</code> property</td>
      </tr>
      <tr>  
        <td><code>.filter-invert(@percentage);</code></td>
        <td>Vendor prefix for <code>filter-invert</code> property</td>
      </tr>
      <tr>  
        <td><code>.filter-saturate(@percentage);</code></td>
        <td>Vendor prefix for <code>filter-saturate</code> property</td>
      </tr>
    </tbody>
  </table>
</div>

## Flexbox

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th>Mixin</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td><code>.flex-display(@display: flex);</code></td>
        <td>Vendor prefix for <code>flexbox</code> property. <code>flex</code> or <code>inline-flex</code>.</td>
      </tr>
      <tr>  
        <td><code>.flex(@columns: initial);</code></td>
        <td>Vendor prefix for <code>flex</code>. Applies to flex item. <code>positive-number</code>, <code>initial</code>, <code>auto</code>, or <code>none</code>.</td>
      </tr>
      <tr>  
        <td><code>.flex-direction(@direction: row);</code></td>
        <td>Vendor prefix for <code>flex-direction</code> property. Applies to flex container. <code>row</code>, <code>row-reverse</code>, <code>column</code>, <code>column-reverse</code>.</td>
      </tr>
      <tr>  
        <td><code>.flex-wrap(@wrap: nowrap);</code></td>
        <td>Vendor prefix for <code>flex-wrap</code> property. Applies to flex container.<code>nowrap</code>, <code>wrap</code>, <code>wrap-reverse</code>.</td>
      </tr>
      <tr>  
        <td><code>.flex-flow(@flow);</code></td>
        <td>Vendor prefix for <code>flex-flow</code> property. Applies to flex container. <code>flex-direction</code>, <code>flex-wrap</code></td>
      </tr>
      <tr>  
        <td><code>.flex-order(@order: 0);</code></td>
        <td>Vendor prefix for <code>flex-order</code> property. Applies to flex item. <code>integer</code></td>
      </tr>
      <tr>  
        <td><code>.flex-grow(@grow: 0);</code></td>
        <td>Vendor prefix for <code>flex-grow</code> property. Applies to flex item. <code>number</code></td>
      </tr>
      <tr>  
        <td><code>.flex-shrink(@shrink: 1);</code></td>
        <td>Vendor prefix for <code>flex-shrink</code> property. Applies to flex item, shrink factor. <code>number</code></td>
      </tr>
      <tr>  
        <td><code>.flex-basis(@width: auto);</code></td>
        <td>Vendor prefix for <code>flex-basis</code> property. Applies to flex item, initial main size of the flex item. <code>width</code></td>
      </tr>
      <tr>  
        <td><code>.justify-content(@justify: flex-start);</code></td>
        <td>Vendor prefix for <code>justify-content</code> property. Applies to flex container. <code>flex-start</code>, <code>flex-end</code>, <code>center</code>, <code>space-between</code>, <code>space-around</code>.</td>
      </tr>
      <tr>  
        <td><code>.align-content(@align: stretch);</code></td>
        <td>Vendor prefix for <code>align-content</code> property. Applies to flex container. <code>flex-start</code>, <code>flex-end</code>, <code>center</code>, <code>space-between</code>, <code>space-around</code>, <code>stretch</code>.</td>
      </tr>
      <tr>  
        <td><code>.align-items(@align: stretch);</code></td>
        <td>Vendor prefix for <code>align-items</code> property. Applies to flex container. <code>flex-start</code>, <code>flex-end</code>, <code>center</code>, <code>baseline</code>, <code>stretch</code>.</td>
      </tr>
      <tr>  
        <td><code>.align-self(@align: auto);</code></td>
        <td>Vendor prefix for <code>align-self</code> property. Applies to flex item. auto, <code>flex-start</code>, <code>flex-end</code>, <code>center</code>, <code>baseline</code>, <code>stretch</code>.</td>
      </tr>
    </tbody>
  </table>
</div>