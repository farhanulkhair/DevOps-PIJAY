/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'hero-pattern': "url('/img/hero-pattern.svg')",
        'footer-texture': "url('/img/footer-texture.png')",
      },
      fontFamily: {
        poppin: ['Poppins', 'sans-serif'],
        sedan: ['sedan'],
      },
      colors: {
        customBg: '#11212D',
        customNav: '#06141B',
        customCard: '#4a5c6a',
      },
      boxShadow: {
        custom: '0 0 10px 0 #9ba8ab',
      },
    },
  },
  plugins: [],
}

