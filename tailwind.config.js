/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
        PlusJakartaSans: ['Plus Jakarta Sans'],
      }
    },
  },
  plugins: [
    require("flowbite/plugin")
  ],
}

