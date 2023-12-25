---
title: Forgot password
visible: false
cache_control: private, no-cache, must-revalidate

login_redirect_here: false

form:

    fields:
        - name: email
          type: email
          label: PLUGIN_LOGIN.EMAIL
          autofocus: true
          classes: form-control
          outerclasses: form-group
          validate:
            required: true
            type: email
---
## Recovery your password

Enter your email to recover your password
