---
layout: docs
title: Accessibility
description: Web accessibility screen reader helper classes and a guide for using ARIA role attributes on elements for accessibility.
permalink: /docs/accessibility/
---

## Screen Reader

Use the `screen-reader` class to display content only for screen readers, based from the A11y Project post: [How-to: Hide Content](http://a11yproject.com/posts/how-to-hide-content/)

```scss
<div class="screen-reader">...</div>
```

### Screen Reader Focusable

In conjunction with the `screen-reader` class, the `screen-reader-focusable` class can be added to only display content when it's focused. Useful for "Skip to main content" links.

```scss
<div class="screen-reader screen-reader-focusable">...</div>
```

## ARIA Roles

{% include tables/aria-roles.html %}
