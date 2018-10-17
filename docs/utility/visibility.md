---
layout: docs
title: Visibility
description: Define content to be visible or hidden.
---

| Class            | Description                                     |
| ---------------- | ----------------------------------------------- |
| `hide`           | Hides element `display: none;`                  |
| `show`           | Shows element `display: block;`                 |
| `visible`        | Sets `visibility: visible;`                     |
| `hidden`         | Sets `visibility: hidden;`                      |
| `hidden-print`   | Hides element for when `@media print`           |
| `visible-print`  | Shows element for when `@media print`           |
| `hidden-screen`  | Hides element for when `@media screen`          |
| `visible-screen` | Shows element for when `@media screen`          |
| `hide-visually`  | Hide element but keep in DOM for Screen Readers |
| `text-hide`      | Hides text visually                             |

### Visibile Breakpoint Classes

Define content to be visible at different breakpoints. Note: `!important` is used to override specificity issues.

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th width="30%"></th>
        <th width="10%">XXS</th>
        <th width="10%">XS</th>
        <th width="10%">S</th>
        <th width="10%">M</th>
        <th width="10%">L</th>
        <th width="10%">XL</th>
        <th width="10%">XXL</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>.visible-xxs</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.visible-xs</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.visible-xs-up</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.visible-xs-down</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.visible-s</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.visible-s-up</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.visible-s-down</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.visible-m</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.visible-m-up</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.visible-m-down</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.visible-l</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.visible-l-up</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.visible-l-down</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.visible-xl</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.visible-xl-up</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.visible-xl-down</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.visible-xxl</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
    </tbody>
  </table>
</div>

### Hidden Breakpoint Classes

Define content to be hidden at different breakpoints. Note: `!important` is used to override specificity issues.

<div class="table-responsive">
  <table>
    <thead>
      <tr>
        <th width="30%"></th>
        <th width="10%">XXS</th>
        <th width="10%">XS</th>
        <th width="10%">S</th>
        <th width="10%">M</th>
        <th width="10%">L</th>
        <th width="10%">XL</th>
        <th width="10%">XXL</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>.hidden-xxs</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.hidden-xs</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.hidden-xs-up</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.hidden-xs-down</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.hidden-s</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.hidden-s-up</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.hidden-s-down</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.hidden-m</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.hidden-m-up</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.hidden-m-down</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.hidden-l</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.hidden-l-up</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.hidden-l-down</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.hidden-xl</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.hidden-xl-up</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
      <tr>
        <td><code>.hidden-xl-down</code></td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-error background-error-50">&times;</td>
        <td class="color-success background-success-50">&check;</td>
      </tr>
      <tr>
        <td><code>.hidden-xxl</code></td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-success background-success-50">&check;</td>
        <td class="color-error background-error-50">&times;</td>
      </tr>
    </tbody>
  </table>
</div>
