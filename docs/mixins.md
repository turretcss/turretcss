---
layout: docs
title: Mixins
page_title: Mixins - turretcss - A Responsive Front-end Framework for Accessible and Semantic Websites
description: turretcsss set of mixins for simple & maintainable CSS.
permalink: /docs/mixins/
---

## Contents

* Will be replaced with the ToC, excluding the "Contents" header
{:toc}

## Transition

### Transition

Apply a `transition` property for `all` at `--speed` with `ease-in-out`

```scss
@apply --transition;
```

### Transition Fast

Apply a `transition` property for `all` at `--speed-fast` with `ease-in-out`

```scss
@apply --transition-fast;
```

### Transition Medium

Apply a `transition` property for `all` at `--speed-medium` with `ease-in-out`

```scss
@apply --transition-medium;
```

### Transition Slow

Apply a `transition` property for `all` at `--speed-slow` with `ease-in-out`

```scss
@apply --transition-slow;
```

## Clearfix

Clearfix mixin used to clear floats

```scss
@apply --clearfix;
```

## Center

Absolutely center an element from the top and left by 50% using `.translate(-50%, -50%);` to center based on element size

```scss
@apply --center;
```

## Cover

Absolutely cover parent element

```scss
@apply --cover;
```

## Text Hide

Utility mixin for `.hide-text;`

```scss
@apply --text-hide;
```

## Hide Visually

Hide but keep in DOM for Screen Readers

```scss
@apply --hide-visually;
```

## Truncate

Truncate text with ellipsis based on containing element width

```scss
@apply --truncate;
```

## Font Smoothing

Set the font smoothing properties for browsers that support font-smoothing, by default turretcss sets `--font-smoothing-antialiased` on the `<html>` root tag, this can be overwritten with the `--font-smoothing-auto` mixin.

```scss
@apply --font-smoothing-antialiased;
@apply --font-smoothing-auto;
```

## Overflow Scroll

Set overflow to scroll with `-webkit-overflow-scrolling: touch;` for Mobile Safari

```scss
@apply --overflow-scroll;
```

### Overflow Y Scroll

Set overflow to scroll on the Y-axis with `-webkit-overflow-scrolling: touch;` for Mobile Safari

```scss
@apply --overflow-y-scroll;
```

### Overflow X Scroll

Set overflow to scroll on the X-axis with `-webkit-overflow-scrolling: touch;` for Mobile Safari

```scss
@apply --overflow-x-scroll;
```

## Display Title

Applies `.display-title` typographic styles.

```scss
@apply --display-title;
```

## Big

Applies `.big` typographic styles.

```scss
@apply --big;
```

## Small Caps

Applies `.small-caps` typographic styles.

```scss
@apply --small-caps;
```

## Lead

Applies `.lead` typographic styles.

```scss
@apply --lead;
```