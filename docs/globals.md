---
layout: docs
title: Globals
page_title: Globals - turretcss - A Responsive Front-end Framework for Accessible and Semantic Websites
description: An overview of turretcss and basic styling behaviours including global variables, fonts, color palettes, and media queries.
permalink: /docs/globals/
---

## Contents

* Will be replaced with the ToC, excluding the "Contents" header
{:toc}

## Base

### Root

Sets @root-size on the `:root` element with responsive breakpoints.

```scss
--root-size: 16px;
--root-size-xl: var(--root-size);
--root-size-l: var(--root-size);
--root-size-m: var(--root-size);
--root-size-s: var(--root-size);
--root-size-xs: var(--root-size);
```

### Focus Outline

Outline property and outline offset defintion for focusable elements.

```scss
--focus-outline: var(--border-width) solid var(--info);
--focus-outline-offset: var(--border-width);
```

### Gutter

Default '--gutter' property definition for horizontal container padding.

```scss
--gutter: var(--space-xs);
```

### Container

Default '.container' width property definition element with responsive breakpoints.

```scss
--container-xl: 80rem;
--container-l: 80rem;
--container-m: 70rem;
--container-s: 100%;
--container-xs: 100%;
```

### Color

Default 'color' property definition.

```scss
--color: var(--dark);
```

### Background

Default 'background' property definition.

```scss
--background: var(--white);
```

### Border

Default `border-width`, `border-style`, `border-color`, and `border-radius` definitions for buttons, inputs, tables, etc.

```scss
--border-width: 1px;
--border-style: solid;
--border-color: var(--light);
--border-radius: 0.125em;
```

### Box Shadow

Default `box-shadow` property definitions including states.

```scss
--box-shadow: none;
--hover-box-shadow: none;
--focus-box-shadow: none;
--active-box-shadow: none;
```

### Z-Index

Z-index utility definitions for general use.

```scss
--z-index-high: 999;
--z-index-m: 99;
--z-index-low: 9;
```

### Speed

Default speeds for transitions.

```scss
--speed: var(--speed-fast);
--speed-fast: 200ms;
--speed-medium: 300ms;
--speed-slow: 500ms;
```

## Sizes

### Height

Height sizes for buttons, inputs, and selects.

```scss
--height-xl: 4rem;
--height-l: 3.5rem;
--height-m: 3rem;
--height-s: 2.5rem;
--height-xs: 2rem;
```

### Space

Space sizes (xl, l, m, s, xs) for use globally, including utility classes.

```scss
--space-xl: 4rem;
--space-l: 3rem;
--space-m: 2rem;
--space-s: 1.5rem;
--space-xs: 1rem;
```

### Margin

Margin sizes (xl, l, m, s, xs) for use globally, including utility classes.

```scss
--margin-xl: var(--space-xl);
--margin-l: var(--space-l);
--margin-m: var(--space-m);
--margin-s: var(--space-s);
--margin-xs: var(--space-xs);
```

### Padding

Padding sizes (xl, l, m, s, xs) for use globally, including utility classes.

```scss
--padding-xl: var(--space-xl);
--padding-l: var(--space-l);
--padding-m: var(--space-m);
--padding-s: var(--space-s);
--padding-xs: var(--space-xs);
```

### Max Width

Max Width sizes (xl, l, m, s, xs) for use globally, including utility classes.

```scss
--max-width-xl: 70rem;
--max-width-l: 60rem;
--max-width-m: 50rem;
--max-width-s: 40rem;
--max-width-xs: 30rem;
```

## Typography

Some top level definitions for the base font-size styles on the `<html>` tag, with breakpoints.

### Font Family

<p class="font-family-system">Font Family System</p>
<p class="font-family-sans-serif">Font Family Sans Serif</p>
<p class="font-family-serif">Font Family Serif</p>
<p class="font-family-monospace">Font Family Monospace</p>

```scss
--font-family: var(--font-family-system);
--font-family-system: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
--font-family-sans-serif: "Helvetica Neue", Helvetica, Arial, sans-serif;
--font-family-serif: Georgia, "Times New Roman", Times, serif;
--font-family-monospace: Monaco, Menlo, Consolas, "Courier New", monospace;
```

### Font Weight

<p class="font-weight-thin">Font Weight Thin</p>
<p class="font-weight-light">Font Weight Light</p>
<p class="font-weight-regular">Font Weight Regular</p>
<p class="font-weight-medium">Font Weight Medium</p>
<p class="font-weight-semibold">Font Weight Semibold</p>
<p class="font-weight-bold">Font Weight Bold</p>
<p class="font-weight-black">Font Weight Black</p>

```scss
--font-weight: normal;
--font-weight-thin: 200;
--font-weight-light: 300;
--font-weight-regular: 400;
--font-weight-medium: 500;
--font-weight-semibold: 600;
--font-weight-bold: 700;
--font-weight-black: 800;
```

### Font Size

<p class="font-size-xl">Font Size Extra Large</p>
<p class="font-size-l">Font Size Large</p>
<p class="font-size-m">Font Size Medium</p>
<p class="font-size-s">Font Size Small</p>
<p class="font-size-xs">Font Size Extra Small</p>

```scss
--font-size-xl: 1.25rem;
--font-size-l: 1.125rem;
--font-size-m: 1rem;
--font-size-s: 0.875rem;
--font-size-xs: 0.75rem;
```

### Line Height

<p class="line-height-xl">Line Height Extra Large</p>
<p class="line-height-l">Line Height Large</p>
<p class="line-height-m">Line Height Medium</p>
<p class="line-height-s">Line Height Small</p>
<p class="line-height-xs">Line Height Extra Small</p>

```scss
--line-height: var(--line-height-s);
--line-height-xl: 1.8;
--line-height-l: 1.65;
--line-height-m: 1.5;
--line-height-s: 1.35;
--line-height-xs: 1.2;
```

### Letter Spacing

<p class="letter-spacing-xl">Letter Spacing Extra Large</p>
<p class="letter-spacing-l">Letter Spacing Large</p>
<p class="letter-spacing-m">Letter Spacing Medium</p>
<p class="letter-spacing-s">Letter Spacing Small</p>
<p class="letter-spacing-xs">Letter Spacing Extra Small</p>

```scss
--letter-spacing: 0;
--letter-spacing-xl: 0.15em;
--letter-spacing-l: 0.1em;
--letter-spacing-m: 0.05em;
--letter-spacing-s: 0.025em;
--letter-spacing-xs: 0.01em;
```

## Colors

<div class="swatch color-black background-white">White</div>
<div class="swatch color-white background-black">Black</div>

```scss
--white: #FFFFFF;
--white-hover: color(var(--white) shade(5%));
--white-active: color(var(--white) shade(10%));

--black: #000000;
--black-hover: color(var(--black) tint(20%));
--black-active: color(var(--black) tint(10%));
```

### Shades

#### Light

<div class="swatch color-dark background-light">Light</div>
<div class="palette">
  <div class="swatch color-dark background-light-50">Light<br>50</div>
  <div class="swatch color-dark background-light-100">Light<br>100</div>
  <div class="swatch color-dark background-light-200">Light<br>200</div>
  <div class="swatch color-dark background-light-300">Light<br>300</div>
  <div class="swatch color-dark background-light-400">Light<br>400</div>
  <div class="swatch color-dark background-light-500">Light<br>500</div>
  <div class="swatch color-dark background-light-600">Light<br>600</div>
  <div class="swatch color-dark background-light-700">Light<br>700</div>
  <div class="swatch color-dark background-light-800">Light<br>800</div>
  <div class="swatch color-dark background-light-900">Light<br>900</div>
</div>

```scss
--light: #D3D3D9;
--light-hover: var(--light-400);
--light-active: var(--light-600);
--light-100: color(var(--light) tint(80%));
--light-200: color(var(--light) tint(60%));
--light-300: color(var(--light) tint(40%));
--light-400: color(var(--light) tint(20%));
--light-500: var(--light);
--light-600: color(var(--light) shade(5%));
--light-700: color(var(--light) shade(10%));
--light-800: color(var(--light) shade(15%));
--light-900: color(var(--light) shade(20%));
```

#### Grey

<div class="swatch color-white background-grey">Grey</div>
<div class="palette">
  <div class="swatch color-white background-grey-50">Grey<br>50</div>
  <div class="swatch color-white background-grey-100">Grey<br>100</div>
  <div class="swatch color-white background-grey-200">Grey<br>200</div>
  <div class="swatch color-white background-grey-300">Grey<br>300</div>
  <div class="swatch color-white background-grey-400">Grey<br>400</div>
  <div class="swatch color-white background-grey-500">Grey<br>500</div>
  <div class="swatch color-white background-grey-600">Grey<br>600</div>
  <div class="swatch color-white background-grey-700">Grey<br>700</div>
  <div class="swatch color-white background-grey-800">Grey<br>800</div>
  <div class="swatch color-white background-grey-900">Grey<br>900</div>
</div>

```scss
--grey: #616166;
--grey-hover: var(--grey-400);
--grey-active: var(--grey-600);
--grey-100: color(var(--grey) tint(30%));
--grey-200: color(var(--grey) tint(22.5%));
--grey-300: color(var(--grey) tint(15%));
--grey-400: color(var(--grey) tint(7.5%));
--grey-500: var(--grey);
--grey-600: color(var(--grey) shade(7.5%));
--grey-700: color(var(--grey) shade(15%));
--grey-800: color(var(--grey) shade(22.5%));
--grey-900: color(var(--grey) shade(30%));
```

#### Dark

<div class="swatch color-white background-dark">Dark</div>
<div class="palette">
  <div class="swatch color-white background-dark-50">Dark<br>50</div>
  <div class="swatch color-white background-dark-100">Dark<br>100</div>
  <div class="swatch color-white background-dark-200">Dark<br>200</div>
  <div class="swatch color-white background-dark-300">Dark<br>300</div>
  <div class="swatch color-white background-dark-400">Dark<br>400</div>
  <div class="swatch color-white background-dark-500">Dark<br>500</div>
  <div class="swatch color-white background-dark-600">Dark<br>600</div>
  <div class="swatch color-white background-dark-700">Dark<br>700</div>
  <div class="swatch color-white background-dark-800">Dark<br>800</div>
  <div class="swatch color-white background-dark-900">Dark<br>900</div>
</div>

```scss
--dark: #323236;
--dark-hover: var(--dark-400);
--dark-active: var(--dark-600);
--dark-100: color(var(--dark) tint(20%));
--dark-200: color(var(--dark) tint(15%));
--dark-300: color(var(--dark) tint(10%));
--dark-400: color(var(--dark) tint(5%));
--dark-500: var(--dark);
--dark-600: color(var(--dark) shade(7.5%));
--dark-700: color(var(--dark) shade(15%));
--dark-800: color(var(--dark) shade(22.5%));
--dark-900: color(var(--dark) shade(30%));
```

### Palettes

#### Primary
  
<div class="swatch color-white background-primary">Primary</div>
<div class="palette">
  <div class="swatch color-white background-primary-50">Primary<br>50</div>
  <div class="swatch color-white background-primary-100">Primary<br>100</div>
  <div class="swatch color-white background-primary-200">Primary<br>200</div>
  <div class="swatch color-white background-primary-300">Primary<br>300</div>
  <div class="swatch color-white background-primary-400">Primary<br>400</div>
  <div class="swatch color-white background-primary-500">Primary<br>500</div>
  <div class="swatch color-white background-primary-600">Primary<br>600</div>
  <div class="swatch color-white background-primary-700">Primary<br>700</div>
  <div class="swatch color-white background-primary-800">Primary<br>800</div>
  <div class="swatch color-white background-primary-900">Primary<br>900</div>
</div>

```scss
--primary: #3455DB;
--primary-hover: var(--primary-400);
--primary-active: var(--primary-600);
--primary-100: color(var(--primary) tint(40%));
--primary-200: color(var(--primary) tint(30%));
--primary-300: color(var(--primary) tint(20%));
--primary-400: color(var(--primary) tint(10%));
--primary-500: var(--primary);
--primary-600: color(var(--primary) shade(10%));
--primary-700: color(var(--primary) shade(20%));
--primary-800: color(var(--primary) shade(30%));
--primary-900: color(var(--primary) shade(40%));
```

#### Secondary

<div class="swatch color-white background-secondary">Secondary</div>
<div class="palette">
  <div class="swatch color-white background-secondary-50">Secondary<br>50</div>
  <div class="swatch color-white background-secondary-100">Secondary<br>100</div>
  <div class="swatch color-white background-secondary-200">Secondary<br>200</div>
  <div class="swatch color-white background-secondary-300">Secondary<br>300</div>
  <div class="swatch color-white background-secondary-400">Secondary<br>400</div>
  <div class="swatch color-white background-secondary-500">Secondary<br>500</div>
  <div class="swatch color-white background-secondary-600">Secondary<br>600</div>
  <div class="swatch color-white background-secondary-700">Secondary<br>700</div>
  <div class="swatch color-white background-secondary-800">Secondary<br>800</div>
  <div class="swatch color-white background-secondary-900">Secondary<br>900</div>
</div>

```scss
--secondary: rebeccapurple;
--secondary-hover: var(--secondary-400);
--secondary-active: var(--secondary-600);
--secondary-100: color(var(--secondary) tint(40%));
--secondary-200: color(var(--secondary) tint(30%));
--secondary-300: color(var(--secondary) tint(20%));
--secondary-400: color(var(--secondary) tint(10%));
--secondary-500: var(--secondary);
--secondary-600: color(var(--secondary) shade(10%));
--secondary-700: color(var(--secondary) shade(20%));
--secondary-800: color(var(--secondary) shade(30%));
--secondary-900: color(var(--secondary) shade(40%));
```

#### Tertiary

<div class="swatch color-white background-tertiary">Tertiary</div>
<div class="palette">
  <div class="swatch color-white background-tertiary-50">Tertiary<br>50</div>
  <div class="swatch color-white background-tertiary-100">Tertiary<br>100</div>
  <div class="swatch color-white background-tertiary-200">Tertiary<br>200</div>
  <div class="swatch color-white background-tertiary-300">Tertiary<br>300</div>
  <div class="swatch color-white background-tertiary-400">Tertiary<br>400</div>
  <div class="swatch color-white background-tertiary-500">Tertiary<br>500</div>
  <div class="swatch color-white background-tertiary-600">Tertiary<br>600</div>
  <div class="swatch color-white background-tertiary-700">Tertiary<br>700</div>
  <div class="swatch color-white background-tertiary-800">Tertiary<br>800</div>
  <div class="swatch color-white background-tertiary-900">Tertiary<br>900</div>
</div>

```scss
--tertiary: #8B008B;
--tertiary-hover: var(--tertiary-400);
--tertiary-active: var(--tertiary-600);
--tertiary-100: color(var(--tertiary) tint(40%));
--tertiary-200: color(var(--tertiary) tint(30%));
--tertiary-300: color(var(--tertiary) tint(20%));
--tertiary-400: color(var(--tertiary) tint(10%));
--tertiary-500: var(--tertiary);
--tertiary-600: color(var(--tertiary) shade(10%));
--tertiary-700: color(var(--tertiary) shade(20%));
--tertiary-800: color(var(--tertiary) shade(30%));
--tertiary-900: color(var(--tertiary) shade(40%));
```

### Indicators

#### Error

<div class="swatch color-white background-error">Error</div>
<div class="palette">
  <div class="swatch color-white background-error-50">Error<br>50</div>
  <div class="swatch color-white background-error-100">Error<br>100</div>
  <div class="swatch color-white background-error-200">Error<br>200</div>
  <div class="swatch color-white background-error-300">Error<br>300</div>
  <div class="swatch color-white background-error-400">Error<br>400</div>
  <div class="swatch color-white background-error-500">Error<br>500</div>
  <div class="swatch color-white background-error-600">Error<br>600</div>
  <div class="swatch color-white background-error-700">Error<br>700</div>
  <div class="swatch color-white background-error-800">Error<br>800</div>
  <div class="swatch color-white background-error-900">Error<br>900</div>
</div>

```scss
--error: #D91E18;
--error-hover: var(--error-400);
--error-active: var(--error-600);
--error-100: color(var(--error) tint(40%));
--error-200: color(var(--error) tint(30%));
--error-300: color(var(--error) tint(20%));
--error-400: color(var(--error) tint(10%));
--error-500: var(--error);
--error-600: color(var(--error) shade(10%));
--error-700: color(var(--error) shade(20%));
--error-800: color(var(--error) shade(30%));
--error-900: color(var(--error) shade(40%));
```

#### Warning

<div class="swatch color-white background-warning">Warning</div>
<div class="palette">
  <div class="swatch color-white background-warning-50">Warning<br>50</div>
  <div class="swatch color-white background-warning-100">Warning<br>100</div>
  <div class="swatch color-white background-warning-200">Warning<br>200</div>
  <div class="swatch color-white background-warning-300">Warning<br>300</div>
  <div class="swatch color-white background-warning-400">Warning<br>400</div>
  <div class="swatch color-white background-warning-500">Warning<br>500</div>
  <div class="swatch color-white background-warning-600">Warning<br>600</div>
  <div class="swatch color-white background-warning-700">Warning<br>700</div>
  <div class="swatch color-white background-warning-800">Warning<br>800</div>
  <div class="swatch color-white background-warning-900">Warning<br>900</div>
</div>

```scss
--warning: #FF4500;
--warning-hover: var(--warning-400);
--warning-active: var(--warning-600);
--warning-100: color(var(--warning) tint(40%));
--warning-200: color(var(--warning) tint(30%));
--warning-300: color(var(--warning) tint(20%));
--warning-400: color(var(--warning) tint(10%));
--warning-500: var(--warning);
--warning-600: color(var(--warning) shade(10%));
--warning-700: color(var(--warning) shade(20%));
--warning-800: color(var(--warning) shade(30%));
--warning-900: color(var(--warning) shade(40%));
```

#### Success

<div class="swatch color-white background-success">Success</div>
<div class="palette">
  <div class="swatch color-white background-success-50">Success<br>50</div>
  <div class="swatch color-white background-success-100">Success<br>100</div>
  <div class="swatch color-white background-success-200">Success<br>200</div>
  <div class="swatch color-white background-success-300">Success<br>300</div>
  <div class="swatch color-white background-success-400">Success<br>400</div>
  <div class="swatch color-white background-success-500">Success<br>500</div>
  <div class="swatch color-white background-success-600">Success<br>600</div>
  <div class="swatch color-white background-success-700">Success<br>700</div>
  <div class="swatch color-white background-success-800">Success<br>800</div>
  <div class="swatch color-white background-success-900">Success<br>900</div>
</div>

```scss
--success: #00AA00;
--success-hover: var(--success-400);
--success-active: var(--success-600);
--success-100: color(var(--success) tint(40%));
--success-200: color(var(--success) tint(30%));
--success-300: color(var(--success) tint(20%));
--success-400: color(var(--success) tint(10%));
--success-500: var(--success);
--success-600: color(var(--success) shade(10%));
--success-700: color(var(--success) shade(20%));
--success-800: color(var(--success) shade(30%));
--success-900: color(var(--success) shade(40%));
```

#### Info

<div class="swatch color-white background-info">Info</div>
<div class="palette">
  <div class="swatch color-white background-info-50">Info<br>50</div>
  <div class="swatch color-white background-info-100">Info<br>100</div>
  <div class="swatch color-white background-info-200">Info<br>200</div>
  <div class="swatch color-white background-info-300">Info<br>300</div>
  <div class="swatch color-white background-info-400">Info<br>400</div>
  <div class="swatch color-white background-info-500">Info<br>500</div>
  <div class="swatch color-white background-info-600">Info<br>600</div>
  <div class="swatch color-white background-info-700">Info<br>700</div>
  <div class="swatch color-white background-info-800">Info<br>800</div>
  <div class="swatch color-white background-info-900">Info<br>900</div>
</div>

```scss
--info: #1E90FF;
--info-hover: var(--info-400);
--info-active: var(--info-600);
--info-100: color(var(--info) tint(40%));
--info-200: color(var(--info) tint(30%));
--info-300: color(var(--info) tint(20%));
--info-400: color(var(--info) tint(10%));
--info-500: var(--info);
--info-600: color(var(--info) shade(10%));
--info-700: color(var(--info) shade(20%));
--info-800: color(var(--info) shade(30%));
--info-900: color(var(--info) shade(40%));
```