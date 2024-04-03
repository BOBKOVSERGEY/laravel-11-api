alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'

# create api
sail artisan install:api

# make middleware
sail artisan make:middleware AlwaysAcceptJson

https://laraveldaily.com/lesson/api-laravel/data-pagination-via-api


