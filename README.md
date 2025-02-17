# skeleton-php
Basic php skeleton with the PSR-4 specification, for class autoloading.

Integrated into the skeleton linter for static analysis and code styles and automatic code refactoring.

---
> **Requires [PHP 8.2+](https://php.net/releases/)**


### Create new project
For initial new project, execute this command:
```
composer create-project iportillo/skeleton-php project-name
```
## Commands in skeleton
Use codebase with **Pint**:
```bash
composer lint
```

Run refactors using **Rector**
```bash
composer refacto
```

Run static analysis using **PHPStan**:
```bash
composer test:types
```

Run unit tests using **PEST**
```bash
composer test:unit
```

Run the entire test suite:
```bash
composer test
```

### Running server
```bash
cd public
php -S localhost:8000
```

