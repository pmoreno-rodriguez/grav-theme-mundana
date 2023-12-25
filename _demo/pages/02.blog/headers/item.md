---
title: Headers
taxonomy:
    category:
        - blog
    tag:
        - markdown
        - sticky
    author:
        - Ana
media_order: 'ana_avataaars.webp,5.webp'
blog_image: 15.jpg
author:
    twitter: 'https://twitter.com/wowthemesnet'
    avatarImage: ana_avataaars.webp
    bio: 'Blogger, fashionista, love to explore new ideas and write on my morning coffee!'
feed:
    limit: 10
style: secondary
image_width: 1038
image_height: 437
show_title: '1'
show_image: true
subtitleLead: '1'
summary: {  }
featuredImage: 5.webp
---

The page headers (alternatively known as frontmatter) at the top of a page are completely optional, you do not need them at all for a page to display within Grav. There are 3 primary types of pages (**Standard**, **Listing**, and **Modular**) within Grav, and each has relevant headers.

! Headers are also known as **Page Frontmatter** and are commonly referred to as such so as not to be confused with HTTP Headers.

## Basic Page Headers

There are a number of basic header options available.

### Cache Enable

```yaml
cache_enable: false
```

By default, Grav will cache the contents of the page file to ensure things run as fast as possible.  There are advanced scenarios where you do not want the page to be cached.

An example of this is when you are using dynamic Twig variables in your content. The `cache_enable` variable allows this behavior to be overridden.  We will cover Twig Content variables in a later chapter. Valid values are `true` or `false`.

### Date

```yaml
date: 01/01/2020 3:14pm
```

The `date` variable allows you to specifically set a date associated with this page.  This is often used to indicate when a post was created and can be used for display or sort-order purposes.  If not set, this defaults to the last **modified time** of the page.

! Dates in the `m/d/y` or `d-m-y` formats are disambiguated by looking at the separator between the various components: if the separator is a slash (`/`), then the **American** `m/d/y` is assumed; whereas if the separator is a dash (`-`) or a dot (`.`), then the **European** `d.m.y` format is assumed.

### Menu

```yaml
menu: My Page
```

The `menu` variable lets you set the text to be used in the navigation. There are several layers of fall-backs for the menu, so if no `menu` variable is set, Grav will try to use the `title` variable.

### Published

```yaml
published: true
```

By default, a page is **published** unless you explicitly set `published: false` or via a `publish_date` being in the future, or `unpublish_date` in the past. Valid values are `true` or `false`.

### Slug

```yaml
slug: my-page-slug
```

The `slug` variable allows you to specifically set the page's portion of the URL. For example: `http://yoursite.com/my-page-slug` would be the URL if you set the `slug` above.  If the `slug` is not set in the page, Grav falls back to using the folder name (without any numerical prefixes).

[Slugs](http://en.wikipedia.org/wiki/Semantic_URL#Slug) are generally entirely lowercase, with accented characters replaced by letters from the English alphabet and whitespace characters replaced by a dash or an underscore. While future versions of Grav will support spaces in slugs, having blank spaces or capital lettering is not recommended.

For example: If a blog post's title is `Blog Post Example`, the recommended slug would be `blog-post-example`.

### Taxonomy

```yaml
taxonomy:
    category: blog
    tag: [sample, demo, grav]
```

A very useful header variable, `taxonomy` lets you assign values to **taxonomy** you defined as valid types in the [Site Configuration](../../basics/grav-configuration#site-configuration) file.

If the taxonomy is not defined in that file, it will be ignored.  In this example, the page is defined as being in the `blog` category, and has the tags: `sample`, `demo`, and `grav`.  These taxonomies can be used to find these pages from other pages, plugins and even themes. The [Taxonomy](../taxonomy) chapter will cover this concept in more detail.

### Title

If you have no headers at all, you will not have any control over the title of the page as it shows in the browser and search engines.  For this reason, it is recommended to _at least_ put the `title` variable in the header of the page:

```yaml
title: Title of my Page
```

If the `title` variable is not set, Grav has a fallback solution, and will try to use the capitalized `slug` variable.