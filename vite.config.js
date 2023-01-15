import { resolve } from "path";
import { readdirSync, existsSync } from "fs";
import kirby from "vite-plugin-kirby";

const templates = readdirSync("assets/src/templates")
  .filter((name) => !/^\./.test(name))
  .filter((name) => existsSync(`assets/src/templates/${name}/index.js`));

const input = Object.fromEntries([
  ...templates.map((name) => [name, `assets/src/templates/${name}/index.js`]),
  ["shared", "assets/src/index.js"],
]);

export default ({ mode }) => ({
  root: "assets/src",
  base: mode === "development" ? "/" : "/dist/",

  resolve: {
    alias: [{ find: "@", replacement: resolve(__dirname, "assets/src") }],
  },

  build: {
    outDir: resolve(process.cwd(), "public/dist"),
    emptyOutDir: true,
    rollupOptions: { input },
  },

  plugins: [kirby()],
});
