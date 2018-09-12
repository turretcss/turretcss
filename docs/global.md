---
layout: docs
title: Global
page_title: Global - turretcss - A Responsive Front-end Framework for Accessible and Semantic Websites
description: An overview of turretcss and basic styling behaviours including global variables, fonts, color palettes, and media queries.
permalink: /docs/global/
---

## Root

Sets @root-size on the `:root` element.

### CSS

```scss
--root-size: 16px;
```

## Focus Outline

Outline property and outline offset defintion for focusable elements.

### CSS

```scss
--focus-outline: 0.125rem solid var(--info);
--focus-outline-offset: 0.125rem;
```

## Container

Default `.container` width property definition element with responsive breakpoints.

### CSS

```scss
--container-gutter: 1rem;
--container-xxl: 80rem;
--container-xl: 80rem;
--container-l: 80rem;
--container-m: 70rem;
--container-s: 100%;
--container-xs: 100%;
--container-xxs: 100%;
```

## Group

Default `.group` space property definitions.

### CSS

```scss
--group-xxl-space: 0.875rem;
--group-xl-space: 0.75rem;
--group-l-space: 0.625rem;
--group-m-space: 0.5rem;
--group-s-space: 0.375rem;
--group-xs-space: 0.25rem;
--group-xxs-space: 0.125rem;
```

## Color

Default `color` property definition.

### CSS

```scss
--color: var(--dark);
```

## Background

Default `background` property definition.

### CSS

```scss
--background: var(--white);
```

## Border

Default `border-width`, `border-style`, and `border-color` definitions for buttons, inputs, tables, etc.

### CSS

```scss
--border-width: 1px;
--border-style: solid;
--border-color: var(--light);
--border: var(--border-width) var(--border-style) var(--border-color);
```

## Border Radius

Default `border-radius` definitions for buttons, inputs, tables, etc.

### CSS

```scss
--border-radius: 0.25em;
```

## Box Shadow

Default `box-shadow` property definitions including states.

### CSS

```scss
--box-shadow: none;
--hover-box-shadow: none;
--focus-box-shadow: none;
--active-box-shadow: none;
```

## Z-Index

Z-index utility definitions for general use.

### CSS

```scss
--z-index-high: 999;
--z-index-medium: 99;
--z-index-low: 9;
```

## Speed

Default speeds for transitions.

### CSS

```scss
--speed-fast: 200ms;
--speed-medium: 300ms;
--speed-slow: 500ms;
--speed: var(--speed-fast);
```

## Height

Height sizes for buttons, inputs, and selects.

### CSS

```scss
--height-xxl: 3.25rem;
--height-xl: 3rem;
--height-l: 2.75rem;
--height-m: 2.5rem;
--height-s: 2.25rem;
--height-xs: 2rem;
--height-xxs: 1.75rem;
```

## Space

Space sizes for use globally, including `.margin-*`, `.padding-*`, and `.space-*` utility classes.

### CSS

```scss
--space-xxl: 4rem;
--space-xl: 3rem;
--space-l: 2rem;
--space-m: 1.5rem;
--space-s: 1rem;
--space-xs: 0.75rem;
--space-xxs: 0.5rem;
```

## Max Width

Max Width sizes for use globally, including utility classes.

### CSS

```scss
--max-width-xxl: 70rem;
--max-width-xl: 60rem;
--max-width-l: 50rem;
--max-width-m: 40rem;
--max-width-s: 30rem;
--max-width-xs: 20rem;
--max-width-xxs: 10rem;
```

Some top level definitions for the base font-size styles on the `<html>` tag, with breakpoints.

## Font Family

<p class="font-family-system">Font Family System</p>
<p class="font-family-sans-serif">Font Family Sans Serif</p>
<p class="font-family-serif">Font Family Serif</p>
<p class="font-family-monospace">Font Family Monospace</p>

### CSS

```scss
--font-family-system: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
--font-family-sans-serif: 'Helvetica Neue', Helvetica, Arial, sans-serif;
--font-family-serif: Georgia, 'Times New Roman', Times, serif;
--font-family-monospace: Monaco, Menlo, Consolas, 'Courier New', monospace;
--font-family: var(--font-family-system);
```

## Font Weight

<p class="font-weight-thin">Font Weight Thin</p>
<p class="font-weight-light">Font Weight Light</p>
<p class="font-weight-regular">Font Weight Regular</p>
<p class="font-weight-medium">Font Weight Medium</p>
<p class="font-weight-semibold">Font Weight Semibold</p>
<p class="font-weight-bold">Font Weight Bold</p>
<p class="font-weight-black">Font Weight Black</p>

### CSS

```scss
--font-weight-thin: 200;
--font-weight-light: 300;
--font-weight-regular: 400;
--font-weight-medium: 500;
--font-weight-semibold: 600;
--font-weight-bold: 700;
--font-weight-black: 800;
--font-weight: normal;
```

## Font Size

<p class="font-size-xxl">Font Size XXL</p>
<p class="font-size-xl">Font Size XL</p>
<p class="font-size-l">Font Size L</p>
<p class="font-size-m">Font Size M</p>
<p class="font-size-s">Font Size S</p>
<p class="font-size-xs">Font Size XS</p>
<p class="font-size-xxs">Font Size XXS</p>

### CSS

```scss
--font-size-xxl: 1.5rem;
--font-size-xl: 1.25rem;
--font-size-l: 1.125rem;
--font-size-m: 1rem;
--font-size-s: 0.875rem;
--font-size-xs: 0.75rem;
--font-size-xxs: 0.625rem;
--font-size: var(--font-size-m);
```

## Line Height

<p class="line-height-xxl">Line Height XXL</p>
<p class="line-height-xl">Line Height XL</p>
<p class="line-height-l">Line Height L</p>
<p class="line-height-m">Line Height M</p>
<p class="line-height-s">Line Height S</p>
<p class="line-height-xs">Line Height XS</p>
<p class="line-height-xxs">Line Height XXS</p>

### CSS

```scss
--line-height-xxl: 2;
--line-height-xl: 1.75;
--line-height-l: 1.625;
--line-height-m: 1.5;
--line-height-s: 1.375;
--line-height-xs: 1.25;
--line-height-xxs: 1;
--line-height: var(--line-height-s);
```

## Letter Spacing

<p class="letter-spacing-xxl">Letter Spacing XXL</p>
<p class="letter-spacing-xl">Letter Spacing XL</p>
<p class="letter-spacing-l">Letter Spacing L</p>
<p class="letter-spacing-m">Letter Spacing M</p>
<p class="letter-spacing-s">Letter Spacing S</p>
<p class="letter-spacing-xs">Letter Spacing XS</p>
<p class="letter-spacing-xxs">Letter Spacing XXS</p>

### CSS

```scss
--letter-spacing-xxl: 0.1em;
--letter-spacing-xl: 0.0825em;
--letter-spacing-l: 0.075em;
--letter-spacing-m: 0.05em;
--letter-spacing-s: 0.0375em;
--letter-spacing-xs: 0.025em;
--letter-spacing-xxs: 0.0125em;
--letter-spacing: 0;
```