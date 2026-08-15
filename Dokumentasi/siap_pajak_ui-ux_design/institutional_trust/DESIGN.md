---
name: Institutional Trust
colors:
  surface: '#f8f9fa'
  surface-dim: '#d9dadb'
  surface-bright: '#f8f9fa'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f3f4f5'
  surface-container: '#edeeef'
  surface-container-high: '#e7e8e9'
  surface-container-highest: '#e1e3e4'
  on-surface: '#191c1d'
  on-surface-variant: '#43474f'
  inverse-surface: '#2e3132'
  inverse-on-surface: '#f0f1f2'
  outline: '#747781'
  outline-variant: '#c4c6d1'
  surface-tint: '#3e5e95'
  primary: '#00193c'
  on-primary: '#ffffff'
  primary-container: '#002d62'
  on-primary-container: '#7796d1'
  inverse-primary: '#abc7ff'
  secondary: '#006b5f'
  on-secondary: '#ffffff'
  secondary-container: '#76f4e0'
  on-secondary-container: '#006f63'
  tertiary: '#735c00'
  on-tertiary: '#ffffff'
  tertiary-container: '#c6a94e'
  on-tertiary-container: '#4e3e00'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#d7e2ff'
  primary-fixed-dim: '#abc7ff'
  on-primary-fixed: '#001b3f'
  on-primary-fixed-variant: '#24467c'
  secondary-fixed: '#79f7e3'
  secondary-fixed-dim: '#59dbc7'
  on-secondary-fixed: '#00201c'
  on-secondary-fixed-variant: '#005047'
  tertiary-fixed: '#ffe085'
  tertiary-fixed-dim: '#e3c466'
  on-tertiary-fixed: '#231b00'
  on-tertiary-fixed-variant: '#574500'
  background: '#f8f9fa'
  on-background: '#191c1d'
  surface-variant: '#e1e3e4'
  surface-white: '#FFFFFF'
  border-subtle: '#E9ECEF'
  text-main: '#191C1D'
  text-muted: '#43474F'
  error-red: '#BA1A1A'
typography:
  display-lg:
    fontFamily: Inter
    fontSize: 48px
    fontWeight: '700'
    lineHeight: 60px
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Inter
    fontSize: 32px
    fontWeight: '600'
    lineHeight: 40px
    letterSpacing: -0.01em
  headline-lg-mobile:
    fontFamily: Inter
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
  title-md:
    fontFamily: Inter
    fontSize: 20px
    fontWeight: '600'
    lineHeight: 28px
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  body-sm:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '400'
    lineHeight: 20px
  label-md:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: '600'
    lineHeight: 16px
    letterSpacing: 0.05em
rounded:
  sm: 0.125rem
  DEFAULT: 0.25rem
  md: 0.375rem
  lg: 0.5rem
  xl: 0.75rem
  full: 9999px
spacing:
  base: 8px
  gutter: 24px
  margin-mobile: 16px
  margin-desktop: 40px
  container-max: 1280px
---

## Brand & Style

This design system is engineered for high-stakes institutional trust and administrative efficiency. It serves a government tax digitalization initiative, prioritizing clarity, accessibility, and professional authority.

The aesthetic adheres to **Corporate Minimalism** with a focus on data density and legibility. It utilizes a structured, grid-based layout inspired by modern Indonesian e-government portals. The visual language is intentionally "unadorned" to reduce cognitive load, employing generous whitespace to separate complex financial data sets and geometric motifs—such as sharp 45-degree angle accents—to reinforce a sense of stability and institutional order.

## Colors

The palette is anchored by a deep Navy Blue, representing institutional authority.

- **Primary (Navy Blue):** Reserved for headers, primary actions, and brand-critical navigation elements.
- **Secondary (Muted Teal):** Primarily used for success states, verification badges, and positive progress indicators.
- **Tertiary (Deep Gold):** Used sparingly for urgent tax notices, certifications, or specialized "VIP" categories.
- **Surface Palette:** Focuses on a "Pure White" container strategy over a "Cool Gray" background to create clear visual separation between the canvas and interactive content.
- **Semantic Usage:** Red is strictly reserved for penalties and validation errors. Teal is the primary indicator of a completed or "healthy" tax status.

## Typography

**Inter** is the exclusive typeface, chosen for its exceptional legibility in data-heavy environments.

- **Hierarchies:** Use `display-lg` for dashboard welcomes and high-level summaries. `headline-lg` is the standard for major section headers.
- **Numerical Data:** All currency and tax figures must utilize tabular figures (`tnum`) to ensure vertical alignment in tables.
- **Form Labels:** `label-md` should be used in all-caps for form headers to distinguish metadata from user-entered data.
- **Mobile scaling:** Headlines scale down significantly on mobile to avoid awkward line breaks in long Indonesian terminology.

## Layout & Spacing

The system employs a **Fixed Grid** for desktop to ensure a consistent, professional reading experience, and a **Fluid Grid** for mobile.

- **Desktop:** 12-column grid with a 1280px maximum width. Elements should align to the 8px base rhythm.
- **Mobile:** 4-column grid with 16px margins. 
- **Information Density:** Complex tax filing forms use a "Compact" spacing model (8px internal padding), while informational landing pages use a "Relaxed" model (24px+ padding) to improve scannability.
- **Vertical Rhythm:** All vertical spacing between components must be a multiple of 8px (e.g., 16, 24, 32, 48, 64).

## Elevation & Depth

This design system utilizes **Tonal Layering** and **Low-Contrast Outlines** to maintain a flat, modern aesthetic that feels grounded.

- **Surface Tiers:** Use the Neutral background for the page body. Primary content containers (cards, form blocks) use a white surface with a 1px border (`#E9ECEF`).
- **Interaction:** Do not use shadows to indicate hover states. Instead, use subtle background color shifts (e.g., darkening a button by 10%).
- **Modals & Overlays:** Use a Navy Blue backdrop with 15% opacity and a backdrop blur effect (8px) to provide depth without introducing heavy drop shadows.
- **Shadows:** Only use a single "Ambient" shadow for floating elements like dropdowns: `0px 4px 12px rgba(0, 45, 98, 0.08)`.

## Shapes

Shapes are conservative and geometric to reflect institutional stability. 

- **Standard Elements:** 4px (`rounded-md`) is the system standard for buttons, inputs, and standard cards.
- **Large Containers:** Main dashboard sections may use 8px (`rounded-lg`) to soften the interface slightly without appearing playful.
- **Icons:** Use a 2px stroke weight. Avoid filled icons unless indicating an "active" navigation state. Icons should be strictly geometric.

## Components

- **Buttons:** Primary buttons are Solid Navy with White text. Secondary buttons are Outlined Navy (1px). Success actions (e.g., "Kirim Laporan") use Solid Teal.
- **Input Fields:** Use 1px light gray borders. On focus, the border should thicken to 2px and change to Primary Navy. Labels must always be positioned above the field, never hidden as placeholders.
- **Data Tables:** The most critical component. Use zebra-striping with the Neutral color for alternate rows. Column headers use `label-md` with a subtle gray background.
- **Status Chips:** Use a "Light-on-Dark" style—pale background tints with high-contrast text for accessibility (e.g., a pale red background with dark red text for "Unpaid").
- **Cards:** White surfaces with a 1px border. No shadows. Used to group logically related form fields like "Personal Identity" or "Annual Income."
- **Steppers:** Horizontal steppers are used for brief flows (3 steps or less); vertical steppers are required for multi-section tax returns to keep the navigation visible during long scrolling.