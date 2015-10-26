---
layout: docs
title: Utilities
description: Utility classes for typographic styles, display, positioning, floats and visibility of elements for rapid frontend development.
permalink: /docs/utilities/
---

## Utility Classes

For text and background color utility classes check out the [color](#colors) section. Text align utility classes are demonstrated in the [typography](#typography) section.

{% include tables/utilities-general.html %}

## Visibility

Define content to be `visible` or `hidden`.

{% include tables/utilities-visibility.html %}

### Visibile Breakpoint Classes

Define content to be visible at different breakpoints. Note: `!important` is used to override specificity issues.

{% include tables/utilities-visibility-visible.html %}

### Hidden Breakpoint Classes

Define content to be hidden at different breakpoints. Note: `!important` is used to override specificity issues.

{% include tables/utilities-visibility-hidden.html %}

## Display

{% include tables/utilities-display.html %}

## Positioning

Utility classes can be used to position elements easily, each position utility class is `position: absolute;` and allows for either absolute positioning or using `@gutter` spacing by adding the `gutter` class to any position class

{% include tables/utilities-positioning.html %}

## Flex

{% include tables/utilities-flex.html %}

## Float

{% include tables/utilities-floats.html %}

### Responsive Clear Floats

{% include tables/utilities-floats-responsive.html %}

## Max Width

<p class="max-width-xlarge">Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper.</p>
<p class="max-width-large">Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper.</p>
<p class="max-width-medium">Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper.</p>
<p class="max-width-small">Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper.</p>
<p class="max-width-xsmall">Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper.</p>

```html
<p class="max-width-xlarge">...</p>
<p class="max-width-large">...</p>
<p class="max-width-medium">...</p>
<p class="max-width-small">...</p>
<p class="max-width-xsmall">...</p>
```

## Margin

{% include tables/utilities-margin.html %}

## Padding

{% include tables/utilities-padding.html %}

## Font Family

<p class="sans-serif-font">Sans Serif Font</p>
<p class="serif-font">Serif Font</p>
<p class="monospace-font">Monospace Font</p>
<p class="thin-font">Thin Font</p>
<p class="regular-font">Regular Font</p>
<p class="medium-font">Medium Font</p>
<p class="semibold-font">Semibold Font</p>
<p class="bold-font">Bold Font</p>

```html
<p class="sans-serif-font">Sans Serif Font</p>
<p class="serif-font">Serif Font</p>
<p class="monospace-font">Monospace Font</p>
<p class="thin-font">Thin Font</p>
<p class="regular-font">Regular Font</p>
<p class="medium-font">Medium Font</p>
<p class="semibold-font">Semibold Font</p>
<p class="bold-font">Bold Font</p>
```

## Font Size

<p class="font-size-xlarge">Font Size Extra Large</p>
<p class="font-size-large">Font Size Large</p>
<p class="font-size-medium">Font Size Medium</p>
<p class="font-size-small">Font Size Small</p>
<p class="font-size-xsmall">Font Size Extra Small</p>

```html
<p class="font-size-xlarge">Font Size Extra Large</p>
<p class="font-size-large">Font Size Large</p>
<p class="font-size-medium">Font Size Medium</p>
<p class="font-size-small">Font Size Small</p>
<p class="font-size-xsmall">Font Size Extra Small</p>
```

## Text Align

<p class="text-left">Text Left</p>
<p class="text-center">Text Center</p>
<p class="text-right">Text Right</p>
<p class="text-justify">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Maecenas sed diam eget risus varius blandit sit amet non magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
<p class="truncate">Curabitur blandit tempus porttitor. Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

```html
<p class="text-left">...</p>
<p class="text-center">...</p>
<p class="text-right">...</p>
<p class="text-justify">...</p>
<p class="truncate">...</p>
```

### Text Transform

<p class="uppercase">Uppercase</p>
<p class="lowercase">Lowercase</p>
<p class="capitalize">capitalize</p>

```html
<p class="uppercase">Uppercase</p>
<p class="lowercase">Lowercase</p>
<p class="capitalize">capitalize</p>
```

## Text Color

<p class="text-color text-white">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-light-grey">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-grey">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-dark-grey">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-black">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-error">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-warning">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-success">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-info">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-light">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-primary">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-secondary">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-tertiary">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="text-color text-dark">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>

```html
<p class="text-white">...</p>
<p class="text-light-grey">...</p>
<p class="text-grey">...</p>
<p class="text-dark-grey">...</p>
<p class="text-black">...</p>
<p class="text-error">...</p>
<p class="text-warning">...</p>
<p class="text-success">...</p>
<p class="text-info">...</p>
<p class="text-light">...</p>
<p class="text-primary">...</p>
<p class="text-secondary">...</p>
<p class="text-tertiary">...</p>
<p class="text-dark">...</p>
```

## Background

<p class="background-white padding-xsmall">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-light-grey padding-xsmall">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-grey padding-xsmall text-white">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-dark-grey padding-xsmall text-white">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-black padding-xsmall text-white">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-error padding-xsmall">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-warning padding-xsmall">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-success padding-xsmall">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-info padding-xsmall">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-light padding-xsmall">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-primary padding-xsmall text-white">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-secondary padding-xsmall text-white">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-tertiary padding-xsmall text-white">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p class="background-dark padding-xsmall text-white">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>

```html
<p class="background-white">...</p>
<p class="background-light-grey">...</p>
<p class="background-grey">...</p>
<p class="background-dark-grey">...</p>
<p class="background-black">...</p>
<p class="background-error">...</p>
<p class="background-warning">...</p>
<p class="background-success">...</p>
<p class="background-info">...</p>
<p class="background-light">...</p>
<p class="background-primary">...</p>
<p class="background-secondary">...</p>
<p class="background-tertiary">...</p>
<p class="background-dark">...</p>	
```
			