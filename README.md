# Composer Package

Version package using [git tag](https://www.atlassian.com/git/tutorials/inspecting-a-repository/git-tag):
```
git tag 1.0.0
git push origin 1.0.0
```

## Usage in composer.json
```
{
    "require": {
        "mjnewman/package-test": "dev-master"
    },
    "repositories": [
        {
            "type": "vcs",
            "url":  "https://github.com/mjnewman/package-test"
        }
    ]
}
```

## Resources
+ https://www.w3resource.com/php/composer/create-publish-and-use-your-first-composer-package.php
+ https://stackoverflow.com/questions/24385035/create-a-private-package
+ https://www.atlassian.com/git/tutorials/inspecting-a-repository/git-tag

