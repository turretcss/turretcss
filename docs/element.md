---
layout: docs
title: Element
page_title: Element - turretcss - A Responsive Front-end Framework for Accessible and Semantic Websites
description: A guide to the use of HTML elements and turretcss's default styling definitions including buttons, figure, media, nav, and tables.
permalink: /docs/element/
---


## Table

<table>
  <caption>Table Caption</caption>
  <thead>
    <tr>
      <th scope="col">Vestibulum Sem Ipsum</th>
      <th scope="col">Dolor Fringilla</th>
      <th scope="col">Amet Mattis</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Egestas Ipsum Nibh</td>
      <td>Magna Nullam</td>
      <td>Consectetur Euismod</td>
    </tr>
    <tr>
      <td>Egestas Ipsum Nibh</td>
      <td>Magna Nullam</td>
      <td>Consectetur Euismod</td>
    </tr>
    <tr>
      <td>Egestas Ipsum Nibh</td>
      <td>Magna Nullam</td>
      <td>Consectetur Euismod</td>
    </tr>
  </tbody>
</table>

```scss
--table-margin: var(--paragraph-margin);
--table-background: var(--background);
--table-border-width: var(--border-width);
--table-border-style: var(--border-style);
--table-border-color: var(--border-color);
--table-border-radius: var(--border-radius);

--table-caption-margin: 1em 0;
--table-caption-font-family: inherit;
--table-caption-font-weight: inherit;
--table-caption-font-size: inherit;
--table-caption-color: inherit;
--table-caption-text-align: left;

--table-head-padding: 0.5em;
--table-head-font-family: inherit;
--table-head-font-weight: inherit;
--table-head-font-size: inherit;
--table-head-color: inherit;
--table-head-text-align: left;
--table-head-text-transform: none;
--table-head-background: var(--light-50);
--table-head-border-width: var(--table-border-width);
--table-head-border-style: var(--table-border-style);
--table-head-border-color: var(--table-border-color);

--table-cell-padding: 0.5em;
--table-cell-font-family: inherit;
--table-cell-font-weight: inherit;
--table-cell-font-size: inherit;
--table-cell-color: inherit;
--table-cell-line-height: var(--line-height);
--table-cell-vertical-align: middle;
--table-cell-border-width: var(--table-border-width);
--table-cell-border-style: var(--table-border-style);
--table-cell-border-color: var(--table-border-color);
```

```html
<table>
  <thead>
    <tr>
      <th scope="col">...</th>
      <th scope="col">...</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>...</td>
      <td>...</td>
      <td>...</td>
    </tr>
  </tbody>
</table>
```

### Table Responsive

The `.table-responsive` class wraps a table allowing it to be sized appropriately for its contents, overflow content is viewable through scrolling.

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th scope="col">Vestibulum Sem Ipsum</th>
        <th scope="col">Dolor Fringilla</th>
        <th scope="col">Amet Mattis</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Egestas Ipsum Nibh</td>
        <td>Magna Nullam</td>
        <td>Consectetur Euismod</td>
      </tr>
      <tr>
        <td>Egestas Ipsum Nibh</td>
        <td>Magna Nullam</td>
        <td>Consectetur Euismod</td>
      </tr>
      <tr>
        <td>Egestas Ipsum Nibh</td>
        <td>Magna Nullam</td>
        <td>Consectetur Euismod</td>
      </tr>
    </tbody>
  </table>
</div>

```html
<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th scope="col">...</th>
        <th scope="col">...</th>
        <th scope="col">...</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>...</td>
        <td>...</td>
        <td>...</td>
      </tr>
    </tbody>
  </table>
</div>
```