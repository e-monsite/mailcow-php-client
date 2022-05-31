# Pre-clean
sudo rm -Rf generated
sudo rm generated.zip

curl -X POST \
  https://generator3.swagger.io/api/generate \
  -H 'Content-Type: application/json' \
  -H 'cache-control: no-cache' \
  -d '{
    "options": {
      "packageName": "MailCowPhpClient",
      "apiPackage": "Api",
      "variableNamingConvention": "snake_case",
      "invokerPackage": "MailCow",
      "composerVendorName": "e-monsite",
      "composerProjectName": "mailcow-php-client",
      "modelPackage": "Models",
      "variableNamingConvention": "camelCase",
      "packagePath": "GeneratedMailCow",
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
sudo rm composer.json
sudo rm phpunit.xml.dist
sudo rm README.md
sudo rm -Rf docs
sudo rm -Rf lib
sudo rm -Rf test

# Move file in root directory
sudo cp -Rf generated/SwaggerClient-php/* .

# Post-clean
sudo rm -Rf generated
sudo rm generated.zip

# No use of git_push script, clean it
sudo rm git_push.sh