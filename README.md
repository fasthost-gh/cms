# Using Blesta Billing as your Website

This repositoy was created for users that want to use the [Blesta Billing System](https://blesta.com/) as your website.
With that implemented we can easily add custom page, html content and meta tags to them.

## How to Install

1. [Download](https://github.com/marcelo-pvn/blesta-static/archive/refs/heads/main.zip) the repository file.
2. Extract the file on the same directory you installed Blesta.
3. Rename the folder from `blesta-static-main` to only `cms`.

## Configuring Blesta to work with our code

1. Open the file `plugins/cms/controller/main.php` and find:
   
   ````
   $this->set("content", $html);
   ````
2. Replace with:
   
   ````
   include 'cms/routes.php';
   ````
3. Open the file `/app/views/client/bootstrap/structure.pdt` (or your own template theme) and find:
   
   ````
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   ````
4. Replace with:
   
   ````
   <?php echo $this->Html->ifSet($metatags) ?>
   ````
5. Finish.

## How to add new page?

1. You will have to add your page name on file `cms/routes.php`.
2. Copy and paste the file on `cms/services.php` to `cms/yourpage.php`. (for php route)
3. Copy and paste the file on `cms/html/services.php` to `cms/html/yourpage.php`. (for html)
4. Copy and paste the file on `cms/meta/services.php` to `cms/meta/yourpage.php`. (for metatags)
5. Copy and paste the file on `cms/meta/images/services.png` to `cms/meta/images/yourpage.png`. (for meta image)
6. Edit the configuration section of the `cms/yourpage.php`.
5. You can edit the html, metatags and meta image as you wish.

## Credits

[Blesta Billing System](https://blesta.com/)

[Rodrigo](https://www.blesta.com/forums/index.php?/topic/2943-blesta-32-351-how-to-make-static-pages-by-modifying-portal-plugin/)

[Tchelo](https://discordapp.com/users/316189596004384778)

## Questions and Help?

Contact me at [Discord](https://discordapp.com/users/316189596004384778)

