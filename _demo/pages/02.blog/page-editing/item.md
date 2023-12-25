---
title: 'Page Editing'
media_order: '3.jpg,3.webp,ana_avataaars.webp'
taxonomy:
    category:
        - grav
        - editors
    tag:
        - featured
author:
    name: Ana
    bio: 'Blogger, fashionista, love to explore new ideas and write on my morning coffee!'
    author_twitter: 'https://twitter.com/wowthemesnet'
    avatarImage: ana_avataaars.webp
feed:
    limit: 10
image_width: 1038
image_height: 437
show_title: '1'
show_image: true
featuredImage: 3.webp
summary: {  }
subtitleLead: '1'
publish_date: '03-12-2023 00:00'
isSticky: true
---

Pages in **Grav** are composed in **Markdown** syntax.  Markdown is a plain text formatting syntax that a computer can readily parse and convert to HTML. It uses basic text symbols to indicate presentation (e.g. **bold**, _italics_, headings, lists, etc.), making it easy to write without needing to know the complexities of HTML. Benefits of Markdown include lower error rate, readability, ease of learning and use, etc.

You can read an [extensive write-up of available syntax](../../content/markdown) with examples in the documentation, but for now, follow along.

Open the home page in your text editor. The file that controls the homepage is located in the `user/pages/01.home/` folder and is called `default.md`. All of the content you create will be created in the `user/pages/` folder in your Grav installation.

When you edit the page in a text editor, the content will look something like this:

[div class="no-margin-bottom"]
```yaml
---
title: Home
body_classes: title-center title-h1h2
---
```
[/div]
[div class="no-margin-top"]
```markdown
# Say Hello to Grav!
## installation successful...

Congratulations! You have installed the **Base Grav Package** that provides a **simple page** and the default **Quark** theme to get you started.

!! If you see a **404 Error** when you click `Typography` in the menu, please refer to the [troubleshooting guide](https://learn.getgrav.org/troubleshooting/page-not-found).
```
[/div]

Let us break this down a little so you can see how easy it is to write in Markdown. The stuff between the `---` indicators are the [Page Headers](../../content/headers), and these are written in a straightforward format called [YAML](../../advanced/yaml). This configuration block that sits in the `.md` file is commonly known as **YAML Front Matter**.

```text
title: Home
body_classes: title-center title-h1h2
```
This block sets the HTML title tag for the page (the text you see in the browser tab).  You can also access this from your themes via the `page.title` attribute.  There are a [few standard headers](../../content/headers) that let you configure a variety of options for this page. Another example is `menu: Something` that lets you override the text used to display the name of the page in a menu.  By default, Grav will use the title for the menu value.

```markdown
# Say Hello to Grav!
## installation successful...
```

The `#` or `hashes` syntax in markdown indicates a title.  A single `#` with a space and then text converts into an `<h1>` header in HTML. `##` or double hash would convert into an `<h2>` tag.  Of course, this goes all the way up to the HTML valid `<h6>` tag which of course, would be six hashes: `###### My H6 Level Header`.

```markdown
Congratulations! You have installed the **Base Grav Package** that provides a **simple page** and the default **Quark** theme to get you started.
```

This is a simple paragraph that would have been wrapped in regular `<p>` tags when converted to HTML.  The `**` markers indicate bold text or `<strong>`, formerly `<b>`, in HTML.  Italic text is indicated by wrapping text in `_` markers.

```markdown
!! If you see a **404 Error** when you click `Typography` in the menu, please refer to the [troubleshooting guide](https://learn.getgrav.org/troubleshooting/page-not-found).
```

This section uses a custom markdown feature that is provided by the included `markdown-notices` plugin.  This allows you to create simple notices by prefix a paragraph of text with a number of `!` (exclamation mark) symbols, from `!` to `!!!!`.

This overview should provide you with a few key pointers for writing Markdown, but you should check out our more [detailed explanation](../../content/markdown) to get a thorough understanding.

!! Ensure you save your `.md` files as `UTF8` files.  This will ensure they work with language-specific special characters.