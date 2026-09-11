# Belen's Special Palabok — Responsive Product Landing Page

**Course:** ITST 302 – Client-Server Technologies
**Mini Project 04:** Responsive Product Landing Page using Laravel, Tailwind CSS, and Blade Components
**Business Featured:** Belen's Special Palabok (a real home-based Filipino food business specializing in palabok and noodle dishes)

---

## 1. Introduction

**What is a Product Landing Page?**
A product landing page is a single, focused web page designed to introduce a product or service, communicate its value, and guide visitors toward a specific action — signing up, ordering, or contacting the business. Unlike a full multi-page website, everything a visitor needs to decide is placed on one scrollable page: who the business is, what they offer, why it's good, what it costs, and how to get it.

**Why landing pages matter for businesses**
For a small, home-based food business like Belen's Special Palabok, a landing page is often the *only* professional online presence a customer sees. It replaces word-of-mouth with a page that's available 24/7, builds trust through clear branding and testimonials, and turns casual visitors ("someone who saw a Facebook post") into paying customers ("someone who just placed an order").

**Purpose of this project**
This project transforms Belen's Special Palabok — a real, existing food business — from a business that only takes orders through chat messages into one with a modern, responsive, professional online storefront. The goal was to apply Laravel Blade components and Tailwind CSS to build a maintainable, reusable frontend, following the same component-based approach used in real production Laravel applications.

---

## 2. Objectives

By completing this activity, the following learning objectives were accomplished:

- Built a fully responsive interface using Tailwind CSS utility classes.
- Understood and applied component-based frontend architecture in Laravel.
- Created seven reusable Blade Components (`navbar`, `hero`, `feature-card`, `pricing-card`, `testimonial-card`, `button`, `footer`).
- Applied responsive layouts using Flexbox and CSS Grid across breakpoints (mobile, tablet, laptop, desktop).
- Practiced clean UI/UX design: consistent typography, spacing, color palette, and visual hierarchy.
- Documented the frontend architecture and design decisions in this README.
- Prepared the project for portfolio publication via GitHub and LinkedIn.

---

## 3. Responsive Web Design

**Mobile-First Design**
The page was built starting from the smallest screen size and scaled up. Base Tailwind classes target mobile phones by default, with `sm:`, `md:`, `lg:`, and `xl:` prefixes progressively adding layout changes for larger screens (e.g., a single-column feature list on mobile becomes a 3-column grid on desktop).

**Responsive Breakpoints used**
| Breakpoint | Width | Target Device |
|---|---|---|
| default | < 640px | Mobile phones |
| `sm:` | ≥ 640px | Large phones |
| `md:` | ≥ 768px | Tablets |
| `lg:` | ≥ 1024px | Laptops |
| `xl:` | ≥ 1280px | Desktops |

**Flexbox**
Used for the navbar (logo left, links center, buttons right), the hero section (text and image side-by-side on desktop, stacked on mobile), and the footer's link columns.

**CSS Grid**
Used for the Features section (`grid-cols-1 sm:grid-cols-2 lg:grid-cols-3`), the Pricing section (`grid-cols-1 md:grid-cols-3`), and the Testimonials section (`grid-cols-1 md:grid-cols-3`).

**Why responsive design matters**
Most customers of a small food business discover it through a phone, usually via a shared Facebook or Messenger link. If the page doesn't work well on mobile, the business effectively loses the majority of its potential customers. Responsive design ensures the ordering flow, pricing, and contact information are equally usable whether someone visits from a phone at a jeepney stop or a desktop at home.

---

## 4. Tailwind CSS

**Utility-First CSS**
Instead of writing custom CSS classes and switching between HTML and stylesheet files, Tailwind lets styling be applied directly in the markup using small, single-purpose classes (`flex`, `px-6`, `rounded-2xl`, `shadow-lg`). This keeps styling co-located with structure, which is especially useful when styling is done per-component, as in Blade Components.

**Advantages used in this project**
- **Speed:** entire sections were styled without leaving the Blade file.
- **Consistency:** a shared spacing/color scale (Tailwind's design tokens) keeps padding, margins, and colors uniform across sections.
- **No unused CSS:** Tailwind's JIT compiler only ships the classes actually used, keeping the final CSS bundle small.

**Responsive utility classes — examples from the project**
```html
<!-- Hero heading: smaller on mobile, larger on desktop -->
<h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold">

<!-- Features grid: 1 column on mobile, 3 on desktop -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

<!-- Navbar links: hidden on mobile, visible from md breakpoint -->
<div class="hidden md:flex items-center gap-8">
```

**Component styling example (pricing card hover effect)**
```html
<div class="rounded-3xl border border-gray-200 p-8 shadow-sm hover:shadow-xl
            hover:-translate-y-1 transition-all duration-300">
```

---

## 5. Blade Components

**What are Blade Components?**
Blade Components are self-contained, reusable pieces of a Laravel view — similar to components in React or Vue, but rendered server-side using Laravel's Blade templating engine. A component is a `.blade.php` file that can accept props (data) and be reused anywhere with `<x-component-name />`.

**Components built for this project**
```
resources/views/components/
├── navbar.blade.php           → sticky top navigation with logo, links, CTA buttons
├── hero.blade.php             → product headline, description, CTAs, hero image
├── feature-card.blade.php     → icon + title + description, reused 6 times
├── pricing-card.blade.php     → plan name, price, feature list, subscribe button, reused 3 times
├── testimonial-card.blade.php → customer photo, name, position, review, reused 3 times
├── button.blade.php           → shared button styling (primary / secondary variants)
└── footer.blade.php           → company info, quick links, socials, copyright
```

**Sample usage (Features section calling `feature-card` six times)**
```blade
<x-feature-card
    icon="🍜"
    title="Made Fresh Daily"
    description="Every batch of palabok sauce is cooked fresh each morning, never reheated from frozen stock." />

<x-feature-card
    icon="🚴"
    title="Same-Day Delivery"
    description="Order before 11 AM and get it delivered hot to your door the same day." />
```

**Why reusable components improve maintainability**
Before components, changing the look of a "feature" block would mean editing repeated HTML in six different places. With `feature-card.blade.php`, that markup exists in exactly one file — updating padding, colors, or the icon style automatically applies everywhere the component is used. This mirrors how production Laravel teams structure large applications: one source of truth per UI pattern.

**Benefits of modular UI development**
- Faster development — new sections are built by composing existing components.
- Fewer bugs — a fix in one component file fixes every instance of it.
- Easier collaboration — a teammate can build `pricing-card.blade.php` without touching the hero section.
- Cleaner page files — `pages/home.blade.php` reads like an outline (`<x-hero />`, `<x-feature-card />`, `<x-pricing-card />`) instead of a wall of HTML.

---

## 6. User Interface Design

- **Color Palette:** A warm, appetite-appropriate palette built around a deep red/orange primary (evoking the annatto-orange color of palabok sauce) paired with a cream/off-white background and dark neutral text — chosen to feel food-forward and inviting rather than generic "startup blue."
- **Typography:** `Poppins` (bold, rounded, friendly) for headings to give the brand personality; `Inter` for body text for clean readability at small sizes.
- **Iconography:** Simple emoji/line icons used inside feature cards to keep the interface lightweight without adding icon-font dependencies.
- **Button Styles:** A shared `<x-button>` component defines two variants — a solid primary button (for "Order Now" / "Get Started") and an outlined secondary button (for "Learn More") — so every call-to-action across the page looks consistent.
- **Card Design:** Rounded corners (`rounded-2xl`/`rounded-3xl`), soft shadows that intensify on hover, and consistent internal padding are used across feature, pricing, and testimonial cards so the whole page feels like one cohesive design system.
- **Layout Consistency:** All sections share the same horizontal max-width container (`max-w-7xl`) and vertical rhythm (`py-24`), so the page has a predictable, professional flow from section to section.

These choices work together to build trust: consistent, polished design signals a business that takes its product seriously, which matters for a home-based food seller competing for attention against established restaurant chains.

---

## 7. Folder Structure

```
week05-product-landing-page/
│
├── app/                        → Laravel application logic (routes to controllers if added later)
├── resources/
│   ├── views/
│   │   ├── layouts/            → app.blade.php — the master HTML shell every page extends
│   │   ├── components/         → reusable Blade Components (navbar, hero, cards, footer, button)
│   │   └── pages/              → home.blade.php — the actual landing page content
│   ├── css/                    → app.css (Tailwind directives + custom base styles)
│   └── js/                     → app.js (Vite entry point)
├── routes/
│   └── web.php                 → maps "/" to the home page view
├── public/                     → compiled/static assets served by the browser
├── screenshots/                → desktop/tablet/mobile screenshots, before-and-after images
├── documentation/               → before-and-after comparison assets, planning notes
├── preview/                     → static index.html for previewing the design without a Laravel install
├── tailwind.config.js / postcss.config.js / vite.config.js → build tooling configuration
├── package.json                 → npm dependencies (Tailwind, Vite)
├── SETUP.md                     → step-by-step setup instructions for this project
└── README.md                    → this file
```

---

## 8. Screenshots

> Screenshots are added after running the project locally and testing responsiveness (see `SETUP.md`). Place each file in `/screenshots` using the names below, then reference them here.

- `screenshots/DESKTOP_VIEW.png` — Desktop view
- `screenshots/TABLET_VIEW.png` — Tablet view
- `screenshots/MOBILE_VIEW.png` — Mobile view
- `screenshots/NAV_BAR.png` — Navigation bar
- `screenshots/HERO_SECTION.png` — Hero section
- `screenshots/FEATURE_SECTION.png` — Features section
- `screenshots/PRICING_SECTION.png` — Pricing section
- `screenshots/TESTIMONIALS.png` — Testimonials section
- `screenshots/FOOTER.png` — Footer
- `screenshots/VSCODE_STRUCTURE.png` — VS Code project structure
- `screenshots/BLADE_COMPONENT_FOLDER.png` — Blade components folder
- `screenshots/GITHUB_REPOSITORY.png` — GitHub repository

---

## 9. Before-and-After Comparison

| Stage | Description |
|---|---|
| **Before** | Initial wireframe / low-fidelity layout — plain HTML structure with no styling, used to plan section order (navbar → hero → features → showcase → pricing → testimonials → CTA → footer). |
| **After** | Final polished, responsive interface using Tailwind CSS and Blade Components, with a consistent color palette, typography, spacing, and hover interactions across all devices. |

Save the actual before/after images in `documentation/before.png` and `documentation/after.png`.

---

## Tech Stack

- **Laravel** (Blade templating engine, routing)
- **Tailwind CSS** (utility-first styling)
- **Vite** (asset bundling)
- **Blade Components** (reusable UI)

## Local Setup

See [`SETUP.md`](./SETUP.md) for full installation and run instructions, including an instant static preview at `preview/index.html` that requires no Laravel/Composer setup.

## Author

Built as part of ITST 302 – Client-Server Technologies, Week 5 Laboratory Activity (Mini Project 04), featuring the real business **Belen's Special Palabok**.
