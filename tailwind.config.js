/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./resources/**/*.blade.php"
  ],
  theme: {
    extend: {},
  },
  plugins: [
      require('@tailwindcss/forms'),
  ],
}

