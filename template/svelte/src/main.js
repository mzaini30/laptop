import { createRoot } from 'svelte';
import App from "./App.svelte";
// import "./tailwind.css";

const app = createRoot(App, { target: document.getElementById("app") });

export default app;
