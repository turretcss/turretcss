---
layout: docs
title: Color
page_title: ""
description: null
---

## All

<div class="padding-xs color-black background-white">White</div>
<div class="padding-xs color-black background-light">Light</div>
<div class="padding-xs color-white background-grey">Grey</div>
<div class="padding-xs color-white background-dark">Dark</div>
<div class="padding-xs color-white background-primary">Primary</div>
<div class="padding-xs color-white background-secondary">Secondary</div>
<div class="padding-xs color-white background-tertiary">Tertiary</div>
<div class="padding-xs color-white background-error">Error</div>
<div class="padding-xs color-white background-warning">Warning</div>
<div class="padding-xs color-white background-success">Success</div>
<div class="padding-xs color-white background-info">Info</div>

## Base

<div class="padding-xs color-black background-white">White</div>
<div class="padding-xs color-white background-black">Black</div>

```scss
--white: hsl(220, 10%, 100%);
--white-hover: color-mod(var(--white) shade(5%));
--white-active: color-mod(var(--white) shade(10%));

--black: hsl(220, 10%, 0%);
--black-hover: color-mod(var(--black) tint(20%));
--black-active: color-mod(var(--black) tint(10%));
```

## Shades

### Light

<div class="padding-xs color-dark background-light">Light</div>
<div class="palette">
  <div class="padding-xs color-dark background-light-50">Light<br>50</div>
  <div class="padding-xs color-dark background-light-100">Light<br>100</div>
  <div class="padding-xs color-dark background-light-200">Light<br>200</div>
  <div class="padding-xs color-dark background-light-300">Light<br>300</div>
  <div class="padding-xs color-dark background-light-400">Light<br>400</div>
  <div class="padding-xs color-dark background-light-500">Light<br>500</div>
  <div class="padding-xs color-dark background-light-600">Light<br>600</div>
  <div class="padding-xs color-dark background-light-700">Light<br>700</div>
  <div class="padding-xs color-dark background-light-800">Light<br>800</div>
  <div class="padding-xs color-dark background-light-900">Light<br>900</div>
</div>

```scss
--light: hsl(220, 10%, 85%);
--light-hover: var(--light-400);
--light-active: var(--light-600);
--light-50: color-mod(var(--light-100) tint(50%) saturation(+1.25%));
--light-100: color-mod(var(--light-200) tint(40%) saturation(+1.25%));
--light-200: color-mod(var(--light-300) tint(30%) saturation(+1.25%));
--light-300: color-mod(var(--light-400) tint(20%) saturation(+1.25%));
--light-400: color-mod(var(--light) tint(10%) saturation(+1.25%));
--light-500: var(--light);
--light-600: color-mod(var(--light) shade(5%) saturation(+5%));
--light-700: color-mod(var(--light-600) shade(10%) saturation(+5%));
--light-800: color-mod(var(--light-700) shade(15%) saturation(+5%));
--light-900: color-mod(var(--light-800) shade(20%) saturation(+5%));
```

### Grey

<div class="padding-xs color-white background-grey">Grey</div>
<div class="palette">
  <div class="padding-xs color-white background-grey-50">Grey<br>50</div>
  <div class="padding-xs color-white background-grey-100">Grey<br>100</div>
  <div class="padding-xs color-white background-grey-200">Grey<br>200</div>
  <div class="padding-xs color-white background-grey-300">Grey<br>300</div>
  <div class="padding-xs color-white background-grey-400">Grey<br>400</div>
  <div class="padding-xs color-white background-grey-500">Grey<br>500</div>
  <div class="padding-xs color-white background-grey-600">Grey<br>600</div>
  <div class="padding-xs color-white background-grey-700">Grey<br>700</div>
  <div class="padding-xs color-white background-grey-800">Grey<br>800</div>
  <div class="padding-xs color-white background-grey-900">Grey<br>900</div>
</div>

```scss
--grey: hsl(220, 10%, 40%);
--grey-hover: var(--grey-400);
--grey-active: var(--grey-600);
--grey-50: color-mod(var(--grey-100) tint(30%) saturation(+2.5%));
--grey-100: color-mod(var(--grey-200) tint(25%) saturation(+2.5%));
--grey-200: color-mod(var(--grey-300) tint(20%) saturation(+2.5%));
--grey-300: color-mod(var(--grey-400) tint(15%) saturation(+2.5%));
--grey-400: color-mod(var(--grey) tint(10%) saturation(+2.5%));
--grey-500: var(--grey);
--grey-600: color-mod(var(--grey) shade(5%) saturation(+2.5%));
--grey-700: color-mod(var(--grey-600) shade(10%) saturation(+2.5%));
--grey-800: color-mod(var(--grey-700) shade(15%) saturation(+2.5%));
--grey-900: color-mod(var(--grey-800) shade(20%) saturation(+2.5%));
```

### Dark

<div class="padding-xs color-white background-dark">Dark</div>
<div class="palette">
  <div class="padding-xs color-white background-dark-50">Dark<br>50</div>
  <div class="padding-xs color-white background-dark-100">Dark<br>100</div>
  <div class="padding-xs color-white background-dark-200">Dark<br>200</div>
  <div class="padding-xs color-white background-dark-300">Dark<br>300</div>
  <div class="padding-xs color-white background-dark-400">Dark<br>400</div>
  <div class="padding-xs color-white background-dark-500">Dark<br>500</div>
  <div class="padding-xs color-white background-dark-600">Dark<br>600</div>
  <div class="padding-xs color-white background-dark-700">Dark<br>700</div>
  <div class="padding-xs color-white background-dark-800">Dark<br>800</div>
  <div class="padding-xs color-white background-dark-900">Dark<br>900</div>
</div>

```scss
--dark: hsl(220, 10%, 20%);
--dark-hover: var(--dark-400);
--dark-active: var(--dark-600);
--dark-50: color-mod(var(--dark-100) tint(30%) saturation(+2.5%));
--dark-100: color-mod(var(--dark-200) tint(25%) saturation(+2.5%));
--dark-200: color-mod(var(--dark-300) tint(20%) saturation(+2.5%));
--dark-300: color-mod(var(--dark-400) tint(15%) saturation(+2.5%));
--dark-400: color-mod(var(--dark) tint(10%) saturation(+2.5%));
--dark-500: var(--dark);
--dark-600: color-mod(var(--dark) shade(5%) saturation(+2.5%));
--dark-700: color-mod(var(--dark-600) shade(10%) saturation(+2.5%));
--dark-800: color-mod(var(--dark-700) shade(15%) saturation(+2.5%));
--dark-900: color-mod(var(--dark-800) shade(20%) saturation(+2.5%));
```

## Palettes

### Primary

<div class="padding-xs color-white background-primary">Primary</div>
<div class="palette">
  <div class="padding-xs color-white background-primary-50">Primary<br>50</div>
  <div class="padding-xs color-white background-primary-100">Primary<br>100</div>
  <div class="padding-xs color-white background-primary-200">Primary<br>200</div>
  <div class="padding-xs color-white background-primary-300">Primary<br>300</div>
  <div class="padding-xs color-white background-primary-400">Primary<br>400</div>
  <div class="padding-xs color-white background-primary-500">Primary<br>500</div>
  <div class="padding-xs color-white background-primary-600">Primary<br>600</div>
  <div class="padding-xs color-white background-primary-700">Primary<br>700</div>
  <div class="padding-xs color-white background-primary-800">Primary<br>800</div>
  <div class="padding-xs color-white background-primary-900">Primary<br>900</div>
</div>

```scss
--primary: hsl(220, 80%, 50%);
--primary-hover: var(--primary-400);
--primary-active: var(--primary-600);
--primary-50: color-mod(var(--primary-100) tint(60%) saturation(+2.5%));
--primary-100: color-mod(var(--primary-200) tint(40%) saturation(+2.5%));
--primary-200: color-mod(var(--primary-300) tint(30%) saturation(+2.5%));
--primary-300: color-mod(var(--primary-400) tint(20%) saturation(+2.5%));
--primary-400: color-mod(var(--primary) tint(10%) saturation(+2.5%));
--primary-500: var(--primary);
--primary-600: color-mod(var(--primary) shade(15%) saturation(+2.5%));
--primary-700: color-mod(var(--primary-600) shade(20%) saturation(+2.5%));
--primary-800: color-mod(var(--primary-700) shade(25%) saturation(+2.5%));
--primary-900: color-mod(var(--primary-800) shade(30%) saturation(+2.5%));
```

### Secondary

<div class="padding-xs color-white background-secondary">Secondary</div>
<div class="palette">
  <div class="padding-xs color-white background-secondary-50">Secondary<br>50</div>
  <div class="padding-xs color-white background-secondary-100">Secondary<br>100</div>
  <div class="padding-xs color-white background-secondary-200">Secondary<br>200</div>
  <div class="padding-xs color-white background-secondary-300">Secondary<br>300</div>
  <div class="padding-xs color-white background-secondary-400">Secondary<br>400</div>
  <div class="padding-xs color-white background-secondary-500">Secondary<br>500</div>
  <div class="padding-xs color-white background-secondary-600">Secondary<br>600</div>
  <div class="padding-xs color-white background-secondary-700">Secondary<br>700</div>
  <div class="padding-xs color-white background-secondary-800">Secondary<br>800</div>
  <div class="padding-xs color-white background-secondary-900">Secondary<br>900</div>
</div>

```scss
--secondary: hsl(270, 80%, 50%);
--secondary-hover: var(--secondary-400);
--secondary-active: var(--secondary-600);
--secondary-50: color-mod(var(--secondary-100) tint(60%) saturation(+2.5%));
--secondary-100: color-mod(var(--secondary-200) tint(50%) saturation(+2.5%));
--secondary-200: color-mod(var(--secondary-300) tint(30%) saturation(+2.5%));
--secondary-300: color-mod(var(--secondary-400) tint(20%) saturation(+2.5%));
--secondary-400: color-mod(var(--secondary) tint(10%) saturation(+2.5%));
--secondary-500: var(--secondary);
--secondary-600: color-mod(var(--secondary) shade(15%) saturation(+2.5%));
--secondary-700: color-mod(var(--secondary-600) shade(20%) saturation(+2.5%));
--secondary-800: color-mod(var(--secondary-700) shade(25%) saturation(+2.5%));
--secondary-900: color-mod(var(--secondary-800) shade(30%) saturation(+2.5%));
```

### Tertiary

<div class="padding-xs color-white background-tertiary">Tertiary</div>
<div class="palette">
  <div class="padding-xs color-white background-tertiary-50">Tertiary<br>50</div>
  <div class="padding-xs color-white background-tertiary-100">Tertiary<br>100</div>
  <div class="padding-xs color-white background-tertiary-200">Tertiary<br>200</div>
  <div class="padding-xs color-white background-tertiary-300">Tertiary<br>300</div>
  <div class="padding-xs color-white background-tertiary-400">Tertiary<br>400</div>
  <div class="padding-xs color-white background-tertiary-500">Tertiary<br>500</div>
  <div class="padding-xs color-white background-tertiary-600">Tertiary<br>600</div>
  <div class="padding-xs color-white background-tertiary-700">Tertiary<br>700</div>
  <div class="padding-xs color-white background-tertiary-800">Tertiary<br>800</div>
  <div class="padding-xs color-white background-tertiary-900">Tertiary<br>900</div>
</div>

```scss
--tertiary: hsl(320, 80%, 50%);
--tertiary-hover: var(--tertiary-400);
--tertiary-active: var(--tertiary-600);
--tertiary-50: color-mod(var(--tertiary-100) tint(60%) saturation(+2.5%));
--tertiary-100: color-mod(var(--tertiary-200) tint(50%) saturation(+2.5%));
--tertiary-200: color-mod(var(--tertiary-300) tint(30%) saturation(+2.5%));
--tertiary-300: color-mod(var(--tertiary-400) tint(20%) saturation(+2.5%));
--tertiary-400: color-mod(var(--tertiary) tint(10%) saturation(+2.5%));
--tertiary-500: var(--tertiary);
--tertiary-600: color-mod(var(--tertiary) shade(15%) saturation(+2.5%));
--tertiary-700: color-mod(var(--tertiary-600) shade(20%) saturation(+2.5%));
--tertiary-800: color-mod(var(--tertiary-700) shade(25%) saturation(+2.5%));
--tertiary-900: color-mod(var(--tertiary-800) shade(30%) saturation(+2.5%));
```

## Indicators

### Error

<div class="padding-xs color-white background-error">Error</div>
<div class="palette">
  <div class="padding-xs color-white background-error-50">Error<br>50</div>
  <div class="padding-xs color-white background-error-100">Error<br>100</div>
  <div class="padding-xs color-white background-error-200">Error<br>200</div>
  <div class="padding-xs color-white background-error-300">Error<br>300</div>
  <div class="padding-xs color-white background-error-400">Error<br>400</div>
  <div class="padding-xs color-white background-error-500">Error<br>500</div>
  <div class="padding-xs color-white background-error-600">Error<br>600</div>
  <div class="padding-xs color-white background-error-700">Error<br>700</div>
  <div class="padding-xs color-white background-error-800">Error<br>800</div>
  <div class="padding-xs color-white background-error-900">Error<br>900</div>
</div>

```scss
--error: hsl(0, 100%, 40%);
--error-hover: var(--error-400);
--error-active: var(--error-600);
--error-50: color-mod(var(--error-100) tint(60%) saturation(+2.5%));
--error-100: color-mod(var(--error-200) tint(50%) saturation(+2.5%));
--error-200: color-mod(var(--error-300) tint(30%) saturation(+2.5%));
--error-300: color-mod(var(--error-400) tint(20%) saturation(+2.5%));
--error-400: color-mod(var(--error) tint(10%) saturation(+2.5%));
--error-500: var(--error);
--error-600: color-mod(var(--error) shade(15%) saturation(+2.5%));
--error-700: color-mod(var(--error-600) shade(20%) saturation(+2.5%));
--error-800: color-mod(var(--error-700) shade(25%) saturation(+2.5%));
--error-900: color-mod(var(--error-800) shade(30%) saturation(+2.5%));
```

### Warning

<div class="padding-xs color-white background-warning">Warning</div>
<div class="palette">
  <div class="padding-xs color-white background-warning-50">Warning<br>50</div>
  <div class="padding-xs color-white background-warning-100">Warning<br>100</div>
  <div class="padding-xs color-white background-warning-200">Warning<br>200</div>
  <div class="padding-xs color-white background-warning-300">Warning<br>300</div>
  <div class="padding-xs color-white background-warning-400">Warning<br>400</div>
  <div class="padding-xs color-white background-warning-500">Warning<br>500</div>
  <div class="padding-xs color-white background-warning-600">Warning<br>600</div>
  <div class="padding-xs color-white background-warning-700">Warning<br>700</div>
  <div class="padding-xs color-white background-warning-800">Warning<br>800</div>
  <div class="padding-xs color-white background-warning-900">Warning<br>900</div>
</div>

```scss
--warning: hsl(20, 100%, 50%);
--warning-hover: var(--warning-400);
--warning-active: var(--warning-600);
--warning-50: color-mod(var(--warning-100) tint(60%) saturation(+2.5%));
--warning-100: color-mod(var(--warning-200) tint(50%) saturation(+2.5%));
--warning-200: color-mod(var(--warning-300) tint(30%) saturation(+2.5%));
--warning-300: color-mod(var(--warning-400) tint(20%) saturation(+2.5%));
--warning-400: color-mod(var(--warning) tint(10%) saturation(+2.5%));
--warning-500: var(--warning);
--warning-600: color-mod(var(--warning) shade(15%) saturation(+2.5%));
--warning-700: color-mod(var(--warning-600) shade(20%) saturation(+2.5%));
--warning-800: color-mod(var(--warning-700) shade(25%) saturation(+2.5%));
--warning-900: color-mod(var(--warning-800) shade(30%) saturation(+2.5%));
```

### Success

<div class="padding-xs color-white background-success">Success</div>
<div class="palette">
  <div class="padding-xs color-white background-success-50">Success<br>50</div>
  <div class="padding-xs color-white background-success-100">Success<br>100</div>
  <div class="padding-xs color-white background-success-200">Success<br>200</div>
  <div class="padding-xs color-white background-success-300">Success<br>300</div>
  <div class="padding-xs color-white background-success-400">Success<br>400</div>
  <div class="padding-xs color-white background-success-500">Success<br>500</div>
  <div class="padding-xs color-white background-success-600">Success<br>600</div>
  <div class="padding-xs color-white background-success-700">Success<br>700</div>
  <div class="padding-xs color-white background-success-800">Success<br>800</div>
  <div class="padding-xs color-white background-success-900">Success<br>900</div>
</div>

```scss
--success: hsl(120, 100%, 35%);
--success-hover: var(--success-400);
--success-active: var(--success-600);
--success-50: color-mod(var(--success-100) tint(60%) saturation(+2.5%));
--success-100: color-mod(var(--success-200) tint(50%) saturation(+2.5%));
--success-200: color-mod(var(--success-300) tint(30%) saturation(+2.5%));
--success-300: color-mod(var(--success-400) tint(20%) saturation(+2.5%));
--success-400: color-mod(var(--success) tint(10%) saturation(+2.5%));
--success-500: var(--success);
--success-600: color-mod(var(--success) shade(15%) saturation(+2.5%));
--success-700: color-mod(var(--success-600) shade(20%) saturation(+2.5%));
--success-800: color-mod(var(--success-700) shade(25%) saturation(+2.5%));
--success-900: color-mod(var(--success-800) shade(30%) saturation(+2.5%));
```

### Info

<div class="padding-xs color-white background-info">Info</div>
<div class="palette">
  <div class="padding-xs color-white background-info-50">Info<br>50</div>
  <div class="padding-xs color-white background-info-100">Info<br>100</div>
  <div class="padding-xs color-white background-info-200">Info<br>200</div>
  <div class="padding-xs color-white background-info-300">Info<br>300</div>
  <div class="padding-xs color-white background-info-400">Info<br>400</div>
  <div class="padding-xs color-white background-info-500">Info<br>500</div>
  <div class="padding-xs color-white background-info-600">Info<br>600</div>
  <div class="padding-xs color-white background-info-700">Info<br>700</div>
  <div class="padding-xs color-white background-info-800">Info<br>800</div>
  <div class="padding-xs color-white background-info-900">Info<br>900</div>
</div>

```scss
--info: hsl(200, 100%, 40%);
--info-hover: var(--info-400);
--info-active: var(--info-600);
--info-50: color-mod(var(--info-100) tint(60%) saturation(+2.5%));
--info-100: color-mod(var(--info-200) tint(50%) saturation(+2.5%));
--info-200: color-mod(var(--info-300) tint(30%) saturation(+2.5%));
--info-300: color-mod(var(--info-400) tint(20%) saturation(+2.5%));
--info-400: color-mod(var(--info) tint(10%) saturation(+2.5%));
--info-500: var(--info);
--info-600: color-mod(var(--info) shade(15%) saturation(+2.5%));
--info-700: color-mod(var(--info-600) shade(20%) saturation(+2.5%));
--info-800: color-mod(var(--info-700) shade(25%) saturation(+2.5%));
--info-900: color-mod(var(--info-800) shade(30%) saturation(+2.5%));
```
