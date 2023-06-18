/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./views/**/*.php"],
  theme: {
    extend: {
      width: {
        '128': '32rem',
        '136': '34rem',
        '140': '36rem',
        '160': '40rem',
      },
      fontFamily: {
        poppins: ['Poppins'],
      },
      colors: {
        'primary': "#17223B",
        'secondary': "#263859",
        'danger': "#e74c3c"
      }
    },
  },
  plugins: [],
}


