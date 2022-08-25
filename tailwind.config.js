const plugin = require('tailwindcss/plugin')
const theme = require('./theme.json')
const _ = require('lodash')
const themeColorsJSON = theme['settings']['color']['palette']
const themeColors = {}
const themeFontSizesJSON = theme['settings']['typography']['fontSizes']
const themeFontSizes = {}

for (let i = 0; i < themeColorsJSON.length; i++) {
  themeColors[themeColorsJSON[i]['slug']] = themeColorsJSON[i]['color']
}
for (let i = 0; i < themeFontSizesJSON.length; i++) {
  themeFontSizes[themeFontSizesJSON[i]['slug']] = themeFontSizesJSON[i]['size']
}

const globalConfig = {themeColors,themeFontSizes}

module.exports = {
  globalConfig,
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    screens: {
      'sm': '475px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      'xxl': '1440px'
    },
    fontSize: {
      'zz': ['100px', '100px'],
    },
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        md: '1.5rem',
      }
    },
    aspectRatio: {
      323: '323',
      256: '256',
      23: '23',
      16: '16',
      8: '8',
      9: '9',
      10: '10',
    },
    fontFamily: {
      'display': ['Agrandir','sans-serif'],
      'body': ['Minion', 'serif']
    },
    extend: {
      lineHeight: {
        'tighter': '1.15',
        'landHeader': '6.5',
      },
      maxWidth: {
        '60p': '60%',
        '70p': '70%',
        '80p': '80%',
        '90p': '90%'
      },
      gap: {
        '240': '15rem'
      },
      keyframes: {
        '0%': { 
          width: '0%'
        },
        '100%': {
          width: '100%'
        }
      },
      animation: {
        'draw': 'draw 4s linear'
      }
    },
  },
  variants: {
    extend: {
      grayscale: ['hover']
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
    plugin(function({ addUtilities }) {

      const colors = _.map(globalConfig['themeColors'], function(value, key) {
        return {
          ['.text-' + key]: {
            color: value,
          },
          ['.bg-' + key]: {
            backgroundColor: value,
          },
          ['.border-' + key]: {
            borderColor: value,
          },
        };
      });

      const fontSizes = _.map(globalConfig['themeFontSizes'], function(value, key) {
        return {
          ['.text-' + key]: {
            fontSize: value,
          }
        };
      });

      addUtilities([ colors, fontSizes ], {
          respectPrefix: false,
          respectImportant: false,
          variants: ['responsive','hover']
      });
    }),
  ],
}
