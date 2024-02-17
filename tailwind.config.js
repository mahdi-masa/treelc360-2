/** @type {import('tailwindcss').Config} */

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "resources/css/**/*.css",
    "./resources/**/*.vue",
  ],
  theme: {
    screens: {
      'mobile': '0px',
      // => @media (min-width: 0px) { ... }

      'tablet': '768px',
      // => @media (min-width: 768px) { ... }

      'pc': '1024px',
      // => @media (min-width: 1024px) { ... }

    },
    
    extend: {
      backgroundImage: {
        'footerbackground': "url('/assets/layouts/footer/footerbackground.svg')",
        'olive': "url(/assets/layouts/landing/zeytoone.png",
      },
      
    },
  },
  plugins: [],
}

