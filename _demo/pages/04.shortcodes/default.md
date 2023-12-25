---
title: Shortcodes
show_pageimage: true
image_width: 1038
image_height: 437
subtitle: 'Mundana shortcodes based in Bootstrap 4'
show_title: '1'
subtitleLead: '1'
show_image: true
---

The shortcodes included in the Mundana theme make it easy to write content, through the admin plugin, taking advantage of the fact that all the classes included in Bootstrap 4 are available, without having to modify any twig template.
So far, shortcodes are available that allow you to create alert boxes, badges, cards, buttons and grids.

## Alert Shortcode

[Documentation for Alerts in Bootstrap 4](https://getbootstrap.com/docs/4.0/components/alerts/)

### Usage

In markdown wrap an alert in [raw]`[sc-alert]`[/raw] tags.  The [raw]`[sc-alert]`[/raw] shortcode has some optional parameters:

* `class` - primary (by default), secondary, info, sucess, warning, danger, light, dark
* `heading` - Show a title in the alert box.
* `dismissible` - true or false. Show a close icon in the alert box.
    
An example of the Alert shortcode is as follows:

```
[raw]
[sc-alert class="info" heading="Alert with heading"]
To write an XML code you should have at least a basic understanding of XML format and XML schema. You can watch the videos on youtube if you are totally new to XML. By now, I assume you fully understand what XML is and, even if you do not, simply follow the steps outlined below and you will be up to speed on XML.
[/sc-alert]

[sc-alert class="danger" dismissible=true]
To write an XML code you should have at least a basic understanding of XML format and XML schema. You can watch the videos on youtube if you are totally new to XML. By now, I assume you fully understand what XML is and, even if you do not, simply follow the steps outlined below and you will be up to speed on XML.
[/sc-alert]
[/raw]
```

### Example
[sc-alert class="info" heading="Alert with heading"]
To write an XML code you should have at least a basic understanding of XML format and XML schema. You can watch the videos on youtube if you are totally new to XML. By now, I assume you fully understand what XML is and, even if you do not, simply follow the steps outlined below and you will be up to speed on XML.
[/sc-alert]

[sc-alert class="danger" dismissible=true]
To write an XML code you should have at least a basic understanding of XML format and XML schema. You can watch the videos on youtube if you are totally new to XML. By now, I assume you fully understand what XML is and, even if you do not, simply follow the steps outlined below and you will be up to speed on XML.
[/sc-alert]


## Badge Shortcode

[Documentation for Badges in Bootstrap 4](https://getbootstrap.com/docs/4.0/components/badge/)

### Usage

In markdown wrap a badge in [raw]`[sc-badge]`[/raw] tags.  The [raw]`[sc-badge]`[/raw] shortcode has some optional parameters:

* `class` - primary (by default), secondary, info, sucess, warning, danger, light, dark
* `label` - Show the badge label.
* `url` - URL to visit if you click on the badge.
* `target` - URL destination (self, blank, parent, top).
    
An example of the Badge shortcode is as follows:

```
[raw]
An example of badge shortcode [sc-badge class="warning" url="https://getgrav.org" label="warning" target="blank"][/sc-badge]
[/raw]
```

### Example

An example of badge shortcode [sc-badge class="warning" url="https://getgrav.org" label="warning" target="blank"][/sc-badge]

## Button Shortcode

[Documentation for Buttons in Bootstrap 4](https://getbootstrap.com/docs/4.0/components/buttons/)

### Usage

In markdown wrap a button in [raw]`[sc-button]`[/raw] tags.  The [raw]`[sc-button]`[/raw] shortcode has some optional parameters:

* `label` - Show the button label.
* `type` - primary (by default), secondary, info, sucess, warning, danger, light, dark.
* `outline`- true or false for buttons with outline, without background color.
* `size` - Button size (sm or lg)
* `classes`- Additional CSS classes (eg. disabled, btn-block, etc.). NOTE: btn-outline-(color) is not supported with the type parameter.
* `url` - URL to visit if you click on the button.
* `target` - URL destination (self, blank, parent, top).
    
An example of the Button shortcode is as follows:

```
[raw]
This is a primary large button [sc-button type="success" url="https://getgrav.org" label="Button" target="blank" size="lg" classes=""][/sc-button]

This is a danger small button [sc-button type="danger" url="https://getgrav.org" label="Button" target="blank" size="sm" classes=""][/sc-button]

This is a default button with outline class [sc-button type="info" url="https://getgrav.org" label="Button" target="blank" outline=true][/sc-button]

This is a danger small button in block [sc-button type="danger" url="https://getgrav.org" label="Button" target="blank" size="sm" classes="btn-block"][/sc-button]
[/raw]
```

### Example

This is a primary button [sc-button type="success" url="https:/getgrav.org" label="Button" target="blank" size="lg" classes=""][/sc-button]

This is a danger small button [sc-button type="danger" url="https://getgrav.org" label="Button" target="blank" size="sm" classes=""][/sc-button]

This is a default button with outline class [sc-button type="info" url="https://getgrav.org" label="Button" target="blank" outline=true][/sc-button]

This is a danger small button in block [sc-button type="danger" url="https://getgrav.org" label="Button" target="blank" size="sm" classes="btn-block"][/sc-button]

## Cards Shortcode

[Documentation for Cards in Bootstrap 4](https://getbootstrap.com/docs/4.0/components/card/)

### Usage

In markdown wrap each group of cards in [raw]`[sc-cards]`[/raw] tags and for each card wrap in [raw]`[sc-card]`[/raw]. The [raw]`[sc-card]`[/raw] shortcode has some optional parameters:

* `column-size` - Size of column
* `title` - Card title
* `button-text`- Card button text
* `button-color` - Card button color (primary, secondary, info, ...). See [Bootstrap colors](https://getbootstrap.com/docs/4.0/utilities/colors/?target=_blank)
* `button-url` - Card button url
    
An example of the Cards shortcode is as follows:

```
[raw]
[sc-cards]
[sc-card title="Special title treatment" button-text="Button 1" button-url="#my-url" button-color="primary" column-size="col-md-4"]
With supporting text below as a natural lead-in to additional content. <br>
With supporting text below as a natural lead-in to additional content. 
[/sc-card]
[sc-card title="Special title treatment" button-text="Button 2" button-url="#another-url" button-color="secondary" column-size="col-md-4"]
With supporting text below as a natural lead-in to additional content.
[/sc-card]  
[sc-card title="Special title treatment" button-text="Button 3" button-url="#another-url" button-color="secondary" column-size="col-md-4"]
With supporting text below as a natural lead-in to additional content.
[/sc-card]
[/sc-cards]
[/raw]
```
### Example

[sc-cards]
[sc-card title="Special title treatment" button-text="Button 1" button-url="#my-url" button-color="primary" column-size="col-md-4"]
With supporting text below as a natural lead-in to additional content. <br>
With supporting text below as a natural lead-in to additional content. 
[/sc-card]
[sc-card title="Special title treatment" button-text="Button 2" button-url="#another-url" button-color="secondary" column-size="col-md-4"]
With supporting text below as a natural lead-in to additional content.
[/sc-card]  
[sc-card title="Special title treatment" button-text="Button 3" button-url="#another-url" button-color="secondary" column-size="col-md-4"]
With supporting text below as a natural lead-in to additional content.
[/sc-card]
[/sc-cards]

## Accordion Shortcode

[Documentation for Accordion in Bootstrap 4](https://getbootstrap.com/docs/4.0/components/collapse/)

### Usage

In markdown wrap each accordion in [raw]`[sc-collapse]`[/raw] tags and for each item wrap in [raw]`[sc-collapse-item]`[/raw]. The [raw]`[sc-collapse]`[/raw] shortcode has a mandatory parameter:
* `id` - Unique identifier for each accordion on the page.
* 
The [raw]`[sc-collapse-item]`[/raw] shortcode has some optional parameters:

* `open` - Indicates which accordion item will be shown open
* `title` - Accordion item title
    
An example of the Accordion shortcode is as follows:

```
[raw]
[sc-collapse id="accordion1"]
[sc-collapse-item title="Collapsible Group Item #1" open=true]
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. 
[/sc-collapse-item]

[sc-collapse-item title="Collapsible Group Item #2"]
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. 
[/sc-collapse-item]

[sc-collapse-item title="Collapsible Group Item #3"]
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. 
[/sc-collapse-item]
[/sc-collapse]
[/raw]
```
### Example

[sc-collapse id="accordion1"]
[sc-collapse-item title="Collapsible Group Item #1" open=true]
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. 
[/sc-collapse-item]

[sc-collapse-item title="Collapsible Group Item #2"]
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. 
[/sc-collapse-item]

[sc-collapse-item title="Collapsible Group Item #3"]
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. 
[/sc-collapse-item]
[/sc-collapse]
