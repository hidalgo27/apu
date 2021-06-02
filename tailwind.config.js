const colors = require('tailwindcss/colors')
module.exports = {
  purge: [
      './storage/framework/views/*.php',
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
      colors: {
          gray: colors.coolGray,
          blue: colors.lightBlue,
          red: colors.rose,
          pink: colors.fuchsia,
          primary: '#004b7c',
          secondary: '#8a0910',
          black: '#000000',
          white: '#ffffff',

      },
      fontFamily: {
          sans: ['Montserrat', 'sans-serif'],
          serif: ['Merriweather', 'serif'],
          cinzel: ['Cinzel', 'serif'],
          montserrat: ['Montserrat', 'serif'],
          lusitana: ['Lusitana', 'serif'],
      },
      extend: {
          spacing: {
              '128': '32rem',
              '144': '36rem',
          },
          borderRadius: {
              '4xl': '2rem',
          },

          backgroundImage: theme => ({
              // 'hero-pattern': "url('/img/hero-pattern.svg')",
              'footer-texture': "url('/images/footer-textil-bg.png')",
          }),
          backgroundSize: {
              '12': '3rem',
          }

      },
  },
  variants: {
    extend: {},
  },
  plugins: [
      require('@tailwindcss/aspect-ratio'),
  ],
}
