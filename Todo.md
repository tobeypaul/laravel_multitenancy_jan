# Tenancy

- install laravel app `composer create-project laravel/laravel:^8.0 example-app`
- install breeze `composer require laravel/breeze:1.9.2`
- install breeze `php artisan breeze:install`

> NB: modify localhost domain names manually to reflect the domain name you desire to use. Check OS for different setup

- install tenancy for laravel `composer require stancl/tenancy`
  - run installation `php artisan tenancy:install`
  - run `php artisan tenancy:install`

> Read the docs on tenancy for laravel

## modify database tables

- move the users and passwords tables into `database\migration\tenant` the tenant folder in migrations
- then run `php artisan migrate`

## create Domain and Tenant models with config

- create model: `php artisan make:model Tenant` then modify accordingly
- modify the model in `config/tenancy` and add the tenant model class created earlier
- customize domain model in the same `config/tenancy`

## configure central domain routing

- modify the `central_domains` config and add the central domain name

## create users inside tenant db

- create separate routes for tenants

## Creating tenants

- create controller for tenants `php artisan make:controller RegisterTenantController`
- add controller methods
- add register controller request after registration

## create tenant domains

## create users under tenant db and domains

- modify the tenancyServiceProvider to create users
- create a job for that `php artisan make:job CreateTenantAdmin`

## authenticate users within tenants

## redirect to tenant domain after registration

- use tenant_route() helper
    > Tip: check routes `php artisan route:list --compact`
- prefix all routes with the tenant prefix

## 2 factor authentication

- `php artisan make:migration add_two_factor_fields_to_users_table --table=users` create 2fa field in users table
