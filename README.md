# UI components in your Laravel Blade views.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/zephyrphp/blade-ui.svg?style=flat-square)](https://packagist.org/packages/zephyrphp/blade-ui)
[![Total Downloads](https://img.shields.io/packagist/dt/zephyrphp/blade-ui.svg?style=flat-square)](https://packagist.org/packages/zephyrphp/blade-ui)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Requirements

- Laravel 11.x
- Tailwind CSS 3.x with @tailwindcss/forms & @tailwindcss/typography
- Alpine.js 3.x

## Installation

Install the package via composer:

```bash
composer require zephyrphp/blade-ui
```

You **must** modify your `tailwind.config.js` file to include some views:

```js
content: [
    // ...
    './vendor/zephyrphp/blade-heroicons/**/*.blade.php',
    './vendor/zephyrphp/blade-ui/**/*.blade.php'
]
```

You **must** modify your `resources/css/app.css` file to include some variables:

```css
@layer base {
    :root {
        --background: 0 0% 100%;
        --foreground: 20 14.3% 4.1%;
        --card: 0 0% 100%;
        --card-foreground: 20 14.3% 4.1%;
        --popover: 0 0% 100%;
        --popover-foreground: 20 14.3% 4.1%;
        --primary: 47.9 95.8% 53.1%;
        --primary-foreground: 26 83.3% 14.1%;
        --secondary: 60 4.8% 95.9%;
        --secondary-foreground: 24 9.8% 10%;
        --muted: 60 4.8% 95.9%;
        --muted-foreground: 25 5.3% 44.7%;
        --accent: 60 4.8% 95.9%;
        --accent-foreground: 24 9.8% 10%;
        --destructive: 0 84.2% 60.2%;
        --destructive-foreground: 60 9.1% 97.8%;
        --creative: 142.1 76.2% 36.3%;
        --creative-foreground: 355.7 100% 97.3%;
        --border: 20 5.9% 90%;
        --input: 20 5.9% 90%;
        --ring: 20 14.3% 4.1%;
        --radius: 0.3rem;
    }

    .dark {
        --background: 20 14.3% 4.1%;
        --foreground: 60 9.1% 97.8%;
        --card: 20 14.3% 4.1%;
        --card-foreground: 60 9.1% 97.8%;
        --popover: 20 14.3% 4.1%;
        --popover-foreground: 60 9.1% 97.8%;
        --primary: 47.9 95.8% 53.1%;
        --primary-foreground: 26 83.3% 14.1%;
        --secondary: 12 6.5% 15.1%;
        --secondary-foreground: 60 9.1% 97.8%;
        --muted: 12 6.5% 15.1%;
        --muted-foreground: 24 5.4% 63.9%;
        --accent: 12 6.5% 15.1%;
        --accent-foreground: 60 9.1% 97.8%;
        --destructive: 0 62.8% 30.6%;
        --destructive-foreground: 60 9.1% 97.8%;
        --creative:142.1 70.6% 45.3%;
        --creative-foreground:144.9 80.4% 10%;
        --border: 12 6.5% 15.1%;
        --input: 12 6.5% 15.1%;
        --ring: 35.5 91.7% 32.9%;
    }
}
```

You **can** publish the config file with:

```bash
php artisan vendor:publish --tag="blade-ui-config"
```

This is the contents of the published config file:

```php
return [

    /*
    |-----------------------------------------------------------------
    | Default Namespace
    |-----------------------------------------------------------------
    |
    | This config option allows you to define a default namespace for
    | your ui components. By default, components will look in the
    | "ui" namespace. You can change this value to any string.
    | usage: <x-ui::button />
    */

    'namespace' => 'ui',

];
```

You **can** publish the views using

```bash
php artisan vendor:publish --tag="blade-ui-views"
```

## Usage

### Alert

```php
// Default
<x-alert>
    <x-alert.heading>Heads up!</x-alert.heading>
    <x-alert.subheading>You can add components to your app using the cli.</x-alert.subheading>
</x-alert>

// Variants
<x-ui::alert variant="creative">...</x-ui::alert>
<x-ui::alert variant="destructive">..</x-ui::alert>
```

### Avatar

```php
<x-avatar>
    <x-avatar.image alt="..." src="..."/>
</x-avatar>
```

### Badge

```php
// Default
<x-badge>Badge</x-avatar>

// Variant
<x-badge variant="creative">Badge</x-avatar>
<x-badge variant="destructive">Badge</x-avatar>
<x-badge variant="secondary">Badge</x-avatar>
<x-badge variant="outline">Badge</x-avatar>
```

### Button

```php
// Default
<x-ui::button />

// Variants
<x-ui::button variant="destructive" />
<x-ui::button variant="filled" />
<x-ui::button variant="ghost" />
<x-ui::button variant="outline" />

// Sizes
<x-ui::button size="lg" />
<x-ui::button size="sm" />
```

### Card

```php
<x-ui::card>
    <x-ui::card.header>
        <x-ui::card.heading>Heading</x-ui::card.heading>
        <x-ui::card.subheading>Subheading</x-ui::card.subheading>
    </x-ui::card.header>
    <x-ui::card.content>
        Content
    </x-ui::card.content>
    <x-ui::card.footer>
        Footer
    </x-ui::card.footer>
</x-ui::card>
```

### Dialog

```php
<x-ui::dialog>
    <x-ui::dialog.trigger>Trigger</x-ui::dialog.trigger>
    <x-ui::dialog.content>
        <x-ui::dialog.header>
            <x-ui::dialog.heading>Heading</x-ui::dialog.heading>
            <x-ui::dialog.subheading>Subheading</x-ui::dialog.subheading>
        </x-ui::dialog.header>
        
        <div>Content</div>
        
        <x-ui::dialog.footer>
            Footer
        </x-ui::dialog.footer>
    </x-ui::dialog.content>
</x-ui::dialog>
```

### Dropdown

```php
<x-ui::dropdown>
    <x-ui::dropdown.trigger>Trigger</x-ui::dropdown.trigger>
    <x-ui::dropdown.content>
        <div>Content</div>
    </x-ui::dropdown.content>
</x-ui::dropdown>
```

### Form

```php
// Default
<x-ui::form.field>
    <x-ui::form.label>Username</x-ui::form.label>
    <x-ui::form.description>Username should be unique.</x-ui::form.description>
    <x-ui::form.input name="username" />
    <x-ui::form.error name="username" />
</x-ui::form.field>

// Shorthand
<x-ui::form.input label="Username" description="Username should be unique." name="username" />

// Input size
<x-ui::form.input name="username" size="sm" />

// Checkbox
<x-ui::form.checkbox label="Remember me" name="remember" />

// Select
<x-ui::form.select label="Country" name="country">
    <x-ui::form.option value="us">United States</x-ui::form.option>
    <x-ui::form.option value="fr">France</x-ui::form.option>
</x-ui::form.select>

// Textarea
<x-ui::form.textarea label="Bio" name="bio"></x-ui::form.textarea>
```

### Icon

> See [Zephyr Blade Heroicons](https://github.com/zephyrphp/blade-heroicons).

```php
// Default
<x-ui::icon name="academic-cap"/>

// Variants
<x-ui::icon name="academic-cap" variant="micro"/>
<x-ui::icon name="academic-cap" variant="mini"/>
<x-ui::icon name="academic-cap" variant="solid"/>
```

### Link

```php
// Default
<x-ui::link href="...">Link</x-ui::link>

// Current
<x-ui::link current href="...">Current Link</x-ui::link>
```

### Menu

```php
// Default
<x-ui::menu>
    <x-ui::menu.item href="...">Link</x-ui::menu.item>
    <x-ui::menu.item href="...">Link</x-ui::menu.item>
    <x-ui::menu.separator/>
    <x-ui::menu.item href="...">Link</x-ui::menu.item>
</x-ui::menu>

// Group
<x-ui::menu>
    <x-ui::menu.group heading="Group">
        <x-ui::menu.item href="...">Link</x-ui::menu.item>
        <x-ui::menu.item href="...">Link</x-ui::menu.item>
    </x-ui::menu.group>
</x-ui::menu>
```

### Mockup

```php
// Code
<x-ui::mockup.code>
    <pre><code>...</code></pre>
</x-ui::mockup.code>
```

### Navbar

```php
// Default
<x-ui::navbar>
    <x-ui::navbar.item href="...">Link</x-ui::navbar.item>
    <x-ui::navbar.item href="...">Link</x-ui::navbar.item>
</x-ui::navbar>

// Current
<x-ui::navbar>
    <x-ui::navbar.item current href="...">Link</x-ui::navbar.item>
</x-ui::navbar>

// Icon
<x-ui::navbar>
    <x-ui::navbar.item href="..." icon="home">Link</x-ui::navbar.item>
</x-ui::navbar>
```

### Navlist

```php
// Default
<x-ui::navlist>
    <x-ui::navlist.item href="...">Link</x-ui::navlist.item>
    <x-ui::navlist.item href="...">Link</x-ui::navlist.item>
</x-ui::navlist>

// Group
<x-ui::navlist>
    <x-ui::navlist.group heading="Group">
        <x-ui::navlist.item href="...">Link</x-ui::navlist.item>
        <x-ui::navlist.item href="...">Link</x-ui::navlist.item>
    </x-ui::navlist.group>
</x-ui::navlist>

// Current
<x-ui::navlist>
    <x-ui::navlist.item current href="...">Link</x-ui::navlist.item>
</x-ui::navlist>

// Icon
<x-ui::navlist>
    <x-ui::navlist.item href="..." icon="home">Link</x-ui::navlist.item>
</x-ui::navlist>
```

### Separator

```php
// Default
<x-ui::separator />

// Text
<x-ui::separator text="Or" />

// Vertical
<x-ui::separator vertical />
```

### Skeleton

```php
// Default
<x-ui::skeleton class="h-full w-full" />
```

### Typography

```php
// Default
<x-ui::typography.heading>Heading</x-ui::typography.heading>
<x-ui::typography.subheading>Subheading</x-ui::typography.subheading>

// Level
<x-ui::typography.heading level="1">H1</x-ui::typography.heading>
<x-ui::typography.heading level="2">H2</x-ui::typography.heading>
<x-ui::typography.heading level="3">H3</x-ui::typography.heading>

// Size
<x-ui::typography.heading size="lg">Large Heading</x-ui::typography.heading>
<x-ui::typography.heading size="xl">Extra-Large Heading</x-ui::typography.heading>
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Fabrice Planchette](https://github.com/fabpl)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
