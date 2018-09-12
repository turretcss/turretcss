---
layout: docs
title: Nav
description: For menu and navigation components use the nav element wrapped around an unordered list.
---

## Example

<div>
  <nav>
    <ul>
      <li>
        <a href="#">Item 1</a>
      </li>
      <li>
        <a href="#">Item 2</a>
      </li>
      <li>
        <a href="#">Item 3</a>
      </li>
      <li>
        <a href="#">Item 4</a>
      </li>
    </ul>
  </nav>
</div>

### HTML

```html
<nav>
  <ul>
    <li>
      <a href="...">...</a>
    </li>
    <li>
      <a href="...">...</a>
    </li>
    <li>
      <a href="...">...</a>
    </li>
    <li>
      <a href="...">...</a>
    </li>
  </ul>
</nav>
```

### CSS

```scss
--nav-list-margin: 0;
--nav-item-margin: 1rem 0;
--nav-item-padding: 0;
--nav-inline-item-margin: 0 1rem;
```

## Nav Inline

To display navigaiton inline add the `nav-inline` class to the `<nav>` element.

<div>
  <nav class="nav-inline">
    <ul>
      <li>
        <a href="#">Item 1</a>
      </li>
      <li>
        <a href="#">Item 2</a>
      </li>
      <li>
        <a href="#">Item 3</a>
      </li>
      <li>
        <a href="#">Item 4</a>
      </li>
    </ul>
  </nav>
</div>

### HTML

```html
<nav class="nav-inline">
  <ul>
    <li>
      <a href="...">...</a>
    </li>
    <li>
      <a href="...">...</a>
    </li>
    <li>
      <a href="...">...</a>
    </li>
    <li>
      <a href="...">...</a>
    </li>
  </ul>
</nav>
```

### CSS

```scss
--nav-inline-item-margin: 0 1rem;
```
