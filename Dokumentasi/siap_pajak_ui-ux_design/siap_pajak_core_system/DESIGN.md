---
name: SIAP Pajak Core System
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
  secondary: '#006a6a'
  on-secondary: '#ffffff'
  secondary-container: '#8cf3f3'
  on-secondary-container: '#007070'
  tertiary: '#735c00'
  on-tertiary: '#ffffff'
  tertiary-container: '#cca730'
  on-tertiary-container: '#4f3e00'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#d7e2ff'
  primary-fixed-dim: '#abc7ff'
  on-primary-fixed: '#001b3f'
  on-primary-fixed-variant: '#24467c'
  secondary-fixed: '#8cf3f3'
  secondary-fixed-dim: '#6fd7d6'
  on-secondary-fixed: '#002020'
  on-secondary-fixed-variant: '#004f4f'
  tertiary-fixed: '#ffe088'
  tertiary-fixed-dim: '#e9c349'
  on-tertiary-fixed: '#241a00'
  on-tertiary-fixed-variant: '#574500'
  background: '#f8f9fa'
  on-background: '#191c1d'
  surface-variant: '#e1e3e4'
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
  container-max: 1280px
  gutter: 24px
  margin-mobile: 16px
  margin-desktop: 40px
---

## Brand & Style
This design system is engineered for high-stakes institutional trust and administrative efficiency. It serves the Indonesian government's tax digitalization initiative, prioritizing clarity, accessibility, and professional authority. 

The aesthetic adheres to **Corporate Minimalism** with a focus on data density and legibility. It utilizes a structured, grid-based layout inspired by modern Indonesian e-government portals. The visual language is intentionally "unadorned" to reduce cognitive load, employing generous whitespace to separate complex financial data sets and geometric motifs to reinforce a sense of stability and institutional order.

## Colors
The palette is anchored by **Deep Navy Blue (#002D62)**, representing institutional authority and the Indonesian Ministry of Finance. 

- **Primary (Deep Navy):** Used for headers, primary actions, and brand-critical elements.
- **Secondary (Muted Teal):** Used for success states, secondary navigation, and progress indicators.
- **Tertiary (Soft Gold):** Used sparingly for highlighting critical notices, certifications, or specific "VIP" tax categories.
- **Neutrals:** A range of cool grays (from #F8F9FA to #343A40) provides the foundation for data tables and form structures.
- **Semantic Colors:** Standardized Red (#D32F2F) for errors/penalties and Amber (#FFA000) for warnings.

## Typography
**Inter** is the exclusive typeface for this design system, chosen for its exceptional legibility in data-heavy environments. 

- **Hierarchies:** Use `display-lg` for dashboard overviews and `headline-lg` for section titles.
- **Data Tables:** Use `body-sm` for table content to maximize information density without sacrificing readability.
- **Labels:** Use uppercase `label-md` for form field headers and table column headers to create a clear visual distinction from user input.
- **Numerical Data:** Always use tabular figures (tnum) to ensure tax amounts align vertically in columns.

## Layout & Spacing
The layout follows a **Fixed Grid** model for desktop to maintain professional constraints, and a **Fluid Grid** for mobile devices.

- **Desktop:** 12-column grid, 1280px max-width, center-aligned.
- **Tablet:** 8-column grid, 24px gutters.
- **Mobile:** 4-column grid, 16px margins.
- **Vertical Rhythm:** All components and spacing increments are multiples of the 8px base unit. 
- **Information Density:** For complex tax forms, use a "Dense" variant with 4px/8px internal padding, while marketing or landing pages use "Standard" 16px/24px spacing.

## Elevation & Depth
This design system utilizes **Tonal Layering** and **Low-Contrast Outlines** rather than heavy shadows to maintain a flat, modern aesthetic.

- **Surface Tiers:** The background uses the Neutral background (#F8F9FA). Secondary containers (like sidebars) use Pure White (#FFFFFF) with a 1px border (#E9ECEF).
- **Interactive States:** Instead of elevation, use subtle color shifts. A button hover state should darken the fill color by 10% rather than increasing shadow depth.
- **Modals:** Use a soft, 15% opacity Navy Blue backdrop blur with a sharp 2px border for the modal container to distinguish it from the background.

## Shapes
Shapes are conservative and geometric. **Soft (0.25rem)** roundedness is the standard for buttons, input fields, and cards. This slight rounding softens the institutional feel enough to be modern without appearing "playful" or consumer-grade.

- **Standard Elements:** 4px (0.25rem) corner radius.
- **Large Containers:** 8px (0.5rem) corner radius for main dashboard cards.
- **Icons:** Use 24px bounding boxes with a 2px stroke weight, following a strictly geometric, non-filled style.

## Components
- **Buttons:** Primary buttons use Deep Navy with White text. Secondary buttons use a Navy outline with 1px thickness. High-priority "Pay Now" actions may use the Secondary Teal.
- **Input Fields:** Use 1px borders (#CED4DA) that turn Primary Navy on focus. Labels must always be visible (no floating labels) to ensure accessibility for older users.
- **Data Tables:** The core of the system. Use zebra-striping (Neutral gray) for long rows. Row height is fixed at 48px for standard density.
- **Status Chips:** Use a "Pastel-on-Dark" approach—low-saturation background with high-saturation text (e.g., "Success" is a very pale teal background with dark teal text).
- **Steppers:** Vertical steppers are preferred for long tax filing processes to maintain a clear sense of progress on the left-hand side of the viewport.
- **Cards:** White background, 1px border, no shadow. Used to group related form sections (e.g., "Identity Details", "Income Source").