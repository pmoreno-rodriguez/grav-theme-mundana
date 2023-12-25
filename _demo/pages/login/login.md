---
title: Login
cache_control: 'private, no-cache, must-revalidate'
login_redirect_here: false
forms:
    login:
        action: null
        method: post
        fields:
            username:
                type: text
                id: username
                placeholder: PLUGIN_LOGIN.USERNAME_EMAIL
                label: PLUGIN_LOGIN.USERNAME_EMAIL
                autofocus: true
                classes: 'form-control form-control-lg'
                outerclasses: 'form-outline mb-4'
            password:
                type: password
                id: password
                placeholder: PLUGIN_LOGIN.PASSWORD
                label: PLUGIN_LOGIN.PASSWORD
                classes: 'form-control form-control-lg'
                outerclasses: 'form-outline mb-4'
    login-twofa:
        action: null
        method: post
        fields:
            2fa_instructions:
                type: display
                markdown: true
                content: PLUGIN_LOGIN.2FA_INSTRUCTIONS
            2fa_code:
                type: text
                id: twofa-code
                autofocus: true
                placeholder: PLUGIN_LOGIN.2FA_CODE_INPUT
permissions:
    inherit: true
visible: false
show_title: '1'
subtitleLead: '1'
media_order: secure_login.png
show_image: true
image_width: 1000
image_height: 300
---

