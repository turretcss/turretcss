---
layout: docs
title: Progress Sizes
description: ""
permalink: /docs/form/progress-sizes/
---

## Example

<form>
  <progress class="progress-xxl" value="70" max="100">70%</progress>
  <progress class="progress-xl" value="70" max="100">70%</progress>
  <progress class="progress-l" value="70" max="100">70%</progress>
  <progress value="70" max="100">70%</progress>
  <progress class="progress-s" value="70" max="100">70%</progress>
  <progress class="progress-xs" value="70" max="100">70%</progress>
  <progress class="progress-xxs" value="70" max="100">70%</progress>
</form>

### HTML

```html
<progress class="progress-xxl">...</progress>
<progress class="progress-xl">...</progress>
<progress class="progress-l">...</progress>
<progress>...</progress>
<progress class="progress-s">...</progress>
<progress class="progress-xs">...</progress>
<progress class="progress-xxs">...</progress>
```

### CSS

```scss
--progress-xxl-height: 1rem;
--progress-xl-height: 0.875rem;
--progress-l-height: 0.75rem;
--progress-s-height: 0.5rem;
--progress-xs-height: 0.375rem;
--progress-xxs-height: 0.25rem;
```
