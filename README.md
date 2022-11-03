<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://cdn.invicti.com/app/uploads/2022/06/28121804/csrf-cross-site-request-forgery.jpg" width="400"></a></p>


Laravel provide CSRF for secure request with CSRF token. CSRF is default enable to all post type routes. but if you want to disable for specific route then you can do it easily.

Sometime we need to ignore some route for csrf middleware in our laravel application.Solution of how to disable csrf for some routes then solve by adding routes in VerifyCsrfToken middleware.

VerifyCsrfToken middleware will have $except array variable there you can easily add your url and ignore from csrf token verification.

