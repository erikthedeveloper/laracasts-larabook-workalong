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
