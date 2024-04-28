/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./resources/**/*.blade.php",
      "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php"
  ],
  theme: {
    extend: {},
  },
  plugins: [
      require('@tailwindcss/forms'),
  ],
}

