import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'primary': '#00193c',
                'on-primary': '#ffffff',
                'primary-container': '#002d62',
                'on-primary-container': '#7796d1',
                'inverse-primary': '#abc7ff',

                'secondary': '#006b5f',
                'on-secondary': '#ffffff',
                'secondary-container': '#76f4e0',
                'on-secondary-container': '#006f63',

                'tertiary': '#735c00',
                'on-tertiary': '#ffffff',
                'tertiary-container': '#c6a94e',
                'on-tertiary-container': '#4e3e00',

                'error': '#ba1a1a',
                'on-error': '#ffffff',
                'error-container': '#ffdad6',
                'on-error-container': '#93000a',

                'surface': '#f8f9fa',
                'surface-dim': '#d9dadb',
                'surface-bright': '#f8f9fa',
                'surface-container-lowest': '#ffffff',
                'surface-container-low': '#f3f4f5',
                'surface-container': '#edeeef',
                'surface-container-high': '#e7e8e9',
                'surface-container-highest': '#e1e3e4',
                'on-surface': '#191c1d',
                'on-surface-variant': '#43474f',
                'inverse-surface': '#2e3132',
                'inverse-on-surface': '#f0f1f2',
                'surface-variant': '#e1e3e4',
                'surface-tint': '#3e5e95',

                'outline': '#747781',
                'outline-variant': '#c4c6d1',

                'primary-fixed': '#d7e2ff',
                'primary-fixed-dim': '#abc7ff',
                'on-primary-fixed': '#001b3f',
                'on-primary-fixed-variant': '#24467c',

                'secondary-fixed': '#79f7e3',
                'secondary-fixed-dim': '#59dbc7',
                'on-secondary-fixed': '#00201c',
                'on-secondary-fixed-variant': '#005047',

                'tertiary-fixed': '#ffe085',
                'tertiary-fixed-dim': '#e3c466',
                'on-tertiary-fixed': '#231b00',
                'on-tertiary-fixed-variant': '#574500',

                'background': '#f8f9fa',
                'on-background': '#191c1d',

                // Alias semantik
                'text-main': '#191C1D',
                'text-muted': '#43474F',
                'surface-white': '#FFFFFF',
                'border-subtle': '#E9ECEF',
                'error-red': '#BA1A1A',
            },
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                'display-lg': ['48px', { lineHeight: '60px', letterSpacing: '-0.02em', fontWeight: '700' }],
                'headline-lg': ['32px', { lineHeight: '40px', letterSpacing: '-0.01em', fontWeight: '600' }],
                'headline-lg-mobile': ['24px', { lineHeight: '32px', fontWeight: '600' }],
                'title-md': ['20px', { lineHeight: '28px', fontWeight: '600' }],
                'body-md': ['16px', { lineHeight: '24px', fontWeight: '400' }],
                'body-sm': ['14px', { lineHeight: '20px', fontWeight: '400' }],
                'label-md': ['12px', { lineHeight: '16px', letterSpacing: '0.05em', fontWeight: '600' }],
            },
            borderRadius: {
                'DEFAULT': '0.25rem',
                'lg': '0.5rem',
                'xl': '0.75rem',
            },
            spacing: {
                'base': '8px',
                'gutter': '24px',
                'margin-mobile': '16px',
                'margin-desktop': '40px',
                'container-max': '1280px',
            },
            boxShadow: {
                'ambient': '0px 4px 12px rgba(0, 45, 98, 0.08)',
            },
        },
    },

    plugins: [forms],
};
