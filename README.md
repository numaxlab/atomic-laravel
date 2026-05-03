# Atomic Laravel

A collection of Atomic Design Blade components for Laravel applications.

## Requirements

- PHP 8.2+
- Laravel 10, 11, or 12

## Installation

```bash
composer require numaxlab/atomic-laravel
```

The service provider is auto-discovered via Laravel's package discovery.

## Usage

All components are prefixed with `numaxlab-atomic`:

### Atoms

```blade
<x-numaxlab-atomic::atoms.button>Click me</x-numaxlab-atomic::atoms.button>

<x-numaxlab-atomic::atoms.input name="email" type="email" />

<x-numaxlab-atomic::atoms.select name="category" :options="$options" />

<x-numaxlab-atomic::atoms.textarea name="description" />
```

#### Form Atoms

```blade
<x-numaxlab-atomic::atoms.forms.label for="email" />
<x-numaxlab-atomic::atoms.forms.input name="email" type="email" />
<x-numaxlab-atomic::atoms.forms.select name="category" :options="$options" />
<x-numaxlab-atomic::atoms.forms.textarea name="description" />
<x-numaxlab-atomic::atoms.forms.checkbox name="terms" />
<x-numaxlab-atomic::atoms.forms.radio name="type" value="A" />
<x-numaxlab-atomic::atoms.forms.input-error :messages="$errors->get('email')" />
```

### Molecules

```blade
<x-numaxlab-atomic::molecules.banner :message="$message" />

<x-numaxlab-atomic::molecules.breadcrumb :items="$breadcrumbs" />

<x-numaxlab-atomic::molecules.summary :data="$summary" />
```

### Organisms

```blade
<x-numaxlab-atomic::organisms.accordion>
    <x-numaxlab-atomic::organisms.accordion.item title="Section 1">
        Content here
    </x-numaxlab-atomic::organisms.accordion.item>
</x-numaxlab-atomic::organisms.accordion>

<x-numaxlab-atomic::organisms.tabs :tabs="$tabs" />

<x-numaxlab-atomic::organisms.tier>
    <x-slot:header>...</x-slot:header>
</x-numaxlab-atomic::organisms.tier>
```

## Publishing Views

To publish the views for customisation:

```bash
php artisan vendor:publish --tag=numaxlab-atomic
```

This will copy the views to `resources/views/vendor/numaxlab/atomic`.

## License

The MIT License (MIT). See [LICENSE](LICENSE) for more information.
