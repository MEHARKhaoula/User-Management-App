module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontSize: {
        'base': '16px', // You can customize this value
      },
    },
  },
  plugins: [require('daisyui')],
}