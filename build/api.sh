 #!/bin/bash

cd /home/alumne/Code/DocumentationLaravelMarketInformation/build/sami

rm -rf /home/alumne/Code/DocumentationLaravelMarketInformation/build/sami/build
rm -rf /home/alumne/Code/DocumentationLaravelMarketInformation/build/sami/cache

# Run API Docs
git clone git@github.com:alexbonavila/LaravelMarketInformation.git /home/alumne/Code/DocumentationLaravelMarketInformation/sami/LaravelMarketInformation

php /home/alumne/Code/DocumentationLaravelMarketInformation/build/sami.phar update /home/alumne/Code/DocumentationLaravelMarketInformation/build/sami/sami.php

cp -r /home/alumne/Code/DocumentationLaravelMarketInformation/build/sami/build/* /home/alumne/Code/DocumentationLaravelMarketInformation/public/api

rm -rf /home/alumne/Code/DocumentationLaravelMarketInformation/build/sami/build
rm -rf /home/alumne/Code/DocumentationLaravelMarketInformation/build/sami/cache

# Cleanup
rm -rf /home/alumne/Code/DocumentationLaravelMarketInformation/build/sami/laravel

