import "./index.css";
console.log("shared");

import { gsap } from "gsap";

if (document.readyState === "interactive" || document.readyState === "complete") {
    resolve();
} else {
    window.addEventListener("DOMContentLoaded", resolve);
}

// Initialize your app
function resolve() {

    document.body.removeAttribute("unresolved");

    gsap.from("#content", { 
        duration: 1, 
        opacity: 0,
        y: 20
    });

    gsap.to("#content", { 
        duration: 1, 
        opacity: 1,
        y: 0
    });

}