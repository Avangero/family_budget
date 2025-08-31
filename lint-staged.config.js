export default {
    "**/*.php": [
        "vendor/bin/duster fix"
    ],
    "**/*.blade.php": [
        "vendor/bin/duster fix",
        "npx blade-formatter --write"
    ]
}
