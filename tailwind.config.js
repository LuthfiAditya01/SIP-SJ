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
      },
      screens: {
        'hp': '320px',
        // => @media (min-width: 320px) { ... }
  
        'tabletCust': '640px',
        // => @media (min-width: 640px) { ... }
  
        'laptopMed': '1448px',
        // => @media (min-width: 1024px) { ... }
  
        'desktop': '1280px',
        // => @media (min-width: 1280px) { ... }
      },
      textIndent: {
        '1': '0.25rem',   // 4px
        '2': '0.5rem',    // 8px
        '3': '0.75rem',   // 12px
        '4': '1rem',      // 16px
        '5': '1.25rem',   // 20px
        '6': '1.5rem',    // 24px
        '7': '1.75rem',   // 28px
        '8': '2rem',      // 32px
      },
    },
  },
  plugins: [
    require("flowbite/plugin")
  ],
}

