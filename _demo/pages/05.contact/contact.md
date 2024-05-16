---
form:
    name: contact-form
    template: form-messages
    refresh_prevention: true
    classes: row
    fields:
        -
            name: Name
            label: Name
            placeholder: Name
            validate:
                required: true
                message: 'This field is required'
            autofocus: 'off'
            autocomplete: 'on'
            type: text
            outerclasses: 'col-md-6 py-2'
            classes: null
        -
            name: Email
            label: Email
            placeholder: Email
            validate:
                required: true
                message: 'This field is required'
            type: email
            outerclasses: 'col-md-6 py-2'
            classes: null
        -
            name: Subject
            label: Subject
            type: text
            placeholder: Subject
            validate:
                required: true
                message: 'This field is required'
            outerclasses: 'col-12 py-2'
            classes: null
        -
            name: Message
            label: Message
            placeholder: Message
            validate:
                required: true
                message: 'This field is required'
            type: textarea
            outerclasses: 'col-12 py-2'
            classes: null
            rows: 5
        -
            name: Privacy
            type: checkbox
            markdown: true
            label: 'By using this form you agree with our <a href="privacy">Privacy Policy</a>'
            classes: null
            outerclasses: 'col-12 py-2'
            validate:
                required: false
                message: 'This field is required'
    buttons:
        -
            type: submit
            value: Submit
            classes: 'btn-outline-primary my-2'
        -
            type: reset
            value: Reset
            classes: 'btn-danger my-2'
    process:
        captcha: false
        save:
            fileprefix: contact-
            dateformat: dmY-His-u
            extension: txt
            body: '{% include ''forms/data.txt.twig'' %}'
        email:
            subject: '[Form example from Mundana] {{ form.value.name|e }}'
            body: '{% include ''forms/data.html.twig'' %}'
        display: /thankyou
        reset: false
title: Contact
subtitle: 'Elit aliquam vulputate egestas euismod nunc semper vehicula lorem blandit'
show_title: '1'
show_image: true
image_width: 1000
image_height: 300
media_order: pic07.webp
subtitleLead: '1'
address:
    -
        addressField: 'Mundana Grav Street, 5'
        fieldIcon: 'fas fa-map-marker-alt'
    -
        addressField: 'Phone number: +34111222333'
        fieldIcon: 'fas fa-phone'
    -
        addressField: 'E-mail: demo@pmdesign.dev'
        fieldIcon: 'fas fa-envelope'
icon_menu: 'fas fa-map-marker-alt'
---

