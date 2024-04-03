alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'

# make middleware
sail artisan make:middleware AlwaysAcceptJson

