# Pre-clean
rm -Rf generated
rm generated.zip

curl -X POST \
  https://generator3.swagger.io/api/generate \
  -H 'Content-Type: application/json' \
  -H 'cache-control: no-cache' \
  -d '{
    "options": {
        "packageName": "MailCowPhpClient",
        "apiPackage": "MailCow",
        "variableNamingConvention": "snake_case",
        "invokerPackage": "MailCow\\Api",
        "composerVendorName": "e-monsite",
        "composerProjectName": "mailcow-php-client",
		"gitUserId": "e-monsite",
		"gitRepoId": "mailcow-php-client",
    "gitRepoBaseURL": "https://github.com/"
    },
    "lang": "php",
    "type": "CLIENT",
    "codegenVersion": "V3",
    "specURL": "https://raw.githubusercontent.com/e-monsite/mailcow-php-client/main/mailcow_oas3.json"
}' > generated.zip

sudo unzip generated.zip -d generated/

# Remove old files
rm composer.json
rm phpunit.xml.dist
rm README.md
rm -Rf docs
rm -Rf lib
rm -Rf test

# Move file in root directory
cp -Rf generated/SwaggerClient-php/* .

# Post-clean
rm -Rf generated
rm generated.zip

# No use of git_push script, clean it
rm git_push.sh