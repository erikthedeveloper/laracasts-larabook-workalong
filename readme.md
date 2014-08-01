## Laracasts LaraBook

### The Process...

More descriptive/helpful goodies to come. Enjoy the commit messages!


**Initial commit (running out of Homestead/Vagrant)**

**Add composer dependencies and register service providers**

    - composer.json
        - laracasts/commander
        - way/generators
        - codeception/codeception
        - laracasts/testdummy
    - Service Providers
        - Way\Generators\GeneratorsServiceProvider
        - Laracasts\Commander\CommanderServiceProvider


**Database config - Move to .env based credentials**

    - remove `local/database.php`
    - use `get_env('DB_NAME')` for MySQL

---

**Kickstart pages/view related files**

    - Adds views
        - `layouts.default`
        - `pages.home`
    - Adds controller `PagesController`
    - Removes `hello.blade.php`


**Adds navbar to `layouts.default` using include/partial**

    - Adds `views/layouts/partials` directory
        - Adds `nav.blade.php` w/ boilerplate/temp content


**Adds `app/assets/sass` directory**


**Adds npm dependencies and Gulpfile.js**

    - package.json dependencies
        - `"gulp": "^3.8.6"`
        - `"gulp-autoprefixer": "0.0.8"`
        - `"gulp-sass": "^0.7.2"`
    - Gulpfile dirs
        - dirs.assets = 'app/assets/
        - dirs.dest   = 'public/dist/ <- add to .gitignore
    - Gulpfile tasks
        - css
        - watch
        - default -> ['watch']


**Adds <link> to compiled .css and minimal content in .scss file**

---

**Composer - Adds/Registers barryvdh ide-helper (require-dev)**

    - Adds `"barryvdh/laravel-ide-helper": "1.*"` to composer.json > require-dev
    - Registers `'Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider',`

**Initialize codeception via `codecept bootstrap` also enable `Laravel4` module**

**New test: SignUpCept - Basic steps outlined. Feature not implemented**

    - `$I->wantTo('sign up for a LaraBook account');`
    - `$I->fillField('Username:', $username);`...
    - `$I->click('Sign Up');`
    - ... `$I->see('Welcome');` ...
    - `// @TODO $I->seeRecord('users', [`

**Implementing BDD User Sign Up/Registration (Routes, Controller, Views)**

    Same concept as Laracasts... different naming. Some divergence from lesson
    - Adds Resource-ful `UsersController`
        - @create -> view `pages.register` <- *Keeping non-resourceful naming for views*
            - Basic form setup/styled
        - @store  -> temp `Redirect::route('home')`
    - Updates routes/links to use named routes...

---
