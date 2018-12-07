---
layout: docs
title: Accessibility
description: null
---

## Screen Reader

Use the `screen-reader` class to display content only for screen readers, based from the A11y Project post: [How-to: Hide Content](http://a11yproject.com/posts/how-to-hide-content/)

```html
<div class="screen-reader">...</div>
```

### Screen Reader Focusable

In conjunction with the `screen-reader` class, the `screen-reader-focusable` class can be added to only display content when it's focused. Useful for "Skip to main content" links.

```html
<div class="screen-reader screen-reader-focusable">...</div>
```
