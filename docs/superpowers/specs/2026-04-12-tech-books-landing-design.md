# Tech Books Landing Design

## Goal

Build the public home page as a conversion-focused e-commerce landing page for technology books. The page should make published books easy to browse and route purchase intent through an internal redirect so clicks can be tracked before sending visitors to Hotmart.

## Visual Direction

Use the `Storefront conversion` direction:

- Strong e-commerce product showcase.
- Clear prices and purchase CTAs.
- Technology-focused copy and product framing.
- Polished layout with header, footer, carousel, product grid, categories, trust/benefit blocks, and a short FAQ.

Avoid a simple empty page. The page should feel like a real storefront.

## Page Structure

The home page remains a Blade view at `resources/views/home.blade.php`.

Sections:

- Header with logo `E-TI Solucoes` and anchor links: `Destaques`, `Catalogo`, `Categorias`, `Contato`.
- Hero with a direct technology-books value proposition and CTA to the catalog.
- Featured carousel using books marked as featured and published.
- Product catalog grid with all published books.
- Category strip using categories that have published books.
- Benefit section focused on practical tech learning and Hotmart checkout.
- Short FAQ.
- Footer with brand, navigation, and contact/social links if available.

## Data Flow

`HomeController` should pass:

- `featuredBooks`: published books with `is_featured = true`, ordered by `sort_order` then latest id.
- `books`: all published books, ordered by `sort_order` then latest id.
- `categories`: categories that have published books.

Book cards use:

- `title`
- `author`
- `price`
- `description`
- `cover_image_url`
- `category`
- internal purchase URL

If no published books exist, render a polished empty state: `Catalogo em atualizacao`.

## Purchase Flow

Add an internal GET route:

`/livros/{book}/comprar`

Behavior:

- Only allow published books.
- Increment `books.clicks`.
- Redirect to `book.hotmart_url`.

Use this route for every `Comprar agora` CTA instead of linking directly to Hotmart.

## Error Handling

If an unpublished or missing book is requested through the purchase route, return a normal 404.

If a book has no cover image URL, show a stable visual fallback so cards do not collapse.

## Testing

Feature tests should cover:

- Home page renders the Blade landing page with published book data.
- Unpublished books are not shown on the home page.
- Purchase route increments `clicks` and redirects to Hotmart.
- Purchase route returns 404 for unpublished books.

Run focused tests after implementation:

`php artisan test --compact tests/Feature/HomeLandingTest.php`

Also run formatting for PHP changes:

`vendor/bin/pint --dirty --format agent`
