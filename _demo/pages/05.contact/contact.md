---
form:
    name: contact-form
    template: form-messages
    refresh_prevention: true
    classes: row
    fields:
        -
            name: Nombre
            label: false
            placeholder: Nombre
            validate:
                required: true
                message: 'Este campo es obligatorio'
            autofocus: 'off'
            autocomplete: 'on'
            type: text
            outerclasses: 'col-md-6 py-2'
            classes: null
        -
            name: Email
            label: false
            placeholder: Email
            validate:
                required: true
                message: 'Este campo es obligatorio'
            type: email
            outerclasses: 'col-md-6 py-2'
            classes: null
        -
            name: Asunto
            label: false
            type: text
            placeholder: Asunto
            validate:
                required: true
                message: 'Este campo es obligatorio'
            outerclasses: 'col-12 py-2'
            classes: null
        -
            name: Mensaje
            label: false
            placeholder: Mensaje
            validate:
                required: true
                message: 'Este campo es obligatorio'
            type: textarea
            outerclasses: 'col-12 py-2'
            classes: null
            rows: 5
        -
            name: Privacy
            type: checkbox
            label: 'Privacy Policy'
            classes: null
            outerclasses: 'col-12 py-2'
            validate:
                required: false
                message: 'By using this form you agree with our Privacy Policy'
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
            subject: '[Formulario de juanvillen.es] {{ form.value.name|e }}'
            body: '{% include ''forms/data.html.twig'' %}'
        display: /thankyou
        reset: true
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

