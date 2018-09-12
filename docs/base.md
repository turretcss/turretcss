---
layout: docs
title: Base
page_title: Base - turretcss - A Responsive Front-end Framework for Accessible and Semantic Websites
description: An overview of turretcss and basic styling behaviours including global variables, fonts, color palettes, and media queries.
---

## Root

Sets @root-size on the `:root` element.

```scss
--root-size: 16px;
```

## Focus

Outline property and outline offset defintion for focusable elements.

```scss
--focus-outline: 0.125rem solid var(--info);
--focus-outline-offset: 0.125rem;
```

## Color

Default `color` property definition.

```scss
--color: var(--dark);
```

## Background

Default `background` property definition.

```scss
--background: var(--white);
```

## Border

Default `border-width`, `border-style`, and `border-color` definitions for buttons, inputs, tables, etc.

```scss
--border-width: 1px;
--border-style: solid;
--border-color: var(--light);
--border: var(--border-width) var(--border-style) var(--border-color);
```

## Border Radius

Default `border-radius` definitions for buttons, inputs, tables, etc.

```scss
--border-radius: 0.25em;
```

## Box Shadow

Default `box-shadow` property definitions including states.

```scss
--box-shadow: none;
--hover-box-shadow: none;
--focus-box-shadow: none;
--active-box-shadow: none;
```

## Z-Index

Z-index utility definitions for general use.

```scss
--z-index-high: 999;
--z-index-medium: 99;
--z-index-low: 9;
```

## Speed

Default speeds for transitions.

```scss
--speed-fast: 200ms;
--speed-medium: 300ms;
--speed-slow: 500ms;
--speed: var(--speed-fast);
```

## Height

Height sizes for buttons, inputs, and selects.

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

```scss
--max-width-xxl: 70rem;
--max-width-xl: 60rem;
--max-width-l: 50rem;
--max-width-m: 40rem;
--max-width-s: 30rem;
--max-width-xs: 20rem;
--max-width-xxs: 10rem;
```
