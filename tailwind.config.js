module.exports = {
  content: ["./*.{html,php,js}", "./components/*.php", "./js/*.js"],
  theme: {
    extend: {
      backgroundImage: {
        "gradient-radial": "radial-gradient(var(--tw-gradient-stops))",
        "card-gradient":
          "linear-gradient(0deg, #1a1a1a 0%, rgba(26, 26, 26, 1) 10%, rgba(26, 26, 26, 0.79) 30%, transparent 100%)",
      },
      colors: {
        primary: "#2493b2",
        secondary: "#fff4f3",
        lightbg: "#e6f4f8", // Light background color
      },
      fontFamily: {
        montserrat: ["Montserrat", "sans-serif"], // Montserrat font
      },
      textShadow: {
        sm: "1px 1px 2px rgba(255, 255, 255, 0.5)", // Light white shadow
        DEFAULT: "2px 2px 4px rgba(255, 255, 255, 0.7)", // Default white shadow
        lg: "3px 3px 6px rgba(255, 255, 255, 0.9)", // Larger white shadow
      },
      maxHeight: {
        40: "10rem",
      },
      keyframes: {
        spinOnce: {
          "0%": { transform: "rotate(0deg)" },
          "100%": { transform: "rotate(360deg)" },
        },
        fadeIn: {
          "0%": { opacity: "0" },
          "100%": { opacity: "1" },
        },
        slideUp: {
          "0%": { transform: "translateY(50px)", opacity: "0" },
          "100%": { transform: "translateY(0)", opacity: "1" },
        },
        bounceIn: {
          "0%, 20%, 40%, 60%, 80%, 100%": {
            animationTimingFunction: "cubic-bezier(0.215, 0.61, 0.355, 1)",
          },
          "0%": {
            opacity: "0",
            transform: "scale3d(0.2, 0.2, 0.2)",
          },
          "20%": {
            transform: "scale3d(1.2, 1.2, 1.2)",
          },
          "40%": {
            transform: "scale3d(0.85, 0.85, 0.85)",
          },
          "60%": {
            opacity: "1",
            transform: "scale3d(1.05, 1.05, 1.05)",
          },
          "80%": {
            transform: "scale3d(0.98, 0.98, 0.98)",
          },
          "100%": {
            transform: "scale3d(1, 1, 1)",
          },
        },
        glassPulse: {
          "0%": { backdropFilter: "blur(0px)", opacity: "0.8" },
          "50%": { backdropFilter: "blur(4px)", opacity: "1" },
          "100%": { backdropFilter: "blur(0px)", opacity: "0.8" },
        },
        popIn: {
          "0%": { transform: "scale(0.4)", opacity: "0" },
          "100%": { transform: "scale(1)", opacity: "1" },
        },
        swing: {
          "20%": { transform: "rotate(15deg)" },
          "40%": { transform: "rotate(-10deg)" },
          "60%": { transform: "rotate(5deg)" },
          "80%": { transform: "rotate(-5deg)" },
          "100%": { transform: "rotate(0deg)" },
        },
        zoomOutImage: {
          "0%": {
            transform: "scale(1)",
          },
          "100%": {
            transform: "scale(1.2)",
          },
        },
        buttonPulse: {
          "0%, 100%": {
            transform: "scale(1)",
            boxShadow: "0 0 0 0 rgba(36, 147, 178, 0.7)",
          },
          "50%": {
            transform: "scale(1.05)",
            boxShadow: "0 0 15px 5px rgba(36, 147, 178, 0.5)",
          },
        },
        shadowPop: {
          "0%": {
            transform: "scale(0.95)",
            boxShadow: "0 2px 4px rgba(0, 0, 0, 0.1)",
          },
          "100%": {
            transform: "scale(1)",
            boxShadow: "0 10px 20px rgba(0, 0, 0, 0.2)",
          },
        },
        heartbeat: {
          "0%, 100%": {
            transform: "scale(1)",
          },
          "25%": {
            transform: "scale(1.05)",
          },
          "50%": {
            transform: "scale(0.95)",
          },
          "75%": {
            transform: "scale(1.02)",
          },
        },
      },
      animation: {
        spinOnce: "spinOnce 0.5s ease-in-out forwards",
        fadeIn: "fadeIn 0.6s ease-out forwards",
        slideUp: "slideUp 0.6s ease-out forwards",
        bounceIn: "bounceIn 0.9s both",
        glassPulse: "glassPulse 1.5s ease-in-out infinite",
        popIn: "popIn 0.4s ease-out forwards",
        swing: "swing 1s ease-in-out",
        buttonPulse: "buttonPulse 1.2s ease-in-out infinite",
        shadowPop: "shadowPop 0.4s ease-out forwards",
        heartbeat: "heartbeat 1s ease-in-out infinite",
        zoomOutImage: "zoomOutImage 10s linear infinite",
      },
    },
  },
  plugins: [],
};
