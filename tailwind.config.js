/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        ';/vendor/symfony/twig-bridge/Resources/views/Form/tailwind_2_layout.html.twig',
        './templates/**/*.html.twig',
        './assets/**/*.css'],

  theme: {
    extend: {},
  },
  plugins: [
      require('@tailwindcss/forms'),
      require("daisyui")
  ],
}
