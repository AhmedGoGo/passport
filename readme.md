## About Fork

This fork has the code for <a href="https://github.com/laravel/passport/issues/243">allow for automatic approval of authorization</a>

I only added the add first party to client command.

to use this version instead of original passport version

modify the Composer JSON 
```json
"require": {
        "laravel/passport": "v7.2.2-alpha.1",
     },
    "repositories": [
        {
            "url": "https://github.com/AhmedGoGo/passport.git",
            "type": "git"
        }
    ]
 ```
