# CoreBundle
**this is symfony complate package,you can composer install it in www.packagist.org**

you can composer install or clone the project.
if you use composer , enter command

`composer require nligo/core-bundle "dev-master"`

Then register the bundle in **AppKernel.php**

`    new Cars\CoreBundle\CarsCoreBundle(),
`

add routing file in `app/config/routing.yml`

`cars_core:
     resource: "@CarsCoreBundle/Resources/config/routing.yml"
     prefix:   /
`

**This bundle is my personal favorite project structure. I feel especially comfortable. So to recommend to you!Hope you enjoying your stay** 