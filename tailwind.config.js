const defaultTheme = require('tailwindcss/defaultTheme')
const plugin = require('tailwindcss/plugin')

module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  darkMode: 'class',
  safelist: [
    {
      pattern: /^badge/,
    },
    {
      pattern: /^text/,
    },
    {
      pattern: /^btn/,
    },
    {
      pattern: /^fill/,
    },
  ],
  theme: {
    screens: {
      'xs': '375px',
      ...defaultTheme.screens,
    },
    fontFamily: {
      sans: ['Inter', ...defaultTheme.fontFamily.sans],
    },
    extend: {
      colors: {
        primary: {
          300: '#BFDCE5',
          400: '#91BAC7',
          500: '#91BAC7',
          900: '#003647',
        },
        gray: {
          300: '#DCE2E4',
          400: '#8B9CA1',
          900: '#111111',
        },
        transparent: 'transparent',
      },
      typography: {
        DEFAULT: {
          css: {
            lineHeight: 1.75,
            p: {
              'textAlign': 'justify',
            },
            h2: {
              'marginBottom': '0.5em',
            },
          },
        },
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
    require('./resources/plugins/button'),
    require('./resources/plugins/badge'),
  ],
};
