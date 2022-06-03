docker run --rm -v "${PWD}:/local" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/e-monsite/mailcow-php-client/main/mailcow_oas3.json \
    -g php \
    -o /local/out/php \
    -c /local/config.json #\
#    --skip-validate-spec

# Remove old files
rm ../composer.json
rm ../phpunit.xml.dist
rm ../README.md
rm -Rf ../docs
rm -Rf ../lib
rm -Rf ../test

# Move file in root directory
cp -Rf out/php/* ..

rm ../git_push.sh

# Clean out
rm -Rf out
