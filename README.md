# Voyager Pages

This [Laravel](https://laravel.com/)/[Voyager](https://laravelvoyager.com/) module adds Pages to Voyager.

Built by [Pivotal Agency](https://pivotal.agency/).

---

## Prerequisites

*   Composer Installed
*   [Install Laravel](https://laravel.com/docs/installation)
*   [Install Voyager](https://github.com/the-control-group/voyager)

---

## Installation

```bash
# 1. Require this Package in your fresh Laravel/Voyager project
composer require pvtl/voyager-pages

# 2. Run the Installer
php artisan voyager-pages:install
```

---

## Usage

Installation generates a new database and BREAD table "pages", which is also available as menu item in Voyager. Voyager Pages implicitly adds web routes to your Laravel installation according to defined slugs in ``pages`` entries. Additionally, web route ``/`` is overridden to display ``home`` page.

---

## Views Customization

In order to override views delivered by Voyager Pages, copy contents from ``vendor/pvtl/voyager-pages/resources/views`` to the ``views/vendor/voyager-pages`` directory of your Laravel installation.
