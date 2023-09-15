/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.{php,css,js}",
  ],
  theme: {
    extend: {},
  },
  plugins: [
      '@tailwindcss/forms'
  ],
}

