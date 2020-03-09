const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  theme: {
    fontFamily: {
      sans: [ 'Nunito', ...defaultTheme.fontFamily.sans ],
    },
    extend: {},
  },
  variants: {},
  plugins: [
    require('@tailwindcss/custom-forms')
  ],
}
