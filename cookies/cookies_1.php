<?php

/*
    Cookies

    - Examples
    --- Popup
    --- Custom Settings
    --- Remember Me => Login

    - setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only);
    --- Name
    --- Value
    --- Expire
    --- Path
    --- Domain
    --- Secure
    --- HTTP_Only
  */

setcookie("style", "dark", time() + 60 * 60 * 24 * 30);
